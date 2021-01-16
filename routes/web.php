<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;

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

Route::get('/', [HomeController::class, 'home']);
//maneira equivalente
//Route::get('/', 'App\Http\Controllers\web\HomeController@home');

Route::get('/home', function(){
    return '<h1>Aqui é sua casa!</h1> Você tem uma cozinha no /kitchen , pq não vai dar uma olhada? ';
});
Route::get('/home/kitchen', function(){
    return '<h1>Aqui é sua cozinha</h1> Desculpe, mas só temos esse cômodo na casa, <br>você faz suas necessidades na caixinha de areia no canto da parede, <br>quer ir até lá? Digite /sand.';
});
Route::get('/home/kitchen/sand', function(){
    return '<h1>Aqui é sua caixa de areia</h1> Parece que você passou por aqui recentemente, <br>se eu fosse você iria embora.';
});
