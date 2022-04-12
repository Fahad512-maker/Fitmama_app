<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exercise;
use App\Models\ExerciseCategory;
use App\Models\Package;
use App\Models\Video;
use App\Models\FavouriteExercise;
class ExerciseController extends Controller
{
  public function index()
  {
    $exercise=Exercise::OrderBy('id' , 'asc')->get();
      $data=['page_title' => 'Workouts List - Fitmama' , 'exercise' => $exercise];
      return view('admin.workouts.index' ,$data);
  }

  public function create()
  {
      $package=Package::OrderBy('id' , 'asc')->get();
      $category=ExerciseCategory::OrderBy('id' , 'asc')->get();
      $data=['page_title' => 'Add Workouts - Fitmama' , 'package' => $package , 'category' => $category];
      return view('admin.workouts.create' , $data);
  }

  public function store(Request $request)
  {
   
    $video=Video::create([

      'package_id' => $request->package_id,
      'title' => $request->title,
      'thumbnail' => $request->thumbnail,
      'file' => $request->file,

    ]);

    $workout=Exercise::create([
     
     'package_id' => $request->package_id,
     'exercise_category_id' => $request->exercise_category_id,
     'title' => $request->title,
     'training_instructions' => $request->training_instructions,
     'description' => $request->description,
     'video_id' => $video->id,
     'rounds' => $request->rounds,
     'is_popular' => $request->is_popular,
     'is_premium' => $request->is_premium,
     'price' => $request->price,


    ]);
     
     return redirect(url('/exercises'))->with('success' , 'Workout Added Successfully');

  }

  public function edit($id , Request $request)
  {
      $exercise=Exercise::find($id);
      $package=Package::OrderBy('id' , 'asc')->get();
      $category=ExerciseCategory::OrderBy('id' , 'asc')->get();
      $data=['page_title' => 'Workouts List - Fitmama' , 'exercise' => $exercise , 'package' => $package , 'category' => $category];
      return view('admin.workouts.edit' , $data);
  }

  public function update($id, Request $request)
  {
     $workout=Exercise::find($id);
     $workout->package_id=$request->package_id;
     $workout->exercise_category_id=$request->exercise_category_id;
     $workout->title=$request->title;
     $workout->training_instructions=$request->training_instructions;
     $workout->description=$request->description;
     $workout->rounds=$request->rounds;
     $workout->is_popular=$request->is_popular;
     $workout->is_premium=$request->is_premium;
     $workout->price=$request->price;
     $workout->save();

     return redirect(url('/exercises'))->with('success' ,'Workout Update Successfully');

  }

  public function destroy($id, Request $request)
  {
     $workout=Exercise::find($id);
     $workout->delete();
     return redirect(url('/exercises'))->with('success' , 'Workout Delete Successfully');
  }
}
