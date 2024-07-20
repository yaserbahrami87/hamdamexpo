@component('admin.master.index')

@slot('headerScript')

    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap4.css" rel="stylesheet" />
@endslot



    <div class="col-12 col-md-3">

        <!--
        <form method="post" action="/admin/">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            </div>
        </form>
        -->
    </div>
    <div class="col-12 table-responsive">
        <div class="card">
            <div class="card-header">
                <h3>لیست اعضا</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-hover table-striped " id="dataTable">
                    <thead>

                        <th>مشخصات</th>
                        <th>ایمیل</th>
                        <th>تلفن</th>
                        <th>تاریخ ثبت نام</th>
                        <th>تعداد عکس ارسالی</th>
                        <th>مشاهده</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td>
                                <a href="{{route('admin.user.show',['user'=>$user->id])}}" >
                                        {{$user->fname.' '.$user->lname}}
                                </a>
                            </td>
                            <td dir="ltr">{{$user->email}}</td>
                            <td dir="ltr">
                                <a href="tel:{{$user->tel}}">{{$user->tel}}</a>

                            </td>
                            <td class="text-center">{{$user->created_at}}</td>
                            <td class="text-center">{{$user->competitions->where('festival_id','=',$festival->id)->count()}}</td>

                            <td>
                                <a href="{{route('admin.user.show',['user'=>$user->id])}}" class="btn btn-warning">
                                    <i class="material-icons">visibility</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>


@slot('footerScript')
    <script src="/dashboard/plugins/dataTables1/jQuery-3.6.0/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap4.js"></script>
    <script src="/dashboard/plugins/dataTables1/vfs_fonts.js"></script>

    <script src="/dashboard/plugins/dataTables1/buttons.html5.min.js"></script>
    <script src="/dashboard/plugins/dataTables1/buttons.print.min.js"></script>







    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({

                dom: 'Bfrltip',
                buttons: [
                    'copy',  'excel'
                ],
                'order':[[6,'desc']],
            });
        });
    </script>
@endslot
@endcomponent
