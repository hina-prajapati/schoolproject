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
  <a href="{{url('/events/event_add')}}" class="btn btn-primary  mb-4">Create Events</a>
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>PDF Files</th>
            <th>Image</th>
            <th>Title</th>
            <th> Address</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Start Period Time</th>
            <th>End Period Time</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th> Description</th>
         
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>
                <!-- @foreach ($event->files as $file)
                    @if (strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)) === 'pdf')
                        <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
                    @else
                        <img src="{{ asset('/files/' . $file->filename) }}" width="50"><br>
                    @endif
                @endforeach -->
                <!-- @foreach ($event->files as $file)
                <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
            @endforeach -->

            @foreach ($event->files as $file)
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

            <td><img src="{{ asset('/single_events/' . $event->thumbnail) }}" alt="Thumbnail" class="w-100"></td>


            <td>{{ $event->title }}</td>
            <td>{{ $event->address }}</td>
            <td>{{ $event->start_date }}</td>
            <td>{{ $event->end_date }}</td>
      
            <td>{{ date('h:i A', strtotime($event->start_time)) }}</td>
            <td>{{ date('h:i A', strtotime($event->end_time)) }}</td>
            <td>{{ $event->short_description }}</td>
            <td>{{ $event->long_description }}</td>
            <td>{{ $event->job_description }}</td>
      
            <td>
                <div class="d-flex mt-2">
                <a href="{{ url('/events/event_edit', $event->id) }}" class="btn btn-primary p-2">EDIT</a>
                    <!-- <a href="{{ route('events.event_delete', ['id' => $event->id]) }}" class="btn btn-danger ms-2 p-2">DELETE</a> -->
                    <form action="{{ route('events.event_delete', ['id' => $event->id]) }}" method="POST">
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
 
