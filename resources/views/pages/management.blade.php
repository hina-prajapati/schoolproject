
@extends('layout')
@section('title', 'SKKE School | Message From Management')

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
                        <h2>Message from Management</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Message from Management</li>
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
                        <img src="/assets2/images/about/ManagementMessage.jpg" data-fancybox="gallery-img fancybox" alt="About">
                    </div> 
                </div> 
                <div class="col-lg-7">
                    <div class="section-title mt-50">
                        <h5>Message from Management</h5>
                        <h2>“A journey of thousand miles begins with a single step”  </h2>
                    </div> 
                    <div class="about-cont">
                        <p>Education is not mere accumulation of facts; it is preparation for life itself. Education is knowledge imbued with wisdom and ethics. It develops the personality of the students, moulds their character and develops mental skills to help them cope with problems and challenges of the complex world of today.</p>
                        <p> We started SKKE School under the umbrella SMPR Shala trust in1986 with a vision to provide an excellent opportunity to the students and parents looking for holistic development. We built not just the building and classrooms; but we have created an ecosystem and environment for learning and education. </p>
                    </div>
                </div> 
               
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>01</span>
                           
                            <p>We created a culture of excellence and performance. With continuous improvement in our systems, facilities and amenities, we have always added a reason to choose SKKES as a preferred destination for school education from pre primary to junior college level.</p>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>02</span>
                           
                            <p>We must mention that we are proud to have a team of talented and dedicated teachers who are experts in their respective subjects. They have the proven track record to produce excellent results in academics, sports and co-curricular activities. They are the real assets of the school. We take pride that our school has produced top scorers and achievers.  </p>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>03</span>
                            <!-- <h4>Our visions</h4> -->
                            <p>From a humble beginning, we have now grown into a full-fledged school education provider. We wish to thank all who have contributed and also who are contributing to the journey of SMPRS family.</p>
                        </div> 
                    </div>
                </div> 
            </div> 
        </div> 
    </section>
    <!--====== MANAGEMENT PART ENDS ======-->


    @endsection