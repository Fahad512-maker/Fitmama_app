@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('users'), 'page_name' => __('add_users')])
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
                                            <h4>Edit Users</h4>
                                        </div>
                                      {{--   <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/users_list') }}" class="btn" style="background-color: #1abc9c; color: white;">Users List</a>
                                        </div>  --}}                                                                       
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form action="{{ url('/user_profile/'.$user->id.'/update') }}" method="POST">
                                    	@csrf
                                        @method('PUT')
                                    	<div class="row">
                                    	<div class="col-md-6">
                                    		<div class="form-group mb-3">
                                             <label>Name</label>   
                                           <input type="text" name="name" placeholder="Enter Name" class="form-control" value="{{ $user->name }}">
                                        </div>
                                    	</div>
                                    	<div class="col-md-6">
                                    	<div class="form-group mb-3">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" id="sEmail" aria-describedby="emailHelp1" placeholder="Example@gmail.com" value="{{ $user->email }}">
                                            {{-- <small id="emailHelp1" class="form-text text-muted">you'll be create own questions</small> --}}
                                        </div>	
                                    	</div>
                                    	<div class="col-md-6">
                                         <label>Phone Number</label>   
                                    	<input type="text" name="phone" class="form-control">
                                    	</div>
                                        <div class="col-md-6">
                                         <label>Packages</label> 
                                         <div class="form-group">
                                        <select name="package_id" class="form-control">
                                        
                                        @foreach($packages as $value)
                                         <option value="{{ $value->id }}" {{ $value->id == $user->package_id ? 'selected' : '' }}>{{ $value->title }}</option> 
                                        @endforeach
                                        </select>
                                         </div>
                                         
                                        </div>

                                    </div>
                                        {{-- <div class="options" style="display: none;">
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
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Update</button>
                                    </form>

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
@endsection