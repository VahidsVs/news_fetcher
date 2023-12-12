@extends('layouts.master')
@section('head-tag')
    <title>{{$allPosts[0]->category->name }} News</title>
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

        .change-photo-size-all-posts {
            width: 100% !important;
            height: 245px !important;
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

        .show-all-post-text,
        .icon-right-arrow {
            transition: all linear .5s;
        }

        .show-all-post-text:hover p {
            color: #068FFF !important;
        }

        .show-all-post-text:hover .icon-right-arrow {
            transform: translateX(1rem) !important;
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

        .terending-title {
            transition: all .3s linear!important;
        }

        .terending-title:hover {
            color: #068FFF !important;
        }

        ::placeholder {
            color: #505050 !important;
        }

        .change-style-comment-form-box {
            outline: none !important;
            border: none !important;
            background-color: #ffffff !important;
            border-radius: .5rem !important;
            box-shadow: 2px 2px 5px 0 rgb(255, 33, 67, .5);
        }

        .change-style-comment-form-box:focus {
            outline: none !important;
            border: none !important;
            background-color: #ffffff !important;
            border-radius: .5rem !important;
            box-shadow: unset !important;
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
                                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            @foreach ($allPosts as $item)
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="whats-news-single mb-40 mb-40">
                                                        <div class="whates-img">
                                                            <img src="{{ $item->thumbnail_path }}"
                                                                class="img-rounded img-fluid change-photo-size-all-posts"
                                                                alt="{{ $item->category->name }}">
                                                        </div>
                                                        <div class="whates-caption whates-caption2">
                                                            <h4><a
                                                                    href="{{ route('home.post-details', $item->id) }}">{{ ucfirst($item->title) }}</a>
                                                            </h4>
                                                            <div class="d-flex">
                                                                <span class="d-flex justify-content-start align-items-center">
                                                                    <span class="fa fa-user fcolor-blue fsize-15px"></span>
                                                                    <span
                                                                        class="fsize-15px ml-1">{{ $item->user->username }}</span>
                                                                </span>
                                                                <div class="mx-2 text-secondary">|</div>
                                                                <span class="d-flex align-items-center">
                                                                    <span
                                                                        class="fa fa-comment fcolor-blue fsize-15px"></span>
                                                                    <span
                                                                        class="fsize-15px ml-1">{{ $item->publishedComments->count() }}</span>
                                                                </span>
                                                                <div class="mx-2 text-secondary">|</div>
                                                                <span class="d-flex align-items-center">
                                                                    <span
                                                                        class="fa fa-thumbs-up fcolor-blue fsize-15px"></span>
                                                                    <span class="fsize-15px ml-1">{{ $item->likes }}</span>
                                                                </span>
                                                                <div class="mx-2 text-secondary">|</div>
                                                                <span class="d-flex align-items-center">
                                                                    <span
                                                                        class="fa fa-history fcolor-blue fsize-15px"></span>
                                                                    <span
                                                                        class="fsize-15px ml-1">{{ $item->published_ago }}</span>
                                                                </span>
                                                            </div>
                                                            <p class="text-secondary fsize-15px">{{ ucfirst($item->summary) }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
                    <div class="single-follow bgcolor-gray mb-45 mt-3 mt-lg-0 p-0">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fa fa-facebook icon-facebook"></i>
                                    </a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>FaceBook</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fa fa-twitter-square icon-twitter"></i>
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
                                        <i class="fa fa-instagram icon-instagram"></i>
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
                                        <i class="fa fa-youtube icon-youtube"></i>
                                    </a>
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
                        <img src="{{ asset('assets/img/news/news_card.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
    <!--Start pagination -->
    <div class="pagination-area gray-bg pb-45">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap">
                        <span class="">{{ $allPosts->links() }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
@endsection
