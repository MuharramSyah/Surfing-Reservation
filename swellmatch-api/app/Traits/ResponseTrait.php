<?php

namespace App\Traits;

trait ResponseTrait
{
    public function returnData($data,  $message = 'Action Successful', $status = 'success', $errors= null, $statusCode = 200)
    {
        if($status === 'success'){
            return response()->json([
                'errors' => null,
                'message' => $message,
                'data' => $data,
                'status' => $status,
                'statusCode' => $statusCode
            ],
                $statusCode
            );
        }else{
            return response()->json([
                'errors' => $errors,
                'message' => $message,
                'data' => $data,
                'status' => $status,
                'statusCode' => $statusCode
            ],
                $statusCode
            );
        }
    }
}
