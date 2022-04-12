@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('exercises'), 'page_name' => __('exercise_category_list')])
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
                                            <h4>Workout Category List</h4>
                                        </div>
                                        <div class="col-xl-3 col-md-3 col-sm-3 col-3">
                                             {{-- <button type="button" class="btn btn-primary mb-2 mr-2" >
                                          Launch modal
                                        </button> --}}
                                           <a href="javascript:void(0)" class="btn" style="background-color: #1abc9c; color: white;" data-target="#exampleModal"  data-toggle="modal">Add Category</a>
                                        </div>                                                                        
                                    </div>
                                </div>
                                @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible mt-3">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    {{ Session::get('success')}}
                                </div>
                                @endif

                 <div class="widget-content widget-content-area br-6 mt-5">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th class="dt-no-sorting">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                      @if($category->isNotEmpty())
                                    @foreach($category as $key => $value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td><img src="{{ $value->image }}" class="img-fluid" width="100" height="100"></td>
                                       <td><a href="{{ url('/exercise_category/'.$value->id.'/edit') }}"><i data-feather="edit"></i></a>
                                           <a href="javascript:void(0)" class="delete_option" data-id="{{ $value->id }}"><i data-feather="trash"></i></a>
                                          {{--  @if($value->options != [null])
                                           <a href="javascript:void(0)" class="ml-1 view_options" data-id="{{$value->id}}"><i data-feather="eye"></i></a></td>
                                           @endif --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                     <td colspan="5" class="text-center">No Data Available</td>
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

















                                <div class="widget-content widget-content-area mt-5">
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

                                </div>
                            </div>
                        </div>
</div>
</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
             {{--    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <svg> ... </svg>
                </button> --}}
            </div>
            <form action="{{ url('/exercise_category/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="modal-body">
               <div class="row">
               <div class="col-md-12">
                <div class="form-group">
                <label class="font-weight-bold">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name">
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
            </div>
            <div class="modal-footer">
                {{-- <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button> --}}
                <button type="submit" class="btn" style="background-color:#1abc9c; color:white;">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>
 @foreach($category as $key => $value)
<div class="modal fade" id="{{$value->id}}" role="dialog">
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
          <button type="button" class="btn" style="background-color:#1abc9c; color:white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach

  @foreach($category as $key => $value)
<div class="modal fade" id="{{$value->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" style="background-color:#1abc9c; color:white;" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach

  @foreach($category as $key => $value)
<div class="modal fade" id="delete-{{$key+1}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">View Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        <h5>Are you Sure?</h5>
        </div>
        <div class="modal-footer">
          <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>Cancel</button>
                <a href="{{ url('/exercise_category/'.$value->id.'/delete') }}" class="btn" style="background-color:#1abc9c; color:white;">Delete</a>
        </div>
      </div>
      
    </div>
  </div>
  @endforeach

 
@endsection