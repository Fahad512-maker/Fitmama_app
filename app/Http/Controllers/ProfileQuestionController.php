<?php

namespace App\Http\Controllers;

use App\Models\ProfileQuestion;
use App\Http\Requests\StoreProfileQuestionRequest;
use App\Http\Requests\UpdateProfileQuestionRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Package;

class ProfileQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=ProfileQuestion::OrderBy('sort_num' , 'asc')->get();
        $data=['page_title' => 'Subscribition Questions List' , 'questions' => $questions];
        return view('admin.profile_question.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $package=Package::all();
        $data=['page_title' => 'Add Subscribition Questions' , 'package' => $package];
        return view('admin.profile_question.create'  , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProfileQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProfileQuestionRequest $request)
    {
         $images=array();
        if($request->hasFile('images')){
        
        foreach ($request->file('images') as $value) {
        
        $filename=time().'.'.$value->getClientOriginalName();
        $value->move(public_path('question/image/'), $filename);
         $images[]='public/question/image/'.$filename;

       }
   }
          
          ProfileQuestion::create([
          
              'package_id' => $request->package_id,
              'question' => $request->question,
              'subtext' => $request->subtext,
              'type' => $request->type,
              'images' => implode(" , " , $images),
              'options' => $request->options,
              'sort_num' => $request->sort_num

          ]);
         
         return redirect(url('/profile_questions'))->with('success' , 'Subscribition Question added Successfully');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileQuestion $profileQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit($id,ProfileQuestion $profileQuestion)
    {
        $profile_question=ProfileQuestion::find($id);
        $package=Package::all();
        $data=['page_title' => 'Edit Subscribition Questions' , 'profile_question' => $profile_question , 'package' => $package];
        return view('admin.profile_question.edit' ,$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileQuestionRequest  $request
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateProfileQuestionRequest $request, ProfileQuestion $profileQuestion)
    {
       
        $images=array();
        if($request->hasFile('images')){
        
        foreach ($request->file('images') as $value) {
        
        $filename=time().'.'.$value->getClientOriginalExtension();
        $value->move(public_path('question/image/'), $filename);
         $images[]='public/question/image/'.$filename;

       }

   }

        $profile_question=ProfileQuestion::find($id);
        $profile_question->package_id=$request->package_id;
        $profile_question->question=$request->question;
        $profile_question->subtext=$request->subtext;
        $profile_question->type=$request->type;
        $profile_question->images=implode(" , " , $images);
        $profile_question->options=$request->options;
        $profile_question->sort_num=$request->sort_num;
        $profile_question->save();

        return redirect(url('/profilequestionsbypackage/'.$profile_question->package_id))->with('success' , 'Subscribition Question Update Successfully');

        }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileQuestion  $profileQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,ProfileQuestion $profileQuestion)
    {
        $profile_question=ProfileQuestion::find($id);
        $profile_question->delete();
        return redirect(url('/profilequestionsbypackage/'.$profile_question->package_id))->with('success' , 'Subscribition Question Delete Successfully');
    }

    public function profilequestionsbypackage($id)
    {
        $packages=Package::find($id);
        $questions=ProfileQuestion::where('package_id' , $packages->id)->OrderBy('sort_num' , 'asc')->get();
        $data=['page_title' => 'Profile Questions' , 'questions' => $questions , 'packages' => $packages];
        return view('admin.profile_question.profilequestionsbypackage' , $data);
    }
}
