<?php
$page_title = "Contact Information of Our Sales & Service Centre - Pix Plus";
$pagename = "Contact us";
$current_page = basename($_SERVER['PHP_SELF']);
$meta_description = "Reach out to our sales and service centre based in Raipur, New Delhi and Kolkata";
$tblname = "contact_us";
$tblkey = "id";
?> 
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $enquiry = $_POST['enquiry'];
    $message = $_POST['message'];

    $sql = "INSERT INTO $tblname (name, email, phone, enquiry, message) VALUES ('$name', '$email', '$phone', '$enquiry', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Contact Form Submited Successfully',
                icon: 'success',
                draggable: true
            });
            });
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>


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
                <div class="contact-head" style="text-align: justify;">
                    <p class="text">We are committed to providing exceptional service and building long-term relationships. Contact us today and let Pix Plus help you transform your space with innovative interactive solutions!
                    </p>
                </div>
                <!-- Contact Information Start -->
                <ul class="contact-info">
                    <li>
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Address</h3>
                            <span class="text">A-140, A-1, Sector-7B, Kamal Vihar, <br> Raipur Chhattisgarh, 492004</span>


                        </div>
                    </li>
                    <li>
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Phone</h3>
                            <span class="text"><a href="tel:+916291509470">+91-6291509470</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Email</h3>
                            <span class="text"><a href="mailto:innovationswhitefeather@gmail.com">innovationswhitefeather@gmail.com</a>
                            </span>

                        </div>
                    </li>
                </ul>
                <!-- Contact Information End -->
            </div>

            <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <form id="contact-form" class="contact-form" method="POST">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="name">Your name<span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="email">Your email<span class="text-danger">*</span></label>
                            <input id="email" type="email" name="email" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="phone">Your phone<span class="text-danger">*</span></label>
                            <input id="phone" name="phone" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="enquiry">Enquiry<span class="text-danger">*</span></label>
                            <select id="enquiry" name="enquiry" class="form-control" required>
                                <option value="">Select</option>
                                <option value="sales">Sales Enquiry</option>
                                <option value="service">Service Enquiry</option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="message">Write your comment here</label>
                            <textarea id="message" name="message"></textarea>
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

<!-- Contact Map Section Start -->
<div class="section-margin-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-map-section wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Google Map Area Start -->
                    <div class="google-map-area w-100">
                        <div class="icon">
                            <img src="assets/images/contact/map-icon.png" alt="Map-Icon">
                        </div>
                        <div class="map-inner" style="width: 100%">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d929.9699037536175!2d81.66981526952836!3d21.19694074915106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd7ea5da4a6f%3A0x2831b3f8c24d1df2!2sWhite%20Feather%20Innovations%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1744093918174!5m2!1sen!2sin"></iframe>
                        </div>
                    </div>
                    <!-- Google Map Area Start -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Map Section End -->

<?php include('includes/footer.php'); ?>