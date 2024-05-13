<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="/assets/images/favicon2.png" sizes="32x32" type="image/png">
    <title>جامعه - پوسته مرکز اسلامی</title>

    <link rel="stylesheet" href="/assets/css/icons.min.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/fancybox.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/jquery.circliful.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/rtl.css">
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="/assets/css/colors/color3.css" /><!-- Color -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(isset($headerScript))
        {{$headerScript}}
    @endif
</head>
<body>
@include('sweet::alert')
<main>
    <div class="pageloader-wrap">
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div><!-- Pageloader Wrap -->

    @include('master.navbatTop')

    <div class="header-search">
        <span class="srch-cls-btn brd-rd5"><i class="fa fa-times"></i></span>
        <form>
            <input type="text" placeholder="جستجو کنید ...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- Header Search -->
    <div class="contact-form-model-wrap text-center">
        <span class="model-close"><i class="fa fa-times"></i></span>
        <div class="contact-form-inner">
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
                            <input type="email" placeholder="ایمیل">
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <textarea placeholder="پیام شما"></textarea>
                            <button class="thm-btn brd-rd40" type="submit">ارسال پیام</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- Contact Form Model Wrap -->

    {{$slot}}

    <footer>
        <div class="gap top-spac70 drk-bg2 remove-bottom">
            <div class="container">
                <div class="footer-data">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-lg-4">
                            <div class="wdgt-box style2">
                                <div class="logo"><a href="index.html" title="Logo"><img src="/assets/images/logo-thumbnail.png" alt="logo2.png"></a></div>
                                <p>مرکز توانبخشی <b>همدم</b> در سال 1403 با هدف خدمت به جامعه اسلامی تشکیل شده است.</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-lg-8">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="wdgt-box">
                                        <h4>لینک های مفید</h4>
                                        <ul>
                                            <li><a href="index.html#" title="">بلاگ</a></li>
                                            <li><a href="index.html#" title="">خدمات</a></li>
                                            <li><a href="index.html#" title="">کمک مالی</a></li>
                                            <li><a href="index.html#" title="">تیم</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="wdgt-box">
                                        <h4>صفحات سایت</h4>
                                        <ul>
                                            <li><a href="index.html#" title="">صفحه اصلی</a></li>
                                            <li><a href="index.html#" title="">مطالب سایت</a></li>
                                            <li><a href="index.html#" title="">تالار گفتمان</a></li>
                                            <li><a href="index.html#" title="">درباره ما</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="wdgt-box">
                                        <h4>تماس با ما</h4>
                                        <ul class="cont-lst">
                                            <li><i class="flaticon-location-pin"></i>مشهد- خیابان شفا - همدم</li>
                                            <li><i class="flaticon-call"></i>123-456-789</li>
                                            <li><i class="flaticon-email"></i><a href="index.html#" title="">info@mail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Footer Data -->
                <div class="bottom-bar">
                    <p>1402 | تمامی حقوق برای همدم محفوظ میباشد</p>
                    <div class="scl">
                        <a href="index.html#" title="توییتر" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="index.html#" title="اینستاگرام" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="index.html#" title="گوگل پلاس" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a href="index.html#" title="فیسبوک" target="_blank"><i class="fa fa-facebook"></i></a>
                    </div>
                </div><!-- Bottom Bar -->
            </div>
        </div>
    </footer>
</main><!-- Main Wrapper -->

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/downCount.js"></script>
<script src="/assets/js/fancybox.min.js"></script>
<script src="/assets/js/isotope.pkgd.min.js"></script>
<script src="/assets/js/perfectscrollbar.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/jquery.circliful.min.js"></script>
<script src="/assets/js/custom-scripts.js"></script>

@if(isset($footerScript))
    {{$footerScript}}
@endif
</body>
</html>
