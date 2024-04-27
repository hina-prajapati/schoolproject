@extends('layout')
@section('title', 'SKKE School | Publich Disclosure')

   @section('content')

   <style>
    .teachers-right .nav {
    font-size: 12px;
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
                        <h2>PUBLIC DISCLOSURE</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PUBLIC DISCLOSURE</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
  
   
    <section id="teachers-single" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-12">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">A. GENERAL INFORMATION :</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">B. DOCUMENTS AND INFORMATION :</a>
                            </li>
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">C. RESULT AND ACADEMICS :</a>
                            </li>

                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviewss" role="tab" aria-controls="reviews" aria-selected="false">RESULT CLASS: X</a>
                            </li>

                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviewsss" role="tab" aria-controls="reviews" aria-selected="false">RESULT CLASS: XII</a>
                            </li>

                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviewsssd" role="tab" aria-controls="reviews" aria-selected="false">D. STAFF (TEACHING) :</a>
                            </li>

                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviewsssdd" role="tab" aria-controls="reviews" aria-selected="false">E. SCHOOL INFRASTRUCTURE :                                </a>
                            </li>
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="single-dashboard pt-40">
                                        <div class="courses-cont pt-20">
                                       <table class="table" border="2">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>NAME OF THE SCHOOL</td>
                                                <td>SHETH KARAMSHI KANJI ENGLISH SCHOOL</td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>AFFILIATION NO.</td>
                                                <td>1130085</td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>SCHOOL CODE</td>
                                                <td>30092</td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>COMPLETE ADDRESS WITH PIN CODE</td>
                                                <td>V.P.ROAD, MULUND (WEST), MUMABI – 80.</td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>PRINCIPAL NAME &amp; QUALIFICATION</td>
                                                <td>MRS. VARSHA DESHPANDE (M.Sc., B.Ed.)</td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>SCHOOL EMAIL ID</td>
                                                <td>smpr@rediffmail.com</td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>CONTACT DETAILS</td>
                                                <td>022-25653085, 25656249</td>
                                            </tr>
                                       
                                       </table>
                                       </div>

                                    </div> <!-- single dashboard -->
                                  
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="single-dashboard pt-40">
                                <div class="courses-cont pt-20">
                                    <table class="table" border="2">
                                        <thead>
                                            <tr>
                                                <th>Sr. No.</th>
                                                <th>DOCUMENTS AND INFORMATION</th>
                                                <th>UPLOAD DOCUMENTS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF AFFILIATION, IF ANY</td>
                                                <td><a href="/assets2/images/AFFILIATION.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td>COPIES OF SOCIETIES / TRUST / COMPANY REGISTRATION / RENEWAL CERTIFICATE. AS APPLICABLE</td>
                                                <td><a href="/assets2/images/demo/pdf/Trust Registration certificate.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED, IF APPLICABLE, BY THE STATE GOVT. / UT</td>
                                                <td><a href="/assets2/images/demo/pdf/NO_OBJECTION CERTIFICATE.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>4.</td>
                                                <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009 AND IT’S RENEWAL IF APPLICABLE</td>
                                                <td><a href="/assets2/images/demo/pdf/RTE.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>5.</td>
                                                <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE</td>
                                                <td><a href="/assets2/images/demo/pdf/BUILDING SAFETY CERTIFICATE.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>6.</td>
                                                <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</td>
                                                <td><a href="/assets2/images/demo/pdf/FIRE SAFETY CERTIFICATE.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>7.</td>
                                                <td>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR AFFILIATION / UPGRADATION / EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY SCHOOL</td>
                                                <td><a href="/assets2/images/demo/pdf/DEO CERTIFICATE.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>8.</td>
                                                <td>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATES</td>
                                                <td><a href="/assets2/images/demo/pdf/WATER HEALTH SANITATION CERTIFICATE.pdf" target="_blank">Click Here</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p><span style="font-weight: 700;">NOTE</span> : the school needs to upload the self attested copies of above listed documents by chairman / manager / secretary and principal. in case, it is noticed at later stage that uploaded documents are not genuine then school shall be liable for action as per norms.</p>
                                </div> <!-- courses cont -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="single-dashboard pt-40">
                                    <div class="courses-cont pt-20">
                                <table class="table" border="2">
                                    <thead>
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>DOCUMENTS / INFORMATION</th>
                                            <th>UPLOAD DOCUMENTS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>FEES STRUCTURE OF THE SCHOOL</td>
                                            <td><a href="../assets2/images/demo/pdf/FEE STRUCTURE 2021.pdf" target="_blank">Click Here</a></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>ANNUAL ACADEMIC CALENDAR</td>
                                            <td><a href="../assets2/images/demo/pdf/ANNUAL ACADEMIC CALENDAR.pdf" target="_blank">Click Here</a></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                            <td><a href="../assets2/images/demo/pdf/LIST OF SCHOOL MANAGEMENT COMMITTEE.pdf" target="_blank">Click Here</a></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>LIST OF PARENTS TEACHERS’ ASSOCIATION (PTA) MEMBERS</td>
                                            <td><a href="../assets2/images/demo/pdf/LIST OF PARENT TEACHERS ASSOCIATION PTA 2021-22.pdf" target="_blank">Click Here</a></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>LAST THREE-YEAR RESULT OF THE BOARD EXAMINATIONS AS PER APPLICABLE</td>
                                            <td><a href="../assets2/images/demo/pdf/Last Three Year Result.pdf" target="_blank">Click Here</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviewss" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="single-dashboard pt-40">
                                    <div class="courses-cont pt-20">
                                        <table class="table" border="2">
                                        
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>YEAR</th>
                                                        <th>NO. OF REGISTERED STUDENTS</th>
                                                        <th>NO. OF STUDENTS PASSED</th>
                                                        <th>PASS PERCENTAGE</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>2021</td>
                                                        <td>167</td>
                                                        <td>167</td>
                                                        <td>100</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>2022</td>
                                                        <td>167</td>
                                                        <td>167</td>
                                                        <td>100</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>2023</td>
                                                        <td>175</td>
                                                        <td>175</td>
                                                        <td>100</td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            
                                        </table>
                                </div>
                                </div>
                             </div>
                            <div class="tab-pane fade" id="reviewsss" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="single-dashboard pt-40">
                                    <div class="courses-cont pt-20">
                                        <table class="table" border="2">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>YEAR</th>
                                                        <th>NO. OF REGISTERED STUDENTS</th>
                                                        <th>NO. OF STUDENTS PASSED</th>
                                                        <th>PASS PERCENTAGE</th>
                                                        <th>REMARKS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="6"><strong>NOT APPLICABLE</strong></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviewsssd" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="single-dashboard pt-40">
                                    <div class="courses-cont pt-20">
                                        <table class="table" border="2">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>INFORMATION</th>
                                                        <th>DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>PRINCIPAL</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>TOTAL NO. OF TEACHERS<br>
                                                        #PGT<br>
                                                        #TGT<br>
                                                        #PRT</td>
                                                        <td>65<br>
                                                        --<br>
                                                        30<br>
                                                        35</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>TEACHERS SECTION RATIO</td>
                                                        <td>1:5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>DETAILS OF SPECIAL EDUCATOR</td>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviewsssdd" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="single-dashboard pt-40">
                                    <div class="courses-cont pt-20">
                                        <table class="table" border="2">
                                                <thead>
                                                    <tr>
                                                        <th>Sr. No.</th>
                                                        <th>INFORMATION</th>
                                                        <th>DETAILS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1.</td>
                                                        <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQ. MTR)</td>
                                                        <td>1926.80 SQ.MTR.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2.</td>
                                                        <td>NO. AND SIZE OF THE CLASS ROOMS (IN SQ. MTR)</td>
                                                        <td>47 ROOMS. - 45.33 SQ. MTR.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3.</td>
                                                        <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQ.MTR)</td>
                                                        <td>PHYSICS LAB - 1 (81.92 SQ. MTR.)<br>
                                                        CHEMISTRY LAB - 1 (81.92 SQ. MTR.)<br>
                                                        BIOLOGY LAB - 1 (81.92 SQ. MTR.)<br>
                                                        COMPUTER LAB - 1 (51.56 SQ. MTR.)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4.</td>
                                                        <td>INTERNET FACILITY (Y/N)</td>
                                                        <td>YES</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5.</td>
                                                        <td>NO. OF GIRLS TOILETS</td>
                                                        <td>12</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6.</td>
                                                        <td>NO. OF BOYS TOILETS</td>
                                                        <td>26</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7.</td>
                                                        <td>LINK OF YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE INFRASTRUCTURE OF THE SCHOOL</td>
                                                        <td><a href="https://www.youtube.com/watch?v=JYRob-7Z44U" target="_blank">https://www.youtube.com/watch?v=JYRob-7Z44U</a></td>
                                                    </tr>
                                                </tbody>
                                        </table>
                                </div>
                                </div>
                             </div>
                                    
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
   @endsection