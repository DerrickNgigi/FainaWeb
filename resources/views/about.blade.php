@extends('layouts.app')

@section('title')
    FAINA
@endsection
@section('meta_data')


@endsection
@section('content')
    <!-- page-title-area start -->
    <div class="page-title-area pos-relative gray-bg pt-90 pb-20 fix" style="background-image: url(img/bg/page-title-bg.png);">
        <div class="shape-slider">
            <img class="shape shape-2  " src="img/shape/shape2.png" alt="">
            <img class="shape shape-4 " src="img/shape/shape3.png" alt="">
            <img class="shape shape-5 " src="img/shape/shape-sq.png" alt="">
            <img class="shape shape-6 " src="img/shape/shape-c-2.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="page-title mb-30">
                        <h3 style="color: white">About Us</h3>
                        <p style="color: white" >Inspired by the necessity to innovate.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-left text-lg-right mb-30">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-area end -->

    <!-- features-3-area  -->
    <div class="features-3-area features-3-area-top pt-10 pb-20 fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 ">
                    <div class="fea-3-img mb-30 wow fadeInLeft animated" data-wow-duration="1.5s" data-wow-delay=".5s">
                        <img src="img/bg/fea-3.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1">
                    <div class="fea-3-content mb-30 pt-150">
                        <span class="theme-color-sub"> our history</span>
                        <h2>Designing Award winning Products</h2>
                        <p>Covid-19 inspired many of us to realize the importance of local design and manufacturing.
                            Been part of the team that designed the first african ventilator we realised the bottleneck of innovation in the country.
                        Lack of an affordable design and prototyping services and teams to actualize their concepts.</p>
                        <p>We founded Faina with the 4th Industrial technology being the pillar of our services. Our goal is to make incorporating new technology in your
                        business and seamless as it can be.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features-3-area end -->

    <!-- soft-area -->
    <div class="soft-area pos-relative pb-115">
        <div class="shape-slider">
            <span class="shape shape-circle shape-c5-1 "></span>
            <span class="shape shape-circle shape-c5-2 "></span>
            <span class="shape shape-circle shape-c5-3 "></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title-2 text-center mb-70">
                        <h2 class="mb-20">Why Us</h2>
                        <p>Him have deep brought life darkness firmament unto move</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="soft-fea-list text-center mb-30">
                        <div class="soft-fea-list-img mb-35">
                            <img src="img/icon/ss-01.png" alt="">
                        </div>
                        <h3>Professional Team</h3>
                        <p>We have an excellent production base and qualified employees. We are a professional team in which everyone specializes in the perfect end result.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="soft-fea-list text-center mb-30">
                        <div class="soft-fea-list-img mb-35">
                            <img src="img/icon/ss-02.png" alt="">
                        </div>
                        <h3>Cost-Effective</h3>
                        <p>Using computer simulations and  efficient prototyping techniques we help cut the cost of research and design without producing quality of product.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="soft-fea-list text-center mb-30">
                        <div class="soft-fea-list-img mb-35">
                            <img src="img/icon/ss-03.png" alt="">
                        </div>
                        <h3>Save Your Time</h3>
                        <p>With advanced prototyping skills and techniques we quickly help you develop the ultimate product with short research and development cycles.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 col-md-3">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="soft-fea-list text-center mb-30">
                        <div class="soft-fea-list-img mb-35">
                            <img src="img/icon/ss-02.png" alt="">
                        </div>
                        <h3>Social Impact</h3>
                        <p>We are driven by initiatives to empower and create positive impact. We give back to the community through sensitization of technology education in slums.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="soft-fea-list text-center mb-30">
                        <div class="soft-fea-list-img mb-35">
                            <img src="img/icon/ss-03.png" alt="">
                        </div>
                        <h3>Grow Local Abilities</h3>
                        <p>Youth employment stands at 65% in Kenya, your trust can rewrite this statistic. Have the taste of rich local tech talents with the country's best minds in the Faina Team. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- soft-area end -->

