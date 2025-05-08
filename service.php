<?php
$page_title = "Interactive Flat Panel in Raipur | Delhi | Kolkata - Pix Plus";
$pagename = "Pix Plus Services";
$current_page = basename($_SERVER['PHP_SELF']);
$tblname = "service";
$tblkey = "id";
$meta_description = "One of the best and affordable Interactive Flat Panel sales and service centre in raipur at best price for all business types.";
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<style>
    .custom-box {
        background-color: #f8f9fa;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 12px 12px;
    }

    .content-title {
        font-size: 2rem;
        font-weight: 600;
        margin-top: 5px;
    }

    .content-text {
        font-size: 1.1rem;
        color: #555;
        line-height: 41px;
    }

    .image-box img {
        width: 100%;
        height: auto;
        border-radius: 10px;
    }
    .display-4{
        font-size: 46pxs;
    }
    @keyframes fadeUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .fade-up {
    animation: fadeUp 0.6s ease-in-out;
    }
    .slow-fade {
    opacity: 0;
    animation: fadeIn 2s ease-in forwards;
    }

    @keyframes fadeIn {
    to {
        opacity: 1;
    }
    }

    @media (max-width: 767.98px) {
        .custom-box {
            padding: 20px;
        }
        .content-text {
        font-size: 1.1rem;
        color: #555;
        line-height: 22px;
    }
    .content-title {
        font-size: 1.7rem;
        font-weight: 600;
        margin-top: 5px;
    }
        
    }

    @media (max-width:480px) {}

    @media (min-width:481px) and (max-width:767px) {}
</style>

<!-- containt container start -->
<!-- <div class="section-padding"> -->
<div class="container text-justify mt-4 fade-up" style="text-align: justify;">
<h2 class="mx-auto text-center display-4">Pix Plus Services</h2>
    <p class="content-text slow-fade" style="font-size: 1.1rem; color: #555; line-height: 41px;">
        At Pix Plus, we don’t just provide innovative products—we deliver a comprehensive service experience that ensures our customers can fully realize the potential of interactive technology. Our service offerings are crafted to support every stage of your journey, from installation and training to long-term maintenance and automation. We're here to help you transform a classroom, upgrade a corporate workspace, or improve an event venue. Pix Plus is your trusted partner in creating smarter, more connected environments, offering expert guidance, strong warranty support, and end-to-end service excellence.
    </p>
</div>
<!-- </div> -->
<!-- containt container end -->




<!-- Service Section Start -->
<div class="section-padding fade-up">
    <div class="container">
        <?php
        $sql = "SELECT * FROM $tblname ORDER BY $tblkey ASC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $counter = 0; // Initialize counter to track row position
            while ($row = mysqli_fetch_array($result)) {
                $counter++;
                if ($counter % 2 == 0) { // Even rows: Image on the left
        ?>
                    <div class="row justify-content-center custom-box m-4">
                        <div class="col-md-3">
                            <div class="image-box">
                                <img src="admin/dash/<?= $row['location']; ?>" alt="<?= $row['title']; ?>">
                            </div>
                        </div>
                        <div class="col-md-9 mb-4 mb-md-0">
                            <h2 class="content-title"><?= $row['title']; ?></h2>
                            <p class="content-text"><?= $row['description']; ?></p>
                        </div>
                    </div>
                <?php } else { // Odd rows: Image on the right 
                ?>
                    <div class="row justify-content-center custom-box m-4">
                        <div class="col-md-9 mb-4 mb-md-0">
                            <h2 class="content-title"><?= $row['title']; ?></h2>
                            <p class="content-text"><?= $row['description']; ?></p>
                        </div>
                        <div class="col-md-3">
                            <div class="image-box">
                                <img src="admin/dash/<?= $row['location']; ?>" alt="<?= $row['title']; ?>">
                            </div>
                        </div>
                    </div>
        <?php
                }
            }
        } else {
            echo "<p>No services available at the moment.</p>";
        }
        ?>
    </div>
</div>
</div>
<!-- Service Section End -->

<!-- System Section Start -->
<!-- <div class="system">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="system-bg" data-bg-image="assets/images/system/system-bg1.png">
                   
                    <div class="system-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                     
                        <div class="system-icon">
                            <img src="assets/images/icon/system/icon-1.png" alt="Icon">
                        </div>
                   
                        <div class="system-content">
                            <h5 class="title">Installation Services</h5>
                            <p>Our expert team ensures smooth installation of interactive flat panels, standees, and displays, making them ready to use for education, business, or events.</p>
                        </div>
                   
                    </div>
                    <div class="system-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                    
                        <div class="system-icon">
                            <img src="assets/images/icon/system/icon-2.png" alt="Icon">
                        </div>
                    
                        <div class="system-content">
                            <h5 class="title">Maintenance Support</h5>
                            <p>Our dedicated team provides regular servicing and technical support to keep your technology in optimal condition, minimizing downtime and ensuring reliability.</p>
                        </div>
                       
                    </div>
                  
                    <div class="system-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                      
                        <div class="system-icon">
                            <img src="assets/images/icon/system/icon-3.png" alt="Icon">
                        </div>
                        
                        <div class="system-content">
                            <h5 class="title">Office Automation</h5>
                            <p>Enhance efficiency with our cutting-edge office automation solutions, including digital podiums, interactive displays, and sleek IFP stands for professional presentations.</p>
                        </div>
                        
                    </div>
                
                </div>
            </div>
            <div class="col-lg-7">
                <div class="system-bg2" data-bg-image="assets/images/system/system-bg2.png">
                    
                    <div class="heading-one wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">At Pix Plus</span>
                        <h2 class="heading-one-title">Innovating Interactive Technology</h2>
                        <p>We deliver comprehensive service experiences from installation to maintenance, ensuring seamless automation for classrooms, corporate workspaces, and event venues.</p>
                        <a href="#" class="btn-style-one"><span>Learn more</span></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- System Section End -->


<!-- Strategy Section Start -->
<!-- <div class="section-padding strategy-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
           
                <div class="heading-one wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <span class="heading-one-subtitle">Service Excellence</span>
                    <h2 class="heading-one-title">A Smarter Approach</h2>
                    <p>At Pix Plus, we ensure seamless integration of technology, offering top-tier solutions for interactive learning, corporate innovation, and smart automation.</p>
                </div>
           
            </div>
            <div class="col-lg-6">
                <div class="strategy-two-inner">
                 
                    <div class="strategy-two-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                        <div class="strategy-two-icon">
                            <img src="assets/images/icon/icon-6.png" alt="Icon">
                        </div>
                        <div class="strategy-two-content">
                            <h4 class="title">Installation Services</h4>
                            <p>We provide precise installation for interactive flat panels, standees, and displays, ensuring seamless functionality in any environment.</p>
                        </div>
                    </div>
                   
                    <div class="strategy-two-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                        <div class="strategy-two-icon">
                            <img src="assets/images/icon/icon-7.png" alt="Icon">
                        </div>
                        <div class="strategy-two-content">
                            <h4 class="title">Maintenance Support</h4>
                            <p>Our team ensures smooth performance with prompt servicing, minimizing downtime and maximizing productivity for uninterrupted operations.</p>
                        </div>
                    </div>
                  
                    <div class="strategy-two-single wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                        <div class="strategy-two-icon">
                            <img src="assets/images/icon/icon-8.png" alt="Icon">
                        </div>
                        <div class="strategy-two-content">
                            <h4 class="title">Office Automation</h4>
                            <p>We streamline business operations with digital solutions like interactive displays, podiums, and automated tools for enhanced efficiency.</p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Strategy Section End -->


<?php include('includes/footer.php'); ?>