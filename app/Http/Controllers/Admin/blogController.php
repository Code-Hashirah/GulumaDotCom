<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\blogs;
use Illuminate\Http\Request;

class blogController extends Controller
{
    function storePage(){
        return view('Admin.Blogs.addBlog');
    }

    function store(Request $request){
        $blog=new blogs();
        $blog->title=$request->Title;
        $blog->body=$request->Body;
        $blog->picture=$request->Picture;
        $blog->author=$request->Author;
        $blog->save();
        return redirect('/admin/add-blog');
        // News::create([
        //     'title'=> $request->title, 
        //     'body' => $request->body, 
        //     'author'=>$request->author, 
        //     'picture'=> $request->picture]);
        //     return redirect()->back();
    }
    function manageBlog(){
        $Blogs=blogs::all();
        return view('Admin.Blogs.manageBlog',compact(['Blogs']));
    }
    function edit($id){
        $blog=new blogs($id);
    }

    function update(Request $request){
        blogs::where('id',$request->id)->update(['title'=>$request->Title, 'body'=>$request->Body, 'picture'=>$request->Picture, 'author'=>$request->Author]);
    }

    function delete(Request $request){
        blogs::where('id', $request->id)->delete();
    }
    
}
