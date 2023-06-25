@extends('back.layouts.template')


@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>Slider Ekle</div>
            </div>
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.slides.store') }}">
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
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                               id="title" value="{{ old('title') }}">
                        @error('name')
                        <div id="validation-title" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="description" class="col-form-label">Açıklama</label>
                    </div>
                    <div class="col-lg-10">
                        <textarea name="description" id="description" class="form-control  @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                        @error('description')
                        <div id="validation-description" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="image" class="col-form-label">Slider Resim</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image" id="image" dirname="image">
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
                                class="form-control  @error('site') is-invalid @enderror" @selected(old('site')) >
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
                    <div class="col-lg-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary">Kaydet</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
