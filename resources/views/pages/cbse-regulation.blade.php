@extends('layout')
@section('title', 'SKKE School | CBSC Regulation')

   @section('content')


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
                        <h2>CBSC Regulation</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CBSC Regulation</li>
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
                            <!-- <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">B. OTHER INFORMATION :</a>
                            </li>
                            -->
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="single-dashboard pt-40">
                                        <div class="courses-cont pt-20">
                                            <table class="table" border="2">
                                                <tbody>
                                                    <tr>
                                                        <td>1. Name of the School with Address:<br>
                                                        (Strictly as per Affiliation sanction<br>
                                                        letter or as permitted<br>
                                                        by the Board) with pin code no</td>
                                                        <td><br>
                                                        Sheth Karamshi Kanji English School<br>
                                                        V.P.Road, Mulund(w),<br>
                                                        Mumbai - 400 080</td>
                                                    </tr>
                                                    <tr>
                                                        <td>i. E- Mail<br>
                                                        ii. Website<br>
                                                        iii. Ph. No.<br>
                                                        iv. Fax.No</td>
                                                        <td>smpr@rediffmail.com<br>
                                                        skkeschool.com<br>
                                                        25653085/25656249<br>
                                                        25653085</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2. Year of establishment of school</td>
                                                        <td>1986</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3. Whther NOC from State/UT or<br>
                                                        recommendation of Embassy of India<br>
                                                        obtained?<br>
                                                        i) NOC No.<br>
                                                        ii) NOC issuing date</td>
                                                        <td>NOC from state<br>
                                                        <br>
                                                        <br>
                                                        NOC4004(741/2004)SE-1<br>
                                                        11.06.2004</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4. Is the school is recognised ,if<br>
                                                        yes by which authority ?<br>
                                                        <br>
                                                        Curriculum</td>
                                                        <td>yes<br>
                                                        Affiliated to C.B.S.E Board, Delhi<br>
                                                        <u>Affiliation No: 1130085</u><br>
                                                        N.C.E.R.T Syllabus</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5. Status of Affiiliation :<br>
                                                        Permanent/ Regular / Provisional<br>
                                                        i) Affiliation No.<br>
                                                        ii) Affiliation with Board since<br>
                                                        iii) Extension of Affiliation upto</td>
                                                        <td>Provisional<br>
                                                        <br>
                                                        1130085<br>
                                                        01.04.2005<br>
                                                        31.03.2024</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6. Name of Trust/ Society/Company<br>
                                                        registered under Section 25 of the<br>
                                                        company Act,1956, period upto which Registration of<br>
                                                        Rust/Society is valid.</td>
                                                        <td>Sheth Motibhai Pachan Rashtriya Shala Trust<br>
                                                        regisitered under Public Trust Registration Act<br>
                                                        1950.(Copy attached)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7. List of members of School<br>
                                                        Managing committee with<br>
                                                        their Address/tenure and post<br>
                                                        held</td>
                                                        <td><a href="..//assets2/images/demo/pdf/Managing Committee list.pdf" target="_blank">Managing Committee List</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>8. Name and official address of the Manager/<br>
                                                        President/chairman /Correspondent</td>
                                                        <td>Shri.Kamlesh M Gajaria<br>
                                                        Trustee/Hon.Secretary</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9. Area of school campus<br>
                                                        i) In acres<br>
                                                        ii) in Aq.mtrs<br>
                                                        iii)Built up area (sq.mtrs)<br>
                                                        iv)Area of playground in Sq.mtrs<br>
                                                        v) infrastructure details size of classrooms<br>
                                                        vi)other facilities<br>
                                                        i) Swimming pool<br>
                                                        ii) Indoor games<br>
                                                        iii) Dance rooms<br>
                                                        iv) Gymnasium<br>
                                                        v) Music rooms<br>
                                                        vi) Hostels<br>
                                                        vii)Health and Medical check up</td>
                                                        <td><br>
                                                        <br>
                                                        1926.8<br>
                                                        2129.5<br>
                                                        14.70Mtrs X 30.90 Mtrs<br>
                                                        24 x 20 sq.ft<br>
                                                        <br>
                                                        ---<br>
                                                        Batminton,Table tennis<br>
                                                        7.2 Mtrs X 6 Mtrs<br>
                                                        7.2 Mtrs X 6 Mtrs.<br>
                                                        yes<br>
                                                        No<br>
                                                        yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10. Details of fee structure<br>
                                                        i) Pre-Nursery<br>
                                                        ii) Nursery to Sr.K.G<br>
                                                        iii) I to IV<br>
                                                        iv) V to VIII<br>
                                                        v) IX to X<br>
                                                        vi) XI to XII</td>
                                                        <td><br>
                                                        NA<br>
                                                        3000/- PER MONTH<br>
                                                        2875/- PER MONTH<br>
                                                        2875/- PER MONTH<br>
                                                        2875/- PER MONTH<br>
                                                        NA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11. Transport facility<br>
                                                        i) Own buses<br>
                                                        ii) Buses hired on contract basis<br>
                                                        iii) Details of transport charges</td>
                                                        <td>NA<br>
                                                        <br>
                                                        <br>
                                                        &nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12. Particulars of teaching staff (to be updated time to time)</td>
                                                        <td><a href="..//assets2/images/demo/pdf/Teachers List.pdf" target="_blank">Teaching Staff List</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">13. Administrative staff</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>SrNo</td>
                                                                    <td>Name</td>
                                                                    <td>Designation</td>
                                                                    <td>Date of Appointment</td>
                                                                    <td>Probation/Confirmed</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>Mr.V.Karthikeyan</td>
                                                                    <td>Sr.Accountant</td>
                                                                    <td>12.06.1998</td>
                                                                    <td>Confirmed</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Mrs.Janaki Muthukrishnan</td>
                                                                    <td>Office Executive</td>
                                                                    <td>02.05.2003</td>
                                                                    <td>Confirmed</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Mrs.Varsha S Chavan</td>
                                                                    <td>Office Executive</td>
                                                                    <td>09.06.2003</td>
                                                                    <td>Confirmed</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Ms.Swati Gawli</td>
                                                                    <td>Office Executive</td>
                                                                    <td>18.07.2018</td>
                                                                    <td>Confirmed</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>SrNo</td>
                                                                    <td>Designation<br>
                                                                    PRINCIPAL/TGR/PRT etc.</td>
                                                                    <td>Scale of pay</td>
                                                                    <td>EPF contribution</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>PRINCIPAL</td>
                                                                    <td>47600-151100</td>
                                                                    <td>1800</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>TGT</td>
                                                                    <td>38600-122800</td>
                                                                    <td>1800</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>PRT</td>
                                                                    <td>29200-92300</td>
                                                                    <td>1800</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>PEON</td>
                                                                    <td>15000-47600</td>
                                                                    <td>1800</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>14. Mode of payment of salary<br>
                                                        i) Name of the bank through which salary is drawing<br>
                                                        ii)Through single cheque transfer device.<br>
                                                        iii) individual cheque<br>
                                                        iv) Cash</td>
                                                        <td><br>
                                                        CANARA BANK,MULUND(W)<br>
                                                        YES<br>
                                                        NA<br>
                                                        NA</td>
                                                    </tr>
                                                    <tr>
                                                        <td>15. Library facilities<br>
                                                        i) Size of the library in Sq..feet<br>
                                                        ii)No. of Periodicals<br>
                                                        iii) No. of dialies<br>
                                                        iv) No. of reference books class-wise<br>
                                                        v)No. of Magazine<br>
                                                        vi)Others</td>
                                                        <td><br>
                                                        8.10MTRS X 8.40 MTRS<br>
                                                        10<br>
                                                        7<br>
                                                        5520<br>
                                                        20<br>
                                                        17230</td>
                                                    </tr>
                                                    <tr>
                                                        <td>16. Name of the grievance /redressal officer<br>
                                                        with E-Mail,Ph.No.Fax,No.</td>
                                                        <td>Mrs. Varsha Deshpande<br>
                                                        <a href="mailto:smpr@rediffmail.com" target="_blank">smpr@rediffmail.com</a>, <a href="tel: 25653085" target="_blank">25653085</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>17. Members of sexual harassment committee</td>
                                                        <td>Mrs. Dipti Shetty &amp; Mrs. Mira Iyer</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18. Section wise enrolment of school for the current session</td>
                                                        <td>
                                                        <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>CLASS</td>
                                                                    <td>SECTION</td>
                                                                    <td>ENROLLMENT</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>NURSERY</td>
                                                                    <td>6</td>
                                                                    <td>128</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>JR.K.G</td>
                                                                    <td>4</td>
                                                                    <td>159</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>SR.K.G</td>
                                                                    <td>4</td>
                                                                    <td>164</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>I</td>
                                                                    <td>4</td>
                                                                    <td>176</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>II</td>
                                                                    <td>4</td>
                                                                    <td>175</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>III</td>
                                                                    <td>4</td>
                                                                    <td>156</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>IV</td>
                                                                    <td>4</td>
                                                                    <td>167</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>V</td>
                                                                    <td>4</td>
                                                                    <td>178</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>VI</td>
                                                                    <td>4</td>
                                                                    <td>181</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>VII</td>
                                                                    <td>4</td>
                                                                    <td>179</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>VIII</td>
                                                                    <td>4</td>
                                                                    <td>176</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>IX</td>
                                                                    <td>4</td>
                                                                    <td>175</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>X</td>
                                                                    <td>4</td>
                                                                    <td>167</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Total</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>2181</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>19. Academic session period</td>
                                                        <td>from APRIL to MARCH</td>
                                                    </tr>
                                                    <tr>
                                                        <td>20. Vacation period</td>
                                                        <td>from MAY to FIRST WEEK OF JUNE</td>
                                                    </tr>
                                                    <tr>
                                                        <td>21. Admission period</td>
                                                        <td>from FEBRUARY to MARCH</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                       </div>

                                    </div> <!-- single dashboard -->
                                  
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                           
                            </div>
                           
                                    
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

   @endsection