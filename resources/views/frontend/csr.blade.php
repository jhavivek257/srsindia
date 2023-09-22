
@extends('frontend.layouts.app')

@section('content')
    
     <!-- start page title -->
     <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">CSR</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Corporate Social Responsibility</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>CSR</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        
        <!-- start section -->
        <section id="down-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 col-md-6 md-margin-4-rem-bottom">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Corporate Social Responsibility</h5>
                        <p>In the spirit and intention of reaching our, Shree Rani Sati Group has always made themselves available for Social Awareness Programs and activities initiated by Government and Non Government Agencies. </p>
                        <p>Special emphasis is not Education of Girl Child and Computer LIteracy for school going children from under privileged families. As a part of the process, Shree Rani Sati Group enrolls their team and staff in the programs so that the efficiency of campaign is maintained.</p>
                        <p>We have also started with Mangalam Sewa Trust to help the under privileged strata of society on various fronts like Blanket Distribution, Food Distribution, Tree Plantation, Child Education, Medical Care etc.</p>
                    </div>

                    <div class="col-12 col-lg-5 col-md-9 md-padding-5px-left sm-padding-50px-right">
                          <img class="border-radius-6px" src="{{asset('frontend/images/srsindia/csr.webp')}}" alt="" data-no-retina="">
                     </div>
                
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- csr activity section -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 text-center margin-4-rem-bottom md-margin-4-rem-bottom">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">Mangalam Sewa Trust</h4>
                        <p class="w-80 mx-auto md-w-100 mb-0">We have also started with Mangalam Sewa Trust to help the under privilaged strata of society on various fronts like</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                    <!-- start interactive banner item -->
                    <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="interactive-banners-style-08 box-shadow-large bg-white h-100 border-radius-6px overflow-hidden">
                            <div class="interactive-banners-box-image">
                                <img src="{{asset('frontend/images/srsindia/csr-plant.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="interactive-banners-box-content padding-20px-all text-center xs-padding-25px-all">
                                <p class="text-extra-dark-gray text-uppercase text-extra-dark-gray-hover text-medium alt-font font-weight-500 d-block line-height-26px">Tree Plantation</p>
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banner item -->

                    <!-- start interactive banner item -->
                    <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="interactive-banners-style-08 box-shadow-large bg-white h-100 border-radius-6px overflow-hidden">
                            <div class="interactive-banners-box-image">
                                <img src="{{asset('frontend/images/srsindia/csr-food-distrubat.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="interactive-banners-box-content padding-20px-all text-center xs-padding-25px-all">
                                <p class="text-extra-dark-gray text-uppercase text-extra-dark-gray-hover text-medium alt-font font-weight-500 d-block line-height-26px">Food Distribution</p>
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banner item -->

                    <!-- start interactive banner item -->
                    <div class="col md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="interactive-banners-style-08 box-shadow-large bg-white h-100 border-radius-6px overflow-hidden">
                            <div class="interactive-banners-box-image">
                                <img src="{{asset('frontend/images/srsindia/csr-health.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="interactive-banners-box-content padding-20px-all text-center xs-padding-25px-all">
                                <p class="text-extra-dark-gray text-uppercase text-extra-dark-gray-hover text-medium alt-font font-weight-500 d-block line-height-26px">Medical Care</p>
                            </div>
                        </div>
                    </div>
                    <!-- end interactive banner item -->
                
                </div>
            </div>
        </section>
        <!-- end section -->

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