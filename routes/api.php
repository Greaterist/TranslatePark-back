<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', [WordController::class, 'test']);

Route::apiResource('/words', WordController::class);
Route::apiResource('/languages', LanguageController::class);
Route::apiResource('/translations', TranslationController::class);
Route::apiResource('/translation_statuses', TranslationStatusController::class);
Route::apiResource('/translation_votes', TranslationVoteController::class);
Route::apiResource('/user_roles', UserRoleController::class);
Route::apiResource('/word_comment_votes', WordCommentVoteController::class);
Route::apiResource('/word_comments', Word_commentSeeder::class);
Route::apiResource('/word_statuses', WordStatusController::class);
