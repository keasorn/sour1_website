<!-- Main jumbotron for a primary marketing message or call to action -->
<section class="main-banner">

    <div class="container border-shadow">
        <div class="margin-25-0">

            <form action="/so-manage/job/store" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div id="append-form">
                </div>
                <div class="create-form" id="create-form0">
                    @include("back_end.page_job.form")
                </div>

                {{--@include("back_end.page_job.form")--}}
                <div class="col-md-12 col-sm-12 col-lg-12 text-right">
                    <button type="button" class="myButton" onclick="addNewJobForm(this)">Add One More <span
                                class="fa fa-plus"></span></button>
                    <button type="submit" class="bntId-active">Save</button>
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
        $(document).ready(function () {
            $('.requirement').summernote({
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
            $('.note').summernote({
                placeholder: 'Type here ...',
                tabsize: 2,
                height: 100,
                name: "note", toolbar: [
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['para', ['ol', 'ul']],
                    ['insert', ['link']],

                ]
            });
            $('.duties').summernote({
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
    <script>
        var i = 0;
        function submitDel(id) {
            $("#del-form-" + id).submit();
        }
        function addNewJobForm(obj) {
            if (confirm("Do you to create one more job form?")) {
//            Ajax_UpdatePanel("/so-manage/add-more-job","","create-form",true);
//            $.get("/include_file/job-form.html", function (data) {
//                $("#create-form").append(data);
//            });
                $("#create-form" + i).clone().appendTo("#append-form");

                $("#create-form" + i).attr("id", "create-form" + (i + 1));
                $("#head_title" + i).attr("id", "head_title" + (i + 1));

                document.getElementById("label_add_del" + i).innerHTML = '<h5 class="text-black text-right clear-def col-md-4 col-xs-4 pointer btn-add-more-job" onclick="closeJobForm('+"'" + 'create-form' + (i + 1) +"'"+')">Close <span class="fa fa-minus" id="icon_add_del0"></span></h5>';
                $("#label_add_del" + i).attr("id", "label_add_del" + (i + 1))

                i++;
            }
        }
        function closeJobForm(id) {
            if (confirm("Do you to close job form?")) {
                $("#" + id).remove()
            }
        }
    </script>
@endsection

@section("css")
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
@endsection