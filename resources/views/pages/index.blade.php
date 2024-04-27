   @extends('layout')
   @section('title', 'SKKE School | Home')
   @section('content')
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>

    .bg_cover{
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    background-position: center;
}
.icon img {
    filter: brightness(0) invert(1);
}
.cont:hover span{
    text-decoration: underline;
}
p{
    color: #07294d;
}
img#galleryImage {
    width: 400px;
    height: 200px;
}
.navigation .navbar .navbar-nav {
    margin-right: -60px;
}
.section-title {
    display: block !important;
}
.teacher-image img {
    display: block !important;
}
.main-btnn {
    display: inline-block;
    font-weight: 500;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid #ffc600;
    padding: 0 12px;
    font-size: 12px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    line-height: 30px;
    border-radius: 5px;
    color: #07294d;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    z-index: 5;
    -webkit-transition: 0.4s ease-in-out;
    transition: 0.4s ease-in-out;
    /* background-color: #ffc600; */
    margin-top: 18px;
}
.single-teacher-2 {
    background-color: #fff;
    border-radius: 5px;
    border: 1px solid #8080801f;
}
.main-btnn:hover {
    background-color: #ffc600;
}
/* .slick-track {
    position: relative;
    top: -50px;
    left: 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
    height: 600px;
} */
.news-cont:hover h3 {
    text-decoration: underline;
}
.event-title {
    display: flex;
    justify-content: space-between;
}
#testimonial .section-title {
    position: relative;
    z-index: 5;
    padding: 20px;
    font-size: 21px;
}
.teacher-image img {
    width: 100%;
    HEIGHT: 200PX;
}
.section-title a:hover{
    text-decoration: underline;
}
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

.about-single-items {
    border: 2px solid #8080801f;
    padding: 15px;
}
.image-container {
    position: relative;
    display: inline-block;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0; /* initially invisible */
    transition: opacity 1.2s ease;
    display: flex;
    justify-content: center;
    align-items: center;
}

.overlay a {
    color: #fff;
    text-decoration: none;
    margin: 10px;
    display: none; /* initially hidden */
    transition: 1.2s;
}
h6.teacher-title a:hover {
    text-decoration: underline;
}
.image-container:hover .overlay a {
    display: inline-block; /* show buttons on hover */
    transition: 1.2s;
}
.image-container:hover::before {
    content: '';
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    right: 0px;
    background: #000000c4;
    transition: 1.2s;
}

.image-container{
    transition: 1.2s;
}
a.main-btn.mt-4.btn-title:hover {
    text-decoration: none;
}

.texttt:hover a{
    text-decoration: underline;
}

.main-btnn {
    display: inline-block;
    font-weight: 500;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid #504e4780;
    padding: 1px 12px;
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    line-height: 35px;
    border-radius: 6px;
    color: #07294d;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    z-index: 5;
    -webkit-transition: 0.4s ease-in-out;
    transition: 0.4s ease-in-out;
    /* background-color: #ffc600; */
}


.rainbow {
  position: relative;
  z-index: 0;
  overflow: hidden;
  /* padding: 2rem; */
  justify-content: center;
  align-items: center;
  font-family: sans-serif;
  font-weight: bold;
  border-radius: 5px;
}
.about-event ul li .single-event a h4 {
    padding-top: 5px;
    padding-bottom: 10px;
    color: #ffc600;
    font-size: 24px;
    -webkit-transition: all 0.4s linear;
    transition: all 0.4s linear;
}



.single-course {
    background-color: #fff;
    border-radius: 35px 0px 35px 0px;
    overflow: hidden;
    border: 5px solid #ffc600;
}

.single-publication {
    background-color: #fff;
    padding: 0px;
    border-radius: 5px;
    border: 8px solid #ffc600;
}
.single-publication .content {
    margin: 5px;
}

.single-news .news-cont a h3 {
    font-size: 21px;
    color: #000;
    padding-bottom: 20px;
    padding-top: 10px;
    -webkit-transition: all 0.4s linear;
    transition: all 0.4s linear;
}
.single-news .news-thum img {
    width: 100%;
    border-radius: 5px;
    border: 8px solid #ffc600;
}

.main{
    background-image: url('/effect/images/bg.jpg');


}
h5, h2 {
    visibility: visible; /* Make sure it’s not hidden */
    opacity: 1; /* Check opacity */
}
.about-event {
    background: red;
    height: 100%;
}

