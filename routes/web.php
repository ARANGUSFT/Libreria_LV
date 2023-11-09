<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BooksController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // Una permite cargar el formulario y la otra envia la informacion
    Route::get('/RegisterBooks', [BooksController::class, 'index'])->name('books.form');
    Route::post('/RegisterBooks', [BooksController::class, 'store'])->name('books.register');

    // Listado de Libros
    Route::get('/ListBooks', [BooksController::class, 'list'])->name('books.list');
    
    // GET permite cargar el form y PUT actualizar la informacion
    Route::get('/Books/{books}/edit', [BooksController::class, 'edit'])->name('books.edit');
    Route::put('/Books/{books}', [BooksController::class, 'update'] )->name('books.update');

});


require __DIR__.'/auth.php';
