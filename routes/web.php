<?php

use App\Http\Controllers\TampilKaryawan;
use Illuminate\Support\Facades\Route;
use App\Models\Karyawan;

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

Route::get('/', [TampilKaryawan::class, 'index']);

Route::get('home', [TampilKaryawan::class, 'index']);

Route::get('/tambahData', [TampilKaryawan::class, 'tambahData']);

Route::post('/saveData', [TampilKaryawan::class, 'saveData']);

Route::post('/updateData/{id}', [TampilKaryawan::class, 'updateData']);

Route::get('/deleteData/{id}', [TampilKaryawan::class, 'deleteData']);

Route::get('detail/{id}', [TampilKaryawan::class, 'detailKaryawan']);

Route::get('editKaryawan/{id}', [TampilKaryawan::class, 'editKaryawan']);
