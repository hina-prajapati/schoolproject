@extends('layout')
@section('title', 'SKKE School | Curriculum')

   @section('content')

   <style>
 

 .shop-top-search img {
    width: 100%;
    object-fit: contain;
}
h5{
    color: #ffc600 !important;
}

h6{
    color: #ffc600 !important;
}
.sectionn h5::before {
    content: '';
    position: absolute;
    width: 35px;
    height: 2px;
    background-color: #800000;
;
    bottom: 0;
    left: 0;
}
.sectionn2 h5::before {
    content: '';
    position: absolute;
    width: 35px;
    height: 2px;
    background-color: #8B4513;
;
    bottom: 0;
    left: 0;
}
.section-title img {
    width: 100%;
    height: auto;
    object-fit: contain;
}
.about-cont li {
    font-size: 16px;
    margin: 12px;
    color: #07294d;
}
p{
    color: #07294d;
}
.pt-120 {
    padding-top: 70px;
}

.sectionss h5::before {
    content: '';
    position: absolute;
    width: 35px;
    height: 2px;
    background-color: green;
    bottom: 0;
    left: 0;
}


.sectionss1 h5::before {
    content: '';
    position: absolute;
    width: 35px;
    height: 2px;
    background-color: #800080;
    bottom: 0;
    left: 0;
}
.box {
    width: 225px;
    height: 265px;
    text-align: start;
    background: #80808012;
    margin: 6px;
    padding: 12px;
    font-size: 16px;
    border-radius: 6px;
    color: #07294d;
}
@media (max-width: 768px){
.box {
    width: auto;
}
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

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-position: bottom; background-image: url(/assets2/images/course/banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Curriculum</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Curriculum</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== SHOP PART START ======-->

    <section id="shop-page" class="pt-120 pb-70 gray-bg">
        <div class="container">
            <div class="row mb-4" >
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

 
    <section id="shop-page" class="pt-120 pb-70">
        <div class="container">
            <div class="row mb-4 d-flex align-items-center" >
                <div class="col-md-5">
                    <div class="shop-top-search">
                        <img src="/assets2/images/ai-generated-8337505_960_720.png">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-title sectionss1">
                        <h5 class="" style="font-size: 22px; color: #800080 !important;" >PRIMARY SECTION</h5>
                       <p>The curriculum is designed keeping in mind multi-dimensional child centric approach. It provides bountiful opportunities to nurture, grow and blossom in a caring environment so as to develop right attitude and values and acquire skills necessary for self enhancement. The curriculum focus on developing the following skills.</p>
                    <div class="row mt-3">
                        <div class="col-md-4 mt-2">
                            <div class="box">
                                <p style="    color: #800080; font-weight: 700;
    text-decoration: underline;">Language skills</p>
                                <span>To enable students to acquire good communication, command over language. To acquire a balance of receptive (listening, reading) and productive (speaking, writing) skills to get mastery over the language.</span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="box">
                                <p style="    color: #800080; font-weight: 700;
    text-decoration: underline;">Mathematical skills</p>
                                <span>To acquire understanding of numbers and basic operation skills and apply it in real life situation.</span>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="box">
                                <p style="    color: #800080; font-weight: 700;
    text-decoration: underline;">Scientific skills</p>
                                <span>To enable students make good observations, classify, measure, infer and predict.

                                </span>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="box">
                                <p style="    color: #800080; font-weight: 700;
    text-decoration: underline;">Computer skills</p>
                                <span>To give hands on experience on handling keyboard & mouse, creating presentation, document and learning to make use of internet.

                                </span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box">
                                <p style="    color: #800080; font-weight: 700;
    text-decoration: underline;">Social Studies</p>
                                <span>To help students to make informed and reasoned decisions for the public good as citizens of a culturally diverse democratic society.

                                </span>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="box">
                                <p style="    color: #800080; font-weight: 700;
    text-decoration: underline;">Values and Attitude</p>
                                <span>Not only to understand values but to reflect them in their attitudes and behaviour and contribute to society through good citizenship and ethics.

 
                                </span>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        
            <div class="row mt-5 d-flex align-items-center">
              
                <div class="col-md-6">
                    <div class="section-title sectionn">
                        <h5 class="mt-3 mb-3" style="color: #800000 !important;">Continuous and Comprehensive Evaluation</h5>
                    <p class="mb-2">The Assessment is a continuous process. The year is divided into 3 terms. The students are evaluated in various competencies in each subject.</p>
                <div class="about-cont">
                    <ul style="list-style-type: disclosure-closed;">
                        <li>  English/Hindi - Listening, Speaking, Reading and Writing.</li>
                        <li>Concept, Ability in computation and Problem Solving</li>
                    </ul>
                </div>
                    
           <div class="texttt">
            <p class="mb-3"><span style="text-decoration: underline; font-weight: 700; color: #800000;">EVS –Social Studies and Science </span> : Observation and Identification, Concept, Scientific skills, Map work and Environmental Sensitivity</p>
            <p>The students are graded in the above competencies through dictation, class tests, open book test, Projects, Activity, Term Exam.</p>
           </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-top-search">
                  
                        <img src="/assets2/images/course/primary-school.gif">
                    </div>
                </div>
            </div>
        </div> 
    </section>


    <section id="shop-page" class="pt-120 pb-70 gray-bg">
        <div class="container">
            <div class="row mb-4 d-flex align-items-center" >
                <div class="col-md-5">
                    <div class="shop-top-search">
                        <img src="/assets2/images/girl-160172_1280.webp">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-title sectionn2">
                        <h5 class="" style="font-size: 22px; color: #8B4513 !important;" >SECONDARY SECTION</h5>
                     <p>The Secondary School Curriculum acknowledges the fact that subjects like language, Mathematics, Science and social science help the cognitive development of the child and, therefore, require a greater 
                        academic emphasis. Further, we at SKKES also envision the all-round development of students in 
                        consonance with the holistic approach to education and therefore, we emphasize integration of co-curricular
                         domains with curricular activities in an equitable manner. In operational sense, the secondary curriculum is 
                         learner-centered with school being a place where students would be acquiring various skills; building 
                         self-concept, sense of enterprise, aesthetic sensibilities and sportsmanship. Therefore, for the purpose of
                          fostering core competencies in learners, this curriculum encompasses even major learning areas, 
                          from scholastic and co scholastic point of view. The Areas of learning at the Secondary level are as under:</p>
                          <table class="table" border="2">
                          
                                <tr>
                                    <th>First Language - English</th>
                                    <th>Scholastic Areas</th>
                                </tr>
                                <tr>
                                    <td>Second and third language – Hindi/Sanskrit /Marathi/Gujarati/French
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Mathematics</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Science</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Social Science</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>FMM (under NSQF Scheme for class IX and X)</td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Health and Physical Education</td>
                                    <td>* Co-scholastic Areas</td>
                                </tr>
                           
                                <tr>
                                    <td>Work Experience*</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Art Education</td>
                                    <td></td>
                                </tr>
                          </table>
                    </div>
                </div>
            </div>
        
            <div class="row mt-5 d-flex align-items-center" >
              
                <div class="col-md-6">
                    <div class="section-title sectionn2">
                        <h5 class="mt-3 mb-3" style="color: #8B4513 !important;">* subsumed in Health and Physical Education</h5>
                    <p class="mb-2">Salient Features of the CBSE Secondary School Curriculum</p>
                    <p> The Curriculum prescribed by CBSE strives to:</p>
                <div class="about-cont">
                    <ul style="list-style-type: auto;">
                        <li>Provide ample scope for physical, intellectual and social development of students;</li>
                        <li>Enlist general and specific teaching and assessment objectives;</li>
                        <li>Uphold Constitutional values such as Socialism, Secularism, Democracy, Republican Character, Justice, Liberty, Equality, Fraternity, Human Dignity of Individual and the Unity and integrity of the Nation by encouraging values-based learning activities;</li>
                        <li> Nurture Life-Skills by prescribing curricular and co-curricular activities to help improve self-esteem, empathy towards others and different cultures etc.;</li>
                        <li>Integrate innovations in pedagogy, knowledge and application, such as human sciences with technological innovations to keep pace with the global trends in various disciplines;</li>
                        <li>Integrate innovations in pedagogy, knowledge and application, such as human sciences with technological innovations to keep pace with the global trends in various disciplines;</li>
                        <li>Integrate environmental education in various disciplines from class I-X;</li>
                        <li> Equally emphasize Co-scholastic areas of Art Education and Health and Physical Education.</li>
                    
                    </ul>
                </div>
       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-top-search">
                  
                        <img src="/assets2/images/course/primary-image.jpg">
                    </div>
                </div>
            </div>
        </div> 
    </section>
   @endsection