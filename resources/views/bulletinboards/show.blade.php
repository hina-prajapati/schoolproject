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
   </style>

<!--====== PAGE BANNER PART START ======-->
<section id="page-banner" class="pt-105 pb-110 bg_cover" style="background-image: url(/assets2/images/about/AboutUs.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $bulletinBoardItem->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $bulletinBoardItem->title }}</li>
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
    
        <!-- <img src="{{ asset('/cover/' . $bulletinBoardItem->cover) }}" alt="Image"> -->
      
        <img class="" src="{{ asset('/cover/' . $bulletinBoardItem->cover) }}" data-fancybox="gallery-img" alt="{{ $bulletinBoardItem->title }} thumbnail">
    
        </div>
   
                <div class="col-lg-5">
                    <div class="section-title mt-50 mb-5">
                        <h5>About us</h5>
                        <h2>{{ $bulletinBoardItem->title }}</h2>
                    </div>
                    <div class="about-cont">
                       <h4 class="mb-3">Date</h4>
                       <p>{{ \Carbon\Carbon::parse($bulletinBoardItem->date)->format('d F Y') }}</p>
                       <hr>
                       <h4 class="mb-3">Place</h4>
                       <p>{{ $bulletinBoardItem->place }}</p>
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