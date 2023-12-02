@extends('layouts.master')
@section('head-tag')
    <title>Post Interior</title>
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

        .fcolor-FF0000 {
            color: #FF0000 !important;
        }

        .bgcolor-red {
            background-color: #f4796c !important;
        }

        .bgcolor-gray {
            background-color: #f4f4f4 !important;
        }

        .bgcolor-f9f9f9 {
            background-color: #f9f9f9 !important;
        }

        .bgcolor-E9ECEF {
            background-color: #E9ECEF !important;
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
            transform: scale(1.1) !important;
        }

        /* ======================== Post Interior ======================== */
        . .change-photo-size-post-interior {
            width: 750px !important;
            height: 400px !important;
        }

        .likeBtn,
        .disLikeBtn {
            transition: all linear .2s;
        }

        .likeBtn:active,
        .disLikeBtn:active {
            transform: scale(1.5)
        }

        .swal-wide {
            width: 30px !important;
        }
    </style>
    <!-- About US Start -->
    <div class="about-area2 gray-bg pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Home</li>
                                    <li class="breadcrumb-item active">Post Interior</li>
                                    <li class="breadcrumb-item active">{{ ucfirst($post->category->name) }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="about-img">
                            <img src="{{ $post->thumbnail_path }}" class="change-photo-size-post-interior img-fluid rounded"
                                alt="post-image">
                        </div>
                        <div>
                            <h3 class="pt-3 fcolor-FF0000 font-weight-bold">{{ strtoupper($post->category->name) }}</h3>
                        </div>
                        <div class="heading-news mb-30 pt-30 py-1">
                            <h4 class="font-weight-bold">{{ ucfirst($post->title) }}</h4>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p>
                                <i class="far fa-user-circle fcolor-blue fsize-20px"></i>
                                <small class="fsize-20px fcolor-707b8e">{{ $post->user->username }}</small>
                            </p>
                            <p>
                                <i class="fas fa-history fcolor-blue fsize-20px"></i>
                                <small class="fsize-20px fcolor-707b8e">{{ $post->published_ago }}</small>
                            </p>
                        </div>
                        <div class="about-prea text-justify bgcolor-f9f9f9 p-2 rounded">
                            <p class="fsize-15px mb-25">{{ ucfirst($post->body) }}</p>
                        </div>
                        <div class="bgcolor-E9ECEF rounded my-3 p-3">
                            <span class="d-flex justify-content-between align-items-center">
                                <span class="font-weight-bold fsize-20px">You Like This Post?</span>
                                <div>
                                    <button onclick="likeBtn({{ $post->id }})" id="likeBtn"
                                        data-url="{{ route('post-details.like', $post->id) }}"
                                        class="border-0 cursor-fetcher-news bgcolor-E9ECEF">
                                        <i class="far fa-heart text-dark border-0 fsize-20px likeBtn bgcolor-E9ECEF"></i>
                                    </button>
                                    <button onclick="disLikeBtn({{ $post->id }})" id="disLikeBtn"
                                        data-url="{{ route('post-details.unlike', $post->id) }}"
                                        class="d-none cursor-fetcher-news border-0 bgcolor-E9ECEF">
                                        <i
                                            class="fas fa-heart fcolor-FF0000 fsize-20px border-0 disLikeBtn bgcolor-E9ECEF"></i>
                                    </button>
                                </div>
                            </span>
                        </div>
                    </div>
                    <!-- From -->
                    <div class="row d-none">
                        <div class="col-lg-12">
                            <form class="form-contact contact_form mb-80" action="contact_process.php" method="post"
                                id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9"
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="name" id="name" type="text"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control error" name="email" id="email" type="email"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control error" name="subject" id="subject" type="text"
                                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                                placeholder="Enter Subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit"
                                        class="button button-contactForm boxed-btn boxed-btn2">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- sidebar --}}
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#">
                                        <i class="fab fa-facebook icon-facebook"></i>
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
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="{{ asset('assets/img/news/news_card.jpg') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About US End -->
@endsection
@section('script')
    <script>
        function removeAllClass() {
            $('#likeBtn').removeClass('d-none');
            $('#likeBtn').removeClass('d-inline-block');
            $('#disLikeBtn').removeClass('d-none');
            $('#disLikeBtn').removeClass('d-inline-block');
        }

        function likeBtn(id) {
            var url = $('#likeBtn').attr('data-url');
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    if (response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Successful',
                            text: 'Successfully registered',
                            timer: 3000,
                            confirmButtonText: 'Ok'
                        })
                        removeAllClass();
                        $('#likeBtn').addClass('d-none');
                        $('#disLikeBtn').addClass('d-inline-block');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'error!',
                            text: 'Communication was not established',
                            timer: 3000,
                            confirmButtonText: 'Ok'
                        })
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'error!',
                        text: 'Communication was not established',
                        timer: 3000,
                        confirmButtonText: 'Ok'
                    })
                }
            });
        }

        function disLikeBtn() {
            var url = $('#disLikeBtn').attr('data-url');
            $.ajax({
                type: "GET",
                url: url,
                success: function(response) {
                    if (response.status) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Successful',
                            text: 'Successfully registered',
                            timer: 3000,
                            confirmButtonText: 'Ok'
                        })
                        removeAllClass();
                        $('#likeBtn').addClass('d-inline-block');
                        $('#disLikeBtn').addClass('d-none');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'error!',
                            text: 'Communication was not established',
                            timer: 3000,
                            confirmButtonText: 'Ok'
                        })
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'error!',
                        text: 'Communication was not established',
                        timer: 3000,
                        confirmButtonText: 'Ok'
                    })
                }
            });
        }
    </script>
@endsection
{{-- script specific this page --}}
