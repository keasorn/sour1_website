@extends('layouts.admin-template')
@section('content')
    <!-- Main content -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="main-banner" style="background:#242c36 url(/assets/img/slider-01.jpg) no-repeat">

        <div class="container border-shadow">
            <div class="margin-25-0">
                <form action="{{ route('my-account.update', ['id' => $company->id]) }}" method="POST"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3 class="text-left">Contact Person</h3>
                    <hr>
                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="cp_first_name">First Name</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="cp_first_name" id="cp_first_name"
                               placeholder="Enter" value="{{$company->cp_first_name}}">
                    </div>

                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="cp_last_name">Last Name</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="cp_last_name" id="cp_last_name"
                               placeholder="Enter" value="{{$company->cp_last_name}}">
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                        <label for="cp_position">Current Position</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="cp_position" id="cp_position"
                               placeholder="Enter" value="{{$company->cp_position}}">
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="cp_phone">Phone Number *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="cp_phone" id="cp_phone"
                               placeholder="Enter" value="{{$company->cp_phone}}">
                    </div>


                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="cp_email">Email *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="cp_email" id="cp_email"
                               placeholder="Enter" value="{{$company->cp_email}}">
                    </div>


                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="title_jp">Nationality *</label>
                        <input type="text" class="form-control  border-right radius-right-10" required name="cp_nation"
                               id="cp_nation"
                               placeholder="Enter" value="{{$company->cp_nation}}">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="company_type">Gender *</label><br>
                        <div class="form-control">
                            @foreach($genders as $row)
                                <input type="radio" class="border-right radius-right-10" required name="cp_gender"
                                       id="cp_gender"
                                       placeholder="Enter" value="{{$row->id}}"> {{$row->title_en}}
                            @endforeach
                        </div>

                    </div>

                    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                        <label for="cp_address">Current Address</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="cp_address" id="cp_address"
                               placeholder="Enter" value="{{$company->cp_address}}">
                    </div>
                    <h3 class="text-left">Employer Profile</h3>
                    <hr>
                    <div class="col-md-12 col-sm-12 col-lg-10 text-left">
                        <label for="cp_first_name">Comapany / Organization Name *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="com_name" id="com_name"
                               placeholder="Enter" value="{{$company->com_name}}">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-2 text-left">
                        <label for="title_ch">Company Type</label>
                        <select class="form-control border-right radius-right-10" data-show-icon="true" required
                                name="com_type"
                                id="com_type">
                            <option>SELECT</option>
                            @foreach($companyTypes as $row)
                                <option value="{{$row->id}}" {{\App\Http\Controllers\MyUtility::selectOption($row->id,$company->com_type)}}>{{$row->title_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                        <label for="com_address">Current Address *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="com_address" id="com_address"
                               placeholder="Enter" value="{{$company->com_address}}">
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="com_tel">Office Phone Number *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="com_tel" id="com_tel"
                               placeholder="Enter" value="{{$company->com_tel}}">
                    </div>


                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="com_phone">Mobile Phone Number  *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="com_phone" id="com_phone"
                               placeholder="Enter" value="{{$company->com_phone}}">
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="com_email">Email *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="com_email" id="com_email"
                               placeholder="Enter" value="{{$company->com_email}}">
                    </div>


                    <div class="col-md-6 col-sm-12 col-lg-6 text-left">
                        <label for="com_web">Website  *</label>
                        <input type="text" class="form-control border-right radius-right-10" required
                               name="com_web" id="com_web"
                               placeholder="Enter" value="{{$company->com_web}}">
                    </div>

                    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                        <label for="title_jp">Summary about your company / Organization *</label>

                        <textarea class="form-control border-right radius-right-10" id="com_description" required name="com_description">{{$company->com_description}}</textarea>

                    </div>

                    <div class="col-md-12 col-sm-12 col-lg-12 text-right">

                        <button type="submit" class="myButton">Update</button>
                        <br>
                        <br>
                        <br>
                    </div>

                </form>
            </div>
        </div>
    </section>

@endsection
@section("js")
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function () {
            $('#requirement').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name: "requirement",
                toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['para', ['ol', 'ul']],
                    ['insert', ['link']],
                ]
            });
            $('#note').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name: "note", toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['para', ['ol', 'ul']],
                    ['insert', ['link']],

                ]
            });
            $('#duties').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name: "duties",
                toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['para', ['ol', 'ul']],
                    ['insert', ['link']],
                ]
            });
        });
    </script>

@endsection

@section("css")
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
@endsection