<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UpdateWeight;

class UpdateWeightController extends Controller
{
    public function updateweightperweek(Request $request)
    {

        $weight=UpdateWeight::where('weeks' , $request->weeks)->first();

        if(!empty($weight)){

        return response()->json([
         
         'status' => 400,
         'message' => 'This week of weight already exists!',

        ]);
        
       
       }

      else
      {

        $update_weight=UpdateWeight::create([

         'user_id' => auth()->user()->id,
         'package_id' => auth()->user()->package_id,
         'weight' => $request->weight,
         'weeks' => $request->weeks,

        ]);

        if($update_weight){

            return response()->json([

              'status' => 200,
              'message' => 'Weight Added Successfully',

            ]);
        }
        else
          {

            return response()->json([
              
             'status' => 404,
             'message' => 'Weight Added Failed', 

            ]);
          }  
      }  


  }  

  public function showupdatedweight($weeks)
  {
      $update_weight=UpdateWeight::where('user_id' , auth()->user()->id)->where('package_id' , auth()->user()->package_id)->where('weeks' , $weeks)->first();

      if($update_weight != null){

        return response()->json([

         'status' => 200,
         'update_weight' => $update_weight,

        ]);
      }

      else
       {

        return response()->json([
        
        'status' => 404,
        'message' => 'Weight Not Found',


        ]);
       } 
  }
}
