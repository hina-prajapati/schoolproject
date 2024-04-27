@extends('frontadmin')
@section('main-content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
<form action="{{ route('gallery.add_imagess', ['gallery_id' => $gallery->id]) }}" method="POST" enctype="multipart/form-data" class="mt-5">
    @csrf

    <!-- Hidden input for gallery_id -->
    <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">

    <div class="form-group mt-2 mb-4">
        <label for="exampleInputEmail1">Images</label>
        <input type="file" class="form-control" name="images[]" aria-describedby="pdffile" placeholder="Select image files" multiple>
        @error('images')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</main>
@endsection