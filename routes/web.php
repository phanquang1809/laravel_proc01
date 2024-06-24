<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    $sach =DB::table('book')->get();
    // dd($sach);
    return view('welcome',['data'=>$sach]);
});


Route::get('/san-pham', function () {
    $book=['id'=>1,'name'=>'San Pham 1'];


    return view('sanpham',['data'=>$book]);
});

Route::get('/dang-ky', function () {
    return view('dangky');
});

Route::get('/dang-nhap', function () {
    return view('dangnhap');
});