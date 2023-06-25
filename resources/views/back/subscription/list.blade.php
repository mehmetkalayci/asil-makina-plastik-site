@extends('back.layouts.template')

@section('content')
    @include('back.layouts.partials.messages')
    <div class="card mb-4">
        <div class="card-header">

            <div class="d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>Bülten Abonelikleri</div>
            </div>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>Eposta</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subscriptions as $item)
                    <tr>
                        <td>{{ $item->email }}</td>
                        <td>
                            <form action="{{ route('admin.subscription.destroy', $item) }}" method="POST" onsubmit="return confirm('Bu epostayı silmek istediğinize emin misiniz?')">
                                @csrf
                                @method('DELETE')
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
