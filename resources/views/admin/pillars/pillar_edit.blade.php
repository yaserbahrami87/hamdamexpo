@component('admin.master.index')

    <div class="col-12">
        <div class="card">
            <h5 class="card-header">بروزرسانی ارکان</h5>
            <div class="card-body">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-farsi-tab" data-toggle="tab" data-target="#nav-farsi" type="button" role="tab" aria-controls="nav-farsi" aria-selected="true">بخش فارسی</button>
                </div>

                <form method="post" action="{{route('admin.pillar.update',['pillar'=>$pillar->id])}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-farsi" role="tabpanel" aria-labelledby="nav-farsi-tab">
                            <div class="alert alert-warning mt-1 mb-5">
                                پر کردن فیلدهای ستاره دار اجباریست
                            </div>
                            <div class="col-12 col-md-6 text-center">
                                <img class="img-thumbnail mb-3" src="/images/pillars/{{$pillar->image}}" width="200px" height="200px" />

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="image">عکس رکن<span class="text-danger">*</span></span>
                                    </div>
                                    <input type="file" class="form-control"  id="image" name="image" value="{{old('image',$pillar->image)}}" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" >نام<span class="text-danger">*</span></span>
                                    </div>
                                    <input type="text" class="form-control"   id="fname_fa" name="fname" value="{{old('fname',$pillar->fname)}}" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">نام خانوادگی<span class="text-danger">*</span></span>
                                    </div>
                                    <input type="text" class="form-control"  id="lname_fa" name="lname" value="{{old('lname',$pillar->lname)}}" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" >سمت<span class="text-danger">*</span></span>
                                    </div>
                                    <input type="text" class="form-control"  id="position_fa" name="position" value="{{old('position',$pillar->position)}}" />
                                </div>

                                <div class="input-group mb-3">
                                    <label for="biography_fa">بیوگرافی:<span class="text-danger">*</span></label>
                                    <textarea id="biography_fa" name="biography">{{old('biography',$pillar->biography)}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="festival_id">جشنواره</label>
                                    <select class="form-control" id="festival_id" name="festival_id">
                                        <option disabled selected>انتخاب کنید</option>
                                        @foreach($festivals as $festival)
                                            <option value="{{$festival->id}}" @if(old('festival_id',$pillar->festival_id)==$festival->id) selected @endif >{{$festival->festival}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>
                    <button class="btn btn-success">بروزرسانی ارکان</button>
                </form>

            </div>
        </div>
    </div>

@slot('footerScript')

    <script src="/assets/ckeditor/ckeditor.js"></script>
    <script src="/assets/ckeditor/lang/fa.js"></script>
    <script>
        CKEDITOR.replace('biography_fa');
    </script>
@endslot
@endcomponent
