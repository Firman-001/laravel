<?php

use App\Http\Controllers\CobaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("example", function () {
    return "Example route get";
});
Route::get("coba", function () {
    return view("coba", ['nama' => 'Diki']);
});
Route::get("/example/{exampleId}", function ($exampleId) {
    return "example number : $exampleId";
    //exapmple number
});
Route::get("/posts/{postId}/comments/{commentId}",function($postId, $commentId){
    return "ini post ke: $postId dan comments ke: $commentId";
});
Route::get("post/{postId}", function($postId = null){
    return "post opsional: $postId";
});
Route::get("/coba/example", [CobaController::class, "example"]);

Route::get("/coba/request", [CobaController::class, "request"]);

Route::get("/coba/request", [CobaController::class, "request"]);

Route::get("/coba/request", [CobaController::class, "request"]);
Route::post("/coba/nested-request", [CobaController::class, "nestedRequest"]);
Route::get("/response/index", [App\Http\Controllers\BazmaController::class, 'responseFunction']);
Route::get("/response/header", [App\Http\Controllers\BazmaController::class, 'responseHeader']);

Route::get("/enkripsi/code", [App\Http\Controllers\BazmaController::class, 'encryptionData']);

Route::get("/redirect/to", [App\Http\Controllers\BazmaController::class, 'redirectTo']);
Route::get("/redirect/from", [App\Http\Controllers\BazmaController::class, 'redirectFrom']);

Route::get("/redirect/to/named", [App\Http\Controllers\BazmaController::class, 'redirectToNameRoute'])->name("redirect.to");
Route::get("/redirect/from/named", [App\Http\Controllers\BazmaController::class, 'redirectFromNameRoute']);