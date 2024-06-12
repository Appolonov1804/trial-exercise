<?php

use Illuminate\Support\Facades\Route;

Route::get('/clients/show/{phoneNumber}', [\App\Http\Controllers\Api\ClientController::class, 'show'])->name('clients.show');