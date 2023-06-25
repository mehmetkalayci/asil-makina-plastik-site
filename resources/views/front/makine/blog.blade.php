@extends('layouts.makina')

@section('title')
    {{ __('Blog') }}
@endsection


@section('content')


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center ust-bosluk" style="background-image:url({{ asset('images/banner.jpg') }});">
        <div class="overlay-main site-bg-black opacity-06"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{ __('Blog') }}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('makina.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                        <li>{{ __('Blog') }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- OUR BLOG START -->
    <div class="section-full  p-t120 p-b90 bg-white">
        <div class="container">
            <!-- BLOG SECTION START -->
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                        <div class="blog-post-2-outer blog-list-style">


                            @if(count($posts)<=0)
                                <h2>{{ __('Henüz blog yazısı girilmemiş!') }}</h2>
                            @endif

                            @foreach($posts as $item)
                            <!--Block one-->
                                <div class="blog-post blog-post-4-outer m-b30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wt-post-media wt-img-effect zoom-slow">
                                                <a href="{{ route('makina.blog.detay', ['slug'=> $item->slug]) }}"><img src="{{ asset($item->image) }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                            <div class="wt-post-info">
                                                <div class="wt-post-meta ">
                                                    <ul>
                                                        <li class="post-date"><span>{{ \Carbon\Carbon::parse($item->created_at)->format('d') }} </span>{{ \Carbon\Carbon::parse($item->created_at)->format('F') }}<br />{{ \Carbon\Carbon::parse($item->created_at)->format('Y') }}</li>
                                                        {{--<li class="post-category">Factory</li>--}}
                                                    </ul>
                                                </div>
                                                <div class="wt-post-title ">
                                                    <h4 class="post-title"><a href="{{ route('makina.blog.detay', ['slug'=> $item->slug]) }}">{{ $item->title }}</a></h4>
                                                </div>
                                                <div class="wt-post-text ">
                                                    <p>{!! Str::limit($item->content, 300) !!}</p>
                                                </div>
                                                <div class="wt-post-readmore ">
                                                    <a href="{{ route('makina.blog.detay', ['slug'=> $item->slug]) }}" class="site-button-link black">{{ __('Tümünü Gör') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </div>
                            <!--Post pagination-->
                            <div class="pagination-outer text-center">
                                {{ $posts->links("pagination::bootstrap-5") }}
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- OUR BLOG END -->
@endsection
