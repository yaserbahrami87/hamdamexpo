@component('master.index')
<section>
    <div class="gap remove-bottom black-layer2 opc85">
        <div class="fixed-bg" style="background-image: url('/assets/images/parallax14.jpg');"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1><img src="/assets/images/resources/page-title-ayat.png" alt="page-title-ayat.png"></h1>
                <h2>تماس با ما</h2>
                <ul class="breadcrumbs">
                    <li><a href="/" title="">صفحه اصلی</a></li>
                    <li>تماس با ما</li>
                </ul>
            </div><!-- Page Title Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>آگاهی پیدا کنید</span>
                    <h3>اطلاعات تماس</h3>
                </div>
            </div>
            <div class="contact-info-wrap text-center remove-ext3">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="contact-info-box">
                            <i class="flaticon-location-pin"></i>
                            <strong>آدرس ما</strong>
                            <span>خراسان رضوی مشهد - - خیابان مرکزی - کوچه فرعی</span>
                            <a href="team.html#" title="">info@example.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="contact-info-box">
                            <i class="flaticon-call"></i>
                            <strong>تماس با ما</strong>
                            <span>موبایل: 09123456789</span>
                            <span>فکس: 123 456 789</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="contact-info-box">
                            <i class="flaticon-email"></i>
                            <strong>ارسال پیام</strong>
                            <a href="team.html#" title="">پشتیبانی 7/24 آماده پاسخگویی</a>
                            <a href="team.html#" title="">info@example.com</a>
                        </div>
                    </div>
                </div>
            </div><!-- Contact Info Wrap -->
        </div>
    </div>
</section>
<section>
    <div class="gap no-gap">
        <div class="contact-loc" id="contact-loc"></div>
    </div>
</section>
<section>
    <div class="gap">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sec-title-inner">
                    <span>سوالی دارید؟</span>
                    <h3>ارسال پیام</h3>
                </div>
            </div>
            <div class="contact-form text-center">
                <form>
                    <div class="row mrg20">
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="text" placeholder="نام">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="text" placeholder="موبایل">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="email" placeholder="ایمیل">
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6">
                            <input type="text" placeholder="موضوع">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <textarea placeholder="پیام شما"></textarea>
                            <button class="thm-btn brd-rd40" type="submit">ارسال پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@slot('footerScript')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALsm2XWtRQ5INM_ITSCwYB7rQdI9ILgy0"></script>
    <script src="assets/js/google-map-int.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
@endslot


@endcomponent
