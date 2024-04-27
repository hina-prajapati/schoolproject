@extends('layout')
@section('title', 'SKKE School | Message From Principal')
   @section('content')
  
   <style>
    .about-single-items {
    border: 2px solid #80808014;
    padding: 12px;
    height: 350px;
}
.about-image img {
    width: 100%;
    border-radius: 5px;
    display: block !important;
}

.section-title h2 {
    font-size: 30px;
    color: #000;
    padding-top: 10px;
}
p{
    color: #07294d;
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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" style="background-image: url(/assets2/images/about/AboutUs.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Message from Principal</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Message from Principal</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== MANAGEMENT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5">
                    <div class="about-image mt-50">
                        <img src="/assets2/images/about/PrincipalMessage.jpg" data-fancybox="gallery-img fancybox" alt="About">
                    </div> 
                </div> 
                <div class="col-lg-7">
                    <div class="section-title mt-50">
                        <h5>Message from Principal</h5>
                        <h2>‘Enter to Learn and Depart to Serve’  </h2>
                    </div> 
                    <div class="about-cont">
                        <p>Students of SKKES are given the above mantra and are trained for excellence. Here we aim at the holistic development of the children and help them to become future ready citizens.</p>
                        <p> Being a CBSE Board School, the curriculum emphasizes the acquisition of the knowledge, useful skills , understanding , critical thinking and the problem solving abilities. The staff believes that every student is unique and special and that they all have ability to learn.   </p>
                        <p>We at SKKES give equal importance to academic as well as co –curricular activities. while  academic excellence is our major thrust; we also provide a platform to the students to showcase their individual talents in all spheres of life.</p>
                        <p>We all have the potential that is limitless when compared to the extent to which we have talents. My message to all SKKESians is to take the canvas of hope and the brush of glorious vision to paint your own  portrait of excellence.</p>
                        <span style="color: green; text-decoration:underline; margin-top: 12px;">Mrs. Varsha Deshpande</span>
                    </div>
                </div> 
            </div> <!-- row -->
        </div> 
    </section>



   @endsection