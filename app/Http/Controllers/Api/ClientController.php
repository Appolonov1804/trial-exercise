<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClientController extends Controller
{
    public function show(string $phoneNumber): JsonResponse
    {
        try {
            $client = Client::where('phone_number', $phoneNumber)->firstOrFail();

            return response()->json([
                'client' => $client,
                'status' => 200
            ]);

        } catch (ModelNotFoundException $exception) {
            Log::info($exception->getMessage());
            return response()->json([
                'message' => 'Client not found',
                'status' => 404
            ], 404);
        }
    }
}