@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('users'), 'page_name' => __('users_list')])
@section('page_title' , $page_title)
@section('content')
<div id="content" class="main-content">
    <div class="container" style="margin-top: 50px;">
        <div class="container">
            <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-9 col-md-9 col-sm-9 col-9">
                                <h4 class="font-weight-bold">Users Lists</h4>
                            </div>
                            {{-- <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                <a href="{{ url('/users/create') }}" class="btn" style="background-color: #1abc9c; color: white;">Add Users</a>
                            </div>  --}}
                        </div>
                    </div>
                    @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ Session::get('success')}}
                    </div>
                    @endif
                    <div class="container mt-3">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-5">
                                    <div class="form-group">
                                        <select name="package" class="searchusersbypackage selectpicker" style="width:50%; height:30%;">
                                            <option>-- Select Package --</option>
                                            @foreach($package as $value)
                                            <option value="{{ $value->id }}">{{ $value->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-7">
                                    <div class="form-group mb-0">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                <div class="form-group">
                                                    
                                                    <input type="date" name="date" class="form-control datefilter" id="startdate" width="200px">
                                                </div>
                                            </div>
                                            <p class="mt-2">To</p>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                                                
                                                <input type="date" name="date" class="form-control datefilter" id="enddate" width="200px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div id="myDiv" class="text-center">
                        <img id="loading-image" src="{{ asset('admin/assets/img/loader.gif') }}" style="display:none; width:10%; height:10%;">
                        <div class="showusers">
                            @include('admin.users.userlistbypackage')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@foreach($users as $key => $value)
<div class="modal fade" id="delete-{{ $value->id }}" role="dialog">
    <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <h5>Are you Sure?</h5>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Cancel</button>
                <a href="{{ url('/user/'.$value->id.'/delete') }}" class="btn" style="background-color:#1abc9c; color:white;">Delete</a>
            </div>
        </div>
        
    </div>
</div>
@endforeach
{{--  @foreach($questions as $key => $value)
<div class="modal fade" id="{{$key+1}}" role="dialog">
    <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <table class="table table-hover non-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($value->options))
                        <?php $series=1;?>
                        @foreach($value->options as $val)
                        <tr>
                            <td>{{ $series++ }}</td>
                            <td>{{ $val }}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td>No Data Available</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
        
    </div>
</div>
@endforeach --}}
@endsection