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
<div class="container "  >
         
  
  @if(Session::has('success'))
  <p id="successMessage" class="alert alert-success">{{ Session::get('success') }}</p>
  @endif
  <a href="{{url('/notices/create_notice')}}" class="btn btn-primary mb-4">Create Notice</a>
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <!-- <th>Image</th> -->
            <th>PDF Files</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notices as $notice)
        <tr>
            <td>{{ $notice->id }}</td>
               <td>{{ $notice->date }}</td>
               <!-- <td>  <img src="{{ asset('singleImageNotice' . $notice->thumbnail) }}" width="50"><br></td> -->
            <td>
                <!-- @foreach ($notice->files as $file)
                    @if (strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)) === 'pdf')
                        <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
                    @else
                        <img src="{{ asset('/files/' . $file->filename) }}" width="50"><br>
                    @endif
                @endforeach -->
                <!-- @foreach ($notice->files as $file)
            <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
        @endforeach -->

        @foreach ($notice->files as $file)
            @php
                $extension = pathinfo($file->filename, PATHINFO_EXTENSION);
            @endphp

            @if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                <img src="{{ asset('/files/' . $file->filename) }}" alt="{{ $file->filename }}" width="100">
            @else
                <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
            @endif
        @endforeach
            </td>
            <td>{{ $notice->title }}</td>
            <td>{{ $notice->short_description }}</td>
            <td>{{ $notice->job_description }}</td> 
            <td>
                <div class="d-flex mt-2">
                    <a href="{{ url('/notices/edit_notice', $notice->id) }}" class="btn btn-primary p-2">EDIT</a>
                    <form action="{{ route('notices.delete_notice', ['id' => $notice->id]) }}" method="POST">
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
 
