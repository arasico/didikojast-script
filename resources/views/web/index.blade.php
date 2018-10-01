<html lang="fa-IR">
<head>

    <link rel='shortcut icon' type='image/x-icon' href="{{asset('favicon.ico')}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> دیدی کجاست | DIDIkojast </title>

    <!-- Bootstrap file directly  -->
    <link rel="stylesheet" href="{{asset('web/bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css')}}"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- project CSS file directly  -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- selection  -->
    <link href="{{asset('web/css/select2.min.css')}}" rel="stylesheet"/>


</head>
<body class="arasico-backgoround-color-defualt  arasico-font-face ">
<header class="arasico-background-image-vector">

    <nav class="navbar   navbar-light bg-transparent">
        <a class="navbar-brand" href="#"> <img src="{{asset('web/img/logo-didikojast-fff.svg')}}" alt="Smiley face"
                                               height="auto" width="100"></a>
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<form class="form-inline my-2 my-lg-0 left">--}}

        {{--<a href="#">--}}
        {{--<div class=" btn-black-register my-2 my-sm-0" >خانه <i class="fa fa-home" aria-hidden="true"></i></div>--}}
        {{--</a>--}}
        {{--</form>--}}
        {{--</button>--}}

        @if(\Auth::check())
            <div class="navbar-menu" id="navbarSupportedContent">
                <div class="dropdown" style="float:right;">

                    <button class="dropbtn"><i class="fa fa-angle-down" style="padding: 10px 10px;"
                                               aria-hidden="true"></i>
                        <span style="padding-top: 10px;">{{\Auth::user()->name}}</span>
                        <div class="avator-didi "></div>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{url('advertisement')}}">درج پست جدید <i class="fa fa-bullhorn"
                                                                           aria-hidden="true"></i></a>
                        <a href="{{url('profile')}}">پروفایل من <i class="fa fa-user-o" aria-hidden="true"></i></a>
                        <a href="{{url('profile/my-post')}}">پست های من <i class="fa fa-bell-o" aria-hidden="true"></i></a>
                        <a href="{{url('logout')}}"> خروج <i class="fa fa-power-off" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>


        @else
            <div class="  navbar-menu" id="navbarSupportedContent">

                <form class="form-inline my-2 my-lg-0 left">

                    <a href="{{url('login')}}">
                        <div class=" btn-black-register my-2  my-sm-0">ورود / ثبت نام</div>
                    </a>
                </form>
            </div>

        @endif

    </nav>


    <div dir="rtl" class=" container text-center   index-up-part">
        <p></p>
        <div class="h2 arasico-color-ffffff">اگر چیزی گم کردید ، بیابید و اگر پیدا کردید، به صاحبش برسونید.</div>
        <h4 class="arasico-color-ffffff" style="padding-bottom: 90px;">با دیدی کجاست گمشده خود را بیابید</h4>


        <div class="container text-center">
            <div class="index-box-search col-8">

                <form class="row" id="form-search" method="get" action="{{url('search')}}">
                    <div class="col-lg-4">
                        <div class="arasico-radio-searching">

                            <p>
                                <input type="radio" id="test1" name="type" value="lost" checked>
                                <label class="lbl-radio-text" for="test1">گمشده</label>
                            </p>


                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="arasico-radio-searching">

                            <p>
                                <input type="radio" id="test2" name="type" value="found">
                                <label class="lbl-radio-text" for="test2">پیدا شده</label>
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="arasico-radio-searching">

                            <p>
                                <input type="radio" id="test3" name="type" value="all">
                                <label class="lbl-radio-text" for="test3">نمایش همه</label>
                            </p>


                        </div>
                    </div>

                    <div class="input-group arasico-margin-botton" style="margin-top: 20px;">
                        <input type="text" class="col arasico-input-box" placeholder="جستجو کلمه کلیدی"
                               name="key"
                               aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <select name="state"
                            class="js-example-placeholder-single col-lg col-sm col-md js-states form-control text-right">
                        @foreach($stateInfo as $value)
                            <option @if($value->title=="تهران"){{'selected'}}@endif value="{{$value->title}}">{{$value->title}}</option>
                        @endforeach
                        {{--<optgroup label="abasabas/Hawaiian Time Zone">--}}
                        {{--<option value="hw">Alaska</option>--}}
                        {{--<option value="gu">Hawaii</option>--}}
                        {{--</optgroup>--}}
                    </select>

                </form>
                <div class="row">
                    <div class="col-lg-5" style="left: 0; right: 0; margin: auto;">
                        <div onclick="search()">
                            <div class=" arasico-btn-search col-lg-12"><i class="fa fa-search"
                                                                          aria-hidden="true"></i>
                                جستجو
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</header>

