@component('user.master.index')

@slot('headerScript')
    <style>
        .files input {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            padding: 120px 0px 85px 35%;
            text-align: center !important;
            margin: 0;
            width: 100% !important;
        }
        .files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
        }
        .files{ position:relative}
        .files:after {  pointer-events: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 50px;
            right: 0;
            height: 56px;
            content: "";
            background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
            display: block;
            margin: 0 auto;
            background-size: 100%;
            background-repeat: no-repeat;
        }
        .color input{ background-color:#f1f1f1;}
        .files:before {
            position: absolute;
            bottom: 10px;
            left: 0;  pointer-events: none;
            width: 100%;
            right: 0;
            height: 57px;
            content: " or drag it here. ";
            display: block;
            margin: 0 auto;
            color: #2ea591;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
        }
    </style>
@endslot


    <div class="container">
    <div class="row">
        <div class="col-12 col-md-6  mx-auto mb-b ">
            <div class="card col-12 mb-3 upload_pictures bg-transparent" >
                <h3 class="text-muted text-center pb-3">ویرایش  عکس</h3>
                <form class="form" method="post" action="{{route('panel.competition.update',['competition'=>$competition->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="row text-center">
                        <div class="card col-12  mb-3 bg-transparent">

                            <img src="/competition/{{$festival->id}}/{{$competition->image}}" class="img-fluid mb-3" />

                            <div class="form-group">
                                <label>نام اثر:
                                    <span class="alert text-danger m-0 p-0">*</span>
                                </label>
                                <input type="text" class="form-control"  name="name" value="{{$competition->name}}">
                            </div>

                            <div class="form-group">
                                <label >توضیحات:
                                </label>
                                <textarea class="form-control" name="description" rows="3">{{$competition->description}}</textarea>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="image3">تغییر عکس </span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image" >
                                <label class="custom-file-label" for="image6">انتخاب عکس</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">
                                بروزرسانی
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
@endcomponent
