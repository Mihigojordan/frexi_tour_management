<!doctype html>
<class="no-js" lang="zxx">

<?php

include('header.php');

include('Loader.php');
   

?>


<body>
  <?php include('./Components/navbar.php') ?>
  <div class="th-hero-wrapper hero-1" id="hero">
    <div class="swiper th-slider hero-slider-1" id="heroSlide1"
      data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="hero-inner">
            <div class="th-hero-bg" data-bg-src="assets/img/hero/amazi.jpg">
            </div>
            <div class="container">
              <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get
                  unforgetable pleasure with us</span>
                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Natural Wonder of the world</h1>
                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.html"
                    class="th-btn th-icon">Explore Tours</a> <a href="service.html" class="th-btn style2 th-icon">Our
                    Services</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-inner">
            <div class="th-hero-bg" data-bg-src="assets/img/hero/kivu2.jpg">


            </div>
            <div class="container">
              <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get
                  unforgetable pleasure with us</span>
                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Let’s craft your best trip together</h1>
                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.html"
                    class="th-btn th-icon">Explore Tours</a> <a href="service.html" class="th-btn style2 th-icon">Our
                    Services</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="hero-inner">
            <div class="th-hero-bg" data-bg-src="assets/img/hero/gollira1.jpg"></div>
            <div class="container">



              <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get
                  unforgetable pleasure with us</span>
                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Explore beauty of the whole world</h1>
                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.html"
                    class="th-btn th-icon">Explore Tours</a> <a href="service.html" class="th-btn style2 th-icon">Our
                    Services</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="th-swiper-custom"><button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
            src="assets/img/icon/right-arrow.svg" alt=""></button>
        <div class="slider-pagination"></div><button data-slider-next="#heroSlide1"
          class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
      </div>
    </div>
  </div>
  <div class="booking-sec">
    <div class="container">
      <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST" class="booking-form ajax-contact">
        <div class="input-wrap">
          <div class="row align-items-center justify-content-between">
            <div class="form-group col-md-6 col-lg-auto">
              <div class="icon"><i class="fa-light fa-route"></i></div>
              <div class="search-input"><label>Destination</label> <select name="subject" id="subject"
                  class="form-select nice-select">
                  <option value="Select Destination" selected="selected" disabled="disabled">Select Destination</option>
                  <option value="rwanda"> Rwanda</option>
                  <option value=" Uganda"> Uganda </option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Kenya">Kenya</option>
                  <option value=" Nairobi,Kenya"> Nairobi, Kenya</option>
                  <option value="Dar Es Salam, Tanzania">Dar Es Salam, Tanzania </option>
                  <option value="Dubai, UAE">Dubai, UAE </option>
                  <option value="Switzerland">Guangzhou, China </option>
                  <option value="Brussels, Belgium">Brussels, Belgium </option>
                  <option value=" Frankfurt, Germany"> Frankfurt, Germany</option>
                  <option value="Warsaw, Poland">Warsaw, Poland</option>
                  <option class="Istanbul, Turkey">Istanbul, Turkey</option>
                </select></div>
            </div>
            <div class="form-group col-md-6 col-lg-auto">
              <div class="icon"><i class="fa-regular fa-person-hiking"></i></div>
              <div class="search-input"><label>Type</label> <select class="nice-select" name="Adventure" id="Adventure">
                  <option value="Adventure" selected="selected" disabled="disabled">Adventure</option>
                  <option value="Beach">Beach</option>
                  <option value="Group Tour">Group Tour</option>
                  <option value="Couple Tour">Couple Tour</option>
                  <option value="Family Tour">Family Tour</option>
                </select></div>
            </div>
            <div class="form-group col-md-6 col-lg-auto">
              <div class="icon"><i class="fa-light fa-clock"></i></div>
              <div class="search-input"><label>Duration</label> <select class="form-select nice-select" name="Duration"
                  id="Duration">
                  <option value="Normal" selected="selected" disabled="disabled">Duration</option>
                  <option value="1">1 days</option>
                  <option value="2">2 days</option>
                  <option value="3">3 days</option>
                  <option value="4">4 days</option>
                  <option value="5">5 days</option>
                  <option value="6">6 days</option>
                  <option value="7">7 days</option>
                </select></div>
            </div>
            <div class="form-group col-md-6 col-lg-auto">
              <div class="icon"><i class="fa-light fa-map-location-dot"></i></div>
              <div class="search-input"><label>Tour Category</label> <select name="subject" id="category"
                  class="form-select nice-select">
                  <option value="Normal" selected="selected" disabled="disabled">Luxury</option>
                  <option value="1">Delux</option>
                  <option value="2">Economy</option>
                </select></div>
            </div>
            <div class="form-btn col-md-12 col-lg-auto"><button class="th-btn"><img src="assets/img/icon/search.svg"
                  alt="">Search</button></div>
          </div>
          <p class="form-messages mb-0 mt-3"></p>
        </div>
      </form>
    </div>
  </div>
  <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
    <div class="container th-container">
      <div class="title-area text-center"><span class="sub-title">Wornderful Place For You</span>
        <h2 class="sec-title">Tour Categories</h2>
      </div>
      <div class="swiper categorySlider" id="categorySlide">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg " style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Cruises</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Hiking</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Wildlife</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Cruises</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Hiking</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Wildlife</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_1.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Cruises</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_2.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Hiking</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_3.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Airbirds</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_4.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Wildlife</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="category-card single">
              <div class="box-img global-img"><img src="assets/img/category/category_1_5.jpg" style="height:300px"
                  alt="Image"></div>
              <h3 class="box-title"><a href="destination.html">Walking</a></h3><a class="line-btn"
                href="destination.html">See more</a>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <div class="destination-area position-relative overflow-hidden">
    <div class="container">
      <div class="title-area text-center"><span class="sub-title">Top Destination</span>
        <h2 class="sec-title">Popular Destination</h2>
      </div>
      <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/akagera park.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="akagera_destination.php">  Akagera  National Park</a></h4><span
                      class="destination-subtitle">15 Listing</span>
                  </div>
                  <div class=""><a href="akagera_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/nyungwe park.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="nyungwe_destination.php">nyungwe</a></h4><span
                      class="destination-subtitle">22 Listing</span>
                  </div>
                  <div class=""><a href="nyungwe_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/virunga.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="virunga_destination.php">Virunga Park </a></h4><span
                      class="destination-subtitle">25 Listing</span>
                  </div>
                  <div class=""><a href="virunga_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/kenyatower.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="nairobi_destination.php">Nairobi, kenya</a></h4><span
                      class="destination-subtitle">28 Listing</span>
                  </div>
                  <div class=""><a href="nairobi_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/dareselam.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="dar_destination.php">Dar Es Salam</a></h4><span
                      class="destination-subtitle">30 Listing</span>
                  </div>
                  <div class=""><a href="dar_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/dubai.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="dubai_destination.php">Dubai</a></h4><span
                      class="destination-subtitle">15 Listing</span>
                  </div>
                  <div class=""><a href="dubai_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/instabul.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="istanbul_destination.php">istanbul</a></h4><span
                      class="destination-subtitle">22 Listing</span>
                  </div>
                  <div class=""><a href="istanbul_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/destination_1_3.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="belgium_destination.php">Belgium</a></h4><span
                      class="destination-subtitle">25 Listing</span>
                  </div>
                  <div class=""><a href="belgium_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/warsaw.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="poland_destination.php">Poland</a></h4><span
                      class="destination-subtitle">28 Listing</span>
                  </div>
                  <div class=""><a href="poland_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="destination-box gsap-cursor">
              <div class="destination-img"><img src="assets/img/destination/china.jpg"
                  alt="destination image">
                <div class="destination-content">
                  <div class="media-left">
                    <h4 class="box-title"><a href="china_destination.php">China</a></h4><span
                      class="destination-subtitle">30 Listing</span>
                  </div>
                  <div class=""><a href="china_destination.php" class="th-btn style2 th-icon">View All</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about-area position-relative overflow-hidden space" id="about-sec">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="img-box1">
            <div class="img1"><img src="assets/img/normal/gorilla.jpg" alt="About"></div>
            <div class="img2"><img src="assets/img/normal/about_1_2.jpg" alt="About"></div>
            <div class="img3"><img src="assets/img/normal/about_1_3.jpg" alt="About"></div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="ps-xl-4 ms-xl-2">
            <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">Let’s Go Together</span>
              <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip With us</h2>
              <p class="sec-text mb-30">There are many variations of passages of available but the majority have
                suffered alteration in some form, by injected hum randomised words which don't look even slightly.</p>
            </div>
            <div class="about-item-wrap">
              <div class="about-item">
                <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt=""></div>
                <div class="about-item_centent">
                  <h5 class="box-title">Exclusive Trip</h5>
                  <p class="about-item_text">
                  Our experienced guides bring Rwanda’s rich history and culture to life, ensuring an educational and engaging experience.
                  </div>
              </div>
              <div class="about-item">
                <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt=""></div>
                <div class="about-item_centent">
                  <h5 class="box-title">Professional Guide</h5>
                  <p class="about-item_text">
                  Your safety is our top priority, with dedicated teams and well-trained guides ensuring a secure and memorable journey.
    </div>
              </div>
            </div>
            <div class="mt-35"><a href="about.php" class="th-btn style3 th-icon">Learn More</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%"><img
        src="assets/img/shape/shape_1.png" alt="shape"></div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%"><img
        src="assets/img/shape/shape_2.png" alt="shape"></div>
    <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%"><img
        src="assets/img/shape/shape_3.png" alt="shape"></div>
    <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="8%"><img
        src="assets/img/normal/about-slide-img.png" alt="shape"></div>
    <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%"><i
        class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
    <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img
        src="assets/img/icon/emoji.png" alt=""></div>
  </div>
  <section class="position-relative bg-top-center overflow-hidden space" id="service-sec"
    data-bg-src="assets/img/bg/tour_bg_1.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="title-area text-center"><span class="sub-title">Best Place For You</span>
            <h2 class="sec-title">Most Popular Travel</h2>
            <p class="sec-text">
  Traveling opens doors to unforgettable experiences and unique cultural encounters. Exploring new places allows us to step outside our comfort zones.
