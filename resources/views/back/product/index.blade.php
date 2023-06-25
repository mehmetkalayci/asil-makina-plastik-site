@extends('back.layouts.template')

@section('content')
    @include('back.layouts.partials.messages')
    <div class="card mb-4">
        <div class="card-header">

            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>Ürünler</div>
                <div>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-success"><i
                            class="fas fa-plus"></i>Yeni Ekle</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Resim</th>
                    <th>Ürün Adı</th>
                    <th>Ürün Kodu</th>
                    <th>Site Tipi</th>
                    <th>Dil</th>
                    <th>Url</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $item)
                    <tr>
                        <td><img src="{{ asset($item->image) }}" height="70"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->code }}</td>
                        @switch($item->site)
                            @case('Makine')
                                <td>Makine</td>
                                @break
                            @case('Plastik')
                                <td>Plastik</td>
                                @break
                            @default
                                <td>-</td>
                        @endswitch
                        <td>{{ $item->language }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            <form action="{{ route('admin.products.destroy', $item) }}" method="POST" onsubmit="return confirm('Bu ürünü silmek istediğinize emin misiniz?')">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('admin.products.show', $item) }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-eye"></i> Göster</a>
                                <a href="{{ route('admin.products.edit', $item) }}" class="btn btn-sm btn-primary"><i class="fa-solid fa-edit"></i> Düzenle</a>
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Sil</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables
            // https://github.com/fiduswriter/Simple-DataTables/wiki

            const datatablesSimple = document.getElementById('datatablesSimple');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>
@endsection
