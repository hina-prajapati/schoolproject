
@extends('layout')
@section('title', 'SKKE School | Pre Primary')

   @section('content')
   <style>
    .bg_cover {
    background-size: auto !important;
    background-position: center !important;
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
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="5" style="background-image: url(/assets2/images/about/istockphoto-1203093236-612x612.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>PRE-PRIMARY</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PRE-PRIMARY</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
 

    <section id="shop-page" class="pt-120 pb-70">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-5">
                    <div class="shop-top-search">
                  
                        <img src="/assets2/images/course/pre-primary.jpg">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-title sectionss">
                        <h5 class="" style="font-size: 22px; color: green !important;" >PRE-PRIMARY SECTION</h5>
                        <div class="">
                        <p class="mt-2"> At SKKES we provide each child with a high quality early childhood experience and school readiness.</p>
                        <p class="mt-2">We make pre primary section a positive experience ensuring that coming to school is enjoyable as well as beneficial. Our vision for pre primary is summarized as</p>
                    </div>
                    <h6 class="mt-4" style="color: green !important;">PRE-PRIMARY TEACHING-LEARNING STRATEGIES</h6>
                    <div class="about-cont">
                        <ul style="list-style-type: disc;">
                            <li>A stimulating learning environment nurturing every individual, focusing on the creation of a vibrant  happy atmosphere &creating confident young learners who love coming to school is the aim of the pre-primary department</li>
                            <li>Thematic teaching
                            </li>
                            <li>A multiple intelligence approach as different students have different attitudes- they benefit each others strengths and resources to develop very carefully chosen their competence.</li>
                            <li>A month  wise planner is sent on the first day of the month for the parents’ convenience. This gives them a clear picture of the fun activities that their child will be participating in.</li>
                            <li>Multi-sensory approach for concepts such as number work, English, Hindi & EVS is followed through the use of multimedia.</li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        
            <div class="row mt-5 d-flex align-items-center">
              
                <div class="col-md-6">
                    <div class="section-title ">
                        <h5 class="mt-3" >SKILLS</h5>
                    <div class="about-cont">
                        <ul style="list-style-type: disc;">
                       <li>Design inquiry-based learning experiences. Designing hands-on, "minds-on" activities help students make real-world sense of concepts by applying what they are learning</li>
                       <li>Development of communication skills is an important focus
                        </li>
                        <li>To build fluency between school subjects and their application to real-world contexts</li>
                        </ul>
                        <h6 class="mt-4">VALUE BASED EDUCATION</h6>
                        <div class="about-cont">
                           <p>Education should aim at multifaceted development of a human being – intellectual, physical, spiritual, and ethical development. Youth is the mirror in which future of a Nation is fully reflected. In order to preserve, maintain and advance globally, it is imperative to inculcate in students values based education starting from the pre-primary level, embracing the entire spectrum of the educational process.</p>
                        </div>
                       
                    </div>
                    <h6 class="mt-4">EVALUATION AND ASSESSMENT</h6>
                    <p class="mt-2">Nursery/K.G. – Continuous criterion scheme of assessment is followed.</p>
                    <p class="mt-2">Parents of Nursery and K.G. are requested to interact with the teacher at regular intervals.
                    </p>
           
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-top-search">
                  
                        <img src="/assets2/images/course/call_img.png">
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <!--====== ABOUT PART ENDS ======-->

    @endsection