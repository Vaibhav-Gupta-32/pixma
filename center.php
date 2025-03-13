<?php
$page_title = "PIXMAINNOVATIONS || CENTER";
$pagename = "Center";
$current_page = basename($_SERVER['PHP_SELF']);
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>


<!-- Contact Us Section Start -->
<div class="contact-us section-margin">
    <div class="container position-relative">
        <div class="row">
            <!-- Heading Start -->
            <div class="heading-one text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <span class="heading-one-subtitle">Contact Us</span>
                <h2 class="heading-one-title">Stay Connected</h2>
            </div>
            <!-- Heading End -->
        </div>
        <div class="row mb-n30">
            <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <div class="contact-head">
                    <p class="text">Kimod tempoer incididunt onomes sundo ritoma amar korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor inci didunt o ritoma amar korem ipsum</p>
                </div>
                <!-- Contact Information Start -->
                <ul class="contact-info">
                    <li>
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Address</h3>
                            <span class="text">20, Mounten Street, UK</span>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Phone</h3>
                            <span class="text"><a href="tel:+123456789">+123 456 789</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Email</h3>
                            <span class="text"><a href="mailto:hello@avers.com">hello@avers.com</a></span>
                        </div>
                    </li>
                </ul>
                <!-- Contact Information End -->
            </div>

            <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <form id="contact-form" class="contact-form" action="https://ethemestudio.com/demo/avers/assets/php/contact.php">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input placeholder="Your name" name="name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="email" placeholder="Your email" name="email">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input placeholder="Your phone" name="phone">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input placeholder="Subject" name="subject">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea name="message" placeholder="Write your comment here"></textarea>
                        </div>
                        <div class="col-12 text-left">
                            <button class="btn btn-style-one" type="submit"> <span>Submit Now</span> </button>
                        </div>
                        <div class="col-12">
                            <!--== Message Notification ==-->
                            <div class="form-message mt-4"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section End -->


<?php include('includes/footer.php'); ?>