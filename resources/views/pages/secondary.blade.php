

@extends('layout')
@section('title', 'SKKE School | Secondary')

   @section('content')
   <style>
    .bg_cover {
    background-size: auto !important;
    background-position: center !important;
}
   </style>
    <!--====== HEADER PART ENDS ======-->
   
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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="4" style="background-image: url(/assets2/images/about/360_F_168887015_XPHzRXA8pwSFyhzV1Umc51jQZCAMy5OM.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>SECONDARY</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">SECONDARY</li>
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
                    <!-- <div class="section-title mt-50">
                        <h5 class="mb-3">If we teach today’s students as we taught yesterday’s we rob them of tomorrow.</h5>
                        <h4 class="responsiveness">   - John Dewey</h4>
                      
                    </div><br> -->
                    <!-- <h4 style="color: #ffc600;">Pre-Primary Teaching-Learning Strategies</h4> -->
                    <div class="about-cont">
                       <p class="mb-4">The secondary section aims at the multifaceted, all round development of the students. Though there is a greater stress on the academics there are a lot of activities for the students.</p>
                    </div>

                    <h4 style="color: #ffc600;">Teaching Learning Strategies</h4>
                    <div class="about-cont">
                        <p class="">We have a wonderful team of teachers who are teaching the students their academic subjects and co-curricular subjects.</p>
                        <p>The multiple intelligences of the children are well taken care of by the different teaching methods. Lecture, method, explanation, hands on experiences, project method, heuristic method and the use of TATAEDGE smart class make the teaching learning experience fun filled and complete.</p>
                        <p>Assessment pattern is as per CBSE guidelines and CCE is the method in class V to VIII. Class IX and C assessment are again strictly as per CBSE methods where the last final exam is having maximum weightage of 80%.</p>
                        <p>The grade X results of 2017-18 were in sync with our previous results. All the students passed and the highest score was 97.6% with students scoring full 100 in Maths, Sanskrit and Social Studies. English and Hindi highest was 99 and science highest marks were 98.</p>
                    </div>

                    <div class="about-cont">
                     <li>The month end competitions are in form of debate, elocution, quiz, shloka recitation, singing, dancing.</li>
                     <li>The educational trip is where the students were learn something from nature.</li>
                     <li>We have various clubs where students of class IX and X have compulsory membership. Here students get to learn beyond the books.  </li>
                     <li>There were some wonderful programmes like a talk show on “Life in Antarctica”</li>
                </div> <!-- about cont -->
                
            </div> <!-- row -->
      
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
@endsection