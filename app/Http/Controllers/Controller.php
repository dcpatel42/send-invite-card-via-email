<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendSuccess($message)
    {
        return Response::json(['message' => $message, 'success' => true], 200);
    }

    public function sendError($message)
    {
        return Response::json(['message' => $message, 'success' => true], 200);
    }

    public function sendData($data)
    {
        return Response::json($data, 200);
    }
}
