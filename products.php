<?php
$page_title = "Digital Podium & Standee in Raipur | Delhi | Kolkata - Pix Plus";
$pagename = "Pix Plus Products";
$current_page = basename($_SERVER['PHP_SELF']);
$tblname = "product_master";
$tblkey = "id";
$meta_description = "One of the best and affordable Interactive Flat Panel sales and service centre in raipur at best price for all business types.";
?>
<?php include('includes/header.php'); ?>
<!-- AOS Animate On Scroll -->

<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>

<!-- <div class="container">
    <div class="row m-3 p-2">
        <div class="col-md-12 text-center">
            <h1>Welcome to Pix Plus Products</h1>
        </div>  
        <div class="col-md-12 text-justify">
            <p>At Pix Plus, we aim to change how people interact with technology. Our vision is to create spaces that inspire creativity, collaboration, and growth. We want technology to elevate how we learn, work, and connect.</p>
        </div>
        <div class="col-md-12 mt-2 " style="text-align: justify;">
            <p>Pix Plus offers solutions that enhance learning, communication, and collaboration. Our products, like Interactive Flat Panels and Digital Podiums, are simple and perform well. They transform classrooms, businesses, and events into engaging spaces. Whether it’s interactive lessons or impactful presentations, Pix Plus helps create inspiring environments with advanced technology and sleek designs. Let’s explore our range of products.</p>
        </div>
    </div>
</div> -->

