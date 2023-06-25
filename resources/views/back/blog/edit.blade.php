@extends('back.layouts.template')


@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>{{ $blog->title }}</div>
            </div>
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.blogs.update', $blog) }}">
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
                    <div class="col-lg-2">
                        <label for="title" class="col-form-label">Başlık</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                               id="title" value="{{ $blog->title }}">
                        @error('title')
                        <div id="validation-title" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="content" class="col-form-label">İçerik</label>
                    </div>
                    <div class="col-lg-10">
                        <textarea id="content" name="content"
                                  class="form-control @error('content') is-invalid @enderror">
                                {!! $blog->content !!}
                        </textarea>

                        @error('content')
                        <div id="validation-description" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="image" class="col-form-label">Kapak Resmi</label>
                    </div>
                    <div class="col-lg-10">
                        <img class="py-2" src="{{ asset($blog->image) }}" height="180" alt="">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" id="image" dirname="image" value="{{ $blog->image }}">
                        @error('image')
                        <div id="validation-image" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="site" class="col-form-label">Site</label>
                    </div>
                    <div class="col-lg-10">
                        <select name="site" id="site"
                                class="form-control  @error('site') is-invalid @enderror" @selected($blog->site) >
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
                        <label for="language" class="col-form-label">Dil</label>
                    </div>
                    <div class="col-lg-10">
                        <select name="language" id="language" class="form-control  @error('language') is-invalid @enderror">
                            <option value="tr" {{ $blog->language == 'tr' ? 'selected' :'' }}>Türkçe</option>
                            <option value="en" {{ $blog->language == 'en' ? 'selected' :'' }}>İngilizce</option>
                            <option value="ar" {{ $blog->language == 'ar' ? 'selected' :'' }}>Arapça</option>
                        </select>
                        @error('language')
                        <div id="validation-site" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-12 d-flex justify-content-end">
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
