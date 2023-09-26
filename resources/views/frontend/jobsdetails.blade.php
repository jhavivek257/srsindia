
@extends('frontend.layouts.app')

@section('content')
    
     <!-- start page title -->
     <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">{{$CareerDetails->job_position}}</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>{{$CareerDetails->job_position}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- core value section -->
        <section>
        <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7 col-md-6 md-margin-4-rem-bottom">
                        <div class="jobs-content-box margin-15px-bottom text-dark-charcoal">
                            <p><strong>Role:</strong> {{$CareerDetails->job_position}}</p>
                            <p><strong>Type:</strong> {{$CareerDetails->job_type}}</p>
                            <p><strong>Location:</strong> {{$CareerDetails->job_type}}</p>
                            <p><strong>Qualification:</strong> {{$CareerDetails->qualification}}</p>
                            <p><strong>Skills Required:</strong> {{$CareerDetails->skills}}</p>
                            <p><strong>Experience Required:</strong> {{$CareerDetails->job_type}}</p>
                            <p><strong>Working Days:</strong> {{$CareerDetails->working_days}}</p>
                            <h6 class="alt-font text-dark-charcoal font-weight-600 letter-spacing-minus-1px margin-5px-bottom margin-15px-top mx-auto xs-w-100">Job Description:</h6>
                            <div class="content-body">{!! $CareerDetails->content !!}</div>
                        </div>
                    </div>

                    <div class="col-12 col-xl-5 col-lg-5 col-md-4 wow animate__fadeIn jobform" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                        <div class="text-center bg-white box-shadow-large border-radius-6px padding-3-rem-tb padding-4-rem-lr sm-padding-5-rem-all xs-padding-3-half-rem-lr xs-padding-6-rem-tb xs-no-border-radius">
                            <span class="alt-font text-medium text-olivine-green text-uppercase font-weight-500 d-block margin-15px-bottom sm-margin-10px-bottom">Shree Rani Sathi Group</span>
                            <h6 class="alt-font text-dark-charcoal font-weight-600 letter-spacing-minus-1px margin-20px-bottom  mx-auto xs-w-100">Apply for this position!</h6>
                            <!-- start contact form -->
                            <form action="email-templates/contact-form.php" method="post" class="margin-20px-bottom">
                                <input class="medium-input border-radius-5px margin-15px-bottom required" type="text" name="phone" value="{{$CareerDetails->job_position}}" placeholder="{{$CareerDetails->job_position}}" disabled >
                                <input class="medium-input border-radius-5px margin-15px-bottom required" type="text" name="name" placeholder="Your name">
                                <input class="medium-input border-radius-5px margin-15px-bottom required" type="email" name="email" placeholder="Your email address">
                                <input class="medium-input border-radius-5px margin-15px-bottom required" type="text" name="phone" placeholder="Your phone">
                                <input class="medium-input border-radius-5px margin-15px-bottom required" type="file" name="resume">
                                <textarea class="large-input margin-15
                                px-bottom border-radius-0px" name="comment" rows="3" placeholder="Describe yourself here..." spellcheck="false"></textarea>
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-fancy btn-large btn-olivine-green btn-round-edge w-100 no-margin-bottom submit" type="submit" name="submit">Apply Now</button>
                                <div class="form-results border-radius-5px d-none"></div>
                            </form>
                            <p class="w-80 mx-auto text-extra-small line-height-22px m-0 xs-w-100">We are committed to protecting your privacy. We will never collect information about you without your explicit consent.</p>
                            <!-- end contact form -->
                        </div>
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