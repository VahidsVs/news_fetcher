@extends('layouts.master')
@section('head-tag')
    <title>all posts</title>
@endsection
{{-- main-body --}}
@section('content')
    <style>
        .cursor-fetcher-news {
            cursor: pointer;
        }

        .font-family-news-fetcher {
            font-family: "Roboto", sans-serif !important;
            letter-spacing: 0.01rem !important;
        }

        .fsize-25px {
            font-size: 25px !important;
        }

        .fsize-15px {
            font-size: 15px !important;
        }

        .fsize-13px {
            font-size: 13px !important;
        }

        .fsize-20px {
            font-size: 20px !important;
        }

        .change-photo-size-online-min {
            width: 124px !important;
            height: 120px !important;
            transition: all linear 0.3s !important;
        }

        .change-photo-size-online-middle {
            width: 100% !important;
            height: auto !important;
        }

        .change-photo-size-online-section-one {
            width: 100% !important;
            height: 705px !important;
        }

        .change-photo-size-post-interior {
            width: 100% !important;
            height: 400px !important;
        }

        @media (max-width: 767px) {
            .change-photo-size-online-section-one {
                width: 100% !important;
                height: 20% !important;
            }

            .f-15px-min-size {
                font-size: 15px !important;
            }
        }

        .change-photo-size-online-section-two {
            width: 381px !important;
            height: 395px !important;
        }

        .change-photo-size-online-section-three {
            width: 381px !important;
            height: 222px !important;
        }

        .change-photo-size-online-popular-post {
            width: 85px !important;
            height: 79px !important;
        }

        .fcolor-707b8e {
            color: #707b8e !important;
        }

        .fcolor-blue {
            color: #068FFF !important;
        }

        .bgcolor-red {
            background-color: #f4796c !important;
        }

        .bgcolor-gray {
            background-color: #f4f4f4 !important;
        }

        .bgcolor-E9ECEF {
            background-color: #E9ECEF !important;
        }

        .fcolor-white {
            color: #ffffff !important;
        }

        .fcolor-FF0000 {
            color: #FF0000 !important;
        }

        .icon-facebook {
            color: #4167B2 !important;
            font-size: 30px !important;
        }

        .icon-twitter {
            color: #1DA1F1 !important;
            font-size: 30px !important;
        }

        .icon-youtube {
            color: #FF0000 !important;
            font-size: 30px !important
        }

        .icon-instagram {
            color: #FD1D1D;
            font-size: 30px !important
        }

        .border-3px-red {
            border: 3px solid #FE2142;
        }

        .posts-content-error {
            margin: 0 auto !important;
            font-weight: 700 !important;
            font-size: 30px;
        }

        .whats-right-cap .title-last-four-posts {
            margin-top: 0.5rem !important;
            margin-bottom: 0.8rem !important;
        }

        .whats-right-cap .title-last-four-posts a {
            font-size: 13px !important;
            color: #000000 !important;
            font-family: "Roboto", sans-serif !important;
            letter-spacing: 0.01rem !important;
            transition: all color 0.2s !important;
        }

        .source-last-post small a {
            color: #707b8e !important;
            transition: all linear 0.2s !important;
        }

        .source-last-post small a:hover {
            color: #ff2143 !important;
        }

        .whats-right-cap .title-last-four-posts a:hover {
            color: #ff2143 !important;
        }

        .whats-right-cap .source-last-four-posts small a {
            font-size: 13px !important;
            color: #707b8e !important;
            transition: all linear 0.2s !important;
        }

        .whats-right-cap .source-last-four-posts small a:hover {
            color: #ff2143 !important;
        }

        .last-four-posts-parent:hover .change-photo-size-online-min {
            transform: scale(.9) !important;
        }
    </style>
    <!-- About US Start -->
    <div class="about-area2 gray-bg pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="whats-news-wrapper">
                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details2.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details3.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details6.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details6.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details3.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details3.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details6.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details6.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details2.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details2.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                        aria-labelledby="nav-Sports">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details2.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details3.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details4.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details5.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details6.png"
                                                            alt="">
                                                    </div>
                                                    <div class="whates-caption whates-caption2">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on the
                                                            market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="assets/img/news/news_card.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
    <!--Start pagination -->
    <div class="pagination-area  gray-bg pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(221, 221, 221)"
                                                d="M8.142,13.118 L6.973,14.135 L0.127,7.646 L0.127,6.623 L6.973,0.132 L8.087,1.153 L2.683,6.413 L23.309,6.413 L23.309,7.856 L2.683,7.856 L8.142,13.118 Z" />
                                        </svg>
                                        </span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">
                                        <!-- SVG iocn -->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="40px" height="15px">
                                            <path fill-rule="evenodd" fill="rgb(255, 11, 11)"
                                                d="M31.112,13.118 L32.281,14.136 L39.127,7.646 L39.127,6.624 L32.281,0.132 L31.167,1.154 L36.571,6.413 L0.491,6.413 L0.491,7.857 L36.571,7.857 L31.112,13.118 Z" />
                                        </svg>
                                        </span></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
@endsection
