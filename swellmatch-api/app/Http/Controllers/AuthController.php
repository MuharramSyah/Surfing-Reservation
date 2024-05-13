<?php

namespace App\Http\Controllers;

use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    use ResponseTrait;

    //
    public function login(Request $request)
    {
        $rules = [
                'email'=>'required|email',
                "password" => "required",
            ];
        $message = [
            "email.required" => "Email is required",
            "email.email" => "Please enter a valid email address.",
            "password" => "Password is required"
        ];

        $validate = Validator::make($request->all(), $rules, $message);
        if($validate->fails()) {
            return $this->returnData(null, 'Bad Request', 'Failed', $validate->errors(), 422);
        }

        $credentials = request(['email', 'password']);

        if($token = auth()->attempt($credentials))
        {
            return $this->respondWithToken($token);
        }
        return $this->returnData(data:null, message: "Email or password is invalid!", statusCode: 401);
    }

    /**
     * Get the token array structure.
     * @param  string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token) :JsonResponse
    {
        return $this->returnData([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
