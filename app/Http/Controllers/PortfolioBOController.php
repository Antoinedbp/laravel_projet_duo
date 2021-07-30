<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioBOController extends Controller
{
    public function index(){
        $dataPort = Portfolio::all();
        return view('backoffice.portfolio_bo', compact('dataPort'));
    }

    public function create () {
        return view('backoffice.createBlog');
    }

    public function store (Request $request) {
        $newPort = new Portfolio;
        $newPort->img1 = $request->img1;
        $newPort->titre_small = $request->titre_small;
        $newPort->description = $request->description;
        $newPort->img2 = $request->img2;
        $newPort->img3 = $request->img3;
        $newPort->img4 = $request->img4;
        $newPort->img5 = $request->img5;
        $newPort->save();
        return redirect()->back();
    }

    public function destroy (Portfolio $id) {
        $id->delete();
        return redirect()->back();
    }

    public function edit (Portfolio $id) {
        $portfolio = $id;
        return view('backoffice.');
    }
}
