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
<form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method("put")

    <div class="form-group">
        <label for="exampleInputEmail1">Date</label>
        <input type="date" name="date" value="{{ $posts->date }}" class="form-control" aria-describedby="emailHelp" placeholder="Enter date">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" value="{{ $posts->title }}" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Link</label>
        <input type="text" name="link" value="{{ $posts->link }}" class="form-control" aria-describedby="emailHelp" placeholder="Enter link">
    </div>

    <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" value="{{ $posts->date }}" aria-describedby="emailHelp" placeholder="Select date">
                  
                </div>

                <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Place</label>
                  <input type="text" name="place" class="form-control" value="{{ $posts->place }}" aria-describedby="emailHelp" placeholder="Enter place">
                  
                </div>

    
    <div class="form-group">
        <label class="m-2">Cover Image</label>
        <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">
        <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="Cover Image">
    </div>

    <button type="submit" class="btn btn-success mt-3">Submit</button>
</form>


</main>




@endsection