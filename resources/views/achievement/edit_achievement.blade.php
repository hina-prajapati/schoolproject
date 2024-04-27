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
<form action="{{ route('achievement.update', ['id' => $achievement->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $achievement->title }}" class="form-control" required>
    </div>


    <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" value="{{ $achievement->date }}" aria-describedby="emailHelp" placeholder="Select date">
                  
                </div>

                <div class="form-group mb-4">
                  <label for="exampleInputEmail1">Place</label>
                  <input type="text" name="place" class="form-control" value="{{ $achievement->place }}" aria-describedby="emailHelp" placeholder="Enter place">
                  
                </div>

    <div class="form-group">
        <label for="thumbnail">Thumbnail:</label>
        <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
        @if ($achievement->thumbnail)
            <img src="{{ asset('achievement/' . $achievement->thumbnail) }}" alt="Thumbnail" class="mt-2" style="max-width: 200px;">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update Gallery</button>
</form>

</main>

</script>

@endsection