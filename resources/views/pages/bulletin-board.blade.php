@extends('layout')
@section('title', 'SKKE School | Bulletin Board')

   @section('content')
   <style>
    .section-title {
    padding: 20px;
    font-size: 18px;
    text-align: center;
}

@keyframes rotate {
	100% {
		transform: rotate(1turn);
	}
}

.rainbow {
	position: relative;
	z-index: 0;
	
	border-radius: 5px;
	overflow: hidden;
	padding: 2rem;
	
	&::before {
		content: '';
		position: absolute;
		z-index: -2;
		left: -50%;
		top: -50%;
		width: 200%;
		height: 200%;
		background-color: #399953;
		background-repeat: no-repeat;
		background-size: 50% 50%, 50% 50%;
		background-position: 0 0, 100% 0, 100% 100%, 0 100%;
		background-image: linear-gradient(#399953, #399953), linear-gradient(#fbb300, #fbb300), linear-gradient(#d53e33, #d53e33), linear-gradient(#377af5, #377af5);
		animation: rotate 4s linear infinite;
	}
    
    &::after {
        content: '';
        position: absolute;
        z-index: -1;
        left: 4px;
        top: 4px;
        width: calc(100% - 7px);
        height: calc(100% - 7px);
        background: white;
        border-radius: 5px;
        /* animation: opacityChange 3s infinite alternate; */
    }
    }

@keyframes opacityChange {
	50% {
		opacity:1;
	}
	100% {
		opacity: .5;
	}
}
.event-cont:hover{
    transition: 0.25s;
    transform: scale3d(1.15, 1.15, 1);
}

.event-cont{
    position: relative;
    overflow: hidden;
    transition: 0.25s;
}

@keyframes rotate {
    100% {
        transform: rotate(1turn);
      
    }
}
.single-event-list-2{
    border: 2px dashed green;
}

.pt-90 {
    padding-top: 30px;
}

.pb-120 {
    padding-bottom: 50px;
}
.single-event-list-2 .event-cont a h4 {
    padding-top: 20px;
    padding-bottom: 10px;
    color: #000;
    font-size: 18px;
    -webkit-transition: all 0.4s linear;
    transition: all 0.4s linear;
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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/assets2/images/about/arrangement-blank-sticky-notes_23-2148857217.avif)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Bulletin Board</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bulletin Board</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> 
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!-- <section id="teachers-single" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Events</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Celebrations</a>
                            </li>
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Bulletin Board</a>
                            </li>
                        </ul> 
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">

                                <div class="single-dashboard pt-40">
                                    <?php foreach ($bulletinBoard as $val) { ?>
                                       <img src="{{ asset('/cover/' . $val->cover) }}" alt="Image">
                                   
                                      <div class="section-title mt-5">
                                        <h4 style="font-size: 22px;">{{ $val->title }}</h4>
                                        <a class="mt-3" href="https://www.youtube.com/watch?v=SV4dtV_8p70">{{ $val->link  }}</a>
                                        <div class="mt-5">
                <a href="{{ route('bulletinboards.show', ['slug' => $val->slug]) }}" class="main-btn" style="color: #fff;">Read More</a>
            </div>
                                      </div>
                                   <?php } ?>
                                    </div>
                                    <div class="single-dashboard pt-40">
                                        <img src="/assets2/images/about/Virtual_Investiture_Ceremony_by_SKKE_School_on_3_July_2021.jpg">
                                      <div class="section-title mt-5">
                                        <h4 style="font-size: 22px;">Virtual Investiture Ceremony</h4>
                                        <a class="mt-3" href="https://www.youtube.com/watch?v=SV4dtV_8p70">https://www.youtube.com/watch?v=SV4dtV_8p70</a>
                                        <div class="mt-5">
                                            <a href="#" class="main-btn text-center">Read More</a>
                                        </div>
                                      </div>
                                   
                                    </div>
                                    
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="courses-cont pt-20">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-course mt-30">
                                                <div class="thum">
                                                    <div class="image">
                                                        <img src="/assets2/images/course/cu-2.jpg" alt="Course">
                                                    </div>
                                                    <div class="price">
                                                        <span>$10</span>
                                                    </div>
                                                </div>
                                                <div class="cont border">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span>(20 Reviews)</span>
                                                    <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                                                    <div class="course-teacher">
                                                        <div class="thum">
                                                            <a href="#"><img src="/assets2/images/course/teacher/t-2.jpg" alt="teacher"></a>
                                                        </div>
                                                        <div class="name">
                                                            <a href="#"><h6>Mark anthem</h6></a>
                                                        </div>
                                                        <div class="admin">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                                <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-course mt-30">
                                                <div class="thum">
                                                    <div class="image">
                                                        <img src="/assets2/images/course/cu-3.jpg" alt="Course">
                                                    </div>
                                                    <div class="price">
                                                        <span>$30</span>
                                                    </div>
                                                </div>
                                                <div class="cont border">
                                                    <ul>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                    <span>(20 Reviews)</span>
                                                    <a href="#"><h4>Learn basic javascript from start for beginner</h4></a>
                                                    <div class="course-teacher">
                                                        <div class="thum">
                                                            <a href="#"><img src="/assets2/images/course/teacher/t-2.jpg" alt="teacher"></a>
                                                        </div>
                                                        <div class="name">
                                                            <a href="#"><h6>Mark anthem</h6></a>
                                                        </div>
                                                        <div class="admin">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                                                <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-cont">
                                    <div class="title">
                                        <h6>Student Reviews</h6>
                                    </div>
                                    <ul>
                                       <li>
                                           <div class="single-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-thum">
                                                        <img src="/assets2/images/review/r-1.jpg" alt="Reviews">
                                                    </div>
                                                    <div class="author-name">
                                                        <h6>Bobby Aktar</h6>
                                                        <span>April 03, 2019</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>/ 5 Star</span>
                                                    </div>
                                                </div>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="single-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-thum">
                                                        <img src="/assets2/images/review/r-2.jpg" alt="Reviews">
                                                    </div>
                                                    <div class="author-name">
                                                        <h6>Humayun Ahmed</h6>
                                                        <span>April 13, 2019</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>/ 5 Star</span>
                                                    </div>
                                                </div>
                                            </div> 
                                       </li>
                                       <li>
                                           <div class="single-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-thum">
                                                        <img src="/assets2/images/review/r-3.jpg" alt="Reviews">
                                                    </div>
                                                    <div class="author-name">
                                                        <h6>Tania Aktar</h6>
                                                        <span>April 20, 2019</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which.</p>
                                                    <div class="rating">
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>/ 5 Star</span>
                                                    </div>
                                                </div>
                                            </div>
                                       </li>
                                    </ul>
                                    <div class="title pt-15">
                                        <h6>Leave A Comment</h6>
                                    </div>
                                    <div class="reviews-form">
                                        <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Fast name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-single">
                                                            <input type="text" placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <div class="rate-wrapper">
                                                                <div class="rate-label">Your Rating:</div>
                                                                <div class="rate">
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                    <div class="rate-item"><i class="fa fa-star" aria-hidden="true"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <textarea placeholder="Comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-single">
                                                            <button type="button" class="main-btn">Post Comment</button>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 
        </div>
    </section> -->



    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
           <div class="col-12">
                <div class="section-title pb-50 " style="text-align: unset;">
                        <h5>All Notices</h5>
                        <!-- <h2>UPCOMING EVENTS</h2> -->
                    </div> <!-- section title -->
                </div>
           @foreach ($noticesForOtherPages as $notice)
               <div class="col-lg-3">
                   <div class="single-event-list-2 mt-30" data-aos="zoom-in"  data-aos-delay="50" data-aos-duration="1000">
                       <div class="event-cont rainbow">
                            <a href="/notice/{{ $notice->slug }}"><h4>{{ $notice->title }}</h4></a>
                           <span><i class="fa fa-calendar"></i>  {{ \Carbon\Carbon::parse($notice->date)->format('j F Y') }}</span>

                            <!-- <p class="text-center mt-4">{{ $notice->short_description }}</p> -->
                       </div>
                   </div>
               </div>
            @endforeach
           </div> 
            <div class="row">
                <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
    <ul class="pagination justify-content-center">
        <!-- Previous Page Link -->
        @if ($noticesForOtherPages->onFirstPage())
            <li class="page-item disabled" aria-disabled="true">
                <span class="page-link" aria-hidden="true">&laquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $noticesForOtherPages->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
            </li>
        @endif

        <!-- Pagination Elements -->
        @for ($i = 1; $i <= $noticesForOtherPages->lastPage(); $i++)
            <li class="page-item {{ $noticesForOtherPages->currentPage() == $i ? 'active' : '' }}">
                <a class="page-link" href="{{ $noticesForOtherPages->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        <!-- Next Page Link -->
        @if ($noticesForOtherPages->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $noticesForOtherPages->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
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

   @endsection