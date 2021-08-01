<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Portoflio;
use App\Models\Portoflios;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $dataPort = Portoflio::all();

        return view('pages.portfolio', compact('dataPort'));
        
    }
}
