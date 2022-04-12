@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('exercises'), 'page_name' => __('add_exercise_category')])
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
                                <h4>Add Category</h4>
                            </div>
                            <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                {{--  <a href="{{ url('/profile_questions') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area mt-3">
                        <form action="{{ url('/exercise_category/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Category Image</label>
                                        <div id="holder" style="margin-top:10px;max-height:100px;" class="mb-3 ml-2"></div>
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn" style="background-color:#1abc9c; color:white;">
                                            <i></i> Add Image
                                        </a>
                                        <input id="thumbnail" class="form-control" type="hidden" name="image">
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