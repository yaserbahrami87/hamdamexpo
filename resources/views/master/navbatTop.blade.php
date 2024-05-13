
<header class="style2">
    <div class="container">
        <div class="logo"><a href="index.html" title="لوگو"><img src="/assets/images/logo-thumbnail.png" alt="لوگو"></a></div>
        <nav>
            <div>
                <a class="srch-btn" href="index.html#" title=""><i class="fa fa-search"></i></a>

                <ul>
                    <li ><a href="/" title="">صفحه اصلی</a>
                    </li>
                    <li  ><a href="{{route('news')}}" title="">اخبار</a></li>
                    <li><a href="event.html" title="">رویداد ها</a></li>
                    <li><a href="#" title="">کمک مالی </a></li>
                    <li><a href="#" title="">صفحات دیگر</a></li>
                    <li><a href="{{route('contact')}}" title="">درباره ما</a></li>

                    @auth
                        <li class="menu-item-has-children">
                            <a href="#" title="">{{Auth::user()->fname.' '.Auth::user()->lname}}</a>
                            <ul>
                                <li><a href="{{route('dashboard.home')}}"> داشبورد</a></li>
                                <li>
                                    <form method="post" action="{{route('logout')}}">
                                        {{csrf_field()}}
                                        <button type="submit">خروج</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li><a href="{{route('login')}}" title="">ورود / عضویت</a></li>
                    @endguest

                </ul>
            </div>
        </nav>
    </div>
</header><!-- Header -->
<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <ul class="rspn-scil">
            <li><a href="index.html#" title="توییتر" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="index.html#" title="فیسبوک" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="index.html#" title="لینکدین" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="index.html#" title="گوگل پلاس" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        <form class="rspn-srch">
            <input type="text" placeholder="‌‌ کلید واژه را وارد کنید ... " />
            <button type="submit"> <i class="fa fa-search"> </i> </button>
        </form>
    </div>
    <div class="lg-mn">
        <div class="logo"><a href="index.html" title="Logo"> <img src="/assets/images/logo-thumbnail.png" alt="logo2.png"> </a> </div>
        <div class="rspn-cnt">
            <span><i class="fa fa-envelope thm-clr"></i><a href="index.html#" title=""> info@mail.com </a></span>
            <span><i class="fa fa-phone thm-clr"></i> 123-456-789 </span>
        </div>
        <span class="rspn-mnu-btn"> <i class="fa fa-list-ul"></i> </span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"> <i class="fa fa-times"></i> </span>
        <ul>
            <li  ><a href="/" title="">صفحه اصلی</a>
            </li>

            <li  ><a href="{{route('news')}}" title="">اخبار</a>
            </li>
            <li><a href="#" title="">رویداد ها</a></li>
            <li><a href="#" title="">کمک مالی </a></li>
            <li><a href="#" title="">صفحات</a>
            </li>
            <li><a href="{{route('contact')}}" title="">درباره ما</a></li>
            @guest
                <li><a href="{{route('login')}}" title="">ورود / عضویت</a></li>
            @endguest

            @auth
                <li class="menu-item-has-children"><a href="" title="">{{Auth::user()->fname.' '.Auth::user()->lname}}</a>
                    <ul>
                        <li><a href="{{route('dashboard.home')}}" title="">داشبورد</a></li>
                        <li><a href="{{route('dashboard.home')}}" title="">داشبورد</a>
                            <form method="post" action="{{route('logout')}}">
                                {{csrf_field()}}
                                <button  type="submit" >خروج</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @endauth
        </ul>
    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->
