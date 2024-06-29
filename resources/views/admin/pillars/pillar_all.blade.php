@component('admin.master.index')

@slot('headerScript')
<link href="/admin/plugins/datatables/datatables.min.css" rel="stylesheet" />
@endslot

    <div class="col-12">
        <a href="{{route('admin.pillar.create')}}" class="btn btn-primary">اضافه کردن رکن</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered table-striped text-center" id="table_example">
            <thead>
                <tr>
                    <th>#</th>
                    <th></th>
                    <th>مشخصات</th>
                    <th>سمت</th>
                    <th>نام جشنواره</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
            </thead>


            <tbody>
            @foreach($pillars as $pillar)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <img src="/images/pillars/{{$pillar->image}}" width="50px" height="50px" />
                </td>
                <td>{{$pillar->fname.' '.$pillar->lname}}</td>
                <td>{{$pillar->position}}</td>

                <td>{{($pillar->festival->festival)}}</td>
                <td>
                    <a href="{{route('admin.pillar.edit',['pillar'=>$pillar->id])}}" class="btn btn-warning">
                        <i class="material-icons">edit</i>
                    </a>
                </td>
                <td>
                    <form method="post" action="{{route('admin.pillar.delete',['pillar'=>$pillar->id])}}" onsubmit="return window.confirm('آیا از حذف رکن اطمینان دارید؟')">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button class="btn btn-danger" type="submit">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach

            </tbody>

        </table>
    </div>


@slot('footerScript')
    <script src="/admin/plugins/datatables/datatables.min.js"></script>

    <script>
        $(function () {

            $('#table_example').DataTable({
                "language": {
                    "paginate": {
                        "next": "بعدی",
                        "previous" : "قبلی"
                    }
                },
                "info" : false,
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "autoWidth": false
            });
        });
    </script>
@endslot
@endcomponent
