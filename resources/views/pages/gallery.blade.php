@extends('layout')
@section('title', 'SKKE School | Gallery')

@section('content')

<style>
.image-container {
    position: relative;
    display: inline-block;

}

img#galleryImage {
    width: 400px;
    height: 200px;
    transition: 1.2s;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    /* initially invisible */
    transition: opacity 1.2s ease;
    display: flex;
    justify-content: center;
    align-items: center;

}

.image-container img {
    height: 200px;
}

.section-title:hover .overlay {
    transition: 1.2s;
}

.section-title {
    transition: 1.2s;
}


.section-title1 {
    padding: 25px;
    border: 1px solid #07294d26;
}

.section-title1 {
    padding: 25px;
    border: 1px solid #07294d26;
    font-size: 14px;
    text-align: center;
    font-weight: 500;
}

.image-container {
    transition: 1.2s;
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #000000d6;
    ;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 1.5s ease;
}

.image-container:hover .overlay {
    opacity: 1;
}

.gallery-button {
    color: #fff !important;
    cursor: pointer;
    border: 1px solid #ffffff5e;
    padding: 4px 20px;
    margin: 0 10px;
    /* Add margin between buttons */
    transition: opacity 1.5s ease;
}

.image-container:hover .gallery-button {
    opacity: 1;
}

.bordered {
    border: 2px solid red !important;
    /* Adjust border color and width as needed */
}

img.fancybox-image {
    border: 5px solid beige;
}

.section-title {
    border: 2px dashed #dbccc88a;
    height: auto;
    border-radius: 4px;
}


