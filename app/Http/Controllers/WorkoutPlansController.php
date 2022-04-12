<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlan;
use App\Models\Exercise;
use Carbon\Carbon;
use App\Models\Video;

class WorkoutPlansController extends Controller
{
   public function index()
   {
       $workout_plans=WorkoutPlan::OrderBy('id' , 'asc')->get();
       $data=['page_title' => 'Workout Plan - Fitmama' , 'workout_plans' => $workout_plans];
       return view('admin.workout_plans.index' ,$data);
   }

   public function create()
   {
       $videos=Video::OrderBy('id' , 'asc')->get();
       $data=['page_title' => 'Add Workout Plan - Fitmama' , 'videos' => $videos];
       return view('admin.workout_plans.create' , $data);
   }

   public function store(Request $request)
   {
      
       $exercise_plan=WorkoutPlan::create([

        'video_id' =>  json_encode($request->video_id),
        'title' => $request->title,
        'workout_image' => $request->workout_image,
        'equiment_images' => json_encode($request->equiment_images),
        'equiment_name' => $request->equiment_name,
        'instructions' => $request->instructions,
        'duration' => $request->duration

       ]);

       return redirect(url('/workout_plans'))->with('success' , 'Workout Plan Added Successfully');
   }

   public function edit($id , Request $request)
    {
        $exercise_plan=WorkoutPlan::find($id);
        $video=Video::OrderBy('id' , 'asc')->get();
        $data=['page_title' => 'Edit Exercise Plan  - Fitmama' , 'exercise_plan' => $exercise_plan , 'videos' => $video];
        return view('admin.workout_plans.edit' , $data);
    }

    public function update($id , Request $request)
     {
         $exercise_plan=WorkoutPlan::find($id);
         $exercise_plan->title=$request->title;
         $exercise_plan->workout_image=$request->workout_image;
         $exercise_plan->equiment_name=json_encode($request->equiment_images);
         $exercise_plan->equiment_name=$request->equiment_name;
         $exercise_plan->duration=$request->duration;
         $exercise_plan->instructions=$request->instructions;
         $exercise_plan->save();

         return redirect(url('/workout_plans'))->with('success' , 'Workout Plan Update Successfully');
     }

     public function destroy($id , Request $request)
      {
          $exercise_plan=WorkoutPlan::find($id);
          $exercise_plan->delete();

          return redirect(url('/workout_plans'))->with('success' , 'Workout Plan Update Successfully');
      } 
}
