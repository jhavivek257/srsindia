
@extends('frontend.layouts.app')

@section('content')
    
    <!-- start page title -->
    <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Director's Message</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Director's Message</li>
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
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Director's Message</h5>
                        <strong>Dear Partners, Accomplices and Companions</strong>
                        <p>In this time of globalization, we at Sri Rani Sati Group perceive that addressing the necessities of our clients is basic to an association's prosperity. The beyond couple of years we have encountered have been significant and we have endeavoured to convey the best presentation with an accentuation on consumer loyalty.</p>
                        <p>I thoroughly researched the current state of sales, marketing and distribution companies in India and Abroad. I am convinced that the Indian direct sales market has enormous growth potential. All you must do is let us know how we can help. We are excited to collaborate with you as your Channel Partner, Brand Promoter or distributor to develop innovative sales and marketing solutions that will not only improve the efficiency of your organizational procedures but will also contribute to the success of your brand, business and boost your sales & profits.</p>
                        <p>With the assistance of a fantastic team, I have conquered an endless series of difficulties and effectively carried Sri Rani Sati Group to another level of achievement with Pan India distribution Network of 3000+ distributors.</p>
                        <p>Sri Rani Sati Group progress is ceaseless. In any case, with the assistance of my team, channel partners and our clients, I'm certain that the organization will arrive at new levels of excellence and achievements in the years to come.</p>
                    </div>

                    <div class="col-12 col-lg-5 col-md-9 padding-40px-lr md-padding-5px-left sm-padding-50px-right">
                        <figure class="image-back-offset-shadow position-right w-100 active">
                            <img class="border-radius-6px" src="{{asset('frontend/images/team/director.webp')}}" alt="" data-no-retina="">
                            <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span>
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