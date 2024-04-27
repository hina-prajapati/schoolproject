@extends('frontadmin')
@section('main-content')
 
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
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
    <form action="" method="POST" enctype="multipart/form-data" style="overflow:scroll ">
        @csrf
            

          
                               <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="icon" class="form-control" value="<?=$data['icon']?>" name="icon" aria-describedby="emailHelp" placeholder="icon">
               
              </div>

              <div class="form-group mt-2">
    <label for="exampleInputEmail1">Pdffile</label>
    <input type="file" class="form-control" name="filename[]" aria-describedby="pdffile" placeholder="Select pdffiles" multiple>
    @error('filename')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
@foreach ($existingFiles as $postId => $files)
    <p>Existing Files for Post ID: {{ $postId }}</p>
    <ul>
        @foreach ($files as $file)
            <li>
            @if (strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)) === 'pdf')

                <a href="{{ asset('/files/' . $file->filename) }}" target="_blank">{{ $file->filename }}</a><br>
                @else
                    <img src="{{ asset('/files/' . $file->filename) }}" width="50">
                @endif
             
                <a href="{{ route('deleteimage', ['id' => $file->id]) }}">Delete</a>

            </li>
        @endforeach
    </ul>
@endforeach











<div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter date">
                  
                </div>


              <div class="form-group">
                <label for="select">Select</label>
                <select name="section_id">
                    <?php foreach ($list as $val) {  ?>
           
                    <option value="<?=$val['id']?>"><?=$val['p_name']?></option>

                   <?php } ?>
                </select>
                @error('section_id')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror
              </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" value="<?=$data['title']?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Short Description</label>
                  <input type="text" name="short_description" value="<?=$data['short_description']?>" class="form-control"  placeholder="Password">
                 
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Long Description</label>
                    <input type="text" name="long_description" value="<?=$data['long_description']?>" class="form-control"  placeholder="Password">
                  
                  </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea id="summernote" name="description"><?=$data['description']?></textarea>
               
                  
                </div>

               
                <div class="form-group">
                    <label for="exampleInputPassword1"> Section Color</label>
                    <input type="color" name="color" value="<?=$data['color']?>" class="form-control"  placeholder="color....">
                  
                  </div>

                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Section Link</label>
                    <input type="text" name="link" value="<?=$data['link']?>" class="form-control" aria-describedby="emailHelp" placeholder="Enter link">
                  
                  </div>

            
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

@endsection