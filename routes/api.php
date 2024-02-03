<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/categories', function (Request $request) {
//     return "Get all categories";
// });
// Route::post('/categories', function (Request $request) {
//     return "Create 1 categories";
// });
// Route::patch('/categories/{categoryId}', function (Request $request) {
//     return "Update 1 categories";
// });
// Route::delete('/categories/{categoryId}', function (Request $request) {
//     return "Delete 1 categories";
// });

// Route::get('/products', function (Request $request) {
//     return "Get all products";
// });
// Route::post('/products', function (Request $request) {
//     return "Create 1 product";
// });
// Route::patch('/products/{productId}', function (Request $request) {
//     return "Update 1 product";
// });
// Route::delete('/products/{productId}', function (Request $request) {
//     return "Delete 1 product";
// });
// Route::get('/categories/{categoryId}/products', function (Request $request) {
//     return "Get all products belong to categoryId";
// });


Route::post('/register',[AuthController::class, "register"]);
Route::post('/login',[AuthController::class, "login"]);

Route::get('/send-test-email', function () {
    $user = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
    ];
    Mail::to($user['email'])->send(new TestMail($user));

    return "Test email sent!";
});