{{--    <!-- testimonial-6-area -->--}}
{{--    <div class="testimonial-6-area pos-relative gray-bg pt-140 pb-140">--}}
{{--        <div class="shape-slider">--}}
{{--            <img class="shape shape-1 shape-5-1 " src="img/shape/shape2.png" alt="">--}}
{{--            <img class="shape shape-2  " src="img/shape/shape-zigzag.png" alt="">--}}
{{--            <img class="shape shape-5 " src="img/shape/shape5.png" alt="">--}}
{{--            <img class="shape shape-6 " src="img/shape/shape3.png" alt="">--}}
{{--        </div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-8 offset-xl-2">--}}
{{--                    <div class="section-title-2 text-center mb-70">--}}
{{--                        <h2 class="mb-20">Whats our client think about us</h2>--}}
{{--                        <p>We are because You are</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-10 offset-xl-1">--}}
{{--                    <div class="testimonial-nav mb-30">--}}
{{--                        <div class="testimonial-thumb">--}}
{{--                            <img src="img/testimonial/img1.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-thumb">--}}
{{--                            <img src="img/testimonial/img2.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-thumb">--}}
{{--                            <img src="img/testimonial/img3.png" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="testimonial-thumb">--}}
{{--                            <img src="img/testimonial/img4.png" alt="">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="testimonia-item-active">--}}
{{--                        <div class="testimonial-item text-center">--}}
{{--                            <div class="designation mb-30">--}}
{{--                                <h3>- Salim Rana -</h3>--}}
{{--                                <span>CEO BasicTheme</span>--}}
{{--                            </div>--}}
{{--                            <p>“ Days for two every wherein green fruitful also fruitful was seasons unto won't the fowl--}}
{{--                                light deep more then regular--}}
{{--                                before piece sixth them dominion cattle fish cattle first midst moved greater divided so--}}
{{--                                dove nature tree bisapper relan--}}
{{--                                bring Cattle fish cattle first midst moved greater divided so bring.”</p>--}}

{{--                        </div>--}}
{{--                        <div class="testimonial-item text-center">--}}
{{--                            <div class="designation mb-30">--}}
{{--                                <h3>- Masud Hassan -</h3>--}}
{{--                                <span>Designer</span>--}}
{{--                            </div>--}}
{{--                            <p>“ Fruitful was seasons unto won't the fowl light deep more then regular--}}
{{--                                before piece sixth them dominion cattle fish cattle first midst moved greater divided so--}}
{{--                                dove nature tree bisapper relan days for two every wherein green fruitful also--}}
{{--                                bring Cattle fish cattle first midst moved greater divided so bring.”</p>--}}

{{--                        </div>--}}
{{--                        <div class="testimonial-item text-center">--}}
{{--                            <div class="designation mb-30">--}}
{{--                                <h3>- Jon Doe -</h3>--}}
{{--                                <span>CEO DeerCreative</span>--}}
{{--                            </div>--}}
{{--                            <p>“ Wherein green fruitful also fruitful was seasons unto won't the fowl light deep more then--}}
{{--                                regular--}}
{{--                                before piece sixth them dominion cattle fish cattle first midst moved greater divided so--}}
{{--                                dove nature tree bisapper relan--}}
{{--                                bring Cattle fish cattle first midst moved greater divided so bring.Days for two every”</p>--}}

{{--                        </div>--}}
{{--                        <div class="testimonial-item text-center">--}}
{{--                            <div class="designation mb-30">--}}
{{--                                <h3>- Hehedi Hossen -</h3>--}}
{{--                                <span>CEO CoderCredit</span>--}}
{{--                            </div>--}}
{{--                            <p>“ Days for two every wherein green fruitful also fruitful was seasons unto won't the fowl--}}
{{--                                light deep more then regular--}}
{{--                                before piece sixth them dominion cattle fish cattle first midst moved greater divided so--}}
{{--                                dove nature tree bisapper relan--}}
{{--                                bring Cattle fish cattle first midst moved greater divided so bring.”</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- testimonial-6-area end -->--}}

    <!-- testimonial-6-area -->
    <div class="brand-area pos-relative pt-145 pb-90">
        <div class="shape-slider">
            <img class="shape shape-1 shape-5-1 " src="img/shape/shape-tr-2.png" alt="">
            <img class="shape shape-5 " src="img/shape/shape-c-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <div class="section-title-2 text-center mb-70">
                        <h2 class="mb-20">Trusted Partners</h2>
                        <p>We collaboratively work with our companies to deliver full-fledged solution.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="https://www.godan.info/"><img src="img/brand/01.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="https://p4cda.net/"><img src="img/brand/03.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href="https://www.youngsavvycentre.org/"><img src="img/brand/04.png" alt=""></a>
                    </div>
                </div>
                <div class="logo-brand-item">
                    <div class="brand-img">
                        <a href=""><img src="img/brand/02.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-6-area end -->

@endsection
