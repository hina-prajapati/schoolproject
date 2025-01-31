@extends('frontadmin')
@section('main-content')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
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
    <form action="" method="POST" enctype="multipart/form-data" style="overflow:scroll ">
        @csrf
            

        
              <div class="form-group mt-2">
            <label for="exampleInputEmail1">Pdffile</label>
                <input type="file" class="form-control" name="filename[]" aria-describedby="pdffile" placeholder="Select pdffiles" multiple>
                @error('filename')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


            @foreach ($existingFiles as $PtaId => $files)
            <p>Existing Files for PTA ID: {{ $PtaId }}</p>
            <ul>
                @foreach ($files as $file)
                    <li>
                        @if (in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']))
                            <img src="{{ asset('/pta/' . $file->filename) }}" width="50" alt="Image">
                        @else
                        <a href="{{ asset('/pta/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a>
                        @endif
                        <button type="button" class="btn btn-link text-dark bold delete-btn" data-url="{{ route('deleteimage', ['id' => $file->id]) }}" onclick="confirmDelete(this)">X</button>
                    </li>
                    @endforeach
                </ul>
            @endforeach


                 <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter date">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" value="<?=$pta['title']?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Short Description</label>
                  <input type="text" name="short_description" value="<?=$pta['short_description']?>" class="form-control"  placeholder="Password">
                 
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Long Description</label>
                    <input type="text" name="long_description" value="<?=$pta['long_description']?>" class="form-control"  placeholder="Password">
                  
                  </div>

                  <div id="quill-editor" class="mb-3" style="height: 300px;">
                {!! $pta->job_description !!}
            </div>
            <textarea rows="3" class="mb-3 d-none" name="job_description" id="quill-editor-area">{!! $pta->job_description !!}</textarea>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.delete-file-btn').click(function() {
            let fileId = $(this).data('file-id');
            console.log(fileId);
            exit();
            deleteFile(fileId);
        });

        function deleteFile(fileId) {
            $.ajax({
                url: '/delete/' + fileId,
                type: 'DELETE',
                success: function(response) {
                    // Remove the file item from the UI
                    $('.file-item').each(function() {
                        if ($(this).find('.delete-file-btn').data('file-id') == fileId) {
                            $(this).remove();
                        }
                    });
                    alert(response.message);
                },
                error: function(xhr, status, error) {
                    alert('Error deleting file: ' + error);
                }
            });
        }
    });
</script>
<script>
    function confirmDelete(button) {
        if (confirm('Are you sure you want to delete this image?')) {
            var url = button.getAttribute('data-url');
            fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Refresh the page or update the DOM as needed
                    location.reload();
                } else {
                    // Handle errors
                    console.error('Error deleting image');
                }
            })
            .catch(error => {
                console.error('Error deleting image:', error);
            });
        }
    }
</script>

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