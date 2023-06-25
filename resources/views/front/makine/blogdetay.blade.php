@extends('layouts.makina')

@section('title')
    {{ $post->title }}
@endsection


@section('content')


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center ust-bosluk" style="background-image:url({{ asset('images/banner.jpg') }});">
        <div class="overlay-main site-bg-black opacity-06"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{ $post->title }}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('makina.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                        <li>{{ $post->title }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->







    <!-- OUR BLOG START -->
    <div class="section-full p-t120 p-b40 bg-white">
        <div class="container">

            <!-- BLOG SECTION START -->
            <div class="section-content">
                <div class="row d-flex justify-content-center">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b30">
                        <!-- BLOG START -->
                        <div class="blog-post-single-outer">
                            <div class="blog-post-style-2 blog-post-single bg-white p-b30">

                                <div class="wt-post-media">
                                    <img src="{{ asset($post->image) }}" alt="">
                                </div>

                                <div class="wt-post-info">
                                    <div class="wt-post-meta ">
                                        <ul>
                                            <li class="post-date">{{ \Carbon\Carbon::parse($post->created_at)->format('d F Y') }}</li>
                                        </ul>
                                    </div>
                                    <div class="wt-post-title ">
                                        <h3 class="post-title">{{ $post->title }}</h3>
                                    </div>

                                    <div class="wt-post-discription">
                                        {!! $post->content !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
    <!-- OUR BLOG END -->



@endsection
