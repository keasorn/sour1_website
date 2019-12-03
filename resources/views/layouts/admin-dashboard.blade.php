<section class="membercard dark">
    <div class="container">

            @for($i=0;$i<9;$i++)
                <div class="col-md-4 col-sm-4">
                    <div class="left-widget-sidebar">
                        <div class="card-widget bg-white user-card">
                            <div class="u-img-jobs img-cover"
                                 style="background-image: url(img/bg-1.jpg);background-size:cover;"></div>
                            <div class="u-content">
                                <div class="avatar box-80">
                                    <img class="img-responsive  img-70 shadow-white" src="/assets/img/logo/smart.jpg"
                                         alt="">
                                    <i class="fa fa-circle-o fa-green"></i>
                                </div>
                                <p class="text-pink">2 DAYS AGO</p>
                                <h5>UX/ Designer</h5>
                                <p class="text-muted">Evato Element ltd.</p>
                                <div class="text-center">
                                    <button type="button" class="myButton btn-danger"><a href="#">APPLY</a></button>
                                </div>
                            </div>
                            <div class="user-social-profile">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-8"><span aria-hidden="true"
                                                                                  class="icon-map-pin icon-grid-jobs"></span>
                                        <p class="text-grid-jobs">TOUL KOK, PHNOM PENH</p></div>
                                    <div class="col-md-4 col-sm-4 col-xs-4"><span aria-hidden="true"
                                                                                  class="icon-clock icon-grid-jobs"></span>
                                        <p class="text-grid-jobs">FULL TIME</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
        <div class="text-center">
            <button type="button" class="myButton"><a href="#">VIEW ALL OPEN JOBS</a></button>
        </div>

    </div>
</section>
