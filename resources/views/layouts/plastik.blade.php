<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti." />
    <meta name="description" content="Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti." />

    <!-- FAVICONS ICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('images/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- PAGE TITLE HERE -->
    <title>@yield('title', 'Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.')</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SLECT BOX STYLE SHEET  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">

    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.min.css') }}">
    <!-- IMAGE POPUP -->
    <link rel="stylesheet" href="{{ asset('css/lc_lightbox.css') }}" />
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('css/skin-1.css') }}">
    <!-- SIDE SWITCHER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/switcher.css') }}">

    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/navigation.css') }}">

</head>

<body>

<div class="page-wraper" @if (app()->getLocale() === 'ar') style="direction: rtl;" @endif>

    @if (session('success'))
        <div class="alert rounded-0 alert-success alert-dismissible fade show m-0" role="alert">
            <div class="container">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="alert rounded-0 alert-danger alert-dismissible fade show m-0" role="alert">
            <div class="container">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif

    <!-- HEADER START -->
    <header class="site-header header-style-4 mobile-sider-drawer-menu">

        <div class="top-bar site-bg-gray-light">
            <div class="container">

                <div class="wt-topbar-outer d-flex justify-content-between">

                    <div class="wt-topbar-right d-flex flex-wrap align-content-center">
                        <div class="wt-topbar-right-info">
                            <ul class="social-icons">
                                <li><a target="_blank" rel="nofollow" href="{{ $facebook }}" class="fa fa-facebook-square"></a></li>
                                <li><a target="_blank" rel="nofollow" href="{{ $twitter }}" class="fa fa-twitter-square"></a></li>
                                <li><a target="_blank" rel="nofollow" href="{{ $linkedin }}" class="fa fa-linkedin-square"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="wt-topbar-left d-flex flex-wrap align-content-start">
                        <ul class="wt-topbar-left-info">
                            <li><i class="fa fa-phone-square"></i><span>{{ __('Telefon') }} : </span>{{ $phone }}</li>
                            <li><i class="fa fa-envelope-square"></i><span>{{ __('Eposta') }} : </span>{{ $email1 }}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>


        <div class="sticky-header main-bar-wraper  navbar-expand-lg">
            <div class="main-bar">
                <div class="container clearfix">
                    <div class="logo-header">
                        <div class="logo-header-inner logo-header-one">
                            <a href="{{ route('plastik.anasayfa') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('plastik.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                            <li><a href="{{ route('plastik.hakkimizda') }}">{{ __('Hakkımızda') }}</a></li>
                            <li><a href="{{ route('plastik.urunler') }}">{{ __('Ürünler') }}</a></li>
                            <li><a href="{{ route('plastik.blog') }}">{{ __('Blog') }}</a></li>
                            <li><a href="{{ route('plastik.iletisim') }}">{{ __('İletişim') }}</a></li>
                        </ul>
                    </div>

                    <!-- Header Right Section-->
                    <div class="extra-nav header-1-nav">

                        <div class="extra-cell one">
                            <div class="header-line-btn menu-btn">
                                <a href="javascript:void(0);" class="header-line-icon">
                                    <span class="icon-line icon-bar-first"></span>
                                    <span class="icon-line icon-bar-two"></span>
                                    <span class="icon-line icon-bar-three"></span>
                                </a>
                            </div>
                        </div>

                        <div class="extra-cell one">
                            <div class="header-line-btn">
                                @if (app()->getLocale() === 'en')
                                    <button class="btn btn-sm dil-menu-btn"><img src="{{ asset('images/en.png') }}" alt="English"></button>
                                @elseif (app()->getLocale() === 'tr')
                                    <button class="btn btn-sm dil-menu-btn"><img src="{{ asset('images/tr.png') }}" alt="Türkçe"></button>
                                @elseif (app()->getLocale() === 'ar')
                                    <button class="btn btn-sm dil-menu-btn"><img src="{{ asset('images/ar.png') }}" alt="عربى"></button>
                                @endif
                                <ul class="dil-menu">
                                    @if (app()->getLocale() !== 'en')
                                        <li><a class="btn btn-sm"
                                               href="{{ route('language.switch', ['locale' => 'en']) }}"><img
                                                    src="{{ asset('images/en.png') }}" alt="English"></a></li>
                                    @endif
                                    @if (app()->getLocale() !== 'tr')
                                        <li><a class="btn btn-sm"
                                               href="{{ route('language.switch', ['locale' => 'tr']) }}"><img
                                                    src="{{ asset('images/tr.png') }}" alt="Türkçe"></a></li>
                                    @endif
                                    @if (app()->getLocale() !== 'ar')
                                        <li><a class="btn btn-sm"
                                               href="{{ route('language.switch', ['locale' => 'ar']) }}"><img
                                                    src="{{ asset('images/ar.png') }}" alt="عربى"></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>


                        <div class="extra-cell two">
                            <div class="header-search">
                                <a href="{{route('makina.anasayfa')}}" class="header-search-icon">{{ __('Makina') }} <i class="fa fa-recycle slide-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="full-menu bg-cover bg-no-repeat" style="background-image: url({{ asset('images/background/bg11.jpg') }});">
            <button type="button" class="full-menu-close"></button>
            <div class="vertical-content-wrap">
                <div class="vertical-centered">
                    <!-- MAIN Vav -->
                    <div class="contact-form-outer">
                        <form class="cons-contact-form1" method="post" action="{{ route('plastik.iletisim.gonder') }}">
                            @csrf
                            <!-- TITLE START-->
                            <div class="section-head left wt-small-separator-outer">
                                <h3 class="wt-title m-b30">{{ __('İletişim Formu') }}</h3>
                                <p>{{ __('İstediğiniz zaman bizimle iletişime geçmekten çekinmeyin. En kısa sürede size geri döneceğiz.') }}</p>
                            </div>
                            <!-- TITLE END-->

                            <div class="row">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="adsoyad" type="text" required="" class="form-control" placeholder="{{ __('Ad Soyad') }}" value="{{ old('adsoyad') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input name="eposta" type="text" class="form-control" required="" placeholder="{{ __('Eposta') }}" value="{{ old('eposta') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input name="telefon" type="text" class="form-control" required="" placeholder="{{ __('Telefon') }}" value="{{ old('telefon') }}">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input name="konu" type="text" class="form-control" required="" placeholder="{{ __('Konu') }}" value="{{ old('konu') }}">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="mesaj" class="form-control" rows="4" placeholder="{{ __('Mesaj') }}">{{ old('mesaj') }}</textarea>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="captcha">
                                            <span>{!! captcha_img() !!}</span>
                                            <button type="button"
                                                    class="btn btn-sm btn-success btn-refresh btn-captcha"><i
                                                    class="fa fa-refresh"></i></button>
                                        </div>
                                        <input id="captcha" type="text" class="form-control" name="captcha"
                                               placeholder="{{ __('Güvenlik Kodu') }}">
                                        @error('captcha')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="site-button sb-bdr-dark">{{ __('Gönder') }}</button>
                                </div>


                                @if (session('success'))
                                    <div class="col-md-12 px-0 py-4">
                                        <div class="alert rounded-0 alert-success">
                                            <div class="container">
                                                {{ session('success') }}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">

        @yield('content')

    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="site-footer footer-light" >
        <!-- FOOTER BLOCKES START -->
        <div class="footer-top bg-bottom-center bg-no-repeat" style="background-image:url({{ asset('images/background/footer-map.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <div class="widget widget_about">
                            <h3 class="widget-title">{{ __('Hakkımızda') }}</h3>
                            <p>{{ Str::limit($footer_about, 100) }}</p>
                            <ul class="social-icons">
                                <li><a href="{{ $facebook }}" class="fa fa-facebook"></a></li>
                                <li><a href="{{ $twitter }}" class="fa fa-twitter"></a></li>
                                <li><a href="{{ $linkedin }}" class="fa fa-linkedin"></a></li>
                                <li><a href="{{ $instagram }}" class="fa fa-instagram"></a></li>
                                <li><a href="{{ $youtube }}" class="fa fa-youtube"></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services">
                            <h3 class="widget-title">{{ __('Ürünlerimiz') }}</h3>
                            <ul>
                                @foreach($footer_products as $item)
                                    <li>
                                        <a href="{{route('plastik.urunler.detay', ['slug' => $item->slug])}}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_services">
                            <h3 class="widget-title">{{ __('Linkler') }}</h3>
                            <ul>
                                <li><a href="{{ route('plastik.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                                <li><a href="{{ route('plastik.hakkimizda') }}">{{ __('Hakkımızda') }}</a></li>
                                <li><a href="{{ route('plastik.urunler') }}">{{ __('Ürünler') }}</a></li>
                                <li><a href="{{ route('plastik.blog') }}">{{ __('Blog') }}</a></li>
                                <li><a href="{{ route('plastik.iletisim') }}">{{ __('İletişim') }}</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6">
                        <div class="widget widget_newsletter">
                            <h3 class="widget-title">{{ __('Bülten') }}</h3>
                            <p>{{ __('Bültenlerimiz faydalı blog gönderileri ve faydalı içerikler içerir.') }}</p>
                            <div class="newsletter-bx">
                                <div class="input-group">
                                    <input name="news-letter" id="news-letter" class="form-control" placeholder="{{ __('Eposta girin') }}" type="text">
                                    <span class="input-group-btn">
                                            <button id="news-letter-btn" type="button" class="site-button" data-toggle="modal" data-target="#subscribeModal"><i class="fa fa-paper-plane"></i></button>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="footer_blocks">
                    <div class="row justify-content-center no-gutters">

                        <!--Block 1-->
                        <div class="col-lg-4 col-md-4">
                            <div class="block-content">
                                <div class="wt-icon-box-wraper left">
                                    <div class="wt-icon-box-sm">
                                        <span class="icon-cell  site-text-primary"><i class="flaticon-call"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte">{{ __('Telefon') }}</h4>
                                        <p>{{ $phone }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Block 2-->
                        <div class="col-lg-4 col-md-4">
                            <div class="block-content">
                                <div class="wt-icon-box-wraper left">
                                    <div class="wt-icon-box-sm">
                                        <span class="icon-cell  site-text-primary"><i class="flaticon-email"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte">{{ __('Eposta') }}</h4>
                                        <p>{{ $email1 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Block 3-->
                        <div class="col-lg-4 col-md-4">
                            <div class="block-content">
                                <div class="wt-icon-box-wraper left">
                                    <div class="wt-icon-box-sm">
                                        <span class="icon-cell site-text-primary"><i class="flaticon-location"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <h4 class="wt-tilte">{{ __('Adres') }}</h4>
                                        <a target="_blank" href="{{ $gmap_url }}"><p>{{ $address }}</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- FOOTER COPYRIGHT -->

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-info">
                    <div class="footer-copy-right">
                        <span class="copyrights-text">Copyright © <?php echo date('Y') ?> <span class="site-text-primary">Asil Makina Plastik</span> | All rights reserved </span>
                    </div>
                </div>
            </div>
        </div>



    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>
</div>

<!-- LOADING AREA START -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-spinner"></div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="subscribeModal">{{ __('Bültenimize Abone Olun') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="cons-contact-form" method="POST" action="{{ route('subscribe') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <p>{{ __('Bültenlerimiz faydalı blog gönderileri ve faydalı içerikler içerir.') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="modal-eposta">{{ __('Eposta') }}</label>
                        <input type="email" required class="form-control" id="modal-eposta" name="modal-eposta" placeholder="{{ __('Eposta') }}" value="{{ old('modal-eposta') }}">
                        @error('modal-eposta')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="captcha">
                            <span>{!! captcha_img() !!}</span>
                            <button type="button"
                                    class="btn btn-sm btn-success btn-refresh btn-captcha"><i
                                    class="fa fa-refresh"></i></button>
                        </div>
                        @error('modal-captcha')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="modal-captcha">{{ __('Güvenlik Kodu') }}</label>
                        <input type="text" required class="form-control" id="modal-captcha" name="modal-captcha"
                               placeholder="{{ __('Güvenlik Kodu') }}">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __("İptal") }}</button>
                    <button type="submit" class="btn btn-primary">{{ __("Kaydol") }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="{{ asset('js/jquery-3.5.1.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script  src="{{ asset('js/popper.min.js') }}"></script><!-- POPPER.MIN JS -->
<script  src="{{ asset('js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="{{ asset('js/bootstrap-select.min.js') }}"></script><!-- Form js -->
<script  src="{{ asset('js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="{{ asset('js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script  src="{{ asset('js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script  src="{{ asset('js/waypoints-sticky.min.js') }}"></script><!-- STICKY HEADER -->
<script  src="{{ asset('js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->
<script  src="{{ asset('js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->
<script  src="{{ asset('js/theia-sticky-sidebar.js') }}"></script><!-- STICKY SIDEBAR  -->
<script  src="{{ asset('js/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script  src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('js/lc_lightbox.lite.js') }}" ></script><!-- IMAGE POPUP -->
<!-- REVOLUTION JS FILES -->

<script  src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{ asset('plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER SCRIPT FILES -->
<script  src="{{ asset('js/rev-script-4.js') }}"></script>


<script type="text/javascript">

    {{--    iletişim sayfasında 2 captcha var bu yüzden aşağıda captchaları yeniledik --}}
    $(document).ready(function () {
        $(".btn-captcha").trigger('click');

        $("#news-letter").on('change keyup paste', function (e) {
            $('#modal-eposta').val($("#news-letter").val());
            if (e.key === 'Enter' || e.keyCode === 13) {
                $('#subscribeModal').modal('toggle');
            }
        });

        $(".btn-captcha").click(function () {
            $.ajax({
                type: 'GET',
                url: '/refresh-captcha',
                success: function (data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });


        $(".dil-menu").css('display', 'none');

        $('.dil-menu-btn').click(function(e) {
            if ($(this).next().is(":visible")){
                $(this).next().hide();
            }else{
                $(".dil-menu").hide();
                $(this).next().show();
            }
        });
    });
</script>

@yield('js')
</body>
</html>
