@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('susbcribe_questions'), 'page_name' => __('edit_profile_question')])
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
                                            <h4>Subscription Questions</h4>
                                        </div>
                                       {{--  <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/profile_questions/') }}" class="btn" style="background-color: #1abc9c; color: white;">See Questions</a>
                                        </div>    --}}                                                                     
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area mt-5">
                                    <form action="{{ url('/profile_questions/'.$profile_question->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                        @method('PUT')
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-3">
                                            <select name="package_id" class="form-control"> 
                                            <option>-- Select Package --</option>
                                            @foreach($package as $value)
                                            <option value="{{ $value->id }}" {{ $profile_question->package_id == $value->id  ? 'selected' : ''}}>{{ $value->title }}</option>
                                            @endforeach 
                                            </select>
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <input type="text" class="form-control" name="question" id="sEmail" aria-describedby="emailHelp1" placeholder="Question" value="{{ $profile_question->question }}">
                                            <small id="emailHelp1" class="form-text text-muted">you'll be create own questions</small>
                                        </div>	
                                    	</div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <textarea class="form-control" name="sub_text" id="" aria-describedby="emailHelp1" placeholder="Sub Text"></textarea>
                                        </div>  
                                        </div>
                                        <div class="col-md-6">
                                        <input type="number" name="sort_num" class="form-control" min="1" value="{{ $profile_question->sort_num}}" disabled>
                                        </div>
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-4">
                                            <select name="type" class="form-control type">
                                            <option>-- Select Type --</option>
                                            <option value="text" {{ $profile_question->type == 'text' ? 'selected' : '' }}>Text</option>
                                            <option value="checkbox" {{ $profile_question->type == 'checkbox' ? 'selected' : '' }}>Checkbox</option>
                                            <option value="number" {{ $profile_question->type == 'number' ? 'selected' : '' }}>Number</option>
                                            <option value="date" {{ $profile_question->type == 'date' ? 'selected' : '' }}>Date</option>
                                            </select>
                                        </div>
                                    	</div>
                                    </div>
                                        <div class="options" style="display: none;">
                                        <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                        <input type="file" name="images[]" class="form-control">
                                        </div>    
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="options[]" class="form-control" placeholder="Option">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                        <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>
                                        <div class="multiple_options mt-3"></div>
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