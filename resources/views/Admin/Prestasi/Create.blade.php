@extends('Admin.Layout.main')

@section('title')
    Tambahkan Prestasi
@endsection
@section('content')
    <div style="font-family: Nunito" class="p-3">
        <form action="{{ route('prestasi.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
            </div>
            <div class="mb-3">
                <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asalSekolah" name="asalSekolah">
            </div>
            <div class="mb-3">
                <label for="tingkatanSekolah" class="form-label">Tingkatan Sekolah</label>
                <input type="text" class="form-control" id="tingkatanSekolah" name="tingkatanSekolah">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status Prestasi</label>
                <select name="status" id="" class="form-control">
                    <option value="Prestasi SD"> Prestasi SD </option>
                    <option value="Prestasi Remaja"> Prestasi Remaja </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="daftarJuara"> Daftar Juara</label>
                <div class="repeater">
                    <div data-repeater-list="daftarJuara">
                        <div data-repeater-item>
                            <div class="row mb-3">
                                <div class="col-12 col-md-10">
                                    <input class="form-control" name="daftarJuara" type="text" placeholder="Daftar Juara">
                                </div>
                                <div class="col-12 col-md-2">
                                    <button data-repeater-delete type="button" class="btn btn-danger" value="Delete" />
                                    <i class="fas fa-trash mr-1"></i> Hapus </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-repeater-create type="button" value="Add" class="btn btn-info" />
                    <i class="fas fa-plus-square mr-1"></i> Tambahkan tindakan medis </button>
                </div>
            </div>

            <button type="submit" class="btn btn-primary"> Submit data Prestasi </button>
        </form>
    </div>
@endsection

@section('opsionalJS')
    <script>
        $('.repeater').repeater({
            show: function() {
                $(this).slideDown();
            }
        });
    </script>
@endsection

@section('optionalCSS')
@endsection
