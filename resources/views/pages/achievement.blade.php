@extends('layout')
@section('title', 'SKKE School | Achievement')
   @section('content')

   <style>
    .image-container {
    position: relative;
    display: inline-block;
}
img#galleryImage {
    width: 400px;
    height: 200px;
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0; /* initially invisible */
    transition: opacity 1.2s ease;
    display: flex;
    justify-content: center;
    align-items: center;
}


.image-container img {
    height: 200px;
    width: 400px;
}



.image-container{
    transition: 1.2s;
}
.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #000000d6;;    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 1.5s ease;
}
.section-title1 {
    padding: 25px;
    border: 1px solid #07294d26;
    font-size: 14px;
    text-align: center;
    font-weight: 500;
}
.image-container:hover .overlay {
    opacity: 1;
}

.gallery-button {
    color: #fff !important;
    cursor: pointer;
    border: 1px solid #ffffff5e;
    padding: 4px 20px;
    margin: 0 10px; /* Add margin between buttons */
    transition: opacity 1.5s ease;
}

.image-container:hover .gallery-button {
    opacity: 1;
}
.pt-115 {
    padding-top: 50px;
}
.pb-120 {
    padding-bottom: 50px;
}
  </style>

      <!--====== SEARCH BOX PART START ======-->
    
      <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/assets2/images/about/achievement.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Achievement</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Achievement</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="course-part" class="pt-115 pb-120 ">
        <div class="container">
            <div class="row">
            @foreach ($achievements as $achievement)
    <div class="col-md-3 mt-2">
        <div class="section-title">
            <div class="image-container">
                @if (!empty($achievement->thumbnail))
                    <img class="" src="{{ asset('achievement/' . $achievement->thumbnail) }}" alt="{{ $achievement->title }} thumbnail">
                @else
                    <img src="{{ asset('path_to_placeholder_image.jpg') }}" alt="No Image">
                @endif
                <div class="overlay">
                    @if (!empty($achievement->thumbnail))
                        <a href="{{ asset('achievement/' . $achievement->thumbnail) }}" class="gallery-button" data-fancybox="gallery-img" style="color: #fff !important; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;" data-animate="fadeInUp">View Large</a>
                    @endif
                    <a href="{{ route('achievement.show', ['achievement_id' => $achievement->id]) }}" class="btn-system second gallery-button a2" data-animate="fadeInUp">Gallery</a>
                </div>
            </div>
            <div class="section-title1">
                <a href="{{ route('achievement.show', ['achievement_id' => $achievement->id]) }}" style="color: #07294d;">{{ $achievement->title }}</a>
            </div>
        </div>
    </div>
@endforeach

            </div> 
        </div>
    </section>
    <!--====== TEACHERS PART ENDS ======-->

   @endsection