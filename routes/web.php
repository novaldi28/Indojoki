<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/aboutus',function (){
    return view('aboutus');
});

Route::get('/benefits',function (){
    return view('benefits');
});

Route::get('/listgame',function (){
    return view('listgame');
});


Route::get('/shop', [HomeController::class, 'shop'])->name(name: 'shop');


Route::get('/ml',function (){
    return view('ml');
});

Route::get('/pubg',function (){
    return view('pubg');
});

Route::get('/ff',function (){
    return view('ff');
});

Route::get('/lol',function (){
    return view('lol');
});

Route::get('/csgo',function (){
    return view('csgo');
});

Route::get('/valorant',function (){
    return view('valorant');
});

Route::get('/apex',function (){
    return view('apex');
});

Route::get('/dota',function (){
    return view('dota');
});

Route::get('/pembayaran',function (){
    return view('pembayaran');
});

Route::get('Joki',[HomeController::class,"index"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


route::get('/view_games',[AdminController::class, 'view_games']);

route::post('/tambah_game',[AdminController::class, 'tambah_game']);

route::get('/show_games',[AdminController::class, 'show_games']);

route::get('/hapus_games/{id}',[AdminController::class, 'hapus_games']);

route::get('/edit_games/{id}',[AdminController::class, 'edit_games']);

route::post('/edit_games_confirm/{id}',[AdminController::class, 'edit_games_confirm']);

route::get('/detail_games/{id}',[HomeController::class, 'detail_games']);

route::post('/tambah_pesanan/{id}',[HomeController::class, 'tambah_pesanan']);
