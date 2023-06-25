@extends('back.layouts.template')


@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>Ayarlar</div>
            </div>
        </div>

        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.config.update', $config) }}">
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
                        <label for="phone" class="col-form-label">Telefon</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ $config->phone }}">
                        @error('phone')
                        <div id="validation-phone" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="email1" class="col-form-label">Eposta 1</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('email1') is-invalid @enderror" name="email1" id="email1" value="{{ $config->email1 }}">
                        <div class="text-danger">*İletişim formundan gönderilen mesajlar bu eposta adresine iletilecektir.</div>
                        @error('email1')
                        <div id="validation-email1" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="email2" class="col-form-label">Eposta 2</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('email2') is-invalid @enderror" name="email2" id="email2" value="{{ $config->email2 }}">
                        @error('email2')
                        <div id="validation-email2" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="email3" class="col-form-label">Eposta 3</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('email3') is-invalid @enderror" name="email3" id="email3" value="{{ $config->email3 }}">
                        @error('email3')
                        <div id="validation-email3" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="address" class="col-form-label">Adres</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ $config->address }}">
                        @error('address')
                        <div id="validation-address" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="gmap_url" class="col-form-label">Google Map Url</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('gmap_url') is-invalid @enderror" name="gmap_url" id="gmap_url" value="{{ $config->gmap_url }}">
                        @error('gmap_url')
                        <div id="validation-gmap_url" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="opening_hours" class="col-form-label">Mesai Saatleri</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('opening_hours') is-invalid @enderror" name="opening_hours" id="opening_hours" value="{{ $config->opening_hours }}">
                        @error('opening_hours')
                        <div id="validation-opening_hours" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="facebook" class="col-form-label">Facebook URL</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook" value="{{ $config->facebook }}">
                        @error('facebook')
                        <div id="validation-facebook" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="instagram" class="col-form-label">Instagram URL</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram" value="{{ $config->instagram }}">
                        @error('instagram')
                        <div id="validation-instagram" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="twitter" class="col-form-label">Twitter URL</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" id="twitter" value="{{ $config->twitter }}">
                        @error('twitter')
                        <div id="validation-twitter" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-lg-2">
                        <label for="linkedin" class="col-form-label">Linkedin URL</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" id="linkedin" value="{{ $config->linkedin }}">
                        @error('linkedin')
                        <div id="validation-linkedin" class="invalid-feedback">{{ $message }}</div>
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
