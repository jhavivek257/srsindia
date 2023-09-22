@extends('frontend.layouts.app')
@section('content')
    
     <!-- start section -->
     <section class="p-0 cover-background wow animate__fadeIn bg-light-gray">
        <div class="container">
            <div class="row align-items-stretch justify-content-center full-screen">
                <div class="col-12 col-xl-6 col-lg-7 col-md-8 text-center d-flex align-items-center justify-content-center flex-column">
                    <h1 class="alt-font text-extra-big font-weight-700 letter-spacing-minus-5px text-extra-dark-gray margin-2-rem-bottom md-margin-1-rem-bottom">404</h1>
                    <h6 class="alt-font text-fast-blue font-weight-600 letter-spacing-minus-1px margin-10px-bottom text-uppercase"><i class="fas fa-exclamation-triangle"></i> Oops! Page not found!</h6>
                    <span class="alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">The page you requested was not found!</span>
                    <!-- <a href="index.html" class="btn btn-large btn-gradient-sky-blue-pink">Back to homepage</a> -->
                    <a href="/" class="btn btn-fancy btn-large btn-olivine-green section-link">Back to homepage<i class="fas fa-arrow-right right-icon"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


@endsection
