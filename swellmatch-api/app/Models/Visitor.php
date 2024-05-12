<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Visitor extends Model
{
    use HasFactory;
    protected int $cacheLifetime = 60;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'rating',
        'visit_date',
        'board_id',
        'attachment_id',
        'country_id',
    ];

    protected $casts = [
        'visit_date' => 'date:Y-m-d'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'board_id',
        'country_id',
        'attachment_id',
    ];

    public function attachment()
    {
        return $this->belongsTo(Attachments::class, 'attachment_id');
    }

    public function boards()
    {
        return $this->belongsTo(Board::class, 'board_id');
    }

    public function countries()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function getAttachmentFile()
    {
        echo $this->attachment()->first()->filename;
        $cacheKey = uniqid() .'_id_cards_'. $this->attachment()->first()->filename;
        echo $cacheKey;
        $path = Storage::disk('id_cards')->path( $this->attachment()->first()->filename);
        Cache::put($cacheKey, $path, now()->addMinute($this->cacheLifetime));
        return Cache::get($cacheKey);
    }
}
