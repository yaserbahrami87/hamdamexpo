@component('master.index2')
@slot('headerScript')
    <link href="/slick/slick.css" rel="stylesheet" />
    <link href="/slick/slick-theme.css" rel="stylesheet" />
@endslot

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-3">
                <img src="/images/news.png" class="img-fluid " />
            </div>
            <div class="col-12 text-center mb-3">
                <img src="/images/news/{{$news->image}}" class="w-50" />
            </div>
            <div class="col-12  mb-5 " id="news">
                <div class="card p-5" id="news_single">
                    <h1 class="text-center">{{$news->title}}</h1>
                    {!! $news->content !!}
                </div>
            </div>
        </div>
    </div>


@endcomponent
