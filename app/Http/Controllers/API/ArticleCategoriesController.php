<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoriesController extends Controller
{
    public function index()
    {
        $article_category=ArticleCategory::latest()->get();

        if($article_category->isNotEmpty()){

            return response()->json([

            'status' => 200,
            'article_category' => $article_category,

            ]);
        }

        else

         {

            return response()->json([

            'status' => 404,
            'message' => 'Article Category Not Found',

            ]);
         }   
    }
}
