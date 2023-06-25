@extends('back.layouts.template')


@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>Blog Yazısı Ekle</div>
            </div>
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogs.store') }}">
                @csrf
                @method('POST')
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
                    <div class="col-lg-2">
                        <label for="title" class="col-form-label">Başlık</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
                        @error('title')
                        <div id="validation-title" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="content" class="col-form-label">İçerik</label>
                    </div>
                    <div class="col-lg-5">
                        <textarea id="content" name="content"
                                  class="form-control @error('content') is-invalid @enderror">
                                {!! old('content') !!}
                        </textarea>

                        @error('content')
                        <div id="validation-content" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="image" class="col-form-label">Kapak Resmi</label>
                    </div>
                    <div class="col-lg-5">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" id="image">
                        @error('image')
                        <div id="validation-image" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="site" class="col-form-label">Site</label>
                    </div>
                    <div class="col-lg-5">
                        <select name="site" id="site" class="form-control  @error('site') is-invalid @enderror" @selected(old('site')) >
                            <option value="Makine">Makine</option>
                            <option value="Plastik">Plastik</option>
                        </select>
                        @error('site')
                        <div id="validation-site" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>





                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label>Dil</label>
                        @error('language')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-5">
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
                    <div class="col-lg-7 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary">Kaydet</button>
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
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
