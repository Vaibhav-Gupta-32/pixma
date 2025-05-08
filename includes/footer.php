<?php
$facebook = getvalfield($conn, "social_links", "facebook", "1");
$twitter = getvalfield($conn, "social_links", "twitter", "1");
$instagram = getvalfield($conn, "social_links", "instagram", "1");
$linkedIn = getvalfield($conn, "social_links", "linkedIn", "1");

?>
<style>
    .white-icon {
        color: white;
    }
</style>

<!-- Footer Section Start -->
<div class="footer footer-about">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4 col-md-5">
                <div class="footer-left">
                    <div class="footer-left-inner">
                        <div class="footer-logo d-flex align-items-center justify-content-left">
                            <div class="footer-left-logo">
                                <a href="index.php">
                                    <img class="" src="assets/images/pixma-logo-2.png" alt="LogoImage" style="height:100px">
                                </a>
                            </div>
                            <div class="">
                                <h2 style="color:#e5cce2;font-family: Playfair Display, serif;">PIXPLUS</h2>
                            </div>
                        </div>
                        <p class="footer-left-text">White Feather Innovations Pvt. Ltd. is committed to offering tools that make your presentations memorable.</p>
                        <ul class="footer-left-list-icon">
                            <?php if ($current_page == "kolkatacenter.php") { ?>
                                <li><i class="fas fa-map-marker-alt"></i> <span>East Zone: Office No. 17, 18th Floor, Infinity Benchmark, Salt Lake, Sector-V, Kolkata</span></li>
                            <?php } else if ($current_page == "newdelhicenter.php") { ?>
                                <li><i class="fas fa-map-marker-alt"></i> <span>Sales Office: 303, 3rd Floor, Besst Arcade Building, Sector-12, Dwarka, New Delhi-110075</span></li>
                            <?php } else { ?>
                                <li><i class="fas fa-map-marker-alt"></i> <span>Registered Office: A-140, A-1, Sector-7B, Kamal Vihar, Raipur, Chhattisgarh, 492004</span></li>
                            <?php } ?>


                        </ul>
                        <ul class="social-icon d-flex flex-start">
                            <li><a href="<?= $facebook ?>" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $twitter ?>" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= $linkedIn ?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?= $instagram ?>" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="footer-right">
                    <div class="footer-bottom footer-bottom-about">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="footer-widget">
                                    <h5 class="footer-widget-title">Contact</h5>
                                    <ul class="footer-widget-list">
                                        <li><i class="fas fa-phone white-icon"></i>&nbsp; <a href="tel:+916291509470">+91-6291509470</a></li>
                                        <?php if ($current_page == "kolkatacenter.php") { ?>
                                            <li><i class="fas fa-envelope white-icon"></i>&nbsp; <a href="mailto:east.sales@pixmainnovation.com">east.sales@pixmainnovation.com</a> </li>
                                            <li><i class="fas fa-envelope white-icon"></i>&nbsp; <a href="mailto:innovationswhitefeather@gmail.com">innovationswhitefeather@gmail.com</a> </li>
                                        <?php } else if ($current_page == "newdelhicenter.php") { ?>
                                            <li><i class="fas fa-envelope white-icon"></i>&nbsp; <a href="mailto:md@pixmainnovation.com">md@pixmainnovation.com</a> </li>
                                            <li><i class="fas fa-envelope white-icon"></i>&nbsp; <a href="mailto:innovationswhitefeather@gmail.com">innovationswhitefeather@gmail.com</a> </li>
                                        <?php } else { ?>
                                            <li><i class="fas fa-envelope white-icon"></i>&nbsp; <a href="mailto:accounts@pixmainnovation.com">accounts@pixmainnovation.com</a> </li>
                                            <li><i class="fas fa-envelope white-icon"></i>&nbsp; <a href="mailto:innovationswhitefeather@gmail.com">innovationswhitefeather@gmail.com</a> </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-widget-subscription">
                                    <h5 class="footer-widget-title">Subscribe to our newsletter</h5>
                                    <p class="footer-widget-text">Stay updated with our latest innovations and insights.</p>
                                    <!-- <a href="mailto:md@pixmainnovation.com">md@pixmainnovation.com</a> -->
                                    <!-- <form action="#" class="footer-widget-form">
                                <input type="text" placeholder="Your email here">
                                <button><img src="assets/images/icon/icon-5.png" alt="IconImage"></button>
                            </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-4">
                            <!-- Centers Section Start -->
                            <div class="centers-section mb-4">
                                <div class="row g-4">
                                    <!-- Kolkata Center -->
                                    <div class="col-md-4">
                                        <div class="center-card d-flex align-items-center p-4 rounded" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                                            <div class="center-icon me-3">
                                                <i class="fas fa-building fa-2x" style="color: #e5cce2;"></i>
                                            </div>
                                            <div class="center-info">
                                                <h6 class="mb-2" style="color: #e5cce2; font-family: 'Playfair Display', serif;"><a href="kolkatacenter.php">Kolkata Center</a></h6>
                                                <p class="mb-0 small" style="color: #ffffff; opacity: 0.8;">Office No. 17, 18th Floor, Infinity Benchmark, Salt Lake, Sector-V, Kolkata</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- New Delhi Center -->
                                    <div class="col-md-4">
                                        <div class="center-card d-flex align-items-center p-4 rounded" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                                            <div class="center-icon me-3">
                                                <i class="fas fa-building fa-2x" style="color: #e5cce2;"></i>
                                            </div>
                                            <div class="center-info">
                                                <h6 class="mb-2" style="color: #e5cce2; font-family: 'Playfair Display', serif;"><a href="newdelhicenter.php">New Delhi Center</a></h6>
                                                <p class="mb-0 small" style="color: #ffffff; opacity: 0.8;">303, 3rd Floor, Besst Arcade Building, Sector-12, Dwarka, New Delhi-110075</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Raipur Center -->
                                    <div class="col-md-4">
                                        <div class="center-card d-flex align-items-center p-4 rounded" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1);">
                                            <div class="center-icon me-3">
                                                <i class="fas fa-building fa-2x" style="color: #e5cce2;"></i>
                                            </div>
                                            <div class="center-info">
                                                <h6 class="mb-2" style="color: #e5cce2; font-family: 'Playfair Display', serif;"><a href="raipurcenter.php">Raipur Center</a></h6>
                                                <p class="mb-0 small" style="color: #ffffff; opacity: 0.8;">A-140, A-1, Sector-7B, Kamal Vihar, Raipur, Chhattisgarh, 492004</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Centers Section End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <p class="order-md-1 order-2">Copyright © <span><a href="https://pixmainnovations.com/" style="color:#e5cce2;font-family: Playfair Display, serif;">Pixma</a></span></p><br> -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="footer-copyright-inner">
                        <p class="order-md-1 order-2" style="color: dark;">© 2025 <a href="https://pixmainnovations.com/" style="color:#ffffff;font-family: Playfair Display, serif;">PixPlus</a> All Rights Reserved.</p>
                        <ul class="footer-bootm-list order-md-2 order-1">
                            <li>
                                <p class="order-md-1 order-2">Designed and Developed by <span><a href="https://tdhdigitalagency.com/" style="color:#d1e8fa;font-family: Playfair Display, serif;">the Digital House</a></span></p>
                            </li>

                            <!-- <li><a href="contact.html">Terms &amp; Condition</a></li>
                            <li><a href="contact.html">Privacy Policy</a></li>
                            <li><a href="contact.html">Legal</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section End -->

<!-- Scroll Top Start -->
<a href="#" class="scroll-top show" id="scroll-top">
    <i class="arrow-top fas fa-angle-double-up"></i>
    <i class="arrow-bottom fas fa-angle-double-up"></i>
</a>
<!-- Scroll Top End -->


<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>


<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="assets/js/plugins/magnificpopup.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/easypiechart.min.js"></script>
<script src="assets/js/plugins/tilt.jquery.min.js"></script>
<script src="assets/js/plugins/odometer.min.js"></script>
<script src="assets/js/plugins/isotope.min.js"></script>
<script src="assets/js/plugins/imagesloaded.min.js"></script>
<script src="assets/js/plugins/waypoint.min.js"></script>
<script src="assets/js/plugins/wow.min.js"></script>
<script src="assets/js/plugins/fancybox.min.js"></script>
<script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
<script src="assets/js/plugins/parallax.js"></script>

<!-- Activation JS -->
<script src="assets/js/main.js"></script>
<script src="assets/js/pages/home.js"></script>

<script>
    var sliderOneSwiper = new Swiper('.sliderone', {
        loop: true,
        autoplay: {
            delay: 4000, // 4 second me slide auto change hoga
            disableOnInteraction: false,
        },
        pagination: {
            el: '.sliderone-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
</body>



</html>