@extends('layouts.app')

@section('title')
    FAINA
@endsection


@section('meta_data')
@endsection



@section('content')

    <!-- slider-area -->
    <section class="slider-area fix">
        <div class="single-slider slider-height-2 slider-height-4 pt-280" style="background-image: url(img/slider/blue-bg.png)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="slider-text-4 pt-0">
                            <h2 class="wow fadeInUp animated" data-wow-delay="0.4s">Technology Inclusion and Design Prototyping Made Easier</h2>
                            <p class="wow fadeInUp animated" data-wow-delay="0.9s">Have a small or medium Scale Technology Project? Worry Less about Product Design, PCB Design Artificial Intelligence and Machine learning Projects and 3D Printing. We walk with you through the journey</p>
                            <div class="hero-form wow fadeInUp animated" data-wow-delay="1.3s">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email">
                                    <button type="submit">Get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                        <div class="slider-img-2 wow fadeInRight animated" data-wow-duration="2.5s">
                            <img src="img/slider/01_Home.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area end -->

{{--    <!-- brand-area  -->--}}
{{--    <div class="brand-area brand-4-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-6 offset-xl-3">--}}
{{--                    <div class="section-title-2 text-center mb-70">--}}
{{--                        <h2>Our worldwide clients</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="brand-pattern" style="background-image: url(img/bg/brand-bg.png)">--}}
{{--                <div class="row brand-active-2">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-img">--}}
{{--                            <img src="img/brand/01.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-img">--}}
{{--                            <img src="img/brand/02.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-img">--}}
{{--                            <img src="img/brand/03.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-img">--}}
{{--                            <img src="img/brand/04.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-img">--}}
{{--                            <img src="img/brand/05.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="brand-img">--}}
{{--                            <img src="img/brand/01.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- brand-area end -->--}}

    <!-- fea-list-4-area -->
    <div class="fea-list-4-area pt-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">
                    <div class="section-title-2 text-center mb-70">
                        <h2 class="mb-20">Making 4th Industrial Technology Possible in your Projects and Business</h2>
                        <p>Implement efficiency in your business and Prototype development using new revolutionary Artificial Intelligence, Internet of things and Machine learning technologies. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feal-list-4-item active mb-30">
                        <div class="fea-list-4-img mb-40">
                            <img src="img/icon/gea-01.png" alt="">
                        </div>
                        <h3>Product Design</h3>
                        <p>Get Engineering drawing and designs for custom made products. These includes simulations, design calculations and specifications.</p>
{{--                        <a href="#">learn more <i class="ti-arrow-right"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feal-list-4-item active mb-30">
                        <div class="fea-list-4-img mb-40">
                            <img src="img/icon/gea-03.png" alt="">
                        </div>
                        <h3>PCB Design</h3>
                        <p>We design customized Printed Circuits Boards (PCBs) for custom projects and products for all preferable micro-controllers. We also help with fabrications through our partner companies. </p>
{{--                        <a href="#">learn more <i class="ti-arrow-right"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feal-list-4-item mb-30 active">
                        <div class="fea-list-4-img mb-40">
                            <img src="img/icon/gea-02.png" alt="">
                        </div>
                        <h3>3D Printing</h3>
                        <p>Bring your 3D Designs and custom models to reality with 3D printing in Faina. We offer first class product policing and post processing giving your that classical look on your products.</p>
{{--                        <a href="#">learn more <i class="ti-arrow-right"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feal-list-4-item mb-30 active">
                        <div class="fea-list-4-img mb-40">
                            <img src="img/icon/rd-01.png" alt="">
                        </div>
                        <h3>Software Development </h3>
                        <p>Business and Projects are never quite complete without automation and simplicity of software. We develop web and mobile applications.</p>
{{--                        <a href="#">learn more <i class="ti-arrow-right"></i></a>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feal-list-4-item mb-30 active">
                        <div class="fea-list-4-img mb-40">
                            <img src="img/icon/rd-02.png" alt="">
                        </div>
                        <h3>Artificial Intelligence and Machine Learning</h3>
                        <p>Want a touch of sophistication in your business and project. Worry no more Faina go you. We develop artificial intelligence and machine learning applications i.e image recognition apps </p>
{{--                        <a href="#">learn more <i class="ti-arrow-right"></i></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fea-list-4-area end -->

    <!-- xn-about-area  -->
    <div class="xn-about-area pt-110 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="xn-about-img mb-30 wow fadeInLeft animated" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <img src="img/bg/fea-4.png" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 offset-lg-1">
                    <div class="xn-about-content mb-30 pt-40">
                        <h2>Powered by Intellect
                            Driven by Values</h2>
                        <p>We build Design in Africa for Africa. We are driven with the zeal to make africa a better place by helping you develop quality advanced solution,</p>
                        <ul>
                            <li><i class="ti-check-box"></i> <span>Professionalism</span></li>
                            <li><i class="ti-check-box"></i> <span>Quality and Elegance</span></li>
                            <li><i class="ti-check-box"></i> <span>Timely and On-budget</span></li>
                        </ul>
{{--                        <div data-aos="fade-up">--}}
{{--                            <a href="#" class="btn-grad-4" >learn more</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="row pt-50">
                <div class="col-xl-6 col-lg-6">
                    <div class="xn-about-content mb-30 pt-40 pr-50">
                        <h2>Adaptive and Disruptive innovations to
                            Accelerate Change</h2>
                        <p>We promote disruptive innovations with quality design work and advanced simulations to accelerate prototype development and deliver robust solutions for your business and projects.</p>
                        <ul>
                            <li><i class="ti-check-box"></i> <span>Design</span>
                            </li>
                            <li><i class="ti-check-box"></i> <span>Prototype</span>
                            </li>
                            <li><i class="ti-check-box"></i> <span>Redesign</span>
                            </li>
                            <li><i class="ti-check-box"></i> <span>Deploy</span>
                            </li>
                        </ul>
{{--                        <div data-aos="fade-up">--}}
{{--                            <a href="#" class="btn-grad-4" >learn more</a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="xn-about-img-right mb-30 pl-70 wow fadeInRight animated" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <img src="img/bg/fea-41.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- xn-about-area end -->

    <!-- people-area -->
    <div class="people-area" style="background-image: url(img/bg/people.png)">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">
                    <div class="section-title-2 white-text text-center mb-70">
                        <h2 class="mb-20">Proud Client</h2>
                        <p>We are more proud to watch your business and scale as we handle the design and Technology work.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="people-item mb-20">
                        <div class="people-item-img mb-40">
                            <img src="img/icon/p1.png" alt="">
                        </div>
                        <h3>Archies Innovative Solutions</h3>
                        <p> We are happy with can now design and quickly prototype through 3D printing made possible by Faina 3D Printing Services.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="people-item mb-20">
                        <div class="people-item-img mb-40">
                            <img src="img/icon/p2.png" alt="">
                        </div>
                        <h3>Track IT Solution</h3>
                        <p>While for a long time I looked for a cheap fast and efficient PCB Designer, I found the Solution in Faina. They designed my PCB concept sent it out for fabrication all at a very affordable cost. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="people-item mb-20">
                        <div class="people-item-img mb-40">
                            <img src="img/icon/p3.png" alt="">
                        </div>
                        <h3>Kimathi Farms</h3>
                        <p>Importing Egg incubators is really hectic and an expensive venture, moreover it difficult to get custom made model to fit your needs. Faina did the designs and simulations for energy efficient custom made egg incubator at an affordable cost.</p>
                    </div>
                </div>
            </div>
            <div class="row d-none d-md-block">
                <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">
                    <div class="people-m-img mb-40 wow fadeInUp animated" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <img src="img/bg/p-mockup.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- people-area end -->

    <!-- pricing-area -->
{{--    <section class="pricing-area pt-100 pb-120">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">--}}
{{--                    <div class="section-title-2 text-center mb-70">--}}
{{--                        <h2 class="mb-20">Choose Your Plan</h2>--}}
{{--                        <p>Land from day very fill that midst stars one dominion. Itself was let that divided itself god don't--}}
{{--                            subdue wherein let--}}
{{--                            behold over he whose of sea moved called.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="price-tab">--}}
{{--                <ul class="nav price-tab-4-menu text-center" id="myTab" role="tablist">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"--}}
{{--                           aria-selected="true">Monthly</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"--}}
{{--                           aria-selected="false">Annual</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="tab-content" id="myTabContent">--}}
{{--                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                <div class="pricing-tab pricing-tab-4 text-center mb-30">--}}
{{--                                    <div class="price-img-4 pb-50">--}}
{{--                                        <img src="img/icon/pi1.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="price-value mb-30">--}}
{{--                                        <h3>Standard</h3>--}}
{{--                                        <h5>$32.50</h5>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Unlimited products</li>--}}
{{--                                        <li>Discount code</li>--}}
{{--                                        <li>2GB file storage</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul>--}}
{{--                                    <a href="#" class="btn-grad-4"><span>Buy Now</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                <div class="pricing-tab pricing-tab-4 text-center mb-30">--}}
{{--                                    <div class="price-img-4 pb-50">--}}
{{--                                        <img src="img/icon/pi2.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="price-value mb-30">--}}
{{--                                        <h3>Professional</h3>--}}
{{--                                        <h5>$42.50</h5>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Unlimited products</li>--}}
{{--                                        <li>Discount code</li>--}}
{{--                                        <li>2GB file storage</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul>--}}
{{--                                    <a href="#" class="btn-grad-4"><span>Buy Now</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                <div class="pricing-tab pricing-tab-4 text-center mb-30">--}}
{{--                                    <div class="price-img-4 pb-50">--}}
{{--                                        <img src="img/icon/pi3.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="price-value mb-30">--}}
{{--                                        <h3>Business</h3>--}}
{{--                                        <h5>$59.50</h5>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Unlimited products</li>--}}
{{--                                        <li>Discount code</li>--}}
{{--                                        <li>2GB file storage</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul>--}}
{{--                                    <a href="#" class="btn-grad-4"><span>Buy Now</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                <div class="pricing-tab pricing-tab-4 text-center mb-30">--}}
{{--                                    <div class="price-img-4 pb-50">--}}
{{--                                        <img src="img/icon/pi1.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="price-value mb-30">--}}
{{--                                        <h3>Standard</h3>--}}
{{--                                        <h5>$79.50</h5>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Unlimited products</li>--}}
{{--                                        <li>Discount code</li>--}}
{{--                                        <li>2GB file storage</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul>--}}
{{--                                    <a href="#" class="btn-grad-4"><span>Buy Now</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                <div class="pricing-tab pricing-tab-4 text-center mb-30">--}}
{{--                                    <div class="price-img-4 pb-50">--}}
{{--                                        <img src="img/icon/pi2.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="price-value mb-30">--}}
{{--                                        <h3>Professional</h3>--}}
{{--                                        <h5>$89.50</h5>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Unlimited products</li>--}}
{{--                                        <li>Discount code</li>--}}
{{--                                        <li>2GB file storage</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul>--}}
{{--                                    <a href="#" class="btn-grad-4"><span>Buy Now</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-4 col-lg-4 col-md-6">--}}
{{--                                <div class="pricing-tab pricing-tab-4 text-center mb-30">--}}
{{--                                    <div class="price-img-4 pb-50">--}}
{{--                                        <img src="img/icon/pi3.png" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="price-value mb-30">--}}
{{--                                        <h3>Business</h3>--}}
{{--                                        <h5>$99.50</h5>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li>Unlimited products</li>--}}
{{--                                        <li>Discount code</li>--}}
{{--                                        <li>2GB file storage</li>--}}
{{--                                        <li>24/7 Support</li>--}}
{{--                                    </ul>--}}
{{--                                    <a href="#" class="btn-grad-4"><span>Buy Now</span></a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- pricing-area end -->

    @endsection
