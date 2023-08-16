<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FontawesomeController extends Controller
{
    public function show(){
        return view('frontend/fontawesome');
    }
}
