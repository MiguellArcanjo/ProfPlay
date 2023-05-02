<?php

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

use App\Http\Controllers\CadastroControlador;

Route::get('/login', function() {
    return view('login.login');
});

// Route::match(['post'], '/login', [CadastroControlador::class, 'index']);

Route::get('/cadastro', [CadastroControlador::class, 'create']);

Route::post('/cadastro', [CadastroControlador::class, 'store']);
