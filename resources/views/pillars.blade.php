@component('master.index2')
@slot('headerScript')
    <link href="/slick/slick.css" rel="stylesheet" />
    <link href="/slick/slick-theme.css" rel="stylesheet" />
    <style>
        .position_slick_referee
        {
            border:2px solid #8e9092;
            border-radius:30px;
        }

        .description_slick_referee
        {
            border:2px solid #8e9092;
            min-height: 150px;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
@endslot


    <div class="container-fluid mb-5" id="pillars">
        <div class="row">
            <div class="col-8 col-md-2 mx-auto rounded-circle mb-5" id="pillars_title" >
                <!-- <img src="/images/first-festival.png" class="img-fluid" /> -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($festival->pillars as $pillar)
                    <div class="col-12 col-md-6 position-relative p-3">
                        <img src="/images/pillars/{{'thumbnail_'.$pillar->image}}" width="150px" height="150px"/>
                        <p class="name_referee position-relative">{{$pillar->fname.' '.$pillar->lname}}</p>
                        <p class="position_referee position-relative pt-3">{{$pillar->position}}</p>
                        <div class="info_referee position-relative text-light text-justify">
                            {!! $pillar->biography !!}
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


@slot('footerScript')
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/slick/slick.js"></script>
    <script>
        $('.news_item').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            rtl:true,
            speed:1000,
            autoplay:true,
            arrows:true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>
@endslot

@endcomponent
