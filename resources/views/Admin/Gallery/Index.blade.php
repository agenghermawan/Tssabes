@extends('Admin.Layout.main')

@section('title')
    Daftar Gallery
@endsection
@section('breadcumb-title')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Gallery</h5>
                </div>
                <div class="card-body">
                    <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        @foreach ($data as $dt)
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2 ">
                                <a href="#">
                                    <img class="w-100 active my-2" src="{{ url($dt->image) }}"
                                        data-bs-target="#Gallerycarousel" data-bs-slide-to="0" height="300px">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
