<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
//نمایش فرم
Route::get('/', function () {
    return view('form');
});
//دریافت اطلاعات فرم (POST)
Route::post('/form',
[FormController::class,
'store'])->name('form');




