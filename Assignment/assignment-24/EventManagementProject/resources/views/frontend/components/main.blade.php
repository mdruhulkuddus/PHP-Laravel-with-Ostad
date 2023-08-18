<div class="mainheading">
    {{--    <img src="{{ asset('frontendAssets/assets/img/slider-5.png') }}" alt="slider">--}}
    <img src="{{ asset('frontendAssets/assets/img/slider-4.jpg') }}" alt="slider" style="width: 100%; height: 300px">
</div>
<!-- End Site Title
================================================== -->

<!-- Begin Featured
================================================== -->
<section class="featured-posts">
    <div class="section-title">
        <h2><span>Recent</span></h2>
    </div>

    <div class="card-columns listfeaturedtag">

        @foreach( $events as $event)
            <!-- begin post -->
            <div class="card">
                <div class="row">
                    <div class="col-md-5 wrapthumbnail">
                        <a href="">
                            <div class="thumbnail">
                                @if($event->name === "Seminar")
                                    <img class="img-fluid" src="{{ asset('frontendAssets/assets/img/event-con.jpg') }}" alt="img"
                                         style="height: 100%; width: 100%">
                                @else
                                    <img class="img-fluid" src="{{ asset('frontendAssets/assets/img/event-4.jpg') }}" alt="img"
                                         style="height: 100%; width: 100%">
                                @endif
                            </div>
                        </a>
                    </div>
                    <div class="col-md-7">
                        <div class="card-block">
                            <h2 class="card-title"><a href="">{{ $event->title }}</a></h2>
                            <h4 class="card-text">{{ substr($event->description, 0, 100) }} .....</h4>
                            <div class="metafooter">
                                <div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href=""><img class="author-thumb"
                                                           src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                           alt="Sal"></a>
								</span>
                                    <span class="author-meta">
								<span class="post-name"><a href="">{{ $event->firstName ." ". $event->lastName }}</a></span><br/>
								<i class="fa fa-calendar"></i>
						            <span class="post-date">{{ $event->date }}</span>
                                    <span class="dot"></span><i
                                            class="fa fa-clock"></i> <span class="post-read"> {{ $event->time }}</span>
								</span>
                                    <span class="post-read-more"><a href="" title="Read Story"><svg
                                                class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path
                                                    d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                                    fill-rule="evenodd"></path></svg></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end post -->
        @endforeach

    </div>
</section>
<!-- End Featured
================================================== -->

<!-- Begin List Posts
================================================== -->
<section class="recent-posts">
    <div class="section-title">
        <h2><span>All Events</span></h2>
    </div>
    <div class="card-columns listrecent">

        @foreach( $events as $event)
            <!-- begin post -->
            <div class="card">
                <a href="">
                    @if($event->name === "Seminar")
                        <img class="img-fluid" src="{{ asset('frontendAssets/assets/img/event-con.jpg') }}" alt="img"
                             style="height: 200px; width: 100%">
                    @else
                        <img class="img-fluid" src="{{ asset('frontendAssets/assets/img/event-4.jpg') }}" alt="img"
                             style="height: 200px; width: 100%">
                    @endif
                </a>
                <div class="card-block">
                    <h2 class="card-title"><a href="">{{ $event->title }} </a></h2>
                    <h4 class="card-text">{{ substr($event->description, 0, 100) }} .... </h4>
                    <div class="metafooter">
                        <div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href=""><img class="author-thumb"
                                                   src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x"
                                                   alt="Sal"></a>
						</span>
                            <span class="author-meta">
						<span class="post-name"><a href="">Ruhul</a></span><br/>
                            <i class="fa fa-calendar"></i>
						<span class="post-date">{{ $event->date }}</span><span class="dot"></span> <i
                                    class="fa fa-clock"></i> <span class="post-read"> {{ $event->time }}</span>
						</span>
                            <span class="post-read-more"><a href="" title="Read Story"><svg class="svgIcon-use"
                                                                                                     width="25"
                                                                                                     height="25"
                                                                                                     viewbox="0 0 25 25"><path
                                            d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z"
                                            fill-rule="evenodd"></path></svg></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end post -->
        @endforeach


    </div>
</section>
<!-- End List Posts
================================================== -->
