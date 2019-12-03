<div class="row">
    <h4 class="text-black text-left clear-def col-md-8 col-xs-8" id="head_title0">Job Vacancy Detail span</h4>
    <div id="label_add_del0">
        <h5 class="text-black text-right clear-def col-md-4 col-xs-4 pointer btn-add-more-job"
            ></h5>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-8 col-sm-12 col-lg-8 text-left">
        <label for="title_en">Job Title</label>
        <input type="text" class="form-control border-right radius-right-10" required name="title[]"
               id="title"
               placeholder="Enter">
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
        <label for="title_jp">Number Vacancies</label>
        <input type="number" class="form-control border-right radius-right-10" required
               name="number_vacancies[]"
               id="number_vacancies"
               placeholder="Enter">
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
        <label for="job_type">Job Type</label>
        <select class="form-control border-right radius-right-10" data-show-icon="true" required
                name="job_type[]"
                id="job_type">
            <option value="">SELECT</option>
            @foreach($jobTypes as $row)
                <option value="{{$row->id}}">{{$row->title_en}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
        <label for="title_ch">Job Level</label>
        <select class="form-control border-right radius-right-10" data-show-icon="true" required
                name="job_level[]"
                id="job_level">
            <option value="">SELECT</option>
            @foreach($jobLevels as $row)
                <option value="{{$row->id}}">{{$row->title_en}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
        <label for="title_ch">Place of Work</label>
        <select class="form-control border-right radius-right-10" data-show-icon="true" id="pow" required
                name="pow[]">
            <option value="">SELECT</option>
            @foreach($pows as $row)
                <option value="{{$row->id}}">{{$row->title_en}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
        <label for="title_jp">Salary</label>
        <input type="text" class="form-control border-right radius-right-10" required name="salary[]"
               id="salary"
               placeholder="eg. xxx$ - xxx$">
    </div>
    <div class="col-md-4 col-sm-12 col-lg-4 text-left">
        <label for="title_jp">Closing Date</label>
        <input type="date" class="form-control border-right radius-right-10" required name="closing_date[]"
               id="closing_date"
               placeholder="Enter">
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
        <label for="title_jp">Duties</label>

        <textarea class="form-control border-right radius-right-10 duties" id="duties" required
                  name="duties[]"></textarea>

    </div>
    <div class="col-md-12 col-sm-12 col-lg-12 text-left">
        <label for="title_jp">Requirement</label>

        <textarea class="form-control border-right radius-right-10 requirement" id="requirement" required
                  name="requirement[]"></textarea>
    </div>
</div>