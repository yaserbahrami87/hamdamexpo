@component('master.index2')


    <div class="container mb-5">
        <div class="col-12 text-light text-justify rounded-lg p-3 border border-light " id="call_fa">
            <h3 class="font-weight-bold text-center">{{$festival->festival}}</h3>
            {!! $festival->description !!}
        </div>
    </div>
@endcomponent