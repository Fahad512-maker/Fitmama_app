<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodRecipe;
use App\Models\FavouriteExercise;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    public function recipes()
    {
        $recipes=DB::table('food_recipes')
        ->select('food_recipes.id as id','title','package_id','food_recipes.image as image','instructions','recipe_category_id',
        'ingredients_symbols','ingredients','serving','calories','recipe_ready_time','is_premium','is_favourite',
        'is_popular','is_added','price','food_recipes.created_at','food_recipes.updated_at',
        'recipe_categories.name as recipe_category')
        ->join('recipe_categories','recipe_categories.id','food_recipes.recipe_category_id')
        ->where('package_id' , auth('sanctum')->user()->package_id)->latest()->get();
        //$recipes=FoodRecipe::where('package_id' , auth('sanctum')->user()->package_id)->latest()->get();

        if($recipes->isNotEmpty()){

            return response()->json([
            
             'status' => 200,
             'recipes' => $recipes,


            ]);
        }
        else
          {
            return response()->json([

             'status' => 404,
             'message' => 'Recipes Not Found',
 
            ]);
          }  
    }

    public function popular_recipes()
    {
        $popular_recipes=DB::table('food_recipes')
        ->select('food_recipes.id as id','title','package_id','food_recipes.image as image','instructions','recipe_category_id',
        'ingredients_symbols','ingredients','serving','calories','recipe_ready_time','is_premium','is_favourite',
        'is_popular','is_added','price','food_recipes.created_at','food_recipes.updated_at',
        'recipe_categories.name as recipe_category')
        ->join('recipe_categories','recipe_categories.id','food_recipes.recipe_category_id')
        ->where('is_popular' , '!=' , 0)
        ->where('package_id' , auth('sanctum')->user()->package_id)->latest()->get();
//        $popular_recipes=FoodRecipe::where('package_id' , auth('sanctum')->user()->package_id)->where('is_popular' , '!=' , 0)->get();
        
        if($popular_recipes != null){

            return response()->json([
             
             'status' => 200,
             'popular_recipes' => $popular_recipes,

            ]);
         }
         else

          {
            
            return response()->json([
              
              'status' => 404,
              'message' => 'Popular Recipes Not Found',

            ]);

          }  

    }
    
    public function updatefavouriterecipes($id)
    {
       $favourite_recipe=FavouriteExercise::where('user_id' ,auth('sanctum')->user()->id)->where('food_recipe_id' , $id)->where('identity' , 'food_recipes')->first();

       if($favourite_recipe != null){
         

         if($favourite_recipe->status > 0){

         $favourite_recipe->food_recipe_id=$id;
         $favourite_recipe->status = 0;
         $favourite_recipe->identity='food_recipes'; 
         $favourite_recipe->save();
         
         $recipe=FoodRecipe::find($id);
         $recipe->is_favourite=0;
         $recipe->save();
          
          return response()->json([
          
           'status' => 200,
           'message' => 'Recipe Unfavourite Sucessfully',

          ]);

         }
         else

          {
         $favourite_recipe->food_recipe_id=$id;
         $favourite_recipe->status = 1;
         $favourite_recipe->identity='food_recipes';
         $favourite_recipe->save();
         
         $recipe=FoodRecipe::find($id);
         $recipe->is_favourite=1;
         $recipe->save();
          
          return response()->json([
          
           'status' => 200,
           'message' => 'Favourite Recipe Added Sucessfully',

          ]);

          }  
         
       }

       else

       { 

        $storefavouriterecipe=FavouriteExercise::create([  
         'user_id' => 1,
         'video_id' => null,
         'article_id' => null,
         'food_recipe_id' => $id,
         'status' => 1,
         'identity' => 'food_recipes',


        ]);
        
        // $recipe=FoodRecipe::find($id);
        //  $recipe->is_favourite=1;
        //  $recipe->save();

        //   if($storefavouriterecipe != null){

        //     return response()->json([
            
        //      'status' => 200,
        //      'message' => 'Favourite Recipe Added Sucessfully',
            
        //     ]);     
        //   }
        //   else

        //     {

        //          return response()->json([

        //           'status' => 404,
        //           'message' => 'Failed!Recipes Not Added',

        //          ]);
        //     } 

         }
    }

    public function favourite_recipes()
    {
 
        $favourite_recipes=FavouriteExercise::where('user_id' , auth('sanctum')->user()->id)->where('identity' , 'food_recipes')->get();
        
        foreach($favourite_recipes as $key => $value){
            
            $favourite_recipes[$key]->recipe=FoodRecipe::where('id' , $value->food_recipe_id)->get();
        }

        if($favourite_recipes != null){

            return response()->json([
             
             'status' => 200,
             'favourite_recipes' => $favourite_recipes,

            ]);
         }
         else

          {
            
            return response()->json([
              
              'status' => 404,
              'message' => 'Favourite Recipe Not Found',

            ]);

          }  
   } 

   public function searchrecipe(Request $request)
   {
       $search_recipe=FoodRecipe::where('title', 'LIKE', '%'.$request->title.'%')->distinct()->get();

        if($search_recipe->isNotEmpty()){

            return response()->json([

              'status' => 200,
              'search_recipe' => $search_recipe,

            ]);
        }
        else
          {
            return response()->json([

             'status' => 404,
             'message' => 'Recipes Not Found',

            ]);
          }  
   }
   
   
   public function completeworkout(Request $request)
    {
        $assign_plan=assign_plan::where('user_id' , auth('sanctum')->user()->id)->where('assign_date' , Carbon::now()->format('Y-m-d'))->first();

        if($assign_plan != null){

            $assign_plan->is_completed= 1;
            $assign_plan->completion_time = Carbon::now();
            $assign_plan->save(); 

            return response()->json([
             
             'status' => 200,
             'message' => 'Good!Workout Finished Successfully.'


            ]);
        }

        else

         {

            return response()->json([

             'status' => 404,
             'message' => 'Workout Plan Not Found',

            ]);
         }   
    }

}
