<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WaterIntake;
use Carbon\Carbon;

class WaterIntakeController extends Controller
{
   public function storewaterintake(Request $request)
   {
       $water=WaterIntake::create([
        
        'user_id' => auth()->user()->id,
        'liter' => $request->liter,
        'date' => Carbon::now(),

       ]);

       if($water)
       {
        return response()->json([
         
         'status' => 200,
         'message' =>  'Water Intake Successfully',


        ]);
       }

       else

       {

        return response()->json([
       
        'status' => 400,
        'message' => 'Water Intake Failed',

        ]);
       }
   }

   public function getwaterintake()
   {
       $waterintake=WaterIntake::where('user_id' , 1)->first();

       if($waterintake != null){

        return response()->json([
        
         'status' => 200,
         'waterintake' => $waterintake,

        ]);

       }
       else

        {
            return response()->json([
            
             'status' => 404,
             'message' => 'Water Intake Date Not Found',

            ]);
        } 
   }
}
