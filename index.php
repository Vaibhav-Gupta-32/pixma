<?php
$page_title = "Interactive Flat Panel | Digital Podium & Standee - Pix Plus";
$pagename = "Home";
$current_page = basename($_SERVER['PHP_SELF']);
$meta_description = "At Pix Plus we provide wide range of smart board, flat interactive panel, digital panel, kiosk display and standee for your business at best price.";
$tblname = "slider";
$tblkey = "id";
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>


<!-- Slider Section start -->
<div class="slider-one">

    <!-- <div class="custom-bg sliderbg-1" data-bg-color="#322fb3" data-bg-image="assets/images/slider/sliderbg-one.png"> -->
    <div class="custom-bg sliderbg-1">
        <div class="shape-1 shape">
            <img src="assets/images/slider/sliderone-shape/shape1.png" alt="Shape">
        </div>
        <div class="shape-2 shape">
            <img src="assets/images/slider/sliderone-shape/shape2.png" alt="Shape">
        </div>
        <div class="shape-3 shape">
            <img src="assets/images/slider/sliderone-shape/shape3.png" alt="Shape">
        </div>
        <div class="shape-4 shape">
            <img src="assets/images/slider/sliderone-shape/shape4.png" alt="Shape">
        </div>
        <div class="shape-5 shape">
            <img src="assets/images/slider/sliderone-shape/shape5.png" alt="Shape">
        </div>
        <div class="shape-6 shape">
            <img src="assets/images/slider/sliderone-shape/shape6.png" alt="Shape">
        </div>
        <div class="shape-7 shape">
            <img src="assets/images/slider/sliderone-shape/shape7.png" alt="Shape">
        </div>
        <div class="shape-8 shape">
            <img src="assets/images/slider/sliderone-shape/shape8.png" alt="Shape">
        </div>
        <div class="shape-9 shape">
            <img src="assets/images/slider/sliderone-shape/shape9.png" alt="Shape">
        </div>
        <div class="shape-10 shape">
            <img src="assets/images/slider/sliderone-shape/shape10.png" alt="Shape">
        </div>
        <div class="shape-11 shape">
            <img src="assets/images/slider/sliderone-shape/shape11.png" alt="Shape">
        </div>
        <ul class="sliderone-social">
            <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
        </ul>
    </div>

    <div class="custom-container">
        <div class="swiper sliderone animation-style-01">
            <!-- <div class="swiper-wrapper">
                <?php
                $sql = "SELECT * FROM $tblname ORDER BY $tblkey";
                $fetch = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($fetch)) {
                ?>
                    <div class="swiper-slide">
                        <div class="sliderone-slingle">
                            <div class="slider-content-wrapper">
                                <div class="sliderone-content">
                                    <div class="slider-content">
                                        <span class="subtitle">Welcome to Pix Plus</span>
                                        <h2 class="title"><?= $row['title']; ?></h2>
                                        <a href="javascript:void(0)" class="btn-style-two">Read More</a>
                                        <div class="call">
                                            <span>call us</span>
                                            <a href="tel:+916291509470">+91 6291509470</a>
                                        </div>
                                    </div>
                                    <div class="slider-image">
                                        <div class="slider-image-one">
                                            <img src="admin/dash/<?= $row['location']; ?>" alt="Slider Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div> -->

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sliderone-slingle">
                        <div class="slider-content-wrapper">
                            <div class="sliderone-content">
                                <div class="slider-content">
                                    <span class="subtitle">Welcome to Pix Plus</span>
                                    <h1 class="title" style="letter-spacing: 1px;">Interactive Flat Panel</h1>
                                    <!-- <a href="javascript:void(0)" class="btn-style-two">Read More</a> -->
                                    <!-- <div class="call">
                                            <span>call us</span>
                                            <a href="tel:+916291509470">+91 6291509470</a>
                                        </div> -->
                                </div>
                                <div class="slider-image">
                                    <div class="slider-image-one">
                                        <img src="assets/images/slider/slider1-4.jpg" alt="Slider Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination sliderone-pagination"></div>

            <div class="custom-container button-container d-none d-lg-flex">
                <div class="container-fluid">
                    <div class="swiper-button">
                        <div class="swiper-button-prev">
                            <div class="prev-arrow">
                                <img class="prev-arrow-1" src="assets/images/slider/arrow-1.png" alt="">
                                <img class="prev-arrow-2" src="assets/images/slider/arrow-2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <div class="next-arrow">
                                <img class="next-arrow-1" src="assets/images/slider/arrow-1.png" alt="">
                                <img class="next-arrow-2" src="assets/images/slider/arrow-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- Slider Section End -->

<!-- Strategy Section start -->

<!-- Strategy Section end -->


<!-- About Section Start -->
<!-- <div class="about section-padding bg-one">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
              
                <div class="heading-one">
                    <span class="heading-one-subtitle">We are pioneer</span>
                    <h2 class="heading-one-title">Grow Your Business with Avers Today</h2>
                    <p class="heading-one-text-two">Lynci didunt onomes sundo ritoma am nsectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua. </p>
                </div>
                

                
                <div class="about-details">
                    <div class="col-one">
                        <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit a elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation ullamco </p>
                        <blockquote class="about-details-quote">
                            <img src="assets/images/icon/quote-icon.png" alt="QuoteIcon">
                            <p>Adip isicing elit, sed do eiusmod tem por inci didunt ut labore dolore </p>
                        </blockquote>
                    </div>
                    <div class="col-two">
                        <ul class="about-details-list">
                            <li>
                                <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                <p>Business automation</p>
                            </li>
                            <li>
                                <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                <p>Critical Analytics </p>
                            </li>
                            <li>
                                <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                <p>Full detailed report</p>
                            </li>
                            <li>
                                <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                <p>Qualtiy Management</p>
                            </li>
                        </ul>
                        <a href="about.html" class="btn-style-one"><span>Learn More</span></a>
                    </div>
                    <div class="col-three">
                        <div class="about-details-video">
                            <img class="icon-img" src="assets/images/about/videobg.png" alt="Image">
                            <a class="ht-popup-video video-popup" href="https://player.vimeo.com/video/172601404?autoplay=1">
                                <img src="assets/images/icon/play.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="col-xxl-4 col-xl-6 col-lg-6">
               
                <div class="about-image">
                    <div class="about-counter">
                        <div class="about-counter-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <div class="funfact-inner">
                                <span class="odometer" data-count-to="20"></span>
                            </div>
                            <span class="about-counter-title">Worldwide <br> Countries</span>
                        </div>
                        <div class="about-counter-2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="funfact-inner">
                                <span class="odometer" data-count-to="12"></span>
                                <span class="niktext">K</span>
                                <span class="increment">+</span>
                            </div>
                            <span class="about-counter-title">Strong <br> Client Base</span>
                        </div>
                    </div>
                    <div class="about-image-inner position-relative wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <img class="js-tilt" src="assets/images/about/about-image.png" alt="AboutImage">
                        <div class="about-image-inner-thumb">
                            <span class="text">Since</span>
                            <span class="date">1948</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
    <ul class="nav about-tab wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-one" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">Strategy</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-two" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">Marketing</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-three" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="false">Awards</button>
        </li>
    </ul>
   
</div> -->
<!-- About Section End -->

<!-- Tab Content Start -->
<div class="about-tab-content">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="tab-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <!-- About Tab images Start -->
                        <div class="about-tab-image">
                            <div class="shape shape-1">
                                <img src="assets/images/shape/shape-6.png" alt="Shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="assets/images/shape/shape-7.png" alt="Shape">
                            </div>
                            <div class="about-tab-image-one js-tilt">
                                <img src="assets/images/about/about-8.jpg" alt="AboutImage">
                            </div>
                            <div class="about-tab-image-three js-tilt">
                                <img src="assets/images/about/about-6.jpg" alt="AboutImage">
                            </div>
                            <div class="about-tab-image-two js-tilt">
                                <img src="assets/images/about/about-11.jpg" alt="AboutImage">
                            </div>
                        </div>
                        <!-- About Tab images End -->
                    </div>
                    <div class="col-lg-6 align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">

                        <!-- About Tab Content Start -->
                        <div class="heading-one">
                            <!-- <span class="heading-one-subtitle">Welcome to Pix Plus</span> -->
                            <h2 class="heading-one-title">Digital Podium and Standee</h2>
                            <p>We specialize in transforming spaces with advanced interactive technology. Our products include interactive flat screens, digital platforms, standees, and wall displays—perfect for classrooms, businesses, and events.</p>
                            <p>Pix Plus is a reputable supplier throughout India, dedicated to providing premium products at competitive prices. Our innovative range includes OPS and I-frame standees, designed to meet various needs while offering cutting-edge functionality.</p>
                            <a href="about.php" class="btn-style-one"><span>Learn more</span></a>
                        </div>
                        <!-- About Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="tab-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- About Tab images Start -->
                        <div class="about-tab-image">
                            <div class="shape shape-1">
                                <img src="assets/images/shape/shape-6.png" alt="Shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="assets/images/shape/shape-7.png" alt="Shape">
                            </div>
                            <div class="about-tab-image-one js-tilt">
                                <img src="assets/images/about/about-1.png" alt="AboutImage">
                            </div>
                            <div class="about-tab-image-three js-tilt">
                                <img src="assets/images/about/about-3.png" alt="AboutImage">
                            </div>
                            <div class="about-tab-image-two js-tilt">
                                <img src="assets/images/about/about-2.png" alt="AboutImage">
                            </div>
                        </div>
                        <!-- About Tab images End -->
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <!-- About Tab Content Start -->
                        <div class="heading-one">
                            <span class="heading-one-subtitle">Design Matters</span>
                            <h2 class="heading-one-title">Rapid Prototype and Development</h2>
                            <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                            <a href="about.html" class="btn-style-one"><span>Learn more</span></a>
                        </div>
                        <!-- About Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="tab-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- About Tab images Start -->
                        <div class="about-tab-image">
                            <div class="shape shape-1">
                                <img src="assets/images/shape/shape-6.png" alt="Shape">
                            </div>
                            <div class="shape shape-2">
                                <img src="assets/images/shape/shape-7.png" alt="Shape">
                            </div>
                            <div class="about-tab-image-one js-tilt">
                                <img src="assets/images/about/about-1.png" alt="AboutImage">
                            </div>
                            <div class="about-tab-image-three js-tilt">
                                <img src="assets/images/about/about-3.png" alt="AboutImage">
                            </div>
                            <div class="about-tab-image-two js-tilt">
                                <img src="assets/images/about/about-2.png" alt="AboutImage">
                            </div>
                        </div>
                        <!-- About Tab images End -->
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <!-- About Tab Content Start -->
                        <div class="heading-one">
                            <span class="heading-one-subtitle">Design Matters</span>
                            <h2 class="heading-one-title">Rapid Prototype and Development</h2>
                            <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                            <a href="about.html" class="btn-style-one"><span>Learn more</span></a>
                        </div>
                        <!-- About Tab Content End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="assets/images/shape/shape-5.png" alt="Shape">
        </div>
        <div class="shape shape-2">
            <img src="assets/images/shape/shape-7.png" alt="Shape">
        </div>
        <div class="shape shape-3">
            <img src="assets/images/shape/dot-1.png" alt="Shape">
        </div>
    </div>
</div>
<!-- Tab Content End -->

<!-- Progress Section Start -->
<!-- <div class="section-padding progress-section pb-0">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-9 order-2 order-lg-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <div class="progress-section-content">
                  
                    <div class="heading-one">
                        <span class="heading-one-subtitle">Our Features</span>
                        <h2 class="heading-one-title">Your Deserve the Best</h2>
                        <p class="">Wipsor thesit amet, consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna almusic over turnn of theiqua. </p>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1">
                            <div class="radial-progress-single">
                                <div class="radial-progress" data-percent="89" data-bar-color="#ffffff">
                                    <div class="circle-text">
                                        <span class="count">89%</span>
                                    </div>
                                </div>
                                <div class="circle-info">
                                    <h4 class="title">Creativity</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay=".2">
                            <div class="radial-progress-single">
                                <div class="radial-progress" data-percent="62" data-bar-color="#ffffff">
                                    <div class="circle-text">
                                        <span class="count">62%</span>
                                    </div>
                                </div>
                                <div class="circle-info">
                                    <h4 class="title">Dedication</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay=".3">
                            <div class="radial-progress-single">
                                <div class="radial-progress" data-percent="76" data-bar-color="#ffffff">
                                    <div class="circle-text">
                                        <span class="count">76%</span>
                                    </div>
                                </div>
                                <div class="circle-info">
                                    <h4 class="title">Smart Work</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-1 order-lg-2 custom-margin">
                <div class="progress-image">
                    <img src="assets/images/progress/progress-image.png" alt="progress">
                </div>
            </div>
        </div>
    </div>

    <div class="shape shape-1">
        <img src="assets/images/shape/shape-2.png" alt="Shape">
    </div>
    <div class="shape shape-2">
        <img src="assets/images/shape/shape-7.png" alt="Shape">
    </div>
    <div class="shape shape-3">
        <img src="assets/images/shape/shape-8.png" alt="Shape">
    </div>
</div>  -->

<!-- Service Industries start -->
<!--  -->
<Style>
    .IWS{
        color:#564559;
    }
</Style>
<section class="vs-container pt-5">
    <div class="row m-2">
        <div class="col-md-12 text-md-center pt-4 vs-hline">
            <h3 vs-edit="" class="m-3"> <b>Industries we server</b> <span class="d-inline d-sm-none"><br></span></h3>
        </div> <a class="col-md-4 media-content-block">
            <div class="hidden-more">
                <div class="media-content-bg lazyloaded" style="background:  50% 50% / cover no-repeat;" data-src="">
                    <img src="./assets/images/service/industries/education1.jpg" class="img-fluid lazyloaded" alt="spacebg"></div>
            </div>
            <div class="py-3">
                <h4 vs-edit="" class="IWS">Education Institute</h4>
                <p vs-edit="" class="IWS">Educational Institutions Enhance interactive learning with digital flat panels and real-time collaboration tools.</p>
            </div>
            <!-- <div class="vs-read-more"> <span vs-edit="">Learn More &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span> </div> -->
        </a> <a class="col-md-4 media-content-block">
            <div class="hidden-more">
                <div class="media-content-bg lazyloaded" style="background:  50% 50% / cover no-repeat;" data-src="">
                    <img src="./assets/images/service/industries/corporateOF2.jpg" class="img-fluid lazyloaded" alt="spacebg"></div>
            </div>
            <div class="py-3">
                <h4 vs-edit=""class="IWS">Corporate Office</h4>
                <p vs-edit=""class="IWS"> Streamline meetings with video conferencing, digital podiums, and professional display solutions. </p>
            </div>
            <!-- <div class="vs-read-more"> <span vs-edit="">Find a Solution &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span> </div> -->
        </a> <a class="col-md-4 media-content-block">
            <div class="hidden-more">
                <div class="media-content-bg lazyloaded" style="background: 50% 50% / cover no-repeat;" data-src="" uk-img="">
                    <img src="./assets/images/service/industries/Retail3.jpg" class="img-fluid lazyloaded" alt="spacebg"></div>
            </div>
            <div class="py-3">
                <h4 vs-edit="" class="IWS">Retail & Showrooms</h4>
                <p vs-edit="" class="IWS">Attract customers with dynamic digital signage and engaging promotional displays. </p>
            </div>
            <!-- <div class="vs-read-more"> <span vs-edit="">Explore &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span> </div> -->
        </a>
    </div>

    <div class="row m-2">
        <div class="col-md-12 text-md-center pt-4 vs-hline">
            <!-- <h3 vs-edit="">Solutions for <span class="d-inline d-sm-none"><br></span>Learning, Work, and Play</h3> -->
        </div> <a class="col-md-4 media-content-block" href="">
            <div class="hidden-more">
                <div class="media-content-bg lazyloaded" style="" data-src="">
                    <img src="./assets/images/service/industries/event-venue4.jpeg" class="img-fluid lazyloaded" alt="spacebg"></div>
            </div>
            <div class="py-3">
                <h4 vs-edit="" class="IWS" >Event & Venues</h4>
                <p vs-edit="" class="IWS">Elevate conferences and exhibitions with interactive standees and live presentation tools.</p>
            </div>
            <!-- <div class="vs-read-more"> <span vs-edit="">Learn More &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span> </div> -->
        </a> <a class="col-md-4 media-content-block">
            <div class="hidden-more">
                <div class="media-content-bg lazyloaded" style="" data-src="">
                    <img src="./assets/images/service/industries/hospitals5.jpg" class="img-fluid lazyloaded" alt="spacebg"></div>
            </div>
            <div class="py-3">
                <h4 vs-edit="" class="IWS" >Hospitals & Healthcare <br> Centers</h4>
                <p vs-edit="" class="IWS">Improve patient communication with self-check-in kiosks and digital information boards.</p>
            </div>
            <!-- <div class="vs-read-more"> <span vs-edit="">Find a Solution &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span> </div> -->
        </a> <a class="col-md-4 media-content-block">
            <div class="hidden-more">
                <div class="media-content-bg lazyloaded" style="" uk-img="">
                    <img src="./assets/images/service/industries/hotels6.jpg" class="img-fluid lazyloaded" alt="spacebg"></div>
            </div>
            <div class="py-3">
                <h4 vs-edit="" class="IWS">Hotels Hospitality </h4>
                <p vs-edit="" class="IWS">Enhance guest experience with interactive kiosks, digital signages, and smart display solutions.</p>
            </div>
            <!-- <div class="vs-read-more"> <span vs-edit="">Explore &nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i></span> </div> -->
        </a>
    </div>
</section>
<!-- Service Section End -->

<!-- Work Two Section Start -->
<div class="work-two">
    <div class="shape">
        <div class="shape1 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
            <img src="assets/images/work/shape1.png" alt="shape">
        </div>
        <div class="shape2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
            <img src="assets/images/work/shape2.png" alt="shape">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <!-- Heading Start -->
                <div class="heading-one">
                    <span class="heading-one-subtitle">Our Products</span>
                    <h2 class="heading-one-title">Field Success with Our Equipment</h2>
                </div>
                <!-- Heading End -->
            </div>
        </div>
    </div>
    <div class="container-fluid g-0">
        <div class="row g-0">
            <div class="col-12 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <div class="work-carousel-wrapper">
                    <div class="swiper work-carousel parent-gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('Interactive Flat Panel'); ?>">
                                        <img src="assets/images/product/index/interactive.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">Interactive Flat Panel</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('Interactive Flat Panel'); ?>">These advanced displays enhance learning, productivity, and engagement.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/interactive.jpg"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('IFP Stand'); ?>">
                                        <img src="assets/images/product/index/ifp.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">IFP Stand</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('IFP Stand'); ?>">The interactive flat panel display stand is built for durability, ease of use, and flexibility, ensuring seamless integration with interactive flat panels.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/ifp.jpg"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('Wall Mount Display Signage'); ?>">
                                        <img src="assets/images/product/index/wallmount.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">Wall Mount Display Signage</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('Wall Mount Display Signage'); ?>">This wall-mounted display case is perfect for showcasing digital content, presentations, and advertisements.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/wallmount.jpg"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('I Frame Standee'); ?>">
                                        <img src="assets/images/product/index/I-frame-standee.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">I Frame Standee</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('I Frame Standee'); ?>">This digital standee is ideal for dynamic standee displays, allowing you to showcase multimedia content, advertisements, or promotions with ease.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/I-frame-standee.jpg"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('A Frame Standee'); ?>">
                                        <img src="assets/images/product/index/aframe.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">A Frame Standee</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('A Frame Standee'); ?>">This portable standee is perfect for both indoor and outdoor environments and provides easy setup and transport.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/aframe.jpg"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('Digital Podium'); ?>">
                                        <img src="assets/images/product/index/digitalpodium.webp" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">Digital Podium</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('Digital Podium'); ?>">Our interactive digital podium combines cutting-edge technology with sleek design, providing a seamless experience for speakers and presenters.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/digitalpodium.webp"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="single-work-carousel">
                                    <a class="thumbnail" href="products_details.php?p_n=<?= base64_encode('Digital Kiosk Machine'); ?>">
                                        <img src="assets/images/product/index/digitalkiosk.jpg" alt="">
                                    </a>
                                    <div class="content">
                                        <span class="subtitle">Digital Kiosk Machine</span>
                                        <h3 class="title">
                                            <a href="products_details.php?p_n=<?= base64_encode('Digital Kiosk Machine'); ?>">Our kiosks feature a digital kiosk display and provide a seamless user experience.</a>
                                        </h3>
                                    </div>
                                    <div class="lightbox">
                                        <a class="item" href="assets/images/product/index/digitalkiosk.jpg"><i class="fas fa-external-link-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== Add Swiper navigation Buttons ==-->
                        <div class="work-swiper-arrow swiper-arrow-long">
                            <div class="swiper-btn swiper-btn-prev testimonial-slider-button-prev prev-button">
                                <img class="next-arrow-1 arrow-1" src="assets/images/slider/arrow-1.png" alt="">
                                <img class="next-arrow-2 arrow-2" src="assets/images/slider/arrow-2.png" alt="">
                            </div>
                            <div class="swiper-btn swiper-btn-next testimonial-slider-button-next next-button">
                                <img class="prev-arrow-1 arrow-1" src="assets/images/slider/arrow-1.png" alt="">
                                <img class="prev-arrow-2 arrow-2" src="assets/images/slider/arrow-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Work Two Section End -->



<!-- Work Section Start -->
<!-- <div class="work">
    <div class="container-fluid position-relative">
        <div class="row">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <div class="work-bg">
                    <div class="heading-one">
                        <span class="heading-one-subtitle">Let's Work Together</span>
                        <h2 class="heading-one-title">Want to Discuss About A New Project?</h2>
                        <p>At Pix Plus, we specialize in transforming spaces with advanced interactive technology. Whether it's for educational institutions, corporate offices, retail showrooms, or event venues, our innovative solutions are designed to meet your unique needs.</p>
                    </div>
                    <div class="work-btn">
                        <a href="contact_us.php" class="btn-style-two">Let's Start Talking</a>
                        <a href="projects.html" class="view-btn">View Works</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div class="work-image">
                    <img src="assets/images/work/work.png" alt="Work">
                </div>
            </div>
        </div>
    </div>
    <div class="work-step">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <div class="heading-one">
                        <span class="heading-one-subtitle">How It Works</span>
                        <h2 class="heading-one-title">Effortless Steps to Transform Your Space</h2>
                        <p>At Pix Plus, we simplify the process of integrating advanced interactive technology into your environment. From consultation to installation, we ensure a seamless experience tailored to your needs.</p>
                    </div>
                </div>
            </div>
            <div class="row row-cols-lg-4 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n30">
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <div class="work-step-single">
                        <div class="number">1</div>
                        <a href="contact.html"><span class="title">Collaborative Video Conferencing Solutions</span></a>
                        <p>Connect, collaborate, and communicate effortlessly.</p>
                    </div>
                </div>
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                    <div class="work-step-single">
                        <div class="number">2</div>
                        <a href="contact.html"><span class="title">Dynamic Signage Display Solutions
                            </span></a>
                        <p>Captivate your audience with stunning visuals.</p>
                    </div>
                </div>
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="work-step-single">
                        <div class="number">3</div>
                        <a href="contact.html"><span class="title">Innovative Digital Signage Software
                            </span></a>
                        <p>Simplify content management like never before.</p>
                    </div>
                </div>
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <div class="work-step-single">
                        <div class="number">4</div>
                        <a href="contact.html"><span class="title">Get Final Report</span></a>
                        <p>Pore et dolore magna aliqua. strud exercit ctetur adipisicing elit, sed do eiusmod tempor incidid</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="work-step-white-bg"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-lg-none d-block">
                <div class="work-image">
                    <img src="assets/images/work/work.png" alt="Work">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Work Section End -->

<!-- Testimonial One Section Start -->
<div class="testimonial-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-one-inner">
                    <div class="testimonial-one-image">
                        <img src="assets/images/testimonial/testimonial-large.png" alt="TestimonialImage">
                    </div>
                    <div class="testimonial-one-content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">

                        <div class="heading-one">
                            <span class="heading-one-subtitle">Testimoials</span>
                            <h2 class="heading-one-title">What People Say</h2>
                        </div>

                        <div class="testimonialone">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonialone-single">
                                        <p class="testimonialone-text">Pix Plus has transformed our office environment. Their interactive technology has made meetings and presentations more efficient. The installation was seamless, and their support team is always ready to help.</p>
                                        <div class="testimonialone-content">
                                            <div class="testimonialone-thumb">
                                                <img src="assets/images/testimonial/Richa_pamnani.jpeg" alt="Testimonial-Image" style="height:90px; width:90px; border-radius: 50px 50px">
                                            </div>
                                            <div class="testimonialone-info">
                                                <span class="name">Richa Pamnani</span>
                                                <span class="designation">Director Space Institute of Design and Innovation</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonialone-single">
                                        <p class="testimonialone-text">Our school has transformed with Interactive Flat Panels, Digital Podiums, and Kiosk Machines. Teaching is now more interactive, enhancing student engagement and learning.</p>
                                        <div class="testimonialone-content">
                                            <div class="testimonialone-thumb">
                                                <img src="assets/images/testimonial/Miss_paras_jain_1.jpeg" alt="Testimonial-Image" style="height:90px; width:90px; border-radius: 50px 50px">
                                            </div>
                                            <div class="testimonialone-info">
                                                <span class="name">Miss Paras Jain</span>
                                                <span class="designation">HR Shree Mahavir Jain H.S School, Durg</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonialone-single">
                                        <p class="testimonialone-text">With Interactive Flat Panels, IFP Stands, and Digital Kiosks, Murlidhar School has made learning more engaging. Technology has truly enhanced the classroom experience.</p>
                                        <div class="testimonialone-content">
                                            <div class="testimonialone-thumb">
                                                <img src="assets/images/testimonial/Deepak_Singh_1.jpeg" alt="Testimonial-Image" style="height:90px; width:90px; border-radius: 50px 50px">
                                            </div>
                                            <div class="testimonialone-info">
                                                <span class="name">Deepak Singh</span>
                                                <span class="designation">Headmaster Murlidhar School</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonialone-single">
                                        <p class="testimonialone-text">Avish Educom is redefining education with Wall Mount Display Signage, A Frame Standees, and Digital Podiums. Their innovative tools make learning smarter and more effective.</p>
                                        <div class="testimonialone-content">
                                            <div class="testimonialone-thumb">
                                                <img src="assets/images/testimonial/nilesh_parekh.jpeg" alt="Testimonial-Image" style="height:90px; width:90px; border-radius: 50px 50px">
                                            </div>
                                            <div class="testimonialone-info">
                                                <span class="name">Nilesh Parekh</span>
                                                <span class="designation">Avish Educom, Raipur</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-style-one">
                                <div class="swiper-pagination testimonialone-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="testimonial-one-thumb gradient-1 wow flipInY" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <img src="assets/images/testimonial/testimonial-quote.png" alt="QuoteImage">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-1">
        <img src="assets/images/shape/shape-14.png" alt="Shape">
    </div>
    <div class="shape shape-2">
        <img src="assets/images/shape/shape-2.png" alt="Shape">
    </div>
</div>
<!-- Testimonial One Section End -->

<!-- Brand Section Start -->
<!-- <div class="brand-three">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <div class="brand-slider brand-style swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="brand-after" href="#"><img src="assets/images/brand/1.png" alt="Brand-Image   "></a>
                            <a class="brand-before" href="#"><img src="assets/images/brand/1-1.png" alt="Brand-Image"></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-after" href="#"><img src="assets/images/brand/2.png" alt="Brand-Image"></a>
                            <a class="brand-before" href="#"><img src="assets/images/brand/2-1.png" alt="Brand-Image"></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-after" href="#"><img src="assets/images/brand/3.png" alt="Brand-Image"></a>
                            <a class="brand-before" href="#"><img src="assets/images/brand/3-1.png" alt="Brand-Image"></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-after" href="#"><img src="assets/images/brand/4.png" alt="Brand-Image"></a>
                            <a class="brand-before" href="#"><img src="assets/images/brand/4-1.png" alt="Brand-Image"></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-after" href="#"><img src="assets/images/brand/5.png" alt="Brand-Image"></a>
                            <a class="brand-before" href="#"><img src="assets/images/brand/5-1.png" alt="Brand-Image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape shape-1">
        <img src="assets/images/shape/shape-15.png" alt="Shape">
    </div>
    <div class="shape shape-2">
        <img src="assets/images/shape/shape-16.png" alt="Shape">
    </div>
    <div class="shape shape-3">
        <img src="assets/images/shape/shape-2.png" alt="Shape">
    </div>
</div> -->
<!-- Brand Section End -->



<!-- Blog Post Section Start -->
<div class="blog-post section-padding">
    <div class="container">
        <div class="row">
            <div class="blog-post-top">
                <!-- Heading Start -->
                <div class="heading-one wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <span class="heading-one-subtitle">Insights & Updates</span>
                    <h2 class="heading-one-title">Latest News</h2>
                    <p>Stay updated with the latest trends, insights, and innovations in interactive technology and digital solutions.</p>
                </div>
                <!-- Heading End -->
                <a href="blog.php" class="btn-style-one wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s"><span>Explore Blog</span></a>
            </div>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n30">
            <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <!-- Single Blogpost Start -->
                <div class="blogpost">
                    <!-- Blogpost Image Start -->
                    <div class="blogpost-image">
                        <a href="blog-details.php"><img src="assets/images/blog/blog1.png" alt="BlogImage"></a>
                        <div class="blogpost-image-thumb">
                            <span class="date">22</span>
                            <span class="text">Apr</span>
                        </div>
                    </div>
                    <!-- Blogpost Image End -->

                    <!-- Blogpost Content Start -->
                    <div class="blogpost-content">
                        <ul class="blogpost-meta">
                            <li>
                                <i class="fas fa-folder-open"></i>
                                <a href="blog-details.php">Technology</a>
                            </li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="blog-details.php">Admin</a>
                            </li>
                        </ul>
                        <h4 class="blogpost-title"><a href="blog-details.php">Transforming Education with Interactive Panels</a></h4>
                        <a class="blogpost-read-more" href="blog-details.php">Read More</a>
                    </div>
                    <!-- Blogpost Content End -->
                </div>
                <!-- Single Blogpost End -->
            </div>
            <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <!-- Single Blogpost Start -->
                <div class="blogpost">
                    <!-- Blogpost Image Start -->
                    <div class="blogpost-image">
                        <a href="blog-details.php"><img src="assets/images/blog/blog2.png" alt="BlogImage"></a>
                        <div class="blogpost-image-thumb">
                            <span class="date">20</span>
                            <span class="text">Apr</span>
                        </div>
                    </div>
                    <!-- Blogpost Image End -->

                    <!-- Blogpost Content Start -->
                    <div class="blogpost-content">
                        <ul class="blogpost-meta">
                            <li>
                                <i class="fas fa-folder-open"></i>
                                <a href="blog-details.php">Business</a>
                            </li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="blog-details.php">Admin</a>
                            </li>
                        </ul>
                        <h4 class="blogpost-title"><a href="blog-details.php">Enhancing Corporate Meetings with Digital Solutions</a></h4>
                        <a class="blogpost-read-more" href="blog-details.php">Read More</a>
                    </div>
                    <!-- Blogpost Content End -->
                </div>
                <!-- Single Blogpost End -->
            </div>
            <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                <!-- Single Blogpost Start -->
                <div class="blogpost">
                    <!-- Blogpost Image Start -->
                    <div class="blogpost-image">
                        <a href="blog-details.php"><img src="assets/images/blog/blog3.png" alt="BlogImage"></a>
                        <div class="blogpost-image-thumb">
                            <span class="date">24</span>
                            <span class="text">Apr</span>
                        </div>
                    </div>
                    <!-- Blogpost Image End -->

                    <!-- Blogpost Content Start -->
                    <div class="blogpost-content">
                        <ul class="blogpost-meta">
                            <li>
                                <i class="fas fa-folder-open"></i>
                                <a href="blog-details.php">Innovation</a>
                            </li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="blog-details.php">Admin</a>
                            </li>
                        </ul>
                        <h4 class="blogpost-title"><a href="blog-details.php">Revolutionizing Retail with Digital Signage</a></h4>
                        <a class="blogpost-read-more" href="blog-details.php">Read More</a>
                    </div>
                    <!-- Blogpost Content End -->
                </div>
                <!-- Single Blogpost End -->
            </div>
        </div>
    </div>

    <div class="shape shape-1">
        <img src="assets/images/shape/shape-17.png" alt="Shape">
    </div>
    <div class="shape shape-2">
        <img src="assets/images/shape/shape-2.png" alt="Shape">
    </div>
    <div class="shape shape-3">
        <img src="assets/images/shape/shape-18.png" alt="Shape">
    </div>
    <div class="shape shape-4">
        <img src="assets/images/shape/shape-2.png" alt="Shape">
    </div>
    <div class="shape shape-5">
        <img src="assets/images/shape/shape-19.png" alt="Shape">
    </div>
    <div class="shape shape-6">
        <img src="assets/images/shape/shape-18.png" alt="Shape">
    </div>
</div>
<!-- Blog Post Section End -->





<?php include('includes/footer.php'); ?>