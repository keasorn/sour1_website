<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="main-banner" style="background:#242c36 url(/assets/img/slider-01.jpg) no-repeat">
    <div class="container">
        <div class="caption">
            <h3>FIND YOUR <B> DREAM</B> JOB</h3>
            <form>
                <fieldset>
                    <div class="col-md-4 col-sm-4 no-pad">
                        <input type="text" class="form-control border-right radius-left-10"
                               placeholder="eg. WEB DESIGNER"/>
                    </div>
                    <div class="col-md-3 col-sm-3 no-pad">
                        <select class="selectpicker border-right" data-show-icon="true">
                            <option>ALL CATEGORY</option>
                            <option>0 Year</option>
                            <option>1 Year</option>
                            <option>2 Year</option>
                            <option>3 Year</option>
                            <option>4 Year</option>
                            <option>5 Year</option>
                            <option>6 Year</option>
                            <option>7 Year</option>
                            <option>8 Year</option>
                            <option>9 Year</option>
                            <option>10 Year</option>
                        </select>

                    </div>
                    <div class="col-md-3 col-sm-3 no-pad">
                        <select class="selectpicker">
                            <option>ANYWHERE</option>
                            <option>Accounf & Finance</option>
                            <option>Information & Technology</option>
                            <option>Marketing</option>
                            <option>Food & Restaurent</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-2 no-pad">
                        <input type="submit" class="btn seub-btn  radius-right-10 grad4" value="SEARCH JOB"/>
                    </div>
                </fieldset>
            </form>
            <br>
            <div class="row">
                <h5 class="text-muted"><span class="text-pink"> 196 </span> new jobs in the last <span
                            class="text-pink">6</span> days</h5>
            </div>
            <br> <br> <br>
            <div class="row-fluid">
                @for($i=1;$i<5;$i++)
                    <div class="col-md-3 col-sm-3">
                        <div class="left-widget-sidebar mgt-cont-hover">
                            <a href="#none" class="text-d-none">
                                <div class="user-card">
                                    <div class="u-content">
                                        <h3 aria-hidden="true" class="icon-briefcase text-pink"></h3>
                                        <h5 class="clear-def">REMOTE</h5>
                                        <h1 class="clear-def">200</h1>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>
