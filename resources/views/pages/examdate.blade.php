@extends('layout')
@section('title', 'SKKE School | Exam Date')

   @section('content')
<style>
    .about-cont p {
    padding-top: 14px;
}
a:hover{
    text-decoration: underline;
    color: black;
    transition: 1.2s;
}
</style>
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/assets2/images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Exam Date</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Exam Date</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                @foreach ($examdate as $post)
                <div class="section-title mt-50">
                    <h5>{{ $post->title }}</h5>
                    <h2>{{ $post->short_description }}</h2>
                </div>
                <div class="about-cont">
                    <p>{{ $post->long_description }}</p>
                    </div>
                 
                    @foreach($post->files as $file)
            <div class="mt-4 ">
              <a href="{{ route('file.download', ['filename' => $file->filename]) }}" target="_blank">
            <p>Click here to download</p>
                </a>
            </div>
              
        @endforeach
   
        @endforeach 
                    
          

                 
                </div> 
            
             
            </div> <!-- row -->
        </div> <!-- container -->
     
    </section>
    
 
   

    
    

   @endsection