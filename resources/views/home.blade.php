@extends('layouts.master')
@section('head-tag')
    <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}">
    <title>News</title>
@endsection
{{-- main-body --}}
@section('content')
    <style>
        .rounded-fetcher-news {
            border-radius: .5rem !important
        }

        .fsize-30px {
            font-size: 30px !important;
        }

        .fsize-15px {
            font-size: 15px !important;
        }

        .fsize-20px {
            font-size: 20px !important;
        }

        .change-photo-size-online-min {
            width: 124px !important;
            height: 104px !important;
            transition: all linear 0.3s !important;
        }

        .change-photo-size-online-middle {
            width: 360px !important;
            height: 245px !important;
        }

        .change-photo-size-online-section-one {
            width: 770px !important;
            height: 650px !important;
        }

        .change-photo-size-online-section-two {
            width: 381px !important;
            height: 395px !important;
        }

        .change-photo-size-online-section-three {
            width: 381px !important;
            height: 222px !important;
        }

        .fcolor-blue {
            color: #068FFF !important;
        }

        .whats-right-cap .name-last-four-posts {
            color: #4E4FEB !important;
            font-size: 13px !important;
            font-weight: bold !important;
        }

        .whats-right-cap-last-four-posts {
            display: flex !important;
            flex-direction: column !important;
            align-content: center !important;
            justify-content: space-between !important;
            margin: 0.1rem 0 !important;
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

        .source-date-last-post {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        .source-date-last-post .date-last-post small {
            font-size: 18px !important;
            color: #707b8e !important;

        }

        .source-date-last-post .source-last-post small a {
            font-size: 18px !important;
            color: #707b8e !important;
            transition: all linear 0.2s !important;
        }

        .source-date-last-post .source-last-post small a:hover {
            color: #ff2143 !important;
        }

        .whats-right-cap .title-last-four-posts a:hover {
            color: #ff2143 !important;
        }

        .whats-right-cap .date-last-four-posts small {
            font-size: 13px !important;
        }

        .whats-right-cap .source-last-four-posts small a {
            font-size: 13px !important;
            color: #707b8e !important;
            transition: all linear 0.2s !important;
        }

        .whats-right-cap .source-last-four-posts small a:hover {
            color: #ff2143 !important;
        }

        .whats-right-cap .date-source-last-four-posts {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        .last-four-posts-parent:hover .change-photo-size-online-min {
            transform: scale(1.1) !important;
        }
    </style>
    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            @foreach ($trendingPostsSectionOne as $item)
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <img class="change-photo-size-online-section-one rounded-fetcher-news"
                                                src="{{ $item->thumbnail_path }}"
                                                alt="{{ ucfirst($item->category->name) }}" />
                                            <div class="trend-top-cap">
                                                <span class="bgr fsize-20px" data-animation="fadeInUp" data-delay=".2s"
                                                    data-duration="1000ms">{{ ucfirst($item->category->name) }}</span>
                                                <h2>
                                                    <a href="#" class="fsize-30px" data-animation="fadeInUp"
                                                        data-delay=".4s"
                                                        data-duration="1000ms">{{ ucfirst($item->title) }}</a>
                                                </h2>
                                                <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                    <i class="fas fa-clock fcolor-blue fsize-20px"></i>
                                                    <small class="fsize-20px">{{ $item->published_ago }}</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            @foreach ($trendingPostsSectionTwo as $item)
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="single-slider">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img class="change-photo-size-online-section-two rounded-fetcher-news"
                                                    src="{{ $item->thumbnail_path }}"
                                                    alt="{{ ucfirst($item->category->name) }}" />
                                                <div class="trend-top-cap trend-top-cap2">
                                                    <span class="bgg fsize-15px" data-animation="fadeInUp" data-delay=".2s"
                                                        data-duration="1000ms">{{ ucfirst($item->category->name) }}</span>
                                                    <h2>
                                                        <a href="#" class="fsize-15px" data-animation="fadeInUp"
                                                            data-delay=".4s"
                                                            data-duration="1000ms">{{ ucfirst($item->title) }}</a>
                                                    </h2>
                                                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                        <i class="fas fa-clock fcolor-blue fsize-15px"></i>
                                                        <small class="fsize-15px">{{ $item->published_ago }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="slider-active">
                            <!-- Single -->
                            @foreach ($trendingPostsSectionThree as $item)
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="single-slider">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img class="change-photo-size-online-section-three rounded-fetcher-news"
                                                    src="{{ $item->thumbnail_path }}"
                                                    alt="{{ ucfirst($item->category->name) }}" />
                                                <div class="trend-top-cap trend-top-cap2">
                                                    <span class="bgb fsize-15px" data-animation="fadeInUp" data-delay=".2s"
                                                        data-duration="1000ms">{{ ucfirst($item->category->name) }}</span>
                                                    <h2>
                                                        <a href="#" class="fsize-15px" data-animation="fadeInUp"
                                                            data-delay=".4s"
                                                            data-duration="1000ms">{{ ucfirst($item->title) }}</a>
                                                    </h2>
                                                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                        <i class="fas fa-clock fcolor-blue fsize-15px"></i>
                                                        <small class="fsize-15px">{{ $item->published_ago }}</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-4">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            @foreach ($categories as $item)
                                                <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab"
                                                    href="#nav-home" role="tab" aria-controls="nav-home"
                                                    aria-selected="true">{{ ucfirst($item->name) }}</a>
                                            @endforeach
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                        <img class="change-photo-size-online-middle"
                                                            src="{{ $lastetPost->thumbnail_path }}" alt="last-post" />
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="">{{ ucfirst($lastetPost->title) }}</a>
                                                        </h4>
                                                        <div class="source-date-last-post">
                                                            <p class="source-last-post">
                                                                <i class="fa fa-book fcolor-blue"></i>
                                                                <small><a
                                                                        href="{{ explode('_', $lastetPost->source)[1] }}"
                                                                        target="__blank">{{ strtoupper(explode('_', $lastetPost->source)[0]) }}</a></small>
                                                            </p>
                                                            <p class="date-last-post">
                                                                <i class="fas fa-clock fcolor-blue"></i>
                                                                <small>{{ $lastetPost->published_ago }}</small>
                                                            </p>
                                                        </div>
                                                        <p>
                                                            {{ ucfirst($lastetPost->summary) }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    @foreach ($posts as $item)
                                                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                            <div class="whats-right-single last-four-posts-parent mb-20">
                                                                <div class="whats-right-img">
                                                                    <img class="change-photo-size-online-min"
                                                                        src="{{ $item->thumbnail_path }}"
                                                                        alt="{{ ucfirst($item->category->name) }}" />
                                                                </div>
                                                                <div
                                                                    class="whats-right-cap whats-right-cap-last-four-posts">
                                                                    <div>
                                                                        <p class="name-last-four-posts">
                                                                            {{ ucfirst($item->category->name) }}
                                                                        </p>
                                                                        <p class="title-last-four-posts" style="">
                                                                            <a
                                                                                href="">{{ ucfirst($item->title) }}</a>
                                                                        </p>
                                                                    </div>
                                                                    <div class="date-source-last-four-posts">
                                                                        <p class="source-last-four-posts">
                                                                            <i class="fa fa-book fcolor-blue"></i>
                                                                            <small><a
                                                                                    href="{{ explode('_', $item['source'])[1] }}"
                                                                                    target="__blank">{{ strtoupper(explode('_', $item['source'])[0]) }}</a></small>
                                                                        </p>
                                                                        <p class="date-last-four-posts">
                                                                            <i class="fas fa-clock fcolor-blue"></i>
                                                                            <small>{{ $item->published_ago }}</small>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img2.png"
                                                            alt="" />
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="#">Secretart for
                                                                Economic Air plane
                                                                that looks like</a>
                                                        </h4>
                                                        <span>by Alice cloe - Jun 19,
                                                            2020</span>
                                                        <p>
                                                            Struggling to sell one
                                                            multi-million dollar
                                                            home currently on the
                                                            market won’t stop
                                                            actress and singer
                                                            Jennifer Lopez.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img4.png"
                                                            alt="" />
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="#">Secretart for
                                                                Economic Air plane
                                                                that looks like</a>
                                                        </h4>
                                                        <span>by Alice cloe - Jun 19,
                                                            2020</span>
                                                        <p>
                                                            Struggling to sell one
                                                            multi-million dollar
                                                            home currently on the
                                                            market won’t stop
                                                            actress and singer
                                                            Jennifer Lopez.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img2.png"
                                                            alt="" />
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="#">Secretart for
                                                                Economic Air plane
                                                                that looks like</a>
                                                        </h4>
                                                        <span>by Alice cloe - Jun 19,
                                                            2020</span>
                                                        <p>
                                                            Struggling to sell one
                                                            multi-million dollar
                                                            home currently on the
                                                            market won’t stop
                                                            actress and singer
                                                            Jennifer Lopez.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                        aria-labelledby="nav-Sports">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png"
                                                            alt="" />
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="#">Secretart for
                                                                Economic Air plane
                                                                that looks like</a>
                                                        </h4>
                                                        <span>by Alice cloe - Jun 19,
                                                            2020</span>
                                                        <p>
                                                            Struggling to sell one
                                                            multi-million dollar
                                                            home currently on the
                                                            market won’t stop
                                                            actress and singer
                                                            Jennifer Lopez.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="" />
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4>
                                                                    <a href="latest_news.html">Portrait of
                                                                        group of
                                                                        friends ting
                                                                        eat. market
                                                                        in.</a>
                                                                </h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
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
                    <!-- Banner -->
                    <div class="banner-one mt-20 mb-30">
                        <img src="assets/img/gallery/body_card1.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt="" /></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <!-- Section Tittle -->
                        <div class="small-tittle mb-20">
                            <h4>Most Recent</h4>
                        </div>
                        <!-- Details -->
                        <div class="most-recent mb-40">
                            <div class="most-recent-img">
                                <img src="assets/img/gallery/most_recent.png" alt="" />
                                <div class="most-recent-cap">
                                    <span class="bgbeg">Vogue</span>
                                    <h4>
                                        <a href="latest_news.html">What to Wear: 9+ Cute Work <br />
                                            Outfits to Wear This.</a>
                                    </h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <img src="assets/img/gallery/most_recent1.png" alt="" />
                            </div>
                            <div class="most-recent-capt">
                                <h4>
                                    <a href="latest_news.html">Scarlett’s disappointment at latest
                                        accolade</a>
                                </h4>
                                <p>Jhon | 2 hours ago</p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <img src="assets/img/gallery/most_recent2.png" alt="" />
                            </div>
                            <div class="most-recent-capt">
                                <h4>
                                    <a href="latest_news.html">Most Beautiful Things to Do in Sidney with
                                        Your BF</a>
                                </h4>
                                <p>Jhon | 3 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->
                    <div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src="assets/img/gallery/body_card2.png" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="slider-wrapper">
                            <!-- section Tittle -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="small-tittle mb-30">
                                        <h4>Most Popular</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly2-news-active d-flex">
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="assets/img/gallery/weeklyNews1.png" alt="" />
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4>
                                                    <a href="#">Scarlett’s disappointment
                                                        at latest accolade</a>
                                                </h4>
                                                <p>Jhon | 2 hours ago</p>
                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="assets/img/gallery/weeklyNews2.png" alt="" />
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4>
                                                    <a href="#">Scarlett’s disappointment
                                                        at latest accolade</a>
                                                </h4>
                                                <p>Jhon | 2 hours ago</p>
                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="assets/img/gallery/weeklyNews3.png" alt="" />
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4>
                                                    <a href="#">Scarlett’s disappointment
                                                        at latest accolade</a>
                                                </h4>
                                                <p>Jhon | 2 hours ago</p>
                                            </div>
                                        </div>
                                        <!-- Single -->
                                        <div class="weekly2-single">
                                            <div class="weekly2-img">
                                                <img src="assets/img/gallery/weeklyNews2.png" alt="" />
                                            </div>
                                            <div class="weekly2-caption">
                                                <h4>
                                                    <a href="#">Scarlett’s disappointment
                                                        at latest accolade</a>
                                                </h4>
                                                <p>Jhon | 2 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!--  Recent Articles start -->
    <div class="recent-articles pt-80 pb-80">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Trending News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="assets/img/gallery/tranding1.png" alt="" />
                                </div>
                                <div class="what-cap">
                                    <h4>
                                        <a href="#">
                                            <h4>
                                                <a href="latest_news.html">What to Expect From the 2020
                                                    Oscar Nomin ations</a>
                                            </h4>
                                        </a>
                                    </h4>
                                    <p>Jun 19, 2020</p>
                                    <a class="popup-video btn-icon"
                                        href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                            class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="assets/img/gallery/tranding2.png" alt="" />
                                </div>
                                <div class="what-cap">
                                    <h4>
                                        <a href="latest_news.html">What to Expect From the 2020 Oscar
                                            Nomin ations</a>
                                    </h4>
                                    <p>Jun 19, 2020</p>
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                            class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="assets/img/gallery/tranding1.png" alt="" />
                                </div>
                                <div class="what-cap">
                                    <h4>
                                        <a href="latest_news.html">
                                            <h4>
                                                <a href="latest_news.html">What to Expect From the 2020
                                                    Oscar Nomin ations</a>
                                            </h4>
                                        </a>
                                    </h4>
                                    <p>Jun 19, 2020</p>
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                            class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-recent">
                                <div class="what-img">
                                    <img src="assets/img/gallery/tranding2.png" alt="" />
                                </div>
                                <div class="what-cap">
                                    <h4>
                                        <a href="latest_news.html">What to Expect From the 2020 Oscar
                                            Nomin ations</a>
                                    </h4>
                                    <p>Jun 19, 2020</p>
                                    <a class="popup-video" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><span
                                            class="flaticon-play-button"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Recent Articles End -->
    <!-- Start Video Area -->
    <div class="youtube-area video-padding d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <video controls>
                                <source src="assets/video/news2.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="assets/video/news1.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="assets/video/news3.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="assets/video/news1.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="video-items text-center">
                            <video controls>
                                <source src="assets/video/news3.mp4" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-12">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <video controls>
                                    <source src="assets/video/news2.mp4" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Old Spondon News - 2020</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="assets/video/news1.mp4" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Banglades News Video</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="assets/video/news3.mp4" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Latest Video - 2020</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="assets/video/news1.mp4" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Spondon News -2019</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <video controls>
                                    <source src="assets/video/news3.mp4" type="video/mp4" />
                                    Your browser does not support the video tag.
                                </video>
                                <div class="video-intro">
                                    <h4>Latest Video - 2020</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Start Video area-->
    <!--   Weekly3-News start -->
    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="weekly3-news-active dot-style d-flex">
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="assets/img/gallery/weekly2News1.png" alt="" />
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4>
                                                    <a href="latest_news.html">What to Expect From the
                                                        2020 Oscar Nomin ations</a>
                                                </h4>
                                                <p>19 Jan 2020</p>
                                            </div>
                                        </div>
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="assets/img/gallery/weekly2News2.png" alt="" />
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4>
                                                    <a href="latest_news.html">What to Expect From the
                                                        2020 Oscar Nomin ations</a>
                                                </h4>
                                                <p>19 Jan 2020</p>
                                            </div>
                                        </div>
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="assets/img/gallery/weekly2News3.png" alt="" />
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4>
                                                    <a href="latest_news.html">What to Expect From the
                                                        2020 Oscar Nomin ations</a>
                                                </h4>
                                                <p>19 Jan 2020</p>
                                            </div>
                                        </div>
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="assets/img/gallery/weekly2News4.png" alt="" />
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4>
                                                    <a href="latest_news.html">What to Expect From the
                                                        2020 Oscar Nomin ations</a>
                                                </h4>
                                                <p>19 Jan 2020</p>
                                            </div>
                                        </div>
                                        <div class="weekly3-single">
                                            <div class="weekly3-img">
                                                <img src="assets/img/gallery/weekly2News2.png" alt="" />
                                            </div>
                                            <div class="weekly3-caption">
                                                <h4>
                                                    <a href="latest_news.html">What to Expect From the
                                                        2020 Oscar Nomin ations</a>
                                                </h4>
                                                <p>19 Jan 2020</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!-- banner-last Start -->
    <div class="banner-area gray-bg pt-90 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="banner-one">
                        <img src="assets/img/gallery/body_card3.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner-last End -->
@endsection
