<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
        public function store(Request $request)
    {
        //نمایش اطلاعات ارسالی
       $data = $request->only(['name','phone','massage']);
       return view('result', );
    }
}
