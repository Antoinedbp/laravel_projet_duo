<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Portoflio;
use App\Models\Portoflios;
use Illuminate\Http\Request;

class PortfolioBOController extends Controller
{
    public function index(){
        
        $dataPort = Portoflio::all();
        return view('backoffice.portfolio_bo', compact('dataPort',));
    }

    public function create () {
        return view('backoffice.createPort');
    }

    public function store (Request $request) {
        $newPort = new Portoflio();
        $newPort->img1 = $request->img1;
        $newPort->titre_small = $request->titre_small;
        $newPort->description = $request->description;
        $newPort->img2 = $request->img2;
        $newPort->img3 = $request->img3;
        $newPort->img4 = $request->img4;
        $newPort->img5 = $request->img5;
        $newPort->save();
        return redirect()->route('portfolio_bo');
    }

    public function destroy (Portoflio $id) {
        $id->delete();
        return redirect()->back();
    }

    public function edit (Portoflio $id) {
        $portfolio = $id;
        $dataPort = Portoflio::all();
        return view('backoffice.editPort', compact('portfolio','dataPort'));
    }

    public function update (Portoflio $id, Request $request) {
        $port = $id;
        $port->img1 = $request->img1;
        $port->titre_small = $request->titre_small;
        $port->description = $request->description;
        $port->img2 = $request->img2;
        $port->img3 = $request->img3;
        $port->img4 = $request->img4;
        $port->img5 = $request->img5;
        $port->save();
        return redirect('/');
    }
}
