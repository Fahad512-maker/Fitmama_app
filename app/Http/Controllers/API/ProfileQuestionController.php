<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileQuestion;
use App\Models\ProfileAnswer;
use App\Models\Package;

class ProfileQuestionController extends Controller
{
    public function index($id)
    {
        
            // $already_answers = ProfileAnswer::where('user_id' , '=' , auth('sanctum')->user()->id)->get();
            
            // $ids = $already_answers->pluck('profile_question_id');


            // $questions = ProfileQuestion::whereNotIn('id',$ids)->where('package_id','=',$id)->get();
               $package=Package::find($id);
               
                if($package->id != null){
                    
                    $questions=ProfileQuestion::where('package_id' , $package->id)->get();

                    foreach ($questions as $key => $value) {
                        
                        $questions[$key]->answers=ProfileAnswer::where('profile_question_id' , $value->id)->where('user_id' , auth('sanctum')->user()->id)->select('answer')->latest()->get();

                    }


                    return response()->json([
                        
                        'status' => 200,
                        'questions' => $questions,
                        
                        ]);
                     
                }
                
                else 
                {
                    return response()->json([
                        
                        'status' => 404,
                        'message' => 'Subscriber Questions Not Found',
                        
                        ]);
                }
               
            //  if($questions){

            //   return response()->json([
                 
            //     'status' => 200,
            //     'questions' => $questions,

            //     ]);
            // }

            //   else
            //  {

            //     return response()->json([

            //     'status' => 400,
            //     'message' => 'Subscribe Questions Not Found',

            //     ]);
            //  } 

             } 
}
