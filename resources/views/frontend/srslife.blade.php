
@extends('frontend.layouts.app')

@section('content')
    
   <!-- start page title -->
   <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Life at SRS</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Life at SRS</li>
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
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Life at SRS</h5>
                        <p>At Shree Rani Sati Group, our employees are our most valuable assets; those whom we hire will help shape our future. Therefore, we have meticulously created rules and processes to provide our staff with maximum comfort and advancement opportunities.</p>
                        <p>Working at Shree Rani Sati Group is an unforgettable experience, where our teams apply their knowledge and creativity daily to develop new marketing tactics. At our organization we believe in nurturing both work and personal development - this goal is achieved through regular leisure programs which give employees job satisfaction as well as social harmony.</p>
                    </div>

                    <div class="col-12 col-lg-5 col-md-9 padding-40px-lr md-padding-5px-left sm-padding-50px-right">
                        <figure class="image-back-offset-shadow position-right w-100 active">
                            <img class="border-radius-6px" src="{{asset('frontend/images/srsindia/about-us.webp')}}" alt="" data-no-retina="">
                            <span class="bg-gradient-light-purple-light-orange border-radius-6px overlay"></span>
                        </figure>
                    </div>
                
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- csr activity section -->
        <section id="down-section" class="bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 position-relative sm-margin-30px-bottom">
                        <img class="border-radius-5px" src="{{asset('frontend/images/service/why_distribution.webp')}}" alt="" data-no-retina="">
                       
                    </div>
                    <div class="col-12 col-lg-7 col-md-6">
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray w-90">Methodology of Induction</h5>
                        <p class="w-85 lg-w-90">Our staff is an invaluable asset to our organisation; we cherish both newcomers and experienced professionals alike. Given all the opportunities for growth at our firm, it is vital that we hire the best talent. To do so efficiently, we utilize an established recruitment process</p>
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