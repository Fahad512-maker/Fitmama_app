@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('exercises'), 'page_name' => __('add_exercise_videos')])
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
                                            <h4>Add Exercise Category</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                          {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area mt-3">
                                    <form action="{{ url('/exercise_videos/store') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                    	<div class="row">
                                            <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Packages</label>
                                           <select name="package_id" class="form-control">
                                            <option>-- Select Package --</option>
                                            @foreach($package as $value)
                                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                                            @endforeach
                                           </select>  
                                        </div> 
                                        </div> 
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Exercise Categories</label>
                                           <select name="exercise_category_id" class="form-control">
                                            <option>-- Select Category --</option>
                                            @foreach($category as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                           </select>  
                                        </div> 
                                        </div> 
                                         
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <label>Title</label>
                                         <input type="text" name="title" placeholder="Enter title" class="form-control">   
                                        </div>
                                    	</div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Price</label>
                                         <input type="text" name="price" placeholder="Enter Price" class="form-control">   
                                        </div>
                                        </div>
                                    	
                                        <div class="col-md-12">
                                            <div class="form-group">
                                         <label>Description</label>   
                                        <textarea name="description" id="ck_editor" class="form-control" placeholder="Description"></textarea>
                                    </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                           <input type="file" name="thumbnail[]" class="form-control" multiple="">
                                            {{-- <small id="emailHelp1" class="form-text text-muted">you'll be create exercise category image</small> --}}
                                        </div>  
                                        </div>
                                        <div class="col-md-6 mt-2">
                                        <label>Exercise Video</label>
                                        <input type="file" name="file[]" class="form-control" multiple="">
                                        </div>
                                        <div class="col-md-6 mt-2">
                                        <label>Popular Status</label>
                                        <select name="is_popular" class="form-control">
                                         <option value="0">Not popular</option>   
                                         <option value="1">Popular</option>   
                                        </select>
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