<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Newscontroller;
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
//     return view('base');
// });
route::get('/',[NewsController::class,"index"]);

route:: post('news/publish',[NewsController::class,"news"])->name('publish');
route:: get('news/delete/{id}',[NewsController::class,"delete"])->name('delete');

