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
  <a href="{{url('/pta/add')}}" class="btn btn-primary  mb-4">Create Events</a>
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>PDF Files</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <td>Description</td> 
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ptas as $pta)
        <tr>
            <td>{{ $pta->id }}</td>
            <td>
              
            @foreach ($pta->files as $file)
    @php
        $extension = pathinfo($file->filename, PATHINFO_EXTENSION);
    @endphp

    @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
        <img src="{{ asset('/pta/' . $file->filename) }}" alt="{{ $file->filename }}" width="100">
    @else
        <a href="{{ asset('/pta/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
    @endif
@endforeach


            </td>
            <td>{{ $pta->title }}</td>
            <td>{{ $pta->short_description }}</td>
            <td>{{ $pta->long_description }}</td>
            <td>{{ $pta->job_description }}</td> 
            <td>
                <div class="d-flex mt-2">
                <a href="{{ url('/pta/edit', $pta->id) }}" class="btn btn-primary p-2">EDIT</a>
                    <form action="{{ route('pta.delete', ['id' => $pta->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ms-2 p-2" onclick="return confirm('Are you sure you want to delete this notice?')">DELETE</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


</div>
</main>
@endsection
 
