
@extends('frontend.layouts.app')

@section('content')
    
    <!-- start page title -->
    <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">srs</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">Our Core Team</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Our Core Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
    
        <!-- csr activity section -->
        <section class="bg-light-greenish-gray">
            <div class="container">
                <div class="row justify-content-center wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-10 text-center margin-4-rem-bottom md-margin-4-rem-bottom">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">Our Core Team</h4>
                        <!-- <p class="w-80 mx-auto md-w-100 mb-0">We have also started with Mangalam Sewa Trust to help the under privilaged strata of society on various fronts like</p> -->
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-4 justify-content-center">
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{asset('frontend/images/team/atul.webp')}}" data-no-retina="">
                                <!-- <div class="team-member-details bg-transparent-gradient-light-srs-green align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Atul Jaiswal</div>
                                <span class="text-small text-uppercase">Business Manager Telecom</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{asset('frontend/images/team/himanshu.webp')}}" data-no-retina="">
                                <!-- <div class="team-member-details bg-transparent-gradient-light-srs-green align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Himanshu Arora</div>
                                <span class="text-small text-uppercase">National Sales Head</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                    <!-- start team item -->
                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{asset('frontend/images/team/pranay.webp')}}" data-no-retina="">
                                <!-- <div class="team-member-details bg-transparent-gradient-light-srs-green align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Pranay Kumar</div>
                                <span class="text-small text-uppercase">General Manager Telecom Sales</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->

                     <!-- start team item -->
                     <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="{{asset('frontend/images/team/deepanshu.webp')}}" data-no-retina="">
                                <!-- <div class="team-member-details bg-transparent-gradient-light-srs-green align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div> -->
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Deepanshu Madhok</div>
                                <span class="text-small text-uppercase">Research Analyst</span>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end team item -->
                                     
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