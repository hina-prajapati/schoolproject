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
<div class="container mt-5"  >
         
  
  @if(Session::has('success'))
  <p id="successMessage" class="alert alert-success">{{ Session::get('success') }}</p>
  @endif
  <!-- <a href="{{url('/gallery/add_imagess')}}" class="btn btn-primary  mb-4">Create Multiple Images</a> -->
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Images</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galleries as $gallery)
        <tr>
            <td>{{ $gallery->id }}</td>
            <td>
                @foreach ($gallery->images as $image)
                    <img src="{{ asset('gallery22/' . $image->filename) }}" alt="" width="50">
                @endforeach
            </td>
            <td class="d-flex">
                <a href="{{ route('gallery.edit', ['gallery_id' => $gallery->id]) }}" class="btn btn-primary p-2">EDIT</a>
   
                <form class="ms-4" action="{{ route('gallery.gallery_delete', ['id' => $gallery->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
</main>

@endsection
 
