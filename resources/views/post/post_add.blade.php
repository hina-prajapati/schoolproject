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
    <form action="" method="POST" enctype="multipart/form-data" class="mt-5" >
        @csrf
              <div class="form-group mt-5">
                <label for="exampleInputEmail1">Images</label>
                <input type="file" class="form-control" name="image" aria-describedby="pdffile" placeholder="select image">
                @error('image')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
              </div>


              <div class="form-group mt-2">
    <label for="exampleInputEmail1">Pdffile</label>
    <input type="file" class="form-control" name="filename[]" aria-describedby="pdffile" placeholder="Select pdffiles" multiple>
    @error('filename')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>



              <div class="form-group">
                <label for="exampleInputEmail1">Icon</label>
                <input type="text" class="form-control" name="icon" aria-describedby="emailHelp" placeholder="select image">
                @error('icon')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
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
                  <input type="text" name="title" class="form-control" aria-describedby="emailHelp" placeholder="Enter title">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Date</label>
                  <input type="date" name="date" class="form-control" aria-describedby="emailHelp" placeholder="Enter date">
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Short Description</label>
                  <input type="text" name="short_description" class="form-control"  placeholder="Password">
                 
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Long Description</label>
                    <input type="text" name="long_description" class="form-control"  placeholder="Password">
                   
                  </div>


                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea id="summernote" name="description"></textarea>
               
                  
                </div>

               
                <div class="form-group">
                    <label for="exampleInputPassword1"> Section Color</label>
                    <input type="color" name="color" class="form-control"  placeholder="color....">
                  
                  </div>

                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Section Link</label>
                    <input type="text" name="link" class="form-control" aria-describedby="emailHelp" placeholder="Enter link">
                    
                  </div>

            
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
</main>
@endsection