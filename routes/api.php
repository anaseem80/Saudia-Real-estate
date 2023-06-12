<?php

use App\Http\Controllers\Api\AuthaaController;
use App\Http\Controllers\Api\EmailVerificationController;
use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\ResetPasswordController;

use App\Http\Controllers\Api\ForgotPasswordApiController;
use App\Http\Controllers\Api\ProfileMobileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\PersonalAccessToken;

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
 
Route::post('verification-notification', [EmailVerificationController::class, 'sendEmailverfyc'])->name('verification-notification')->middleware('sanctum');
Route::post('verify-email', [EmailVerificationController::class, 'verifyEmail'])->name('verify-email');
Route::post('forgot-password', [ResetPasswordController::class, 'forgotPassword']);
Route::post('reset-password', [ResetPasswordController::class, 'resetPassword']);
Route::post('updateUserInfo', [ProfileMobileController::class, 'updateUserInfo'])->middleware('sanctum');
Route::post('changePassword', [ProfileMobileController::class, 'changePassword'])->middleware('sanctum');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::middleware('sanctum')->get('/user', function (Request $request) {
    $token = $request->bearerToken();
    $accessToken = PersonalAccessToken::findToken($token);
    if (! $accessToken) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }
    
    $user = $accessToken->tokenable;
    return $user;
});


Route::controller(AuthaaController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->middleware('sanctum');
    Route::post('/register', 'register');
});
//->middleware(['auth:sanctum']);


Route::controller(PropertyController::class)->group(function () {
Route::get('newproperty', 'show')->name('newproperty');
Route::get('recommendhotel', 'recommendhotel')->name('recommendhotel');
Route::get('filterdata', 'filter')->name('filterdata');
Route::get('settingesapp', 'settinges')->name('settingesapp');
Route::get('forcountry', 'index')->name('forcountry');
Route::get('searchnameorcountrey', 'search')->name('searchnameorcountrey');
Route::get('catogerydata', 'create')->name('catogerydata');
Route::get('propertydetalis/{id}', 'showdetalis')->name('propertydetalis');
Route::post('updateviews/{id}', 'updateViews')->name('updateviews');
Route::post('addreport', 'addreport')->name('addreport');
Route::post('addenqueris', 'addenqueris')->name('addenqueris');
Route::post('addproperty', 'store')->name('addproperty');
Route::get('mostview', 'getMostViewedProperties')->name('mostview');
})->middleware(['auth:sanctum']);
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

