
@extends('frontend.layouts.app')

@section('content')
    
    <!-- start page title -->
    <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Our Achievemnts</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Our Achievemnts</li>
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
                    <div class="col-12 col-lg-6 col-md-6 md-margin-4-rem-bottom">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Our Achievemnts</h5>
                        <ul class="list-style-02">
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Lion award by novino batteries in year 1990.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Best marketing company from Priya foods.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Won the best sales team award in hygienic research institute in year 2004.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Won the award 4 largest seller vasmol 30ml in eastern UP in 2005.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Won the award for the best marketing set up in state of Bihar from Hamdard.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Won the award from the Ehsan Perfumes for setting up their market in North India.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> From the last five years getting the target achieved from Hamdard.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Awarded best ASP in Samsung mobile for the year 2010-11 in the meeting held at Macau.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Achieve highest volume award in Samsung mobile for the year 2011-12.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Achieve best distributor award by Haldiram in year 2014.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Achieved Gsk no 1 in Xiaomi for patna region in 2018.</span></li>
                            <li class="margin-10px-bottom"><i class="fas fa-check text-small text-srs-green position-relative top-2px margin-10px-right" aria-hidden="true"></i><span> Awarded capital MI for patna region in year 2019.</span></li>
                        </ul>
                    </div>

                    <div class="col-12 col-lg-6 col-md-9 padding-40px-lr md-padding-5px-left sm-padding-50px-right">
                        <figure class="image-back-offset-shadow position-right w-100 active">
                            <img class="border-radius-6px" src="{{asset('frontend/images/srsindia/award.jpg')}}" alt="" data-no-retina="">
                            <!-- <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span> -->
                        </figure>
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