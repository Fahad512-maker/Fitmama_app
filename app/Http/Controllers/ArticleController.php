<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Package;
use App\Models\Author;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article=Article::OrderBy('id' , 'asc')->latest()->get();
        $data=['page_title' => 'Article' , 'article' => $article];
        return view('admin.article.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author=Author::OrderBy('id' , 'asc')->get();
        $package=Package::OrderBy('id' , 'asc')->latest()->get();
        $article_category=ArticleCategory::OrderBy('id' , 'asc')->latest()->get();
        $data=['page_title' => 'Add Article' , 'article_category' => $article_category , 'package' => $package , 'author' => $author];
        return view('admin.article.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
        $article=Article::create([
         
         'title' => $request->title,
         'article_category_id' => $request->article_category_id,
         'package_id' => $request->package_id,
         'image' => $request->image,
         'description' => $request->description,
         'user_id' => auth()->user()->id,
         'author_id' => $request->author_id,
         'is_popular' => 0,
         'is_featured' => 0,
         'status' => $request->status,
         ]);

        return redirect(url('/articles'))->with('success' , 'Article Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Article $article)
    {
        $article=Article::find($id);
        $package=Package::OrderBy('id' , 'asc')->get();
        $category=ArticleCategory::OrderBy('id' , 'asc')->get();
        $author=Author::OrderBY('id' , 'asc')->get();
        $data=['page_title' => 'Edit Article - Fitmama' , 'article' => $article , 'package' => $package , 'category' => $category , 'author' => $author];
        return view('admin.article.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        $article=Article::find($id);
        $article->title=$request->title;
        $article->article_category_id=$request->article_category_id;
        $article->description=$request->description;
        $article->is_popualr=$request->is_popular;
        $article->status=$request->status;
        $article->save();

        return redirect(url('/articles'))->with('success' , 'Article Update Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article=Article::find($id);
        $article->delete();

        return redirect(url('/articles'))->with('success' , 'Article Delete Successfully');
    }
}
