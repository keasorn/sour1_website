<!------ Include the above in your HEAD tag ---------->
<div class="padding-10-0">
    <div class="spe-cor">
        <div class="container">
            <br>
            <h3 class="text-center">OUR<b> PARTNERS</b></h3>
            <div id="spe-cor-partner" class="carousel carousel-partner slide">
                <div class="carousel-inner">
                    @for($i=1;$i<10;$i++)
                        <div class="item {{$i==1?'active':''}}">
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <div class="thumbnail row">
                                    <img class="img-responsive  img-gray"
                                         src="/assets/img/icons/accounting.png" alt="">

                                </div>
                            </div>
                        </div>
                    @endfor

                </div>

                <br>
            </div>
            <!-- End Carousel -->
        </div>
    </div>
</div>