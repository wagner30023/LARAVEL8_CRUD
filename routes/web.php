<?php

use App\Http\Controllers\JogosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\CursoController;

use App\Models\Curso;
use Illuminate\Support\Facades\Route;

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


// route::get('/jogos', function(){
//     return " Curso Laravel ";
// });

// passando parametros

// Route::view('/jogos', 'jogos',['name' => 'GTA']);

// Route::get("/jogos/{name?}",function($name = null){
//     return view('jogos', ['nomeJogo' => $name]);
// })->where('name', '[A-Za-z]+');

// Route::get("/jogos/{id?}/{name?}",function($id = null , $name= null){
//     return view('jogos', ['idJogo' => $id, 'nameJogo' => $name]);
// })->where('id', '[0-9]+');


// Route::get("/jogos/{id?}/{name?}",function($id = null , $name= null){
//     return view('jogos', ['idJogo' => $id, 'nameJogo' => $name]);
// })->where(['id', '[0-9]+', 'name' => '[A-Za-z]+']);


Route::get('/home', function () {
    return view('welcome');
})->name('home-index');




// Route::get('/jogos',[JogosController::class,'index']);
Route::get('/curso', [CursoController::class, 'index']);
Route::get('/teste', [TesteController::class, 'index'])->where('nome', '[A-Za-z]+');


Route::prefix('jogos')->group(function () {
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit',[JogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
    Route::put('/{id}',[JogosController::class,'update'])->where('id','[0-9]+')->name('jogos-update');
    Route::delete('/{id}',[JogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
});

Route::prefix('cursos')->group(function () {
    Route::get('/', [CursoController::class, 'index'])->name('curso.index');
    Route::get('/create',[CursoController::class,'create'])->name('curso.create');
    Route::post('/',[CursoController::class,'store'])->name('curso.store');
});

Route::fallback(function () {
    return "Erro ao localizar a rota";
});
