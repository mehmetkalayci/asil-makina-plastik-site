@extends('back.layouts.template')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>{{ $about->title }}</div>
            </div>
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.about.update', $about) }}">
                @csrf
                @method('PUT')

                <!--
                <div class="row mx-1">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
@foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                </div>
                -->

                @if(session('success'))
                    <div class="row mx-1">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="title" class="col-form-label">Başlık</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $about->title }}">
                        @error('title')
                        <div id="validation-title" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="about">Hakkımızda</label>
                        <textarea id="about" name="about" class="form-control @error('about') is-invalid @enderror">
                            {{ $about->about }}
                        </textarea>

                        @error('about')
                        <div id="validation-about" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="about_footer" class="col-form-label">Footer Hakkımızda</label>
                        <textarea class="form-control @error('about_footer') is-invalid @enderror" id="about_footer" name="about_footer" rows="4" maxlength="1024">{{ $about->about_footer }}</textarea>
                        @error('about_footer')
                        <div id="validation-about_footer" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-4">
                        <label for="mission">Misyon</label>
                        <textarea class="form-control" id="mission" name="mission" rows="4" maxlength="1024">{{ $about->mission }}</textarea>

                        @error('mission')
                        <div id="validation-mission" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="vision">Vizyon</label>
                        <textarea class="form-control" id="vision" name="vision" rows="4" maxlength="1024">{{ $about->vision }}</textarea>

                        @error('vision')
                        <div id="validation-vision" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="values">Değerlerimiz</label>
                        <textarea class="form-control" id="values" name="values" rows="4" maxlength="1024">{{ $about->values }}</textarea>

                        @error('values')
                        <div id="validation-values" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">

                    <div class="col-lg-4">
                        <label for="promotional_film" class="col-form-label">Tanıtım Filmi URL</label>
                        <input type="text" class="form-control @error('promotional_film') is-invalid @enderror" name="promotional_film" id="promotional_film" value="{{ $about->promotional_film }}">
                        @error('title')
                        <div id="validation-promotional_film" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="site" class="col-form-label">Site</label>
                        <select name="site" id="site" class="form-control  @error('site') is-invalid @enderror">
                            <option {{ $about->site == 'Makine' ? 'selected' :'' }} value="Makine">Makine</option>
                            <option {{ $about->site == 'Plastik' ? 'selected' :'' }} value="Plastik">Plastik</option>
                        </select>
                        @error('site')
                        <div id="validation-site" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                        <div class="col-lg-4">
                            <label for="language" class="col-form-label">Dil</label>
                            <select name="language" id="language" class="form-control  @error('language') is-invalid @enderror">
                                <option value="tr" {{ $about->language == 'tr' ? 'selected' :'' }}>Türkçe</option>
                                <option value="en" {{ $about->language == 'en' ? 'selected' :'' }}>İngilizce</option>
                                <option value="ar" {{ $about->language == 'ar' ? 'selected' :'' }}>Arapça</option>
                            </select>
                            @error('language')
                            <div id="validation-site" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>

                </div>


                <div class="row mb-3">
                    <div class="col-lg-4">
                        <label for="image" class="form-label">Hakkımızda Sayfası Resim</label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">

                        @error('image')
                        <div id="validation-image" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="image" class="form-label">Mevcut Resim</label>
                        <img src="{{ asset($about->image) }}" height="180">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button href="#" class="btn btn-sm btn-primary">Kaydet</button>
                    </div>
                </div>


            </form>
        </div>
    </div>


@endsection
@section('styles')
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 500px;
        }
    </style>
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#about' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

