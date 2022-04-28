<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerApp;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/store', [ArticleController::class, 'store'])->name("article.store");

Route::get('/', [controllerApp::class, 'index'])->name("accueil");
Route::get('/category', [controllerApp::class, 'categorie']);
Route::get('/contact-{id}', [controllerApp::class, 'contact'])->where("id", "[0-9]+");
Route::redirect("/apple", "/");

Route::controller(controllerApp::class)->group(function () {
    Route::get('/about', 'about');
    Route::post('/donnees', 'data');
    Route::get('/donnees', 'data');
    Route::get("/post", "post_article")->middleware('auth');
    Route::post("add_article", "add_article")->middleware('auth');

});

//Route::fallback([controllerApp::class, 'index'])->name("accueil1");
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});