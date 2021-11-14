@extends('frontend.layouts.master')
@section('page_content')
          <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!--Loading Area Start-->


                    <!-- Mobile Menu Area start -->

                <!--End of Header Area-->
                <!--Slider Area Start-->
                <div class="slider-area">
                    <div class="hero-slider owl-carousel">
                        <!--Single Slider Start-->
                        <div class="single-slider" style="background-image: url('{{asset('img/slider/1.jpg')}}');">

                            <div class="hero-slider-content">
                                <h1>Professional education<br>for the preparation of nurses</h1>
                                <p>paragraph content</p>
                                <div class="slider-btn">
                                    <a class="button-default" href="#">View Courses</a>
                                </div>
                            </div>
                        </div>
                        <!--Single Slider End-->
                        <!--Single Slider Start-->
                        <div class="single-slider" style=" background-image: url('{{asset('img/slider/2.jpg')}}');">
                            <div class="hero-slider-content">
                                <h1>Professional education<br>for the preparation of nurses</h1>
                                <p>paragraph content.</p>
                                <div class="slider-btn">
                                    <a class="button-default" href="#">View Courses</a>
                                </div>
                            </div>
                        </div>
                        <!--Single Slider End-->
                    </div>
                </div>
                <!--Slider Area End-->
                <!--About Area Start-->
                <div class="about-area mt-95">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="about-container">
                                    <h3>Provide best <span class="orange-color">nursing education</span> <span class="orange-color">services</span> for you</h3>
                                    <p>paragraph content.</p>
                                   <p>paragraph content.</p>
                                    <a class="button-default" href="#">Learn More</a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <!--About Image Area Start-->
                                <div class="about-image-area img-full">
                                    <img src="{{ asset('img/about/about1.jpg') }}" alt="">
                                </div>
                                <!--About Image Area End-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of About Area-->
                <!--Course Area Start-->
                <div class="course-area section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h3>Management Team</h3>
                                        <p>Peoples who run this institute</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{ asset('img/course/11.jpg') }}" alt=""></a>

                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Md Abdur Razzaque Pramanik</a></h4>
                                        <p>Ex ansar vdp officer pam( bar).</p>
                                        <div class="single-item-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{ asset('img/course/12.jpg') }}" alt=""></a>

                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Jerina khatun</a></h4>
                                        <p>Phd , Mph, x Principal Dinajpur Nursing Institute, x Principal Zia Heart Foundation.</p>
                                        <div class="single-item-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{ asset('img/course/13.jpg') }}" alt=""></a>

                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Dr. Jannatun Nesa Talukder</a></h4>
                                        <p></p>
                                        <div class="single-item-content">
                                        </div>
                                    </div>
                                </div>
                            </div> <br><br>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{ asset('img/course/14.jpg') }}" alt=""></a>

                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Dr. Nurunnabi Faisal (Mithun)</a></h4>
                                        <p></p>
                                        <div class="single-item-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-item">
                                    <div class="single-item-image overlay-effect">
                                        <a href="#"><img src="{{ asset('img/course/15.jpg') }}" alt=""></a>

                                    </div>
                                    <div class="single-item-text">
                                        <h4><a href="#">Khursida Jahan Rani</a></h4>
                                        <p></p>
                                        <div class="single-item-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-12 col-sm-12 text-center">
                                <a href="course.html" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--End of Course Area-->
                <!--Fun Factor Area Start-->
                <div class="fun-factor-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun-factor mb-30">
                                    <h2><span class="counter">25</span>+</h2>
                                    <h4>Teachers</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun-factor mb-30">
                                    <h2><span class="counter">1556</span>+</h2>
                                    <h4>Current Students</h4>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun-factor mb-30">
                                    <h2><span class="counter">9856</span>+</h2>
                                    <h4>Graduated </h4>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-md-6 col-12">
                                <div class="single-fun-factor mb-30">
                                    <h2><span class="counter">20</span>+</h2>
                                    <h4>Countries</h4>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>


  @endsection
