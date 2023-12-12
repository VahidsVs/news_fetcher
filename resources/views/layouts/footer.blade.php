<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}"
                                            alt="footer-picture"></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info2">MegaTechNews  &copy; is an automated Newspress powered by MegaTech &copy; presents most recent news from multiple sources</p>
                                        <p class="info2">Weiz, Austria</p>
                                        <p class="info2">Email: admin@megatechapp.at</p>
                                        <p class="info2">Phone: +43 664 99657071</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Popular posts</h4>
                            </div>
                            <!-- Popular post -->
                            @foreach ($postsMostLikedFooter as $item)
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <img class="change-photo-size-online-popular-post img-rounded" src="{{ $item->thumbnail_path }}" alt="most-liked">
                                </div>
                                <div class="whats-right-cap">
                                    <h4><a href="{{ route('home.post-details', $item->id) }}">{{ ucfirst($item->title) }}</a></h4>
                                    <p>{{$item->post_source}} | {{ $item->published_ago }}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- Popular post -->

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="banner">
                                <img src="{{ asset('assets/img/gallery/body_card4.png') }}" alt="footer-picture">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy; {{date('Y')}} <a href="https://megatech.at"
                                    target="_blank">MegaTech</a> All rights reserved.  
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
