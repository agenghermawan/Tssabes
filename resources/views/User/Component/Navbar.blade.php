    <section class="h-100 w-100 bg-white" style="box-sizing:border-box">
    <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body"
        style="font-family:'Poppins',sans-serif">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('image/logo.jpeg') }}" width="42px" height="42px" alt="Logo"></img>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-md-4 active" href="{{ route('Home') }}" aria-current="page">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="{{ route('Profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="{{ route('AboutMe') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="{{ route('Rules') }}">Tata Tertib </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="{{ route('Prestasi') }}">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-md-4" href="{{ route('absensi.index') }}">Absensi</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-get-started btn-get-started-blue text-white"
                        href="{{ route('Register-user') }}">
                        Daftar Sekarang
                    </a>
                </div>
                &nbsp;
                @php
                    $daftarUlang = App\Models\Fitur::first();
                @endphp
                @if ($daftarUlang != null)
                    @if ($daftarUlang->fitur == 'on')
                        <div class="d-flex">
                            <a class="btn btn-get-started btn-get-started-blue text-white"
                                href="{{ route('daftar.ulang') }}">
                                Daftar Ulang
                            </a>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </nav>
</section>
