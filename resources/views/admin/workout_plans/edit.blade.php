@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('workout_plan'), 'page_name' => __('add_workout_plans')])
@section('page_title' , $page_title)
@section('content')
<div id="content" class="main-content">
    <div class="container" style="margin-top: 30px;">
        <div class="container">
            <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-9 col-md-9 col-sm-9 col-9">
                                <h4>Add Exercise Plans</h4>
                            </div>
                            <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                            </div>
                        </div>
                    </div>
                    <input type="hidden" class="headings" value="0">
                    <div class="widget-content widget-content-area mt-3">
                        <form action="{{ url('/workout_plans/'.$exercise_plan->id.'/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{ $exercise_plan->title }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <input type="text" name="duration" placeholder="1hr5min" class="form-control" value="{{ $exercise_plan->duration }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Instructions</label>
                                        <textarea name="instructions" id="ck_editor" class="form-control" placeholder="Description">{{$exercise_plan->instructions }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Workout Image</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <img src="{{ $exercise_plan->workout_image }}">
                                            </div>    
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                              <div class="form-group">
                                                <div class="form-group">
                                                    <div id="workout_holder" style="margin-top:0px;height:123px; width: 278px;border:1px dashed black;" class="mb-3 ml-2">
                                                        <p class="font-weight-bold text-center mt-5">Featured Image</p>
                                                    </div>
                                                    <a id="lfm_workout" data-input="workout_thumbnail" data-preview="workout_holder" class="btn" style="background-color:#1abc9c; color:white;">
                                                        <i></i> Add Image
                                                    </a>
                                                    <input id="workout_thumbnail" class="form-control" type="hidden" name="workout_image">
                                                </div>
                                            </div>  
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                 <div class="card">
                                <div class="card-header">
                                <h4>Equipements Images</h4>
                                </div>
                                <div class="card-body">
                                <div class="form-group mb-3">
                                     <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                       <div id="holder_1" style="margin-top:0px;height:120px; width: 139px;border:1px dashed black;" class="mb-3 ml-2">
                                                   
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder_1" class="">
                                                     <p class="font-weight-bold text-center mt-4">Equipements Image</p>
                                                </a>
                                                </div>
                                                <input id="thumbnail" class="form-control" type="hidden" name="equiment_images[]"> 
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                       <div id="holder_2" style="margin-top:0px;height:120px; width: 139px;border:1px dashed black;" class="mb-3 ml-2">
                                                   
                                                    <a id="lfm_2" data-input="thumbnail_1" data-preview="holder_2" class="">
                                                     <p class="font-weight-bold text-center mt-4">Equipements Image</p>
                                                </a>
                                                </div>
                                                <input id="thumbnail_1" class="form-control" type="hidden" name="equiment_images[]"> 
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                       <div id="holder_3" style="margin-top:0px;height:120px; width: 139px;border:1px dashed black;" class="mb-3 ml-2">
                                                   
                                                    <a id="lfm_3" data-input="thumbnail_2" data-preview="holder_3" class="">
                                                     <p class="font-weight-bold text-center mt-4">Equipements Image</p>
                                                </a>
                                                </div>
                                                <input id="thumbnail_2" class="form-control" type="hidden" name="equiment_images[]"> 
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                       <div id="holder_4" style="margin-top:0px;height:120px; width: 139px;border:1px dashed black;" class="mb-3 ml-2">
                                                   
                                                    <a id="lfm_4" data-input="thumbnail_3" data-preview="holder_4" class="">
                                                     <p class="font-weight-bold text-center mt-4">Equipements Image</p>
                                                </a>
                                                </div>
                                                <input id="thumbnail_3" class="form-control" type="hidden" name="equiment_images[]"> 
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                       <div id="holder_5" style="margin-top:0px;height:120px; width: 139px;border:1px dashed black;" class="mb-3 ml-2">
                                                   
                                                    <a id="lfm_5" data-input="thumbnail_4" data-preview="holder_5" class="">
                                                     <p class="font-weight-bold text-center mt-4">Equipements Image</p>
                                                </a>
                                                </div>
                                                <input id="thumbnail_4" class="form-control" type="hidden" name="equiment_images[]"> 
                                    </div>
                                     </div>
                                       {{--  <div class="row">
                                            <div class="col-lg-5 col-md-5 col-sm-5">
                                                <div id="holder" style="margin-top:0px;height:123px; width: 278px;border:1px dashed black;" class="mb-3 ml-2">
                                                    <p class="font-weight-bold text-center mt-5">Category Image</p>
                                                </div>
                                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn" style="background-color:#1abc9c; color:white;">
                                                    <i></i> Add Image
                                                </a>
                                                <input id="thumbnail" class="form-control" type="hidden" name="image">
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-5">
                                                <label>Equipement Name</label>
                                                <input type="text" name="equiment_name[]" class="form-control" placeholder="Enter Equipement Name">
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white; margin-top: 32px;">+ Add More</button>
                                            </div>
                                        </div>
                                        <div class="multiple_options mt-3"></div>
                                    </div>
                                </div> --}}
                                 </div>   
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                        <div class="card">
                        <div class="card-header">
                        <h4>Equipement Name</h4>
                        </div>
                        <div class="card-body">
                        <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                                                <label>Equipement Name</label>
                                                <input type="text" name="equiment_name[]" class="form-control" placeholder="Enter Equipement Name">
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2">
                                                <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white; margin-top: 32px;">+ Add More</button>
                                            </div>
                                        </div>
                                        <div class="multiple_options mt-3"></div>
                        </div>
                        </div>
                        </div>
                        </div>
                            <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection