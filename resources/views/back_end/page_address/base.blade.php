<div class="col-md-12 margin-25-0">
    <table class="custom-table-m table">
        <thead>
        <tr>
            <th width="20%">Address Type</th>
            <th width="20%">User</th>
            <th width="20%">Company</th>
            <th width="10%">Jobs</th>
            <th width="30%">Action</th>
        </tr>
        </thead>

        @foreach($addresses as $row)
            <tbody>
            <tr>
                <td colspan="4" class="page-header">
                    <button type="button" class="tbtn">
                        <i class="fa {{$row->id ==1 ?"fa-plus-circle fa-minus-circle":"fa-plus-circle"}}"></i>
                          {{$row->title_en}}
                    </button>
                </td>

                <td class="page-header">

                    <form class="row" method="POST"
                          action="{{ route('address.destroy', ['id' => $row->id]) }}"
                          onsubmit="return confirm('Do you want to delete?')" id="del-form-{{$row->id}}">
                        <input type="hidden" required name="_method" value="DELETE">
                        <input type="hidden" required name="_token" value="{{ csrf_token() }}">
                        <a href="{{ route('address.edit', ['id' => \App\Http\Controllers\MyUtility::my_encrypt($row->id,true)]) }}"
                           class="btn-xs"><span class="fa fa-edit"></span></a>
                        <a href="#none" onclick="submitDel({{$row->id}})" id="btn-delete" type="submit"
                           class="btn-xs"> <span
                                    class="fa fa-trash"></span></a>


                    </form>
                </td>
            </tr>
            <?php
            $rst = clone $users;
            $uss = $rst->where("pow", $row->id)->get();
            ?>
            @foreach($uss as $rw)
                <tr class="toggler {{$row->id ==1 ?"toggler1":""}}">
                    <td></td>
                    <td colspan="">
                        <a href="#">{{$rw->first_name}} {{$rw->last_name}}</a>
                    </td>
                    <td>
                        {{$rw->company}}
                    </td>
                    <td class="id-color">
                        {{$rw->jobs_count}}
                    </td>
                    <td></td>
                </tr>
            @endforeach

            </tbody>
        @endforeach
    </table>
    <div class="col-md-12 col-lg-12">
        {{$addresses->links()}}
        {{--<a href="{{ route('job.create') }}">Create New</a>--}}
    </div>
</div>