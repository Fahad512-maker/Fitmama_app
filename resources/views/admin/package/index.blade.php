@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('package'), 'page_name' => __('package_list')])
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
                                            <h4>Package Lists</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                           <a href="{{ url('/create_package') }}" class="btn" style="background-color: #1abc9c; color: white; display: none;">Add Package</a>
                                        </div>                                                                        
                                    </div>
                                </div>
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible mt-3">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ Session::get('success')}}
                                </div>
                                @endif
                                   
                                <div class="widget-content widget-content-area br-6 mt-3">
                            
                            <table id="html5-extension" class="table table-hover non-hover" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      @if($package->isNotEmpty())
                                    @foreach($package as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td class="font-weight-bold">{{ $value->title }}</td>
                                       <td>
                                            <a href="{{url('package/'.$value->id.'/edit')}}" class="ml-1"><i data-feather="edit"></i></a>
                                            <a href="javascript:void(0)" class="ml-1 delete_option" data-id="{{ $value->id }}"><i data-feather="trash"></i></a>
                                           <a href="{{url('packages/preview/'.$value->id)}}" class="ml-1 view_options" data-id="{{$value->id}}"><i data-feather="eye"></i></a>                                    
                                        </td> 
                                    </tr>
                                    @endforeach
                                    @else
                                     <td colspan="5" class="text-center">No Package Available</td>
                                    @endif
                                       {{--  <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark btn-sm">Open</button>
                                                <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                                </div>
                                        </td> --}}
                                    {{-- </tr> --}}
                                </tbody>
                            </table>
                        </div>


 
                              















                               {{--  <div class="widget-content widget-content-area mt-5"> --}}
                                   {{--  <table class="multi-table table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Package</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($package->isNotEmpty())
                                    @foreach($package as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td class="font-weight-bold">{{ $value->title }}</td>
                                       
                                        <td>
                                            <a href="{{url('package/'.$value->id.'/edit')}}" class="ml-1"><i data-feather="edit"></i></a>
                                            <a href="javascript:void(0)" class="ml-1 delete_option" data-id="{{ $value->id }}"><i data-feather="trash"></i></a>
                                           <a href="{{url('packages/preview/'.$value->id)}}" class="ml-1 view_options" data-id="{{$value->id}}"><i data-feather="eye"></i></a>


                                          
                                        </td> 
                                    </tr>
                                    @endforeach
                                    @else
                                     <td colspan="5" class="text-center">No Package Available</td>
                                    @endif
                                </tbody>
                            </table> --}}
                                   {{--  <form>
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="Email address">
                                            <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control" id="sPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group form-check pl-0">
                                            <div class="custom-control custom-checkbox checkbox-info">
                                                <input type="checkbox" class="custom-control-input" id="sChkbox">
                                                <label class="custom-control-label" for="sChkbox">Subscribe to weekly newsletter</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn mt-3" style="background-color: #1abc9c; color: white;">Submit</button>
                                    </form> --}}

                                {{-- </div> --}}
                            </div>
                        </div>
</div>
</div>
</div>
 @foreach($package as $key => $value)
<div class="modal fade" id="{{$key+1}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Package</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        <h6>Are you Sure!!!</h6>
        </div>
        <div class="modal-footer">
             <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Cancel</button>
                <a href="{{ url('/package/'.$value->id.'/delete') }}" class="btn" style="background-color:#1abc9c; color:white;">Delete</a>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach
@endsection