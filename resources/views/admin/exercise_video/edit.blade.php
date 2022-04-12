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
                                            <option value="{{ $value->id }}" {{ $video->package_id == $value->id  ? 'selected' : ''}}>{{ $value->title }}</option>
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
                                            <option value="{{ $value->id }}" {{ $video->exercise_category_id == $value->id  ? 'selected' : ''}}>{{ $value->name }}</option>
                                            @endforeach
                                           </select>  
                                        </div> 
                                        </div> 
                                         
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <label>Title</label>
                                         <input type="text" name="title" placeholder="Enter title" class="form-control" value="{{ $video->title }}" >   
                                        </div>
                                    	</div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Price</label>
                                         <input type="text" name="price" placeholder="Enter Price" value="{{ $video->price }}" class="form-control">   
                                        </div>
                                        </div>
                                    	
                                        <div class="col-md-12">
                                            <div class="form-group">
                                         <label>Description</label>   
                                        <textarea name="description" id="ck_editor" class="form-control" placeholder="Description">{{ $video->description }}</textarea>
                                    </div>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                        <label>Popular Status</label>
                                        <select name="is_popular" class="form-control">
                                         <option value="0" {{ $video->is_popular == '0'  ? 'selected' : ''}}>Not popular</option>   
                                         <option value="1" {{ $video->is_popular == '1'  ? 'selected' : ''}}>Popular</option>   
                                        </select>
                                        </div>
                                        
                                    </div>
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Create</button>
                                    </form>


                                    <div class="card mt-3">
                                    <div class="card-header">
                                    <h6>Edit Category Image</h6>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="card-body">
                                    <div class="row">
                                     <div class="col-md-3">
                                     @foreach(explode("," , $video->thumbnail) as $value)
                                     <img src="{{ url('/public/exercise') }}">
                                     @endforeach
                                     </div>
                                     <div class="col-md-7">
                                      <div class="form-group">
                                     <label>Image</label>
                                     <input type="file" name="image" class="form-control">
                                      </div>
                                     </div>   
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                    <input type="submit" name="submit" class="btn" style="background-color: #1abc9c; color: white;">
                                    </div>
                                </form>
                                    </div>

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
@endsection