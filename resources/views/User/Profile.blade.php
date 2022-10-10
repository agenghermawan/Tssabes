@extends('User.Layout.App')
@section('content')
    <section class="h-100 w-100 bg-white">
             <div class="container">
            <img src="{{ asset('image/Group-profile.png') }}" class="img-fuild img" width="100%" style="object-fit:cover"
                alt="imageGroup">
        </div>
        <div class="content-3-1 container-xxl mx-auto position-relative">
            <div class="d-flex flex-lg-row flex-column align-items-center">
                <div class="img-hero text-center justify-content-center d-flex">
                    <img id="hero" class="img-fluid" src={{ asset('image/profile.png') }} alt="image" />
                </div>

                <div
                    class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
                    <h2 class="title-text">3 Keuntungan Bergabung bersama Pusbindiklat Gemilang</h2>
                    <ul class="p-0 m-0">
                        <li class="list-unstyled">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    1
                                </span>
                                Memberikan Pelatihan secara kompeten
                            </h4>
                            <p class="text-caption">
                                Kami memberikan mentor yang berpengalaman
                                <br class="d-sm-inline d-none" />
                                dalam bidang ini
                            </p>
                        </li>
                        <li class="list-unstyled">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    2
                                </span>
                                Rasa Kekeluargaan yang tinggi
                            </h4>
                            <p class="text-caption">
                                Kelompok yang sangat kompak sesama
                                <br class="d-sm-inline d-none" />
                                dan sangat Kekeluargaan
                            </p>
                        </li>
                        <li class="list-unstyled">
                            <h4
                                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                                <span class="circle text-white d-flex align-items-center justify-content-center">
                                    3
                                </span>
                                Berlatih Bersama Kami
                            </h4>
                            <p class="text-caption">
                                Mulai berlatih bersama kami
                                <br class="d-sm-inline d-none" />
                                dan menjadi yang terbaik
                            </p>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-6 col-12 my-2">
                            <a class="btn btn-learn text-white">
                                <i class="fas fa-phone-alt"></i>
                                <br> 0812-8400-7005
                            </a>
                        </div>
                        <div class="col-md-6 col-12 my-2">
                            <a class="btn btn-learn text-white" target="_blank"
                                href="https://www.google.com/maps/dir//RPTRA+Karang+Anyar+RRXG%2B8WX+Jl.+Karang+Anyar+RT.13%2FRW.9,+Karang+Anyar,+Sawah+Besar,+Central+Jakarta+City,+Jakarta+10740/@-6.1516326,106.8273723,15z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2e69f5e6659b152f:0x85572b55e82da086">
                                <i class="fas fa-map-marked"></i>
                                <br> Klik Map Disini
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
    </section>
@endsection
