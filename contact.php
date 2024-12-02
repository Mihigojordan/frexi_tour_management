<?php
include('./config/conn.php');
if ($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['add']) ) {
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $message = mysqli_real_escape_string($conn,$_POST['message']);
  $insertq = "INSERT INTO messages VALUES('','$name','$email','$message')";
  $query = mysqli_query($conn,$insertq);
  if($query){
    echo "<script>
    alert('thanks for your feedback ');
    </script>";
  }
}

include('header.php');

include('Loader.php');
   
?>
  <?php

include('./Components/navbar.php')

        ?>

  <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Contact Us</h1>
        <ul class="breadcumb-menu">
          <li><a href="home-travel.html">Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="space">
    <div class="container">
      <div class="title-area text-center">
        <span class="sub-title">Get In Touch</span>
        <h2 class="sec-title">Our Contact Information</h2>
      </div>
      <div class="row gy-4 justify-content-center">
        <div class="col-xl-4 col-lg-6">
          <div class="about-contact-grid style2">
            <div class="about-contact-icon" >
              <img src="assets/img/icon/location-dot2.svg" alt=""  />
            </div>
            <div class="about-contact-details">
              <h6 class="box-title">Our Address</h6>
              <p class="about-contact-details-text">
              Makuza Peace Plaza 3rd Floor F3-28, KN 4 Ave, Kigali
              </p>
              <p class="about-contact-details-text"></p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="about-contact-grid">
            <div class="about-contact-icon">
              <img src="assets/img/icon/call.svg" alt="" />
            </div>
            <div class="about-contact-details">
              <h6 class="box-title">Phone Number</h6>
              <p class="about-contact-details-text">
                <!-- <a href="tel:250783533278">+250 783 553 278</a> -->
              </p>
              <p class="about-contact-details-text">
                <a href="tel:250782379122">+250 782 379 122</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6">
          <div class="about-contact-grid">
            <div class="about-contact-icon">
              <img src="assets/img/icon/mail.svg" alt="" />
            </div>
            <div class="about-contact-details">
              <h6 class="box-title">Email Address</h6>
              <p class="about-contact-details-text">
                <!-- <a href="mailto:fabrice@frexi.rw">fabrice@frexi.rw</a> -->
              </p>
              <p class="about-contact-details-text">
                <a href="mailto:booking@frexi.ltd">booking@frexi.rw</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="space-extra2-top space-extra2-bottom"
    data-bg-src="assets/img/bg/video_bg_1.jpg">
    <div class="container">
      <div
        class="row flex-row-reverse justify-content-center align-items-center">
        <div class="col-lg-6">
          <div class="video-box1">
            <a
              href="https://www.youtube.com/watch?v=5FVO3IHwIzw"
              class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
          </div>
        </div>
        <div class="col-lg-6">
          <div>
            <form
              method="POST"
              class="contact-form style2 " action="contact.php">
              <h3 class="sec-title mb-30 text-capitalize">contact us</h3>
              <div class="row">
                <div class="col-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name3"
                    placeholder="First Name" />
                  <img src="assets/img/icon/user.svg" alt="" />
                </div>
                <div class="col-12 form-group">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email3"
                    placeholder="Your Mail" />
                  <img src="assets/img/icon/mail.svg" alt="" />
                </div>
                <div class="form-group col-12">
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="3"
                    class="form-control"
                    placeholder="Your Message"></textarea>
                  <img src="assets/img/icon/chat.svg" alt="" />
                </div>
                <div class="form-btn col-12 mt-24">
                  <button type="submit" class="th-btn style3" name="add">
                    Send message
                    <img src="assets/img/icon/plane.svg" alt="" />
                  </button>
                </div>
              </div>
              <p class="form-messages mb-0 mt-3"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="">
    <div class="container-fluid">
      <div class="contact-map style2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5159553475164!2d30.056990474804874!3d-1.9465655980357768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca4240db7b3f5%3A0x5256fd511623ef15!2sMakuza%20Peace%20Plaza!5e0!3m2!1sen!2srw!4v1731262198919!5m2!1sen!2sr
          " width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="contact-icon">
          <img src="assets/img/icon/location-dot3.svg" alt="" />
        </div> 
       </div>
    </div>
  </div> 
  



 
  <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
        style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
      </path>
    </svg></div>
  </div>

  <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-capitalize mb-0">get updated the latest newsletter</h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form"><input class="form-control" type="email" placeholder="Enter Email" required=""> <button type="submit" class="th-btn style3">Subscribe Now <img src="assets/img/icon/plane.svg" alt=""></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href="home-travel.html" style="display:flex;justify-content:left;">
                                    
                                <img src="assets/img/frexilogo.png" style="height:60px;margin-right:10px" alt="Tourm">
                            
             <!-- <h1 style="font-size: 35px; text-transform:capitalize;font-size:20px;margin-top:32px;font-style:italic">frexi tours and travel</h1> -->

                            
                            </a>
                                </div>
                                <p class="about-text">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately
                                    create interactive infrastructures</p>
                                <div class="th-social"><a href="https://www.facebook.com/frexiltd" target="_blank"><i class="fab fa-facebook-f" style="margin-top:7px"></i></a> <a href="https://www.twitter.com/frexiltd" target="_blank"><i class="fab fa-x" style="margin-top:7px"></i></a> <a href="https://www.linkedin.com/in/fabrice-iradukunda-77b309127" target="_blank" style="margin-top:7px"><i class="fab fa-linkedin-in" style="margin-top:7px"></i></a> <a href="https://www.whatsapp.com/+250782379122"><i class="fab fa-whatsapp" style="margin-top:7px"></i></a> <a href="https://instagram.com/frexiltd" target="_blank" ><i class="fab fa-instagram" style="margin-top:7px"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="service.php">Our Service</a></li>
                                    <li><a href="contact.php">Terms of Service</a></li>
                                    <li><a href="contact.php">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Address</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/phone.svg" alt="img" style="margin-top:10px"></div>
                                    <div class="details">

                                       
                                        <p><a href="tel:+250 782 379 122" class="info-box_link" style="margin-top:130px">+250 782 379 122</a></p>


                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img" style="margin-top:10px"></div>
                                    <div class="details">

                                        <p><a href="mailto:mailinfo00@tourm.com" class="info-box_link">booking@frexi.rw</a></p>
                                    

                                  
 </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img" style="margin-top:5px"></div>
                                    <div class="details">
                                        <p>Makuza Peace Plaza 3rd Floor F3-28, KN 4 Ave, Kigali</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Instagram Post</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_1.jpg" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_2.jpg" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_3.jpg" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_4.jpg" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_5.jpg" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_6.jpg" alt="Gallery Image"> <a target="_blank" href="https://www.instagram.com/" class="gallery-btn"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap background-image" style="background-image: url(&quot;assets/img/bg/copyright_bg_1.jpg&quot;);">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2024 <a href="index.php">Frexi Ltd </a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card"><span class="title">We Accept</span> <img src="assets/img/shape/cards.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <?php

include('library.php')

    ?>

</body>



</html>