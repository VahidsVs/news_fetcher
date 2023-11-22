 <!-- Left Details Caption -->
 <div class="col-xl-6 col-lg-12">
     <div class="whats-news-single mb-40 mb-40">
         <div class="whates-img">
             <img class="change-photo-size-online-middle" src="{{ $lastetPost->thumbnail_path }}" alt="last-post" />
         </div>
         <div class="whates-caption">
             <h4>
                 <a href="">{{ ucfirst($lastetPost->title) }}</a>
             </h4>
             <div class="source-date-last-post">
                 <p class="source-last-post">
                     <i class="fa fa-book fcolor-blue"></i>
                     <small><a href="{{ explode('_', $lastetPost->source)[1] }}"
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
                         <img class="change-photo-size-online-min" src="{{ $item->thumbnail_path }}"
                             alt="{{ ucfirst($item->category->name) }}" />
                     </div>
                     <div class="whats-right-cap whats-right-cap-last-four-posts">
                         <div>
                             <p class="name-last-four-posts">
                                 {{ ucfirst($item->category->name) }}
                             </p>
                             <p class="title-last-four-posts" style="">
                                 <a href="">{{ ucfirst($item->title) }}</a>
                             </p>
                         </div>
                         <div class="date-source-last-four-posts">
                             <p class="source-last-four-posts">
                                 <i class="fa fa-book fcolor-blue"></i>
                                 <small><a href="{{ explode('_', $item['source'])[1] }}"
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
