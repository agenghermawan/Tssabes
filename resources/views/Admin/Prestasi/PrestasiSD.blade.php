@extends('Admin.Layout.main')
@section('title')
    Prestasi SDs
@endsection
@section('description')
    Daftar Prestasi SDs
@endsection
@section('breadcumb-title', 'Prestasi')
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
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prestasiSD as $ps)
                        <tr>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
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
                                <!--Modal lg size -->
                                <div class="me-1 mb-1 d-inline-block">
                                    <!-- Button trigger for large size modal -->
                                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                        data-bs-target="#large{{ $ps->id }}">
                                        Detail
                                    </button>
                                    <!--large size Modal -->
                                    <div class="modal fade text-left" id="large{{ $ps->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel17">Detail Prestasi Remaja
                                                    </h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Detail Prestasi Siswa</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p class="card-text">Berikut adalah detail dari
                                                                        prestasi siswa
                                                                    </p>
                                                                    <!-- Table with outer spacing -->
                                                                    @php
                                                                        $data = App\Models\achievement::where('id', $ps->id)->first();
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
                                                                                    <td class="text-bold-500"> Status
                                                                                    </td>
                                                                                    <td>{{ $data->status }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-bold-500"> Daftar Juara
                                                                                        Siswa
                                                                                    </td>
                                                                                    <td>
                                                                                        <ul>
                                                                                            @foreach ($data->daftarJuara as $item)
                                                                                                <li>
                                                                                                    {{ $item['daftarJuara'] }}
                                                                                                </li>
                                                                                            @endforeach
                                                                                        </ul>
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
