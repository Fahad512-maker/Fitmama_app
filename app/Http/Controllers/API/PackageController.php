<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\TermsAndCondition;
use App\Models\SubmitTermsAndCondition;


class PackageController extends Controller
{
       public function index(){
            $packages = Package::all();

            if($packages->isNotEmpty()){
             
             return response()->json([
                'status' => 200,
                'userpackages'=>$packages,
                
            ]);


            }

            else
             {
               
               return response()->json([
                'status'=> 404,
                'message' => 'Package Not Found',
                
            ], 404);

             }   

        }


        public function terms_and_conditions($id)
        {
            $package=Package::find($id);

            if($package){

                $terms_and_conditions=TermsAndCondition::where('package_id' , $package->id)->first();

                if($terms_and_conditions != null){

                    return response()->json([

                     'status' => 200,
                     'terms_and_conditions' => $terms_and_conditions,

                    ] , 200);
                }

                else

                  {

                    return response()->json([
                     
                     'status' => 404,
                     'message' => 'Terms And Conditions Not Found',

                    ]);
                  }  
            }

            else

              {
                return response()->json([
                 
                 'status' => 404,
                 'message' => 'Package Not Found',

                ]);
              }  
        }

        public function submit_terms_and_conditions($id, Request $request)
        {
                $terms=TermsAndCondition::find($id);

                if(!empty($terms)){

                $submit_terms_and_conditions=SubmitTermsAndCondition::create([

                    'user_id' => auth('sanctum')->user()->id,
                    'terms_and_condition_id' => $terms->id,
                    'is_accepted' => $request->is_accepted,
                ]);

                if($submit_terms_and_conditions){

                return response()->json([
                  
                  'status' => 200,
                  'message' => 'Terms and Conditions Accepted',
                  
                ]);
            }

              else

               {
                  
                  return response()->json([
                   
                   'status' => 400,
                   'message' => 'Terms and Conditions Rejected',


                  ]);

               } 

        }

             else

              {
                 
                 return response()->json([

                  'status' => 400,
                  'message' => 'Package Terms and Condtions Not Found'

                 ]);

              }  
        }
}
