@extends('layout')
@section('title', 'SKKE School | College')

   @section('content')

   <style>
    section#about-page p, li {
    color: #07294d;
}
.section-title h5 {
    font-size: 26px;
}

@media (max-width: 768px){
    .responsiveness {
  float: none !important;
}
}

.responsiveness { color: #07294d;
    float: inline-end;
}

.bg_cover {
    background-size: cover;
    background-position: bottom;
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
    
  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="5" style="background-image: url(/assets2/images/about/360_F_434085662_Pd3yWP81H8d7kGW5Z1J3SfSfvMgGsth7.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>COLLEGE</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">COLLEGE</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mt-50">
                        <h5 class="mb-3" style="color: #ffc600;">SHETH MOTOBHAI PACHAN RASHTRIYA SHALA TRUST</h5>
                    </div>
                    
                    <div class="about-cont">
                       <p class="mb-2">Our educational institution has stood against the test of time and has successfully emerged out as a seat of learning, where every child has been able to find a holistic view of education. ‘Challenging heights’ is our motto. And with this motto itself, we have imbibed in our children, a drive to strive and stretch beyond the limits.</p>
                       <p>Teaching-learning is a complex process. The role of education and its impact on every individual plays a vital role in today’s world. It is teacher’s main goal to balance and shape the student’s intellectual, emotional, moral and spiritual spheres. So with the help of a battery of excellent talented and well qualified teachers, we have been able to mould every student into such a personality who will easily face the challenges of life and the world. The institution also provides a conducive atmosphere for the students to achieve excellence in various fields of study. It has also helped them to discover and develop their potential.</p>
                       <p>It is said that the fulfilment of the dream of ‘developing India into a global super power lies in the hands of the children who are the future citizens of our nation.’ Though not a lion’s share, we, at S.M.P.R..S. have been making efforts to create such a balanced and responsible mass of human resource for the ‘New India’, that we have become a bench mark in and around Mulund as a ‘Unique’ centre of learning. Our salient points are as follows:</p>
                       <div class="res-content">
                        <p>*  Well qualified and trained Staff</p>
                       <p>*  Spacious, bright and airy rooms and corridors.</p>
                       <p>* Well equipped Science Laboratories.</p>
                       <p>&nbsp;&nbsp;* Spacious open Stilt Hall and 2 enclosed halls to conduct college functions and programmes.</p>
                       <p>* Ample of books, related to subject matter, in Library.</p>
                       <p>*  Parent-Teacher Meetings at regular intervals to discuss the progress of their wards.</p>
                       <p>*  Curricular, Co-curricular and Extra-curricular Activities throughout the year.</p>
                       <p>* Participation in Inter-collegiate Competitions. </p>
                       </div>
                    </div>

                  
                
            </div> <!-- row -->
      
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

   @endsection