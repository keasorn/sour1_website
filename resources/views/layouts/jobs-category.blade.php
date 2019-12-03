<!------ Include the above in your HEAD tag ---------->

    <div class="spe-cor padding-25-0">
        <div class="container">

            <div id="spe-cor" class="carousel carousel-correspondence slide">
                <ul class="nav nav-tabs home-tabs" role="tablist">
                    <li class="title font-strong">
                        <a href="http://news.sabay.com.kh/topics/entertainment" class="bntId-active">
                            Life & Work
                            <div class="corner"></div>
                        </a>
                    </li>
                </ul>
                <div class="carousel-inner">
                    @for($i=1;$i<10;$i++)
                        <div class="item {{$i==1?'active':''}}">

                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="thumbnail row shift-bg-color">
                                    <div class="left-widget-sidebar">
                                        <div class="card-widget bg-white user-card padding-0">
                                            <div class="u-img-news img-cover"
                                                 style="background-image: url(assets/img/abcd.jpg);background-size:cover;"></div>
                                            <div class="u-content">

                                                <div class="col-md-12 h-120">
                                                    <h6 class="clear-def text-left">Inventory & Logistics Officer Inventory & Logistics Officer</h6>
                                                    <p class="text-muted  text-left">Inventory & Logistics Officer,Inventory & Logistics Officer,Inventory & Logistics Officer,Inventory & Logistics Officer</p>
                                                </div>
                                                <div class="col-md-12 margin-25-0">
                                                    <div class="text-left">
                                                        <a href="/job/qHCdEL9EXbRHcKNxcjsSF7P8">
                                                            <button type="button" class="bntId">Read More
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
                <div class="text-center">
                    <a class="carousel-left" href="#spe-cor" data-slide="prev"><i
                                class="fa fa-chevron-left"></i></a>
                    <a class="carousel-right" href="#spe-cor" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>

                <br>
                <div class="col-md-12 col-lg-12 text-center">
                    <a href="/all_jobs"><button class="bntId-active">VIEW ALL POSTS</button></a>

                </div>
            </div>
            <!-- End Carousel -->
        </div>
    </div>