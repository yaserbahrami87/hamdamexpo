<footer class="container" dir="rtl">
    <div class="col-12 text-center">
        <img src="/images/footer.png" width="60px" class="position-relative" id="bolt-footer"/>
    </div>
    <div class="row pt-4  mb-3">

        <div class="col-md-4">
            <b class="d-block">ارتباط با ما</b>

            <p class="m-0 text-justify">{{$settings->where('setting','address')->first()->value}}</p>
            <a href="tel:{{$settings->where('setting','tel')->first()->value}}" class="mr-3">{{$settings->where('setting','tel')->first()->value}}</a>
            <a href="mailto:{{$settings->where('setting','email')->first()->value}}" class="d-block">{{$settings->where('setting','email')->first()->value}}</a>
        </div>

        <div class="col-md-3 align-items-center text-center p-0 d-flex justify-content-around">
            <!--
            <a href="#" target="_blank" class="d-inline-block social" id="facebook_footer"></a>
            <a href="#" target="_blank" class="d-inline-block social" id="telegram_footer"></a>
            <a href="#" target="_blank" class="d-inline-block social" id="insta_footer"></a>
            <a href="#" target="_blank" class="d-inline-block social" id="whatsapp_footer"></a>
            -->
            <a href="https://orsachap.ir/" target="_blank">
                <img src="/images/orsa1.png" width="100px" />
            </a>
            <a href="#" target="_blank">
                <img src="/images/kardan.png" width="100px" />
            </a>
        </div>

        <div class="col-md-4 text-center">


            <a href="https://hamdamart.com/" target="_blank">
                <img src="/images/hamdam_.png" width="100px" />
            </a>

            <a href="https://www.hamdam.org/" target="_blank">
                <img src="/images/hamdam_store.png" width="100px"  />
            </a>


        </div>


    </div>
    <div class="row">
        <div class="col-12 text-center">
            <p>مالکیت حقوقی و معنوی این تارنما متعلق به موسسه توانبخشی همدم می باشد</p>
        </div>
    </div>
</footer>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/jquery.slim.min.js" ></script>
<script src="/assets/js/bootstrap.bundle.min.js" ></script>

<!--
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="d23eccc1-8bfc-4ee2-915d-3f1c6dc68a16";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
-->
<script src="/slick/slick.js"></script>
<script>
    $(document).ready(function(){
        $('.slick').slick(
            {
            infinite: true,
            slidesToShow: 13,
            slidesToScroll: 13,
            autoplay: true,
            autoplaySpeed: 2000,
            rtl:true,
            arrows:false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 9,
                        slidesToScroll: 9,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 5
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
    });
    });
</script>

<!--

<script src="/plugins/intl-tel-input/build/js/intlTelInput.js"></script>
<script src="/plugins/intl-tel-input/build/js/utils.js"></script>
<script>
    // var input = document.querySelector("#tel_");
    //
    // var intl=intlTelInput(input,{
    //     formatOnDisplay:false,
    //     separateDialCode:true,
    //     autoPlaceholder:'off',
    //     preferredCountries:["ir", "gb"],
    //     excludeCountries:["il"]
    // });
    //
    // input.addEventListener("countrychange", function() {
    //     document.querySelector("#tel").value=intl.getNumber();
    //     document.querySelector("#country").value="+"+intl.getSelectedCountryData().name;
    //     document.querySelector("#code").value="+"+intl.getSelectedCountryData().dialCode;
    //     if(intl.getSelectedCountryData().dialCode==98)
    //     {
    //         document.querySelector('#states_register').setAttribute('class','form-group row');
    //         document.querySelector('#cities_register').setAttribute('class','form-group row');
    //     }
    //     else
    //     {
    //         document.querySelector('#states_register').setAttribute('class','form-group row d-none');
    //         document.querySelector('#cities_register').setAttribute('class','form-group row d-none');
    //     }
    // });
    //
    // $('#tel_').change(function()
    // {
    //     document.querySelector("#tel").value=intl.getNumber();
    //     document.querySelector("#country").value="+"+intl.getSelectedCountryData().name;
    //     document.querySelector("#code").value="+"+intl.getSelectedCountryData().dialCode;
    //
    // });
</script>
-->

<script>
    // let pass=document.querySelector('#password');
    // let show_pass=document.querySelector('#show_pass');
    // show_pass.addEventListener('click',function ()
    // {
    //     if(pass.getAttribute('type')=='password')
    //     {
    //         pass.setAttribute('type','text')
    //     }
    //     else
    //     {
    //         pass.setAttribute('type','password')
    //     }
    //
    // });

</script>

<script src="/js/jquery.flipper-responsive.js"></script>
<script>
    $(function(){
        $('#myFlipper').flipper('init');
    });
</script>

@if(isset($footerScript))
{{$footerScript}}
@endif
</body>
</html>
