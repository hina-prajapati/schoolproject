@extends('layout')

   @section('content')

   <style>
    .files-container {
text-align: center;
    padding: 50px;
}

.files-list {
    list-style-type: none;
    padding: 0;
}
.pt-40 {
    padding-top: 30px;
}
.files-list li {
    margin-bottom: 10px;
}
#about-part {
    position: relative;
    padding-bottom: 114px;
}
li img {
    width: 100%;
    height: 150px;
    display: block !important;
}
/* Media query for screens with a maximum width of 768px */
@media screen and (max-width: 768px) {
    .files-list {
    list-style-type: none;
    padding: 0;
    display: initial !important;
    justify-content: space-around;
}
}
.files-list {
    list-style-type: none;
    padding: 0;
    display: flex;

}
.about-event {
    -webkit-box-shadow: 0px 0px 191px 0px rgba(0,0,0,0.06);
    box-shadow: 0px 0px 191px 0px rgba(0,0,0,0.06);
    padding: 65px 70px 37px;
    background-color: rgba(255, 255, 255, 0.95);
    border: 2px solid black;
    border-radius: 4px;
}
p{
    text-align: center;
}
   </style>
      <!--====== PAGE BANNER PART START ======-->
      <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="5" style="background-image: url(/assets2/images/about/male-and-female-executives-discussing-over-bulleti-cropped.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $notice->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $notice->title }}</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    <section id="about-part" class="pt-40">
    <div class="col-lg-8 offset-lg-2">
                    <div class="about-event mt-50">
                        <div class="event-title text-center">
                            <!-- <h3>Upcoming events</h3> -->

    <h1 class="text-center">{{ $notice->title }}</h1>
    <p class="text-center">{{ $notice->short_description }}</p><br>
    {!! $notice->job_description !!}<br>
    @if ($notice->files->isNotEmpty())
        <div class="">
            <!-- <h2>Files:</h2> -->
            <ul class="files-list text-center">

                @foreach ($notice->files as $file)
        <li>
            @if (in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']))
                <img src="{{ asset('files/' . $file->filename) }}" data-fancybox="gallery-img" alt="Image"><br>
            @else
            @endif
        </li>
    @endforeach

            </ul>
        </div>
    @endif
   
                        </div>
                        

                    </div></div></section>
@endsection