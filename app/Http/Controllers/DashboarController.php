<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
    //

    public function mydashboard(){
        return view('dashboard');
    }
}
