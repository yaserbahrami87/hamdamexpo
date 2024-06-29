@component('admin.master.index')


    <div class="col-12 table-responsive">
        <table class="table table-striped table-bordered text-center">
            <tr>
                <th>نام جشنواره</th>
                <th>تاریخ شروع</th>
                <th>ویرایش</th>
            </tr>
            @foreach($festivals as $festival)
                <tr>
                    <td>{{$festival->festival}}</td>
                    <td>{{$festival->start_date}}</td>

                    <td>
                        <a href="{{route('admin.festival.edit',['festival'=>$festival->festival])}}" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                            <i class="material-icons">edit</i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endcomponent
