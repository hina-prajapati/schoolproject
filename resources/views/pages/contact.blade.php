@extends('layout')
@section('title', 'SKKE School | Contact')
   @section('content')

   <style>
    .map #contact-mapp {
    width: 100%;
    height: 225px;
}


.pb-120 {
    padding-bottom: 70px;
}
.pt-90 {
    padding-top: 30px;
}
  </style>



  <!--====== SEARCH BOX PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    @foreach ($contacts as $contact)
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="5" style="background-image: url({{ ('contacts/' . $contact->thumbnail) }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div> 
        </div>
    </section>
    @endforeach
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-from mt-30">
                        <div class="section-title">
                            <h5>Contact Us</h5>
                            <h2>Keep in touch</h2>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form id="contact-form" action="contact.php" method="post" data-toggle="validator">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="single-form form-group">
                                            <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="single-form form-group">
                                            <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form form-group">
                                            <textarea name="comment" placeholder="comment" data-error="Please,leave us a comment." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- single form -->
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button type="submit" class="main-btn">Send</button>
                                        </div> <!-- single form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
                <div class="col-lg-5">
                    <div class="contact-address mt-30">
                        <ul>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>Sheth Karamshi Kanji English School
                                            V.P.Road, Mulund(w),
                                            Mumbai - 400 080</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+9125653085</p>
                                        <p>+9125656249</p>
                                    </div>
                                </div> <!-- single address -->
                            </li>
                            <li>
                                <div class="single-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>smpr@rediffmail.com</p>
                                        <!-- <p>help.pixelcurve@gmail.com</p> -->
                                    </div>
                                </div> <!-- single address -->
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                    <div class="map mt-30">
                        <div id="contact-mapp">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.5733395668053!2d72.94775327520779!3d19.1701447820539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b8f7177977e9%3A0x15d6842593e19649!2sSheth%20Karamshi%20Kanji%20English%20School!5e0!3m2!1sen!2sin!4v1709902186944!5m2!1sen!2sin" width="100%" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> <!-- map -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== CONTACT PART ENDS ======-->


   @endsection