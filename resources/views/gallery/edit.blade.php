@extends('frontadmin')
@section('main-content')

<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
    <form action="" method="POST" enctype="multipart/form-data ">
        @csrf
            

     
    <div class="form-group mb-4">
        <label for="images">Upload New Images</label>
        <input type="file" class="form-control" name="images[]" id="images" multiple>
        @error('images')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

                 <!-- Display existing images for editing -->
        @if($existingImages->isNotEmpty())
            <div class="mt-4">
                <h4>Existing Images for Gallery ID: {{ $gallery->id }}</h4>
                <ul>
                    @foreach ($existingImages as $image)
                        <li>
                            @if (strtolower(pathinfo($image->filename, PATHINFO_EXTENSION)) === 'pdf')
                                <a href="{{ asset('gallery22/' . $image->filename) }}" target="_blank">{{ $image->filename }}</a>
                            @else
                                <img src="{{ asset('gallery22/' . $image->filename) }}" width="100" alt="Image">
                            @endif
                            <form action="/deleteimage/{{ $image->id }}" method="post">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                    </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        </main>



@endsection