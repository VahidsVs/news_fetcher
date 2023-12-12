 <!-- Left Details Caption -->
 <div class="col-xl-6 col-lg-12 mr-0 pr-0">
    <div class="whats-news-single ml-0 mb-40 mb-40">
        <div class="whates-img">
            <img class="change-photo-size-online-middle rounded img-fluid" src="{{ $lastetPost->thumbnail_path }}"
                alt="last-post" />
        </div>
        <div class="whates-caption">
            <h4>
                <a href="{{ route('home.post-details', $lastetPost->id) }}">{{ ucfirst($lastetPost->title) }}</a>
            </h4>
            <div class="d-flex justify-content-between align-content-center">
                <p class="source-last-post">
                    <i class="fa fa-clone fcolor-blue fsize-15px"></i>
                    <small><a class="fsize-15px" href="{{ explode('_', $lastetPost->source)[1] }}"
                            target="__blank"> {{$item->post_source}} </a></small>
                </p>
                <p class="date-last-post">
                    <i class="fa fa-history fcolor-blue fsize-15px"></i>
                    <small class="fsize-15px fcolor-707b8e">{{ $lastetPost->published_ago }}</small>
                </p>
            </div>
            <p>
                {{ ucfirst($lastetPost->summary) }}
            </p>
        </div>
    </div>
</div>
<!-- Right single caption -->
<div class="col-xl-6 col-lg-12 ml-0 pl-0">
    <div class="row">
        <!-- single -->
        @foreach ($posts as $item)
            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                <div class="whats-right-single last-four-posts-parent mb-20 d-flex">
                    <div class="whats-right-img">
                        <img class="change-photo-size-online-min img-rounded mr-2 mr-sm-0" src="{{ $item->thumbnail_path }}"
                            alt="{{ ucfirst($item->category->name) }}" />
                    </div>
                    <div class="whats-right-cap my-1 d-flex flex-column justify-content-between align-content-center">
                        <div>
                            <p class="name-last-four-posts">
                                <span class="bgcolor-red px-2 py-1 mb-0 fcolor-white rounded font-family-news-fetcher">
                                    {{ strtoupper($item->category->name) }}
                                </span>
                            </p>
                            <p class="title-last-four-posts">
                                <a href="{{ route('home.post-details', $item->id) }}">{{ ucfirst($item->title) }}</a>
                            </p>
                        </div>
                        <div class="date-source-last-four-posts">
                            <p class="source-last-four-posts">
                                <i class="fa fa-clone fcolor-blue fsize-13px"></i>
                                <small><a href="{{ explode('_', $item['source'])[1] }}"
                                        target="__blank">{{$item->post_source }}</a></small>
                            </p>
                            <p class="date-last-four-posts pt-2">
                                <i class="fa fa-history fcolor-blue fsize-13px"></i>
                                <small class="fsize-13px">{{ $item->published_ago }}</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
            <div>
                <a href="{{ route('home.all-posts', $posts[1]->category->id) }}" class="d-flex align-content-center show-all-post-text">
                    <p class="font-weight-bold fsize-13px">View All {{ ucfirst($posts[1]->category->name) }} News</p>
                    <span class="fa fa-long-arrow-right fcolor-blue fsize-25px mt-1 ml-2 icon-right-arrow"></span>
                </a>
            </div>
        </div>
    </div>
</div>
