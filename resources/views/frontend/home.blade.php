
@extends('frontend.layouts.app')

@section('content')
    <!-- start hero section home banner-->
    <section class="p-0 parallax mobile-height" data-parallax-background-ratio="0.5" style="background-image: url('{{asset('frontend/images/srsindia/home_banner.webp')}}');">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 col-lg-8 col-md-6 col-sm-8 full-screen md-h-650px sm-h-450px d-flex flex-column justify-content-center wow animate__fadeIn">
                    <span class="text-extra-medium alt-font font-weight-500 text-uppercase text-olivine-green d-block margin-10px-bottom xs-margin-15px-bottom">SALES & MARKETING </span>
                    <h1 class="alt-font font-weight-600 text-dark-charcoal text-uppercase margin-1-half-rem-bottom letter-spacing-minus-2px sm-margin-20px-bottom xs-margin-15px-bottom">WE CREATE <span class="word"></span></h1>
                    <p class="text-extra-medium line-height-30px w-75 margin-1-rem-bottom lg-w-90 md-w-100 xs-margin-15px-bottom">We have been working in creating successful & profitable brands for more than 35 years.</p>
                    <a href="#call-request" class="btn btn-fancy btn-large btn-olivine-green section-link align-self-start">Get started now<i class="fas fa-arrow-right right-icon"></i></a>
                </div>
            </div>
            <div class="down-section text-center z-index-1 xs-bottom-30px d-none d-sm-inline-block"><a href="#about" class="section-link"><i class="fas fa-arrow-down text-dark-charcoal bg-white box-shadow-extra-large w-45px h-45px line-height-46px border-radius-100"></i></a></div>
        </div>
    </section>
    <!-- end hero section -->

    <!-- start service hero section -->
    <section class="p-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-xl-6 row-cols-md-3 row-cols-sm-2">
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <div class="text-box">
                                <i class="line-icon-Archery-2 icon-medium text-olivine-green d-block margin-15px-bottom"></i>
                                <span class="alt-font text-srs-green font-weight-600 text-uppercase">Brand<br>Development</span>
                            </div>
                            <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Brand Development</span>
                                <p class="line-height-26px d-inline-block lg-w-70 md-w-100">We support new brands, from product manufacturing to sales and marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn" data-wow-delay="0.1s">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <div class="text-box">
                                <i class="icon-simple-line-badge icon-medium text-olivine-green d-block margin-15px-bottom"></i>
                                <span class="alt-font text-srs-green font-weight-600 text-uppercase">Business<br>Consultancy</span>
                            </div>
                            <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Business Consultancy</span>
                                <p class="line-height-26px d-inline-block lg-w-70 md-w-100">We help you implement the procedures and systems in your company required to achieve actual growth for your business.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <div class="text-box">
                                <i class="icon-simple-line-share icon-medium text-olivine-green d-block margin-15px-bottom"></i>
                                <span class="alt-font text-srs-green font-weight-600 text-uppercase">Distribution<br>Network</span>
                            </div>
                            <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Distribution Network</span>
                                <p class="line-height-26px d-inline-block lg-w-70 md-w-100">We have a well-developed network of wholesalers, retailers, distributors, and agents spread all over India.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <div class="text-box">
                                <i class="icon-simple-line-rocket icon-medium text-olivine-green d-block margin-15px-bottom"></i>
                                <span class="alt-font text-srs-green font-weight-600 text-uppercase">Sales &<br>Marketing </span>
                            </div>
                            <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Sales & Marketing</span>
                                <p class="line-height-26px d-inline-block lg-w-70 md-w-100">We have over 35 years of experience in product-based sales and marketing, which helps us provide excellent service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <div class="text-box">
                                <i class="icon-simple-line-basket-loaded icon-medium text-olivine-green d-block margin-15px-bottom"></i>
                                <span class="alt-font text-srs-green font-weight-600 text-uppercase">Online<br>Marketing</span>
                            </div>
                            <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Online Marketing</span>
                                <p class="line-height-26px d-inline-block lg-w-70 md-w-100">In today's era, we are the most reliable partner for your products to reach customers directly through digital marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <div class="col fancy-text-box-style-02 border-color-medium-gray p-0 wow animate__fadeIn" data-wow-delay="0.5s">
                    <div class="text-box-wrapper align-items-center d-flex">
                        <div class="position-relative text-center w-100">
                            <div class="text-box">
                                <i class="icon-simple-line-home icon-medium text-olivine-green d-block margin-15px-bottom"></i>
                                <span class="alt-font text-srs-green font-weight-600 text-uppercase">CFA<br>Operations</span>
                            </div>
                            <div class="text-box-hover last-paragraph-no-margin bg-gradient-white-light-gray">
                                <span class="alt-font text-dark-charcoal font-weight-500 line-height-normal text-uppercase d-block margin-10px-bottom">Warehousing Solutions</span>
                                <p class="line-height-26px d-inline-block lg-w-70 md-w-100">We have space available in warehouses with modern technology for proper handling and timely distribution of your products.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fancy text box item -->
            </div>
        </div>
    </section>
    <!-- end service hero section -->

    <!-- start about section -->
    <section class="bg-greenish-gray position-relative half-section pb-0 overflow-visible" id="about">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6 col-md-10 position-relative bottom-minus-50px z-index-1 md-bottom-inherit md-margin-50px-top sm-margin-20px-top md-margin-9-rem-bottom">
                    <div class="w-80 position-relative z-index-1 wow animate__fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                        <img src="{{asset('frontend/')}}/images/srsindia/about.webp" alt="" data-no-retina="">
                    </div>
                    <div class="w-80 h-100 bg-fast-yellow position-absolute right-30px bottom-minus-50px overflow-hidden wow animate__fadeInLeft" data-wow-delay="0.2s" data-parallax-layout-ratio="1" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft; bottom: -28.9984px;">
                        <span class="text-overlap-style-04 alt-font font-weight-600 text-white letter-spacing-minus-3px">Sales & marketing</span>
                    </div>
                </div>
                <div class="col-12 col-xl-4 offset-xl-1 col-lg-5 col-md-10 margin-6-rem-bottom xs-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    <h5 class="alt-font font-weight-500 text-white margin-2-rem-bottom">We provide true <span class="font-weight-600">effective marketing solutions</span> for business</h5>
                    <p class="opacity-6 text-white text-extra-medium w-95 line-height-32px">Shree Rani Sati Group is a name trusted by leading Indian & International Brands for Sales, Marketing, Distribution & promotions of their products for more than 35 years. The journey which started from Delhi and Bihar has now spread all over India.</p>
                    <a href="https://srsindia.com/about-us.php" class="alt-font text-extra-medium text-white margin-15px-top">More about us<i class="line-icon-Arrow-OutRight icon-medium align-middle margin-15px-left"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end about section -->
    
    <!-- start counter section -->
    <section class="big-section cover-background overflow-visible" style="background-image: url('{{asset('frontend/images/srsindia/home-startup-about-bg.webp')}}');">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-lg-3 col-md-6 order-1 text-center text-lg-end last-paragraph-no-margin md-margin-50px-bottom wow animate__fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="title-large-2 text-green alt-font line-height-70px letter-spacing-minus-3px font-weight-600">2000+</div>
                    <span class="alt-font text-extra-dark-gray font-weight-500 text-uppercase letter-spacing-1px d-block margin-15px-bottom sm-margin-5px-bottom">PAN INDIA DISTRIBUTORS</span>
                    <p class="w-100 d-inline-block sm-w-60 xs-w-80"> We have a network of dealer, distributors, stockist and agents spread across pan India.</p>
                </div>
                
                <div class="col-12 col-lg-6 order-3 order-lg-2 text-center z-index-0 wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="tilt-box" data-tilt-options="{ &quot;maxTilt&quot;: 20, &quot;perspective&quot;: 1000, &quot;easing&quot;: &quot;cubic-bezier(.03,.98,.52,.99)&quot;, &quot;scale&quot;: 1, &quot;speed&quot;: 500, &quot;transition&quot;: true, &quot;reset&quot;: true, &quot;glare&quot;: false, &quot;maxGlare&quot;: 1 }" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg);">
                        <span class="text-extra-big-2 alt-font text-uppercase text-green font-weight-600 letter-spacing-minus-10px image-mask cover-background" style="background-image: url('{{asset('frontend/images/home-startup-text-bg.jpg')}}')">35</span>
                        <span class="alt-font text-extra-large text-extra-dark-gray letter-spacing-4px font-weight-600 text-uppercase margin-5px-top d-block">Years of experience</span>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 order-2 text-center text-lg-start order-lg last-paragraph-no-margin md-margin-50px-bottom wow animate__fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="title-large-2 text-green alt-font line-height-70px letter-spacing-minus-3px font-weight-600">150+</div>
                    <span class="alt-font text-extra-dark-gray font-weight-500 text-uppercase letter-spacing-1px d-block margin-15px-bottom sm-margin-5px-bottom">HIGH SKILLED TEAM MEMBERS</span>
                    <p class="w-100 d-inline-block sm-w-60 xs-w-80">Dedicated team of sales, marketing, production and management for smooth operations</p>
                </div>                   
            </div>
        </div>
    </section>
    <!-- end end section -->

    <!-- start service section -->
    <section class="big-section bg-light-srs-green position-relative">
        <!-- <div class="col-12 overflow-hidden alt-font font-weight-600 text-white text-overlap-style-03 letter-spacing-minus-3px d-none d-lg-block wow animate__fadeIn" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">srs group</div> -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-4 col-lg-4 col-md-8 position-relative md-margin-8-rem-bottom xs-margin-10-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                    <span class="alt-font text-srs-green font-weight-500 text-uppercase margin-15px-bottom d-inline-block sm-margin-5px-bottom">What We Do</span>
                    <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">THE BEST SOLUTIONS FOR YOUR BUSINESS</h5>
                    <p class="w-85 margin-35px-bottom lg-w-100">We provide your best sales, marketing and management system to manage your products with consistency and profitability.</p>
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-03 white rounded-circle" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-366aea752e368a7a"><i class="feather icon-feather-arrow-right"></i></div>
                    <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-03 white rounded-circle" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-366aea752e368a7a"><i class="feather icon-feather-arrow-left"></i></div>
                </div>
                <div class="col-12 col-lg-8 wow animate__fadeInRight" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                    <div class="testimonials-carousel-style-01 swiper-simple-arrow-style-1">
                        <div class="swiper-container white-move swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-slider-options="{ &quot;loop&quot;: true, &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40, &quot;observer&quot;: true, &quot;autoplay&quot;: true, &quot;observeParents&quot;: true, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                            <div class="swiper-wrapper" id="swiper-wrapper-366aea752e368a7a" aria-live="polite" style="transform: translate3d(-2420px, 0px, 0px); transition-duration: 0ms;">
                                
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 6" style="width: 363.333px; margin-right: 40px;">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/service/brand-consultancy.webp')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <!-- <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-gradient-tan-geraldine margin-25px-bottom font-weight-500 d-inline-block">Relaxing</span> -->
                                            <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">Distribution Network placement</div>
                                            <a href="https://srsindia.com/distribution-network-placement.php" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Explore services</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden" data-swiper-slide-index="1" role="group" aria-label="2 / 6" style="width: 363.333px; margin-right: 40px;">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/service/moder-trade.webp')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <!-- <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-gradient-tan-geraldine margin-25px-bottom font-weight-500 d-inline-block">Massage</span> -->
                                            <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">Modern Trade Placement</div>
                                            <a href="https://srsindia.com/modern-trade-placement.php" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Explore services</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 6" style="width: 363.333px; margin-right: 40px;">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/service/ecommerce.webp')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <!-- <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-gradient-tan-geraldine margin-25px-bottom font-weight-500 d-inline-block">Massage</span> -->
                                            <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">online marketing</div>
                                            <a href="https://srsindia.com/online-marketing.php" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Explore services</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="4 / 6" style="width: 363.333px; margin-right: 40px;">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/service/cfa.webp')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <!-- <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-gradient-tan-geraldine margin-25px-bottom font-weight-500 d-inline-block">Relaxing</span> -->
                                            <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">CFA Operations</div>
                                            <a href="https://srsindia.com/cfa-operations.php" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Explore servicess</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="5 / 6" style="width: 363.333px; margin-right: 40px;">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/service/brand-consultancy.webp')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <!-- <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-gradient-tan-geraldine margin-25px-bottom font-weight-500 d-inline-block">Relaxing</span> -->
                                            <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">Business consultancy</div>
                                            <a href="https://srsindia.com/brand-consultancy.php" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Explore services</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 border-radius-6px overflow-hidden swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="6 / 6" style="width: 363.333px; margin-right: 40px;">
                                    <div class="interactive-banners-box bg-extra-dark-gray">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/service/brand-development.webp')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-midium-dark-gray-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-55px-lr md-padding-40px-lr">
                                            <!-- <span class="text-extra-small alt-font text-white text-uppercase padding-5px-tb padding-15px-lr border-radius-2px bg-gradient-tan-geraldine margin-25px-bottom font-weight-500 d-inline-block">Relaxing</span> -->
                                            <div class="alt-font font-weight-500 text-extra-large text-white margin-20px-bottom w-90">Brand Development</div>
                                            <a href="https://srsindia.com/brand-development.php" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Explore service</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                
                            </div> 
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service section -->

    <!-- start industries section -->
    <section class="bg-light-greenish-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center margin-3-rem-bottom sm-margin-3-rem-bottom wow animate__fadeIn">
                    <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-inline-block margin-15px-bottom sm-margin-10px-bottom">BRAND MANAGEMENT SOLUTIONS</span>
                    <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">We blend business ideas to create something awesome</h5>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center">
                <!-- start services item -->
                <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/fmcg.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">FMCG</span>
                            <p class="w-85 lg-w-100">We have experience working with many international FMCG brands for several years</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/telecome.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Telecom</span>
                            <p class="w-85 lg-w-100">For the years we are parner in the business expansion of several telecom brands in india</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/healthcare.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Health Care</span>
                            <p class="w-85 lg-w-100">We have always been ahead in distributing and placing health care and ayurvedic products.</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/cosmetics.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Cosmetics</span>
                            <p class="w-85 lg-w-100">We have experience working with many domestic and international cosmetic brands.</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/technology.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Ecommerce</span>
                            <p class="w-85 lg-w-100">We have a defined structure to use multiple e-commerce platforms to boost online sales.</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/consultancy.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Consultation</span>
                            <p class="w-85 lg-w-100">With years of experience in the consumer market, we understand every detail of brand management.</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                
                <!-- start services item -->
                <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/logistics.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Logistics & Supply Chain</span>
                            <p class="w-85 lg-w-100">With our warehousing &logistics system, we always manage the stock and distribution of the brands.</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                
                <!-- start services item -->
                <div class="col xs-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.5s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/electronic.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Electrical Appliances</span>
                            <p class="w-85 lg-w-100">We specialize in marketing and distribution of electrical goods. We get eye-catching displays of your goods in stores. </p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
                <!-- start services item -->
                <div class="col xs-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.5s">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                            <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/food.webp')}}" alt="">
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Food And Drinks</span>
                            <p class="w-85 lg-w-100">With a well-defined system for handling food & beverages, we care for their taste and freshness until they reach the consumer.</p>                           
                        </div>
                    </div>
                </div>
                <!-- end services item -->
            
            </div>
        </div>
    </section>
    <!-- end industries section -->

    <!-- start business model section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-10 col-xl-4 col-lg-5 md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">OUR BUSINESS MODEL</h5>
                    <blockquote class="border-width-4px border-color-olivine-green text-extra-medium padding-25px-left pe-0 margin-40px-top margin-30px-bottom lg-w-95">
                        We work to ensure that your growth of your brand/business and generate sufficient profits.
                    </blockquote>
                    <p class="w-90 md-w-100">We have different departments from product development to its marketing & distribution which are managed by their respective managers.</p>
                    <a href="https://srsindia.com/about-us.php" class="btn btn-fancy btn-small btn-olivine-green btn-round-edge margin-10px-top">Discover srsindia</a>
                </div>
                <div class="col-12 col-md-10 col-lg-7 offset-xl-1 wow animate__zoomIn" data-wow-delay="0.4s">
                    <img src="{{asset('frontend/images/srsindia/business-model.webp')}}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- end business model section -->

    <!-- start cta section -->
    <section class="half-section bg-light-greenish-gray">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-7 col-sm-10 text-center text-lg-start md-margin-3-rem-top md-margin-3-rem-bottom wow animate__fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                    <h4 class="alt-font font-weight-600 text-extra-dark-gray mb-0">Let's talk about how we can transform your business!</h4>
                </div>
                <div class="col-12 col-lg-5 padding-6-rem-left lg-padding-15px-left md-margin-3-rem-bottom text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <span class="alt-font text-extra-dark-gray text-extra-medium d-block margin-5px-bottom">Get in touch with our team</span>
                    <h4 class="alt-font font-weight-600 mb-0"><a href="mailto:info@srsindia.com" class="text-fast-yellow text-decoration-line-bottom-thick text-greenish-gray-hover">info@srsindia.com</a></h4>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta section -->

    <!-- start SRS SPECIALIZES section -->
    <section class="cover-background xs-no-padding-tb xs-border-tb border-color-medium-gray" style="background-image:url('{{asset('frontend/images/home-finance-service-bg.jpg')}}');">
        <div class="container xs-no-padding-lr">
            <div class="row justify-content-center justify-content-lg-end">
                <div class="col-12 col-xl-6 col-lg-7 col-md-9 col-sm-11">
                    <div class="w-100 bg-white box-shadow-large padding-6-rem-tb padding-7-rem-lr xs-padding-4-rem-lr xs-padding-6-rem-tb wow animate__fadeIn">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px margin-45px-bottom sm-letter-spacing-minus-1-half xs-margin-25px-bottom text-center text-sm-start">SRS SPECIALIZES IN BRAND DEVELOPMENT POLICY</h5>
                        <ul class="list-style-06">
                            <li class="bg-white border-radius-6px margin-35px-bottom last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.3s">
                                <div><span class="w-25px h-25px text-center bg-olivine-green rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                <div><span class="text-extra-medium text-dark-charcoal font-weight-500 margin-5px-bottom d-block">Healthy profits for long term</span>
                                    <p class="w-80 lg-w-90 xs-w-100">We created the plan to minimize the production & management costs.</p>
                                </div>
                            </li>
                            <li class="bg-white border-radius-6px margin-35px-bottom last-paragraph-no-margin wow animate__fadeIn" data-wow-delay="0.5s">
                                <div><span class="w-25px h-25px text-center bg-olivine-green rounded-circle text-white margin-25px-right margin-5px-top d-flex flex-column"><i class="fas fa-check"></i></span></div>
                                <div><span class="text-extra-medium text-dark-charcoal font-weight-500 margin-5px-bottom d-block">Working towards your business</span>
                                    <p class="w-80 lg-w-90 xs-w-100">We connect your brand with customers through several brand promotional policies, schemes and offers.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="margin-20px-top d-inline-block xs-margin-10px-top wow animate__fadeIn text-center text-sm-start" data-wow-delay="0.7s">
                            <a href="https://srsindia.com/about-us.php" class="btn btn-fancy btn-small btn-olivine-green btn-round-edge margin-35px-right xs-margin-40px-lr xs-margin-20px-bottom">About company</a>
                            <a href="https://srsindia.com/contact-us.php" class="btn btn-link btn-extra-large text-dark-charcoal top-minus-5px">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end SRS SPECIALIZES section -->

    <!-- start brand section -->
    <section class="big-section wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-6 col-lg-8 col-md-7 col-sm-10 text-center text-md-start sm-margin-30px-bottom">
                    <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px mb-0"><strong class="text-olivine-green text-decoration-underline">35+ years</strong> WE ARE PART OF SUCCESSFUL GLOBAL BRANDS</h5>
                </div>
                <div class="col-12 col-xl-4 offset-xl-2 col-lg-4 col-md-5 text-center text-md-end wow animate__zoomIn">
                    <a href="https://srsindia.com/contact-us.php" class="popup-youtube btn btn-extra-large btn-olivine-green btn-round-edge"> <div class="d-inline-block text-start align-middle font-weight-400"><span class="text-medium d-block line-height-15px">Contact Us</div></a>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 client-logo-style-01 align-items-center margin-5-half-rem-top sm-margin-5-rem-top">
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.1s" >
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/airtel.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/ban.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/beetal.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/blackberry.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/hamdard-1.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom sm-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/hari-darshan.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" data-wow-delay="0.3s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/lava-1.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/lg.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/nokia.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/novino.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/parel.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/poco.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/prabhuji.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/rajvaidya.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/rdsgroup.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/realme.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/samsung.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/tcl.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/vasmol.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/vicco.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/amazon.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/bigbasket.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/city-mall.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/flipkart.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/opity.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/zepto.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/baidyanath.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/energy.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/facia.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/hamdard-safi.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/hempushpa.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/multani-kuka.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->
                <!-- start client logo item -->
                <div class="col text-center margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="client-box padding-15px-all border border-color-dark-gray">
                        <a href="javascript:void(0)"><img class="client-box-image" src="{{asset('frontend/images/clients/pet-safai.jpg')}}" alt="" /></a>
                    </div>
                </div>
                <!-- end client logo item -->


            </div>
        </div>
    </section>
    <!-- end brand section -->

    <!-- start director section -->
    <section class="cover-background pb-0 pt-lg-0" style="background: url({{asset('frontend/images/home-marketing-agency-bg-img-05.jpg')}})">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-4 offset-xl-1 col-lg-5 col-md-8 order-lg-2 text-center text-lg-start wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    <img src="{{asset('frontend/images/home-marketing-agency-img-02.png')}}" class="margin-20px-bottom" alt="" data-no-retina="">
                    <h4 class="alt-font font-weight-300 text-extra-dark-gray letter-spacing-minus-1px w-85 margin-3-rem-bottom md-w-100">Director<br><span class="font-weight-600">message</span></h4>
                    <span class="text-large text-white d-block w-85 margin-20px-bottom line-height-30px md-w-100">Success is where preparation and opportunity meet.</span>
                    <p class=" text-white opacity-6 w-85 md-w-100">We are the most trusted partners to take your brand to new heights of success.</p>
                    <img src="{{asset('frontend/images/signature.png')}}" class="align-self-start margin-25px-top sm-no-margin-top" alt="" data-no-retina="">
                </div>
                <div class="col-10 col-lg-7 text-end order-lg-1">
                    <div class="position-relative">
                        <img src="{{asset('frontend/images/team/rohit.png')}}" class="wow animate__fadeIn" alt="" data-no-retina="" style="visibility: visible; animation-name: fadeIn;">
                        <div class="team-tulip-bubble bg-fast-yellow text-start w-50 xs-w-65 wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                            <span class="alt-font text-extra-dark-gray text-extra-large letter-spacing-minus-1-half d-block line-height-32px">Teamwork is the ability to work together toward a common vision.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end director section -->

    <!-- start testimonial section -->
    <section class="bg-gradient-white-light-gray border-top border-width-1px border-color-medium-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center margin-4-rem-bottom sm-margin-3-rem-bottom wow animate__fadeIn">
                    <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">Satisfied clients</span>
                    <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Whats our customers<br>saying
                        about us</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <div class="swiper-container black-move swiper-horizontal-3d padding-7-rem-tb swiper-pagination-bottom sm-padding-10-rem-top xs-padding-8-rem-top"  data-slider-options='{ "loop": true, "slidesPerView": 1,"centeredSlides":true,"effect":"coverflow","coverflowEffect":{"rotate":0,"stretch":100,"depth":150,"modifier":1.5,"slideShadows":true}, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "autoplay": { "delay": 3000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-pagination", "clickable": true, "dynamicBullets": true }, "breakpoints": { "768": { "slidesPerView": 2 } } }'>
                        <div class="swiper-wrapper">
                            <!-- start slider item -->
                            <div class="swiper-slide bg-white border-radius-4px">
                                <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                    <img alt="" src="{{asset('frontend/images/testi/haldiram.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px">
                                    <div class="testimonials-content">
                                        <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Just love their design for all stunning details!</span> -->
                                        <p class="margin-30px-bottom">Having Shree Rani Sati group as the channel partners for modern trade is an advantage. Their understanding of the business and the channel makes life easy for our teams. Which Shree Rani Sati at the helm of things we can be confident at modern trade outlets shelves will never run short of Haldiram products.</p>
                                    </div>
                                    <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">HALDIRAM</div>
                                    <!-- <div class="testimonials-position text-medium">HALDIRAM</div>  -->
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide bg-white border-radius-4px">
                                <div class="position-relative padding-5-rem-lr md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                    <img alt="" src="{{asset('frontend/images/testi/ortho.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px">
                                    <div class="testimonials-content">
                                        <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Every element is designed beautifully and perfect!</span> -->
                                        <p class="margin-30px-bottom">The young brigade’s enthusiasm is deep rooted into the experience of founding management and that gives Shree Rani Sati an edge. That was one of the reasons that we had to choose them for distribution of our range. A brilliant combination of experience capacity and vision for the future.</p>
                                    </div>
                                    <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">Dr. Ortho</div>
                                    <!-- <div class="testimonials-position text-medium">Dr. Ortho</div>  -->
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide bg-white border-radius-4px">
                                <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                    <img alt="" src="{{asset('frontend/images/testi/lava.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px">
                                    <div class="testimonials-content">
                                        <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                        <p class="margin-30px-bottom">Shree Rani Sati team has been instrumental in supporting the market development data mobile phone company would expect from CFA. They understand the dynamics of handset market and have played a very important role in placement of Lava mobiles in the market.</p>
                                    </div>
                                    <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">LAVA MOBILES</div>
                                    <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide bg-white border-radius-4px">
                                <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                    <img alt="" src="{{asset('frontend/images/testi/hamdard.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px">
                                    <div class="testimonials-content">
                                        <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                        <p class="margin-30px-bottom">Shree Rani Sati has been distributing our range of products for the last 18 years. They have been exceptional in their services and have ensure that supplies are consistent. Dealers are also satisfied with their service.</p>
                                    </div>
                                    <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">HAMDARD</div>
                                    <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide bg-white border-radius-4px">
                                <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                    <img alt="" src="{{asset('frontend/images/testi/btext.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px">
                                    <div class="testimonials-content">
                                        <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                        <p class="margin-30px-bottom">We are happy that Shree Rani Sati group is our partner for distribution the team is smart and always willing to support and service that trade what more one needs for efficient supply chain management.</p>
                                    </div>
                                    <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">B-TEX</div>
                                    <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                </div>
                            </div>
                            <!-- end slider item -->
                            
                        </div>
                        <!-- start slider pagination -->
                        <!-- <div class="swiper-pagination"></div> -->
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end testimonial section -->

    <!-- franchise testimonial section -->
    <section class="parallax big-section" data-parallax-background-ratio="0.2" style="background-image: url('{{asset('frontend/images/home-consulting-02.jpg')}}'); background-position: 50% 29.8719px;">
            <div class="opacity-full bg-gradient-tussock-greenish-slate"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-7 col-lg-8 col-sm-10 position-relative text-center overlap-gap-section wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <h4 class="alt-font text-white font-weight-600 margin-25px-bottom sm-margin-20px-bottom">Contact us today to Grow Your Franchise Business</h4>
                        <p class="text-white alt-font margin-35px-bottom sm-margin-25px-bottom">We will help you in finding brand partners across India. We also provide support for opening, running and managing your franchise stores.</p>
                        <a href="#" class="btn btn-fancy btn-large btn-olivine-green section-link align-self-start">Get started now<i class="fas fa-arrow-right right-icon"></i></a>
                    </div>
                </div>
            </div>
        </section>
    <!-- end franchise section -->

    <!-- start news section -->
    <section class="bg-light-greenish-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center margin-4-rem-bottom sm-margin-3-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">NEWS UPDATES</span>
                    <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Read our latest updates<br>& business tips & tricks.</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="outside-box-right">
                        <!-- start slider -->
                        <div class="swiper-container white-move swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-slider-options="{&quot;loop&quot;: true, &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } } }">
                            <div class="swiper-wrapper" id="swiper-wrapper-46bd523fdeb54e75" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2106.67px, 0px, 0px);">
                                
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 swiper-slide-prev" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 496.667px; margin-right: 30px;">
                                    <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/nwes/nwes_1.jpg')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                            <div class="text-white opacity-6 margin-10px-bottom">Shree Rani Sati Group</div>
                                            <div class="alt-font text-extra-large text-white margin-15px-bottom w-90 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">How a 24-yr-old took charge of family business and increased its turnover to Rs 236 crore</div>
                                            <a href="https://www.theweekendleader.com/Success/3083/the-spice-route.html" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 swiper-slide-active" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 496.667px; margin-right: 30px;">
                                    <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/nwes/nwes_2.jpg')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                            <div class="text-white opacity-6 margin-10px-bottom">Shree Rani Sati Group</div>
                                            <div class="alt-font text-extra-large text-white margin-15px-bottom w-90 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Shree Rani Sati TradeCorp firms its ties with Hamdard Food Division</div>
                                            <a href="https://www.adgully.com/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division-116158.html" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07 swiper-slide-next" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 496.667px; margin-right: 30px;">
                                    <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/nwes/nwes_3.jpg')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                            <div class="text-white opacity-6 margin-10px-bottom">Shree Rani Sati Group</div>
                                            <div class="alt-font text-extra-large text-white margin-15px-bottom w-90 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">Shree Rani Sati TradeCorp firms its ties with Hamdard Food Division</div>
                                            <a href="http://businessnewsthisweek.com/business/shree-rani-sati-tradecorp-firms-its-ties-with-hamdard-food-division/" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 496.667px; margin-right: 30px;">
                                    <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/nwes/nwes_4.jpg')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                            <div class="text-white opacity-6 margin-10px-bottom">Shree Rani Sati Group</div>
                                            <div class="alt-font text-extra-large text-white margin-15px-bottom w-90 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">How Technology Reshaping the Retail Industrys</div>
                                            <a href="https://www.cxooutlook.com/how-technology-reshaping-the-retail-industry/" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->
                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 496.667px; margin-right: 30px;">
                                    <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/nwes/nwes_4.jpg')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                            <div class="text-white opacity-6 margin-10px-bottom">Shree Rani Sati Group</div>
                                            <div class="alt-font text-extra-large text-white margin-15px-bottom w-90 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">A sneak peak at different trading practices</div>
                                            <a href="https://www.nationalheraldindia.com/cafe/a-sneak-peak-at-different-trading-practices" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->

                                <!-- start interactive banner item -->
                                <div class="swiper-slide interactive-banners-style-07" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 496.667px; margin-right: 30px;">
                                    <div class="interactive-banners-box bg-dark-slate-blue border-radius-6px">
                                        <div class="interactive-banners-box-image">
                                            <img src="{{asset('frontend/images/nwes/nwes_4.jpg')}}" alt="" data-no-retina="">
                                            <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                        </div>
                                        <div class="fancy-text-content padding-65px-lr md-padding-55px-lr xs-padding-30px-lr">
                                            <div class="text-white opacity-6 margin-10px-bottom">Shree Rani Sati Group</div>
                                            <div class="alt-font text-extra-large text-white margin-15px-bottom w-90 lg-w-90 sm-w-50 xs-w-90 md-margin-5px-bottom">9 Tech Trends Reshaping the Retail Industry</div>
                                            <a href="https://www.indianretailer.com/article/technology/digital-trends/9-tech-trends-reshaping-the-retail-industry.a7896" class="btn btn-fancy btn-very-small btn-green btn-round-edge margin-15px-top">View information</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end interactive banner item -->

                            
                            
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <!-- end slider -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end news section -->
    
    <!-- start footer form section -->
    <section id="call-request" class="cover-background wow animate__fadeIn md-background-position-right xs-no-padding-tb xs-border-tb border-color-medium-gray" style="background-image: url('{{asset('frontend/images/srsindia/form-banner.webp')}}'); visibility: visible; animation-name: fadeIn;">
        <div class="container xs-no-padding-lr">
            <div class="row justify-content-right">
                <div class="col-12 col-xl-6 col-lg-6 col-md-10 wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="text-center bg-white box-shadow-large border-radius-6px padding-3-rem-tb padding-4-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                        <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">Request a call back</span>
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px margin-40px-bottom w-80 mx-auto xs-w-100">Need a consultant for your business?</h5>
                        <!-- start contact form -->
                        <form action="email-templates/contact-form.php" method="post" class="margin-30px-bottom">
                            <input class="medium-input border-radius-5px margin-15px-bottom required" type="text" name="name" placeholder="Your name">
                            <input class="medium-input border-radius-5px margin-15px-bottom required" type="email" name="email" placeholder="Your email address">
                            <input class="medium-input border-radius-5px margin-15px-bottom required" type="text" name="phone" placeholder="Your phone">
                            <select class="medium-input border-radius-5px margin-15px-bottom required" name="phone">
                                <option>How May We Help You?</option>
                                <option>Distribution Network placement</option>
                                <option>Modern Trade Placement</option>
                                <option>Online Marketing</option>
                                <option>CFA Operations</option>
                                <option>BUSINESS CONSULTANCY</option>
                            </select>
                            <textarea class="large-input margin-15px-bottom border-radius-0px" name="comment" rows="3" placeholder="Write Your Message" spellcheck="false"></textarea>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-fancy btn-large btn-olivine-green btn-round-edge w-100 no-margin-bottom submit" type="submit" name="submit">Request a call schedule</button>
                            <div class="form-results border-radius-5px d-none"></div>
                        </form>
                        <p class="w-80 mx-auto text-extra-small line-height-22px m-0 xs-w-100">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                        <!-- end contact form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end footer form section -->

    <!-- start footer section -->
   
@endsection()