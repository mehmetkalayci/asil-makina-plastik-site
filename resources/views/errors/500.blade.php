<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti."/>
    <meta name="description" content="Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti."/>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.html" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"/>

    <!-- PAGE TITLE HERE -->
    <title>500 - Asil Geri Dönüşüm Plastik Makina Sanayi ve Tic. Ltd. Şti.</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/skin-1.css') }}">
</head>
<body>
<div class="page-wraper">
    <div class="page-content">

        <!-- Error SECTION START -->
        <div class="section-full page-notfound-outer">
            <div class="container-fluid">
                <div class="section-content">

                    <div class="page-notfound">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="page-notfound-content">
                                    <h3 class="error-title">{{ __('Hata') }}</h3>
                                    <strong>500</strong>
                                    <p>{{ __('Üzgünüz, bir sunucu hatası oluştu. Lütfen daha sonra tekrar deneyin veya site yöneticisiyle iletişime geçin.') }}</p>
                                    <a href="{{ route('makina.anasayfa') }}" class="site-button sb-bdr-dark">{{ __('Anasayfaya Git') }}</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="page-notfound-media text-right">
                                    <img src="{{ asset('images/error-bg.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Error  SECTION END -->
    </div>
</div>
</body>
</html>
