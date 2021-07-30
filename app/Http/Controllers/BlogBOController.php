<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogBOController extends Controller
{
    public function index(){
        $dataBlog = Blog::all();
        return view('backoffice.blog_bo', compact('dataBlog'));
    }

    
}