.pt-115 {
    padding-top: 40px;
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

<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="5"
    style="background-image: url(/assets2/images/gallery/gallery.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Gallery</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="course-part" class="pt-115 pb-120 ">
    <div class="container">
        <div class="row">
            <!-- @foreach ($galleries as $gallery)
    <div class="col-md-3 mt-2">
        <div class="section-title">
            <div class="image-container">
                @foreach ($gallery->images as $image)

                    <img src="{{ asset('/gallery22/' . $image->filename) }}" alt="Image">
                @endforeach
                <div class="overlay">
                    @foreach ($gallery->images as $image)
                        <a href="{{ asset('/gallery22/' . $image->filename) }}" data-fancybox="gallery-img" style="color: #fff !important; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;" data-animate="fadeInUp">View Large</a>
                    @endforeach
                    <a href="{{ route('gallery.show', ['gallery_id' => $gallery->id]) }}" class="btn-system second a2" data-animate="fadeInUp">Gallery</a>
                </div>
            </div>
            <div class="section-title1">
                <a href="{{ url('/pages/gallery.html') }}?galleryId={{ $gallery->id }}" style="color: #07294d;">{{ $gallery->title }}</a>
                </div>
            </div>
        </div>
    @endforeach -->
            @foreach ($galleries as $gallery)
            <div class="col-md-3 mt-4">
                <div class="section-title" data-aos="zoom-in" data-aos-delay="50" data-aos-duration="1000">
                    <div class="image-container">
                        @if (!empty($gallery->thumbnail))
                        <img class="gallery-thumbnail" src="{{ asset('gallery/' . $gallery->thumbnail) }}"
                            alt="{{ $gallery->title }} thumbnail">
                        @else
                        <img class="gallery-thumbnail" src="{{ asset('path_to_placeholder_image.jpg') }}"
                            alt="No Image">
                        @endif
                        <div class="overlay">
                            <a href="{{ asset('gallery/' . $gallery->thumbnail) }}" class="gallery-button"
                                data-fancybox="gallery-{{ $gallery->id }}"
                                style="color: #fff !important; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"
                                data-animate="fadeInUp">View Large</a>

                            <!-- Hidden Links for Gallery Images -->
                            @foreach ($gallery->images as $image)
                            <a href="{{ asset('gallery22/' . $image->filename) }}"
                                data-fancybox="gallery-{{ $gallery->id }}" class="d-none"></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="{{ route('gallery.show', ['gallery_id' => $gallery->id]) }}"
                            style="color: #07294d;">{{ $gallery->title }}</a>
                    </div>
                </div>
            </div>
            @endforeach


            <!-- <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/g2.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/g2.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">PRIMARY ANNUAL CONCERT..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/g3.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/g3.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">ANNUAL SCHOOL..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/g4.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/g4.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">INTERNATIONAL YOGA DAY..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Annual_Sports_Meet_201819.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Annual_Sports_Meet_201819.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">ANNUAL SPORTS MEET..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Republic_Day_Celebration_202223.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Republic_Day_Celebration_202223.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">REPUBLIC DAY..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Farewell_Diary_202223.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Farewell_Diary_202223.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">FAREWELL DIARY 2022-23..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/X__Felicitation_202223.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/X__Felicitation_202223.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">X - FELICITATION 2022-23..</a>
                    </div>
                </div>
              </div>



              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Gandhi_Jayanti_Celebration_202223.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Gandhi_Jayanti_Celebration_202223.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">GANDHI JAYANTI..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Std_4th_Farewell.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Std_4th_Farewell.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">STD. 4TH FAREWELL..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Random_File0sy1a2s1.blq140323114657.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Random_File0sy1a2s1.blq140323114657.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">PRIZE DISTRIBUTION..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Summer_Camp_202324.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Summer_Camp_202324.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">SUMMER CAMP 2023-24..</a>
                    </div>
                </div>
              </div>




              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Earth_Day_Celebration_202324.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Earth_Day_Celebration_202324.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">EARTH DAY CELEBRATION..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Investiture_Ceremony_202324.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Investiture_Ceremony_202324.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">INVESTITURE CEREMONY..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/World_Music_Day.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/World_Music_Day.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">WORLD MUSIC DAY..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/World_Environment_Day.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/World_Environment_Day.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">WORLD ENVIRONMENT DAY..</a>
                    </div>
                </div>
              </div>




              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/G20_Activities.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/G20_Activities.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">G20 ACTIVITIES..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Aashadi_Ekadashi_Celebration.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Aashadi_Ekadashi_Celebration.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">AASHADI EKADASHI CELEBRATI..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Random_Filenlagkrui.vjz250723071853.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Random_Filenlagkrui.vjz250723071853.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">GURU PURNIMA..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Investiture_Ceremony_Primary_Section_202324.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Investiture_Ceremony_Primary_Section_202324.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">INVESTITURE CEREMONY..</a>
                    </div>
                </div>
              </div>




              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Independence_Day_Celebration.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Independence_Day_Celebration.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">INDEPENDENCE DAY..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Raksha_Bandhan_Celebration.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Raksha_Bandhan_Celebration.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">RAKSHA BANDHAN..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/TEACHERS_DAY_CELEBRATION.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/TEACHERS_DAY_CELEBRATION.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">TEACHERS DAY CELEBRATION..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Janmashtami_Celebration.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Janmashtami_Celebration.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">JANMASHTAMI CELEBRATION..</a>
                    </div>
                </div>
              </div>




              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Random_File2knlbsna.jim160923115244.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Random_File2knlbsna.jim160923115244.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">HINDI DIVAS CELEBRATION..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Random_Filex5j51ata.2an071023100606.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Random_Filex5j51ata.2an071023100606.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">GANESH CHATURTHI..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Mahatma_Gandhi_and_Lal_Bahadur_Shastri_Jayanti.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Mahatma_Gandhi_and_Lal_Bahadur_Shastri_Jayanti.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">MAHATMA GANDHI AND LAL..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Random_Fileohsnklka.sex021123120617.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Random_Fileohsnklka.sex021123120617.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">ANNUAL SCHOOL EXHIBITION..</a>
                    </div>
                </div>
              </div>




              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Dussehra_Celebration_2023.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Dussehra_Celebration_2023.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">DUSSEHRA CELEBRATION 2023..</a>
                    </div>
                </div>
              </div>

              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/World_Nature_Day_2023.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/World_Nature_Day_2023.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">WORLD NATURE DAY 2023..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/World_Food_Day_2023.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/World_Food_Day_2023.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">WORLD FOOD DAY 2023..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/DIwali_and_Childrens_Day_Celebration_2023.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/DIwali_and_Childrens_Day_Celebration_2023.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">DIWALI AND CHILDREN'S DAY..</a>
                    </div>
                </div>
              </div>


              <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Christmas_Day_2023.jpg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Christmas_Day_2023.jpg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">CHRISTMAS DAY 2023..</a>
                    </div>
                </div>
              </div>
 -->

            <!-- <div class="col-md-3 mt-4">
                <div class="section-title">
                    <div class="image-container">
                        <img src="/assets2/images/gallery/Fun_Trip_2023.jpeg" alt="Gallery Image" class="gallery-image" id="galleryImage">
                        <div class="overlay">
                            <a href="/assets2/images/gallery/Fun_Trip_2023.jpeg" data-fancybox="gallery-img fancybox" style="color: #fff; cursor: pointer; border: 1px solid #ffffff5e; padding: 4px 20px;"  data-animate="fadeInUp">View Large</a>
                            <a style="border: 1px solid #ffffff5e; padding: 4px 20px;" href="#" class="btn-system second a2" id="galleryLink" data-animate="fadeInUp">Gallery</a>
                        </div>
                    </div>
                    <div class="section-title1">
                        <a href="#" style="color: #07294d;">FUN TRIP 2023..</a>
                    </div>
                </div>
              </div> -->


        </div>
        <!-- <div class="row">
                <div class="col-lg-12" style="margin-top: 30px; display: flex; justify-content: center;">
                <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($galleries->onFirstPage())
                        <li class="page-item disabled"><span class="page-link">Previous</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $galleries->previousPageUrl() }}">Previous</a></li>
                    @endif

                    @foreach ($galleries->links()->elements[0] as $number => $link)
                        <li class="page-item {{ $galleries->currentPage() == $number ? 'active' : '' }}"><a class="page-link" href="{{ $link }}">{{ $number }}</a></li>
                    @endforeach

                    @if ($galleries->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $galleries->nextPageUrl() }}">Next</a></li>
                    @else
                        <li class="page-item disabled"><span class="page-link">Next</span></li>
                    @endif
                </ul>
                </nav>
                </div>
            </div> -->

        <div class="row">
            <div class="col-lg-12">
                <nav class="courses-pagination mt-50">
                    <ul class="pagination justify-content-center">
                        <!-- Previous Page Link -->
                        @if ($galleries->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link" aria-hidden="true">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $galleries->previousPageUrl() }}" rel="prev"
                                aria-label="@lang('pagination.previous')">&laquo;</a>
                        </li>
                        @endif

                        <!-- Pagination Elements -->
                        @for ($i = 1; $i <= $galleries->lastPage(); $i++)
                            <li class="page-item {{ $galleries->currentPage() == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{ $galleries->url($i) }}">{{ $i }}</a>
                            </li>
                            @endfor

                            <!-- Next Page Link -->
                            @if ($galleries->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $galleries->nextPageUrl() }}" rel="next"
                                    aria-label="@lang('pagination.next')">&raquo;</a>
                            </li>
                            @else
                            <li class="page-item disabled" aria-disabled="true">
                                <span class="page-link" aria-hidden="true">&raquo;</span>
                            </li>
                            @endif
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>

<script>
$(document).ready(function() {
    $(".gallery-img").on('click', function() {
        $(this).width(100).height('auto'); // Enlarge the clicked image
    });

    $(".fancybox").fancybox({
        animationEffect: 'fade',
        thumbs: {
            autoStart: true,
            axis: 'x'
        },
        overlayShow: false,
        scrolling: 'no', // Prevent scrolling to the top after closing
        hideOnContentClick: false, // Keep the content (image) visible after closing
        touch: false, // Disable touch events to prevent automatic hiding
        afterClose: function() {
            $(".gallery-img").css({
                width: '100%', // Reset the width of all images
                height: '200px' // Reset the height of all images
            });
        }
    });
});
</script>


<script>
$(document).ready(function() {
    $(".gallery-button").on('click', function() {
        $(this).closest('.image-container').find('.gallery-thumbnail').addClass('bordered');
    });
});
</script>

@endsection
