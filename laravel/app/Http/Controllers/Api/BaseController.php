<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class BaseController extends Controller
{
    public function sendResponse($message,$result = null) : JsonResponse
    {
        $response = [
            'data' => $result,
            'message' => $message
        ];

        $headers =['Content-Type' => 'application/json; charset=utf-8'];

        return response()->json($response,200,$headers, options: JSON_UNESCAPED_UNICODE);
    }
    public function sendError($message,$result = null, $code = 404 ) : JsonResponse
    {
        $response = [
            'data' => $result,
            'message' => $message
        ];

        $headers =['Content-Type' => 'application/json; charset=utf-8'];

        return response()->json($response,$code,$headers, options: JSON_UNESCAPED_UNICODE);
    }
}