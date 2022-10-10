@extends('Admin.Layout.main')
@section('title')
    Pendaftaran Ulang
@endsection
@section('description')
    Daftar Siswa yang mendaftar ( Ulang )
@endsection
@section('breadcumb-title', 'Pendaftaran')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-datatable" id="table1">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Asal Sekolah</th>
                        <th>Tingkatan Sekolah</th>
                        <th>Status</th>
                        <th>Status Pendaftaran</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataPendaftar as $dp)
                        <tr>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="assets/images/faces/5.jpg">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">{{ $dp->namaLengkap }}</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $dp->email }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $dp->noTelp }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $dp->status }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $dp->status_pendaftaran }}</p>
                            </td>
                            <td class="col-auto">
                                <div class="me-1 mb-1 d-inline-block d-flex">
                                    <form action="{{ route('hapus.pendaftaranUlang',$dp->id )}}" method="post">
                                            @csrf
                                            @method('delete')
                                        <button type="submit" class="btn btn-danger"> Delete </button>
                                            <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#large{{ $dp->id }}"> Detail
                                        </button>
                                                                    <div class="modal fade text-left" id="large{{ $dp->id }}" tabindex="-1"
                                                                        role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                                            role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="myModalLabel17">Detail Biodata Pendaftar
                                                                                    </h4>
                                                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                                                        aria-label="Close">
                                                                                        <i data-feather="x"></i>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <div class="col-12 col-md-12">
                                                                                        <div class="card">
                                                                                            <div class="card-content">
                                                                                                <div class="card-body">
                                                                                                    <p class="card-text">Berikut adalah detail dari biodata
                                                                                                        pendaftar (Ulang)
                                                                                                    </p>
                                                                                                    <!-- Table with outer spacing -->
                                                                                                    @php
                                                                                                        $data = App\Models\Register::where('id', $dp->id)->first();
                                                                                                    @endphp
                                                                                                    <div class="table-responsive">
                                                                                                        <table class="table table-lg">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th>Nama Pendaftar</th>
                                                                                                                    <th></th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Nama Lengkap
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->namaLengkap }}</td>
                                
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Asal Sekolah
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->asalSekolah }}</td>
                                
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Tingkatan
                                                                                                                        Sekolah
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->tingkatanSekolah }}</td>
                                
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500"> Tempat Lahir
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->tempatLahir }}</td>
                                
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Tanggal Lahir
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->tanggalLahir }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Jenis Kelamin
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->jenisKelamin }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Usia
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->usia }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Tinggi Badan
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->tinggiBadan }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Berat Badan
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->beratBadan }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Agama
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->agama }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Unit Latihan
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->unitLatihan }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Tingkatan
                                                                                                                        Sabuk
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->tingkatanSabuk }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Riwayat
                                                                                                                        Kesehatan
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->riwayatKesehatan }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">No Telp
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->noTelp }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Alamat
                                                                                                                    </td>
                                                                                                                    <td>{{ $data->alamat }}</td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td class="text-bold-500">Foto
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <img src="{{ Storage::url($data->foto) }}"
                                                                                                                            alt="" width="250px"
                                                                                                                            height="250px">
                                
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light-secondary"
                                                                                        data-bs-dismiss="modal">
                                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Close</span>
                                                                                    </button>
                                                                                    <button type="button" class="btn btn-primary ml-1"
                                                                                        data-bs-dismiss="modal">
                                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    </form>

                                     <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                                data-bs-target="#delete{{ $dp->id }}">Perbarui 
                                     </button>

                                                                <div class="modal fade text-left" id="delete{{ $dp->id }}" tabindex="-1"
                                                                    role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                                                        role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title" id="myModalLabel17">Detail Biodata Pendaftar
                                                                                </h4>
                                                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <i data-feather="x"></i>
                                                                                </button>
                                                                            </div>
                                                                                 <!-- Table with outer spacing -->
                                                                             @php
                                                                                 $data = App\Models\Register::where('id', $dp->id)->first();
                                                                             @endphp
                                                                            <form action="{{ route('update.pendaftaran',$data->id)}}" method="post">
                                                                                @csrf
                                                                                @method('put')
                                                                                <div class="modal-body">
                                                                                    <div class="col-12 col-md-12">
                                                                                        <div class="card">
                                                                                            <div class="card-content">
                                                                                                <div class="card-body">
                                                                                                    <h5 class="card-text">Perbarui Status Pendaftaran
                                                                                                    </h5>
                                                                                                    <p> <strong> Status Sekarang : {{$data->status_pendaftaran}} </strong></p>
                                                                                                    <div class="form-group">
                                                                                                        <select class="form-control" name="status_pendaftaran" class="form-control">
                                                                                                            <option value="Berhasil"> Berhasil</option>
                                                                                                            <option value="Menunggu Persetujuan"> Menunggu Persetujuan</option>
                                                                                                            <option value="Ditolak"> Ditolak</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-light-secondary"
                                                                                        data-bs-dismiss="modal">
                                                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Close</span>
                                                                                    </button>
                                                                                    <button type="submit" class="btn btn-primary ml-1"
                                                                                       >
                                                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                                                        <span class="d-none d-sm-block">Accept</span>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="table-responsive">
        <table class="table table-hover table-lg">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Asal Sekolah </th>
                    <th>Tingkatan Sekolah </th>
                    <th>Status</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestasiSD as $ps)
                    <tr>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/5.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">{{ $ps->namaLengkap }}</p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $ps->asalSekolah }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $ps->tingkatanSekolah }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $ps->status }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0"> <button class="btn btn-info">Detail</button> </p>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> --}}
@endsection
