<?php

namespace App\Http\Controllers;

use App\Models\RecipeCategory;
use App\Http\Requests\StoreRecipeCategoryRequest;
use App\Http\Requests\UpdateRecipeCategoryRequest;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=RecipeCategory::OrderBy('id' , 'asc')->get();
        $data=['page_title' => 'Category List - Fitmama' , 'category' => $category];
        return view('admin.recipe_category.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=['page_title' => 'Add Category - Fitmama'];
        return view('admin.recipe_category.create' , $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipeCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeCategoryRequest $request)
    {

       $category=RecipeCategory::create([
         
         'name' => $request->name,
         'image' => $request->image,
 
       ]);

       return redirect(url('/recipe_category'))->with('success' , 'Recipe Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeCategory $recipeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id, RecipeCategory $recipeCategory)
    {
      $category=RecipeCategory::find($id);
      $data=['page_title' => 'Edit Recipe Category - Fitmama' , 'category' => $category];
      return view('admin.recipe_category.edit' , $data);
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeCategoryRequest  $request
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function update($id, UpdateRecipeCategoryRequest $request, RecipeCategory $recipeCategory)
    {
        $category=RecipeCategory::find($id);
        $category->name=$request->name;
        $category->save();

        return redirect(url('/recipe_category'))->with('success' , 'Recipe Category Update Successfully');
    }

     public function update_image($id, Request $request)
     {
        $category_image=RecipeCategory::find($id);
        $category_image->image=$request->image;
        $category_image->save();

        return redirect(url('/recipe_category'))->with('success' , 'Recipe Category Image Successfully');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeCategory  $recipeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,RecipeCategory $recipeCategory)
    {
        $category=RecipeCategory::find($id);
        $category->delete();
        return redirect(url('/recipe_category'))->with('success' , 'Category Delete Successfully');
    }
}
