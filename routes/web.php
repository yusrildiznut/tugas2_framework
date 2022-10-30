<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\matakuliahController;
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

//views
Route::get('/', [dosenController::class, 'index'],);
Route::get('/dosen', [dosenController::class, 'index'],);
Route::get('/mahasiswa', [mahasiswaController::class, 'index'],);
Route::get('/matakuliah', [matakuliahController::class, 'index'],);

//insert
// dia merubah jadi jika ngambil  
// di folder app/http/controller/'file controller' yang keluat resources/view/menu/'file controller'
Route::get('/dosen/insert', function () {
    return view('menu.dosenInsert');
});
Route::get('/mahasiswa/insert', function () {
    return view('menu.mahasiswaInsert');
});
Route::get('/matakuliah/insert', function () {
    return view('menu.matakuliahInsert');
});

// collection
Route::get('/dosen/insert/insertRawSQL', [dosenController::class, 'insertRawSQL'],);
Route::get('/dosen/insert/insertQueryBuilder', [dosenController::class, 'insertQueryBuilder'],);
Route::get('/dosen/insert/insertEloquent', [dosenController::class, 'insertEloquent'],);
Route::get('/mahasiswa/insert/insertRawSQL', [mahasiswaController::class, 'insertRawSQL'],);
Route::get('/mahasiswa/insert/insertQueryBuilder', [mahasiswaController::class, 'insertQueryBuilder'],);
Route::get('/mahasiswa/insert/insertEloquent', [mahasiswaController::class, 'insertEloquent'],);
Route::get('/matakuliah/insert/insertRawSQL', [matakuliahController::class, 'insertRawSQL'],);
Route::get('/matakuliah/insert/insertQueryBuilder', [matakuliahController::class, 'insertQueryBuilder'],);
Route::get('/matakuliah/insert/insertEloquent', [matakuliahController::class, 'insertEloquent'],);




//update
Route::get('/dosen/update', function () {
    return view('menu.dosenUpdate');
});
Route::get('/mahasiswa/update', function () {
    return view('menu.mahasiswaUpdate');
});
Route::get('/matakuliah/update', function () {
    return view('menu.matakuliahUpdate');
});
Route::get('/dosen/update/updateRawSQL', [dosenController::class, 'updateRawSQL'],);
Route::get('/dosen/update/updateQueryBuilder', [dosenController::class, 'updateQueryBuilder'],);
Route::get('/dosen/update/updateEloquent', [dosenController::class, 'updateEloquent'],);
Route::get('/mahasiswa/update/updateRawSQL', [mahasiswaController::class, 'updateRawSQL'],);
Route::get('/mahasiswa/update/updateQueryBuilder', [mahasiswaController::class, 'updateQueryBuilder'],);
Route::get('/mahasiswa/update/updateEloquent', [mahasiswaController::class, 'updateEloquent'],);
Route::get('/matakuliah/update/updateRawSQL', [matakuliahController::class, 'updateRawSQL'],);
Route::get('/matakuliah/update/updateQueryBuilder', [matakuliahController::class, 'updateQueryBuilder'],);
Route::get('/matakuliah/update/updateEloquent', [matakuliahController::class, 'updateEloquent'],);


//select
Route::get('/dosen/select', function () {
    return view('menu.dosenSelect');
});
Route::get('/mahasiswa/select', function () {
    return view('menu.mahasiswaSelect');
});
Route::get('/matakuliah/select', function () {
    return view('menu.matakuliahSelect');
});
Route::get('/dosen/select/selectRawSQL', [dosenController::class, 'selectRawSQL'],);
Route::get('/dosen/select/selectQueryBuilder', [dosenController::class, 'selectQueryBuilder'],);
Route::get('/dosen/select/selectEloquent', [dosenController::class, 'selectEloquent'],);
Route::get('/mahasiswa/select/selectRawSQL', [mahasiswaController::class, 'selectRawSQL'],);
Route::get('/mahasiswa/select/selectQueryBuilder', [mahasiswaController::class, 'selectQueryBuilder'],);
Route::get('/mahasiswa/select/selectEloquent', [mahasiswaController::class, 'selectEloquent'],);
Route::get('/matakuliah/select/selectRawSQL', [matakuliahController::class, 'selectRawSQL'],);
Route::get('/matakuliah/select/selectQueryBuilder', [matakuliahController::class, 'selectQueryBuilder'],);
Route::get('/matakuliah/select/selectEloquent', [matakuliahController::class, 'selectEloquent'],);


//delete
Route::get('/dosen/delete', function () {
    return view('menu.dosenDelete');
});
Route::get('/mahasiswa/delete', function () {
    return view('menu.mahasiswaDelete');
});
Route::get('/matakuliah/delete', function () {
    return view('menu.matakuliahDelete');
});
Route::get('/dosen/delete/deleteRawSQL', [dosenController::class, 'deleteRawSQL'],);
Route::get('/dosen/delete/deleteQueryBuilder', [dosenController::class, 'deleteQueryBuilder'],);
Route::get('/dosen/delete/deleteEloquent', [dosenController::class, 'deleteEloquent'],);
Route::get('/mahasiswa/delete/deleteRawSQL', [mahasiswaController::class, 'deleteRawSQL'],);
Route::get('/mahasiswa/delete/deleteQueryBuilder', [mahasiswaController::class, 'deleteQueryBuilder'],);
Route::get('/mahasiswa/delete/deleteEloquent', [mahasiswaController::class, 'deleteEloquent'],);
Route::get('/matakuliah/delete/deleteRawSQL', [matakuliahController::class, 'deleteRawSQL'],);
Route::get('/matakuliah/delete/deleteQueryBuilder', [matakuliahController::class, 'deleteQueryBuilder'],);
Route::get('/matakuliah/delete/deleteEloquent', [matakuliahController::class, 'deleteEloquent'],);



Route::fallback(function () {
    return view('fail');
});
