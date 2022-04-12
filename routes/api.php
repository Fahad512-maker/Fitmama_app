<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login',[\App\Http\Controllers\API\AuthController::class,'login']);

Route::post('register',[\App\Http\Controllers\API\AuthController::class,'register']);

Route::middleware(['auth:sanctum'])->group(function(){
    
    // Logout 
    Route::post('logout',[\App\Http\Controllers\API\AuthController::class,'logout']);

    // Update User Profile

    Route::get('user_goals' , [\App\Http\Controllers\API\AppUserController::class , 'user_goals']);
    
       //  Packages
    Route::get('packages' , [\App\Http\Controllers\API\PackageController::class,'index']);
    
    // Subscribe Packages
    Route::post('user_packages/{package_id}/store',[\App\Http\Controllers\API\UserPackagesController::class,'store']);
    Route::get('subscribed_package' , [\App\Http\Controllers\API\UserPackagesController::class,'index']);
    
    // Profile Question 
    Route::get('/profile_questions/{id}' , [\App\Http\Controllers\API\ProfileQuestionController::class,'index']);

    // Profile Answer 
    Route::post('/profile_answer/{question_id}' , [\App\Http\Controllers\API\ProfileAnswerController::class,'store']);

     // User Measurement Body

 Route::post('/user_body_measurement/store' , [\App\Http\Controllers\API\UserBodyMeasurementController::class,'store']);
 Route::get('/user_body_measurement' , [\App\Http\Controllers\API\UserBodyMeasurementController::class,'index']);

   // Exercise Categories

   Route::get('/exercises_categories' , [\App\Http\Controllers\API\ExerciseCategoriesController::class,'index']);

   // Exercises

   Route::get('/exercises' , [\App\Http\Controllers\API\ExerciseController::class,'index']);

    // Popular Exercise

   Route::get('/popular_exercise' , [\App\Http\Controllers\API\ExerciseController::class,'popular_exercise']);

   // Favourite Exercise
    
    Route::put('/updatefavouritexercise/{id}' , [\App\Http\Controllers\API\ExerciseController::class,'storefavouriteexercise']);
    Route::get('/favourite_exercise' , [\App\Http\Controllers\API\ExerciseController::class,'favourite_exercise']); 

   // Exercises Videos

    Route::get('/exercise_videos' , [\App\Http\Controllers\API\ExerciseVideoController::class,'videos']); 
   
   // Workout Plans
   

  Route::get('/workout' , [\App\Http\Controllers\API\WorkoutPlansController::class,'workout']);
  Route::put('/workout_completion' , [\App\Http\Controllers\API\WorkoutPlansController::class,'completeworkout']);

     // Get Workouts By Date

   Route::post('/workoutplansbydate' , [\App\Http\Controllers\API\WorkoutPlansController::class,'workoutplansbydate']);

  // Terms and Conditions

  Route::get('/termsandconditions/{id}' , [\App\Http\Controllers\API\PackageController::class,'terms_and_conditions']);

  Route::post('/submit_terms_and_condtion/{terms_and_conditions_id}' , [\App\Http\Controllers\API\PackageController::class,'submit_terms_and_conditions']);

  // Update weight per week

  Route::post('/update_weight_per_weeks' , [\App\Http\Controllers\API\UpdateWeightController::class , 'updateweightperweek']);

  Route::get('/update_weight/{week}' , [\App\Http\Controllers\API\UpdateWeightController::class , 'showupdatedweight']);

  // Water Intake

   Route::post('/store_water_intake' , [\App\Http\Controllers\API\WaterIntakeController::class , 'storewaterintake']);
   Route::get('/water_intake' , [\App\Http\Controllers\API\WaterIntakeController::class , 'getwaterintake']);
   
      // Article Category

   Route::get('/article_categories' , [\App\Http\Controllers\API\ArticleCategoriesController::class,'index']);

  // Articles

  Route::get('/articles', [\App\Http\Controllers\API\ArticleController::class,'index']); 

  // Popular Articles

  Route::get('/popular_articles' , [\App\Http\Controllers\API\ArticleController::class,'popular_articles']);

  // Favourite Articles
  Route::put('/favouritarticle/{id}' , [\App\Http\Controllers\API\ArticleController::class,'favorutiearticle']);
  Route::get('/favourite_articles' , [\App\Http\Controllers\API\ArticleController::class,'favourite_artilces']);


 // Search Article

  Route::post('/searcharticlebycategory' , [\App\Http\Controllers\API\ArticleController::class,'searcharticlebycategory']);

  // Food recipe categories

  Route::get('/recipe_categories' , [\App\Http\Controllers\API\RecipeCategoryController::class,'recipecategory']);

  // Food recipes 

  Route::get('/recipes' , [\App\Http\Controllers\API\RecipeController::class,'recipes']);

  // Popular Articles

  Route::get('/popular_recipes' , [\App\Http\Controllers\API\RecipeController::class,'popular_recipes']);

  // Favourite Recipes
  Route::put('/updatefavouriterecipe/{id}' , [\App\Http\Controllers\API\RecipeController::class,'updatefavouriterecipes']);
  Route::get('/favourite_recipes' , [\App\Http\Controllers\API\RecipeController::class,'favourite_recipes']);

    // Search Recipes

   Route::post('/searchrecipe' , [\App\Http\Controllers\API\RecipeController::class,'searchrecipe']);
    // Meal Plans
   

   Route::get('/meal_plans' , [\App\Http\Controllers\API\MealPlanController::class,'mealplans']);

     // Get Meal By Date

   Route::post('/mealplansbydate' , [\App\Http\Controllers\API\MealPlanController::class,'mealplansbydate']);
   
   
   //POST FCM Token
   Route::post('/save_fcm_token',[\App\Http\Controllers\API\AppUserController::class,'save_fcm_token']);
   // FCM
   Route::post('/send_notification', [App\Http\Controllers\API\AppUserController::class, 'sendNotification']);
   
   
   

   
});


 
Route::post('/forget_password' , [\App\Http\Controllers\API\NewPasswordController::class,'ForgetPassword']);
Route::post('/require_otp/{email}' , [\App\Http\Controllers\API\NewPasswordController::class,'RequiredOtpCode']);
Route::post('/updatepassword/{email}' , [\App\Http\Controllers\API\NewPasswordController::class,'UpdatePassword']);