<main>
    <div class="container-fluid">

        <div class="row">
            <!-- Part left -->
            <a dir="rtl" href="{{url('advertisement')}}" class="col-lg box-select-index-left ">
                <p class="box-title-index">گمشده</p>
                <p style="text-decoration: none; color:#fff; padding-bottom: 25px;">آیا وسیله ارزشمند یا حیوان خانگی
                    مورد علاقه خود را گم کرده اید؟؟ شما می‌توانید با قراردادن مشخصات آن در این قسمت از هزاران نفر برای
                    پیدا کردن آن کمک بخواهید.</p>
                <button type="button" class="btn btn-light btn-white col-lg-8 col-md-6 "><i class="fa fa-bullhorn"
                                                                                            aria-hidden="true"></i> پست
                    بگذارید
                </button>
            </a>
            <!-- Part right -->
            <a dir="rtl" href="{{url('advertisement')}}" class="col-lg box-select-index-right ">
                <p class="box-title-index">پیدا شده</p>
                <p style="text-decoration: none; color:#fff; padding-bottom: 25px;">آیا وسیله ای متعلق به شخص دیگری را
                    پیدا کرده اید؟ شما می‌توانید با قراردادن مشخصات وسیله در این قسمت به بازگرداندن آن به صاحبش کمک
                    کنید.</p>
                <button type="button" class="btn btn-light btn-white col-lg-8 col-md-6 "><i class="fa fa-bullhorn"
                                                                                            aria-hidden="true"></i> پست
                    بگذارید
                </button>
            </a>

        </div>

    </div>
    <!-- how we working in didikojast -->
    <div class="container-fluid " style="background-color: #fff;">

        <div dir="rtl" class="row text-center">
            <div class="col-lg-12"><p class="font-size-2-2em arasico-padding-top-2em">دیدی کجاست , چطور کار میکنه ؟</p>
            </div>
            <div class="col-lg-12"><p class="font-size-1-2em ">دیدی کجاست با 3 مرحله ، قابل استفاده برای شما می
                    باشد.</p></div>

        </div>

        <div dir="rtl" class="row text-center">

            <div class="col-lg-3" style="padding: 50px;">
                <div class="box-step-index">1</div>
                <p class="box-index-title-circle ">ایجاد حساب</p>
                <p style="font-size: 1em;">به راحتی و رایگان پروفایل شخصی خود را ایجاد کنید.سپس وارد حساب کاربری خود
                    شوید.
                </p>

            </div>

            <div class="col-lg-1 arrow-boxing-index" style="padding: 50px;"><i class="fa fa-angle-left fa-5x"
                                                                               aria-hidden="true"></i></div>

            <div class="col-lg-4" style="padding: 50px;">
                <div class="box-step-index">2</div>
                <p class="box-index-title-circle ">پست کنید</p>
                <p style="font-size: 1em;">اگر وسیله ای پیدا یا گم کرده اید باید وارد گزینه مورد نظر شده و فیلدهای مربوط
                    به آن را پر کنید و پست خود را ایجاد کنید.</p>

            </div>

            <div class="col-lg-1 arrow-boxing-index" style="padding: 50px;"><i class="fa fa-angle-left fa-5x"
                                                                               aria-hidden="true"></i></div>

            <div class="col-lg-3" style="padding: 50px;">
                <div class="box-step-index">3</div>
                <p class="box-index-title-circle ">پیدا کنید</p>
                <p style="font-size: 1em;">شما می‌توانید در این قسمت با جستجو در سایت دیدی کجاست گمشده خود را
                    بیابید.</p>


            </div>

        </div>
    </div>


</main>


<footer>
    <div class="container-fluid footer-box">
        <a href="http://www.didikojast.ir"> <img style="margin-top: 50px;"
                                                 src="{{asset('web/img/logo-didikojast-fff.svg')}}" alt="Smiley face"
                                                 height="82" width="150"></a>

        <p style="font-size: 1em; color: #bebebe; padding-top: 60px;" dir="rtl">ساخته شده با <span
                    style="color: #f12149;"><i class="fa fa-heart" aria-hidden="true"></i></span> در ایران</p>
    </div>

</footer>


<!-- Bootstrap file directly  -------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="{{asset('web/bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js')}}"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<!-- Bootstrap file directly  ------------------------------------------------------------------------------------------------------------------------------------------------------>


<script>

    function search() {
        document.forms["form-search"].submit();

    }


</script>
<!-- -------------------------------------------- -->
<!-- Select City js and Funcation from select 2 -->
<!-- -------------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>

    $(".js-example-placeholder-single").select2({
        placeholder: "انتخاب شهر",
        allowClear: false
    });


</script>


</body>
</html>
