<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;

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

// Route::get('/', [LoginController::class, 'login'])->name('login');
// Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
// Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('home', [HomeController::class, 'index'])->name('home');




Route::group(['middleware' => ['auth', 'ceklevel:1,2']], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('/daftar-siswa', [SiswaController::class, 'index'])->name('siswa');
    Route::get('/tambah-siswa', [SiswaController::class, 'create'])->name('createsiswa');
    Route::post('/insert-siswa', [SiswaController::class, 'insert'])->name('insertsiswa');
    Route::get('/edit-siswa/{id}', [SiswaController::class, 'edit'])->name('editsiswa');
    Route::post('/update-siswa/{id}', [SiswaController::class, 'update'])->name('updatesiswa');
    Route::get('/delete-siswa/{id}', [SiswaController::class, 'delete'])->name('deletesiswa');
});
