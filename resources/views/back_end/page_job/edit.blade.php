@extends('layouts.admin-template')
@section('content')
    <!-- Main content -->
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <section class="main-banner" style="background:#242c36 url(/assets/img/slider-01.jpg) no-repeat">

        <div class="container border-shadow">
            <div class="margin-25-0">
                <h4>EDIT FORM</h4>
                <form action="/so-manage/job/{{$job->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                    <div class="col-md-8 col-sm-12 col-lg-8 text-left">
                        <label for="title_en">Job Title</label>
                        <input type="text" class="form-control border-right radius-right-10" required name="title" id="title"
                               placeholder="Enter" value="{{$job->title}}">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="title_jp">Number Vacancies</label>
                        <input type="number" class="form-control border-right radius-right-10" required name="number_vacancies"
                               id="number_vacancies"
                               placeholder="Enter" value="{{$job->number_vacancies}}">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="job_type">Job Type</label>
                        <select class="form-control border-right radius-right-10" data-show-icon="true" required name="job_type"
                                id="job_type">
                            <option>SELECT</option>
                            @foreach($jobTypes as $row)
                                <option value="{{$row->id}}" {{\App\Http\Controllers\MyUtility::selectOption($row->id,$job->job_type)}}>{{$row->title_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="title_ch">Job Level</label>
                        <select class="form-control border-right radius-right-10" data-show-icon="true" required name="job_level"
                                id="job_level">
                            <option>SELECT</option>
                            @foreach($jobLevels as $row)
                                <option value="{{$row->id}}" {{\App\Http\Controllers\MyUtility::selectOption($row->id,$job->job_level)}}>{{$row->title_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="title_ch">Place of Work</label>
                        <select class="form-control border-right radius-right-10" data-show-icon="true" id="pow" required name="pow">
                            <option>SELECT</option>
                            @foreach($pows as $row)
                                <option value="{{$row->id}}" {{\App\Http\Controllers\MyUtility::selectOption($row->id,$job->pow)}}>{{$row->title_en}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="title_jp">Salary</label>
                        <input type="text" class="form-control border-right radius-right-10" required name="salary" id="salary"
                               placeholder="Enter" value="{{$job->salary}}">
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                        <label for="title_jp">Closing Date</label>
                        <input type="date" class="form-control border-right radius-right-10"  required name="closing_date"
                               id="closing_date"
                               placeholder="Enter" value="{{$job->closing_date}}">
                    </div>

                    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                        <label for="title_jp">Duties</label>

                        <textarea class="form-control border-right radius-right-10" id="duties" required name="duties">{{$job->duties}}</textarea>

                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                        <label for="title_jp">Requirement</label>
                        <textarea class="form-control border-right radius-right-10" id="requirement" required name="requirement">{{$job->requirement}}</textarea>

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
        $(document).ready(function() {
            $('#requirement').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name:"requirement",
                toolbar: [
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'para', [ 'ol', 'ul' ] ],
                    [ 'insert', [ 'link'] ],
                ]
            });
            $('#note').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name:"note",  toolbar: [
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'para', [ 'ol', 'ul' ] ],
                    [ 'insert', [ 'link'] ],

                ]
            });
            $('#duties').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name:"duties",
                toolbar: [
                    [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
                    [ 'para', [ 'ol', 'ul' ] ],
                    [ 'insert', [ 'link'] ],
                ]
            });
        });
    </script>

@endsection

@section("css")
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
@endsection