@extends('back.layouts.template')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>{{ $slide->title }}</div>
            </div>
        </div>

        <div class="card-body">
                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="title" class="col-form-label">Başlık</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control"  name="title" id="name" value="{{ $slide->title }}" disabled>
                    </div>
                </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="description" class="col-form-label">Açıklama</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control"  name="description" id="description" value="{{ $slide->description }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="site" class="col-form-label">Site</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="site" id="site" value="{{ $slide->site }}" disabled>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="language" class="col-form-label">Dil</label>
                </div>
                <div class="col-lg-10">
                    <input type="text" class="form-control" name="language" id="language" value="{{ $slide->language }}" disabled>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-lg-2">
                    <label for="image" class="col-form-label">Resim</label>
                </div>
                <div class="col-lg-10">
                    <img src="{{ asset($slide->image) }}" height="180" alt="">
                </div>
            </div>

                <div class="row mb-3">
                    <div class="col-lg-12 d-flex justify-content-end">
                        <a href="{{ route('admin.slides.index') }}" class="btn btn-sm btn-sm btn-secondary"><i class="fa-solid fa-arrow-left"></i> Geri</a>
                        &nbsp;
                        <a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-sm btn-sm btn-primary"><i class="fa-solid fa-edit"></i> Düzenle</a>
                        &nbsp;
                        <form action="{{ route('admin.slides.destroy', $slide->id) }}" method="POST" onsubmit="return confirm('Bu sliderı silmek istediğinize emin misiniz?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Sil</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
@endsection
