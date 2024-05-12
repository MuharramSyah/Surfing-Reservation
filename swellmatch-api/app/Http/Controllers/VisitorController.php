<?php

namespace App\Http\Controllers;

use App\Models\Attachments;
use App\Models\Board;
use App\Models\Country;
use App\Traits\ResponseTrait;
use App\Models\Visitor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\StreamedResponse;

class VisitorController extends Controller
{
    use ResponseTrait;
    protected int $cachelifetime = 30;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $params = $request->query('search');
        $sort = $request->query('sort');

        $page = $request->query('page', 1);
        $limit = $request->query('limit', 15);


        $visitor = Visitor::query();

        if($params)
        {
            foreach($params as $key => $value)
            {
                $visitor->where($key, 'like', "%{$value}%");
            }
        }

        if($sort)
        {
            foreach(explode(',',$sort) as $key => $value)
            {
                $orderBy = "ASC";
                if($value[0] ==='-') {
                    $orderBy = "DESC";
                }
                $visitor->orderBy(str_replace('-', '', $value), $orderBy);
            }
        }

        $offset = ((int)$page - 1) * (int)$limit;
        $total = $visitor->count();
        $data = $visitor->skip($offset)->take($limit)->get();

        $pagination = [
            'current_page' => (int)$page,
            'last_page' => ceil($total / (int)$limit),
            'per_page' => (int)$limit,
            'total' => $total,
            'data' => $data,
        ];

