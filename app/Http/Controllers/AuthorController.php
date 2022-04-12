<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
      $author=Author::latest()->OrderBy('id' , 'asc')->get();
      $data=['page_title' => 'Author - Fitmama' , 'author' => $author];
      return view('admin.author.index' , $data);
    }

    public function create()
    {
        $data=['page_title' =>  'Add Author'];
        return view('admin.author.create' , $data);
    }

    public function store(Request $request)
    {
        $author=Author::create([
         
         'name' => $request->name,
         'email' => $request->email,
 
        ]);

        return redirect(url('/author'))->with('success' , 'Author Added Successfully');
    }

    public function edit($id , Request $request)
    {
        $author=Author::find($id);
        $data=['page_title' => 'Edit Author - Fitmama' , 'author' => $author];
        return view('admin.author.edit' , $data);
    }

    public function update($id, Request $request)
    {  
        $author=Author::find($id);
        $author->name=$request->name;
        $author->email=$request->email;
        $author->save();

        return redirect(url('/author'))->with('success' , 'Author Update Successfully');
    }

    public function destroy($id , Request $request)
    {
        $author=Author::find($id);
        $author->delete();
        return redirect(url('/author'))->with('success' , 'Article Delete Successfully');
    }
}
