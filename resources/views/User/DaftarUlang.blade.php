@extends('User.Layout.App')
@section('footer', 'fixed-bottom')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <p class="text-center fs-4 font-weight-bold text-primary alert-danger"> Pendaftaran Gagal </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{ asset('image/daftar-ulang.jpg') }}" width="100%" height="400px" alt="">
            </div>
            <div class="col-12 col-md-6">
                <form action="{{ route('daftarulang.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="status" value="Pendaftaran Ulang">
                    <div class="first-form" id="first-form">
                        <h3> Pendaftaran Ulang ( Data diri Peserta ) </h3>
                        <p> Sebelum melakukan pendaftaran baca terlebih dahulu aturan atau tata tertibnya nya <a
                                href="{{ route('Rules') }}">
                                disini </a> </p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Nama Lengkap :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="namaLengkap"
                                        value="{{ old('namaLengkap') }}">
                                    @error('namaLengkap')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tempat Lahir :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tempatLahir"
                                        value="{{ old('tempatLahir') }}">
                                    @error('tempatLahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tanggal Lahir :</label>
                                    <input type="date" class="form-control shadow-sm rounded-xl" name="tanggalLahir"
                                        value="{{ old('tanggalLahir') }}">
                                    @error('tanggalLahir')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Jenis Kelamin :</label>
                                    <select name="jenisKelamin" class="form-control" id="jenisKelamin">
                                        <option value="LakiLaki"> Laki Laki </option>
                                        <option value="Perempuan"> Perempuan </option>
                                    </select>
                                    @error('jenisKelamin')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Usia :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="usia"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        value="{{ old('usia') }}">
                                    @error('usia')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tinggi Badan :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="tinggiBadan"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        value="{{ old('tinggiBadan') }}">
                                    @error('tinggiBadan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Berat Badan :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="beratBadan"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        value="{{ old('beratBadan') }}">
                                    @error('beratBadan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Agama :</label>
                                    <input type="text" name="agama" class="form-control" id="agama" value="{{old('agama')}}">
                                    @error('agama')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Asal Sekolah :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="asalSekolah"
                                        value="{{ old('asalSekolah') }}">
                                    @error('asalSekolah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tingkatan Sekolah (Kelas) :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl"
                                        name="tingkatanSekolah" value="{{ old('tingkatanSekolah') }}">
                                    @error('tingkatanSekolah')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Unit Latihan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="unitLatihan"
                                        value="{{ old('unitLatihan') }}">
                                    @error('unitLatihan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tingkatan Sabuk (Kelas) :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tingkatanSabuk"
                                        value="{{ old('tingkatanSabuk') }}">
                                    @error('tingkatanSabuk')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Riwayat Kesehatan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl"
                                        name="riwayatKesehatan" value="{{ old('riwayatKesehatan') }}">
                                    @error('riwayatKesehatan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Alamat :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="alamat"
                                        value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> No Telepon :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="noTelp"
                                        value="{{ old('noTelp') }}">
                                    @error('noTelp')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 my-3">
                            <label for="foto" class="mb-2"> Foto(Background Putih Menggunakan Baju Tapak Suci)
                            </label>
                            <input type="file" class="form-control" name="foto" value="{{ old('foto') }}">
                            @error('foto')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <p class="text-danger font-weight-bold"> <strong>Ukuran File Tidak Boleh dari 1MB </strong>  </p>
                        <button class="cssbuttons-io-button mt-3" style="width:50%">
                            Daftar Ulang Sekarang
                            <div class="icon">
                                <svg height="24" width="24" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
