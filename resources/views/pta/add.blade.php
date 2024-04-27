@extends('frontadmin')
@section('main-content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<link href="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.css" rel="stylesheet">

<style>
    .ck-editor__editable_inline {
        min-height: 300px;
    }
    </style>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
          <form action="{{ route('pta.add') }}" method="POST" enctype="multipart/form-data" class="mt-5" >
              @csrf
                    


              <div class="form-group mt-2">
                <label for="exampleInputEmail1">Pdffile</label>
                <input type="file" class="form-control" name="filename[]" aria-describedby="pdffile" placeholder="Select pdffiles" multiple>
                @error('filename')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter date">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="short_description" class="form-control"  placeholder="Password">
                 
                </div>

                <div class="form-group mb-4">
                <label for="exampleInputPassword1">Long Description</label>
                <input type="text" name="long_description" class="form-control"  placeholder="Password">
                  </div>

                  <div id="quill-editor" class="mb-3" style="height: 300px;"></div>
<textarea rows="3" class="mb-3 d-none" name="job_description" id="quill-editor-area"></textarea>


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('quill-editor-area')) {
            var editor = new Quill('#quill-editor', {
                theme: 'snow'
            });
            var quillEditor = document.getElementById('quill-editor-area');
            editor.on('text-change', function() {
                quillEditor.value = editor.root.innerHTML;
            });

            quillEditor.addEventListener('input', function() {
                editor.root.innerHTML = quillEditor.value;
            });
        }
    });
    
</script>

@endsection