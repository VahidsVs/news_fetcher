 <!-- Left Details Caption -->
 <div class="col-xl-6 col-lg-12 mr-0 pr-0">
     <div class="whats-news-single ml-0 mb-40 mb-40">
         <div class="whates-img">
             <img class="change-photo-size-online-middle rounded img-fluid" src="{{ $lastetPost->thumbnail_path }}"
                 alt="last-post" />
         </div>
         <div class="whates-caption">
             <h4>
                 <a href="">{{ ucfirst($lastetPost->title) }}</a>
             </h4>
             <div class="source-date-last-post">
                 <p class="source-last-post">
                     <i class="fas fa-clone fcolor-blue fsize-15px"></i>
                     <small><a class="fsize-15px" href="{{ explode('_', $lastetPost->source)[1] }}"
                             target="__blank">{{ ucfirst(strtolower(explode('_', $lastetPost->source)[0])) }}</a></small>
                 </p>
                 <p class="date-last-post">
                     <i class="fas fa-history fcolor-blue fsize-15px"></i>
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
                                 <a href="">{{ ucfirst($item->title) }}</a>
                             </p>
                         </div>
                         <div class="date-source-last-four-posts">
                             <p class="source-last-four-posts">
                                 <i class="fas fa-clone fcolor-blue"></i>
                                 <small><a href="{{ explode('_', $item['source'])[1] }}"
                                         target="__blank">{{ ucfirst(strtolower(explode('_', $item['source'])[0])) }}</a></small>
                             </p>
                             <p class="date-last-four-posts pt-2">
                                 <i class="fas fa-history fcolor-blue"></i>
                                 <small class="fsize-13px">{{ $item->published_ago }}</small>
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         @endforeach
     </div>
 </div>
