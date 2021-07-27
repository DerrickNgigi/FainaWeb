@extends('layouts.app')

@section('title')
    FAINA
@endsection
@section('meta_data')


@endsection
@section('content')
    <!-- page-title-area start -->
    <div class="page-title-area pos-relative gray-bg pt-90 pb-60 fix"
         style="background-image: url(img/bg/page-title-bg.jpg);">
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
                        <h3>Contact Us</h3>
                        <p>We are only a call away</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-left text-lg-right mb-30">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-area end -->
    <!-- Call to Action -->
    <div class="cta-area pt-50 pb-50" style="background-image:url(img/bg/cta.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="cta-content mb-30">

                        <p>DO YOU HAVE ANY PROJECT ? </p>
                        <h1>Let’s Talk About Business Solutions With Us</h1>
                        <div class="cta-2-button">
                            <a class="x-btn x-btn-white" href="#contact"><span class="btn-text">contact us <i
                                        class="far fa-long-arrow-right"></i></span> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="ctas-info mb-30">
                        <h3>+254 795328722</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action -->
    <!-- contact-form-area -->
    <div class="contact-form-area pt-50 pb-50" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 offset-lg-1 offset-xl-2">
                    <div class="section-title-2 text-center mb-70">
                        <h2 class="mb-20">In case of any queries contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5 offset-xl-1">
                    <div class="contact-info mb-30">
                        <h3>Get in touch</h3>
                        <p>We care to listen.</p>

                        <ul class="mt-40">
                            <li>
                                <div class="c-info-icon">
                                    <img src="img/icon/c-icon.png" alt="">
                                </div>
                                <div class="c-info-text">
                                    <h4>Office Address</h4>
                                    <p>Chandaria BIIC Kenyatta University
                                    Groud Floor Rm 5.</p>
                                </div>
                            </li>
                            <li>
                                <div class="c-info-icon">
                                    <img src="img/icon/c-icon-2.png" alt="">
                                </div>
                                <div class="c-info-text">
                                    <h4>Email</h4>
                                    <p>fainaconsultancy@gmail.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="c-info-icon">
                                    <img src="img/icon/c-icon-3.png" alt="">
                                </div>
                                <div class="c-info-text">
                                    <h4>Phone</h4>
                                    <p>+254 795 328722</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="contact-form mb-30">
                        <form id="contact-form" action="#" method="POST">
                            <input name="name" type="text" placeholder="Full name">
                            <input name="email" type="email" placeholder="email address">
                            <input name="subject" type="text" placeholder="subject">
                            <textarea name="message" cols="30" rows="10" placeholder="write message"></textarea>
                            <button type="submit" class="x-btn btn-black">send message</button>
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-form-area end -->

    <!-- contact-map  -->
    <div class="contact-map">
        <div id="contact-map"></div>
    </div>
    <!-- contact-map end -->


@endsection
