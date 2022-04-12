@extends('admin.layouts.app' , ['class' => 'off-canvas-sidebar', 'category_name' => __('package'), 'page_name' => __('package_preview')])
@section('content')
<div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 layout-top-spacing ml-3">

 

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

                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Package {{$package->title}}</h3>
                                
                                <div class="row">
                                    
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                        <img src="{{ asset('/'.$package->image) }}" class='w-100 p-4'>
                                    </div>
                                  
                                    <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                        <div class="px-4 pt-4">
                                            @if($package->per_month_payment_amount)
                                            <h5>Per Month Payment £{{$package->per_month_payment_amount}}</h5>
                                            @endif
                                            
                                            @if($package->onetime_payment_amount)
                                            <h5>One Time Payment Amount £{{$package->onetime_payment_amount}}</h5>
                                            @endif

                                            <h5>Duration: {{ $package->days }} days </h5>
                                        </div>
                                        <div class="p-4">
                                            <h4>Description</h4>
                                            
                                            <p>{!! $package->description !!}</p>
                                            
                                        </div>
                                        <div class="p-4">
                                            @if($package->checkmark_description)
                                        @foreach(json_decode($package->checkmark_description) as $value)
                                        <p style=" text-align: justify-all;"><span style="color: #1abc9c">{!! $package->checkmark !!}</span>&nbsp; {{ $value }}</p>
                                        @endforeach
                                        @endif
                                        </div>

                                        <div class="p-4">
                                         <h5 class="font-weight-bold">Introduction Video Of {{ $package->title }}</h5>   
                                        <video width="320" height="200" controls class="mt-5">
                                            <source src="{{ asset('/'.$package->intro_video) }}" type="video/mp4">
                                            </video>
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