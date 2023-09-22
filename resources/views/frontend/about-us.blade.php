@extends('frontend.layouts.app')

@section('content')

        <!-- start page title -->
        <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">About Us</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Shree Rani Sati Group</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>About us</li>
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
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Shree Rani Sati Group</h5>
                        <p>We have a enriched with industry experience of more than 35 years. Shree Rani Sati group is well recognised in the field of marketing, distribution and supply chain management. Power distribution services cover where its product category spread across Pan India. Few product categories that we specialize into include FMCG, food and beverages, healthcare product, consumer goods, consumer electronics and home appliances, telecom mobile handset, value-added electronic and telecom accessories.</p>
                        <p>In our pursuit to serve the brands, we understand specific requirement with respect to scale expansion region and business delivery expectation. We also understand and empathize with the need of trading community would require support from distribution partners like us to deliver the right product at that right time for the right consumer. We know the importance and significance of speed of execution efficiently and territory sales for distribution business that leads to consumer activation.</p>
                        <p>Led under the dynamic leadership of our Director Mr Rohit Tekriwal, we as a team are working towards emission of setting up a strong marketing and distribution network in domestic markets. Back by Mark presence in our area for operation the outstanding success we have achieved is because of our vision to maintain the sound business relation and ethics while dealing with our quality conscious clients.</p>
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

        <!-- counter section -->
        <section class="bg-light-greenish-gray srs-counter">
            <div class="container">
                
                <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center">
                    <!-- start text box item -->
                    <div class="col sm-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box text-center padding-1-rem-all lg-padding-1-rem-lr sm-padding-2-rem-lr">
                            <div class="feature-box-icon">
                                <h2 class="font-weight-800 text-srs-green letter-spacing-minus-2px margin-15px-bottom">35+</h2>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Years in Business</span>
                            </div>
                        </div>
                    </div>
                    <!-- end text box item -->
                    <!-- start text box item -->
                    <div class="col sm-margin-30px-bottom xs-margin-15px-bottom">
                        <div class="feature-box text-center padding-1-rem-all lg-padding-1-rem-lr sm-padding-2-rem-lr">
                            <div class="feature-box-icon">
                                <h2 class="font-weight-800 text-srs-green letter-spacing-minus-2px margin-15px-bottom">200+</h2>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Happy Brands</span>
                            </div>
                        </div>
                    </div>
                    <!-- end text box item -->
                    <!-- start text box item -->
                    <div class="col">                        
                        <div class="feature-box text-center padding-1-rem-all lg-padding-1-rem-lr sm-padding-2-rem-lr">
                            <div class="feature-box-icon">
                                <h2 class="font-weight-800 text-srs-green letter-spacing-minus-2px margin-15px-bottom">1.5 Lac</h2>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Sq. Ft. Warehousing Capacity</span>
                            </div>
                        </div>
                    </div>
                    <!-- end text box item -->
                    <!-- start text box item -->
                    <div class="col">                        
                        <div class="feature-box text-center padding-1-rem-all lg-padding-1-rem-lr sm-padding-2-rem-lr">
                            <div class="feature-box-icon">
                                <h2 class="font-weight-800 text-srs-green letter-spacing-minus-2px margin-15px-bottom">2 K+</h2>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-5px-bottom d-block text-extra-dark-gray">Pan India Distributors</span>
                            </div>
                        </div>
                    </div>
                    <!-- end text box item -->
                </div>
            </div>
        </section>
        <!-- end counter section -->
        
        <!-- busines modal section -->
        <section class="big-section wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-10 col-xl-4 col-lg-5 md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">OUR BUSINESS MODEL</h5>
                        <blockquote class="border-width-4px border-color-olivine-green text-extra-medium padding-25px-left pe-0 margin-40px-top margin-30px-bottom lg-w-95">
                            We work to ensure that your growth of your brand/business and generate sufficient profits.
                        </blockquote>
                        <p class="w-90 md-w-100">We have different departments from product development to its marketing &amp; distribution which are managed by their respective managers.</p>
                        <a href="#" class="btn btn-fancy btn-small btn-olivine-green btn-round-edge margin-10px-top">Discover srsindia</a>
                    </div>
                    <div class="col-12 col-md-10 col-lg-7 offset-xl-1 wow animate__zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <img src="{{asset('frontend/images/srsindia/business-model.webp')}}" alt="" data-no-retina="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end business modal section -->

        <!-- industries served section -->
        <section class="bg-light-greenish-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 text-center margin-3-rem-bottom sm-margin-3-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-inline-block margin-15px-bottom sm-margin-10px-bottom">BRAND MANAGEMENT SOLUTIONS</span>
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">We blend business ideas to create something awesome</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center">
                    <!-- start services item -->
                    <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/fmcg.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">FMCG</span>
                                <p class="w-85 lg-w-100">We have experience working with many international FMCG brands for several years</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/telecome.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Telecom</span>
                                <p class="w-85 lg-w-100">For the years we are parner in the business expansion of several telecom brands in india</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/')}}images/industries/healthcare.webp" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Health Care</span>
                                <p class="w-85 lg-w-100">We have always been ahead in distributing and placing health care and ayurvedic products.</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/cosmetics.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Cosmetics</span>
                                <p class="w-85 lg-w-100">We have experience working with many domestic and international cosmetic brands.</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/technology.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Ecommerce</span>
                                <p class="w-85 lg-w-100">We have a defined structure to use multiple e-commerce platforms to boost online sales.</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col margin-4-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/logistics.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Logistics And Supply Chain</span>
                                <p class="w-85 lg-w-100">With our warehousing &amp;logistics system, we always manage the stock and distribution of the brands.</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col md-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/consultancy.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Consultation</span>
                                <p class="w-85 lg-w-100">With years of experience in the consumer market, we understand every detail of brand management.</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col xs-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/electronic.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Electrical Appliances</span>
                                <p class="w-85 lg-w-100">We specialize in marketing and distribution of electrical goods. We get eye-catching displays of your goods in stores. </p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                    <!-- start services item -->
                    <div class="col xs-margin-4-rem-bottom wow animate__fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="feature-box feature-box-left-icon-middle">
                            <div class="feature-box-icon margin-30px-right lg-margin-25px-right">
                                <img class="rounded-circle box-shadow-large w-110px h-110px border-all border-width-6px border-color-white lg-w-90px lg-h-90px sm-w-80px sm-h-80px" src="{{asset('frontend/images/industries/food.webp')}}" alt="" data-no-retina="">
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font text-srs-green d-inline-block font-weight-600 text-uppercase margin-5px-bottom">Food And Drinks</span>
                                <p class="w-85 lg-w-100">With a well-defined system for handling food &amp; beverages, we care for their taste and freshness until they reach the consumer.</p>                           
                            </div>
                        </div>
                    </div>
                    <!-- end services item -->
                
                </div>
            </div>
        </section>
        <!-- end industries serve section -->

         <!-- testimonial start section -->
         <section class="bg-gradient-white-light-gray border-top border-width-1px border-color-medium-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-7 text-center margin-4-rem-bottom sm-margin-3-rem-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">Satisfied clients</span>
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Whats our customers<br>saying
                            about us</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="swiper-container black-move swiper-horizontal-3d padding-7-rem-tb swiper-pagination-bottom sm-padding-10-rem-top xs-padding-8-rem-top swiper-container-coverflow swiper-container-3d swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-slider-options="{ &quot;loop&quot;: true, &quot;slidesPerView&quot;: 1,&quot;centeredSlides&quot;:true,&quot;effect&quot;:&quot;coverflow&quot;,&quot;coverflowEffect&quot;:{&quot;rotate&quot;:0,&quot;stretch&quot;:100,&quot;depth&quot;:150,&quot;modifier&quot;:1.5,&quot;slideShadows&quot;:true}, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next&quot;, &quot;prevEl&quot;: &quot;.swiper-button-prev&quot; }, &quot;autoplay&quot;: { &quot;delay&quot;: 3000, &quot;disableOnInteraction&quot;: false }, &quot;pagination&quot;: { &quot;el&quot;: &quot;.swiper-pagination&quot;, &quot;clickable&quot;: true, &quot;dynamicBullets&quot;: true }, &quot;breakpoints&quot;: { &quot;768&quot;: { &quot;slidesPerView&quot;: 2 } } }">
                            <div class="swiper-wrapper" id="swiper-wrapper-7ea1040aaa23b0c26" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-2565px, 0px, 0px);"><div class="swiper-slide bg-white border-radius-4px swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(750px, 0px, -1125px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -7;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/hamdard.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                            <p class="margin-30px-bottom">Shree Rani Sati has been distributing our range of products for the last 18 years. They have been exceptional in their services and have ensure that supplies are consistent. Dealers are also satisfied with their service.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">HAMDARD</div>
                                        <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 7.5; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div><div class="swiper-slide bg-white border-radius-4px swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(600px, 0px, -900px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -5;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/btext.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                            <p class="margin-30px-bottom">We are happy that Shree Rani Sati group is our partner for distribution the team is smart and always willing to support and service that trade what more one needs for efficient supply chain management.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">B-TEX</div>
                                        <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 6; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                                <!-- start slider item -->
                                <div class="swiper-slide bg-white border-radius-4px" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(450px, 0px, -675px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -4;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/haldiram.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Just love their design for all stunning details!</span> -->
                                            <p class="margin-30px-bottom">Having Shree Rani Sati group as the channel partners for modern trade is an advantage. Their understanding of the business and the channel makes life easy for our teams. Which Shree Rani Sati at the helm of things we can be confident at modern trade outlets shelves will never run short of Haldiram products.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">HALDIRAM</div>
                                        <!-- <div class="testimonials-position text-medium">HALDIRAM</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 4.5; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide bg-white border-radius-4px" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(300px, 0px, -450px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -2;">
                                    <div class="position-relative padding-5-rem-lr md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/ortho.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Every element is designed beautifully and perfect!</span> -->
                                            <p class="margin-30px-bottom">The young brigade’s enthusiasm is deep rooted into the experience of founding management and that gives Shree Rani Sati an edge. That was one of the reasons that we had to choose them for distribution of our range. A brilliant combination of experience capacity and vision for the future.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">Dr. Ortho</div>
                                        <!-- <div class="testimonials-position text-medium">Dr. Ortho</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 3; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide bg-white border-radius-4px swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(150px, 0px, -225px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -1;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/lava.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                            <p class="margin-30px-bottom">Shree Rani Sati team has been instrumental in supporting the market development data mobile phone company would expect from CFA. They understand the dynamics of handset market and have played a very important role in placement of Lava mobiles in the market.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">LAVA MOBILES</div>
                                        <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 1.5; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide bg-white border-radius-4px swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="4 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 1;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/hamdard.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                            <p class="margin-30px-bottom">Shree Rani Sati has been distributing our range of products for the last 18 years. They have been exceptional in their services and have ensure that supplies are consistent. Dealers are also satisfied with their service.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">HAMDARD</div>
                                        <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div></div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide bg-white border-radius-4px swiper-slide-next" data-swiper-slide-index="4" role="group" aria-label="5 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(-150px, 0px, -225px) rotateX(0deg) rotateY(0deg) scale(1); z-index: 0;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/btext.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Simple and easy to integrate and build the website!</span> -->
                                            <p class="margin-30px-bottom">We are happy that Shree Rani Sati group is our partner for distribution the team is smart and always willing to support and service that trade what more one needs for efficient supply chain management.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">B-TEX</div>
                                        <!-- <div class="testimonials-position text-medium">Apple Design</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 1.5; transition-duration: 0ms;"></div></div>
                                <!-- end slider item -->
                                
                            <div class="swiper-slide bg-white border-radius-4px swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(-300px, 0px, -450px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -2;">
                                    <div class="position-relative padding-5-rem-lr  md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/haldiram.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Just love their design for all stunning details!</span> -->
                                            <p class="margin-30px-bottom">Having Shree Rani Sati group as the channel partners for modern trade is an advantage. Their understanding of the business and the channel makes life easy for our teams. Which Shree Rani Sati at the helm of things we can be confident at modern trade outlets shelves will never run short of Haldiram products.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">HALDIRAM</div>
                                        <!-- <div class="testimonials-position text-medium">HALDIRAM</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 3; transition-duration: 0ms;"></div></div><div class="swiper-slide bg-white border-radius-4px swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 5" style="width: 570px; transition-duration: 0ms; transform: translate3d(-450px, 0px, -675px) rotateX(0deg) rotateY(0deg) scale(1); z-index: -3;">
                                    <div class="position-relative padding-5-rem-lr md-padding-3-rem-lr padding-4-half-rem-bottom padding-8-rem-top sm-padding-10-rem-top xs-padding-8-rem-top">
                                        <img alt="" src="{{asset('frontend/images/testi/ortho.jpg')}}" class="absolute-middle-center top-0px rounded-circle w-150px xs-w-100px border-all border-color-white box-shadow-extra-large border-width-8px" data-no-retina="">
                                        <div class="testimonials-content">
                                            <!-- <span class="text-extra-medium text-extra-dark-gray margin-10px-bottom d-block font-weight-500">Every element is designed beautifully and perfect!</span> -->
                                            <p class="margin-30px-bottom">The young brigade’s enthusiasm is deep rooted into the experience of founding management and that gives Shree Rani Sati an edge. That was one of the reasons that we had to choose them for distribution of our range. A brilliant combination of experience capacity and vision for the future.</p>
                                        </div>
                                        <div class="testimonials-author text-medium margin-5px-bottom text-olivine-green text-uppercase font-weight-500 d-inline-block">Dr. Ortho</div>
                                        <!-- <div class="testimonials-position text-medium">Dr. Ortho</div>  -->
                                    </div>
                                <div class="swiper-slide-shadow-left" style="opacity: 0; transition-duration: 0ms;"></div><div class="swiper-slide-shadow-right" style="opacity: 4.5; transition-duration: 0ms;"></div></div></div>
                            <!-- start slider pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                            <!-- end slider pagination -->
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial end section -->

        <!-- Award served section -->
        <section class="big-section wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-10 col-xl-4 col-lg-5 md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Awards & Achievemnts</h5>
                        <blockquote class="border-width-4px border-color-olivine-green text-extra-medium padding-25px-left pe-0 margin-40px-top margin-30px-bottom lg-w-95">
                            We work to ensure that your growth of your brand/business and generate sufficient profits.
                        </blockquote>
                        <p class="w-90 md-w-100">We have different departments from product development to its marketing &amp; distribution which are managed by their respective managers.</p>
                    </div>
                    <div class="col-12 col-md-10 col-lg-7 offset-xl-1 wow animate__zoomIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                        <img src="{{asset('frontend/images/srsindia/award.jpg')}}" alt="" data-no-retina="">
                    </div>
                </div>
            </div>
        </section>
        <!-- end award serve section -->
        
        <!--CTA start section -->
        <section class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image: url('{{asset('frontend/images/home-corporate-img-05.jpg')}}'); visibility: visible; animation-name: fadeIn; background-position: 50% 90.9141px;">
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