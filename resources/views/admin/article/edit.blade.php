@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('articles'), 'page_name' => __('add_article')])
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
                                            <h4>Add Article</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                          {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area mt-3">
                                    <form action="{{ url('/article/store') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <label>Title</label>
                                         <input type="text" name="title" placeholder="Enter Name" class="form-control">   
                                        </div>
                                    	</div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Article Category</label>
                                         <select name="article_category_id" class="form-control">
                                          <option>-- Select Category --</option>  
                                          @foreach($category as $value)
                                          <option value="{{ $value->id }}">{{ $value->name }}</option>
                                          @endforeach
                                         </select>   
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Package</label>
                                         <select name="package_id" class="form-control">
                                          <option>-- Select Package --</option>  
                                          @foreach($package as $value)
                                          <option value="{{ $value->id }}">{{ $value->title }}</option>
                                          @endforeach
                                         </select>   
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                        <textarea name="description" class="form-control" id="ck_editor" placeholder="Enter Description"></textarea>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                          <div class="form-group">
                                          <label>Author</label>
                                          <select name="author_id" class="form-control">
                                           <option>-- Select Author --</option>
                                           @foreach($author as $key => $value)
                                           <option value="{{ $value->id }}">{{ $value->name }}</option>
                                           @endforeach   
                                          </select>
                                          </div>  
                                         </div>
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Publish/Unpublish</label>
                                         <select name="status" class="form-control">
                                           <option>-- Select Status--</option>
                                           <option value="0">Unpublish</option>
                                           <option value="1">Publish</option>   
                                          </select>
                                         </div>
                                         </div>
                                          <div class="col-md-6">
                                         <div class="form-group">
                                         <label>Popular/Unpopular</label>
                                         <select name="is_popular" class="form-control">
                                           <option>-- Select Popular Status--</option>
                                           <option value="0">Not Popular</option>
                                           <option value="1">Popular</option>   
                                          </select>
                                         </div>
                                         </div>
                                    	
                                    	
                                    </div>
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Update</button>
                                    </form>

                                    <div class="card mt-3">
                                    <div class="card-header">
                                    <h6>Edit Article Category Image</h6>
                                    </div>
                                    <form action="{{ url('/article/'.$article->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="card-body">
                                    <div class="row">
                                     <div class="col-md-5">
                                     <img src="{{ asset($article->image) }}" class="img-fluid" width="200" height="200">
                                     </div>
                                     <div class="col-md-7">
                                      <div class="form-group">
                                                        <div class="form-group">
                                                            <div id="holder" style="margin-top:0px;height:123px; width: 278px;border:1px dashed black;" class="mb-3 ml-2">
                                                                <p class="font-weight-bold text-center mt-5">Article Image</p>
                                                            </div>
                                                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn" style="background-color:#1abc9c; color:white;">
                                                                <i></i> Add Image
                                                            </a>
                                                            <input id="thumbnail" class="form-control" type="hidden" name="image">
                                                        </div>
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