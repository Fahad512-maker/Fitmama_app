<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\UserPackage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
   
    class UserPackagesController extends Controller
     {

        //this function has been updated
        public function index()
        {
             
              $userpackage=UserPackage::where('user_id' , auth()->user()->id)->first();
              if($userpackage->end_date > Carbon::now()){
                  
                 //$package=Package::find(auth('sanctum')->user()->package_id);
                 
                 //Response is updated
                return response()->json([
                      'status' => 200,
                      'package'=>$userpackage
                    ],200);
              
              }      

                  else{
                    
                    return response()->json([
                     
                      'status' => 419, //status code updated
                      'message' => 'Package Expired',
                    ],500);

                  }
              
        }
    
        public function store($id, Request $request){
                
             if($id > 0){

                $packages=Package::find($id);
              
                $userpackages = new UserPackage;
                $userpackages->user_id=auth()->user()->id;
                $userpackages->package_id=$packages->id;
                $userpackages->days = $packages->days;
                $userpackages->end_date = Carbon::now()->addDays($packages->days);
                $userpackages->save();
     
                $user=User::find(auth()->user()->id);
                $user->package_id=$packages->id;
                $user->save();  
    
                return response()->json([
                    'status' => 200,
                    'message'=> 'Package Subscribed Successfully'
                ],200);           
            }

            else

               {
                return response()->json([
                    'status' => 404,
                    'message'=> 'Package Not Found'
                ],404);

               }           
            
        }

    
    }
    
