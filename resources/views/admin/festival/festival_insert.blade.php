@component('admin.master.index')

@slot('headerScript')
    <link href="/admin/plugins/kamadatepicker/kamadatepicker.min.css" rel="stylesheet" />
    <link href="/admin/plugins/easytimepicker/timepicker.min.css" rel="stylesheet" />
@endslot


    <div class="col-12">
        <div class="card">
            <h5 class="card-header">تعریف جشنواره</h5>
            <div class="card-body">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-farsi-tab" data-toggle="tab" data-target="#nav-farsi" type="button" role="tab" aria-controls="nav-farsi" aria-selected="true">بخش فارسی</button>
                </div>
                <form method="post" action="{{route('admin.festival.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-farsi" role="tabpanel" aria-labelledby="nav-farsi-tab">
                            <div class="alert alert-warning mt-1 mb-5">
                                پر کردن فیلدهای ستاره دار اجباریست
                            </div>
                            <div class="col-12 col-md-6">

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="festival_fa">عنوان جشنواره</span>
                                        </div>
                                        <input type="text" class="form-control"  aria-describedby="festival_fa" name="festival" value="{{old('festival')}}" />
                                    </div>
                                    <div class="input-group mb-3">
                                        <label for="description">متن فراخوان :</label>
                                        <textarea id="description" name="description">{{old('description')}}</textarea>
                                    </div>
                            </div>
                        </div>

                    </div>
                    <button class="btn btn-success">ایجاد جشنواره</button>
                </form>

            </div>
        </div>
    </div>


@slot('footerScript')

    <script src="/assets/ckeditor/ckeditor.js"></script>
    <script src="/assets/ckeditor/lang/fa.js"></script>
    <script>
        CKEDITOR.replace('description',
            {
                language:'fa',
            });

        CKEDITOR.replace('call_en');
    </script>

    <script src="/admin/plugins/kamadatepicker/kamadatepicker.min.js"></script>
    <script src="/admin/plugins/kamadatepicker/kamadatepicker.holidays.js"></script>
    <script>
        kamaDatepicker('start_date_fa',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        kamaDatepicker('end_date_fa',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        kamaDatepicker('judgment_date_fa',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        kamaDatepicker('winner_date_fa',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        //
        kamaDatepicker('start_date_en',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        kamaDatepicker('end_date_en',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        kamaDatepicker('judgment_date_en',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });

        kamaDatepicker('winner_date_en',{
            // enable 2 digits
            twodigit: true,
            // close calendar after select
            closeAfterSelect: true,
            // nexy / prev buttons
            nextButtonIcon: "بعدی",
            previousButtonIcon: "قبلی ",
            // highlight holidays
            markHolidays: false,
        });




    </script>

    <script src="/admin/plugins/easytimepicker/timepicker.js"></script>
    <script>
        $('#start_time_fa').timepicker();
        $('#end_time_fa').timepicker();
        $('#judgment_time_fa').timepicker();
        $('#winner_time_fa').timepicker();
        $('#start_time_en').timepicker();
        $('#end_time_en').timepicker();
        $('#judgment_time_en').timepicker();
        $('#winner_time_en').timepicker();
    </script>

@endslot
@endcomponent
