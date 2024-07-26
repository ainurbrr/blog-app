@extends('layouts.main')


@section('container')
    {{-- <h1>About Us</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle"> --}}
    <div class="about-section-2 pb-150 pb-lg-120 pb-md-80 pb-xs-50 mt-4">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 mb-lg-50 mb-md-50 mb-xs-50">
                    <div class="about-img-wrapper-2">
                        <div class="about-main-img">
                            <img src="/img/user/about/about-2.jpg" alt="main img" class="img-fluid">
                            <img class="main-bg-shape" src="/img/user/shape/half-round-3.png" alt="shape">
                        </div>
                        <div class="about-img-2 d-none d-xl-inline-block" data-aos="zoom-in"
                            data-aos-delay="200">
                            <img src="/img/user/logo/loader.png" alt="thumb" class="img-fluid" style="width: 216px; height: 217px;">
                        </div>
                        <div class="shape-4 d-none d-xl-inline-block">
                            <img src="/img/user/shape/half-round-2.svg" alt="shape">
                        </div>
                        <div class="shape-5">
                            <img src="/img/user/shape/horn-2.svg" alt="shape">
                        </div>
                        <div class="bubble-1 d-none d-xl-inline-block"></div>
                        <div class="bubble-2 d-none d-xl-inline-block"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-2" data-aos="fade-left" data-aos-delay="200">
                        <div class="sub-title">
                            <p>About Us</p>
                        </div>
                        <div class="title">
                            <h2>
                                We Provide Best Blog
                                Article For Share Any Information
                            </h2>
                        </div>
                        <div class="description">
                            <p>
                                Welcome to our blog! We are dedicated to delivering high-quality, insightful articles on a wide range of topics. Our goal is to share valuable information and create a platform for knowledge exchange. Thank you for being a part of our community!
                            </p>
                        </div>
                        <div class="about-box-wrap">
                            <div class="about-box">
                                <div class="icon">
                                    <a href="#">
                                        <i class="fa-solid fa-shield-check"></i>
                                    </a>
                                </div>
                                <h3 class="title">
                                    Find New Insight
                                </h3>
                                <div class="text">
                                    <p>
                                        Online Article Form Every Where
                                    </p>
                                </div>
                            </div>
                            <div class="about-box">
                                <div class="icon">
                                    <a href="#">
                                        <i class="fa-solid fa-star"></i>
                                    </a>
                                </div>
                                <h3 class="title">Grow Your Knowledge</h3>
                                <div class="text">
                                    <p>
                                        Online Article Quickly
                                        From Anywhere
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="theme-btn">
                            <a href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-section-3 pb-90 pb-xs-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 text-lg-start text-center mb-md-50 mb-xs-50">
                    <div class="testimonial-thumb-3" data-aos="fade-right" data-aos-delay="200">
                        <div class="thumb">
                            <img src="/img/user/testimonial/about-2.jpg" alt="thumb">
                        </div>
                        <div class="shape-2">
                            <img src="/img/user/testimonial/t-shape-1.png" alt="shape">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="swiper testimonial-slider-active-3">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide single-slide">
                                <div class="testimonial-content-3">
                                    <div class="icon">
                                        <img src="/img/user/icon/Vector.png" alt="icon">
                                    </div>
                                    <div class="text">
                                        <p>As a regular reader, I appreciate the diversity of topics covered on this blog. The writing style is easy to follow, and the information is always accurate and up-to-date. Keep up the great work!</p>
                                    </div>
                                    <div class="name">
                                        <h3>Jane Smith</h3>
                                    </div>
                                    <div class="info">
                                        <p>General Manager & CEO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide single-slide">
                                <div class="testimonial-content-3">
                                    <div class="icon">
                                        <img src="/img/user/icon/Vector.png" alt="icon">
                                    </div>
                                    <div class="text">
                                        <p>I stumbled upon this blog while searching for reliable information on various topics, and I haven't looked back since. The articles are well-researched, insightful, and engaging. Highly recommend!</p>
                                    </div>
                                    <div class="name">
                                        <h3>Emily Davis</h3>
                                    </div>
                                    <div class="info">
                                        <p>General Manager & CEO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide single-slide">
                                <div class="testimonial-content-3">
                                    <div class="icon">
                                        <img src="/img/user/icon/Vector.png" alt="icon">
                                    </div>
                                    <div class="text">
                                        <p>This blog is a treasure trove of knowledge. Whether it's technology, lifestyle, or health, there's always something new and interesting to read. Kudos to the team for maintaining such high standards.</p>
                                    </div>
                                    <div class="name">
                                        <h3>Jane Smith</h3>
                                    </div>
                                    <div class="info">
                                        <p>General Manager & CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
@endsection
