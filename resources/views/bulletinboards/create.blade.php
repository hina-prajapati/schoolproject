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
    <form action="{{ url('/post') }}" method="POST" enctype="multipart/form-data" class="mt-5" >
        @csrf
              


              <div class="form-group mt-2">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" class="form-control" name="cover" aria-describedby="pdffile" placeholder="Select pdffiles" multiple>
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter date">
                  
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Section Link</label>
                    <input type="text" name="link" class="form-control" aria-describedby="emailHelp" placeholder="Enter link">
                    
                  </div>

                  <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Select date">
                  
                </div>

                <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Place</label>
                  <input type="text" name="place" class="form-control" aria-describedby="emailHelp" placeholder="Enter place">
                  
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</main>
@endsection