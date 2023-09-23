
@extends('frontend.layouts.app')

@section('content')
    
        <!-- start page title -->
        <section class="bg-light-gray padding-40px-tb sm-padding-30px-tb page-title-small">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                        <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">SRS</h1>
                        <span class="alt-font text-medium d-block d-md-inline-block sm-margin-5px-top">CFA Operations</span>
                    </div>
                    <div class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>CFA Operations</li>
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
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Welcome to Our CFA Operations Expertise</h5>
                        <p>At Shree Rani Sati Group, we take pride in our ability to efficiently manage large-scale CFA (Clearing and Forwarding Agent) operations for businesses. Always believe in providing quality product to the customers and we have experience people in our team with a cutting-edge infrastructure make us a trustworthy partner for your brand by maximising the product supply with successfully minimising the cost of logistics. For every successful brand CFA operation always act as a foundation for the modern supply chain management and then providing a transformational strategy that reduces the inventory handling cost and improves the overall efficiency of operations</p>
                    </div>

                    <div class="col-12 col-lg-12 col-md-9 md-padding-5px-left sm-padding-50px-right">
                          <img class="border-radius-6px" src="{{asset('frontend/images/service/cfa.jpg')}}" alt="" data-no-retina="">
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
                        <img class="border-radius-5px" src="{{asset('frontend/images/service/why-cfa.webp')}}" alt="" data-no-retina="">
                    </div>

                    <div class="col-12 col-lg-7 col-md-6">
                        <h5 class="alt-font text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Why Choose CFA Operations with Us</h5>
                        <p><strong class="text-srs-green">Cost-Effective Inventory Management:</strong> Experience significant reductions in inventory holding costs as we streamline your supply chain. With fewer handling steps and enhanced inventory accuracy, your financial performance is set to soar.</p>
                        <p><strong class="text-srs-green">Rapid Product Delivery:</strong> In today's dynamic marketplace, swift and precise deliveries are paramount. Our CFA operations ensure that your products reach clients faster, in line with their ever-changing expectations.</p>
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
                        <h5 class="alt-font w-90 text-dark-charcoal font-weight-600 text-uppercase letter-spacing-minus-1px">Our Operational Approach</h5>
                        <p><strong class="text-srs-green">Efficiency at Its Best:</strong> We specialize in expediting product movement, ensuring quicker order fulfillment. Our efficient dedication exceeds the customer expectation and helps in strengthening your brand reputation.</p>
                        <p><strong class="text-srs-green">Real-time Collaboration:</strong> Seamlessly connect suppliers and retailers through our platform, fostering real-time collaboration. What is the outcome? A supply chain which operates like a smooth working machine delivering product as per the market requirement when and where they are needed.</p>
                        <p><strong class="text-srs-green">Adaptable to Your Needs:</strong> Our CFA operations are designed with adaptability in mind. Whether you're facing fluctuating demand, market shifts, or seasonal changes, we effortlessly adjust to meet your evolving requirements. This Speedy mechanism always keep your supply chain receptive and fast.</p>
                        <p><strong class="text-srs-green">Peak Season Performance:</strong>  When peak seasons arrive or order volumes surge, rest assured that our CFA operations rise to the occasion. We handle increased workload efficiently and allowing your company to take advantage of opportunities without sacrificing quality service.</p>
                         <p>Shree Rani Sati group provides strategic CFA operations as the foundation of your supply chain management. We qualify your firm to grow in the competitive era of Indian marketplace by lowering cost, quick delivery multiple times and giving resilience in reaction to market differences. Our continuous dedication to logistics quality means that you can meet client needs with accuracy and fastly on a continuous basis.</p>
                         <p>Partner with us today and experience the difference of optimized CFA operations. Your success is our priority.</p>
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