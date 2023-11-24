@extends('layouts.master')
@section('head-tag')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/grid.css') }}"> --}}
    <title>News</title>
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

        .fcolor-white {
            color: #ffffff !important;
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

        .source-date-last-post {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        .source-date-last-post .source-last-post small a {
            color: #707b8e !important;
            transition: all linear 0.2s !important;
        }

        .source-date-last-post .source-last-post small a:hover {
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
                            @foreach ($postsSection1 as $item)
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img">
                                            <img class="change-photo-size-online-section-one img-rounded img-fluid"
                                                src="{{ $item->thumbnail_path }}"
                                                alt="{{ ucfirst($item->category->name) }}" />
                                            <div class="trend-top-cap">
                                                <span class="bgcolor-red fsize-20px" data-animation="fadeInUp" data-delay=".2s"
                                                    data-duration="1000ms">{{ ucfirst($item->category->name) }}</span>
                                                <h2>
                                                    <a href="#" class="fsize-25px" data-animation="fadeInUp"
                                                        data-delay=".4s"
                                                        data-duration="1000ms">{{ ucfirst($item->title) }}</a>
                                                </h2>
                                                <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                    <i class="fas fa-history fcolor-blue fsize-20px"></i>
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
                            @foreach ($postsSection2 as $item)
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="single-slider">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img class="change-photo-size-online-section-two img-rounded img-fluid"
                                                    src="{{ $item->thumbnail_path }}"
                                                    alt="{{ ucfirst($item->category->name) }}" />
                                                <div class="trend-top-cap trend-top-cap2">
                                                    <span class="bgcolor-red fsize-15px" data-animation="fadeInUp" data-delay=".2s"
                                                        data-duration="1000ms">{{ ucfirst($item->category->name) }}</span>
                                                    <h2>
                                                        <a href="#" class="fsize-15px" data-animation="fadeInUp"
                                                            data-delay=".4s"
                                                            data-duration="1000ms">{{ ucfirst($item->title) }}</a>
                                                    </h2>
                                                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                        <i class="fas fa-history fcolor-blue fsize-15px"></i>
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
                            @foreach ($postsSection3 as $item)
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <div class="single-slider">
                                        <div class="trending-top mb-30">
                                            <div class="trend-top-img">
                                                <img class="change-photo-size-online-section-three img-rounded img-fluid"
                                                    src="{{ $item->thumbnail_path }}"
                                                    alt="{{ ucfirst($item->category->name) }}" />
                                                <div class="trend-top-cap trend-top-cap2">
                                                    <span class="bgcolor-red fsize-15px" data-animation="fadeInUp" data-delay=".2s"
                                                        data-duration="1000ms">{{ ucfirst($item->category->name) }}</span>
                                                    <h2>
                                                        <a href="#" class="fsize-15px" data-animation="fadeInUp"
                                                            data-delay=".4s"
                                                            data-duration="1000ms">{{ ucfirst($item->title) }}</a>
                                                    </h2>
                                                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                        <i class="fas fa-history fcolor-blue fsize-15px"></i>
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
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="whats-news-wrapper px-md-0 pt-0">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-12">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                    <div class="ml-2">
                                        <hr class="mt-0 mb-0">
                                        <hr class="mt-0 mb-0 w-25 border-3px-red rounded">
                                        <hr class="mt-0">
                                    </div>
                                </div>
                            </div>
                            {{-- categories menu --}}
                            <div class="col-xl-12">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs categories-list mb-0 d-flex justify-content-start"
                                            id="nav-tab" role="tablist">
                                            @foreach ($categories as $item)
                                                <a onclick="getPostsByCategory({{ $item->id }})"
                                                    class="nav-item nav-link cursor-fetcher-news font-family-news-fetcher"
                                                    id="nav-home-tab" data-toggle="tab" role="tab"
                                                    aria-controls="nav-home"
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
                                        <div class="row posts-content">
                                            @includeIf('whats-new-post.post-only')
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
                <div class="col-lg-4 gray-bg py-3 rounded">
                    <!-- Flow Socail -->
                    <div class="single-follow bgcolor-gray mb-45 p-0">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fab fa-facebook icon-facebook"></i>
                                    </a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fab fa-twitter-square icon-twitter"></i>
                                    </a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fab fa-instagram icon-instagram"></i>
                                    </a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fab fa-youtube icon-youtube"></i>
                                    </a>
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
                            <h4>Most Popular</h4>
                            <div>
                                <hr class="mt-0 mb-0">
                                <hr class="mt-0 mb-0 w-25 border-3px-red rounded">
                                <hr class="mt-0">
                            </div>
                        </div>
                        <!-- Single -->
                        @foreach ($popularPosts as $item)
                            <div class="most-recent-single">
                                <div class="most-recent-images">
                                    <img class="change-photo-size-online-popular-post img-rounded"
                                        src="{{ $item->thumbnail_path }}" alt="Most-Popular" />
                                </div>
                                <div class="most-recent-capt">
                                    <h4>
                                        <a href="#"
                                            class="fsize-13px font-family-news-fetcher">{{ ucfirst($item->title) }}</a>
                                    </h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p>
                                            <i class="fas fa-thumbs-up fcolor-blue fsize-13px"></i>
                                            <small class="fsize-13px">455</small>
                                        </p>
                                        <p>
                                            <i class="fas fa-history fcolor-blue fsize-13px"></i>
                                            <small class="fsize-13px">{{ $item->published_ago }}</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!-- Weekly2-News start -->
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
    <!--   Weekly3-News start -->
    <div class="weekly3-news-area gray-bg pt-80 pb-130">
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
    <div class="banner-area pt-90 pb-90">
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
{{-- script specific this page --}}
