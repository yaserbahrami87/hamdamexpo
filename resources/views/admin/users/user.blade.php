@component('admin.master.index')


<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3>{{$user->fname.' '.$user->lname}}</h3>
            <form method="post" action="{{route('admin.user.login',['user'=>$user->id])}}" onsubmit="return window.confirm('آیا از ورود با اکانت کاربر اطمینان دارید؟')">
                {{csrf_field()}}
                <button type="post" class="btn btn-primary">ورود با اکانت کاربر</button>
            </form>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($user->competitions->where('festival_id','=',$festival->id) as $competition)

                    <div class="col-12 col-md-3">

                        <div class="card" >
                            <img src="/competition/{{$festival->id}}/{{$competition->image}}" class="card-img-top" alt="..." height="160px">
                            <div class="card-body">
                                <p>توضیحات: <b class="card-text">{{$competition->description}}</b></p>

                            </div>
                            <div class="card-footer">
                                <a href="/competition/{{$competition->festival_id}}/{{$competition->image}}" class="btn btn-primary btn-sm   " target="_blank">
                                    مشاهده
                                </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endcomponent
