<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Trains extends Controller
{
    //

    public function index(){
        return view('guest.train.index');
    }
}
