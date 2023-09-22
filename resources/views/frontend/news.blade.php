
@extends('frontend.layouts.app')

@section('content')
    
     <!-- start page title -->
     <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">In the News</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>In the News</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        
        <!-- start section -->
        <section class="bg-light-greenish-gray">
            <div class="container">
                <!-- <div class="row justify-content-center">
                    <div class="col-12 col-md-7 text-center margin-4-rem-bottom sm-margin-3-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">NEWS UPDATES</span>
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Read our latest updates<br>&amp; business tips &amp; tricks.</h5>
                    </div>
                </div> -->
                <div class="row justify-content-center">
                    <div class="col-12">
                        <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large" style="position: relative; height: 2077.5px;">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" style="position: absolute; left: 0%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="https://www.theweekendleader.com/Success/3083/the-spice-route.html"><img src="{{asset('frontend/images/nwes/nwes_1.jpg')}}" alt="" data-no-retina=""></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="https://www.theweekendleader.com/Success/3083/the-spice-route.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">How a 24-yr-old took charge of family business and increased its turnover to Rs 236 crore</a>
                                        <!-- <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p> -->
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="https://www.theweekendleader.com/Success/3083/the-spice-route.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-srs-green">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s" style="position: absolute; left: 25.0001%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="https://www.adgully.com/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division-116158.html"><img src="{{asset('frontend/images/nwes/nwes_2.jpg')}}" alt="" data-no-retina=""></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="https://www.adgully.com/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division-116158.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Shree Rani Sati TradeCorp firms its ties with Hamdard Food Division</a>
                                        <!-- <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p> -->
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="https://www.adgully.com/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division-116158.html" class="alt-font font-weight-500 text-extra-small text-uppercase text-srs-green">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s" style="position: absolute; left: 50.0002%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="http://businessnewsthisweek.com/business/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division/"><img src="{{asset('frontend/images/nwes/nwes_3.jpg')}}" alt="" data-no-retina=""></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="http://businessnewsthisweek.com/business/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division/" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">Shree Rani Sati TradeCorp firms its ties with Hamdard Food Division</a>
                                        <!-- <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p> -->
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="http://businessnewsthisweek.com/business/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division/" class="alt-font font-weight-500 text-extra-small text-uppercase text-srs-green">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.6s" style="position: absolute; left: 75.0002%; top: 0px; animation: auto ease 0s 1 normal none running none;">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="https://www.cxooutlook.com/how-technology-reshaping-the-retail-industry/"><img src="{{asset('frontend/images/nwes/nwes_4.jpg')}}" alt="" data-no-retina=""></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="https://www.cxooutlook.com/how-technology-reshaping-the-retail-industry/" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">How Technology Reshaping the Retail Industrys</a>
                                        <!-- <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p> -->
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="https://www.cxooutlook.com/how-technology-reshaping-the-retail-industry/" class="alt-font font-weight-500 text-extra-small text-uppercase text-srs-green">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.8s" style="position: absolute; left: 0%; top: 519.375px; animation: auto ease 0s 1 normal none running none;">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="https://www.nationalheraldindia.com/cafe/a-sneak-peak-at-different-trading-practices"><img src="{{asset('frontend/images/nwes/nwes_4.jpg')}}" alt="" data-no-retina=""></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="https://www.nationalheraldindia.com/cafe/a-sneak-peak-at-different-trading-practices" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">A sneak peak at different trading practices</a>
                                        <!-- <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p> -->
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="https://www.nationalheraldindia.com/cafe/a-sneak-peak-at-different-trading-practices" class="alt-font font-weight-500 text-extra-small text-uppercase text-srs-green">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->

                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.8s" style="position: absolute; left: 0%; top: 519.375px; animation: auto ease 0s 1 normal none running none;">
                                <div class="blog-post">
                                    <div class="blog-post-image margin-40px-bottom md-margin-35px-bottom xs-margin-25px-bottom">
                                        <a href="https://www.indianretailer.com/article/technology/digital-trends/9-tech-trends-reshaping-the-retail-industry.a7896"><img src="{{asset('frontend/images/nwes/news_5.webp')}}" alt="" data-no-retina=""></a>
                                    </div>
                                    <div class="post-details margin-30px-bottom md-margin-10px-bottom xs-no-margin-bottom">
                                        <a href="https://www.indianretailer.com/article/technology/digital-trends/9-tech-trends-reshaping-the-retail-industry.a7896" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray d-block margin-20px-bottom xs-margin-10px-bottom">9 Tech Trends Reshaping the Retail Industry</a>
                                        <!-- <p class="w-95">Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum has dummy...</p> -->
                                        <span class="separator bg-gradient-light-purple-light-orange"></span>
                                        <a href="https://www.indianretailer.com/article/technology/digital-trends/9-tech-trends-reshaping-the-retail-industry.a7896" class="alt-font font-weight-500 text-extra-small text-uppercase text-srs-green">Continue reading</a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            
                            
                        </ul>
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