<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\FavouriteExercise;
 
/**
 * @group Articles
 *
 *
 */

class ArticleController extends Controller
{
    /**
     * Display a listing of the article.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::where('package_id' , auth('sanctum')->user()->package_id)->get();
        
        foreach($articles as $key => $value){
            
            $articles[$key]->author=Author::where('id' , $value->author_id)->select('name')->get();
        }

        if($articles->isNotEmpty()){

            return response()->json([

             'status' => 200,
             'articles' => $articles,

            ]);
        }

        else

         {

            return response()->json([
             
             'status' => 404,
             'message' => 'Articles Not Found',


            ]);
         }   
    }

    /**
     * Show the  for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified article.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function popular_articles()
    {
       $popular_articles=Article::where('package_id' , auth('sanctum')->user()->package_id)->where('is_popular' , '!=' , 0)->get();
       
       foreach($popular_articles as $key => $value){
           
           $popular_articles[$key]->author=Author::where('id' , $value->author_id)->select('name')->get();
       }

       if($popular_articles->isNotEmpty()){

        return response()->json([
          
          'status' => 200,
          'popular_articles' => $popular_articles,

        ]);
       }
       else

       {

         return response()->json([

          'status' => 404,
          'message' => 'Popular Article Not Found',

         ]);
       }


    }

    public function favorutiearticle($id)
    {
        $favourite_artilces=FavouriteExercise::where('user_id' , auth('sanctum')->user()->id)->where('article_id' , $id)->where('identity' , 'articles')->first();

       if($favourite_artilces != null){
         

         if($favourite_artilces->status > 0){

         $favourite_artilces->article_id=$id;
         $favourite_artilces->status = 0;
         $favourite_artilces->identity='articles'; 
         $favourite_artilces->save();
         
         $article=Article::find($id);
         $article->is_favourite=0;
         $article->save();
          
          return response()->json([
          
           'status' => 200,
           'message' => 'Article Unfavourite Sucessfully',

          ]);

         }
         else

          {
         $favourite_artilces->article_id=$id;
         $favourite_artilces->status = 1;
         $favourite_artilces->identity='articles';
         $favourite_artilces->save();
         
         $article=Article::find($id);
         $article->is_favourite=1;
         $article->save();
          
          return response()->json([
          
           'status' => 200,
           'message' => 'Favourite Article Added Sucessfully',

          ]);

          }  
         
       }

       else

       { 

        $storefavouritearticle=FavouriteExercise::create([  
         'user_id' => auth('sanctum')->user()->id,
         'exercise_id' => null,
         'article_id' => $id,
         'food_recipe_id' => null,
         'status' => 1,
         'identity' => 'articles',


        ]);
        
        $article=Article::find($id);
         $article->is_favourite=1;
         $article->save();

          if($storefavouritearticle != null){

            return response()->json([
            
             'status' => 200,
             'message' => 'Favourite Article Added Sucessfully',
            
            ]);     
          }
           else

            {

                 return response()->json([

                  'status' => 404,
                  'message' => 'Failed!Favourite Not Added',

                 ]);
            } 

         }      
    }



    public function favourite_artilces()
    {

        $favourite_artilces=FavouriteExercise::where('user_id' , auth('sanctum')->user()->id)->where('identity' , 'articles')->get();
         
         
         foreach($favourite_artilces as $key => $value){
             
             $favourite_artilces[$key]->articles=Article::where('id' , $value->article_id)->get();
             
                foreach($favourite_artilces[$key]->articles as $key => $val){
             
             $favourite_artilces[$key]->author=Author::where('id' , $val->author_id)->select('name')->get();
         }
         }
         
      
        if($favourite_artilces->isNotEmpty()){

            return response()->json([

            'status' => 200,
            'favourite_artilces' => $favourite_artilces,

            ]);
        }

        else

          {

            return response()->json([
            
             'status' => 404,
             'message' => 'Favourite Article Not Found',

            ]);
          }  
    }
    
     public function searcharticlebycategory(Request $request)
    {
        $ids=json_decode($request->input('ids'));
        $articles=Article::where('keywords', 'LIKE', '%'.$request->keywords.'%')->whereIn('article_category_id' , $ids)->get();

         foreach($articles as $key => $value){

            $articles[$key]->author=Author::where('id' , $value->author_id)->select('name')->latest()->get();
         }
 
          if($articles->isNotEmpty()){

            return response()->json([

             'status' => 200,
             'articles' => $articles,

            ]);


          }
          else
          {

            return response()->json([
               
              'status' => 404,
              'message' => 'Articles Not Found',


            ]);
          }
        
    }
}
