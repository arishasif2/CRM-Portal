<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
     public function show(){
    return view('frontend/404');
}

}
