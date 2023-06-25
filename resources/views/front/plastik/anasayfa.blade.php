@extends('layouts.plastik')

@section('title')
    {{ __('Anasayfa') }}
@endsection


@section('content')



    <!-- SLIDER START -->
    <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="goodnews-header" data-source="gallery" style="background:#eeeeee;padding:0px;">
        <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.3.1">
            <ul>

                @foreach($slides as $slide)

                    <!-- SLIDE 1 -->
                    <li data-index="rs-{{ $slide->id }}"
                        data-transition="fade"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="default"
                        data-thumb="{{ asset($slide->image) }}"
                        data-rotate="0"
                        data-fstransition="fade"
                        data-fsmasterspeed="300"
                        data-fsslotamount="7"
                        data-saveperformance="off"
                        data-title="Slide Title"
                        data-param1="Additional Text"
                        data-param2=""
                        data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset($slide->image) }}"  alt=""  data-lazyload="{{ asset($slide->image) }}" data-bgposition="center center"
                             data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 [ for overlay ] -->
                        <div class="tp-caption tp-shape tp-shapewrapper "
                             id="slide-{{ $slide->id }}-layer-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="nowrap"
                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[
                            {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                            ]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 1;background-color:rgba(0, 0, 0, 0);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 3 [ Black Box ] -->
                        {{--                        <div class="tp-caption   tp-resizeme"--}}
                        {{--                             id="slide-{{ $slide->id }}-layer-3"--}}
                        {{--                             data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"--}}
                        {{--                             data-y="['middle','middle','middle','middle']" data-voffset="['-160','-160','-140','-140']"--}}
                        {{--                             data-fontsize="['20','20','20','20']"--}}
                        {{--                             data-lineheight="['56','56','56','50']"--}}
                        {{--                             data-width="['700','700','96%','96%']"--}}
                        {{--                             data-height="['none','none','none','none']"--}}
                        {{--                             data-whitespace="['normal','normal','normal','normal']"--}}

                        {{--                             data-type="text"--}}
                        {{--                             data-responsive_offset="on"--}}
                        {{--                             data-frames='[--}}
                        {{--                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},--}}
                        {{--                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}--}}
                        {{--                            ]'--}}
                        {{--                             data-textAlign="['left','left','left','left']"--}}
                        {{--                             data-paddingtop="[0,0,0,0]"--}}
                        {{--                             data-paddingright="[0,0,0,0]"--}}
                        {{--                             data-paddingbottom="[0,0,0,0]"--}}
                        {{--                             data-paddingleft="[0,0,0,0]"--}}

                        {{--                             style="z-index: 13;--}}
                        {{--                            white-space: normal;--}}
                        {{--                            font-weight: 600;--}}
                        {{--                            color:#000;--}}
                        {{--                            border-width:0px;">--}}
                        {{--                            <div class="text-uppercase"><span class="light-number">01 - </span>We Make Sure</div>--}}
                        {{--                        </div>--}}



                        <!-- LAYER NR. 4 [ for title ] -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-{{ $slide->id }}-layer-4"
                             data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-60']"
                             data-fontsize="['56','56','38','28']"
                             data-lineheight="['66','66','48','38']"
                             data-width="['700','700','96%','96%']"
                             data-height="['none','none','none','none']"
                             data-whitespace="['normal','normal','normal','normal']"

                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[5,5,5,5]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 13;
                            white-space: normal;
                            font-weight: 800;
                            color:#fff;
                            border-width:0px;">
                            <div style="font-family: 'Poppins', sans-serif;text-transform:uppercase;">
                                <span>{{ $slide->title }}</span>
                            </div>

                        </div>

                        <!-- LAYER NR. 5 [ for paragraph] -->
                        <div class="tp-caption  tp-resizeme"
                             id="slide-{{ $slide->id }}-layer-5"
                             data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
                             data-fontsize="['16','16','16','14']"
                             data-lineheight="['30','30','30','22']"
                             data-width="['600','600','90%','90%']"
                             data-height="['none','none','none','none']"
                             data-whitespace="['normal','normal','normal','normal']"

                             data-type="text"
                             data-responsive_offset="on"
                             data-frames='[
                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                            ]'
                             data-textAlign="['left','left','left','left']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 13;
                            font-weight: 500;
                            color:#fff;
                            border-width:0px;">
                            <span style="font-family: 'Poppins', sans-serif;">{{ $slide->description }}</span>
                        </div>

                        <!-- LAYER NR. 6 [ for see all service botton ] -->
                        {{--                        <div class="tp-caption tp-resizeme"--}}
                        {{--                             id="slide-{{ $slide->id }}-layer-6"--}}
                        {{--                             data-x="['left','left','left','left']" data-hoffset="['150','150','30','30']"--}}
                        {{--                             data-y="['middle','middle','middle','middle']" data-voffset="['150','150','150','150']"--}}
                        {{--                             data-lineheight="['none','none','none','none']"--}}
                        {{--                             data-width="['300','300','300','300']"--}}
                        {{--                             data-height="['none','none','none','none']"--}}
                        {{--                             data-whitespace="['normal','normal','normal','normal']"--}}

                        {{--                             data-type="text"--}}
                        {{--                             data-responsive_offset="on"--}}
                        {{--                             data-frames='[--}}
                        {{--                            {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},--}}
                        {{--                            {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}--}}
                        {{--                            ]'--}}
                        {{--                             data-textAlign="['left','left','left','left']"--}}
                        {{--                             data-paddingtop="[0,0,0,0]"--}}
                        {{--                             data-paddingright="[0,0,0,0]"--}}
                        {{--                             data-paddingbottom="[0,0,0,0]"--}}
                        {{--                             data-paddingleft="[0,0,0,0]"--}}

                        {{--                             style="z-index:13;">--}}
                        {{--                            <a href="about-1.html" class="site-button">Read More</a>--}}
                        {{--                        </div>--}}

                        <!-- Border Part -->
                        <div class="tp-caption tp-shape tp-shapewrapper "
                             id="slide-{{ $slide->id }}-layer-8"
                             data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="nowrap"
                             data-visibility="['on','on','off','off']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="off"
                             data-responsive="off"
                             data-frames='[{"delay":50,"speed":100,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power3.easeIn"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 10;background-color:rgba(0, 0, 0, 0);border-color:rgb(255,255,255);border-style:solid;border-width:0px 50px 0px 50px;"></div>
                    </li>


                @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
    </div>
    <!-- SLIDER END -->




    <!-- ABOUT COMPANY -->
    <div class="section-full p-t120 p-b90 half-section-outer">
        <div class="half-section-bg-plat"></div>
        <div class="container">

            <!-- IMAGE CAROUSEL START -->
            <div class="section-content clearfix">
                <div class="half-section">
                    <div class="row">


                        @foreach($products as $item)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="wt-box m-b30">
                                    <div class="wt-media  hover-box-style-1">
                                        <img src="{{ asset($item->image) }}" alt="">
                                        <div class="hover-box-content">
                                            <div class="wt-icon-box-wraper center site-bg-white">
                                                <div class="icon-content">
                                                    <h4 class="wt-tilte m-b10">{{ $item->name }}</h4>
                                                    <p>{{ $item->code }}</p>
                                                    <a href="{{ route('plastik.urunler.detay', ['slug' => $item->slug]) }}"
                                                       class="site-button-link">{{ __('Tümünü Gör') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="row">
                        <div class="col-12 d-flex  justify-content-end">
                            <a href="{{ route('plastik.urunler') }}" class="site-button-link black">
                                Tüm Ürünler
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ABOUT COMPANY END -->


    <!-- ABOUT ONE SECTION START -->
    <div class="section-full p-t120 p-b90 bg-no-repeat bg-center bg-gray-light">
        <div class="about-section-two">
            <div class="container">
                <div class="section-content">
                    <div class="row justify-content-center d-flex">

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-section-three-right">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                        <div class="sep-leaf-left"></div>
                                        <div>{{ __('Hakkımızda') }}</div>

                                    </div>
                                    <h2>{{ $about->title }}</h2>
                                </div>
                                <!-- TITLE END-->

                                <div class="row ab-three-icon-section">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="wt-icon-box-wraper center bg-black m-b30 site-bg-gray-light p-a20">
                                                    <span class="icon-md p-t10 m-b20">
                                                        <i class="flaticon-briefing"></i>
                                                    </span>
                                            <div class="icon-content">
                                                <h4 class="wt-tilte">Research & Analysis</h4>
                                                <p>Train with the best experts in body building field.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="wt-icon-box-wraper center bg-black m-b30 site-bg-gray-light p-a20">
                                                    <span class="icon-md p-t10 m-b20">
                                                        <i class="flaticon-reliability"></i>
                                                    </span>
                                            <div class="icon-content">
                                                <h4 class="wt-tilte">Quality Product</h4>
                                                <p>Our personal trainers will help you
                                                    find a perfect workout.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ab-three-info">
                                    <p>{!! Str::limit($about->about, 400) !!}</p>
                                    <a href="{{ route('plastik.hakkimizda') }}"
                                       class="site-button sb-bdr-dark">{{ __('Tümünü Gör') }}</a>
                                </div>
                            </div>


                        </div>

                        <div class="col-lg-6 col-md-12 m-b30">
                            <div class="about-max-four">
                                <div class="about-max-four-media"><img src="{{ asset('images/intro-pic4.png') }}"
                                                                       alt=""></div>
                                <div class="about-four">
                                    <div class="about-year">
                                        <div class="about-year-info">
                                            <span>25+</span>
                                            <p>Years of Working Experience in this field</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT ONE SECTION END -->


    <!-- SOME FACTS START -->
    <div class="section-full bg-cover" style="background-image:url({{ asset('images/background/bg10.jpg') }});">
        <div class="container">
            <div class="section-content">
                <div class="row justify-content-center d-flex align-items-center">

                    <div class="col-lg-6 col-md-12 m-b30">
                        <!-- TITLE START-->
                        <div class="section-head left wt-small-separator-outer when-bg-dark">
                            <div class="wt-small-separator site-text-primary">
                                <div class="sep-leaf-left"></div>
                                <div>Some Facts</div>
                            </div>
                            <h2 class="wt-title">Tanıtım filmi alanı
                            </h2>

                        </div>
                        <!-- TITLE END-->
                        <div class="p-t30">
                            <a href="{{ route('plastik.hakkimizda') }}" class="site-button sb-bdr-dark">{{ __('Tümünü Gör') }}</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="c-section-one">
                            <div class="video-section-first overlay-wraper bg-cover"
                                 style="background-image: url({{ asset('images/background/bg-2.jpg') }});">
                                <div class="overlay-main site-bg-primary opacity-07"></div>
                                <a href="{{ $about->promotional_film }}" class="mfp-video play-now-video">
                                    <i class="icon fa fa-play"></i>
                                    <span class="ripple"></span>
                                </a>
                            </div>


                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- SOME FACTS END -->


    <!-- HELP SECTION START -->
    <div class="section-full p-t90 p-b90">
        <div class="container">
            <div class="help-blocks">
                <div class="row justify-content-center no-gutters">

                    <!--Block 1-->
                    <div class="col-lg-4 col-md-6 site-bg-primary">
                        <div class="help-block-content  white">
                            <div class="wt-icon-box-wraper left">
                                <div class="wt-icon-box-sm">
                                    <span class="icon-cell site-bg-dark"><i class="flaticon-lightbulb"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte">Creative Ideas</h4>
                                    <p>Train with the best experts in bodybuilding field.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Block 2-->
                    <div class="col-lg-4 col-md-6 site-bg-gray">
                        <div class="help-block-content ">
                            <div class="wt-icon-box-wraper left">
                                <div class="wt-icon-box-sm">
                                    <span class="icon-cell site-bg-dark"><i
                                            class="flaticon-customer-service"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte">24/7 Support</h4>
                                    <p>Train with the best experts in bodybuilding field.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Block 3-->
                    <div class="col-lg-4 col-md-6  site-bg-black">
                        <div class="help-block-content white">
                            <div class="wt-icon-box-wraper left">
                                <div class="wt-icon-box-sm">
                                    <span class="icon-cell site-bg-dark"><i class="flaticon-antivirus"></i></span>
                                </div>
                                <div class="icon-content">
                                    <h4 class="wt-tilte">Super Safety</h4>
                                    <p>Train with the best experts in bodybuilding field.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- HELP SECTION End -->

@endsection