<style>
    body {
        background-color: #f9f9f9;
        /* font-family: 'Segoe UI', sans-serif; */
    }

    .hero-section {
        text-align: center;
        padding: 60px 20px;
        /* background: linear-gradient(to right, #0066ff, #00ccff); */
        color: white;
    }

    .hero-section h1 {
        font-size: 3rem;
        font-weight: 700;
    }

    .content-text {
        font-size: 1.1rem;
        color: #555;
        line-height: 41px;
    }

    .product-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    }

    .product-img {
        height: 300px;
        object-fit: cover;
        border-bottom: 1px solid #eee;
    }

    .product-body h5 {
        font-weight: 600;
    }

    .btn-buy {
        background: linear-gradient(135deg, #DCC7E0, #B8A1BC, #B5A4B7);
        color: white;
    }

    .btn-buy:hover {
        background-color: #564559;
        color: #564559;
    }
    .fade-up {
    animation: fadeUp 0.6s ease-in-out;
    }
    .slow-fade
    {
    opacity: 0;
    animation: fadeIn 2s ease-in forwards;
    }
</style>

<!-- Hero Section -->
<section class="container mt-4 fade-up" style="text-align: justify;">
    <h2 class="mx-auto text-center display-4 fade-up">Pix Plus Products</h2>
    <p class="content-text mt-3 slow-fade">At Pix Plus, we aim to change how people interact with technology. Our vision is to create spaces that inspire creativity, collaboration, and growth. We want technology to elevate how we learn, work, and connect.</p>
    <p class="content-text mt-3 slow-fade">Pix Plus offers solutions that enhance learning, communication, and collaboration. Our products, like Interactive Flat Panels and Digital Podiums, are simple and perform well. They transform classrooms, businesses, and events into engaging spaces. Whether it’s interactive lessons or impactful presentations, Pix Plus helps create inspiring environments with advanced technology and sleek designs. Let’s explore our range of products.</p>
</section>

<!-- Product Grid -->
<div class="container py-5">
    <div class="row g-4">

        <!-- Product Card 1 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/p1.jpeg" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">Interactive Flat Panel</h5>
                    <p class="card-text">These advanced displays enhance learning, productivity, and engagement.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('Interactive Flat Panel'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/ifp.png" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">IFP Stand</h5>
                    <p class="card-text">The interactive flat panel display stand is built for durability, ease of use, and flexibility, ensuring seamless integration with interactive flat panels.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('IFP Stand'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

        <!-- Product Card 3 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/wallmount.jpg" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">Wall Mount Display Signage</h5>
                    <p class="card-text">This wall-mounted display case is perfect for showcasing digital content, presentations, and advertisements.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('Wall Mount Display Signage'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/p3.jpeg" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">I Frame Standee</h5>
                    <p class="card-text">This digital standee is ideal for dynamic standee displays, allowing you to showcase multimedia content, advertisements, or promotions with ease.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('I Frame Standee'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

        <!-- Product Card 5 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/p2.jpeg" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">A Frame Standee</h5>
                    <p class="card-text">This portable standee is perfect for both indoor and outdoor environments and provides easy setup and transport.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('A Frame Standee'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

        <!-- Product Card 6 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/digital.png" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">Digital Podium</h5>
                    <p class="card-text">Our interactive digital podium combines cutting-edge technology with sleek design, providing a seamless experience for speakers and presenters.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('Digital Podium'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

        <!-- Product Card 7 -->
        <div class="col-md-4" data-aos="fade-up">
            <div class="card product-card h-100">
                <img src="assets/images/product/digitalkiosk-2.png" class="card-img-top product-img" alt="Product 1">
                <div class="card-body product-body">
                    <h5 class="card-title">Digital Kiosk Machine</h5>
                    <p class="card-text">Our kiosks feature a digital kiosk display and provide a seamless user experience.</p>
                    <a href="products_details.php?p_n=<?= base64_encode('Digital Kiosk Machine'); ?>"><button class="btn btn-buy mt-2">Learn More..</button></a>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Project Masonry Section Start -->
<!-- <div class="section-padding blog-grid">
    <div class="container">
        <div class="row">
                <div class="col-12">
                    <div class="blog-menu-style blog-menu-active isotope-btn-add-active mt-0 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <button class="active btn-blog" data-filter="*">All</button>
                        <button class="btn-blog" data-filter=".design">Design</button>
                        <button class="btn-blog" data-filter=".development">Development</button>
                        <button class="btn-blog" data-filter=".news">News</button>
                        <button class="btn-blog" data-filter=".tutorials">Tutorials</button>
                        <button class="btn-blog" data-filter=".resource">Resource</button>
                    </div>
                </div>
            </div>


        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 grid parent-gallery">

            <?php
            $query = mysqli_query($conn, "SELECT * FROM $tblname ORDER BY $tblkey");
            $i = 1;
            while ($row = mysqli_fetch_array($query)) {
                echo $row['subtitle'];
            ?>
                <div class="col-lg-3 mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                    
                    <div class="single-project">
                        <a class="thumbnail" href="products_details.php">
                            
                            <img src="admin/dash/<?= $row['location']; ?>" alt="ProjectImage">
                        </a>
                        <div class="content">
                            <span class="subtitle"><?= ucfirst($row['subtitle']); ?></span>
                            <h3 class="title">
                                <a href="products_details.php?p_id=<?= base64_encode($row['id']); ?>"><?= ucfirst($row['title']); ?></a>
                            </h3>
                        </div>
                        <div class="lightbox">
                            <a class="item" href="admin/dash/<?= $row['location']; ?>"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    
                </div>
            <?php $i++;
            } ?>

            <div class="col-lg-3 mb-30 grid-item development wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product//ops.jpg" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">OPS</span>
                        <h3 class="title">
                            <a href="products_details.php">OPS</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product//ops.jpg"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 mb-30 grid-item news wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product/wallmount-1.jpg" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">Wall Mount Display Signag</span>
                        <h3 class="title">
                            <a href="products_details.php">Wall Mount Display Signag</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/wallmount-1.jpg"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 mb-30 grid-item development wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
               
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product/ifp.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">IFP Stand</span>
                        <h3 class="title">
                            <a href="products_details.php">IFP Stand</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/ifp.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
               
            </div>
            <div class="col-lg-3 mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product/I-frame-standee.jpg" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">I Frame Standee</span>
                        <h3 class="title">
                            <a href="products_details.php">I Frame Standee</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/I-frame-standee.jpg"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 mb-30 grid-item tutorials wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product/aframe.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">A Frame Standee</span>
                        <h3 class="title">
                            <a href="products_details.php">A Frame Standee</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/aframe.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
        
            </div>
            <div class="col-lg-3 mb-30 grid-item news wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product/digital.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">Digital Podium</span>
                        <h3 class="title">
                            <a href="products_details.php">Digital Podium</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/digital.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 mb-30 grid-item resource wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                
                <div class="single-project">
                    <a class="thumbnail" href="products_details.php">
                        <img src="assets/images/product/digitalkiosk-2.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">Digital Kiosk Machine</span>
                        <h3 class="title">
                            <a href="products_details.php">Digital Kiosk Machine</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/digitalkiosk-2.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                
            </div>

        </div>
        <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pt-lg-2">
                        <nav class="pagination-wrapper">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link active" href="#/">1</a></li>
                                <li class="page-item"><a class="page-link" href="#/">2</a></li>
                                <li class="page-item"><a class="page-link" href="#/">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#/" aria-label="Next">
                                        <span aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </div>
</div> -->
<!-- Project Masonry Section End -->

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
<!-- AOS Script End -->
<?php include('includes/footer.php'); ?>