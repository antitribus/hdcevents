<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::get('/', function () {
    return view('welcome', ['nome' => 'Raphael', 'itens' => ['cadeira', 'mesa', 'computador'] ]);
});

Route::get('/events', [EventController::class, 'index']);

Route::get('/product/{id}', function($id) {
    // query parameters
    $search = request('s');

    return view('product', ['id' => $id, 'search' => $search]);
});
