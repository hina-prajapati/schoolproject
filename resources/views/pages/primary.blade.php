@extends('layout')
@section('title', 'SKKE School | Primary')

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
}.bg_cover {
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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="4" style="background-image: url(/assets2/images/about/group-young-children-cartoon-character-white-background_1308-51545.avif)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>PRIMARY</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PRIMARY</li>
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
                        <h5 class="mb-3">If we teach today’s students as we taught yesterday’s we rob them of tomorrow.</h5>
                        <h4 class="responsiveness">   - John Dewey</h4>
                      
                    </div><br>
                    <h4 style="color: #ffc600;">Pre-Primary Teaching-Learning Strategies</h4>
                    <div class="about-cont">
                       <p class="mb-4">We cannot measure a new generation with an old yardstick and blame them for what they are. As a responsible organisation the onus is on us to satisfy their needs and curiosity. The key to success of our organisation is the way its leaders think, act and communicate. According to Mr Simon Sinek who has developed the ‘Golden Circle’ the WHY the HOW and the WHAT of the organisation play a key role in its success.</p>
                    </div>

                    <h4 style="color: #ffc600;">WHY?</h4>
                    <div class="about-cont">
                        <p class="mb-4">We strongly believe that education is the silver bullet against all the social ills we face in the world today. Buckminister Fuller once commented that everyone is born a genius, but somewhere along the way that genius is suppressed as we are taught to conform to society. We want to keep the flame of genius alive in every child and give them the opportunity to express themselves as truly as they can. Through the various programmes / events conducted on a regular basis, students develop into balanced individuals.</p>
                    </div>

                    <h4 style="color: #ffc600;">HOW?</h4>
                    <div class="about-cont">
                       <p class="mb-4">By offering children myriad learning experiences and learning environments, the curriculum is geared towards integrating technology in the classroom through the use of smart boards. The opportunity to participate in extra – curricular activities, harbours interest, talents and addresses needs. Students are exposed to different ways of thinking while also being reminded of their roots through participation in various festivals and School events.</p>
                    </div>

                    <h4 style="color: #ffc600;">WHAT?</h4>
                    <div class="about-cont">
                       <p>Primary school focuses on encouraging creativity and critical thinking to equip children with skills to adapt to the most rapid changes the world has ever seen. The emphasis is on nurturing talent in every child by imparting values, attitudes and skills. Holistic development of every child is our motto and we strive to achieve it in toto.</p>
                    </div>
                </div> <!-- about cont -->
                
            </div> <!-- row -->
      
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   @endsection