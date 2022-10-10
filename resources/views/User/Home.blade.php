@extends('User.Layout.App')

@section('content')
    <div>
        <div class="container">
            <div class="hero mt-2 row mb-5">
                <div class="col-12 col-md-6">
                    <div class="text-hero mt-5">
                        <p class="title-banner">
                            Padepokan Rajawali Perguruan Bela diri
                        </p>
                    </div>
                    <div class="button-hero mt-5">
                        
                        <p class="title-desc-page">
                           
                            "Memfokuskan bibit-bibit atlet potensial yang direkomendasikan <br />
                            oleh Pelatih yang ada di Tapak Suci Cabang Sawah Besar. "
                          
                        </p>
                    
                            <a class="btn btn-get-started btn-get-started-blue text-white" style="background-color:#0ec8f8;color:whitesmoke;border-radius: 20px; 
                                    padding: 12px 30px;
                                    font-weight: 500;" href="{{ route('Register-user') }}">
                                Bergabung Bersama Kami
                           
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-none d-sm-none d-md-block">
                    <img src="/image/banner.jpg" layout="responsive" class="shadow rounded-circle img-fluid" alt="banner" />
                </div>
            </div>
            <div class="row gap-lg-0 gap-2 text-center">
                <div class="col-lg-4">
                    <div class="for-starter-image">
                        <img src="/image/start-2.png" width="80px" height="80px" alt="" />
                    </div>
                    <div class="for-starter-text">
                        <p class="text-starter"> 1. Memulai </p>
                        <p class="desc-starter">
                            Memulai <br /> Menjadi lebih baik
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="for-starter-image">
                        <img src="{{ asset('image/start-1.png') }}" width="80px" height="80px" alt="" />
                    </div>
                    <div class="for-starter-text">
                        <p class="text-starter"> 2. Berlatih </p>
                        <p class="desc-starter">

                            Berlatih <br /> Agar menjadi yang terkuat
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="for-starter-image">
                        <Image src="/image/start-3.png" width="80px" height="80px" alt="" />
                    </div>
                    <div class="for-starter-text">
                        <p class="text-starter"> 3. Berkompetesi </p>
                        <p class="desc-starter">
                            Berkompetesi <br /> Menjadi yang terbaik
                        </p>
                    </div>
                </div>
            </div>
            <div class="Galeri my-5">
                <p class="title-banner">Galeri</p>
                <p class="title-desc-page"> Foto diambil saat Latihan Bersama </p>
                <div class="image-list row">
                    @forelse($gallery as $item)
                        <div class="col-12 col-md-3 mt-3">
                            <img class="shadow img-galery" width="100%" height="300px" src="{{ $item->image }}"
                                alt="gallery" style="object-fit: cover">
                        </div>
                    @empty
                        <p style="font-size: 24px;text-align:center"> Gallery Not Found </p>
                    @endforelse

                </div>
            </div>
            <div class="reached container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <p class="reached-title"> 150++ </p>
                        <p class="reached-text "> Peserta </p>
                    </div>
                    <div class="col-md-4">
                        <p class="reached-title"> 150++ </p>
                        <p class="reached-text "> Kejuaraan </p>
                    </div>
                    <div class="col-md-4">
                        <p class="reached-title"> 150++ </p>
                        <p class="reached-text "> Cabang </p>
                    </div>
                </div>
            </div>

            {{-- {/* <div class="testimonial">
      <h3 class="text-center title-banner">Testi</h3>
      <p class="text-center title-desc-page">
        stimoni dari pengguna
      </p>
      <div class="row my-5">
        <div class="col-12 col-md-4 p-3">
          <div class="row">
            <div class="col-12 col-md-2">
              <Image
                src="/image/profile-achivment.jpg"
                layout="responsive"
                width="70px"
                height="70px"
                class="rounded-circle"
                alt=""
              ></Image>
            </div>
            <div class="col-md-10">
              <h3> Will Jansen </h3>
              <p> Peserta</p>
            </div>
          </div>
          <p class="fw-light mt-2">
            "Kegiatan positif Tapak Suci, selain bela diri seni juga bisa
            untuk olahraga"
          </p>
        </div>
        <div class="col-12 col-md-4 p-3">
          <div class="row">
            <div class="col-12 col-md-2">
              <Image
                src="/image/profile-achivment.jpg"
                layout="responsive"
                width="70px"
                height="70px"
                class="rounded-circle"
                alt=""
              ></Image>
            </div>
            <div class="col-md-10">
              <h3> Will Jansen </h3>
              <p> Peserta</p>
            </div>
          </div>
          <p class="fw-light mt-2">
            "Kegiatan positif Tapak Suci, selain bela diri seni juga bisa
            untuk olahraga"
          </p>
        </div>
        <div class="col-12 col-md-4 p-3">
          <div class="row">
            <div class="col-12 col-md-2">
              <Image
                src="/image/profile-achivment.jpg"
                layout="responsive"
                width="70px"
                height="70px"
                class="rounded-circle"
                alt=""
              ></Image>
            </div>
            <div class="col-md-10">
              <h3> Will Jansen </h3>
              <p> Peserta</p>
            </div>
          </div>
          <p class="fw-light mt-2">
            "Kegiatan positif Tapak Suci, selain bela diri seni juga bisa
            untuk olahraga"
          </p>
        </div>
      </div>
    </div> */} --}}

            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="/image/Wavy_Lst-10_Single-03.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <p class="title-promotion"> Bergabung bersama kami </p>
                    <p class="desc-promotion">
                        Berlatih dan menjadi <br /> yang terbaik
                    </p>
                    
                    <a class="cssbuttons-io-button" href="{{route('Register-user')}}" style="width:50%">
                        Mulai Sekarang
                        <div class="icon">
                            <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                    fill="currentColor"></path>
                            </svg>
                        </div>
                    </a>
             
                </div>
            </div>

            <div class="sponsor">
                <p class="title-banner text-center">Bersama Kami</p>
                <img src="{{ asset('image/Sponsor.png') }}" width="100%" style="border-radius: 10px 20px" alt="">
            </div>
            {{-- <div class="care row mt-5">
      <div class="col-12 col-md-6 mt-5">
        <h1> Punya Pertanyaan Kepada Kami ? </h1>
        <p>Hubungi Kami </p>
        <div class="row">
          <div class="col-12 col-md-3 mb-1">
            <button class="btn btn-info shadow rounded button-contact">
              <i class="fas fa-comment"></i>
              WhatsApp
            </button>
          </div>
          <div class="col-12 col-md-3 mb-1">
            <button class="btn btn-info shadow rounded button-contact">
              <i class="fas fa-phone"></i> Telp
            </button>
          </div>
          <div class="col-12 col-md-3 mb-1">
            <button class="btn btn-info shadow rounded button-contact">
              <i class="fas fa-map"></i>
              Lihat Rute
            </button>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <Image
          src="/image/image 5.png"
          width="600"
          height="400"
          alt=""
        ></Image>
      </div>
    </div> --}}
        </div>
    </div>
@endsection
