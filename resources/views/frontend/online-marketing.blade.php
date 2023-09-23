
@extends('frontend.layouts.app')

@section('content')
    
    <!-- start page title -->
    <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Online Marketing</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Online Marketing</li>
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
                    <div class="col-12 col-lg-12 col-md-6 md-margin-4-rem-bottom margin-20px-bottom">
                        <h5 class="alt-font w-90 text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Elevating Your Online Presence The Power of Strategic Product Placement</h5>
                        <p>online marketplace and ecommerce websites play a vital role in placement of products by developing of virtual shopping environment. It is the foundation which helps in managing customer engagement, sales conversions, and steady commitment of brands. As a result of these factor, today to become a successful brand and uplifting your online sale progress is essential Hindi digital marketplace. Online portals ensure that search engines are willingly discover your beneficiary customers.</p>
                     </div>

                    <div class="col-12 col-lg-12 col-md-9 md-padding-5px-left sm-padding-50px-right">
                          <img class="border-radius-6px" src="{{asset('frontend/images/service/online-marketing.webp')}}" alt="" data-no-retina="">
                     </div>
                
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="bg-light-greenish-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 position-relative sm-margin-30px-bottom">
                        <img class="border-radius-5px" src="{{asset('frontend/images/service/why-online-marketing.webp')}}" alt="" data-no-retina="">
                    </div>

                    <div class="col-12 col-lg-7 col-md-6">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Why Choose SRS as Your Online Partner</h5>
                        <p>When it comes to selecting a partner for online success, SRS stands as the beacon of choice. Here's why:</p>
                        <p><strong class="text-srs-green">Strategic Promotions:</strong> We implement online promotions, discounts, and special offers that act as magnets for online shoppers, propelling sales to new heights during promotional periods.</p>
                        <p><strong class="text-srs-green">Compelling Product Listings:</strong> We craft product listings that are both appealing and informative, adorned with high-quality images, comprehensive descriptions, and customer reviews. Using customer data we customised the product proposals to ensure modified experience of shopping. </p>
                        <p><strong class="text-srs-green">Consistent Brand Identity:</strong> Developing and maintaining a consistent brand image and messaging across all online platforms is our forte. This corporative approach strengthens our brand identity and helps in creating a powerful source of customer recognition or acceptance.</p>
                     </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- start section -->
        <section class="bg-light-gray">
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-12 col-lg-12 col-md-6">
                        <h5 class="alt-font w-90 text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">How We Pave the Way for Your Brand's Online Establishment</h5>
                        <p><strong class="text-srs-green">Strategic Product Placement:</strong> Our expertise lies in placing your products strategically throughout the website or app, including prime real estate like homepage banners, featured product sections, and search results. Strategic product placement ensures maximum transparency and commitment among the customers.</p>
                        <p><strong class="text-srs-green">Keyword Mastery:</strong> We harness the power of relevant keywords, description keywords, and attributes, aligning product listings with customer queries and optimizing search engine discoverability.</p>
                        <p><strong class="text-srs-green">Inventory Accuracy:</strong> : Preventing customer disappointment is paramount. V carefully ensures that accurate listing of products will reflect current inventory and removing the frustration caused by items out of stock and availability because of inaccurate information.</p>
                        <p><strong class="text-srs-green">Online Placement Service:</strong>  in the world of ecommerce our online placement services is authorization of success. We are here to make a remark that your brands digital journey is our mission and we are here to make your digital journey experience extraordinary.</p>
                        <p><strong class="text-srs-green">Quick Commerce Placement Service:</strong> Our quick commerce placement service shines for the fast-moving world of Quick commerce where we concentrate on speed. We ensure that your product is strategically placed and approachable enabling immediate transactions and delivering on the promise of comfort.</p>
                        <p>At Shree Rani Sati Group, we understand that online success depends on the art and science of strategic product placement. Believe Us, we develop your brand digital presence, sales growth and shape up your long lasting legacy in the digital Kingdom. Your success is our continuous effort</p>
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