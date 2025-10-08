<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('gallery');
});
Route::get('/mahasiswa', function () {
$arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang
Kusumo", "Lisa Permata"];
return view('mahasiswa')->with('mahasiswa',
$arrMahasiswa);
});
Route::get('dosen', function () {
$arrDosen = ["Maya Fitrianti, M.M.","Prof. Silvia Nst,
M.Farm.","Dr. Umar Agustinus",
"Dr. Syahrial, M.Kom."];
return view('dosen')->with('dosen', $arrDosen);
});
Route::get('gallery', function () {
return view('gallery');
});