@extends('Admin.Layout.main')

@section('title')
    Tambahkan Gallery
@endsection
@section('breadcumb-title')
    
@endsection
@section('content')
    <div style="font-family: Nunito" class="p-3">
        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                @error('title')
                    <div class="text text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                @error('description')
                <div class="text text-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image Gallery </label>
               <input type="file" id="image" class="form-control" name="image">
               @error('image')
               <div class="text text-danger">{{$message}}</div>
           @enderror
            </div>
            <button type="submit" class="btn btn-primary"> Submit data Gallery </button>
        </form>
    </div>
@endsection
