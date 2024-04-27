@extends('frontadmin')
@section('main-content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="container mt-5"  >
         
  
  @if(Session::has('success'))
  <p class="alert alert-success">{{ Session::get('success') }}</p>
  @endif
  <a href="{{url('/post/post_add')}}" class="btn btn-primary ms-4 mt-4 mb-2">Add My data</a>
  <table class="table table-striped mt-2">
    <thead>
        <tr>
            <th>ID</th>
            <th>Section ID</th>
            <th>Image</th>
            <th>PDF Files</th>
            <th>Icon</th>
            <th>Title</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th>Description</th>
            <th>Link</th>
            <th>Color</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['section_id'] }}</td>
            <td><img src="/postt/{{ $post['image'] }}" width="50"></td>
            <td>
            @foreach ($post->files as $file)
          @if (strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)) === 'pdf')
              <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
          @else
              <img src="{{ asset('/files/' . $file->filename) }}" width="50"><br>
          @endif
      @endforeach


            </td>
            <td><i class="{{ $post['icon'] }}"></i></td>
            <td>{{ $post['title'] }}</td>
            <td>{{ $post['short_description'] }}</td>
            <td>{{ $post['long_description'] }}</td>
            <td>{{ $post['description'] }}</td>
            <td>{{ $post['link'] }}</td>
            <td>{{ $post['color'] }}</td>
            <td>
                <div class="d-flex mt-2">
                    <a href="{{ url('/post/post_edit', $post['id']) }}" class="btn btn-primary p-2">EDIT</a>
                    <a href="{{ url('/post/post_delete', $post['id']) }}" class="btn btn-danger ms-2 p-2">DELETE</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
</main>
@endsection

