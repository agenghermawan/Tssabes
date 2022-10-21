<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pusbindiklat Gemilang">
    <meta name="keywords" content="Pusbindikat Gemilang, Pendaftaran Pusbindiklat Gemilang">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PUSBINDIKLAT GEMILANG</title>
     <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png" sizes="16x16"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c0a3e80385.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"> </script>
    <script src="https://kit.fontawesome.com/c0a3e80385.js" crossorigin="anonymous"></script>
    @stack('opsionalCss')
    <style>
        body{
            font-family: 'Poppins',sans-serif;
        }

        .left-section{
            padding-top: 10%;
            height: 100vh;
            background-color: #4D1CAB;
        }

        .img-absensi{
            border-radius: 100%;
            background-size:cover;
            box-shadow: 2px;
        }
     
        .right-section{
            padding :100px;
        }

        .title-absensi{
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 28px;
            line-height: 42px;
        }

        .text-absensi{
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #5B5575;
        }

        .form-absensi input{
            width: 60%;
        }
        .form-group{
            margin-top: 20px;
        }

        .sub-text__info{
            font-size: 10px;
            color: red;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="row absensi">
        <div class="col-md-6 left-section text-center">
            <img src="{{ asset('image/absensi.jpg')}}" width="450px"  height="340px" class="img-absensi " />
        </div>
        <div class="col-md-6 right-section">
            <h4 class="title-absensi">  Tssabes </h4> 
            <h5 class="mt-5"> Mulai Sekarang </h5>
            <p class="text-absensi">  Isi Form di bawah ini untuk melakukan absensi </p>
            
            <div class="form-absensi">
                <form class="mt-5" method="post" action="{{route('absensi.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for=""> Nama : </label>
                        <input type="text" class="form-control mt-2 rounded-md" name="nama" value="{{ Auth::user()->namaLengkap}}" readonly required>
                     @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label for=""> Tempat Latihan : </label>
                        <input type="text" class="form-control mt-2 rounded-md" placeholder="Masukkan tempat latihan anda ... "  name="tempat_latihan" required>
                    </div>
                    @php
                        $month = date('m');
                        $day = date('d');
                        $year = date('Y');
                        $today = $year.'-'.$month.'-'.$day;
                    @endphp
                    <div class="form-group">
                        <label for=""> Waktu Latihan : </label>
                        <input type="date" class="form-control mt-2 rounded-md" name="waktu" required value="{{$today}}" readonly> 
                        <span class="sub-text__info"> Latihan anda sekarang </span>
                    </div>

                    <button class="btn btn-primary rounded-md mt-5" type="submit">
                        Absen Sekarang
                    </button>
                </form>
            </div>

        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script>
        AOS.init();
    </script>
    @yield('opsionalJs')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