        return $this->returnData($pagination);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\+]+)$/', // Basic phone number format validation (adjust as needed)
            'country' => 'required|exists:countries,country', // Assuming countries config
            'rating' => 'required|integer|between:0,10',
            'visit_date' => 'required|date',
            'board' => 'required|exists:boards,name', // Assuming 'board' field maps to 'board_id' foreign key
            'attachment' => 'required|file|max:2048|mimes:jpeg,jpg,png', // Attachment validation
        ];
        $messages = [
            'name.required' => 'Name is required.',
            'name.min' => 'Name must be at least 3 characters long.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Please enter a valid phone number format.',
            'country.required' => 'Country is required.',
            'country.in' => 'Please select a valid country.',
            'rating.required' => 'Rating is required.',
            'rating.integer' => 'Rating must be an integer.',
            'rating.between' => 'Rating must be between 0 and 10.',
            'visit_date.required' => 'Visit date is required.',
            'visit_date.date' => 'Please enter a valid date.',
            'board_id.required' => 'Board selection is required.',
            'board_id.exists' => 'The selected board does not exist.',
            'attachment.required' => 'An attachment is required.',
            'attachment.file' => 'The attachment must be a file.',
            'attachment.max' => 'The attachment must be no larger than 2 MB.',
            'attachment.mimes' => 'The attachment must be an image (jpeg, jpg, or png).',
        ];

        $validate = Validator::make($request->all(), $rules, $messages);
        if($validate->fails()) {
            return $this->returnData(null, 'Bad Request', 'Failed', $validate->errors(), 422);
        }

        // TODO Store to DATABASE with Models through Eloquent

        // Store File to storage filesystem
        $file = $request->file('attachment');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        Storage::disk('id_cards')->put($filename, $file->getContent());

        // Store information about attachment
        $attachment = Attachments::create([
            'filename' => $filename,
            'size' => $file->getSize(),
            'mime' => $file->getClientOriginalExtension()
        ]);

        // Find by name to get an id
        $country = Country::where('country', $request->get('country'))->first();
        $board = Board::where('name', $request->get('board'))->first();

        // Merge association attribute to $request
        $request = $request->merge([
            'board_id'=>$board->id,
            'country_id'=>$country->id,
            'attachment_id' => $attachment->id,
        ]);

        // Store to database
        Visitor::create($request->all());

        return $this->returnData([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'country' => $country,
            'visit_date' => $request->get('visit_date')
        ], statusCode: 201);
    }

    /**
     * Display the specified resource.
     * @param Visitor $visitor
     * @return JsonResponse
     */
    public function show(Visitor $visitor): JsonResponse
    {
        $attachment = $visitor->attachment()->first();
        $cacheKey = uniqid().'_id_cards_'.$attachment->filename;
        Cache::put($cacheKey, $attachment->filename, now()->addMinute($this->cachelifetime)); // Store original path in Cache
        $attachment['url'] = config('app.url').'/attachment/'.$cacheKey;
        $attachment['filename'] = $cacheKey; // Replace filename with cacheKey

        $data = $visitor;
        $data['board'] = $visitor->boards()->first();
        $data['country'] = $visitor->countries()->first();
        $data['attachment'] = $attachment;
        return $this->returnData($data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param Visitor $visitor
     * @return void
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Visitor $visitor
     * @return JsonResponse
     */
    public function update(Request $request, Visitor $visitor): JsonResponse
    {
        $rules = [
            'name' => 'min:3',
            'email' => 'email',
            'phone' => 'regex:/^([0-9\+]+)$/', // Basic phone number format validation (adjust as needed)
            'country' => 'exists:countries,country', // Assuming countries config
            'rating' => 'integer|between:0,10',
            'visit_date' => 'date',
            'board' => 'exists:boards,name', // Assuming 'board' field maps to 'board_id' foreign key
            'attachment' => 'file|max:2048|mimes:jpeg,jpg,png', // Attachment validation
        ];
        $messages = [
            'name.min' => 'Name must be at least 3 characters long.',
            'email.email' => 'Please enter a valid email address.',
            'phone.regex' => 'Please enter a valid phone number format.',
            'country.in' => 'Please select a valid country.',
            'rating.integer' => 'Rating must be an integer.',
            'rating.between' => 'Rating must be between 0 and 10.',
            'visit_date.date' => 'Please enter a valid date.',
            'board_id.exists' => 'The selected board does not exist.',
            'attachment.file' => 'The attachment must be a file.',
            'attachment.max' => 'The attachment must be no larger than 2 MB.',
            'attachment.mimes' => 'The attachment must be an image (jpeg, jpg, or png).',
        ];

        $validate = Validator::make($request->all(), $rules, $messages);
        if($validate->fails()) {
            return $this->returnData(null, 'Bad Request', 'Failed', $validate->errors(), 422);
        }

        /**
         * TODO
         * - Delete existing attachment file in local storage
         * - Add new attachment
         * - Store data attribute like filename, size, and mimetype into database
         */
        if($request->has('attachment'))
        {
            Storage::disk('id_cards')->delete($visitor->attachment()->first()->filename);

            $file = $request->file('attachment');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            Storage::disk('id_cards')->put($filename, $file->getContent());

            $attachment = Attachments::find($visitor->attachment()->first()->id);
            $attachment['filename'] = $filename;
            $attachment['size'] = $file->getSize();
            $attachment['mime'] = $file->getClientOriginalExtension();
            $attachment->save();
        }

        if ($request->has('board'))
        {
            $board = Board::where('name', $request->get('board'))->first();
            $visitor['board_id'] = $board->id;
        }

        if ($request->has('country'))
        {
            $country = Country::where('country', $request->get('country'))->first();
            $visitor['country_id'] = $country->id;
        }
        $visitor->save();
        $visitor->update($request->all());
        return $this->returnData(data:$request->all(), message:"Update Successful");
    }

    /**
     * Remove the specified resource from storage.
     * @param Visitor $visitor
     * @return JsonResponse
     */
    public function destroy(Visitor $visitor): JsonResponse
    {
        /**
         * TODO
         * - Remove attachment from local storage
         * - Remove attachment record from database
         * - Delete visitor record from database
         */
        $attachment = $visitor->attachment()->first();
        Storage::disk('id_cards')->delete($attachment->filename);
        Attachments::destroy($attachment->id);
        $visitor->delete();
        return $this->returnData(null, message:"Delete successful");
    }


    /**
     * Get Buffer file from Cache key
     * @param string $cacheKey
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function getAttachment(string $cacheKey): StreamedResponse
    {
        $cache = Cache::get($cacheKey);
        if(!$cache) abort(404);

        $data = Storage::disk('id_cards')->get($cache);
        if(!$data) abort(404);

        $mime = Storage::disk('id_cards')->mimeType($cache);
        return response()->stream(function () use($data) {
            echo $data;
        }, 200, [
            'Content-Type' => $mime,
        ]);
    }

}
