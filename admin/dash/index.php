<?php include('../config/dbconnection.php') ?>
<?php include('../config/session_check.php') ?>
<?php
  $gallery_count = getvalfield($conn, 'gallery', "count(*)", "1");
  $slider_count = getvalfield($conn, 'slider', "count(*)", "1");
  $contact_count = getvalfield($conn, 'contact_us', "count(*)", "1");
  $sevice_count = getvalfield($conn, 'service', "count(*)", "1");
  $partners_count = getvalfield($conn, 'partner_registration', "count(*)", "1");
?>
<?php 
$pagename = "Dashboard";
$title = "Dashboard | Admin Panel";
$page_name = basename($_SERVER['PHP_SELF']); 
?>
<?php include('../includes/header.php') ?>
<?php include('../includes/sidebar.php') ?>
<?php include('../includes/navbar.php') ?>

<div class="container-fluid pt-4 px-4 ">
    <div class="row g-4">
        <h3 class="mb-0 text-center fw-bold text-primary">Details</h3>
        <hr class=" p-1 text-primary">
        <div class="col-sm-6 col-xl-4">
            <a href="gallery.php">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 border border-primary">
                    <i class="fas fa-image fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Gallery</p>
                        <h6 class="mb-0"><?= $gallery_count ?></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-4">
            <a href="service.php">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 border border-primary">
                    <i class="fas fa-tools fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Service</p>
                        <h6 class="mb-0"><?= $sevice_count ?></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-4">
            <a href="contact-info.php">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 border border-primary">
                    <i class="fas fa-address-card fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Contact</p>
                        <h6 class="mb-0"><?= $contact_count ?></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-4">
            <a href="partnership.php">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4 border border-primary">
                    <i class="fa-solid fa-envelope-open-text fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Partner Registration</p>
                        <h6 class="mb-0"><?= $partners_count ?></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>