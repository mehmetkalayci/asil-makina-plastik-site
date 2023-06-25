@extends('back.layouts.template')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>{{ $about->title }}</div>
            </div>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="name" class="col-form-label">Hakkımızda Sayfa Başlık</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control " name="name" id="name" value="{{ $about->title }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="about" class="col-form-label">Hakkımızda Sayfa İçerik</label>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="5"  name="about" id="about" disabled>{{ $about->about }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="about_footer" class="col-form-label">Footer Hakkımızda İçerik</label>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="5"  name="footer_about" id="about_footer" disabled>{{ $about->about_footer }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="mission" class="col-form-label">Misyon</label>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="5"  name="mission" id="mission" disabled>{{ $about->mission }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="vision" class="col-form-label">Vizyon</label>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="5"  name="vision" id=vision" disabled>{{ $about->vision }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="values" class="col-form-label">Değerlerimiz</label>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="5"  name="values" id=values" disabled>{{ $about->values }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="language" class="col-form-label">Dil</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="language" id="language" value="{{ $about->language }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="slug" class="col-form-label">Site</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $about->site }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="name" class="col-form-label">Hakkımızda Sayfa Resim</label>
                </div>
                <div class="col-lg-10">
                    <img src="{{ asset($about->image) }}" height="180">
                </div>
            </div>



            <div class="row mb-3">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <a href="{{ route('admin.about.index') }}" class="btn btn-sm btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Geri</a>
                        &nbsp;
                        <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-sm btn-sm btn-primary"><i class="fa-solid fa-edit"></i> Düzenle</a>
                        &nbsp;
                        <form action="{{ route('admin.about.destroy', $about) }}" method="POST" onsubmit="return confirm('Bu ürünü silmek istediğinize emin misiniz?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Sil</button>
                        </form>
                    </div>
                </div>
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
            .create(document.querySelector('#about'), {}).then(editor => {
            editor.enableReadOnlyMode('my-feature-id');
        })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
