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
<form action="" method="POST" enctype="multipart/form-data" >
        @csrf
            

     
    <div class="form-group">
        <label for="images">Upload New Images</label>
        <input type="file" class="form-control" name="images[]" id="images" multiple>
        @error('images')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->


    
        @if($existingImages->isNotEmpty())
            <div class="mt-4">
                <h4>Existing Images for Gallery ID: {{ $achievement->id }}</h4>
                <ul>
                    @foreach ($existingImages as $image)
                        <li>
                            @if (strtolower(pathinfo($image->filename, PATHINFO_EXTENSION)) === 'pdf')
                                <a href="{{ asset('achievement/' . $image->filename) }}" target="_blank">{{ $image->filename }}</a>
                            @else
                                <img src="{{ asset('achievement/' . $image->filename) }}" width="100" alt="Image">
                            @endif
                            <a href="{{ route('deleteimage', ['id' => $image->id]) }}" class="text-danger ml-2">Delete</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</main>



@endsection