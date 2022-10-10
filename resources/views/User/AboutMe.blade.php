@extends('User.Layout.App')
{{-- @section('footer', 'fixed-bottom') --}}
@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-6 mt-5">
                <h3 class="title-banner"> Tentang Kami </h3>
                <div class="text-about">
                    <p>
                        Tapak Suci <strong>Putera Muhammadiyah </strong> berdiri pada 31
                        Juli 1963 di desa Kauman, Yogyakarta dan merupakan organisasi
                        otonom ke-11 dari Organisasi Muhammadiyah. Tapak Suci termasuk
                        dalam 10 Perguruan Historis IPSI, yaitu perguruan yang menunjang
                        tumbuh dan berkembangnya IPSI sebagai organisasi. Tapak Suci
                        berasas Islam, bersumber pada Al Quran dan As-Sunnah, dan
                        berjiwa persaudaraan. Tapak Suci Cabang Sawah Besar sendiri
                        mulai aktif saat Pendekar Besar Alm. Muhammad Anas mengembangkan
                        ilmu beladirinya pada tahun 1981. Bapak Pendekar Besar Alm.
                        Muhammad Anas juga mencetak bibit-bibit atlet pada masanya dan
                        dilanjutkan kembali perjuangannya oleh pelatih-pelatih di Sawah
                        Besar hingga saat ini demi terbentuknya regenerasi pesilat yang
                        berprestasi.
                    </p>
                    <p>
                        Hal ini tentunya akan memberikan rasa bangga untuk beliau,
                        pelatih-pelatih senior lainnya, dan Orangtua Siswa yang sudah
                        mempercayakan atlet-atlet atau putera-puterinya yang ingin
                        berprestasi melalui cabang olahraga Pencak Silat melalui kami
                        dengan PUSBINDIKLAT “GEMILANG” yang telah dibentuk untuk
                        memfokuskan bibit-bibit atlet potensial yang direkomendasikan
                        oleh Pelatih yang ada di Tapak Suci Cabang Sawah Besar. Gemilang
                        sendiri berdiri pada 15 Oktober tahun 2014. Pelatih pun sudah
                        memiliki Prestasi yang unggul hingga tingkat Internasional dan
                        memiliki pengalaman melatih secara terprogram dengan keilmuan
                        olahraga yang baik dan benar.
                    </p>
                    <p class="fs-3 fw-700"> Tujuan Kegiatan</p>
                    <p>
                        Program-program GEMILANG pun sudah terstruktur sejak awal, yang
                        terdiri dari; Program Latihan Teknik, Latihan Fisik & Sparing.
                        Untuk pengalaman TIM ATLET GEMILANG sudah sering mencapai target
                        dengan meraih Juara Umum di setiap event/kejuaraan dan juga
                        mencetak atlet-atletnya untuk menjadi Juara. Kategori
                        pembentukkan atlet yang ada dalam GEMILANG ada 2, yaitu kategori
                        tanding dan seni. Pembentukkan atlet GEMILANG ini dibina dengan
                        penuh kedisiplinan agar dapat mencetak bibit-bibit unggul baik
                        secara jasmani & rohani.
                    </p>

                    <p class="fw-bold">
                        Satu cita-cita kami yang ingin diwujudkan bersama oleh para
                        Pengurus, Pelatih, Atlet dan Orangtua
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5 d-none d-md-block">
                <img src="{{ asset('image/profile.jpg') }}" alt="" class="rounded" width="700px" height="700px">
            </div>
        </div>
    </div>
    <hr class="container" />
    <div class="maps container mt-5">
        <h3 class="text-center title-banner"> Temukan Kami di Maps </h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.37626825078!2d106.8273723!3d-6.1516326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85572b55e82da086!2sRPTRA%20Karang%20Anyar!5e0!3m2!1sen!2sid!4v1646748367330!5m2!1sen!2sid"
            width="100%" height="600" loading="lazy"></iframe>
    </div>
    <div class="container-fluid">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fillOpacity="0.55"
                d="M0,192L60,186.7C120,181,240,171,360,176C480,181,600,203,720,229.3C840,256,960,288,1080,298.7C1200,309,1320,299,1380,293.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
            </path>
        </svg>
    </div>
@endsection

@push('opsionalCss')
    <style>
        .text-about p {
            line-height: 30px
        }

    </style>
@endpush
