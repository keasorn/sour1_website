<section class="companys">
    <div class="container">
        <div class="row heading">
            <h2>All Jobs Posted</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
        </div>
        <div class="companies">
            @foreach($companys as $row)
                <div class="col-md-4 col-sm-4">
                    <div class="company-list">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="company-logo">
                                    <img src="/assets/img/google.png" class="img-responsive" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-10">
                                <div class="company-content">
                                    <h5>{{$row->title}}</h5>
                                    <p><span class="company-name"><i class="fa fa-briefcase"></i>Google</span></p>
                                    <p>
                                        <span
                                                class="company-location"><i class="fa fa-map-marker"></i> New York, United States</span>
                                    </p>
                                    <p><span
                                                class="package"><i class="fa fa-money"></i>${{$row->salary}}</span></p>

                                    <p><span
                                                class="package"><i
                                                    class="fa fa-calendar"></i>{{$row->closing_date}}</span></p>

                                    <form class="row" method="POST"
                                          action="{{ route('my-account.destroy', ['id' => $row->id]) }}"
                                          onsubmit="return confirm('Do you want to delete?')" id="del-form-{{$row->id}}">
                                        <input type="hidden" required name="_method" value="DELETE">
                                        <input type="hidden" required name="_token" value="{{ csrf_token() }}">
                                        <a href="{{ route('my-account.edit', ['id' => \App\Http\Controllers\MyUtility::my_encrypt($row->id,true)]) }}"
                                           class="btn-info btn-id"><span class="fa fa-edit"></span></a>
                                        <a href="#none" onclick="submitDel({{$row->id}})" id="btn-delete" type="submit" class="btn-danger btn-id"> <span
                                                    class="fa fa-trash"></span></a>
                                        <a class="btn-primary btn-id"
                                           href="/so-manage/company/{{\App\Http\Controllers\MyUtility::my_encrypt($row->id,true)}}"><span
                                                    class="fa fa-eye"></span></a>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-12 col-lg-12">
            {{$companys->links()}}
            {{--<a href="{{ route('my-account.create') }}">Create New</a>--}}
        </div>
    </div>
</section>