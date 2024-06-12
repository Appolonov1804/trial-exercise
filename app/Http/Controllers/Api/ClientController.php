<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Spatie\FlareClient\Http\Exceptions\NotFound;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Get(
 *     path="/api/clients/show/{phoneNumber}",
 *     summary="Получение информации о клиенте по номеру телефона",
 *     tags={"Clients"},
 *     @OA\Parameter(
 *         name="phoneNumber",
 *         in="path",
 *         required=true,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Информация о клиенте",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="client", type="array", @OA\Items(ref="#/components/schemas/Client")),
 *             @OA\Property(property="status", type="integer")
 *         )
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Клиент не найден",
 *         @OA\JsonContent(
 *             type="object",
 *             @OA\Property(property="error", type="string"),
 *             @OA\Property(property="status", type="integer")
 *         )
 *     )
 * )
 */

class ClientController extends Controller
{
    public function show(string $phoneNumber) 
    {

        $clients = Client::where('phone_number', $phoneNumber)->get();
        
        if ($clients->isNotEmpty()) {
            return response()->json([
                'client' => $clients,
                'status' => 200
            ]);
        } 
        throw new NotFound();


    }
}
