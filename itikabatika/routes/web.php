<?php //web.phpはルーティングを行うfileでユーザーのHTTPリクエスト(例えばhome)などに対して、どのコントローラーやviewを表示するかを定義するためのもの

use Illuminate\Support\Facades\Route;
use App\\Http\\Controllers\\FormController; //use宣言でFormControllerを追加

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
    return view('index');
});

//お問い合わせfoam
Route::get('contact', [FormController::class, "index"])->name['contact'];
Route::post('contact.confirm', [FormController::class, "sendMail"]);
Route::get('/contact/confirm', [FormController::class, 'confirm'])->name('contact.confirm');
Route::get('contact.complete', [FormController::class, "complete"])->name('contact.complete');