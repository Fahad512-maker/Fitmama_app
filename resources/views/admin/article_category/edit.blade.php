@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('articles'), 'page_name' => __('edit_article_category')])
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
                                            <h4>Edit Article Category</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                          {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area mt-3">
                                    <form action="{{ url('/article_category/'.$article_category->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                        @method('PUT')
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <label>Name</label>
                                         <input type="text" name="name" placeholder="Enter Name" class="form-control" value="{{$article_category->name}}">   
                                        </div>
                                    	</div>
	
                                    </div>
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Submit</button>
                                    </form>

                                    <div class="card mt-3">
                                    <div class="card-header">
                                    <h6>Edit Article Category Image</h6>
                                    </div>
                                    <form action="{{ url('/article_category_image/'.$article_category->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                    <div class="card-body">
                                    <div class="row">
                                     <div class="col-md-5">
                                     <img src="{{ asset($article_category->image) }}" class="img-fluid" width="200" height="200">
                                     </div>
                                     <div class="col-md-7">
                                      <div class="form-group">
                                                        <div class="form-group">
                                                            <div id="holder" style="margin-top:0px;height:123px; width: 278px;border:1px dashed black;" class="mb-3 ml-2">
                                                                <p class="font-weight-bold text-center mt-5">Category Image</p>
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
