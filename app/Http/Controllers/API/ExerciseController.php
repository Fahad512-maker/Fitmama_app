<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\Video;
use App\Models\FavouriteExercise;
class ExerciseController extends Controller
{
    public function index()
    {

         $exercise=Exercise::where('package_id' , auth('sanctum')->user()->package_id)->get();

         if($exercise->isNotEmpty()){

            return response()->json([
             
             'status' => 200,
             'exercise' => $exercise,

            ]);
         }
         else

          {
            
            return response()->json([
              
              'status' => 404,
              'message' => 'Exercises Not Found',

            ]);

          }  
    }

    public function popular_exercise()
    {
        $popular_exercise_videos=Video::where('package_id' , auth('sanctum')->user()->package_id)->where('is_popular' , '!=' , 0)->get();
        
        if($popular_exercise_videos != null){

            return response()->json([
             
             'status' => 200,
             'popular_exercise_videos' => $popular_exercise_videos,

            ]);
         }
         else

          {
            
            return response()->json([
              
              'status' => 404,
              'message' => 'Exercise Videos Not Found',

            ]);

          }  

    }
    
    public function storefavouriteexercise($id)
    {
               $favourite_exercise=FavouriteExercise::where('user_id' ,auth('sanctum')->user()->id)->where('video_id' , $id)->where('identity' , 'exercises')->first();

       if($favourite_exercise != null){
         

         if($favourite_exercise->status > 0){

         $favourite_exercise->video_id=$id;
         $favourite_exercise->status = 0;
         $favourite_exercise->identity='exercises'; 
         $favourite_exercise->save();
         
         $video=Video::find($id);
         $video->is_favourite=0;
         $video->save();
          
          return response()->json([
          
           'status' => 200,
           'message' => 'Exercise Unfavourite Sucessfully',

          ]);

         }
         else

          {
         $favourite_exercise->video_id=$id;
         $favourite_exercise->status = 1;
         $favourite_exercise->identity='exercises';
         $favourite_exercise->save();
         
         $video=Video::find($id);
         $video->is_favourite=1;
         $video->save();
          
          return response()->json([
          
           'status' => 200,
           'message' => 'Favourite Exercise Added Sucessfully',

          ]);

          }  
         
       }

       else

       { 

        $storefavouriteexercise=FavouriteExercise::create([  
         'user_id' => 1,
         'video_id' => $id,
         'article_id' => null,
         'food_recipe_id' => null,
         'status' => 1,
         'identity' => 'exercises',


        ]);
        
        $video=Video::find($id);
         $video->is_favourite=1;
         $video->save();

          if($storefavouriteexercise){

            return response()->json([
            
             'status' => 200,
             'message' => 'Favourite Exercise Added Sucessfully',
            
            ]);     
          }
           else

            {

                 return response()->json([

                  'status' => 404,
                  'message' => 'Failed!Exercise Not Added',

                 ]);
            } 

         }
    }

    public function favourite_exercise()
    {
 
        $favourite=FavouriteExercise::where('user_id' , auth('sanctum')->user()->id)->where('identity' , 'exercises')->get();
        
        foreach($favourite as $key => $value){
            
            $favourite[$key]->videos=Video::where('id' , $value->video_id)->get();
        }

        if($favourite != null){

            return response()->json([
             
             'status' => 200,
             'favourite' => $favourite,

            ]);
         }
         else

          {
            
            return response()->json([
              
              'status' => 404,
              'message' => 'Favourite Exercises Not Found',

            ]);

          }  
   } 
}
