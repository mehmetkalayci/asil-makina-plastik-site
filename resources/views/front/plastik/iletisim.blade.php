@extends('layouts.plastik')

@section('title')
    {{ __('İletişim') }}
@endsection


@section('content')

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center ust-bosluk" style="background-image:url({{ asset('images/banner.jpg') }});">
        <div class="overlay-main site-bg-black opacity-06"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">{{ __('İletişim') }}</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('plastik.anasayfa') }}">{{ __('Anasayfa') }}</a></li>
                        <li>{{ __('İletişim') }}</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- CONTACT FORM -->
    <div class="section-full  p-t120 p-b120">
        <div class="section-content">
            <div class="container">
                <div class="contact-one">
                    <!-- CONTACT FORM-->
                    <div class="row no-gutters d-flex justify-content-center flex-wrap align-items-center">

                        <div class="col-lg-7 col-md-12">
                            <div class="contact-form-outer site-bg-gray">
                                <form class="cons-contact-form" method="post"
                                      action="{{ route('plastik.iletisim.gonder') }}">
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
                                                <input name="adsoyad" type="text" required class="form-control"
                                                       placeholder="{{ __('Ad Soyad') }}" value="{{ old('adsoyad') }}">
                                                @error('adsoyad')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input name="eposta" type="text" class="form-control" required
                                                       placeholder="{{ __('Eposta') }}" value="{{ old('eposta') }}">
                                                @error('eposta')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <input name="telefon" type="text" class="form-control" required
                                                       placeholder="{{ __('Telefon') }}" value="{{ old('telefon') }}">
                                                @error('telefon')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <input name="konu" type="text" class="form-control" required
                                                       placeholder="{{ __('Konu') }}" value="{{ old('konu') }}">
                                                @error('konu')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="mesaj" class="form-control" rows="4"
                                                          placeholder="{{ __('Mesaj') }}">{{ old('mesaj') }}</textarea>
                                                @error('mesaj')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
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
                                            <button type="submit"
                                                    class="site-button sb-bdr-dark">{{ __('Gönder') }}</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-12">
                            <div class="contact-info site-bg-blue"
                                 style="background-image: url({{ asset('images/background/footer-map.png') }});">
                                <!-- TITLE START-->
                                <div class="section-head left wt-small-separator-outer when-bg-dark">
                                    <h3 class="wt-title">{{ __('İletişim Bilgilerimiz') }}</h3>
                                </div>
                                <!-- TITLE END-->

                                <div class="contact-info-section">

                                    <div class="c-info-column">
                                        <span class="m-t0">{{ __('Adres') }}</span>
                                        <a href="{{ $gmap_url }}" target="_blank">{{ $address }}</a>
                                    </div>

                                    <div class="c-info-column">
                                        <span class="m-t0">{{ __('Telefon') }}</span>
                                        <p><a href="tel:{{ $phone }}">{{ $phone }}</a></p>
                                    </div>

                                    <div class="c-info-column">
                                        <span class="m-t0">{{ __('Eposta') }}</span>
                                        <p>
                                            <a href="mailto:{{ $email1 }}">{{ $email1 }}</a>
                                        </p>
                                        <p><a href="mailto:{{ $email2 }}">{{ $email2 }}</a>
                                        </p>
                                        <p><a href="mailto:{{ $email3 }}">{{ $email3 }}</a>
                                        </p>
                                    </div>

                                    <div class="c-info-column">
                                        <span class="m-t0">{{ __('Mesai Saatleri') }}</span>
                                        <p>{{ $opening_hours }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- GOOGLE MAP -->
    <div class="section-full">
        <div class="gmap-outline">
            <div id="gmap_canvas2" class="google-map">
                <div class="row">
                    <div style="overflow: hidden;resize: none;max-width: 100%;height: 500px;width: 100%;">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                                src="https://www.google.com/maps/embed/v1/search?q=BÜYÜKKAYACIKOSB+MAH,+ASİL+GERİ+DÖNÜŞÜM+PLASTİK+MAKİNE+SAN.VE+TİC.LTD.ŞTİ.,+Kuddusi+Caddesi,+Büyükkayacık+Osb/Selçuklu/Konya,+Türkiye&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
