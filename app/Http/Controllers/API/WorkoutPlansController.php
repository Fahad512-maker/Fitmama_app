<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlan;
use App\Models\Video;
use \stdClass;
use Carbon\Carbon;
use Exception;
use App\Models\assign_plan;
use Illuminate\Support\Facades\DB;
use App\Models\Exercise;
class WorkoutPlansController extends Controller
{
    public function workout()
    {
             
            $workout_plans=WorkoutPlan::latest()->get();
            
            foreach($workout_plans as $key => $value){
                
                $workout_plans[$key]->video=Video::where('id' , $value->video_id)->latest()->get();
            }
            
            if($workout_plans->isNotEmpty()){

                return response()->json([
                  
                  'status' => 200,
                  'workout' => $workout_plans,

                ]);
            }
            else
            {
                
                return response()->json([
                    
                    'status' => 404,
                    'message' => 'Workouts Not Found',
                    
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

    public function workoutplansbydate(Request $request)
    {
        $assign_plan=assign_plan::where('user_id' , auth('sanctum')->user()->id)->where('assign_date' , $request->assign_date)->where('type' , 'workouts')
        ->latest()->get()->first();
        

        try{
            
        if($assign_plan!=null){
            try{
                $assign_plan->workoutPlan=WorkoutPlan::where('id' , $assign_plan->workout_plan_id)->latest()->get()->first();
            $categories=DB::table('workout_exercises')
            ->select('exercise_category_id','exercise_categories.name','exercise_categories.image')
            ->join('exercise_categories','exercise_categories.id','workout_exercises.exercise_category_id')
            ->where('workout_plan_id',$assign_plan->workout_plan_id)->get();
            $exercises=array();
            
            foreach($categories as $cat){
                //get exercises
                $data=DB::table('exercises')
                ->select('exercises.id','exercises.title','exercises.description',
                'exercises.is_favourite','exercises.is_premium','exercises.is_featured',
                'exercises.price','exercises.rounds',
                'videos.id as videoId','videos.title as videoTitle',
                'videos.description as videoDescription',
                'exercises.training_instructions as reps',
                'videos.file as videoUrl','sets','training_weight',
                'videos.thumbnail as videoThumb')
                ->join('videos','videos.id','exercises.video_id')
                ->where('exercises.exercise_category_id',$cat->exercise_category_id)
                ->get();
                if(sizeof($data)>0){
                    $obj=new stdClass();
                    $obj->category=$cat->name;
                    $obj->categoryId=$cat->exercise_category_id;
                    $obj->exercises=$data;
                    array_push($exercises,$obj);        
                }
            
            }
            $assign_plan->exersices=$exercises;
            //$data=DB::table('');
            return response()->json([
              'status' => 200,
              'assign_plan' => $assign_plan,              

            ]);
            }catch(Exception $ex){
                return $ex->getMessage();
            }
        }

        else

          {
             return response()->json([
              
              'status' => 404, 
              'message' => 'Oops!Workout Plans Not Found',

             ]);

          }  
        }catch(Exception $ex){
            return $ex->getMessage();
        }
    }
}
