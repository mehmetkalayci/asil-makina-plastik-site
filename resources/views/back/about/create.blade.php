@extends('back.layouts.template')



@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>Hakkımızda Yazısı Ekle</div>
            </div>
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.about.store') }}">
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
                {{ @csrf_field() }}

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="title" class="col-form-label">Başlık</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
                        @error('title')
                        <div id="validation-title" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="about">Hakkımızda</label>
                        <textarea id="about" name="about" class="form-control @error('about') is-invalid @enderror">
                            {{ old('about') }}
                        </textarea>

                        @error('about')
                        <div id="validation-about" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <label for="about_footer" class="col-form-label">Footer Hakkımızda</label>
                        <textarea class="form-control @error('about_footer') is-invalid @enderror" id="about_footer" name="about_footer" rows="4" maxlength="1024">{{ old('about_footer') }}</textarea>
                        @error('about_footer')
                        <div id="validation-about_footer" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-4">
                            <label for="mission">Misyon</label>
                            <textarea class="form-control @error('mission') is-invalid @enderror" id="mission" name="mission" rows="4" maxlength="1024">{{ old('mission') }}</textarea>
                            @error('mission')
                            <div id="validation-mission" class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="vision">Vizyon</label>
                        <textarea class="form-control @error('vision') is-invalid @enderror" id="vision" name="vision" rows="4" maxlength="1024">{{ old('vision') }}</textarea>
                        @error('vision')
                        <div id="validation-vision" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-4">
                        <label for="values">Değerlerimiz</label>
                        <textarea class="form-control @error('values') is-invalid @enderror" id="values" name="values" rows="4" maxlength="1024">{{ old('values') }}</textarea>
                        @error('values')
                        <div id="validation-values" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">

                    <div class="col-lg-4">
                        <label for="promotional_film" class="col-form-label">Tanıtım Filmi URL</label>
                        <input type="text" class="form-control @error('promotional_film') is-invalid @enderror" name="promotional_film" id="promotional_film" value="{{ old('promotional_film') }}">
                        @error('promotional_film')
                        <div id="validation-promotional_film" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-4">
                        <label for="site" class="col-form-label">Site</label>
                        <select name="site" id="site" class="form-control  @error('site') is-invalid @enderror" @selected(old('site')) >
                            <option value="Makine">Makine</option>
                            <option value="Plastik">Plastik</option>
                        </select>
                        @error('site')
                        <div id="validation-site" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-lg-4">
                        <label>Dil</label>
                        <br>
                        <input class="form-check-input @error('language') is-invalid @enderror" type="checkbox" value="tr" id="tr"  name="language[]">
                        <label class="form-check-label" for="tr">Türkçe</label>

                        <input class="form-check-input @error('language') is-invalid @enderror" type="checkbox" value="en" id="en"  name="language[]">
                        <label class="form-check-label" for="en">İngilizce</label>

                        <input class="form-check-input @error('language') is-invalid @enderror" type="checkbox" value="ar" id="ar"  name="language[]">
                        <label class="form-check-label" for="ar">Arapça</label>
                        @error('language')
                        <div id="validation-language" class="invalid-feedback">{{ $message }}</div>
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

