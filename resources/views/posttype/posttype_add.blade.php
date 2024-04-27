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
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mt-5" >
            <label for="exampleInputEmail1">Images</label>
            <input type="file" class="form-control" name="image" aria-describedby="emailHelp" placeholder="select image">
          
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Page Name</label>
            <input type="text" name="p_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter p_name">
           
          </div>


          <div class="form-group">
            <label for="exampleInputEmail1">Section Name</label>
            <input type="text" name="s_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter s_name">
          
          </div>


             

              <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea id="summernote" name="description"></textarea>
               
                 
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Section Link</label>
                  <input type="text" name="link" class="form-control" aria-describedby="emailHelp" placeholder="Enter link">
                
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" name="description" class="form-control"  placeholder="Password">
                  @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                </div> --}}

                
                <div class="form-group mb-3">
                    <label for="exampleInputPassword1"> Section Color</label>
                    <input type="text" name="color" class="form-control"  placeholder="color....">
                  </div>

            
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

</main>
    
@endsection