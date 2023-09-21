<?php

use App\Http\Controllers\Member\MemberController;
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
// // Resource Controller
// Route::resource('members', MemberController::class);

Route::post('/members', MemberController::class);

Route::get('/members/{memberId}', [MemberController::class, 'show']);
Route::put('/members/{memberId}', [MemberController::class, 'update']);
Route::delete('/members/{memberId}', [MemberController::class, 'destroy']);
Route::get('/members', [MemberController::class, 'index']);
// Route::post('/members', [MemberController::class, 'store']);


// 暫時沒用到
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
