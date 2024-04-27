@extends('layout')
@section('title', 'SKKE School | About')
   @section('content')
  <!--====== PAGE BANNER PART START ======-->
    <style>
        .single-news .news-cont ul li i {
    color: #ffc600;
    margin-right: 8px;
    font-size: 14px;
}
.event-cont span b {
    font-size: 12px;
}
.single-news .news-cont ul li b {
   
    font-size: 14px;
}
.event-thum img {
    height: 150px;
}

/* Media query for screens with a maximum width of 768px */
@media screen and (max-width: 768px) {
    .event-thum img {
        height: unset;
    }
}

.news-thum.mt-30 img {
    width: 100%;
    height: 100px;
    object-fit: cover;
}

.single-news .news-thum img {
    width: 100%;
    border-radius: 5px;
    border: 5px solid #877a7a;
}
    </style>
  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="4" style=" 
 background-image: url(/assets2/images/about/Upcoming-Event.gif)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>All Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Events</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->



      <!--====== EVENTS PART START ======-->



    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>UPCOMING EVENTS</h5>
                        <!-- <h2>UPCOMING EVENTS</h2> -->
                    </div> <!-- section title -->
                </div>
               
            </div> <!-- row -->
            <div class="row">
  
    @foreach ($upcomingEvents as $val)
    
           
            <div class="col-lg-6">
                <div class="single-news news-list">
                    <div class="row">
    
            <div class="col-sm-4">
                <div class="news-thum mt-30">
                    <!-- @foreach($val->files as $file)
                        <img src="{{ asset('files/' . $file->filename) }}" alt="Image">
                    @endforeach -->
                    @if ($val->thumbnail)
            <img src="{{ asset('/single_events/' . $val->thumbnail) }}" alt="Thumbnail" class="w-100">
                @else
                    <!-- Empty space -->
                @endif

                </div>
            </div>
           
              <div class="col-sm-8">
              <div class="news-cont mt-30">
                    <ul>
                    <li>
                  
                        <i class="fa fa-calendar"></i>
                        <b class="text-dark">Start Date :</b> {{ \Carbon\Carbon::parse($val->start_date)->format('d M Y') }}
                        <b class="ms-4 text-dark">End Date :</b> {{ \Carbon\Carbon::parse($val->end_date)->format('d M Y') }}
                 
                    </li>
                        <!-- <li><a href="#"> <span>By</span> Adam linn</a></li> -->
                    </ul>
                    <a href="/event/{{ $val->slug }}"><h3>{{ $val->title }}</h3></a>
                    <p>{{ $val->short_description }}</p>
                </div>
              </div>
               
 
        </div> 
      
        </div> 
        </div>
        @endforeach
        </div>

        </div> 
    </section>


        
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div class="section-title pb-50">
                        <h5>PAST EVENTS</h5>
                        <!-- <h2>UPCOMING EVENTS</h2> -->
                    </div> <!-- section title -->
                </div>
            </div>
           <div class="row">
          
                    @foreach ($events as $event)
                   
            <div class="col-lg-6">
                <div class="single-event-list mt-30">
                    <div class="event-thum">
                       
                    <!-- @foreach($event->files as $file)
                        <img src="{{ asset('/files/' . $file->filename) }}" alt="Event">
                        @endforeach -->
                        @if ($event->thumbnail)
                        <img src="{{ asset('/single_events/' . $event->thumbnail) }}" alt="Thumbnail" class="w-100">
                        @else
                        
                        @endif
                    </div>
                    <div class="event-cont">
                    <span style="font-size: 11px;"><i class="fa fa-calendar"></i><b>Start Date :</b> {{ \Carbon\Carbon::parse($event->start_date)->format('d M Y') }} - <b>End Date :</b>: {{ \Carbon\Carbon::parse($event->end_date)->format('d M Y') }}</span>
                        <a href="/event/{{ $event->slug }}"><h4>{{ $event->title }}</h4></a>
                        <!-- event -->
                        <span>
                        
                         {{ $event->short_description }}</span>
                        <p>{{ $event->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- {{ $events->links() }}  -->

           </div> 
            <div class="row">
            <div class="col-lg-12">
    <nav class="courses-pagination mt-50">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($events->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $events->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @for ($i = 1; $i <= $events->lastPage(); $i++)
                <li class="page-item{{ $events->currentPage() === $i ? ' active' : '' }}">
                    <a class="page-link" href="{{ $events->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            {{-- Next Page Link --}}
            @if ($events->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $events->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>  
</div>

                <!-- <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  
                </div> -->
            </div> 
        </div>
    </section>
    <!--====== EVENTS PART ENDS ======-->


   @endsection