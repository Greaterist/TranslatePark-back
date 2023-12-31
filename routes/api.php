<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\TranslationStatusController;
use App\Http\Controllers\TranslationVoteController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\WordCommentController;
use App\Http\Controllers\WordCommentVoteController;
use App\Http\Controllers\WordController;
use App\Http\Controllers\WordStatusController;
use Database\Seeders\Word_commentSeeder;
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




Route::get('/getByLang', [WordController::class, 'getByLang']);
Route::get('/getWordSearch/{text}', [WordController::class, 'getWordSearch']);
Route::apiResource('/words', WordController::class);



Route::apiResource('/translations', TranslationController::class);
Route::get('/getTranslationById/{id}', [TranslationController::class, 'getTranslationById']);




Route::apiResource('/translation_statuses', TranslationStatusController::class);
Route::apiResource('/translation_votes', TranslationVoteController::class);
Route::apiResource('/user_roles', UserRoleController::class);
Route::apiResource('/word_comment_votes', WordCommentVoteController::class);


Route::apiResource('/word_comments', WordCommentController::class);
Route::get('/getByWordId/{id}', [WordCommentController::class, 'getByWordId']);




Route::apiResource('/word_statuses', WordStatusController::class);
Route::apiResource('/languages', LanguageController::class);
