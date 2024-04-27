@extends('layout')
@section('title', 'SKKE School | About')

   @section('content')
<style>
    .about-cont p {
    padding-top: 14px;
}
.bg_cover {
    background-position: bottom;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100%;
}
.pt-70 {
    padding-top: 0px;
}
.pb-110 {
    padding-bottom: 50px;
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
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(/assets2/images/about/image-1.jpg)">
        <div class="container">
            <div class="row">
                <?php foreach($ptas as $pta){ ?>
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $pta->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $pta->title }}</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
                <?php }?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title mt-50">
                        <h5 style="color: #07294d;">{{ $pta->title }}</h5>
                    </div> 
                    <div class="about-cont mt-50 ">
                    <hp>{{ $pta->short_description }}</hp>
                       <p>{{ $pta->long_description }}</p>
                       {{-- Assuming $pta->job_description contains the rich text with links --}}
{!! $pta->job_description !!}<br>
                    </div>
            </div>
        </div> 
    </section>



   @endsection