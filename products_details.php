<?php
$page_title = "PIX PLUS || ABOUT us";
$pagename = "Products Details";
$current_page = basename($_SERVER['PHP_SELF']);
$meta_description = "One of the best digital podium, flat interactive panel, standee sales and service centre in raipur at best price for all business types.";
$tblname = "product_details";
$tblkey = "id";
$product_name = base64_decode($_REQUEST['p_n']);
?>

<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>
<?php
$facebook = getvalfield($conn, "social_links", "facebook", "1");
$twitter = getvalfield($conn, "social_links", "twitter", "1");
$instagram = getvalfield($conn, "social_links", "instagram", "1");
$linkedIn = getvalfield($conn, "social_links", "linkedIn", "1");
?>

<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', sans-serif;
    }

    .product-detail-container {
        padding: 60px 0;
    }

    .product-image {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
    }

    .product-image img {
        width: 100%;
        height: auto;
        border-radius: 15px;
    }

    .product-info h2 {
        font-size: 2rem;
        font-weight: 700;
    }

    .product-info p {
        color: #555;
    }

    .price {
        font-size: 1.5rem;
        color: #0066ff;
        font-weight: 600;
    }

    .btn-buy {
        background-color: #0066ff;
        color: white;
        font-weight: 500;
    }

    .btn-buy:hover {
        background-color: #004ec2;
    }

    @media (max-width: 767.98px) {
        .product-detail-container {
            padding: 30px 15px;
        }
    }
</style>