</p>          </div>
        </div>
      </div>
      <div class="slider-area tour-slider">
        <div class="swiper th-slider has-shadow slider-drag-wrap"
          data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="tour-box th-ani gsap-cursor">
                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_1.jpg" alt="image"></div>
                <div class="tour-content">
                  <h3 class="box-title"><a href="">beligium  tour Package</a></h3>
                  <div class="tour-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                        Rating)</span></div><a href="tour-details.html" class="woocommerce-review-link">(<span
                        class="count">4.8</span> Rating)</a>
                  </div>
                  <!-- <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4> -->
                  <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="belgium_destination.php"
                      class="th-btn style4 th-icon">Book Now</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="tour-box th-ani gsap-cursor">
                <div class="tour-box_img global-img"><img src="assets/img/destination/img4.jpg" style="height:270px" alt="image"></div>
                <div class="tour-content">
                  <h3 class="box-title"><a href="">poland Travel package</a></h3>
                  <div class="tour-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                        Rating)</span></div><a href="tour-details.html" class="woocommerce-review-link">(<span
                        class="count">4.8</span> Rating)</a>
                  </div>
                  <!-- <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4> -->
                  <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="poland_destination.php"
                      class="th-btn style4 th-icon">Book Now</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="tour-box th-ani gsap-cursor">
                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_3.jpg" alt="image"></div>
                <div class="tour-content">
                  <h3 class="box-title"><a href="">Dubai Travel Package</a></h3>
                  <div class="tour-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                        Rating)</span></div><a href="tour-details.html" class="woocommerce-review-link">(<span
                        class="count">4.8</span> Rating)</a>
                  </div>
                  <!-- <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4> -->
                  <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="dubai_destination.php"
                      class="th-btn style4 th-icon">Book Now</a></div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="tour-box th-ani gsap-cursor">
                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_4.jpg" alt="image"></div>
                <div class="tour-content">
                  <h3 class="box-title"><a href="">istanbul travel package</a></h3>
                  <div class="tour-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                        Rating)</span></div><a href="tour-details.html" class="woocommerce-review-link">(<span
                        class="count">4.8</span> Rating)</a>
                  </div>
                  <!-- <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4> -->
                  <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="istanbul_destination.php"
                      class="th-btn style4 th-icon">Book Now</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="tour-box th-ani gsap-cursor">
                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_1.jpg" alt="image"></div>
                <div class="tour-content">
                <h3 class="box-title"><a href="">beligium  tour Package</a></h3>
                  <div class="tour-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                        Rating)</span></div><a href="tour-details.html" class="woocommerce-review-link">(<span
                        class="count">4.8</span> Rating)</a>
                  </div>
                  <!-- <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4> -->
                  <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="belgium_destination.php"
                      class="th-btn style4 th-icon">Book Now</a></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="tour-box th-ani gsap-cursor">
                <div class="tour-box_img global-img"><img src="assets/img/tour/tour_box_2.jpg" alt="image"></div>
                <div class="tour-content">
                <h3 class="box-title"><a href="">poland Travel Package</a></h3>
                  <div class="tour-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                        Rating)</span></div><a href="tour-details.html" class="woocommerce-review-link">(<span
                        class="count">4.8</span> Rating)</a>
                  </div>
                  <!-- <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4> -->
                  <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a href="poland_destination.php"
                      class="th-btn style4 th-icon">Book Now</a></div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="gallery-area">
    <div class="container th-container">
      <div class="title-area text-center"><span class="sub-title">Make Your Tour More Pleasure</span>
        <h2 class="sec-title">Recent Gallery</h2>
      </div>
      <div class="row gy-10 gx-10 justify-content-center align-items-center">
        <div class="col-md-6 col-lg-2">
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_1.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
              </a></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2">
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_2.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
              </a></div>
          </div>
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_3.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
              </a></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2">
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_4.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
              </a></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2">
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_5.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
              </a></div>
          </div>
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_6.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
              </a></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-2">
          <div class="gallery-card">
            <div class="box-img global-img"><a href="assets/img/gallery/gallery_1_7.jpg" class="popup-image">
                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                  src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
              </a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img src="assets/img/shape/line.png"
        alt="shape"></div>
    <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="3%"><img class="gmovingX"
        src="assets/img/shape/shape_4.png" alt="shape"></div>
  </div>
  <div class="counter-area space">
    <div class="container">
    <div class="container th-container">
      <div class="title-area text-center"><span class="sub-title">what interested about us</span>
        <h2 class="sec-title">our achievement</h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
          <div class="counter-card">
            <div class="counter-shape"><span></span></div>
            <div class="media-body">
              <h3 class="box-number"><span class="counter-number">06</span></h3>
              <h6 class="counter-title">Years Experience</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
          <div class="counter-card">
            <div class="counter-shape"><span></span></div>
            <div class="media-body">
              <h3 class="box-number"><span class="counter-number">97</span>%</h3>
              <h6 class="counter-title">Retention Rate</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
          <div class="counter-card">
            <div class="counter-shape"><span></span></div>
            <div class="media-body">
              <h3 class="box-number"><span class="counter-number">8</span>k</h3>
              <h6 class="counter-title">Tour Completed</h6>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3 counter-card-wrap">
          <div class="counter-card">
            <div class="counter-shape"><span></span></div>
            <div class="media-body">
              <h3 class="box-number"><span class="counter-number">19</span>k</h3>
              <h6 class="counter-title">Happy Travellers</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="2%"><img
        src="assets/img/shape/shape_1.png" alt="shape"></div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="2%"><img
        src="assets/img/shape/shape_2.png" alt="shape"></div>
    <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="7%"><img
        src="assets/img/shape/shape_3.png" alt="shape"></div>
    <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-left="3%"><img src="assets/img/shape/shape_6.png"
        alt="shape"></div>
    <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="5%"><img
        src="assets/img/shape/shape_5.png" alt="shape"></div>
  </div>
 
  <?php
  
  include('testm.php')
  
  
  ?>
  

  <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
      </path>
    </svg></div>
  </div>
  <?php include('./Components/footer.php') ?>

</body>

<?php

include('library.php')

    ?>

<!-- Mirrored from html.themeholy.com/tourm/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2024 15:19:49 GMT -->

</html>