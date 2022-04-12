<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/' , function(){
 
 return view('auth.login');

});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function (){
    \UniSharp\LaravelFilemanager\Lfm::routes();
    Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    Route::get('/delete', [
                'uses' => '\UniSharp\LaravelFilemanager\Controllers\DeleteController@getDelete',
                'as' => 'getDelete',
            ]);


});


Route::get('optimize',function(){
    \Artisan::call('optimize:clear'); 
});

Route::get('storage',function(){
    \Artisan::call('storage:link'); 
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('/dashboard' , [\App\Http\Controllers\Admin\AdminController::class,'index']);
    
    
    Route::get('fresh-docs',function(){
        \Artisan::call('scribe:generate'); 
    });
    
    // Packages
    Route::get('/packages' , [\App\Http\Controllers\PackageController::class,'index']);
    Route::get('/create_package' , [\App\Http\Controllers\PackageController::class,'create']);
    Route::post('/store_package' , [\App\Http\Controllers\PackageController::class,'store']);
    Route::get('/package/{id}/edit' , [\App\Http\Controllers\PackageController::class,'edit']);
    Route::put('/package/{id}/update' , [\App\Http\Controllers\PackageController::class,'update']);
    Route::put('/package_image/{id}/update' , [\App\Http\Controllers\PackageController::class,'update_image']);
    Route::put('/package_video/{id}/update' , [\App\Http\Controllers\PackageController::class,'update_video']);
    Route::get('/package/{id}/delete' , [\App\Http\Controllers\PackageController::class,'destroy']);
    Route::get('/packages/preview/{id}' , [\App\Http\Controllers\PackageController::class,'show']); 

    // Profile Questions
    
    Route::get('/profile_questions' , [\App\Http\Controllers\ProfileQuestionController::class,'index']);
    Route::get('/profile_questions/create' , [\App\Http\Controllers\ProfileQuestionController::class,'create']);
    Route::post('/profile_questions/store' , [\App\Http\Controllers\ProfileQuestionController::class,'store']);
    Route::get('/profile_questions/{id}/edit' , [\App\Http\Controllers\ProfileQuestionController::class,'edit']);
    Route::put('/profile_questions/{id}/update' , [\App\Http\Controllers\ProfileQuestionController::class,'update']);

    Route::get('/profile_questions/{id}/delete' , [\App\Http\Controllers\ProfileQuestionController::class,'destroy']);
    Route::get('/profilequestionsbypackage/{package_id}' , [\App\Http\Controllers\ProfileQuestionController::class,'profilequestionsbypackage']);
    
    // User Profile
    Route::get('/users/create' , [\App\Http\Controllers\Admin\UserController::class,'create']);
    Route::post('/users/store' , [\App\Http\Controllers\Admin\UserController::class,'store']);
    Route::get('/users_list' , [\App\Http\Controllers\Admin\UserController::class,'users_list']);
    Route::get('/user_profile/{id}/edit' , [\App\Http\Controllers\Admin\UserController::class,'edit_users']);
    Route::put('/user_profile/{id}/update' , [\App\Http\Controllers\Admin\UserController::class,'update_users']);
    Route::get('/user_profile/{id}' , [\App\Http\Controllers\Admin\UserController::class,'user_profile']);
    Route::post('/searchuserbypackage/{package_id}' , [\App\Http\Controllers\Admin\UserController::class,'searchuserbypackage']);
    Route::post('/searchuserbydate' , [\App\Http\Controllers\Admin\UserController::class,'searchuserbydate']);
    Route::get('/userlistbypackage/{package_id}' , [\App\Http\Controllers\Admin\UserController::class,'getusersbypackage']);
    Route::get('/getpassword/link/{email}' , [\App\Http\Controllers\Admin\UserController::class,'getresetpassword']);
    Route::post('/updatepasswrod/{email}' , [\App\Http\Controllers\Admin\UserController::class,'updatepassword']);
    Route::get('/pdfview/{id}', [\App\Http\Controllers\Admin\UserController::class,'pdfview']);
    Route::get('/user_achievement/{id}' , [\App\Http\Controllers\Admin\UserController::class,'getuserachievements']);
    Route::get('/user_progress/{id}' , [\App\Http\Controllers\Admin\UserController::class,'getuserprogress']);
    Route::get('/user_bodymeasurements/{id}' , [\App\Http\Controllers\Admin\UserController::class,'getusermeasurement']);
    Route::get('user/{id}/delete' , [\App\Http\Controllers\Admin\UserController::class,'destroy']);

    // Exercise Category
     
    Route::get('/exercise_category/create' , [\App\Http\Controllers\ExerciseCategoryController::class,'create']);
    Route::post('/exercise_category/store' , [\App\Http\Controllers\ExerciseCategoryController::class,'store']);
    Route::get('/exercise_category' , [\App\Http\Controllers\ExerciseCategoryController::class,'index']); 
    Route::get('/exercise_category/{id}/edit' , [\App\Http\Controllers\ExerciseCategoryController::class,'edit']);
    Route::put('/exercise_category/{id}/update' , [\App\Http\Controllers\ExerciseCategoryController::class, 'update']);
    Route::get('/exercise_category/{id}/delete' , [\App\Http\Controllers\ExerciseCategoryController::class,'destroy']);
    Route::put('/category_image/{id}/update' , [\App\Http\Controllers\ExerciseCategoryController::class,'categoryimageupdate']);
    
    // Exercise

    Route::get('/exercise/create' , [\App\Http\Controllers\ExerciseController::class,'create']);
    Route::post('/exercise/store' , [\App\Http\Controllers\ExerciseController::class,'store']);
    Route::get('/exercises' , [\App\Http\Controllers\ExerciseController::class,'index']); 
    Route::get('/exercise/{id}/edit' , [\App\Http\Controllers\ExerciseController::class,'edit']);
    Route::put('/exercise/{id}/update' , [\App\Http\Controllers\ExerciseController::class,'update']);
    Route::get  ('/exercise/{id}/delete' , [\App\Http\Controllers\ExerciseController::class,'destroy']);

    // Workout Plans

    Route::get('/workout_plans' , [App\Http\Controllers\WorkoutPlansController::class , 'index']);
    Route::get('/create/workout_plan' , [App\Http\Controllers\WorkoutPlansController::class,'create']);
    Route::post('/workout_plans/store' , [\App\Http\Controllers\WorkoutPlansController::class,'store']);
    Route::get('/workout_plans/{id}/edit' , [\App\Http\Controllers\WorkoutPlansController::class,'edit']);
    Route::put('/workout_plans/{id}/update' , [\App\Http\Controllers\WorkoutPlansController::class,'update']);
    Route::get('/workout_plans/{id}/delete' , [\App\Http\Controllers\WorkoutPlansController::class,'destroy']);

    // Videos

    Route::get('/exercise_videos' , [\App\Http\Controllers\VideoController::class,'index']);
    Route::get('/exercise_videos/create' , [\App\Http\Controllers\VideoController::class,'create']);
    Route::post('/exercise_videos/store' , [\App\Http\Controllers\VideoController::class,'store']);
    Route::get('/exercise_videos/{id}/edit' , [\App\Http\Controllers\VideoController::class,'edit']);
     Route::put('/exercise_thumbnailimage/{id}/update' , [\App\Http\Controllers\VideoController::class,'update_image']);
    Route::put('/exercise_thumbnailvideo/{id}/update' , [\App\Http\Controllers\VideoController::class,'update_video']);
    Route::put('/exercise_videos/{id}/update' , [\App\Http\Controllers\VideoController::class,'update']);
    Route::get('/exercise_videos/{id}/delete' , [\App\Http\Controllers\VideoController::class,'destroy']);
    Route::get('/exercise_videos/{id}/show' , [\App\Http\Controllers\VideoController::class,'show']);
    
    // Article Category

    Route::get('/article_category' , [\App\Http\Controllers\ArticleCategoryController::class , 'index']);
    Route::get('/article_category/create' , [\App\Http\Controllers\ArticleCategoryController::class , 'create']);
    Route::post('/article_category/store' , [\App\Http\Controllers\ArticleCategoryController::class , 'store']);
    Route::get('/article_category/{id}/edit' , [\App\Http\Controllers\ArticleCategoryController::class , 'edit']);
    Route::put('/article_category/{id}/update' , [\App\Http\Controllers\ArticleCategoryController::class , 'update']);
    Route::put('/article_category_image/{id}/update' , [\App\Http\Controllers\ArticleCategoryController::class , 'update_image']);
    Route::get('/article_category/{id}/delete' , [\App\Http\Controllers\ArticleCategoryController::class,'destroy']);
       
     // Article

    Route::get('/articles' , [\App\Http\Controllers\ArticleController::class , 'index']);
    Route::get('/article/create' , [\App\Http\Controllers\ArticleController::class , 'create']);
    Route::post('/article/store' , [\App\Http\Controllers\ArticleController::class , 'store']);
    Route::get('/article/{id}/edit' , [\App\Http\Controllers\ArticleController::class , 'edit']);
    Route::put('/article/{id}/update' , [\App\Http\Controllers\ArticleController::class , 'update']);
    Route::put('/article_image/{id}/update' , [\App\Http\Controllers\ArticleController::class , 'update_image']);
    Route::get('/article/{id}/delete' , [\App\Http\Controllers\ArticleController::class,'destroy']);

    // Author

    Route::get('/author' , [\App\Http\Controllers\AuthorController::class , 'index']);
    Route::get('/author/create' , [\App\Http\Controllers\AuthorController::class , 'create']);
    Route::post('/author/store' , [\App\Http\Controllers\AuthorController::class , 'store']);
    Route::get('/author/{id}/edit' , [\App\Http\Controllers\AuthorController::class , 'edit']);
    Route::put('/author/{id}/update' , [\App\Http\Controllers\AuthorController::class , 'update']);
    Route::put('/article_image/{id}/update' , [\App\Http\Controllers\AuthorController::class , 'update_image']);
    Route::get('/author/{id}/delete' , [\App\Http\Controllers\AuthorController::class,'destroy']);

    // Recipe Category

    Route::get('/recipe_category' , [\App\Http\Controllers\RecipeCategoryController::class , 'index']);
    Route::get('/recipe_category/create' , [\App\Http\Controllers\RecipeCategoryController::class , 'create']);
    Route::post('/recipe_category/store' , [\App\Http\Controllers\RecipeCategoryController::class , 'store']);
    Route::get('/recipe_category/{id}/edit' , [\App\Http\Controllers\RecipeCategoryController::class , 'edit']);
    Route::put('/recipe_category/{id}/update' , [\App\Http\Controllers\RecipeCategoryController::class , 'update']);
    Route::put('/recipe_category_image/{id}/update' , [\App\Http\Controllers\RecipeCategoryController::class , 'update_image']);
    Route::get('/recipe_category/{id}/delete' , [\App\Http\Controllers\RecipeCategoryController::class,'destroy']);
      
    // Recipe

    Route::get('/recipes' , [\App\Http\Controllers\ArticleController::class , 'index']);
    Route::get('/recipe/create' , [\App\Http\Controllers\ArticleController::class , 'create']);
    Route::post('/recipe/store' , [\App\Http\Controllers\ArticleController::class , 'store']);
    Route::get('/recipe/{id}/edit' , [\App\Http\Controllers\ArticleController::class , 'edit']);
    Route::put('/recipe/{id}/update' , [\App\Http\Controllers\ArticleController::class , 'update']);
    Route::put('/recipe_image/{id}/update' , [\App\Http\Controllers\ArticleController::class , 'update_image']);
    Route::get('/article/{id}/delete' , [\App\Http\Controllers\ArticleController::class,'destroy']);


});
