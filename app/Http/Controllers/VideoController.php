<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Exercise;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\ExerciseCategory;
use App\Models\Package;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exercise_videos=Video::OrderBy('id' , 'asc')->get();
        $data=['page_title' => 'Exercise Video - Fitmama' , 'exercise_videos' => $exercise_videos];
        return view('admin.exercise_video.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package=Package::OrderBy('id' , 'asc')->get();
        $category=ExerciseCategory::OrderBy('id' , 'asc')->get();
        $data=['page_title' => 'Add Exercise Videos' , 'category' => $category , 'package' => $package];
        return view('admin.exercise_video.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideoRequest $request)
    {

        $images=array();
        $video=array();
        if($request->hasFile('thumbnail')){
        
        foreach ($request->file('thumbnail') as $value) {
        
        $filename=time().'.'.$value->getClientOriginalExtension();
        $value->move(public_path('exercise/workout_thumbnail/'), $filename);
         $images[]='public/exercise/workout_thumbnail/'.$filename;

       }
        

       if($request->hasFile('file')){
        
        foreach ($request->file('file') as $value) {

          $filevideo=time().'.'.$value->getClientOriginalExtension();
          $value->move(public_path('exercise/workout_videos/'), $filevideo);
          $videos[]='public/exercise/workout_videos/'.$filevideo;
            
        }
   
        $video=Video::create([
         
         'package_id' => $request->package_id,
         'exercise_category_id' => $request->exercise_category_id,
         'title' => $request->title,
         'description' => $request->description,
         'file' => implode(" , " , $videos),
         'thumbnail' => implode(" , " , $images),
         'price' => $request->price,
         'is_popular' => $request->is_popular,
         'views' => 0,
         'status' => 0, 

        ]);

        return redirect(url('/exercise_videos'))->with('success' , 'Exercise Video Added Successfully');
       }

   }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($id,Video $video)
    {
        $video=Video::find($id);
        $data=['page_title' => 'View Details - Fitmama' , 'video' => $video];
        return view('admin.exercise_video.show' , $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Video $video)
    {
        $video=Video::find($id);
        $package=Package::OrderBy('id' , 'asc')->get();
        $category=ExerciseCategory::OrderBy('id' , 'asc')->get();
        $data=['page_title' => 'Edit Videos - Fitmama' , 'video' => $video , 'package' => $package , 'category' => $category];
        return view('admin.exercise_video.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        
    }

     public function update_image($id ,UpdatePackageRequest $request)
    {

         $filename="";
         if($request->hasFile('thumbnail')){
        $file=$request->thumbnail;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('pacakge/Exercise/workout_thumbnail/'), $filename);
      } 
        $package=Package::find($id);
        $package->image='pacakge/Exercise/workout_thumbnail/'.$filename;
        $package->save();

       return redirect(url('/exercise_videos'))->with('success' , 'Exercise Thumbnail Image Update Successfully');
    }

    public function update_video($id ,UpdatePackageRequest $request)
    {
    
     $filevideo="";
       
       if($request->hasFile('file')){
        $file=$request->file;
        $filevideo=time().'.'.$file->getClientOriginalName();
        $file->move(public_path('package/Exercise/workout_videos/'), $filevideo);

       }

       $package=Package::find($id);
       $package->intro_video='package/Exercise/workout_videos/'.$filevideo;
       $package->save();

       return redirect(url('/exercise_videos'))->with('success' , 'Exercise Video Update Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }


}
