<?php 
$page_title = "PIXMAINNOVATIONS || SERVICES";
$pagename = "Services";
$current_page = basename($_SERVER['PHP_SELF']);
$tblname = "service";
$tblkey = "id";
$meta_description = "One of the best and affordable Interactive Flat Panel sales and service centre in raipur at best price for all business types.";
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>

<!-- Service Section Start -->
<div class="section-padding">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n30">
        <?php
        $sql = "SELECT * FROM $tblname ORDER BY $tblkey";
        $fetch = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($fetch)){
        ?>
            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="admin/dash/images/<?= $row['location']; ?>" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-2.png" alt="Icon">
                            </div>
                            <h4 class="title"><?= $row['title']; ?> </h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title"><?= $row['title']; ?></span>
                            <p class=""><?= $row['description']; ?></p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
<?php } ?>

            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="assets/images/service/service1.png" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-2.png" alt="Icon">
                            </div>
                            <h4 class="title">Maintenance <br> Support</h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title">Maintenance <br> Support</span>
                            <p>Regular servicing and technical assistance to keep your technology performing optimally.</p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="assets/images/service/service2.png" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-3.png" alt="Icon">
                            </div>
                            <h4 class="title">Warranty <br> Support</h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title">Warranty <br> Support</span>
                            <p>Comprehensive coverage from 1 to 5 years, ensuring peace of mind and product reliability.</p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".4s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="assets/images/service/service3.png" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-4.png" alt="Icon">
                            </div>
                            <h4 class="title">Office <br> Automation</h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title">Office <br> Automation</span>
                            <p>Streamlining operations with interactive displays, podiums, and digital presentation tools.</p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="assets/images/service/service4.png" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-5.png" alt="Icon">
                            </div>
                            <h4 class="title">Training <br> Services</h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title">Training <br> Services</span>
                            <p>Ensuring users maximize technology with expert-led training for businesses and educators.</p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".6s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="assets/images/service/service5.png" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-6.png" alt="Icon">
                            </div>
                            <h4 class="title">Educational <br> Automation</h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title">Educational <br> Automation</span>
                            <p>Transforming classrooms with interactive learning tools and real-time collaboration.</p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col mb-30 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".6s">
                <!-- Single Service Start -->
                <div class="service-single">
                    <div class="service-single-image">
                        <div class="service-single-image-thumb">
                            <img src="assets/images/service/service5.png" alt="ServiceImage">
                        </div>
                        <div class="service-single-image-content">
                            <div class="icon">
                                <img src="assets/images/icon/service/icon-6.png" alt="Icon">
                            </div>
                            <h4 class="title">End-to-End <br> Solutions</h4>
                        </div>
                    </div>
                    <div class="service-single-white">
                        <a href="service-details.html" class="service-single-white-content">
                            <div class="icon gradient-1">
                                <img src="assets/images/icon/service/icon-1-white.png" alt="Icon">
                            </div>
                            <span class="title">End-to-End <br> Solutions</span>
                            <p>Pix Plus offers more than just products; we provide a complete experience..</p>
                        </a>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
        </div>
    </div>
</div>
<!-- Service Section End -->

<!-- System Section Start -->
<div class="system">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="system-bg" data-bg-image="assets/images/system/system-bg1.png">
                    <!-- Single System Start -->
                    <div class="system-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                        <!-- System Icon Start -->
                        <div class="system-icon">
                            <img src="assets/images/icon/system/icon-1.png" alt="Icon">
                        </div>
                        <!-- System Icon End -->

                        <!-- System content Start -->
                        <div class="system-content">
                            <h5 class="title">Installation Services</h5>
                            <p>Our expert team ensures smooth installation of interactive flat panels, standees, and displays, making them ready to use for education, business, or events.</p>
                        </div>
                        <!-- System content End -->
                    </div>
                    <!-- Single System End -->
                    <!-- Single System Start -->
                    <div class="system-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <!-- System Icon Start -->
                        <div class="system-icon">
                            <img src="assets/images/icon/system/icon-2.png" alt="Icon">
                        </div>
                        <!-- System Icon End -->

                        <!-- System content Start -->
                        <div class="system-content">
                            <h5 class="title">Maintenance Support</h5>
                            <p>Our dedicated team provides regular servicing and technical support to keep your technology in optimal condition, minimizing downtime and ensuring reliability.</p>
                        </div>
                        <!-- System content End -->
                    </div>
                    <!-- Single System End -->
                    <!-- Single System Start -->
                    <div class="system-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                        <!-- System Icon Start -->
                        <div class="system-icon">
                            <img src="assets/images/icon/system/icon-3.png" alt="Icon">
                        </div>
                        <!-- System Icon End -->

                        <!-- System content Start -->
                        <div class="system-content">
                            <h5 class="title">Office Automation</h5>
                            <p>Enhance efficiency with our cutting-edge office automation solutions, including digital podiums, interactive displays, and sleek IFP stands for professional presentations.</p>
                        </div>
                        <!-- System content End -->
                    </div>
                    <!-- Single System End -->
                </div>
            </div>
            <div class="col-lg-7">
                <div class="system-bg2" data-bg-image="assets/images/system/system-bg2.png">
                    <!-- System Content Start -->
                    <div class="heading-one wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">At Pix Plus</span>
                        <h2 class="heading-one-title">Innovating Interactive Technology</h2>
                        <p>We deliver comprehensive service experiences from installation to maintenance, ensuring seamless automation for classrooms, corporate workspaces, and event venues.</p>
                        <a href="#" class="btn-style-one"><span>Learn more</span></a>
                    </div>
                    <!-- System Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- System Section End -->


<!-- Strategy Section Start -->
<div class="section-padding strategy-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- System Content Start -->
                <div class="heading-one wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <span class="heading-one-subtitle">Service Excellence</span>
                    <h2 class="heading-one-title">A Smarter Approach</h2>
                    <p>At Pix Plus, we ensure seamless integration of technology, offering top-tier solutions for interactive learning, corporate innovation, and smart automation.</p>
                </div>
                <!-- System Content End -->
            </div>
            <div class="col-lg-6">
                <div class="strategy-two-inner">
                    <!-- Strategy Two Single Start -->
                    <div class="strategy-two-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                        <div class="strategy-two-icon">
                            <img src="assets/images/icon/icon-6.png" alt="Icon">
                        </div>
                        <div class="strategy-two-content">
                            <h4 class="title">Installation Services</h4>
                            <p>We provide precise installation for interactive flat panels, standees, and displays, ensuring seamless functionality in any environment.</p>
                        </div>
                    </div>
                    <!-- Strategy Two Single End -->
                    <!-- Strategy Two Single Start -->
                    <div class="strategy-two-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="strategy-two-icon">
                            <img src="assets/images/icon/icon-7.png" alt="Icon">
                        </div>
                        <div class="strategy-two-content">
                            <h4 class="title">Maintenance Support</h4>
                            <p>Our team ensures smooth performance with prompt servicing, minimizing downtime and maximizing productivity for uninterrupted operations.</p>
                        </div>
                    </div>
                    <!-- Strategy Two Single End -->
                    <!-- Strategy Two Single Start -->
                    <div class="strategy-two-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                        <div class="strategy-two-icon">
                            <img src="assets/images/icon/icon-8.png" alt="Icon">
                        </div>
                        <div class="strategy-two-content">
                            <h4 class="title">Office Automation</h4>
                            <p>We streamline business operations with digital solutions like interactive displays, podiums, and automated tools for enhanced efficiency.</p>
                        </div>
                    </div>
                    <!-- Strategy Two Single End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Strategy Section End -->


<?php include('includes/footer.php'); ?>    