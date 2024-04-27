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
<div class="container mt-5">

  @if(Session::has('success'))
  <p class="alert alert-success">{{ Session::get('success') }}</p>
  @endif
  <a href="{{url('/posttype/posttype_add')}}" class="btn btn-primary ms-4 mt-4 mb-2">Add My data</a>
         
  <table class="table table-striped mt-2 ">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Page Name</th>
        <th>Section Name</th>
        <th>Description</th>
        <th>Link</th>
        <th>Color</th>
        <th>Action</th>
      </tr>
    </thead>


        <?php foreach ($list as $key => $val) { ?>
          
   
      <tr>
        <td><?=$val['id']?></td>
        <td><img src="/posttypes/<?=$val['image']?>" width="50"></td>
        <td><?=$val['p_name']?></td>
        <td><?=$val['s_name']?></td>
        <td><?=$val['description']?></td>
        <td><?=$val['link']?></td>
        <td><?=$val['color']?></td>
        
       <td>
       <div class="d-flex mt-2">
        {{-- <a href="{{url('/post/post_list')}}/<?=$val['id']?>" class="btn btn-success p-2">View</a> --}}
        <a href="{{url('/posttype/posttype_edit')}}/<?=$val['id']?>" class="btn btn-primary ms-2 p-2">EDIT</a>
        <a href="{{url('/posttype/posttype_delete')}}/<?=$val['id']?>" class="btn btn-danger ms-2 p-2">DELETE</a>
       </div>
       </td>
      </tr>
    <?php      } ?>

  </table>
</div>
</main>
@endsection

