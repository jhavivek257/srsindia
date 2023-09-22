
@extends('frontend.layouts.app')

@section('content')
   <!-- start page title -->
   <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Our Vision, Mission & Core Values</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Our Vision, Mission & Core Values</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        
        <!-- start section -->
        <section class="bg-light-greenish-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Archery-2 icon-medium text-srs-green"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-800 margin-10px-bottom d-block text-extra-dark-gray">OUR VISION</span>
                                <p>Provide the best customer results possible and deliver the WOW factor through our services</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col-12 col-lg-6 col-md-9 margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="feature-box h-100 feature-box-left-icon border-radius-5px bg-white box-shadow-small box-shadow-extra-large-hover overflow-hidden padding-4-rem-all">
                            <div class="feature-box-icon">
                                <i class="line-icon-Cursor-Click2 icon-medium text-srs-green"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-800 margin-10px-bottom d-block text-extra-dark-gray">OUR MISSION</span>
                                <p>To be the most brand-centric company, where brands can create a market for anything they might want to sell.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- core value section -->
        <section>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-12 col-md-6 md-margin-4-rem-bottom margin-30px-bottom">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">OUR CORE VALUES</h5>
                        <p>We believe in maintaining quality and living up to our commitments.
                            We work towards providing best practices and services followed in marketing and distribution field to companies around the Globe with no substitute for Hard Work, We Believe to act in trustworthy manner that earns the respect of colleagues, customers, and the public.</p>
                    </div>

                    <div class="col-12 col-lg-12 col-md-9 md-padding-5px-left sm-padding-50px-right">
                          <img class="border-radius-6px" src="{{asset('frontend/images/srsindia/core-values.webp')}}" alt="" data-no-retina="">
                     </div>
                
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- objective section -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-7 col-md-6 md-margin-4-rem-bottom">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">BUSINESS OBJECTIVE</h5>
                        <p>To be recognized as a distinguished partner in area of Distribution, Supply Chain Management, Sales and Marketing.</p>
                        <p>With strong distribution network, assist clients based in India & other countries in moving beyond the regional boundaries.</p>
                        <p>To establish a strong client base in both India and overseas countries.</p>
                    </div>

                    <div class="col-12 col-lg-5 col-md-9 md-padding-5px-left sm-padding-50px-right">
                          <img class="border-radius-6px" src="{{asset('frontend/images/srsindia/business.webp')}}" alt="" data-no-retina="">
                     </div>
                     
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