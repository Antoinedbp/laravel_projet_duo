<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeBOController extends Controller
{
    public function index(){
        return view('backoffice.home_bo');
    }
}
