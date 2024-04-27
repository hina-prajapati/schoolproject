@extends('layout')
   @section('content')

   <style>
    img {
    display: block !important;
}

@media (min-width: 992px){
.col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    -webkit-box-flex: 0;
    flex: 0 0 58.333333%;
    max-width: 100%;
}
}
.pt-70 {
    padding-top: 0px;
}
.pb-110 {
    padding-bottom: 50px;
}
   </style>

<!--====== PAGE BANNER PART START ======-->
<section id="page-banner" class="pt-105 pb-110 bg_cover" style="background-image: url(/assets2/images/about/AboutUs.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $achievement->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $achievement->title }}</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<!-- Display Gallery -->



<section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row d-flex align-items-center">
           
       
            <div class="col-lg-7">
            @if (!empty($achievement->thumbnail))
                <img class="" src="{{ asset('/achievement/' . $achievement->thumbnail) }}" data-fancybox="gallery-img" alt="{{ $achievement->title }} thumbnail">
            @endif
        </div>
   

            <!-- @foreach($achievement->achievement_images as $image)
            <div class="col-lg-7">
            <div class="image-container">
                            <a href="{{ asset('achievement/' . $image->filename) }}" data-fancybox="gallery-img">
                                <img src="{{ asset('achievement/' . $image->filename) }}" alt="{{ $image->filename }}" style="display: block !important;">
                            </a>
                        </div>
                </div> 
                @endforeach -->
                <div class="col-lg-5">
                    <div class="section-title mt-50 mb-5">
                        <!-- <h5>About us</h5> -->
                        <h2>{{ $achievement->title }}</h2>
                    </div>
                    <div class="about-cont">
                       <h4 class="mb-3">Date</h4>
                       <p>{{ \Carbon\Carbon::parse($achievement->date)->format('d F Y') }}</p>
                       <hr>
                       <h4 class="mb-3">Place</h4>
                       <p>{{ $achievement->place }}</p>
                       <hr>
                    </div>
                </div> 
            
            </div>
          
     
        </div> 
    </section>
<script>
    $(document).ready(function() {
        $(".gallery-img").on('click', function() {
            $(this).width(100).height('400'); // Enlarge the clicked image
        });

        $(".fancybox").fancybox({
            animationEffect: 'fade',
            thumbs: {
                autoStart: true,
                axis: 'x'
            },
            overlayShow: false,
            scrolling: 'no', // Prevent scrolling to the top after closing
            hideOnContentClick: false, // Keep the content (image) visible after closing
            touch: false, // Disable touch events to prevent automatic hiding
            afterClose: function() {
                $(".gallery-img").css({
                    width: 'auto', // Reset the width of all images
                    height: 'auto' // Reset the height of all images
                });
            }
        });
    });
</script>
@endsection