@extends('Admin.Layout.main')
@section('title')
    Daftar Peserta
@endsection
@section('description')
    Daftar Peserta
@endsection
@section('breadcumb-title', 'Pendaftaran')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-datatable" id="table1">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Alamat </th>
                        <th>Tanggal Lahir</th>
                        <th>Statistic Peserta</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['user'] as $item)
                        <tr>
                            <td>
                                {{ $item->namaLengkap }}
                            </td>
                            <td>
                                {{ $item->alamat }}
                            </td>
                            <td>
                                {{ $item->tanggalLahir }}
                            </td>
                            <td>
                                <a class="btn btn-info"> Statistic </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
