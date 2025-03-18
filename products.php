<?php
$page_title = "PIXMAINNOVATIONS || PRODUCTS";
$pagename = "Products";
$current_page = basename($_SERVER['PHP_SELF']);
$tblname = "product_master";
$tblkey = "id";
$meta_description = "One of the best digital podium, flat interactive panel, standee sales and service centre in raipur at best price for all business types.";
?>
<?php include('includes/header.php'); ?>
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

<!-- Project Masonry Section Start -->
<div class="section-padding blog-grid">
    <div class="container">
        <!-- <div class="row">
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
            </div> -->


        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 grid parent-gallery">

                    <?php
                $query = mysqli_query($conn, "SELECT * FROM $tblname ORDER BY $tblkey");
                $i = 1;
                while ($row = mysqli_fetch_array($query)) {
                    // echo $row['subtitle'];
                ?>
            <div class="col-lg-3 mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                    <!-- admin/dash/<?php // $row['location'] ?> -->
                        <img src="admin/dash/<?= $row['location'];?>" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle"><?= ucfirst($row['subtitle']); ?></span>
                        <h3 class="title">
                            <a href="products-details.html"><?= ucfirst($row['title']); ?></a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="admin/dash/<?= $row['location'];?>"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>
            <?php $i++; } ?>

            <div class="col-lg-3 mb-30 grid-item development wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product//ops.jpg" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">OPS</span>
                        <h3 class="title">
                            <a href="products-details.html">OPS</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product//ops.jpg"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>

            <div class="col-lg-3 mb-30 grid-item news wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product/wallmount-1.jpg" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">Wall Mount Display Signag</span>
                        <h3 class="title">
                            <a href="products-details.html">Wall Mount Display Signag</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/wallmount-1.jpg"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>
            <div class="col-lg-3 mb-30 grid-item development wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product/ifp.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">IFP Stand</span>
                        <h3 class="title">
                            <a href="products-details.html">IFP Stand</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/ifp.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>
            <div class="col-lg-3 mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product/I-frame-standee.jpg" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">I Frame Standee</span>
                        <h3 class="title">
                            <a href="products-details.html">I Frame Standee</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/I-frame-standee.jpg"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>
            <div class="col-lg-3 mb-30 grid-item tutorials wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product/aframe.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">A Frame Standee</span>
                        <h3 class="title">
                            <a href="products-details.html">A Frame Standee</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/aframe.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>
            <div class="col-lg-3 mb-30 grid-item news wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product/digital.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">Digital Podium</span>
                        <h3 class="title">
                            <a href="products-details.html">Digital Podium</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/digital.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>
            <div class="col-lg-3 mb-30 grid-item resource wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                <!-- Single Project Start -->
                <div class="single-project">
                    <a class="thumbnail" href="products-details.html">
                        <img src="assets/images/product/digitalkiosk-2.png" alt="ProjectImage">
                    </a>
                    <div class="content">
                        <span class="subtitle">Digital Kiosk Machine</span>
                        <h3 class="title">
                            <a href="products-details.html">Digital Kiosk Machine</a>
                        </h3>
                    </div>
                    <div class="lightbox">
                        <a class="item" href="assets/images/product/digitalkiosk-2.png"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <!-- Single Project End -->
            </div>

        </div>
        <!-- <div class="row">
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
            </div> -->
    </div>
</div>
<!-- Project Masonry Section End -->

<?php include('includes/footer.php'); ?>