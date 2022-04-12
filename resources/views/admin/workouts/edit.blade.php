@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('exercises'), 'page_name' => __('edit_exercise')])
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
                                <h4>Add Workout</h4>
                            </div>
                            <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area mt-3">
                        <form action="{{ url('/exercise/'.$exercise->id.'/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Package</label>
                                        <select name="package_id" class="form-control">
                                            <option>-- Select Package --</option>
                                            @foreach($package as $value)
                                            <option value="{{ $value->id }}" {{ $exercise->package_id == $value->id  ? 'selected' : ''}}>{{ $value->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Workout Categories</label>
                                        <select name="exercise_category_id" class="form-control">
                                            <option>-- Select Category --</option>
                                            @foreach($category as $value)
                                            <option value="{{ $value->id }}" {{ $exercise->exercise_category_id == $value->id  ? 'selected' : ''}}>{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Title</label>
                                        <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{ $exercise->title }}">
                                    </div>
                                </div>
                      {{--           <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Workout Video</label>
                                        <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                          <input id="thumbnail" class="form-control" type="text"
                                              name="file" disabled> 
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                             <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn" style="background-color: #1abc9c; color:white">
                                            <i class=""></i>Add Video
                                           </a> 
                                        </div>
                                        </div>
                                     
                                   
                                    </div>
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Training Instructions</label>
                                        <textarea name="training_instructions" id="ck_editor_1" class="form-control" placeholder="Training Instructions">{{ $exercise->training_instructions }}</textarea>
                                        {{-- <small id="emailHelp1" class="form-text text-muted">you'll be create exercise category image</small> --}}
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" id="ck_editor" class="form-control" placeholder="Description">{{ $exercise->description }}</textarea>
                                        {{-- <small id="emailHelp1" class="form-text text-muted">you'll be create exercise category image</small> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Price</label>
                                        <input type="text" name="price" placeholder="Price" class="form-control" value="{{ $exercise->price }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Rounds</label>
                                        <input type="text" name="rounds" placeholder="Number of Rounds" class="form-control" value="{{ $exercise->rounds }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Popular/Unpopular</label>
                                        <select name="is_popular" class="form-control">
                                        <option>--Select Popular status--</option>
                                        <option value="1" {{ $exercise->is_popular == '1'  ? 'selected' : ''}}>Popular</option>
                                        <option value="0" {{ $exercise->is_popular == '0'  ? 'selected' : ''}}>Unpopular</option>
                                        </select>  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Premium</label>
                                        <select name="is_premium" class="form-control">
                                        <option>--Select Premium Status-</option>
                                        <option value="1" {{ $exercise->is_premium == '1'  ? 'selected' : ''}}>Premium</option>
                                        <option value="0" {{ $exercise->is_premium == '0'  ? 'selected' : ''}} >Not Premium</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                 <div class="card">
                                 <div class="card-header">
                                    <h5>Thumbnail</h5>
                                 </div>
                                 <div class="card-body">
                                 <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                 <img src="{{ $exercise->video->thumbnail }}" style="width: 50%;">
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                       <div class="form-group">
                                                        <div class="form-group">
                                                            <div id="holder" style="margin-top:0px;height:118px; width: 138px;border:1px dashed black;" class="mb-3 ml-2">
                                                                <p class="font-weight-bold text-center mt-5">Thumbnails Image</p>
                                                            </div>
                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn" style="background-color:#1abc9c; color:white;">
                                                                <i></i> Add Image
                                                            </a>
                                                            <input id="thumbnail" class="form-control" type="hidden" name="thumbnail">
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
                                    <h5>Video</h5>
                                 </div>
                                 <div class="card-body">
                                 <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                                 <video width="320" height="200" controls class="">
                                            <source src="{{ $exercise->video->file }}" type="video/mp4">
                                            </video>
                                        </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-6 mt-3">
                                       <div class="form-group">
                                                        <div class="form-group">
                                                            <div id="holder_1" style="margin-top:0px;height:118px; width: 138px;border:1px dashed black;" class="mb-3 ml-2">
                                                                <p class="font-weight-bold text-center mt-5">Workout Video</p>
                                                            </div>
                                                            <a id="lfm_1" data-input="thumbnail" data-preview="holder_1" class="btn" style="background-color:#1abc9c; color:white;">
                                                                <i></i> Add Video
                                                            </a>
                                                            <input id="thumbnail_1" class="form-control" type="hidden" name="file">
                                                        </div>
                                                    </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                </div> 

                        
                            </div>
                            <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection