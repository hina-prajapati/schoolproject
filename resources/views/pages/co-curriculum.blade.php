@extends('layout')
@section('title', 'SKKE School | Co Curriculum')

   @section('content')


<style>
    .about-cont span {
    font-size: 20px;
    font-weight: 700;
    text-decoration: underline;
    margin-top: 20px;
}
</style>


   <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(/assets2/images/course/CoCurriculum.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>CO CURRICULUM</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CO CURRICULUM</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== SHOP PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <!-- <h5>About us</h5> -->
                        <h2 data-aos="zoom-in"  data-aos-delay="50" data-aos-duration="1000">CO CURRICULUM ACTIVITIES
                        </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p data-aos="zoom-in"  data-aos-delay="100" data-aos-duration="1000">Only a healthy child can learn effectively and good health leads to better learning. Many activities are necessary for development of the affective and psychomotor domain. The activities like games and sport, art and music, craft work etc. are termed as co-curricular activities. The term co-scholastic activities is used for both cognitive and non-cognitive development that can take place by exposing the child to the scholastic and nonscholastic subjects.</p>
                        <p data-aos="zoom-in"  data-aos-delay="150" data-aos-duration="1000"> Art Education including local art, craft, literature and skills ,Health and Physical Education, Yoga, traditional games, indigenous sports are integral parts of the curriculum and are included in the routine activities of the schools for the holistic development of children.

                        </p>
                        
                        <span>These are detailed below:</span>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <img src="/assets2/images/children-6733759_1280.png" alt="About">
                    </div>  <!-- about image -->
                </div> 
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30" data-aos="zoom-in"  data-aos-delay="50" data-aos-duration="1000">
                            <span>01</span>
                            <!-- <h4>Why Choose us</h4> -->
                            <p>Art Education entails instruction in various art forms (visual as well as performing) with an aim to help children develop an interest for arts and encourage them to enthusiastically participate in related activities, thus, promoting abilities such as imagination, creativity, valuing arts and cultural heritage. In addition, Arts is integrated with other subjects to promote creative thinking and expression</p>
                        </div> <!-- about single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30" data-aos="zoom-in"  data-aos-delay="500" data-aos-duration="1000">
                            <span>02</span>
                            <!-- <h4>Our Mission</h4> -->
                            <p> Health and Physical Education focuses on holistic development, understanding the importance of physical fitness, health, well being and the factors that contribute to them. Focus of this area is on helping children develop a positive attitude and commitment to lifelong, healthy active living and the capacity to live satisfying, productive lives with the help of health management, indigenous sports, yoga, , self-defence, fitness and life style choices.</p>
                        </div> <!-- about single -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30" data-aos="zoom-in"  data-aos-delay="800" data-aos-duration="1000">
                            <span>03</span>
                            <!-- <h4>Our visions</h4> -->
                            <p> Work Experience : The Work Experience has been subsumed in the Health and Physical Education, however, it is an integral part of the curriculum and is given as much as focus as Health and Physical Education.</p>
                        </div> <!-- about single -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->

   @endsection