<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerApp;
use App\Http\Controllers\ArticleController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/', [controllerApp::class, 'index'])->name("accueil");
Route::controller(controllerApp::class)->group(function () {
    Route::get('/about', 'about');
    Route::post('/donnees', 'data');
    Route::get("/post", "post_article")->middleware('auth');
    Route::post("add_article", "add_article")->middleware('auth');

});

Route::get('/users/{user}', function (User $user) {
    return $user->email;
});
// Route::get('/user/{name?}', function ($name = 'John') {
//     return $name;
// })->whereAlphaNumeric('name');
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});