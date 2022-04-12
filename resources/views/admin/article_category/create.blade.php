@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('articles'), 'page_name' => __('add_article_categories')])
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
                                            <h4>Add Article Category</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                          {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area mt-3">
                                    <form action="{{ url('/article_category/store') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <label>Name</label>
                                         <input type="text" name="name" placeholder="Enter Name" class="form-control">   
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    	<div class="form-group">
                                            <label>Image</label>
                                           <input type="file" name="image" class="form-control">
                                            {{-- <small id="emailHelp1" class="form-text text-muted">you'll be create exercise category image</small> --}}
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