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
  <a href="{{url('/addmissionNotice/add')}}" class="btn btn-primary  mb-4">Create Admission</a>
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>PDF Files</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th> Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($admissions as $admission)
        <tr>
            <td>{{ $admission->id }}</td>
            <td>  <img src="{{ asset('/singleImageAdmission/' . $admission->thumbnail) }}" width="50"><br></td>

            <td>
            @foreach ($admission->files as $file)
            @if (in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']))
                <img src="{{ asset('admission/' . $file->filename) }}" class="w-50" alt="Image"><br>
                @elseif (in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['pdf', 'docx']))
                <a href="{{ asset('admission/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
            @endif
        @endforeach

            </td>
            <td>{{ $admission->title }}</td>
            <td>{{ $admission->short_description }}</td>
            <td>{{ $admission->long_description }}</td>
            <td>{{ $admission->job_description }}</td> 

            <td>
                <div class="d-flex mt-2">
                <a href="{{ url('/addmissionNotice/edit', $admission->id) }}" class="btn btn-primary p-2">EDIT</a>
                    <form action="{{ route('addmissionNotice.delete', ['id' => $admission->id]) }}" method="POST">
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
 
