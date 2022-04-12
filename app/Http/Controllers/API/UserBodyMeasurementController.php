<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserBodyMeasurement;
use Carbon\Carbon;

class UserBodyMeasurementController extends Controller
{
        public function store(Request $request)
    {
        $user_measurement=UserBodyMeasurement::create([

         'hips' => $request->hips,
         'waist' => $request->waist,
         'biceps' => $request->biceps,
         'thighs' => $request->thighs,
         'chest' => $request->chest,
         'weight' => $request->weight,
         'height' => $request->height,
         'date' => Carbon::now(),
         'user_id' => auth('sanctum')->user()->id

        ]);

        if($user_measurement){

        return response()->json([

         'status' => 200,
         'message' => 'User Body Measurement Inserted Successfully'

        ]);

     }
      else
      {
       
       return response()->json([

         'status' => 400,
         'message' => 'User Body Measurement Insertion Failed',

        ]);


      }
    }

    public function index()
    {
        $userbodymeasurement=UserBodyMeasurement::latest()->get();

        if($userbodymeasurement->isNotEmpty()){

            return response()->json([
             
            'status' => 200, 
            'userbodymeasurement'=>$userbodymeasurement,

            ]);
        }

        else 
          {
             return response()->json([
             
            'status' => 404, 
            'message' => 'User Body Measurements Not Found',

            ],404); 
          }  
    }
}
