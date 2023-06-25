@extends('layouts.makina')
@section('title')
    {{ $product->name }}
@endsection
@section('content')


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner.jpg') }});">
        <div class="overlay-main site-bg-black opacity-06"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h1 style="color:#fff">{{ $product->name }}</h1>
                    </div>
                </div>

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('makina.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                        <li><a href="{{ route('makina.urunler') }}">{{ __('Ürünler') }}</a></li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->


    <!-- info SECTION START -->
    <div class="section-full p-t70 p-b120 bg-gray">
        <div class="container">
            <div class="section-content">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="project-single">
                            <div class="project-single-media m-b30">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="wt-info  bg-white">

                                {!! $product->description !!}


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 rightSidebar">
                        <div class="project-single-sibar-info m-b30">
                            <h4 class="wt-tilte">{{ __('Ürün Bilgileri') }}</h4>
                            <ul class="info-list-1">
                                <li><h5 class="title">{{ __('Ürün Kodu') }} :</h5>
                                    <span>{{ $product->code }}</span></li>
                                <li><h5 class="title">{{ __('Ürün Adı') }}:</h5>
                                    <span>{{ $product->name }}</span></li>
                            </ul>
                        </div>
                        <div class="project-single-side-btn m-b30">
                            <p>{{ __('Ürünlerimize ait özellikler ve daha fazla detay bizimle iletişime geçmekten çekinmeyin.') }}</p>


                            <div class="wt-icon-box-wraper left ">
                                <a href="{{ route('makina.iletisim') }}" class="btn-block  m-tb5">
                                    <span class="text-black m-r10"><i class="fa fa-file-pdf-o"></i></span>
                                    <strong class="text-black">{{ __('İletişim') }}</strong>
                                </a>
                            </div>

                        </div>


                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- info  SECTION END -->

@endsection
