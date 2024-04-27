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
  <a href="{{url('/contacts/add')}}" class="btn btn-primary  mb-4">Create Banner</a>
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td><img src="{{ asset('/contacts/' . $contact->thumbnail) }}" alt="Thumbnail" class="w-50"></td>
            <td>{{ $contact->title }}</td>
            <td>
                <div class="d-flex mt-2">
                    <a href="/edit/{{ $contact->id }}" class="btn btn-outline-primary">Edit</a>
                    <form action="/delete/{{ $contact->id }}" method="post">
                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                        @csrf
                        @method('delete')
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
 
