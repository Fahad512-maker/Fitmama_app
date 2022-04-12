@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('media'), 'page_name' => __('workout_plans')])
@section('page_title' ,$page_title)
@section('content')
<div id="content" class="main-content">
<div class="container" style="margin-top: 50px;">
<div class="container">
	                        <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-9 col-md-9 col-sm-9 col-9">
                                            <h4>View Details</h4>
                                        </div>
                                        {{-- <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/exercise_category/create') }}" class="btn" style="background-color: #1abc9c; color: white;">Add Questions</a>
                                        </div>  --}}                                                                       
                                    </div>
                                </div>
                                {{-- @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible mt-3">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ Session::get('success')}}
                                </div>
                                @endif --}}

                 <div class="widget-content widget-content-area br-6 mt-3">

                    <div class="card">
                    <div class="card-header">
                       <h5>{{ $video->title }}</h5> 
                    </div>
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-8">
                    <h5>Descriptions</h5>

                    <p class="mt-5">{{ $video->description }}</p>
                    </div>
                    <div class="col-md-8">
                    <h5>Exercise Videos</h5>

                    @foreach(explode(" , " , $video->file) as $value)
                    <video width="320" height="180" controls >
                    <source src="{{ url($value) }}" type="video/mp4">
                    </video>
                    @endforeach
                    </div>
                    </div>
                    </div>
                    </div>
                        
                        </div>


                            </div>
                        </div>
</div>
</div>
</div>

 
@endsection