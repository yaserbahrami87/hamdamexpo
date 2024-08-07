@component('admin.master.index')

@slot('headerScript')
    <style>
        .main .img-responsive {
            margin-bottom: 30px;
        }
    </style>
@endslot


    <div class="col-12 card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="/competition/{{$festival->id}}/{{$competition->image}}" alt="" width="100%" class="img-responsive center-block">
                    </div>
                    <div class="row col-sm-6">
                        <div class="col-sm-6">
                            <img src="/competition/{{$festival->id}}/{{$competition->image2}}" alt="" class="img-responsive" width="100%">
                        </div>
                        <div class="col-sm-6">
                            @if(is_null($competition->image3))
                                <img src="http://placehold.it/300x205" alt="" class="img-responsive" width="100%" >
                            @else
                                <img src="http://placehold.it/300x205" alt="" class="img-responsive" width="100%" >
                            @endif
                        </div>
                        <div class="col-sm-6">
                            @if(is_null($competition->image4))
                                <img src="http://placehold.it/300x205" alt="" class="img-responsive" width="100%" >
                            @else
                                <img src="http://placehold.it/300x205" alt="" class="img-responsive" width="100%" >
                            @endif
                        </div>
                        <div class="col-sm-6">
                            @if(is_null($competition->image5))
                                <img src="http://placehold.it/300x205" alt="" class="img-responsive" width="100%" >
                            @else
                                <img src="http://placehold.it/300x205" alt="" class="img-responsive" width="100%" >
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card-footer">

                <p>
                    <span class="font-weight-bold">ارسال کننده: </span>{{$competition->user->fname.' '.$competition->user->lname}}
                </p>
                <p>
                    <span class="font-weight-bold">عنوان اثر: </span>{{$competition->title}}
                </p>


                <p>
                    <span class="font-weight-bold">توضیحات: </span>{{$competition->description}}
                </p>

        </div>
    </div>
@endcomponent
