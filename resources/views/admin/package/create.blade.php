@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('package'), 'page_name' => __('create_package')])
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
                                            <h4>Create Package</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/packages') }}" class="btn" style="background-color: #1abc9c; color: white;">Package List</a>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url('/store_package') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-3">
                                            <label class="font-weight-bold">Title</label>    
                                            <input type="text" name="title" placeholder="Enter Title" class="form-control">
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-4">
                                             <label class="font-weight-bold">Package Image</label>     
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    	</div>
                                         <div class="col-md-6">
                                            <div class="form-group mb-4">
                                             <label class="font-weight-bold">Package Intro Video</label>   
                                            <input type="file" name="intro_video" class="form-control">
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                             <label class="font-weight-bold">One Time Payment Amount</label>   
                                            <input type="text" name="onetime_payment_amount" placeholder="Enter One Time Payment Amount" class="form-control">
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                            <label class="font-weight-bold">Per Month Payment Amount</label>
                                            <input type="text" name="per_month_payment_amount" placeholder="Enter Per Month Payment Amount" class="form-control">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group mb-4">
                                            <label class="font-weight-bold">Description</label>
                                            <textarea name="description" id="ck_editor" class="form-control" placeholder="Enter Package Description"></textarea>
                                          </div>
                                         </div>
                                         <div class="col-md-6">
                                        <label>Symbols</label>
                                        <select name="checkmark" class="form-control symbolic_description">
                                        <option value="0">No Symbolic Description</option>   
                                        <option value="&#10004">Checkmark(&check;)</option>
                                        <option value="&#8226">Bullets(&bull;)</option>
                                        </select>
                                         </div>

                                         <div class="col-md-10 mt-3">
                                            <div class="checkmarked_description" style="display: none;">
                                          <div class="row">
                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                        <textarea name="checkmarked_description[]" class="form-control" placeholder="Symbolic Description"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-1">
                                        <button type="button" class="btn add_more_description" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>  
                                         </div>
                                     </div>

                                    </div>
                                       {{--  <div class="options" style="display: none;">
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                        <input type="text" name="options[]" class="form-control" placeholder="Option">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                        <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>
                                        <div class="multiple_options mt-3"></div>
                                    </div> --}}
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
@endsection