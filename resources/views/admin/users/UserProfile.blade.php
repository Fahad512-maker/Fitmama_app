@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('users'), 'page_name' => __('user_profile_data')])
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing">
            <!-- Content -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing ml-3">
                <div class="row">
                    <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h2>Views Users</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area rounded-pills-icon">
                                
                                <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                                    {{-- <li class="nav-item ml-2 mr-2">
                                        <a class="nav-link mb-2  text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                    </li> --}}
                                    <li class="nav-item ml-2 mr-2">
                                        <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>General Profile</a>
                                    </li>
                                    <li class="nav-item ml-2 mr-2">
                                        <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill" href="#rounded-pills-icon-contact" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false"><i data-feather="file"></i>Breif Details</a>
                                    </li>
                                    <li class="nav-item ml-2 mr-2">
                                        <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab" data-toggle="pill" href="#rounded-pills-icon-settings" role="tab" aria-controls="rounded-pills-icon-settings" aria-selected="false"><i data-feather="activity"></i>Progress</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="rounded-pills-icon-tabContent">
                                    {{-- <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                                        <p class="mb-4">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div> --}}
                                    <div class="tab-pane fade show active" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                                        
                                        <div class="skills layout-spacing ">
                                            <div class="jumbotron">
                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                        <h3 class=""><i data-feather="user" style="color: #1abc9c;"></i>&nbsp; {{ucwords($users->name)}}</h3>
                                                    </div>
                                                    <div class="offset-2 col-lg-2 col-md-2 col-sm-2 col-2">
                                                        <a href="{{ url('/user_profile/'.$users->id.'/edit') }}" class="btn" style="background: #1abc9c; color: white;"><i data-feather="edit"></i></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                        <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class='w-100 p-4' title="profile-image">
                                                        <div class="mt-3 ml-5">
                                                            <h6 class="mt-3"><i data-feather="coffee" style="color: #1abc9c;"></i>&nbsp; Web Developer</h6>
                                                            <h6 class="mt-3"><i data-feather="mail" style="color: #1abc9c;"></i>&nbsp; {{ $users->email }}</h6>
                                                            <h6 class="mt-3"><i data-feather="phone" style="color: #1abc9c;"></i>&nbsp; +9233333333</h6>
                                                            
                                                            <h6 class="mt-3"><i data-feather="calendar" style="color: #1abc9c;"></i>&nbsp; 7-May-2002</h6>
                                                            @if($users->status != 0)
                                                            <h6 class="mt-3"><i data-feather="user-check" style="color: #1abc9c;"></i>&nbsp; Active</h6>
                                                            @else
                                                            <h6 class="mt-3"><i data-feather="user-minus" style="color: #1abc9c;"></i>&nbsp; InActive</h6>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-12">
                                                        <div class="px-4 pt-4">
                                                            {{-- @if($package->per_month_payment_amount)
                                                            <h5>Per Month Payment £{{$package->per_month_payment_amount}}</h5>
                                                            @endif
                                                            
                                                            @if($package->onetime_payment_amount)
                                                            <h5>One Time Payment Amount £{{$package->onetime_payment_amount}}</h5>
                                                            @endif --}}
                                                            <h5><i data-feather="package" style="color: #1abc9c;"></i>&nbsp; {{ $users->package->title }} </h5>
                                                        </div>
                                                        <div class="p-4">
                                                            <h4><i data-feather="clipboard" style="color: #1abc9c;"></i>&nbsp; Meal Plan</h4>
                                                            
                                                            
                                                        </div>
                                                        <div class="p-4">
                                                            <h4><i data-feather="activity" style="color: #1abc9c;"></i>&nbsp; Workout Plan</h4>
                                                            {{-- @if($package->checkmark_description)
                                                            @foreach(json_decode($package->checkmark_description) as $value)
                                                            <p style=" text-align: justify-all;"><span style="color: #1abc9c">{!! $package->checkmark !!}</span>&nbsp; {{ $value }}</p>
                                                            @endforeach
                                                            @endif --}}
                                                        </div>
                                                        <div class="p-4">
                                                            {{-- <h5 class="font-weight-bold">Introduction Video Of {{ $package->title }}</h5>
                                                            <video width="320" height="200" controls class="mt-5">
                                                                <source src="{{ asset('/'.$package->intro_video) }}" type="video/mp4">
                                                            </video> --}}
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                {{-- <div class="progress br-30">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>PHP</span> <span>25%</span> </div></div>
                                                </div> --}}
                                                {{-- <div class="progress br-30">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Wordpress</span> <span>50%</span> </div></div>
                                                </div> --}}
                                                {{-- <div class="progress br-30">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Javascript</span> <span>70%</span> </div></div>
                                                </div>
                                                <div class="progress br-30">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>jQuery</span> <span>60%</span> </div></div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel" aria-labelledb="rounded-pills-icon-contact-tab">
                                        <div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing ml-3">
                                            <div class="skills layout-spacing ">
                                                <div class="widget-content widget-content-area">
                                                    <h3 class="">Questions/Answers</h3>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" style="text-align: left; width: 100%; overflow: auto; border-collapse: collapse;border-spacing: 0;width: 100%;border: 1px solid #ddd;">
                                                            <thead>
                                                                <tr>
                                                                    <th style="text-align: left;padding: 8px; background: ;">Questions</th>
                                                                    <th style="text-align: left;padding: 8px;">Answers</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                
                                                                
                                                                @if($users->subscribed_package !=null)
                                                                @foreach($users->subscribed_package->package->profilequestion as $q)
                                                                <tr>
                                                                    <td style="width: 50%;text-align: left;padding: 8px;">{{ $q->question }}</td>
                                                                    
                                                                    <td>
                                                                        @php
                                                                        $ans = App\Models\ProfileAnswer::where('profile_question_id',$q->id)->where('user_id',$users->id)->latest()->first();
                                                                        @endphp
                                                                        @if($ans)
                                                                        @if(!is_array($ans->answer))
                                                                        {{$ans->answer}}
                                                                        @endif
                                                                        @endif
                                                                    </td>
                                                                    
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="10" class="text-center">No Data Available</td>
                                                                </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                        
                                                    </div>
                                                    <div class="text-right mt-5">
                                                        <a href="javascript:void(0)" onclick="printReport('divToPrint');"  class="btn" style="background:#1abc9c; color: white;">Download Now</a>
                                                    </div>
                                    
                                                </div>
                                                                <div id='divToPrint' style="display:none;">
                                                        <div class="d-flex justify-content-between">
                                                            <h3 style="color:#1abc9c; ;">Subscriber Name: <span style="color:black">{{ ucwords($users->name) }}</span></h3>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered" style="text-align: left; width: 100%; overflow: auto; border-collapse: collapse;border-spacing: 0;width: 100%;border: 2px solid #ddd;   font-family: arial, sans-serif;">
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="border: 1px solid #dddddd;text-align: left;padding: 14px; background:#1abc9c; color:white;">Questions</th>
                                                                            <th style=" border: 1px solid #dddddd;text-align: left;padding: 14px; background:#1abc9c; color:white; font-weight: 20;">Answers</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody style="margin-top: 30px;">
                                                                        
                                                                        
                                                                        @if($users->subscribed_package !=null)
                                                                        @foreach($users->subscribed_package->package->profilequestion as $q)
                                                                        <tr>
                                                                            <td style="width: 50%;border: 1px solid #dddddd;text-align: left;padding: 8px;">{{ $q->question }}</td>
                                                                            
                                                                            <td style="text-align: left; border: 1px solid #dddddd;padding: 8px;">
                                                                                @php
                                                                                $ans = App\Models\ProfileAnswer::where('profile_question_id',$q->id)->where('user_id',$users->id)->latest()->first();
                                                                                @endphp
                                                                                @if($ans)
                                                                                @if(!is_array($ans->answer))
                                                                                {{$ans->answer}}
                                                                                @endif
                                                                                @endif
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                        @endforeach
                                                                        @else
                                                                        <tr>
                                                                            <td colspan="10" class="text-center">No Data Available</td>
                                                                        </tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                                
                                                            </div>
                                                        </div>
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>PHP</span> <span>25%</span> </div></div>
                                                        </div> --}}
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Wordpress</span> <span>50%</span> </div></div>
                                                        </div> --}}
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Javascript</span> <span>70%</span> </div></div>
                                                        </div>
                                                        <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>jQuery</span> <span>60%</span> </div></div>
                                                        </div> --}}
                                                    </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                            
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                            <h3 class="">User Achievements</h3>
                                                        </div>
                                                        <div class="offset-2 col-lg-2 col-md-2 col-sm-2 col-2 mt-1">
                                                            <a href="javascript:void(0)" class="btn" style="background: #1abc9c; color: white;"><i data-feather="edit"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <img src="{{ asset('badges/badge_1.png') }}" class="img-fluid ml-5" style="width:50%;">
                                                            <p class="text-center font-weight-bold">First Week Completion Award</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <img src="{{ asset('badges/badge_2.png') }}" class="img-fluid ml-5" style="width:50%;">
                                                            <p class="text-center font-weight-bold">Checking In Food Award</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <img src="{{ asset('badges/badge_3.png') }}" class="img-fluid ml-5" style="width:50%;">
                                                            <p class="text-center font-weight-bold">Half Way Reward</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <img src="{{ asset('badges/badge_4.png') }}" class="img-fluid ml-5" style="width:50%;">
                                                            <p class="text-center font-weight-bold">Daily Movement Award</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-3">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                            <h3 class="">User Progress</h3>
                                                        </div>
                                                        <div class="offset-2 col-lg-2 col-md-2 col-sm-2 col-2 mt-1">
                                                            {{-- <a href="javascript:void(0)" class="btn" style="background: #1abc9c; color: white;"><i data-feather="edit"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                             <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Front Image</th>
                                                                    <th>Back Image</th>
                                                                    <th>Side Image</th>
                                                                    <th>Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>09-04-2022</td>
                                                               <td><a href="javascript:void(0)"><i data-feather="edit"></i></a>
                                                                </td>
                                                               </tr>
                                                                 <tr>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>10-04-2022</td>
                                                               <td><a href="javascript:void(0)"><i data-feather="edit"></i></a>
                                                                </td>
                                                               </tr>
                                                                <tr>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>
                                                                <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid" style="width:50%">
                                                               </td>
                                                               <td>11-04-2022</td>
                                                               <td><a href="javascript:void(0)"><i data-feather="edit"></i></a>
                                                                </td>
                                                               </tr>
                                                            </tbody>
                                                        </table>
                                                         
                                                        </div>
                                                        {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid ml-5" style="width:50%">
                                                            <p class="text-center font-weight-bold">First Week Completion Award</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <img src="{{ asset('admin/assets/img/90x90.jpg') }}" class="img-fluid ml-5" style="width:50%">
                                                            <p class="text-center font-weight-bold">First Week Completion Award</p>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                                                            <h5>Date</h5>
                                                            10-4-2022
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mt-3">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
                                                            <h3 class="">User Body Measurements</h3>
                                                        </div>
                                                        <div class="offset-2 col-lg-2 col-md-2 col-sm-2 col-2 mt-1">
                                                            {{-- <a href="javascript:void(0)" class="btn" style="background: #1abc9c; color: white;"><i data-feather="edit"></i></a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="widget-content widget-content-area">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Hips</th>
                                                                    <th>Waist</th>
                                                                    <th>Biceps</th>
                                                                    <th>Thighs</th>
                                                                    <th>Chest</th>
                                                                    <th>Weight</th>
                                                                    <th>Height</th>
                                                                    <th>Date</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @if($measurements !=null)
                                                                @foreach($measurements as $value)
                                                                <tr>
                                                                    @if($value->hips !='')
                                                                    <td>{{ $value->hips }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->waist !='')
                                                                    <td>{{ $value->waist }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->biceps !='')
                                                                    <td>{{ $value->biceps }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->thighs !='')
                                                                    <td>{{ $value->thighs }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->chest !='')
                                                                    <td>{{ $value->chest  }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->weight !='')
                                                                    <td>{{ $value->weight }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->height !='')
                                                                    <td>{{ $value->height }}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    @if($value->date !='')
                                                                    <td>{{$value->date}}</td>
                                                                    @else
                                                                    <td class="font-weight-bold">-</td>
                                                                    @endif
                                                                    <td><a href="{{ url('/exercise_category/'.$value->id.'/edit') }}"><i data-feather="edit"></i></a>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="10" class="text-center">No Measurement Available</td>
                                                                </tr>
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>PHP</span> <span>25%</span> </div></div>
                                                        </div> --}}
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Wordpress</span> <span>50%</span> </div></div>
                                                        </div> --}}
                                                        {{-- <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Javascript</span> <span>70%</span> </div></div>
                                                        </div>
                                                        <div class="progress br-30">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>jQuery</span> <span>60%</span> </div></div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                <div class="card-header">
                                    <h3>Assign Plan</h3>
                                 </div>
                                 <div class="card-body">
                                 <div class="row">

                                <div class="offset-2 col-lg-4 col-md-4 col-sm-4 col-4">
                                 <form>
                                 <div class="form-group">
                                 <a href="javascript:void(0)" class="btn" style="background:#1abc9c; color:white"><i data-feather="coffee"></i>&nbsp;Assign Meal Plan</a>
                                 </div>
                                 </form>
                                </div>
                                <div class="offset-2 col-lg-4 col-md-4 col-sm-4 col-4">
                                 <form>
                                 <div class="form-group">
                                 <a href="javascript:void(0)" class="btn btn-danger"><i data-feather="activity"></i>&nbsp;Assign Workout Plan</a>
                                 </div>
                                 </form>
                                </div>
                                 </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-info-list">
                        <div class="row">
                            <!--<div class="col-md-6">-->
                            <!--<ul class="contacts-block list-unstyled mt-4 ">-->
                            <!--     <li class="contacts-block__item">-->
                            <!--        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> Web Developer-->
                            <!--    </li>-->
                            <!--</ul>-->
                            <!-- </div>-->
                            {{-- <div class="col-md-12"> --}}
                                {{--  <ul class="contacts-block list-unstyled mt-4 text-center">
                                    <li class="contacts-block__item mt-1">
                                        <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>&nbsp{{ $users->email }}</a>
                                    </li>
                                </ul> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="">
                            {{-- <ul class="contacts-block list-unstyled mt-4 ">
                                <li class="contacts-block__item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg> Web Developer
                            </li>
                            <li class="contacts-block__item mt-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>Jan 20, 1989
                        </li>
                        <li class="contacts-block__item mt-1">
                            <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>&nbsp</a>
                        </li>
                        <li class="contacts-block__item mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +1 (530) 555-12121
                    </li> --}}
                    {{-- <li class="contacts-block__item">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="social-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="social-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <div class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </div>
                </li>
            </ul>
        </li> --}}
    {{-- </ul> --}}
</div>
</div>


{{--                         <div class="education layout-spacing ">
<div class="widget-content widget-content-area">
    <h3 class="">Education</h3>
    <div class="timeline-alter">
        <div class="item-timeline">
            <div class="t-meta-date">
                <p class="">04 Mar 2009</p>
            </div>
            <div class="t-dot">
            </div>
            <div class="t-text">
                <p>Royal Collage of Art</p>
                <p>Designer Illustrator</p>
            </div>
        </div>
        <div class="item-timeline">
            <div class="t-meta-date">
                <p class="">25 Apr 2014</p>
            </div>
            <div class="t-dot">
            </div>
            <div class="t-text">
                <p>Massachusetts Institute of Technology (MIT)</p>
                <p>Designer Illustrator</p>
            </div>
        </div>
        <div class="item-timeline">
            <div class="t-meta-date">
                <p class="">04 Apr 2018</p>
            </div>
            <div class="t-dot">
            </div>
            <div class="t-text">
                <p>School of Art Institute of Chicago (SAIC)</p>
                <p>Designer Illustrator</p>
            </div>
        </div>
    </div>
</div>
</div> --}}
{{--                         <div class="work-experience layout-spacing ">

<div class="widget-content widget-content-area">
    <h3 class="">Work Experience</h3>
    
    <div class="timeline-alter">
        
        <div class="item-timeline">
            <div class="t-meta-date">
                <p class="">04 Mar 2009</p>
            </div>
            <div class="t-dot">
            </div>
            <div class="t-text">
                <p>Netfilx Inc.</p>
                <p>Designer Illustrator</p>
            </div>
        </div>
        <div class="item-timeline">
            <div class="t-meta-date">
                <p class="">25 Apr 2014</p>
            </div>
            <div class="t-dot">
            </div>
            <div class="t-text">
                <p>Google Inc.</p>
                <p>Designer Illustrator</p>
            </div>
        </div>
        <div class="item-timeline">
            <div class="t-meta-date">
                <p class="">04 Apr 2018</p>
            </div>
            <div class="t-dot">
            </div>
            <div class="t-text">
                <p>Design Reset Inc.</p>
                <p>Designer Illustrator</p>
            </div>
        </div>
    </div>
</div>
</div> --}}
</div>

<div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing ml-3">
{{-- <div class="skills layout-spacing ">
<div class="widget-content widget-content-area">
    <h3 class="">Body Measurements</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Hips</th>
                <th>Waist</th>
                <th>Biceps</th>
                <th>Thighs</th>
                <th>Chest</th>
                <th>Weight</th>
                <th>Height</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @if($users->measurements !=null)
            <tr>
                <td>{{ $users->measurements->hips }}</td>
                <td>{{ $users->measurements->waist }}</td>
                <td>{{ $users->measurements->biceps }}</td>
                <td>{{ $users->measurements->thighs }}</td>
                <td>{{ $users->measurements->chest  }}</td>
                <td>{{ $users->measurements->weight }}</td>
                <td>{{ $users->measurements->height }}</td>
                <td>{{$users->measurements->date}}</td>
                
            </tr>
            
            @else
            <tr>
                <td colspan="10" class="text-center">No Measurement Available</td>
            </tr>
            @endif
        </tbody>
    </table> --}}
    {{-- <div class="progress br-30">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>PHP</span> <span>25%</span> </div></div>
    </div> --}}
    {{-- <div class="progress br-30">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Wordpress</span> <span>50%</span> </div></div>
    </div> --}}
    {{-- <div class="progress br-30">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>Javascript</span> <span>70%</span> </div></div>
    </div>
    <div class="progress br-30">
        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><div class="progress-title"><span>jQuery</span> <span>60%</span> </div></div>
    </div> --}}
{{--  </div>
</div> --}}
<!--<div class="bio layout-spacing ">-->
<!--    <div class="widget-content widget-content-area">-->
<!--        <h3 class="">Bio</h3>-->
<!--        <p>I'm Web Developer from California. I code and design websites worldwide. Mauris varius tellus vitae tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non pharetra lacus erat ac nulla.</p>-->
<!--        <p>Sed vulputate, ligula eget mollis auctor, lectus elit feugiat urna, eget euismod turpis lectus sed ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut velit finibus, scelerisque sapien vitae, pharetra est. Nunc accumsan ligula vehicula scelerisque vulputate.</p>-->
<!--        <div class="bio-skill-box">-->
<!--            <div class="row">-->

<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Sass Applications</h5>-->
<!--                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Github Countributer</h5>-->
<!--                            <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Photograhpy</h5>-->
<!--                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Mobile Apps</h5>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>                                -->
<!--</div>-->
</div>
<div class="col-xl-12 col-lg-6 col-md-7 col-sm-12 layout-top-spacing ml-3">

<!--<div class="bio layout-spacing ">-->
<!--    <div class="widget-content widget-content-area">-->
<!--        <h3 class="">Bio</h3>-->
<!--        <p>I'm Web Developer from California. I code and design websites worldwide. Mauris varius tellus vitae tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non pharetra lacus erat ac nulla.</p>-->
<!--        <p>Sed vulputate, ligula eget mollis auctor, lectus elit feugiat urna, eget euismod turpis lectus sed ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ut velit finibus, scelerisque sapien vitae, pharetra est. Nunc accumsan ligula vehicula scelerisque vulputate.</p>-->
<!--        <div class="bio-skill-box">-->
<!--            <div class="row">-->

<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Sass Applications</h5>-->
<!--                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Github Countributer</h5>-->
<!--                            <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo consequat.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Photograhpy</h5>-->
<!--                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia anim id est laborum.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">-->

<!--                    <div class="d-flex b-skills">-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div class="">-->
<!--                            <h5>Mobile Apps</h5>-->
<!--                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et dolore magna aliqua.</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>                                -->
<!--</div>-->
</div>

</div>
</div>
@endsection