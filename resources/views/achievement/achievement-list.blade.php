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
<div class="container mt-5">
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Images</th>
                <!-- <th>Title</th> -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($achievements as $achievement)
            <tr>
                <td>{{ $achievement->id }}</td>
                <td>
                    @foreach ($achievement->achievement_images as $image)
                    <img src="{{ asset('/achievement/' . $image->filename) }}" alt="" width="50">
                    @endforeach
                </td>
                <!-- <td>{{ $achievement->title }}</td>  -->
                <td class="d-flex">
                    <a href="{{ url('achievement/editt', ['achievement_id' => $achievement->id]) }}" class="btn btn-primary p-2">EDIT</a>
                    <form class="ms-4" action="{{ route('achievement.delete', ['id' => $achievement->id]) }}" method="POST">
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
 
