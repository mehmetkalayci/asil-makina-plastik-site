@extends('layouts.makina')

@section('title')
    {{ __('Hakkımızda') }}
@endsection


@section('content')

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center ust-bosluk" style="background-image:url({{ asset('images/banner.jpg') }});">
        <div class="overlay-main site-bg-black opacity-06"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{ __('Hakkımızda') }}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('makina.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                        <li>{{ __('Hakkımızda') }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- ABOUT ONE SECTION START -->
    <div class="section-full p-t120 p-b90 bg-no-repeat bg-center bg-gray-light">
        <div class="about-section-one">
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-center d-flex">
                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-section-one-right">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>{{ __('Hakkımızda') }}</div>

                                    </div>
                                    <h2>{{ $about->title }}</h2>
                                </div>
                                <!-- TITLE END-->

                                <div class="about-one">
                                    <div class="about-year">
                                        <div class="about-year-info">
                                            <span>25</span>
                                            <p>Year of Success</p>
                                        </div>
                                        {!! $about->about !!}
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="wt-icon-box-wraper left bg-black m-b30">
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte">Best Quality Services</h4>
                                                    <p>Train with the best experts in body building field.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="wt-icon-box-wraper left bg-black m-b30">
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte">Lean Machines</h4>
                                                    <p>Our personal trainers will help you
                                                        find a perfect workout.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-max-one">
                                <div class="about-max-one-media"><img src="{{ asset($about->image) }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT ONE SECTION END -->



    <div class="section-full bg-white">

        <div class="container-fluid future-section-outer ">
            <div class="row">
                <div class="col-xl-6 col-lg-6 future-section-left bg-cover" style="background-image:url({{ asset('images/background/bg12.jpg') }});">
                </div>
                <div class="col-xl-6 col-lg-6 future-section-right bg-white">
                    <div class="future-sec-right-content">
                        <div class="future-right-inner">
                            <div class="section-head left wt-small-separator-outer">
                                <div class="wt-small-separator site-text-primary">
                                    <div class="sep-leaf-left"></div>
                                    <div>Build Future</div>
                                </div>
                                <h2 class="wt-title">We provide the highest
                                    quality of work that meets
                                    your expectations</h2>
                            </div>

                            <div class="our-future">
                                <span class="progressText "><b>Industry</b></span>
                                <div class="progress">
                                    <div class="progress-bar site-bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 92%;" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div><span> 80%</span>
                                </div>


                                <span class="progressText "><b>Construction</b></span>
                                <div class="progress">
                                    <div class="progress-bar site-bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div><span> 90%</span>
                                </div>

                                <span class="progressText "><b>Factory</b></span>
                                <div class="progress">
                                    <div class="progress-bar site-bg-primary progress-bar-striped progress-bar-animated" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div><span>95%</span>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- VISION SECTION -->
    <div class="section-full p-t120  p-b90 site-bg-white" style="background-image: url({{ asset('images/background/bg-dott.png') }});">

        <div class="container">
            <div class="row d-flex justify-content-center">
                <!-- COLUMNS 1 -->
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="service-icon-box-two text-center bg-white">

                        <div class="wt-icon-box-wraper">
                            <div class="icon-xl inline-icon">
                                <span class="icon-cell site-text-primary"><i class="flaticon-briefing"></i></span>
                            </div>
                        </div>

                        <div class="service-icon-box-title">
                            <h4 class="wt-title"><a href="#0">{{ __('Misyonumuz') }}</a></h4>
                        </div>

                        <div class="service-icon-box-content">
                            <p>{{ $about->mission }}</p>
                        </div>

                    </div>
                </div>

                <!-- COLUMNS 2 -->
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="service-icon-box-two text-center site-bg-black">

                        <div class="wt-icon-box-wraper">
                            <div class="icon-xl inline-icon">
                                <span class="icon-cell site-text-primary"><i class="flaticon-checked"></i></span>
                            </div>
                        </div>

                        <div class="service-icon-box-title">
                            <h4 class="wt-title"><a href="#0">{{ __('Vizyonumuz') }}</a></h4>
                        </div>

                        <div class="service-icon-box-content">
                            <p>{{ $about->vision }}</p>
                        </div>

                    </div>
                </div>

                <!-- COLUMNS 3 -->
                <div class="col-lg-4 col-md-6 m-b30">
                    <div class="service-icon-box-two text-center bg-white">

                        <div class="wt-icon-box-wraper">
                            <div class="icon-xl inline-icon">
                                <span class="icon-cell site-text-primary"><i class="flaticon-worker"></i></span>
                            </div>
                        </div>

                        <div class="service-icon-box-title">
                            <h4 class="wt-title"><a href="#0">{{ __('Değerlerimiz') }}</a></h4>
                        </div>

                        <div class="service-icon-box-content">
                            <p>{{ $about->values }}</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>



    </div>
    <!-- /VISION SECTION -->


@endsection
