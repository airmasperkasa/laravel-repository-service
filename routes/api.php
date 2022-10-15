<?php

use App\Http\Controllers\API\V1\CandidateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Use semantic versioning
Route::prefix('v1.0.0')->group(function () {
    Route::apiResource('/candidate', CandidateController::class);
    Route::post('/candidate/upload', [CandidateController::class, 'upload']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
