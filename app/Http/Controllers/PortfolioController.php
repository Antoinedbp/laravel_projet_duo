<?php

namespace App\Http\Controllers;

use App\Models\Portoflio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $dataPort = Portoflio::all();

        return view('pages.portfolio', compact('dataPort'));
        
    }
}
