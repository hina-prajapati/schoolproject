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
  <a href="{{url('/events/event_add')}}" class="btn btn-primary  mb-4">Create Data</a>
  <table class="table">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Link</th>
                      <th>Place</th>
                      <th>Cover</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                      <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <td>{{ $post->title }}</td>
                          <td>{{ $post->date }}</td>
                          <td>{{ $post->link }}</td>
                          <td>{{ $post->place }}</td>
                          <td><img src="/cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                          <td><a href="/bulletinboards/edit/{{ $post->id }}" class="btn btn-outline-primary">Edit</a></td>
                          <td>
                              <form action="/delete/{{ $post->id }}" method="post">
                                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                                @csrf
                                @method('delete')
                              </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>


</div>
</main>
@endsection
 
