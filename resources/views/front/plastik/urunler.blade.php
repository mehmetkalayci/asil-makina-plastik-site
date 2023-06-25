@extends('layouts.plastik')

@section('title')
    {{ __('Ürünler') }}
@endsection


@section('content')
    <div class="wt-bnr-inr overlay-wraper bg-center ust-bosluk" style="background-image:url({{ asset('images/banner.jpg') }});">
        <div class="overlay-main site-bg-black opacity-06"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{ __('Ürünler') }}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('plastik.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                        <li>{{ __('Ürünler') }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>





    <!-- ÜRÜNLER -->


    <div class="ust-bosluk p-t60 p-b60">

        <!-- ÜRÜNLER -->

        <div class="row">

            @if(count($products)<=0)
                <div class="container">
                    <h2>{{ __('Henüz ürün girilmemiş!') }}</h2>
                </div>
            @endif

            @foreach($products as $item)
            <div class="item col-lg-3  col-md-4  col-sm-6  col-xs-12 p-b40">
                <div class="project-box-style1">
                    <div class="project-content">
                        <div class="project-title">
                            {{ $item->code }}
                        </div>
                        <h4 class="project-title-large"><a href="{{ route('plastik.urunler.detay', ['slug' => $item->slug]) }}">{{ $item->name }}</a></h4>
                    </div>
                    <div class="project-media">
                        <img src="{{ asset($item->image) }}" alt="">
                    </div>
                    <div class="project-view">
                        <a class="elem pic-long project-view-btn" href="{{ asset($item->image) }}" title="{{ $item->code }}"
                           data-lcl-txt="{{ $item->name }}" data-lcl-author="someone" data-lcl-thumb="{{ asset($item->image) }}">
                            <i></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <div class="row d-flex justify-content-center">
            {{ $products->links("pagination::bootstrap-5") }}
        </div>

        <!-- /ÜRÜNLER -->
    </div>





    <!-- /ürünler -->



@endsection
