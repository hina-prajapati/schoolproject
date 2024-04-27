@extends('layout')

   @section('content')

   <style>
    .files-container {
text-align: center;
    padding: 50px;
}

.files-list {
    list-style-type: none;
    padding: 0;
}
.shop-image img{
    display: block !important;
}

.files-list li {
    margin-bottom: 10px;
}
#about-part {
    position: relative;
    padding-bottom: 114px;
}
   </style>
      <!--====== PAGE BANNER PART START ======-->
      <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="5" style="background-image: url(/assets2/images/about/admission-1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ $admission->title }}</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $admission->title }}</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    <!-- <section id="about-part" class="pt-40">
    <div class="col-lg-6 offset-lg-3">
                    <div class="about-event mt-50">
                        <div class="event-title">
                   
    <h1 class="text-center">{{ $admission->title }}</h1>
    <h4 class="text-center">{{ $admission->short_description }}</h4>
  


            @if ($admission->files->isNotEmpty())
                <div class="files-container">
                    <ul class="files-list">
                    
                        @foreach ($admission->files as $file)
                <li>
                    @if (in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png']))
                        <img src="{{ asset('admission/' . $file->filename) }}" alt="Image"><br>
                    @else
                        <a href="{{ asset('admission/' . $file->filename) }}" target="_blank">{{ $file->filename }} </a><br>
                    @endif
                </li>
            @endforeach
                    </ul>
                </div>
            @endif

            </div></div></div></section> -->

               <!--====== SHOP PART START ======-->
    
    <section id="shop-single" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="shop-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="shop-left pt-30">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-image-1" role="tabpanel" aria-labelledby="pills-image-1-tab">
                                    

                        <div class="shop-image">
                        <img src="{{ asset('singleImageAdmission/' . $admission->thumbnail) }}" data-fancybox="gallery-img" alt="Image"><br>

                        @if ($admission->files->isNotEmpty()) 
                        @foreach ($admission->files as $file)
                            @if (isset($file) && in_array(strtolower(pathinfo($file->filename, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif']))
                                <img src="{{ asset('admission/' . $file->filename) }}" alt="Image"><br>
                            @endif
                        @endforeach
                    @else
                    @endif

                                    </div>
                                 
                                </div>
                             
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shop-right pt-30">
                            <h6>{{ $admission->title }}</h6>
                            <!-- <span>$50.00</span> -->
                            <p>{{ $admission->short_description }}</p>
                            <p>{{ $admission->long_description }}</p>
                            <!-- <div class="nice-number pt-15">
                                <input type="number" value="1">
                            </div> -->
                            <!-- <div class="add-btn pt-15">
                                <button type="button" class="main-btn">Add to Cart</button>
                            </div> -->
                        </div>
                        <div>
                      
                        <!-- @foreach($admission->files as $file)
                            <p>
                            <ol><li>{{ pathinfo($file->filename, PATHINFO_FILENAME) }}</li></ol>
                            {{ $admission->job_description }}           [<a href="{{ asset('admission/' . $file->filename) }}">Click Here</a>]
                            </p>
                        @endforeach -->


                        @if($admission->files)
            <ol>
                <!-- @foreach($admission->files as $file)
                    <li>
                        {{ pathinfo($file->filename, PATHINFO_FILENAME) }}
                        [<a href="{{ asset('admission/' . $file->filename) }}" target="_blank">Click Here</a>]
                    </li>
                @endforeach -->
            </ol>
            @endif

            {{-- Assuming $admission->job_description contains the rich text with links --}}
            {!! $admission->job_description !!}<br>

                    </div>
                    </div>
                </div>  
            </div>
         
        </div> 
    </section>
    
    <!--====== COURSES PART ENDS ======-->
@endsection