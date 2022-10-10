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
                                    <form class="form form-horizontal" method="post" action="{{ route('event.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label for="name">Event Name</label>
                                                </div>
                                                <div class="col-md-10 form-group">
                                                    <input type="text" id="name" class="form-control" name="name"
                                                        value="{{ old('name') }}" placeholder="Event Name">
                                                    @error('name')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="organizer">Organizer</label>
                                                </div>
                                                <div class="col-md-10 form-group">
                                                    <input type="text" name="organizer" id="organizer"
                                                        value="{{ old('organizer') }}" class="form-control"
                                                        placeholder="Organizer">
                                                    @error('organizer')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="image">Image</label>
                                                </div>
                                                <div class="col-md-10 form-group">
                                                    <input type="file" id="image" class="form-control" name="image">
                                                    @error('image')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-md-2 my-2">
                                                    <label> Image Preview</label>
                                                </div>
                                                <div class="col-md-10 my-2 form-group">
                                                    <img src="" id="preview" class="img-fluid shadow rounded-md">
                                                </div>

                                                <div class="col-md-2 my-2">
                                                    <label for="dateEvent"> Date Event</label>
                                                </div>
                                                <div class="col-md-10 my-2 form-group">
                                                    <input type="date" name="dateEvent" id="dateEvent"
                                                        value="{{ old('dateEvent') }}" class="form-control">
                                                    @error('dateEvent')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-2 my-2">
                                                    <label for="description"> Description</label>
                                                </div>
                                                <div class="col-md-10 col-12">
                                                    <div class="form-floating">
                                                        <textarea class="form-control" name="description" id="description">
                                                        </textarea>
                                                        <label for="floatingTextarea">Description Event </label>
                                                    </div>
                                                    @error('description')
                                                        <div class="text text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-12 d-flex justify-content-end mt-2">
                                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                                </div>
                                            </div>
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

@push('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                    $('#preview').attr('width', '100px');
                    $('#preview').attr('height', '100px');
                }
                reader.readAsDataURL(input.files[0])
            }
        }

        $('#image').change(function() {
            readURL(this)
        })
    </script>
@endpush
