@extends('layout')
   @section('content')
    <title>{{ $event->title }}</title>

<style>
 .events-left   img {
    width: 100%;
    height: 400px;
    display: block !important;
}

.address ul {
    list-style-type: none; /* Remove bullet points */
    margin: 0;
    padding: 0;
}


</style>
 <!--====== PAGE BANNER PART START ======-->

 <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="5" style="background-image: url(/assets2/images/about/events.gif)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $event->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $event->title }}</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== EVENTS PART START ======-->

    <section id="event-single" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="events-area">
                <div class="row">
              
                    <div class="col-lg-8">
                        <div class="events-left">
                            <h3>{{ $event->title }}</h3>
                      
                                <!-- <i class="fa fa-calendar"></i> -->
                            <b>Start Date </b>:    {{ $event->start_date }} <b class="ms-4">End Date</b>:    {{ $event->end_date }}
                            <!-- <a href="#"><span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span></a> -->
                            <!-- <a href="#"><span><i class="fa fa-map-marker"></i> Rc Auditorim</span></a> -->
                            <!-- <img src="images/event/single-event/se-1.jpg" alt="Event"> -->
                            <!-- @foreach($event->files as $file)
                        <img src="{{ asset('files/' . $file->filename) }}" data-fancybox="gallery-img" alt="Image">
                    
                    @endforeach -->

                    @if ($event->thumbnail)
                        <img src="{{ asset('/single_events/' . $event->thumbnail) }}" data-fancybox="gallery-img" alt="Thumbnail" class="w-100">
                        @else
                        
                        @endif
                 <p>         {{ $event->long_description }}</p>
                 {!! $event->job_description !!}<br>
                        </div> <!-- events left -->
                    </div>
                    <div class="col-lg-4">
                        <div class="events-right">
                         
                            <div class="events-address mt-30">
                                <ul>
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="cont">
                                        <h6>Start Time</h6>
                                        <span>{{ date('h:i A', strtotime($event->start_time)) }}</span>
                                    </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-bell-slash"></i>
                                            </div>
                                            <div class="cont">
                                            <h6>Finish Time</h6>
                                            <span>{{ date('h:i A', strtotime($event->end_time)) }}</span>
                                        </div>
                                        </div> 
                                    </li>
                                    <li>
                                        <div class="single-address">
                                            <div class="icon">
                                                <i class="fa fa-map"></i>
                                            </div>
                                            <div class="cont">
                                        <h6>Address</h6>
                                        <span>{{ strip_tags($event->address) }}</span>
                                    </div>

                                        </div> 
                                    </li>
                                </ul>
                                <!-- <div id="contact-map" class="mt-25"></div>  -->
                            </div>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
    </section>

    <!--====== EVENTS PART ENDS ======-->


    <script>
    $(document).ready(function() {
        $(".gallery-img").on('click', function() {
            $(this).width(100).height('auto'); // Enlarge the clicked image
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