<?php

namespace App\Http\Controllers;

use App\Models\ExerciseCategory;
use App\Http\Requests\StoreExerciseCategoryRequest;
use App\Http\Requests\UpdateExerciseCategoryRequest;

class ExerciseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ExerciseCategory::OrderBy('id' , 'asc')->get();
         $data=['page_title' => 'Exercise Category list' , 'category' => $category];
         return view('admin.workout_category.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=['page_title' => 'Add Category'];
        return view('admin.workout_category.create' ,$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExerciseCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExerciseCategoryRequest $request)
    {

       //  $filename="";
       //  if($request->hasFile('image')){
       //  $file=$request->image;
       //  $filename=time().'.'.$file->getClientOriginalExtension();
       //  $file->move(public_path('package/Exercise/'), $filename);

       // }

       $category=ExerciseCategory::create([
         
         'name' => $request->name,
         'image' => $request->image,
       ]);

       return redirect(url('/exercise_category'))->with('success' , 'Exercise Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ExerciseCategory $exerciseCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id,ExerciseCategory $exerciseCategory)
    {
       $exercisecategory=ExerciseCategory::find($id);
       $data=['page_title' => 'Edit Category' , 'exercisecategory' => $exercisecategory];
       return view('admin.workout_category.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExerciseCategoryRequest  $request
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function update($id,UpdateExerciseCategoryRequest $request, ExerciseCategory $exerciseCategory)
    {
        $exercisecategory=ExerciseCategory::find($id);
        $exercisecategory->name=$request->name;
        $exercisecategory->save();

        return redirect(url('/exercise_category'))->with('success' , 'Exercise Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExerciseCategory  $exerciseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,ExerciseCategory $exerciseCategory)
    {
        $exercisecategory=ExerciseCategory::find($id);
        $exercisecategory->delete();
        return redirect(url('/exercise_category'))->with('success' , 'Category Delete Successfully');
    }

    public function categoryimageupdate($id ,UpdateExerciseCategoryRequest $request, ExerciseCategory $exerciseCategory)
    {
        $filename="";
        if($request->hasFile('image')){
        $file=$request->image;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('package/Exercise/'), $filename);

         }
        $exercisecategory=ExerciseCategory::find($id);
        $exercisecategory->image='package/Exercise/'.$filename;
        $exercisecategory->save();
        return redirect(url('/exercise_category'))->with('success' , 'Image Update Successfully');

    }
}
