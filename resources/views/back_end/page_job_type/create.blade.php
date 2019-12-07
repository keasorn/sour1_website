<h4>Create Form</h4>
<div class="row">
<form action="{{route('job-type.store')}}"  method="POST" enctype="multipart/form-data" >
{{ csrf_field() }}
    <div class="col-md-12 col-sm-12 col-lg-12">
    <label for="title_en">JobType English</label>
    <input type="text" class="form-control border-right radius-right-10" name="title_en" required id="title_en" placeholder="eg. Admin">
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12">
    <label for="title_jp">JobType Japan</label>
    <input type="text" class="form-control border-right radius-right-10" name="title_jp" required id="title_jp" placeholder="eg. Admin">
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12">
    <label for="title_ch">JobType Chinese</label>
    <input type="text" class="form-control border-right radius-right-10" name="title_ch" required id="title_ch" placeholder="eg. Admin">
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12">
    <button type="submit" class="myButton">Save</button>
    </div>
</form>

</div>