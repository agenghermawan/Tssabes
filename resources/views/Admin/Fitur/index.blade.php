@extends('Admin.Layout.main')
@section('title')
    Daftar Event
@endsection
@section('description')
    Daftar Event
@endsection
@section('breadcumb-title', 'Pendaftaran')
@section('content')
    <div class="card">
        <div class="card-body">
            <section id="basic-horizontal-layouts">
                <div class="row match-height">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Event Form</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form form-horizontal" method="post" action="{{ route('fitur.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label>Fitur Daftar Ulang</label>
                                                </div>
                                                <div class="col-md-10 form-group">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="fitur" type="checkbox"
                                                            id="flexSwitchCheckChecked"
                                                            @if (!empty($data)) @if ($data->fitur == 'on')
                                                                checked
                                                                @else
                                                                nonchecked @endif
                                                            @endif
                                                        >
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Active
                                                            Or Not</label>
                                                    </div>
                                                    @error('name')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary"> Perbarui Fitur Sekarang</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
