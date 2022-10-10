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
                <img src="{{ asset('image/image.jpg') }}" width="100%" height="400px" alt="">
            </div>
            <div class="col-12 col-md-6">
                <form action="{{ route('register.store.user')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="status" value="Pendaftaran Baru">
                    <div class="first-form" id="first-form">
                        <h3> Pendaftaran ( Data diri Peserta ) </h3>
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
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="usia"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
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
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="tinggiBadan"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        value="{{ old('tinggiBadan') }}">
                                    @error('tinggiBadan')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Berat Badan :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="beratBadan" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
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
                                    <input type="text" name="agama" class="form-control" id="agama" value={{old('agama')}}>
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
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tingkatanSekolah"
                                        value="{{ old('tingkatanSekolah') }}">
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
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="riwayatKesehatan"
                                        value="{{ old('riwayatKesehatan') }}">
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
                            <p class="text-danger font-weight-bold"> <strong>Ukuran File Tidak Boleh dari 1MB </strong>  </p>
                        </div>
                     
                        <div class="col-md-12">
                            <label for="akte" class="mb-2"> Akte ( Foto )</label>
                            <input type="file" class="form-control" name="akte" value="{{ old('akte') }}">
                            @error('akte')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                             <p class="text-danger font-weight-bold"> <strong>Ukuran File Tidak Boleh dari 1MB </strong>  </p>
                        </div>
               
                        <a
                        class="cssbuttons-io-button mt-3" style="width:50%"
                        id="hide"
                      >
                        Selanjutnya
                        <div class="icon">
                          <svg
                            height="24"
                            width="24"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path
                              d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                              fill="currentColor"
                            ></path>
                          </svg>
                        </div>
                      </a>
                    </div>

                    <!-- Second Form -->

                    <div class="row my-3" id="second-form" style="display: none">
                        <h3> Pendaftaran ( Data diri Orang Tua / Wali ) </h3>
                        <p> Sebelum melakukan pendaftaran baca terlebih dahulu aturan atau tata tertibnya nya <a
                                href="{{ route('Rules') }}">
                                disini </a> </p>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Nama Orang Tua / Wali :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="namaLengkap_wali"
                                        value="{{ old('namaLengkap_wali') }}">
                                    @error('namaLengkap_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email_wali"> Email :</label>
                                    <input type="email" class="form-control shadow-sm rounded-xl" name="email_wali"
                                        value="{{ old('email_wali') }}">
                                    @error('email_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tempat Lahir :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tempatLahir_wali"
                                        value="{{ old('tempatLahir_wali') }}">
                                    @error('tempatLahir_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tanggal Lahir :</label>
                                    <input type="date" class="form-control shadow-sm rounded-xl" name="tanggalLahir_wali"
                                        value="{{ old('tanggalLahir_wali') }}">
                                    @error('tanggalLahir_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Jenis Kelamin :</label>
                                    <select name="jenisKelamin_wali" class="form-control" id="jenisKelamin">
                                        <option value="LakiLaki"> Laki Laki </option>
                                        <option value="Perempuan"> Perempuan </option>
                                    </select>
                                    @error('jenisKelamin_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Usia :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl"  name="usia_wali" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                        value="{{ old('usia_wali') }}">
                                    @error('usia_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Agama :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl"  name="agama_wali">
                                    @error('agama_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Pekerjaan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl"  name="pekerjaan_wali">
                                    @error('pekerjaan_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alamat_wali"> Alamat :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl"  name="alamat_wali">
                                    @error('alamat_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> No Telp :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl"  name="noTelp_wali">
                                    @error('noTelp_wali')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 my-3">
                            <label for="foto" class="mb-2"> Foto Orang Tua / Wali
                            </label>
                            <input type="file" class="form-control" name="foto_wali" value="{{ old('foto') }}">
                            @error('foto_wali')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <p class="text-danger font-weight-bold"> <strong>Ukuran File Tidak Boleh dari 1MB </strong>  </p>
                        </div>

                        <div class="col-md-12 my-3"><label for="foto" class="mb-2" style="text-align:justify">Menyetujui apa saja yang tertera dalam Peraturan Pusat Pembinaan Pendidikan Latihan (PUSBINDIKLAT) GEMILANG serta mempercayakan penuh terhadap kebijakan pengurus dan pelatih dalam melaksanakan program ini.</label><input type="checkbox" id="aggrement" name="aggrement" value="Agre" required=""><label for="aggrement"> &nbsp; Setuju</label><br></div>
                        <div class="row">
                            <div class="container">

                                <a type="submit" class="btn btn-info my-2"
                                style="
                                border-radius: 20px;
                                padding: 12px 30px;
                                font-weight: 500;
                                color:white"
                                id="back"> Kembali </a>
                                <button type="button" class="btn btn-info"
                                style="
                                border-radius: 20px;
                                padding: 12px 30px;
                                font-weight: 500;
                                color:white" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Lakukan Pendaftaran
                                </button>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pendaftaran</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah data yang dimasukan sudah benar ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            Keluar</button>
                                        <button type="submit" class="btn btn-primary">Lakukan Pendaftaran Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('opsionalJs')
    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("#first-form").hide("slow");
                $("#second-form").fadeIn("slow");
            });
            $("#back").click(function() {
                $("#first-form").fadeIn("slow");
                $("#second-form").hide("slow");
            });

        });
    </script>

@endsection
