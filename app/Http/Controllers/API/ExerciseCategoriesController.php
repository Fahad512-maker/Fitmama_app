<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExerciseCategory;

class ExerciseCategoriesController extends Controller
{
   public function index()
   {
       
        $categories=ExerciseCategory::latest()->get();

    if ($categories->isNotEmpty()) {
        
        return response()->json([
          
         'status' => 200,
         'categories' => $categories, 

        ]);
    }

    else

     {
        return response()->json([

          'status' => 404,
          'message' => 'Exercise Categories Not Found',

        ]);
     }   
   }
}
