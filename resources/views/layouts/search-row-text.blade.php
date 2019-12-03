<div class="row">
  @php
    $index = 0;
  @endphp
  @foreach ($items as $key=>$item)
    <div class="col-md-6">
      <div class="form-group">
          @php
            $stringFormat =  strtolower(str_replace(' ', '', $item));

              $key =  strtolower(str_replace(' ', '', $key));
          @endphp
          <label for="input<?=$stringFormat?>" class="col-sm-4 control-label">{{$item}}</label>
          <div class="col-sm-12">
            <input value="{{isset($oldVals) ? $oldVals[$index] : ''}}" type="text" class="form-control" name="<?=$key?>" id="<?=$key?>" placeholder="{{$item}}">
          </div>
      </div>
    </div>
  @php
    $index++;
  @endphp
  @endforeach
</div>