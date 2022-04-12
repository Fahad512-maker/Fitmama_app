<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use App\Http\Requests\StoreArticleCategoryRequest;
use App\Http\Requests\UpdateArticleCategoryRequest;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=ArticleCategory::OrderBy('id' , 'asc')->latest()->get();
        $data=['page_title' => 'Category List' , 'category' => $category];
        return view('admin.article_category.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=['page_title' => 'Add Article Category - Fitmama'];
        return view('admin.article_category.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleCategoryRequest $request)
    {
         $filename="";
        if($request->hasfile('image')){

            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('article/category_images/'), $filename);
        }

        $article_category=ArticleCategory::create([
        
         'name' => $request->name,
         'image' => 'public/article/category_images/'.$filename,


        ]);

        return redirect(url('/article_category'))->with('success' , 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $articleCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id,ArticleCategory $articleCategory)
    {
        $article_category=ArticleCategory::find($id);
        $data=['page_title' => 'Edit Article Category - Fitmama' , 'article_category' => $article_category];
        return view('admin.article_category.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleCategoryRequest  $request
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateArticleCategoryRequest $request, ArticleCategory $articleCategory)
    {
        $article_category=ArticleCategory::find($id);
        $article_category->name=$request->name;
        $article_category->save();

        return redirect(url('/article_category'))->with('success' , 'Article Category Updated');
    }

     public function update_image($id, UpdateArticleCategoryRequest $request)
     {
            $filename="";
        if($request->hasfile('image')){

            $file=$request->file('image');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('article/category_images/'), $filename);
        }

        $article_category=ArticleCategory::find($id);
        $article_category->image='article/category_images/'.$filename;
        $article_category->save();

        return redirect(url('/article_category'))->with('success' , 'Article Category Updated');
         
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleCategory  $articleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,ArticleCategory $articleCategory)
    {
        $article_category=ArticleCategory::find($id);
        $article_category->delete();

        return redirect(url('/article_category'))->with('success' , 'Article Delete Successfully');
    }
}
