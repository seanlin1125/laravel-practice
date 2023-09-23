<?php

use App\Http\Controllers\Member\SimpleMemberController;
use App\Http\Controllers\Member\GetAllMemberController;
use App\Http\Controllers\Member\GetOneMemberController;
use App\Http\Controllers\Member\StoreMemberController;
use App\Http\Controllers\Member\PutMemberController;
use App\Http\Controllers\Member\DeleteMemberController;
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

Route::get('/members/{memberId}', GetOneMemberController::class);
Route::put('/members/{memberId}', PutMemberController::class);
Route::delete('/members/{memberId}', DeleteMemberController::class);
Route::get('/members', GetAllMemberController::class);
Route::post('/members', StoreMemberController::class);

// // 基本版CRUD(沒用FormRequest, JsonResource、沒用Service, Repository)
// Route::get('/members/{memberId}', [SimpleMemberController::class, 'show']);
// Route::put('/members/{memberId}', [SimpleMemberController::class, 'update']);
// Route::delete('/members/{memberId}', [SimpleMemberController::class, 'destroy']);
// Route::get('/members', [SimpleMemberController::class, 'index']);
// Route::post('/members', [SimpleMemberController::class, 'store']);


// 暫時沒用到
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
