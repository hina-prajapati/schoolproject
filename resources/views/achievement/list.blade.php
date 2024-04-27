@extends('frontadmin')
@section('main-content')

<style>
    /* .w-100 {
    width: 203px !important;
} */
.w-50 {
    width: 100px !important;
}
</style>
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
  <a href="{{url('/achievement/add')}}" class="btn btn-primary  mb-4">Create Gallery Images</a>
  <div class="table-responsive">
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Date</th>
                <th>Place</th>
                <th>Thumbnail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($achievements as $val)
    <tr>
        <td>{{ $val->id }}</td>
        <td>{{ $val->title }}</td>
        <td>{{ $val->date }}</td>
        <td>{{ $val->place }}</td>
        <td>
            @if (!empty($val->thumbnail))
                <img class="w-50" src="{{ asset('achievement/' . $val->thumbnail) }}" alt="{{ $val->title }} thumbnail">
            @else
                <img class="w-50" src="{{ asset('path_to_placeholder_image.jpg') }}" alt="No Image">
            @endif
        </td>
        <td class="d-flex">
        <a href="/achievement/edit_achievement/{{ $val->id }}" class="btn btn-primary ms-4 w-100">Edit</a>
            <!-- <a href="{{ url('/achievement/add_imagess', ['achievement_id' => $val->id]) }}" class="btn btn-primary w-100">Upload Multiple Images</a> -->
            <form class="ms-4" action="{{ route('achievement.delete', ['id' => $val->id]) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gallery?')">Delete</button>
            </form>
          
        </td>
    </tr>
@endforeach

        </tbody>
    </table>
</div>



</div>
</main>

@endsection
 
