<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FoodRecipe;
use App\Models\Meal;
use Carbon\Carbon;
use App\Models\assign_plan;
class MealPlanController extends Controller
{
     public function mealplans()
    {
            $meal_plan=Meal::latest()->get();
            
            if($meal_plan->isNotEmpty()){

                return response()->json([
                  
                  'status' => 200,
                  'meal_plan' => $meal_plan,

                ]);
            }
            else
              {

                return response()->json([
                 
                 'status' => 404,
                 'message' => 'Meal Plan Not Found'
 
                ]);
              }        
    }

    // public function completeworkout($id , Request $request)
    // {
    //     $workout=WorkoutPlan::find($id);

    //     if($workout){

    //         $workout->is_completed= 1;
    //         $workout->completion_time = Carbon::now();
    //         $workout->save(); 

    //         return response()->json([
             
    //          'status' => 200,
    //          'message' => 'Good!Workout Finished Successfully.'


    //         ]);
    //     }

    //     else

    //      {

    //         return response()->json([

    //          'status' => 404,
    //          'message' => 'Workout Plan Not Found',

    //         ]);
    //      }   
    // }

    public function mealplansbydate(Request $request)
    {
        $assign_plan=assign_plan::where('user_id' , auth('sanctum')->user()->id)->where('assign_date' , $request->assign_date)->where('type' , 'FoodRecipes')->get();

        foreach($assign_plan as $key => $value){
            
            $assign_plan[$key]->meal=Meal::where('id' , $value->meal_id)->latest()->get();
            
            
            foreach($assign_plan[$key]->meal as $key => $val){
             
             $assign_plan[$key]->recipe=FoodRecipe::where('id' , $val->food_recipe_id)->latest()->get();
         }
        }

        if($assign_plan->isNotEmpty()){

            return response()->json([
              
              'status' => 200,
              'assign_plan' => $assign_plan,              

            ]);
        }

        else

          {
             return response()->json([
              
              'status' => 404, 
              'message' => 'Oops!Meal Plans Not Found',

             ]);

          }  
    }
}
