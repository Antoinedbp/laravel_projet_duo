<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogBOController extends Controller
{
    public function index(Blog $id){
        $dataBlog = Blog::all();
       $blog = $id;
        return view('backoffice.blog_bo', compact('blog', 'dataBlog'));
    }

    public function create () {
        return view('backoffice.createBlog');
    }

    public function store (Request $request) {
        $newBlog = new Blog;
        $newBlog->titre = $request->titre;
        $newBlog->img = $request->img;
        $newBlog->description = $request->description;
        $newBlog->save();
        return redirect()->route('blog_bo');
    }

    public function destroy (Blog $id) {
        $id->delete();
        return redirect()->back();
    }

    public function edit (Blog $id) {
        $dataBlog = Blog::all();
        $blog = $id;
        return view('backoffice.editBlog', compact('blog','dataBlog'));
    }

    public function update (Blog $id, Request $request) {
        $blog = $id;
        $blog->titre = $request->titre;
        $blog->img = $request->img;
        $blog->description = $request->description;
        $blog->save();
        return redirect('/');
    }
    
}
