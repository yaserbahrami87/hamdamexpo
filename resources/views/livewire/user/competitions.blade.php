<div class="col-12">
    <div class="row">
        <div class="col-12 col-md-3">
            <div class="card" >
                <div class="card-body">
                    @if($competitions->where('festival_id',$festival->id)->count()>=8)
                        <div class="alert alert-warning">
                            شما حداکثر تعداد برای شرکت در جشنواره را ارسال کرده اید
                        </div>
                    @else

                        <form wire:submit.prevent="save">
                            <div class="form-group">
                                <label for="name">نام اثر:</label>
                                <input type="text" class="form-control" id="name" wire:model.lazy="name" >
                                @error('name')
                                <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">توضیحات:</label>
                                <textarea class="form-control" id="description" rows="3" wire:model.lazy="description" ></textarea>
                                @error('description')
                                <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">اثر:<span class="text-danger">*</span></label>
                                <input type="file" class="form-control-file" id="image" wire:model.lazy="image">
                                @error('image')
                                <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button class="btn btn-outline-success btn-block">ارسال اثر</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

        @foreach($competitions as $item)
            <div class="col-12 col-md-3">
                <div class="card" >
                    <img src="{{'/competition/'.$festival->id.'/'.$item->image}}" class="card-img-top" height="236px">
                    <div class="card-body">
                        <h5 class="card-title">نام اثر:{{$item->name}}</h5>
                        <p class="card-text">توضیحات اثر:{{$item->description}}</p>
                        <a href="{{route('panel.competition.edit',['competition'=>$item->id])}}" class="btn btn-warning btn-sm">
                            <i class="material-icons">edit</i>
                        </a>
                        <form class="d-inline" method="post" action="{{route('panel.competition.delete',['competition'=>$item->id])}}" onsubmit="return window.confirm('آیا از حذف اطمینان دارید؟')">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="material-icons">delete</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