.effect {
    background-image: url('/effect/images/image.png');
    background-repeat: no-repeat;
}
.eventss{
    background-image: url('/effect/images/bg.jpg');
}


@keyframes backgroundAnimation {
    0% {
        background-position: 0 0; 
    }
    100% {
        background-position: 100% 100%; 
    }
}

.category {
    background-image: linear-gradient(45deg, rgba(245, 70, 66, 0.75), rgba(8, 83, 156, 0.75)), url('/assets2/images/about/left-header-bg-shape.png');
    background-repeat: no-repeat;
    animation: backgroundAnimation 100s ease infinite; 
}

h5, h2, p{
    display: block I !important;
}
.pb-110 {
    padding-bottom: 50px;
}
.pt-115 {
    padding-top: 50px;
}

.slider-content {
  animation: zoom-in 4s infinite;
}

@keyframes zoom-in {
  0% {
    opacity: 0;
    transform: scale(0.5); /* Start with smaller size */
  }
  100% {
    opacity: 1;
    transform: scale(1); /* End with original size */
  }
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

.single-course:hover .twist-animation {
    animation: twistEffect 4s ease-out forwards;
}

.single-category .icon {
    display: inline-block;
    border: 2px dashed #444040;
    border-radius: 100px;
    
}

span.icon img {
    width: 80px !important;
    padding: 16px;
}

@keyframes heartbeat {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.about-home-slider-icon5 {
    position: absolute;
    z-index: -1;
    top: 3%;
    right: -4%;
    width: 12%;
    animation: heartbeat 1.5s ease-in-out 2s infinite;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

/* @keyframes lineAnimation {
    0% {
        transform: scaleX(1.2); 
        opacity: 0; 
    }
    50% {
        transform: scaleX(1); 
        opacity: 1; 
    }
    100% {
        transform: scaleX(1); 
        opacity: 0; 
    }
} */
@keyframes popOut {
    0%, 100% {
        transform: scale(1); /* Normal size */
        opacity: 1;
    }
    50% {
        transform: scale(1.2); /* Scaled up */
        opacity: 1;
    }
}
.about-home-sliders-icon5{
    position: absolute;
    z-index: -1;
    top: 42%;
    left: -18%;
    width: 43%;
    transform-origin: left center; /* Set the transform origin to the left edge */
    animation: heartbeat 3s ease-in-out 2s infinite;

}

.about-home-sliders-icon5 {
    position: absolute;
    z-index: -2;
    left: -5%;
    width: 47%;
    animation: popOut 5s infinite ease;
    top: -130px;
}


.about-home-slider-icon3 {
    position: absolute;
    z-index: -1;
    top: 42%;
    left: -18%;
    width: 43%;
    transform-origin: left center; /* Set the transform origin to the left edge */
    animation: heartbeat 3s ease-in-out 2s infinite;}

    .about-home-slider-icon2 {
    position: absolute;
    z-index: -1;
    /* bottom: 0px; */
    left: -11%;
    width: 35%;
    /* animation: swing 5s infinite ease; */
    animation: popOut 5s infinite ease;
    top: -15px;
}
.about-home-slider-icon6 {
    animation: swing 2s infinite ease;
    position: absolute;
    z-index: -2;
    margin-left: 460px;
    margin-top: -88px;
    margin-right: -31px;
}
.about-home-slider-icon1 {
    position: absolute;
    z-index: -1;
    top: -2%;
    left: -4%;
    width: 15%;
    animation: beat 1s infinite alternate;
}
@keyframes beat {
    0% {
        transform: scale(1);
    }
    100% {
        transform: scale(1.3);
    }
}

.about-home-slider1-icon5 {
    position: absolute;
    z-index: -2;
    left: 85%;
    margin-top: -17px;
    /* width: 229px; */
    /* height: 31px; */
    animation: beat 1s infinite alternate;
}
@media only screen and (max-width: 678px){
        .about-home-slider-icon6 {
    animation: swing 2s infinite ease;
    position: absolute;
    z-index: -2;
    margin-left: 0px !important;
    margin-top: -88px;
    /* margin-right: -31px; */
}
        }
        @media only screen and (max-width: 678px){
        .image {
    width: 100%;
    height: 250px;
    display: flex;
    margin: auto;
    margin-top: 32px;
    align-items: center;
}
}


@keyframes rotation {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

/* Apply the rotation animation */
.apply-cont img {
    animation: rotation 8s linear infinite;
}

.apply-cont img {
    animation: rotation 8s linear infinite;
    /* width: 48px;
    height: 48px; */
    margin-bottom: 20px;
 
}
@media only screen and (max-width: 678px){
    .apply-cont img {
    animation: rotation 8s linear infinite;
    /* width: 48px; */
    /* height: 48px; */
    margin-bottom: 20px !important;
    display: flex;
    margin: auto;
}
}

h2 {
  color: hsl(0, 0%, 50%);
  /* font-size: 50px; */
  font-weight: bold;
  
  /* font-family: monospace; */
  /* letter-spacing: 7px; */
  /* cursor: pointer; */
}

h2 span {
  transition: 0.5s ease-out;
}
h2 {
  transition: 0.5s ease-out;
}
/* h2:hover span:nth-child(1) {
  margin-right: 5px;
} */
h2:hover span:nth-child(1):after {
  content: "'";
}

h2:hover :nth-child(1):after {
  content: "'";
}
/* h2:hover span:nth-child(2) {
  margin-left: 30px;
} */
h2:hover span {
  color: #fff;
  text-shadow: 0 0 10px green, 0 0 20px green, 0 0 40px green;

}

h2:hover  {
  color: #fff;
  text-shadow: 0 0 10px red, 0 0 20px red, 0 0 40px red;
}
h2.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;

}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}   h2.word {
      margin: auto;
      text-shadow: 5px 2px #82868bed, 2px 4px #2fc10b, 3px 5px #db1007;
      /* text-shadow: 5px 2px #222324, 2px 4px #222324, 3px 5px #222324; */
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

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active ">
    @foreach ($banners as $banner)
<div class="single-slider bg_cover pt-150" style="background-image: url({{ ('banners/' . $banner->thumbnail) }})" data-overlay="4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-9 text-center">
                <div class="slider-cont">
                    <h1 class="slider-content typed" data-aos="zoom-in" data-aos-delay="1000">{{ $banner->title }}</h1>
                    <ul>
                        <li><a data-aos-delay="50" data-aos-duration="1000" data-aos="fade-down" data-aos-delay="1000" data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ url('/about') }}">Read More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach



        <!-- <div class="single-slider bg_cover pt-150" style="background-image: url(/assets2/images/slider/slider2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                       <div class="col-xl-12 col-lg-9 text-center">
                        <div class="slider-cont">
                            <h1 class="slider-content"  data-aos="zoom-in" data-aos-delay="1000" data-animation="fadeInLeft" data-delay="1s">SKKE School</h1>
                            <ul>
                               <li><a data-animation="fadeInUp"  data-delay="1.6s" class="main-btn" href="{{ url('/about') }}">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>

        <div class="single-slider bg_cover pt-150" style="    background-position: top; background-image: url(/assets2/images/slider/slider3.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                       <div class="col-xl-12 col-lg-9 text-center">
                        <div class="slider-cont">
                            <h1 class="slider-content"  data-aos="zoom-in" data-aos-delay="1000" data-animation="fadeInLeft" data-delay="1s">SKKE School</h1>
                            <ul>
                               <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ url('/about') }}">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div> 


        <div class="single-slider bg_cover pt-150" style="background-image: url(/assets2/images/slider/slider4.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                       <div class="col-xl-12 col-lg-9 text-center">
                        <div class="slider-cont">
                            <h1 class="slider-content"  data-aos="zoom-in" data-aos-delay="1000" data-animation="fadeInLeft" data-delay="1s">SKKE School</h1>
                            <ul>
                               <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ url('/about') }}">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 

        <div class="single-slider bg_cover pt-150" style="background-image: url(/assets2/images/slider/slider5.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                       <div class="col-xl-12 col-lg-9 text-center">
                        <div class="slider-cont">
                            <h1 class="slider-content"  data-aos="zoom-in" data-aos-delay="1000" data-animation="fadeInLeft" data-delay="1s">Skke School</h1>
                            <ul>
                               <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="{{ url('/about') }}">Read More</a></li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </div>
        </div>  -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2 class="word" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000"></h2>
                        </div>
                    </div>
                    <!-- <div class="about-home-sliderss-icon5"><img src="/assets2/images/about/left-header-bg-shape.png" alt="" class="img-fluid"></div> -->

                    <div class="col-lg-6 offset-lg-1 position-relative col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slide  mt-40">
                            <div class="col-lg-4 ">
                                <a href="{{ url('preprimary') }}">
                                    <span class="single-category text-center  color-1" data-aos="zoom-in" data-aos-delay="120" data-aos-duration="1000">
                                        <span class="icon">
                                            <img src="/assets2/images/all-icon/earth-globe-planet.svg" alt="Icon" style="width: 80px; color: #fff;">
                                        </span>
                                        <span class="cont">
                                            <span>PRE PRIMARY</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ url('primary') }}">
                                    <span class="single-category text-center color-2" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
                                        <span class="icon">
                                            <img src="/assets2/images/all-icon/monuments.png" alt="Icon" style="width: 80px;">
                                        </span>
                                        <span class="cont">
                                            <span>PRIMARY</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ url('secondary') }}">
                                    <span class="single-category text-center color-3" data-aos="zoom-in" data-aos-delay="800" data-aos-duration="1000">
                                        <span class="icon">
                                            <img src="/assets2/images/all-icon/microscopes2.png" alt="Icon" style="width: 80px;">
                                        </span>
                                        <span class="cont">
                                            <span>SECONDARY</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="{{ url('college') }}">
                                    <span class="single-category text-center color-1" data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="1000">
                                        <span class="icon">
                                            <img src="/assets2/images/all-icon/university-icon-7.png" alt="Icon" style="width: 80px;">
                                        </span>
                                        <span class="cont">
                                            <span>COLLEGE</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="preprimary.html">
                                    <span class="single-category text-center color-2" data-aos="zoom-in" data-aos-delay="1600" data-aos-duration="1000">
                                        <span class="icon">
                                            <img src="/assets2/images/all-icon/earth-globe-planet.svg" alt="Icon" style="width: 80px;">
                                        </span>
                                        <span class="cont">
                                            <span>PRE PRIMARY</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="primary.html">
                                    <span class="single-category text-center color-3" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
                                        <span class="icon">
                                            <img src="/assets2/images/all-icon/monuments.png" alt="Icon" style="width: 80px;">
                                        </span>
                                        <span class="cont">
                                            <span>PRIMARY</span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="about-home-sliders-icon5"><img src="/assets2/images/about/shape-1.png" alt="" class="img-fluid"></div> -->

                </div>
            </div>
        </div>
    </section>

    <!--====== CATEGORY PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                <div class="section-title mt-50 typed">
                    <!-- <img src="/assets2/images/about/shap-star.jpg"> -->
                <h5 class="aos-animate" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000">About us</h5>
                <!-- <img src="/public/assets2/images/about/line.png"> -->
             
               <h2 class="aos-animate animate-charcter"  data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000"><span>SHETH KARAMSHI</span>KANJI ENGLISH<span>SCHOOL</span></h2>
                </div>
                <div class="about-cont">
                    <p data-aos="fade-down"  data-aos-delay="50" data-aos-duration="1000">SHETH KARAMSHI KANJI ENGLISH SCHOOL, MANAGED BY S.M.P.R.SHALA TRUST is affiliated to the CBSE Board, Delhi.</p>
                    <p data-aos="fade-down"  data-aos-delay="50" data-aos-duration="1000">It enjoys an important place in Mulund's education map and provides a progressive , broad based and comprehensive education to boys and girls...</p>
                </div>

                        <!-- <div class="col-lg-7">
                            <div class="about-image mt-50">
                                <img src="/assets2/images/about/about.jpeg" alt="About">
                            </div>
                        </div>  -->


                    <div class="about-cont">
                        <a href="{{ url('about') }}" class="main-btn mt-55">Read More</a>
                    </div>
                </div> <!-- about cont -->
        
               
                <div class="col-lg-6 offset-lg-1">
                
                <!-- <div class="about-home-slider-icon1"> <img src="/assets2/images/about/square-circle-shap.jpg" class="setupimg00" alt="About"></div> -->
                <div class="about-home-slider-icon2"> <img src="/assets2/images/about/as1.webp" class="setupimg" alt="About"></div>

                <!-- <div class="about-home-slider-icon1"> <img src="/assets2/images/about/about-home-slider-icon1.svg" class="setupimg00" alt="About"></div> -->
                <!-- <div class="about-home-slider-icon2"> <img src="/assets2/images/about/about-home-slider-icon2.svg" class="setupimg" alt="About"></div> -->
                <div class="about-home-slider-icon5"><img src="/assets2/images/about/about-home-slider-icon5.svg" alt="" class="img-fluid"></div>
                <!-- <div class="about-home-slider-icon3"><img src="/assets2/images/about/about-home-slider-icon3.svg" alt="" class="img-fluid"></div> -->
                <div class="about-home-slider-icon3"><img src="/assets2/images/about/line.png" alt="" class="img-fluid"></div>

                    <div class="about-event mt-50">
                        <div class="event-title">
                                             <h3 style="color: #07294d;text-decoration: underline;">Notice</h3>
                            <hr>
                            <h5><a href="{{ url('/bulletin-board')}}"  style="color:#07294d;  font-size: 12px; padding: 1px 12px">All Notice</a></h5>
                        </div>
                        <ul>
                            <?php foreach ($notices as $val) {?>
                            <li>
                                <div class="single-event">
                                    <span class="aos-animate" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="1000"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($val->date)->format('j F Y') }}</span>
                                    <a class="aos-animate" data-aos="zoom-out" data-aos-delay="400" data-aos-duration="1000" href="/notice/{{ $val->slug }}"><h4>{{ $val->title }}</h4></a>
                                    <!-- <span><i class="fa fa-clock-o"></i> 10:00 Am - 3:00 Pm</span> -->
                                    <!-- <span><i class="fa fa-map-marker"></i> Rc Auditorim</span> -->
                                </div>
                            </li>
                            <?php }?>
                        </ul>

                    </div> 
              
                    <!-- <div class="about-home-slider-icon6"> <img src="/assets2/images/about/as1.webp" class="setupimg" alt="About"></div> -->

                   <div class="about-home-slider-icon6"> <img src="/assets2/images/about/about-home-slider-icon2.svg" class="setupimg" alt="About"></div>
                </div>
            </div>
        </div>
        <div class="about-bg">
            <!-- <img src="/assets2/images/about/49c62cd432f0a901f53b001e1848e263.gif" alt="About"> -->
            
        </div>
        
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    <section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
            <div class="about-home-sliders-icon5"><img src="/assets2/images/about/as1.webp" alt="" class="img-fluid"></div>

                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                        <img src="/assets2/images/about/shap-star.jpg">
                            <h3>CBSE REGULATIONS </h3>
                            <p>Regulation given by the Educational minister and the detail is also given as per the CBSE regulation to check the detais .
                            </p>
                            <a href="{{ url('cbse-regulation') }}" class="main-btn">Know the Detail</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                        <img src="/assets2/images/about/shap-star.jpg">
                            <h3>Public Disclosure</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirems sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="{{ url('public-disclosure') }}" class="main-btn">Read More</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
                <div class="about-home-slider1-icon5"><img src="/assets2/images/about/shape-1.png" alt="" class="img-fluid"></div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

  

    <section id="course-part" class="pt-115 pb-120 main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5>Our course</h5>
                        <h2>Courses</h2>
                    </div>
                </div>
            </div>
            <div class="row course-slide mt-30">
                <div class="col-lg-4" >
                    <div class="single-course position-relative" class="aos-animate" data-aos="zoom-out" data-aos-delay="1200" data-aos-duration="1000">
                        <div class="thum">
                        <div class="image twist-animation">
                                <img src="/assets2/images/course/pre-primary.jpg" alt="Course">
                            </div>

                        </div>
                        <div class="cont">

                            <a style="text-decoration: underline; color: green;" href="{{ url('preprimary') }}"><h4 class="text-center" style="text-align: center;">Pre Primary</h4></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-course" class="aos-animate" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000">
                        <div class="thum">
                            <div class="image twist-animation">
                                <img src="/assets2/images/course/primary-school.gif" alt="Course">
                            </div>

                        </div>
                        <div class="cont">

                            <a style="text-decoration: underline; color: green;" href="{{ url('primary') }}"><h4>Primary</h4></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-course" class="aos-animate" data-aos="zoom-out" data-aos-delay="800" data-aos-duration="1000">
                        <div class="thum">
                            <div class="image twist-animation">
                                <img src="/assets2/images/course/secondery-school.gif" alt="Course">
                            </div>

                        </div>
                        <div class="cont">

                            <a style="text-decoration: underline; color: green;" href="{{ url('secondary') }}"><h4>SECONDARY</h4></a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-course" class="aos-animate" data-aos="zoom-in" data-aos-delay="1200" data-aos-duration="1000">
                        <div class="thum">
                            <div class="image twist-animation">
                                <img src="/assets2/images/course/university-5680021-4729862.gif" alt="Course">
                            </div>

                        </div>
                        <div class="cont">

                            <a style="text-decoration: underline; color: green;" href="{{ url('college') }}"><h4>COLLEGE</h4></a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====== COURSE PART ENDS ======-->


     <!--====== ABOUT PART START ======-->

     <!-- <section id="about-page" class="pt-70 pb-110 gray-bg mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title mt-50">
                        <h5>NURSERY [ ADMISSIONS ]</h5>
                        <h2>NURSERY NEW ADMISSIONS (2024-25)</h2>
                    </div>
                    <div class="about-cont">
                        <p>
                            Admission Notice (2024-25) - [<a href="/assets2/Images/Final Admission Notice 2024-25.docx" download="Final Admission Notice 2024-25">CLICK HERE</a>]
                        </p>
                        <p>
                            Admission Notice (2024-25) - [<a href="/assets2/Images/Final Admission Notice 2024-25.docx" download="Final Admission Notice 2024-25">CLICK HERE</a>]
                        </p>
                        <p>
                            Nursery admission registration link - [<a href="https://schoolregistration.mastersofterp.in/?collCode=SKKES_17190001" target="_blank">CLICK HERE TO REGISTER</a>]
                        </p>
                        <p>
                            Prospectus - [<a href="/assets2/Images/Prospectus.pdf" download="Prospectus 2024-25">CLICK HERE</a>]
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image mt-50">
                        <img src="/assets2/images/course/Notice 24-25.jpeg" alt="About">
                    </div>
                </div>
            </div>
            <div class="about-items pt-60 ">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>01</span>
                            <h4 style="text-decoration: underline;">EVENTS</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-f">
                        <div class="about-single-items mt-30">
                            <span>02</span>
                            <h4 style="text-decoration: underline;">CELEBRATIONS</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>02</span>
                            <h4 style="text-decoration: underline;">BULLETIN BOARD</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!--====== ABOUT PART ENDS ======-->




    <!--====== TEACHERS PART START ======-->

    <section id="teachers-part" class="pt-70 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> <!-- section title -->
                    <div class="teachers-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                        <a href="#" class="main-btn mt-55">Career with us</a>
                    </div> <!-- teachers cont -->
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="teachers mt-20">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-teachers mt-30 text-center" class="box" data-aos="zoom-in" data-aos-delay="100" data-aos-delay="100" data-aos-duration="1000">
                                    <div class="image">
                                        <img src="/assets2/images/teachers/t-1.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                                        <span>Vice Chancellor</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-teachers mt-30 text-center" class="box" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1000">
                                    <div class="image">
                                        <img src="/assets2/images/teachers/t-2.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-single.html"><h6>David card</h6></a>
                                        <span>Pro Chancellor</span>
                                    </div>
                                </div> <!-- single teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="single-teachers mt-30 text-center" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">
                                    <div class="image">
                                        <img src="/assets2/images/teachers/t-3.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-single.html"><h6>Rebeka Alig</h6></a>
                                        <span>Pro Chancellor</span>
                                    </div>
                                </div> <!-- single teachers -->
                            </div>
                            <div class="col-sm-6">
                                <div class="single-teachers mt-30 text-center" data-aos="zoom-in" data-aos-delay="700" data-aos-duration="1000" >
                                    <div class="image">
                                        <img src="/assets2/images/teachers/t-4.jpg" alt="Teachers">
                                    </div>
                                    <div class="cont">
                                        <a href="teachers-single.html"><h6>Hanna Bein</h6></a>
                                        <span>Aerobics head</span>
                                    </div>
                                </div> <!-- single teachers -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TEACHERS PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->

     <!--====== PUBLICATION PART START ======-->

     <section id="publication-part" class="pt-115 pb-120 effect" style="padding-top: 42px;     padding-bottom: 100px;">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        <h5 style="color:#fff;">Admission</h5>
                        <h2 style="color:#fff;">Admission Notice</h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <!-- <a href="#" class="main-btn">All Products</a> -->
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">

                <?php foreach ($admissions as $admission) {?>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center" class="aos-animate" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="2000">
                        <div class="image">
                        <!-- @foreach($admission->files as $file)
                            @if(in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']))
                                <img src="{{ asset('admission/' . $file->filename) }}" alt="Image" style="height: 150px;">
                            @endif
                        @endforeach -->
                        <img src="{{ asset('singleImageAdmission/' . $admission->thumbnail) }}" data-fancybox="gallery-img" alt="Image"><br>

                            <div class="add-cart">
                                <ul>
                                <li><a href="{{ route('pages.admission', ['slug' => $admission->slug]) }}"><i class="fa fa-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a href="{{ route('pages.admission', ['slug' => $admission->slug]) }}"><h3 style="font-size: 12px;">{{ $admission->title }}</h3></a></h5>
                        </div>
                    </div>
                </div>
                <?php }?>


                <div class="col-lg-3 col-md-6 col-sm-8">
                </div>
            </div>
        </div>
    </section>

    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== PUBLICATION PART ENDS ======-->

   <!--====== NEWS PART START ======-->

   <section id="news-part" class="pt-115 pb-110 eventss">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>Events</h5>
                        <h2>UPCOMING EVENTS</h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    <div class="products-btn text-right pb-60">
                        <a href="{{ url('/pages/all-events') }}" class="main-btn">All Events</a>
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row">
    @php $firstEvent = true; @endphp
    @foreach ($eventss as $val)
        @if ($firstEvent)
            <div class="col-lg-6">
                <div class="single-news mt-30">
                    <div class="news-thum pb-25" class="aos-animate" data-aos="zoom-out" data-aos-delay="100" data-aos-duration="2000">
                        <!-- @foreach($val->files as $file)
                            <img src="{{ asset('files/' . $file->filename) }}" alt="Image">
                        @endforeach -->
                        @if ($val->thumbnail)
                        <img src="{{ asset('/single_events/' . $val->thumbnail) }}" alt="Thumbnail" class="w-100">
                        @else

                        @endif
                    </div>
                    <div class="news-cont">
                  <ul>
                  <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        <!-- Start Time: {{ $val->start_time }} -->
                        <!-- End Time: {{ $val->end_time }} -->
                        <b>Start Date</b>: {{ \Carbon\Carbon::parse($val->start_date)->format('d M Y') }}
                        <b class="ms-4">End Date</b>: {{ \Carbon\Carbon::parse($val->end_date)->format('d M Y') }}
                    </a>
                </li>
                  </ul>
                        <a href="/event/{{ $val->slug }}"><h3>{{ $val->title }}</h3></a>
                        <p>{{ $val->short_description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-news news-list" class="aos-animate" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="2000">
                    <div class="row">
        @php $firstEvent = false; @endphp
        @else
            <div class="col-sm-4">
                <div class="news-thum mt-30">
                    <!-- @foreach($val->files as $file)
                        <img src="{{ asset('files/' . $file->filename) }}" alt="Image">
                    @endforeach -->
                    @if ($val->thumbnail)
                        <img src="{{ asset('/single_events/' . $val->thumbnail) }}" alt="Thumbnail" class="w-100">
                        @else

                        @endif
                </div>
            </div>

              <div class="col-sm-8">
              <div class="news-cont mt-30">
                    <ul>
                    <li>
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        <b>Start Date</b>: {{ \Carbon\Carbon::parse($val->start_date)->format('d M Y') }}
                        <b class="ms-4">End Date</b>: {{ \Carbon\Carbon::parse($val->end_date)->format('d M Y') }}
                    </a>
                </li>
                        <!-- <li><a href="#"> <span>By</span> Adam linn</a></li> -->
                    </ul>
                    <a href="/event/{{ $val->slug }}"><h3>{{ $val->title }}</h3></a>
                    <p>{{ $val->short_description }}</p>
                </div>
              </div>
                @endif
    @endforeach
        </div>

        </div>
        </div>

        </div>

        </div>
    </section>

    <!--====== NEWS PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slide">
            <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-4.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-2.png" alt="Logo">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-3.png" alt="Logo">
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->



  <!--====== COURSE PART START ======-->

  <!-- <section id="teachers-page" class="pt-90 pb-120">
    <div class="container">
        <div class="section-title">
            <h5>Photo Gallery</h5>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Secondary_Annual_Concert_20192020.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Secondary Annual Concert..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Random_Filedov050xm.ofi080323013105.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Primary Annual Concert..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Annual_School_Exhibition.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Annual School Exhibition</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/International_Yoga_Day.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">International Yoga Day</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Annual_Sports_Meet_201819.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Annual Sports Meet..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Republic_Day_Celebration_202223.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Republic Day Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Farewell_Diary_202223.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Farewell Diary..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/X__Felicitation_202223.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">X - Felicitation..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>





            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Gandhi_Jayanti_Celebration_202223.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Gandhi Jayanti Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Gandhi_Jayanti_Celebration_202223.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Std. 4th Farewell..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Random_File0sy1a2s1.blq140323114657.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Prize Distribution Std. 1 to 4</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Summer_Camp_202324.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Summer Camp..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Earth_Day_Celebration_202324.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Earth Day Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img src="/assets2/images/blog/blog-post/Investiture_Ceremony_202324.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Investiture Ceremony..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/World_Music_Day.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">World Music Day..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/World_Environment_Day.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">World Environment Day..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>







            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/G20_Activities.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">G20 Activities..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Aashadi_Ekadashi_Celebration.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Aashadi Ekadashi Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Random_Filenlagkrui.vjz250723071853.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Guru Purnima ..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Investiture_Ceremony_Primary_Section_202324.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Investiture Ceremony Primary Section..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>





            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Independence_Day_Celebration.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Independence Day Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Raksha_Bandhan_Celebration.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Raksha Bandhan Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/TEACHERS_DAY_CELEBRATION.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Teachers Day Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Janmashtami_Celebration.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Janmashtami Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Random_File2knlbsna.jim160923115244.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Hindi Divas Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Random_Filex5j51ata.2an071023100606.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Ganesh Chaturthi..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Mahatma_Gandhi_and_Lal_Bahadur_Shastri_Jayanti.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Mahatma Gandhi..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Random_Fileohsnklka.sex021123120617.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Annual School Exhibition..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Dussehra_Celebration_2023.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Dussehra Celebration..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/World_Nature_Day_2023.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">World Nature Day..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/World_Food_Day_2023.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">World Food Day..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/DIwali_and_Childrens_Day_Celebration_2023.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">DIwali and Children's Day..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>




            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Christmas_Day_2023.jpg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Christmas Day..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-teacher-2 text-center mt-30">
                    <div class="teacher-image">
                        <img  src="/assets2/images/blog/blog-post/Fun_Trip_2023.jpeg" data-fancybox="gallery-img fancybox"  alt="Teacher">

                    </div>
                    <div class="teacher-content">
                        <h6 class="teacher-title"><a href="#">Fun Trip..</a></h6>
                        <a href="#" class="main-btnn"> Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8"> </div>
            <div class="col-lg-3 col-md-6 col-sm-8"></div>



        </div>
    </div>
</section> -->
<!--====== COURSE PART ENDS ======-->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init({
    offset: 100, // Change this value according to your needs
    duration: 1000, // Duration of animation in milliseconds
    easing: 'ease-in-out', // Easing type
    once: false, // Whether animation should occur only once
    mirror: true // Animate elements while scrolling both up and down
  });
</script>
<script>
    var words = ['Best platform to learn everything', 'Best platform', 'to learn', 'everything'],
        part,
        i = 0,
        offset = 0,
        len = words.length,
        forwards = true,
        skip_count = 0,
        skip_delay = 15,
        speed = 70;

    var wordflick = function () {
      setInterval(function () {
        if (forwards) {
          if (offset >= words[i].length) {
            ++skip_count;
            if (skip_count == skip_delay) {
              forwards = false;
              skip_count = 0;
            }
          }
        } else {
          if (offset == 0) {
            forwards = true;
            i++;
            offset = 0;
            if (i >= len) {
              i = 0;
            }
          }
        }
        part = words[i].substr(0, offset);
        if (skip_count == 0) {
          if (forwards) {
            offset++;
          } else {
            offset--;
          }
        }
        $('.word').text(part);
      }, speed);
    };

    $(document).ready(function () {
      wordflick();
    });
  </script>

<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
    
</script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
@endsection