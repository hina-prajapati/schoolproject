@extends('frontadmin')
@section('main-content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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
    <form action="" method="POST" enctype="multipart/form-data" class="mt-5" >
        @csrf
              


            <div class="form-group mt-2">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="thumbnail" aria-describedby="pdffile" placeholder="Select pdffiles" multiple>
                @error('thumbail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="thumbnails[]" aria-describedby="files" placeholder="Select pdffiles" multiple>
                @error('thumbail')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


                <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
                </div>

 
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</main>

@endsection