<?php

namespace App\Exceptions;
use Illuminate\Http\JsonResponse;
use Exception;

class AlreadyAuthenticatedException extends Exception
{
    public function render(): JsonResponse
    {
        return response()->json(['message' => __('Already Authenticated')], 403);
    }
}
