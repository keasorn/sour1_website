<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<div class="padding-10-0">
    <div class="spe-cor">
        <div class="container">
            <br>
            <h3 class="text-center">JOBS BY <b> CATEGORY</b></h3>
            <div id="spe-cor" class="carousel carousel-correspondence slide">
                <div class="carousel-inner">
                    @for($i=1;$i<10;$i++)


                        <div class="item {{$i==1?'active':''}}">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="thumbnail row">
                                    <div class="left-widget-sidebar">
                                        <div class="card-widget bg-white user-card">
                                            <div class="u-img-category img-cover"
                                                 style="background-image: url(img/icons/accounting.png);background-size:cover;"></div>
                                            <div class="u-content">
                                                <div class="avatar box-80">
                                                    <img class="img-responsive img-70 shadow-white  {{$i==3?'':'img-gray'}}"
                                                         src="/assets/img/icons/accounting.png" alt="">
                                                    <i class="fa fa-circle-o fa-green"></i>
                                                </div>
                                                <h6 class="clear-def">ACCOUNTING{{$i}}</h6>
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
            </div>
            <!-- End Carousel -->
        </div>
    </div>
</div>