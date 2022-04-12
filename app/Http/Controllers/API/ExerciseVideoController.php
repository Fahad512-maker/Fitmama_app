<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkoutPlan;
use App\Models\Video;
use App\Models\ExerciseCategory;
use Carbon\Carbon;

class ExerciseVideoController extends Controller
{
    public function videos()
    {
            $videos=Video::where('package_id' , auth('sanctum')->user()->package_id)->get();
            
            if($videos->isNotEmpty()){
                
                return response()->json([
                    
                    'status' => 200,
                    'videos' => $videos,
                    
                    ]);
            }
            
            else
            
            {
                
                return response([
                    
                    'status' => 404,
                    'message' => 'Videos Not Found'
                    
                    ]);
            }
    
            
    }
}
