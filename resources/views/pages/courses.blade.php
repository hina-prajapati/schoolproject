@extends('layout')
@section('title', 'SKKE School | Courses')
@section('content')



<style>
.single-course .cont {
    padding-top: 28px;
    padding-bottom: 34px;
    padding-left: 30px;
    padding-right: 30px;
    text-align: center;
    text-decoration: underline;
}

.image {
    width: 250px;
    height: 250px;
    display: flex;
    margin: auto;
    margin-top: 32px;
    align-items: center;
}

.main {
    background-image: url('/effect/images/bg.jpg');


}

.single-course:hover .twist-animation {
    animation: twistEffect 4s ease-out forwards;

}

.single-course {
    background-color: #fff;
    border-radius: 35px 0px 35px 0px;
    overflow: hidden;
    border: 5px solid #ffc600;
}

@keyframes twistEffect {
    0% {
        transform: scale(0.5) rotate(0deg);
        opacity: 0;
    }

    50% {
        transform: scale(1.2) rotate(360deg);
        opacity: 1;
    }

    100% {
        transform: scale(1) rotate(0deg);
        opacity: 1;
    }
}

img.set-img {
    width: 123px;
}

.set-img {
    animation: moveForwardBackward 5s linear infinite;
    /* Adjust duration (5s) and timing function (linear) as needed */
}

@keyframes moveForwardBackward {
    0% {
        transform: translateX(0);
    }

    50% {
        transform: translateX(100px);
        /* Adjust the distance to move forward */
    }

    100% {
        transform: translateX(0);
    }
}

.pt-115 {
    padding-top: 50px;
}

.pb-120 {
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

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
    style="background-image: url(/assets2/images/about/2.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Our Courses</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== COURSE PART START ======-->
<section id="course-part" class="pt-115 pb-120 main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-45">
                    <h5>Our course</h5>
                    <h2>Courses</h2>
                    <img src="/assets2/images/about/shap-download.png" class="set-img">
                </div>
            </div>
        </div>
        <div class="row course-slide mt-30">
            <div class="col-lg-4">
                <div class="single-course position-relative" class="aos-animate" data-aos="zoom-out"
                    data-aos-delay="1200" data-aos-duration="1000">
                    <div class="thum">
                        <div class="image twist-animation">
                            <img src="/assets2/images/course/pre-primary.jpg" alt="Course">
                        </div>

                    </div>
                    <div class="cont">

                        <a style="text-decoration: underline; color: green;" href="{{ url('preprimary') }}">
                            <h4 class="text-center" style="text-align: center;">Pre Primary</h4>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-course" class="aos-animate" data-aos="zoom-in" data-aos-delay="400"
                    data-aos-duration="1000">
                    <div class="thum">
                        <div class="image twist-animation">
                            <img src="/assets2/images/course/primary-school.gif" alt="Course">
                        </div>

                    </div>
                    <div class="cont">

                        <a style="text-decoration: underline; color: green;" href="{{ url('primary') }}">
                            <h4>Primary</h4>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-course" class="aos-animate" data-aos="zoom-out" data-aos-delay="800"
                    data-aos-duration="1000">
                    <div class="thum">
                        <div class="image twist-animation">
                            <img src="/assets2/images/course/secondery-school.gif" alt="Course">
                        </div>

                    </div>
                    <div class="cont">

                        <a style="text-decoration: underline; color: green;" href="{{ url('secondary') }}">
                            <h4>SECONDARY</h4>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-course" class="aos-animate" data-aos="zoom-in" data-aos-delay="1200"
                    data-aos-duration="1000">
                    <div class="thum">
                        <div class="image twist-animation">
                            <img src="/assets2/images/course/university-5680021-4729862.gif" alt="Course">
                        </div>

                    </div>
                    <div class="cont">

                        <a style="text-decoration: underline; color: green;" href="{{ url('college') }}">
                            <h4>COLLEGE</h4>
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--====== COURSE PART ENDS ======-->

@endsection
