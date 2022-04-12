@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('package_list'), 'page_name' => __('edit_package')])
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
                                            <h4>Edit Package</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/packages') }}" class="btn" style="background-color: #1abc9c; color: white;">Package List</a>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url('/package/'.$package->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                    	@csrf
                                        @method('PUT')
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-3">
                                            <label class="font-weight-bold">Title</label>    
                                            <input type="text" name="title" placeholder="Enter Title" class="form-control" value="{{ $package->title }}">
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    		{{-- <div class="form-group mb-4">
                                             <label class="font-weight-bold">Package Image</label>     
                                            <input type="file" name="image" class="form-control"> --}}
                                            {{-- <img src="{{ asset('/'.$package->image)}}" class="img-fluid" width="50" height="50"> --}}
                                        {{-- </div> --}}
                                    	</div>
                                         {{-- <div class="col-md-6">
                                            <div class="form-group mb-4">
                                             <label class="font-weight-bold">Package Intro Video</label>   
                                            <input type="file" name="intro_video" class="form-control">
                                        </div>
                                        </div> --}}
                                       
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                             <label class="font-weight-bold">One Time Payment Amount</label>   
                                            <input type="text" name="onetime_payment_amount" placeholder="Enter One Time Payment Amount" class="form-control" value="{{ $package->onetime_payment_amount }}">
                                        </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                            <label class="font-weight-bold">Per Month Payment Amount</label>
                                            <input type="text" name="per_month_payment_amount" placeholder="Enter Per Month Payment Amount" class="form-control" value="{{ $package->per_month_payment_amount }}">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                          <div class="form-group mb-4">
                                            <label class="font-weight-bold">Description</label>
                                            <textarea name="description" class="form-control" id="ck_editor" placeholder="Enter Package Description">{{ $package->description}}</textarea>
                                          </div>
                                         </div>
                                        <div class="col-md-6">
                                        <label>Symbols</label>
                                        <select name="checkmark" class="form-control symbolic_description">
                                        <option value="0" {{ $package->checkmark == '0' ? 'selected' : '' }}>No Symbolic Description</option>   
                                        <option value="&#10004" {!! $package->checkmark === '&#10004' ? 'selected' : '' !!}>Checkmark(&check;)</option>
                                        <option value="&#8226" {{ $package->checkmark === '&#8226' ? 'selected' : '' }}>Bullets(&bull;)</option>
                                        </select>
                                         </div>

                                         <div class="col-md-10 mt-3">
                                            @if($package->checkmark_description == null )
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

                                         @else
                                         
                                         
                                         <div class="checkmarked_description" style="display: block;">
                                          <div class="row">
                                             @foreach(json_decode($package->checkmark_description) as $value) 
                                        <div class="col-lg-7 col-md-7 col-sm-7 mt-4">
                                          
                                        <textarea name="checkmark_description[]" class="form-control" placeholder="Symbolic Description">{{ $value }}</textarea>
                                        
                                        </div>
                                          @endforeach
                                        <div class="col-lg-5 col-md-5 col-sm-5 mt-5">
                                        <button type="button" class="btn add_more_description" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>  
                                         </div>
                                        
                                         @endif
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

                                    <div class="row">
                                    
                                       <div class="col-md-12 mt-4">
                                        <form action="{{ url('/package_image/'.$package->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                           <div class="card">
                                            <div class="card-header">
                                            <h5>Edit Package Image</h5>
                                            </div>
                                            <div class="card-body">
                                             <div class="row">
                                        <div class="offset-2 col-md-4">
                                        <img src="{{ asset('/'.$package->image) }}" class="img-fluid" width="100" height="100">
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group mb-4">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="card-footer">
                                        <input type="submit" name="submit" class="btn" style="background-color: #1abc9c; color: white"  value="Submit">
                                        </div>
                                            </div>
                                        </form>
                                           </div> 

                                        <div class="col-md-12 mt-4">
                                            <form action="{{ url('/package_video/'.$package->id.'/update') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                           <div class="card">
                                            <div class="card-header">
                                            <h5>Edit Package Video</h5>
                                            </div>
                                            <div class="card-body">
                                             <div class="row">
                                        <div class="col-md-4">
                                            <video width="320" height="200" controls>
                                            <source src="{{ asset('/'.$package->intro_video) }}" type="video/mp4">
                                            </video>
                                       
                                        </div>
                                        <div class="offset-2 col-md-6">
                                        <div class="form-group mb-4">
                                        <label>Package Video</label>
                                        <input type="file" name="intro_video" class="form-control">
                                        </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="card-footer">
                                        <input type="submit" name="submit" class="btn" style="background-color: #1abc9c; color: white"  value="Submit">
                                        </div>
                                            </div>
                                        </form>
                                           </div>  
                                    </div>

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
@endsection