<div class="container product-detail-container">
    <div class="row g-4 align-items-center">

        <?php if ($product_name == "Interactive Flat Panel") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/p1.jpeg" class="js-tilt" alt="Product Image">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>Interactive Flat Panel</h2>
                    <p class="mt-3" style="text-align: justify;">
                        Pix Plus offers interactive flat panels that revolutionize classrooms, businesses, and collaborative spaces. These advanced displays enhance learning, productivity, and engagement. In education, our panels create immersive experiences, allowing teachers to present lessons with multimedia, annotate in real-time, and encourage active participation, improving student outcomes.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                        For businesses, Pix Plus panels support video conferencing, brainstorming sessions, and dynamic presentations. With touch-enabled technology, crystal-clear visuals, and smart connectivity like Wi-Fi and Bluetooth, they elevate professional settings. Pix Plus offers the best interactive flat panel prices in India, ensuring high-quality solutions at affordable rates. Choose Pix Plus to innovate and elevate your classroom or workplace.
                    </p>
                    <ul class="mt-3">
                        <li>✔ Available in 65", 75", 86" sizes</li>
                        <li>✔ 4K UHD Display</li>
                        <li>✔ Multi-touch Support</li>
                        <li>✔ OPS Slot Compatible</li>
                    </ul>
                </div>
            </div>
        <?php } else if ($product_name == "IFP Stand") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/ifp.png" alt="Product Image" class="js-tilt">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>IFP Stan</h2>
                    <p class="mt-3" style="text-align: justify;">
                        Pix Plus offers the perfect solution with our IFP Stand, designed to enhance your classroom, business, or event setup. The interactive flat panel display stand is built for durability, ease of use, and flexibility, ensuring seamless integration with interactive flat panels for presentations, collaboration, or teaching.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                        With adjustable height and smooth mobility, the interactive flat panel stand provides optimal viewing for any professional or educational setting. Pix Plus, a leading supplier across India, ensures high-quality products at competitive prices. Our IFP Stands come with easy installation and reliable after-sales support, making them the ideal choice for interactive environments.
                    </p>
                    <ul class="mt-3">
                        <li>✔ Supports panels from 55" to 98"</li>
                        <li>✔ Accessories Camera tray, Wall mount, 4 Wheels</li>
                        <li>✔ Material Cold rolled steel</li>
                        <li>✔ Lifting Range 1200-1600mm</li>
                    </ul>
                </div>
            </div>
        <?php } else if ($product_name == "Wall Mount Display Signage") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/wallmount-1.jpg" alt="Product Image" class="js-tilt">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>Wall Mount Display Signage</h2>
                    <p class="mt-3" style="text-align: justify;">
                        Pix Plus offers a versatile Wall Mount Display Signage designed to enhance your business, classroom, or event space. This wall-mounted display case is perfect for showcasing digital content, presentations, and advertisements. Whether you need a digital wall screen, flat screen wall mount, or an interactive video wall, our solutions provide seamless integration with your existing setups.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                        Our monitor wall mount options support a variety of devices, including dual monitor wall mount configurations, and wall mount touch screens for interactive experiences. The sign holders for walls are ideal for brochures or informational displays. With Pix Plus, you get a sleek, professional look combined with cutting-edge functionality for any environment. Choose our wall-mounted digital display screens to create an engaging and modern atmosphere.
                    </p>
                    <ul class="mt-3">
                        <li>✔ LCD Size 32"</li>
                        <li>✔ Type of Panel IPS</li>
                        <li>✔ Frequency 60 Hz</li>
                        <li>✔ System Version Android-10</li>
                        <li>✔ RAM 2GB</li>
                        <li>✔ ROM 16 GB</li>
                        <li>✔ Voltage 100-240V 50/60Hz</li>
                    </ul>
                </div>
            </div>
        <?php } else if ($product_name == "I Frame Standee") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/p3.jpeg" alt="Product Image" class="js-tilt">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>I Frame Standee</h2>
                    <p class="mt-3" style="text-align: justify;">
                    Pix Plus offers the innovative I Frame Standee, a perfect solution for promoting your brand or event. This digital standee is ideal for dynamic standee displays, allowing you to showcase multimedia content, advertisements, or promotions with ease. Whether you need a photo standee, LED standee, or personalized standee, our products cater to various marketing needs.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                    Our table standee and tabletop standee options are compact yet effective, perfect for smaller spaces. With its sleek design and high-quality materials, the I Frame Standee offers versatility for any promotional activity. It’s an excellent choice for businesses looking to create impactful marketing displays. Pix Plus provides affordable standee prices while maintaining premium quality. Choose Pix Plus for your next standee display solution!
                    </p>
                    <ul class="mt-3">
                        <li>✔ LCD Size 43"</li>
                        <li>✔ Type of Panel IPS</li>
                        <li>✔ Frequency 60 Hz</li>
                        <li>✔ System Version Android-10</li>
                        <li>✔ RAM 2GB</li>
                        <li>✔ ROM 16 GB</li>
                        <li>✔ Voltage 100-240V 50/60Hz</li>
                    </ul>
                </div>
            </div>
        <?php } else if ($product_name == "A Frame Standee") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/p2.jpeg" alt="Product Image" class="js-tilt">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>A Frame Standee</h2>
                    <p class="mt-3" style="text-align: justify;">
                    Pix Plus offers the highly versatile A Frame Standee, ideal for impactful promotions and business displays. This portable standee is perfect for both indoor and outdoor environments and provides easy setup and transport. Choose from our range, including A4, A3, and flex standees, to match your marketing needs.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                    The A4 standee display is compact and suitable for small spaces, while the A3 standee offers greater visibility for larger messages. Whether you’re looking for a promotional standee or a business standee, our A-Frame Standee ensures maximum visibility. It’s durable, lightweight, and easy to assemble, making it a cost-effective solution for showcasing your brand. Pix Plus offers quality and affordability in every A Frame Standee, making it the perfect choice for your promotional needs.
                    </p>
                    <ul class="mt-3">
                        <li>✔ LCD Size 32"</li>
                        <li>✔ Type of Panel IPS</li>
                        <li>✔ Frequency 60 Hz</li>
                        <li>✔ System Version Android-10</li>
                        <li>✔ RAM 2GB</li>
                        <li>✔ ROM 16 GB</li>
                        <li>✔ Voltage 100-240V 50/60Hz</li>
                    </ul>
                </div>
            </div>
        <?php } else if ($product_name == "Digital Podium") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/digital.png" alt="Product Image" class="js-tilt">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>Digital Podium</h2>
                    <p class="mt-3" style="text-align: justify;">
                    Pix Plus offers the advanced Digital Podium, designed to elevate presentations in classrooms, businesses, and events. Our interactive digital podium combines cutting-edge technology with sleek design, providing a seamless experience for speakers and presenters.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                    The integrated digital podium allows for easy management of multimedia content, including videos, presentations, and documents, all from a single interface. Perfect for modern classrooms and professional settings, this smart digital podium enhances audience engagement with interactive features.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                    With competitive digital podium cost and digital podium price, Pix Plus ensures high-quality solutions at affordable rates. Upgrade your presentations with our state-of-the-art digital podium, offering an all-in-one platform to enhance your speaker's experience and audience interaction.
                    </p>
                    <ul class="mt-3">
                        <li>✔ Display Size 21.5 Inches Motorized</li>
                        <li>✔ Display Type Touch LED</li>
                        <li>✔ PA System MIC-Gooseneck, Wireless Handheld, Collar MIC</li>
                        <li>✔ System Details CPU: i3, i5, i7 or better</li>
                        <li>✔ RAM 4 GB/8 GB</li>
                        <li>✔ Storage 500GB/1TB</li>
                        <li>✔ Operating System Windows 10/11</li>
                    </ul>
                </div>
            </div>
        <?php } else if ($product_name == "Digital Kiosk Machine") { ?>
            <!-- Product Image -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="product-image">
                    <img src="assets/images/product/digitalkiosk-2.png" alt="Product Image" class="js-tilt">
                </div>
            </div>
            <!-- Product Details -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="product-info">
                    <h2>Digital Kiosk Machine</h2>
                    <p class="mt-3" style="text-align: justify;">
                    Pix Plus offers an advanced Digital Kiosk Machine designed to enhance customer interaction in businesses, events, and public spaces. Our kiosks feature a digital kiosk display and provide a seamless user experience. The digital receptionist kiosk streamlines check-ins, while the touchscreen kiosk offers intuitive navigation.
                    </p>
                    <p class="mt-3" style="text-align: justify;">
                    Our floor-standing touchscreen kiosk and digital information kiosk are ideal for various settings. Pix Plus also provides digital kiosk software for smooth operation, and the touchscreen monitor kiosk ensures clear visuals and responsive interaction. As trusted digital kiosk manufacturers, we deliver customizable solutions to your needs. With competitive digital kiosk display prices, Pix Plus is your partner for high-quality digital advertising kiosks.
                    </p>
                    <ul class="mt-3">
                        <li>✔ Display Available 22, 32, 43, 55 (inch)</li>
                        <li>✔ PC Size Customized as per requirement</li>
                        <li>✔ Operating System Windows/Android</li>
                        <li>✔ Others, MS Finish Powder Coated Sleek Elegant body quick Interface of display with touch facilityElegant sleek finish</li>
                        <li>✔ RAM 4 GB/8 GB</li>
                        <li>✔ Warranty 01 Year</li>
                        </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</div>




<!-- Project Details Content Start -->
<div class="project-details">
    <div class="container">
        <?php if ($product_name == "Interactive Flat Panel") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/interactive.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/p1.jpeg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/p1.jpeg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } else if ($product_name == "IFP Stand") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/ifp.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/ifp.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/ifp.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } else if ($product_name == "Wall Mount Display Signage") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/wallmount-1.jpg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/wallmount-1.jpg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/wallmount-1.jpg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } else if ($product_name == "I Frame Standee") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/I-frame-standee.jpg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/p3.jpeg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/p3.jpeg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } else if ($product_name == "A Frame Standee") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/aframe.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/p2.jpeg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/p2.jpeg" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } else if ($product_name == "Digital Podium") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/digital.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/digital.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/digital.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } else if ($product_name == "Digital Kiosk Machine") { ?>
            <div class="row">
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/digitalkiosk-2.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/digitalkiosk-2.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
                <div class="col-lg-4 wow fadeIn product-image" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/images/product/digitalkiosk-2.png" class="mb-2 js-tilt" alt="ProjectImage">
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Project Details Content End -->



<!-- Project Details images Start -->
<!-- <div class="project-details-images section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <img src="admin/dash/<?= $image1 ?>" alt="ProjectImage">
            </div>
            <div class="col-md-4 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".25s">
                <div class="group-image">
                    <img src="admin/dash/<?= $main_image ?>" alt="ProjectImage">
                    <img src="admin/dash/<?= $image2 ?>" alt="ProjectImage">
                </div>
            </div>
        </div>
    </div> -->
<!-- </div> -->
<!-- Project Details images End -->


<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
<?php include('includes/footer.php'); ?>