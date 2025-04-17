<?php
$page_title = "New Delhi Center | Pix Plus";
$pagename = "New Delhi Center";
$current_page = basename($_SERVER['PHP_SELF']);
$tblname = "gallery";
$tblkey = "id";
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>
<style>
    .img-container {
        width: 100%;
        height: 350px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .img-container img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
    }
</style>

<!-- About Section Start -->
<div class="section-padding about-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <!-- About Images Start -->
                <div class="about-two-images me-0">
                    <div class="about-two-images-one">
                            <img class="js-tilt" src="assets/images/about/delhi.jpg" alt="QualityImage">
                    </div>
                </div>
                <!-- About Images End -->
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                <!-- Heading Start -->
                <div class="heading-one">
                    <!-- <span class="heading-one-subtitle">Welcome to Pix Plus - New Delhi</span> -->
                    <h2 class="heading-one-title">Innovating New Delhi with Smart Technology</h2>

                    <div class="about-two-text">
                            <p>Delhi is a city of progress and innovation. Pix Plus brings smart interactive technology to schools, businesses, and events. We offer interactive flat panels, digital kiosks, and standees. Our products improve learning and presentations.</p>
                            <p>We ensure smooth installation and reliable support. With years of experience, we provide quality at the best prices. Schools and offices trust us for engaging, professional spaces. Our solutions make communication easy and effective.</p>
                            <p>We focus on customer satisfaction and long-term service. See how we are transforming Delhi with our technology. Check our photos to explore the change and innovation we bring!</p>
                    </div>
                </div>
                <!-- Heading End -->
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->


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
            $sql = "SELECT * FROM $tblname where center = 'New Delhi' ORDER BY $tblkey DESC";
            $fetch = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($fetch)) {
                $file_path = $row['location'];
                $file_extension = pathinfo($file_path, PATHINFO_EXTENSION);
            ?>
                <div class="col mb-30 grid-item design wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <!-- Single Project Start -->
                    <div class="single-project lightbox" style="z-index:0;">
                        <a class="thumbnail" href="project-details.html">
                            <div class="img-container">
                                <?php if (in_array($file_extension, ['mp4', 'webm', 'ogg'])) { ?>
                                    <video controls>
                                        <source src="admin/dash/<?= $file_path; ?>" type="video/<?= $file_extension; ?>">
                                        Your browser does not support the video tag.
                                    </video>
                                <?php } else { ?>
                                    <img src="admin/dash/<?= $file_path; ?>" alt="ProjectImage">
                                <?php } ?>
                            </div>
                        </a>
                        <div class="lightbox">
                            <a class="item" href="admin/dash/<?= $file_path; ?>"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <!-- Single Project End -->
                </div>
            <?php } ?>



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