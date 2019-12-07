<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="main-banner" style="background:#242c36 url(/assets/img/slider-01.jpg) no-repeat">

    <div class="container border-shadow">
        <div class="margin-25-0">
            <h4>CREATE FORM</h4>
            <form action="{{route('my-account.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-8 col-sm-12 col-lg-8 text-left">
                    <label for="title_en">Job Title</label>
                    <input type="text" class="form-control border-right radius-right-10" required name="title" id="title"
                           placeholder="Enter">
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    <label for="title_jp">Number Vacancies</label>
                    <input type="number" class="form-control border-right radius-right-10" required name="number_vacancies"
                           id="number_vacancies"
                           placeholder="Enter">
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    <label for="company_type">Job Type</label>
                    <select class="form-control border-right radius-right-10" data-show-icon="true" required name="company_type"
                            id="company_type">
                        <option>SELECT</option>
                        @foreach($companyTypes as $row)
                            <option value="{{$row->id}}">{{$row->title_en}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    <label for="title_ch">Job Level</label>
                    <select class="form-control border-right radius-right-10" data-show-icon="true" required name="company_level"
                            id="company_level">
                        <option>SELECT</option>
                        @foreach($companyLevels as $row)
                            <option value="{{$row->id}}">{{$row->title_en}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    <label for="title_ch">Place of Work</label>
                    <select class="form-control border-right radius-right-10" data-show-icon="true" id="pow" required name="pow">
                        <option>SELECT</option>
                        @foreach($pows as $row)
                            <option value="{{$row->id}}">{{$row->title_en}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    <label for="title_jp">Salary</label>
                    <input type="number" class="form-control border-right radius-right-10" required name="salary" id="salary"
                           placeholder="Enter">
                </div>
                <div class="col-md-4 col-sm-12 col-lg-4 text-left">
                    <label for="title_jp">Closing Date</label>
                    <input type="date" class="form-control border-right radius-right-10" required name="closing_date"
                           id="closing_date"
                           placeholder="Enter">
                </div>

                <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                    <label for="title_jp">Duties</label>

                    <textarea class="form-control border-right radius-right-10" id="duties" required name="duties">N/A</textarea>

                </div>
                <div class="col-md-12 col-sm-12 col-lg-12 text-left">
                    <label for="title_jp">Requirement</label>

                    <textarea class="form-control border-right radius-right-10" id="requirement" required name="requirement"></textarea>

                </div> 
                <div class="col-md-12 col-sm-12 col-lg-12 text-right">
                    <button type="submit" class="myButton">Save</button>
                    <br>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
    <div id="testimonial-slider"></div>
</section>

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
    <script>
        function submitDel(id) {
            $("#del-form-"+id).submit();
        }
    </script>
@endsection

@section("css")
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
@endsection