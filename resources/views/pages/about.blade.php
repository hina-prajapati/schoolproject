@extends('layout')
@section('title', 'SKKE School | About')

   @section('content')
<style>
    .about-cont p {
    padding-top: 14px;
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
} h3.word {
      margin: auto;
      text-shadow: 5px 2px #82868bed, 2px 4px #2fc10b, 3px 5px #db1007;
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
    @foreach ($abouts as $banner)
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url({{ ('abouts/' . $banner->thumbnail) }})" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>About School</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About School</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @endforeach
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-page" class="pt-70 pb-110">
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

                </div> <!-- about cont -->
                <div class="col-lg-7">
                    <div class="about-image mt-50" data-aos="fade-up"  data-aos-delay="1000" data-aos-duration="1000">
                        <img src="/assets2/images/about/about.jpeg" alt="About">
                    </div>
                </div> 
            </div>
            <!-- <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>01</span>
                            <h4>Why Choose us</h4>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>02</span>
                            <h4>Our Mission</h4>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                        </div> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-single-items mt-30">
                            <span>03</span>
                            <h4>Our visions</h4>
                            <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit sollicitudirem quibibendum auci</p>
                        </div>
                    </div>
                </div> 
            </div>  -->
        </div> <!-- container -->
    </section>



    <section id="teachers-page" class=" pb-120">
        <div class="container">
           
            <div class="row">
               <div class="col-md-12">
                <div class="text-center">
                    <h3 class="word"></h3>
                    <h6>(MANAGED BY S.M.P.R.SHALA TRUST)</h6>
                </div>
           
                <div class="row mt-3 text-color">
                    <div class="col-md-3 col-6 mt-4">
                        <div class="text-color" data-aos="zoom-in"  data-aos-delay="50" data-aos-duration="1000">
                            <span style="color: #990000; font-weight: 700;">SHRI.DILIP V RAVANI <br>
                                (NURSERY SECTION)</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-4">
                        <div class="" data-aos="zoom-in"  data-aos-delay="300" data-aos-duration="1000">
                            <span style="color: #ffc600; font-weight: 700;">SHRI.DILIP V RAVANI <br>
                                (NURSERY SECTION)</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-4">
                        <div class="" data-aos="zoom-in"  data-aos-delay="500" data-aos-duration="1000">
                            <span style="color: #07294d; font-weight: 700;">SHRI.DILIP V RAVANI <br>
                                (NURSERY SECTION)</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mt-4">
                        <div class="" data-aos="zoom-in"  data-aos-delay="700" data-aos-duration="1000">
                            <span style="color: #008000; font-weight: 700;">SHRI.DILIP V RAVANI <br>
                                (NURSERY SECTION)</span>
                        </div>
                    </div>
                </div>
            </div>
           <div class=" mt-5" style="text-align: justify; margin: 18px;">
            <p data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" class="mb-3">SHETH KARAMSHI KANJI ENGLISH SCHOOL, MANAGED BY S.M.P.R.SHALA TRUST is affiliated to the CBSE Board, Delhi. It enjoys an important place in Mulund's education map and provides a progressive, broad based and comprehensive education to boys and girls.</p>
            <p data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" class="mb-3">S.M.P.R Shala Trust is 78 years old educational trust and is successfully running Gujarati & English medium schools.
                The English medium has completed 33 glorious years .All stake holders have worked tirelessly to arrive at this juncture.</p>
                <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="mb-3">We have classes from Nursery upto Class X with a strength of 2143 students. "Challenging Heights" is our motto .It imbibes in our children a drive to strive and stretch beyond the limits.</p>
                <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" class="mb-3">At SKKES the educational community strives for excellence by preparing the students for learning beyond their school years and assisting them to become lifelong learners.</p>
           </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8" style="background-image: url(/assets2/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">30,000</span>+</span>
                        <p>Students enrolled</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">41,000</span>+</span>
                        <p>Courses Uploaded</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">11,000</span>+</span>
                        <p>People certificate</p>
                    </div> <!-- single counter -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter text-center mt-40">
                        <span><span class="counter">39,000</span>+</span>
                        <p>Global Teachers</p>
                    </div> <!-- single counter -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>
    
    <!--====== COUNTER PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    <section id="teachers-part" class="pt-65 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50 pb-35">
                        <h5>Featured Teachers</h5>
                        <h2>Meet Our teachers</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-1.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-2.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-3.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-4.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-5.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-6.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-7.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-teachers mt-30 text-center">
                        <div class="image">
                            <img src="/assets2/images/teachers/t-8.jpg" alt="Teachers">
                        </div>
                        <div class="cont">
                            <a href="teachers-single.html"><h6>Mark Alen</h6></a>
                            <span>Vice Chancellor</span>
                        </div>
                    </div> <!-- single teachers -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    <section id="testimonial" class="bg_cover pt-115 pb-120" data-overlay="8" style="background-image: url(/assets2/images/bg-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5>Testimonial</h5>
                        <h2>What they say</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slide mt-40">
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-thum">
                            <img src="/assets2/images/testimonial/t-1.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-thum">
                            <img src="/assets2/images/testimonial/t-2.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-6">
                    <div class="single-testimonial">
                        <div class="testimonial-thum">
                            <img src="/assets2/images/testimonial/t-3.jpg" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p>Aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet sem nibh id elit sollicitudirem </p>
                            <h6>Rubina Helen</h6>
                            <span>Bsc, Engineering</span>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- testimonial slide -->
        </div> <!-- container -->
    </section>
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slide">
                <div class="col-lg-12">
                    <div class="single-patnar text-center mt-40">
                        <img src="/assets2/images/patnar-logo/p-1.png" alt="Logo">
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

    <script>
    var words = ['SHETH KARAMSHI KANJI ENGLISH SCHOOL', 'SHETH KARAMSHI', 'KANJI ENGLISH', 'SCHOOL'],
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
   @endsection