
@extends('frontend.layouts.app')

@section('content')
    
    <!-- start page title -->
    <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Our Journey</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Our Journey</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
       
        <!-- sales network section -->
        <section>
            <div class="container">
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 text-center margin-4-rem-bottom md-margin-4-rem-bottom">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">Our Journey</h4>
                        <p class="w-80 mx-auto md-w-100 mb-0">We Pride in having an extensive and well trained sales team.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12 col-md-9 md-padding-5px-left sm-padding-50px-right">
                          <img class="border-radius-6px" src="{{asset('frontend/images/srsindia/jurney.jpg')}}" alt="" data-no-retina="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end sales network section -->

        <!--CTA start section -->
        <section class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image: url({{asset('frontend/images/home-corporate-img-05.jpg')}}); visibility: visible; animation-name: fadeIn; background-position: 50% 90.9141px;">
            <div class="opacity-medium bg-dark-slate-blue"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-7 col-md-8 col-sm-10 position-relative text-center text-md-start sm-margin-30px-bottom">
                        <h4 class="alt-font font-weight-600 text-white mb-0">Let's talk about how we can transform your business!</h4>
                    </div>
                    <div class="col-12 col-xl-5 col-md-4 position-relative text-center text-md-end">
                        <a href="https://srsindia.com/contact-us.php" class="btn btn-fancy btn-large btn-olivine-green section-link align-self-start">Get started now<i class="fas fa-arrow-right right-icon"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTa end section -->
   
@endsection()