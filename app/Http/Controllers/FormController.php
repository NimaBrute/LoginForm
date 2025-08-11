<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        public function store(Request $request)
    {
        //نمایش اطلاعات ارسالی
        dd($request->all());
    }
}
