<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecipeCategory;

class RecipeCategoryController extends Controller
{
    
    public function recipecategory()
    {
        $recipecategories=RecipeCategory::latest()->get();

        if($recipecategories->isnotEmpty()){

            return response()->json([
            
            'status' => 200,
            'recipecategories' => $recipecategories,


            ]);
        }
        else
          {

            return response()->json([
              
              'status' => 404,
              'message' => 'Recipe Categories Not Found',


            ]);
          }  
    }
}
