@extends('back.layouts.template')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>{{ $product->name }}</div>
            </div>
        </div>

        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="name" class="col-form-label">Ürün Resim</label>
                </div>
                <div class="col-lg-10">
                    <img src="{{ asset($product->image) }}" >
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="name" class="col-form-label">Ürün Adı</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control"  name="name" id="name" value="{{ $product->name }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="code" class="col-form-label">Ürün Kodu</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control"  name="code" id="code" value="{{ $product->code }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="description" class="col-form-label">Açıklama</label>
                </div>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="10"  name="description" id="description" disabled>{{ $product->description }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="site" class="col-form-label">Site</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="site" id="site" value="{{ $product->site }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="language" class="col-form-label">Dil</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="language" id="language" value="{{ $product->language }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="slug" class="col-form-label">Url</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ $product->slug }}" disabled>
                </div>
            </div>

                <div class="row mb-3">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Geri</a>
                        &nbsp;
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-sm btn-primary"><i class="fa-solid fa-edit"></i> Düzenle</a>
                        &nbsp;
                        <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Bu ürünü silmek istediğinize emin misiniz?')">
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
            .create(document.querySelector('#description'), {}).then(editor => {
            editor.enableReadOnlyMode('my-feature-id');
        })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
