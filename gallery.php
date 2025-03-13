<?php 
$page_title = "PIXMAINNOVATIONS || GALERY";
$pagename = "Gallery";
$current_page = basename($_SERVER['PHP_SELF']);
$tblname = "gallery";
$tblkey = "id";
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>


    <!-- Project Masonry Section Start -->
    <div class="section-padding blog-grid">
        <div class="container">
            <div class="row">
                <!-- <div class="col-12">
                    <div class="blog-menu-style blog-menu-active isotope-btn-add-active mt-0 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <button class="active btn-blog" data-filter="*">All</button>
                        <button class="btn-blog" data-filter=".design">Design</button>
                        <button class="btn-blog" data-filter=".development">Development</button>
                        <button class="btn-blog" data-filter=".news">News</button>
                        <button class="btn-blog" data-filter=".tutorials">Tutorials</button>
                        <button class="btn-blog" data-filter=".resource">Resource</button>
                    </div>
                </div> -->
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 grid parent-gallery">

            <?php
        $sql = "SELECT * FROM $tblname ORDER BY $tblkey";
        $fetch = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($fetch)){
        ?>
                <div class="col mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <!-- Single Project Start -->
                    <div class="single-project lightbox">
                        <a class="thumbnail" href="project-details.html">
                            <img src="admin/dash/<?= $row['location'];?>" alt="ProjectImage">
                        </a>
                        <!-- <div class="content">
                            <span class="subtitle">First Image</span>
                            <h3 class="title">
                                <a href="project-details.html">Write Something...</a>
                            </h3>
                        </div> -->
                        <div class="lightbox">
                            <a class="item" href="admin/dash/<?= $row['location'];?>"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>

                <?php } ?>

                <div class="col mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <!-- Single Project Start -->
                    <div class="single-project lightbox">
                        <a class="thumbnail" href="project-details.html">
                            <img src="assets/images/gallery/gallery-1.jpeg" alt="ProjectImage">
                        </a>
                        <!-- <div class="content">
                            <span class="subtitle">First Image</span>
                            <h3 class="title">
                                <a href="project-details.html">Write Something...</a>
                            </h3>
                        </div> -->
                        <div class="lightbox">
                            <a class="item" href="assets/images/gallery/gallery-1.jpeg"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>

                <div class="col mb-30 grid-item development wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                    <!-- Single Project Start -->
                    <div class="single-project">
                        <a class="thumbnail" href="project-details.html">
                            <img src="assets/images/gallery/gallery-2.jpeg" alt="ProjectImage">
                        </a>
                        <!-- <div class="content">
                            <span class="subtitle">Second Image.</span>
                            <h3 class="title">
                                <a href="project-details.html">Write Something...</a>
                            </h3>
                        </div> -->
                        <div class="lightbox">
                            <a class="item" href="assets/images/gallery/gallery-2.jpeg"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>
                <div class="col mb-30 grid-item news wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".3s">
                    <!-- Single Project Start -->
                    <div class="single-project">
                        <a class="thumbnail" href="project-details.html">
                            <img src="assets/images/gallery/gallery-3.jpeg" alt="ProjectImage">
                        </a>
                        <!-- <div class="content">
                            <span class="subtitle">Third Image.</span>
                            <h3 class="title">
                                <a href="project-details.html">Write Something...</a>
                            </h3>
                        </div> -->
                        <div class="lightbox">
                            <a class="item" href="assets/images/gallery/gallery-3.jpeg"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <!-- <div class="d-flex justify-content-center pt-lg-2">
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
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    <!-- Project Masonry Section End -->
     
    <?php include('includes/footer.php'); ?>