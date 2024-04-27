@extends('layout')
@section('content')

<style>
.image-container img {
    display: block !important;
}

.image-container img {
    width: 100%;
    height: 180px;
}

img.img-content {
    /* border: 2px solid; */
    border-radius: 4px;
    transform-style: preserve-3d;
    box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034),
        0 6.7px 5.3px rgba(0, 0, 0, 0.048), 0 12.5px 10px rgba(0, 0, 0, 0.06),
        0 2.3px 70.9px rgba(0, 0, 0, 0.072), 0 6.8px 15.4px rgba(0, 0, 0, 0.01);
}

/* Add hover effect for zooming images */
.image-container {
    transition: transform 0.5s ease-in-out;
}

.image-container:hover img {
    transform: scale(1.1);
    transition: 0.8s;
}

img {
    transition: 0.5s;
}

.section-title img {
    background-color: floralwhite;
}

.pt-115 {
    padding-top: 50px;
}

.pt-115 {
    padding-top: 40px;
}

.pb-120 {
    padding-bottom: 50px;
}
</style>

<!--====== PAGE BANNER PART START ======-->
<section id="page-banner" class="pt-105 pb-110 bg_cover"
    style="background-image: url(/assets2/images/about/AboutUs.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>{{ $gallery->title }}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $gallery->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<!-- Display Gallery -->
<!-- Display Gallery -->

<section id="course-part" class="pt-115 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title ">
                    <div class="row">
                        @foreach($images as $image)
                        <div class="col-md-3 mt-4">
                            <div class="image-container" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000"
                                style="   background: #fff;  padding: 20px;">
                                <img class="img-content zoom-image" src="{{ asset('gallery22/' . $image->filename) }}"
                                    data-fancybox="gallery-img" alt="{{ $image->filename }}"
                                    style="display: block !important;">

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <!-- Previous Page Link -->
                        @if ($images->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $images->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')">&laquo;</a>
                        </li>
                        @endif

                        <!-- Pagination Elements -->
                        @for ($i = 1; $i <= $images->lastPage(); $i++)
                            <li class="page-item {{ $images->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $images->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            <!-- Next Page Link -->
                            @if ($images->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $images->nextPageUrl() }}" rel="next"
                                    aria-label="@lang('pagination.next')">&raquo;</a>
                            </li>
                            @else
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link" aria-hidden="true">&raquo;</span>
                            </li>
                            @endif
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>


<script>
$(document).ready(function() {
    $(".gallery-img").on('click', function() {
        $(this).width(100).height('800'); // Enlarge the clicked image
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
