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
                        <h3>Faina Innovations</h3>
                        <p>Inspired to innovate solutions in Agriculture and Education. Rewriting the story of Africa. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-left text-lg-right mb-30">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li>Innovations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-area end -->

    <!-- portfolio-area -->
    <div class="portfolio-area pt-50 pb-10 portfolio-slider">
        <div class="container-fluid">
            <div class="row portfolio-slider-active arrow-style text-center">
                <div class="col-12">
                    <div class="xn-portfolio">
                        <div class="xn-portfolio-thumb grad-overlay">
                            <img src="img/portfolio/m-06.jpg" alt="">
                            <div class="port-view">
{{--                                <a class="popup-image" href="img/portfolio/m-01.jpg"><i class="far fa-search"></i></a>--}}
                                <a class="port-link" href="portfolio-single-1.html"><i class="far fa-link"></i></a>
                                <div></div>
                                <h3>FAINA Edu-Tech</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="xn-portfolio">
                        <div class="xn-portfolio-thumb grad-overlay">
                            <img src="img/portfolio/m-01.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-image" href="img/portfolio/m-01.jpg"><i class="far fa-search"></i></a>
                                <a class="port-link" href="{{route("fainaAgriculture")}}"><i class="far fa-link"></i></a>
                                <div></div>
                                <h3>Faina Agri-Tech</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="xn-portfolio">
                        <div class="xn-portfolio-thumb grad-overlay">
                            <img src="img/portfolio/m-02.jpg" alt="">
                            <div class="port-view">
                                <a class="popup-image" href="img/portfolio/m-02.jpg"><i class="far fa-search"></i></a>
                                <a class="port-link" href="portfolio-single-1.html"><i class="far fa-link"></i></a>
                                <div></div>
                                <h3>Faina for Social Change</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio-area end -->

@endsection
