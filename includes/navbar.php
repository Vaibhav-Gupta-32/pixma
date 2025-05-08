<?php
$logo1 = getvalfield($conn, "logo_icon", "header_location", "1");
$logo2 = getvalfield($conn, "logo_icon", "footer_location", "1");
?>
<style>
    .activee {
        color: #0d6efd !important;
    }
</style>
<header class="header-wrapper header-one sticky-header">
    <!-- <div class="custom-container"> -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="flex-center justify-content-between">
                    <!-- Header Logo Start -->
                    <div class="logo">
                        <div class="logo-div">
                            <a href="index.php">
                                <img class="logo-1" src="admin/dash/<?= $logo2 ?>" style="height:80px" alt="logoImage">
                                <img class="logo-2" src="admin/dash/<?= $logo1 ?>" style="height:80px" alt="logoImage">
                            </a>
                        </div>
                        <div class="logo-text">
                            <a href="index.php" style="color:#ecc9e8;">
                                <p style="color:#ecc9e8;" class="m-0 p-0 h3">PIXPLUS</p>
                                <small>Limitless Innorvations Over The Pixels</small>
                                <!-- <img class="logo-1" src="admin/dash/<?= $logo2 ?>" style="height:80px" alt="logoImage">
                                    <img class="logo-2" src="admin/dash/<?= $logo1 ?>" style="height:80px" alt="logoImage"> -->
                            </a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <div class="flex-center header-right">
                        <!-- Header Menu Start -->
                        <div class="d-none d-lg-flex header-right_menu">
                            <nav class="main-menu">
                                <ul style="margin: -26px;">
                                    <li class="has-children">
                                        <a class="<?= ($current_page == 'index.php') ? 'activee' : ''; ?>" href="index.php">Home</a>
                                    </li>

                                    <li>
                                        <a class="<?= ($current_page == 'about.php') ? 'activee' : ''; ?>" href="about.php">About</a>
                                    </li>
                                    <li>
                                        <a class="<?= ($current_page == 'products.php') ? 'activee' : ''; ?>" href="products.php">Product</a>
                                    </li>
                                    <li>
                                        <a class="<?= ($current_page == 'gallery.php') ? 'activee' : ''; ?>" href="gallery.php">Gallery</a>
                                    </li>
                                    <li>
                                        <a class="<?= ($current_page == 'service.php') ? 'activee' : ''; ?>" href="service.php">Services</a>
                                    </li>
                                    <!-- <li class="has-children">
                                        <a href="#">Center</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="raipurcenter.php">Raipur</a>
                                            </li>
                                            <li>
                                                <a href="kolkatacenter.php">Kolkata</a>
                                            </li>
                                            <li>
                                                <a href="newdelhicenter.php">New Delhi</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a class="<?= ($current_page == 'partner_registration.php') ? 'activee' : ''; ?>" href="partner_registration.php">Partners</a>
                                    </li>
                                    <li><a class="<?= ($current_page == 'contact_us.php') ? 'activee' : ''; ?>" href="contact_us.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Actions Start -->
                        <div class="header-right_actions flex-center">
                            <div class="header-right_button header-button">
                                <!-- <a href="contact.html" class="btn-style-one"><span>Get Started</span></a> -->
                            </div>

                            <div class="hamburger d-block d-lg-none">
                                <!-- // Mobile Menu Hambarger Action Button Start -->
                                <a class="header-action-btn header-action-btn-menu hamburger_button d-flex" href="#/" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-header">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                                <!-- // Mobile Menu Hambarger Action Button End -->
                            </div>

                        </div>
                        <!-- Header Social Actions End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
</header>

<div class="offcanvas offcanvas-end" id="offcanvas-header">

    <div class="offcanvas-header">
        <!-- Header Logo Start -->
        <div class="logo">
            <a href="index-2.html">
                <img src="assets/images/pixma-logo.png" style="height:80px" alt="">
            </a>
        </div>
        <!-- Header Logo End -->
        <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
    </div>
    <div class="offcanvas-body">
        <!-- mobile menu navigation start -->
        <nav>
            <ul class="mobile-menu">
                <li class="has-children">
                    <a class="<?= ($current_page == 'index.php') ? 'activee' : ''; ?>" href="index.php">Home</a>
                </li>

                <li>
                    <a class="<?= ($current_page == 'about.php') ? 'activee' : ''; ?>" href="about.php">About</a>
                </li>
                <li>
                    <a class="<?= ($current_page == 'products.php') ? 'activee' : ''; ?>" href="products.php">Product</a>
                </li>
                <li>
                    <a class="<?= ($current_page == 'gallery.php') ? 'activee' : ''; ?>" href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a class="<?= ($current_page == 'service.php') ? 'activee' : ''; ?>" href="service.php">Services</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Center</a>
                    <ul class="dropdown">
                        <li>
                            <a href="raipurcenter.php">Raipur</a>
                        </li>
                        <li>
                            <a href="kolkatacenter.php">Kolkata</a>
                        </li>
                        <li>
                            <a href="newdelhicenter.php">New Delhi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="<?= ($current_page == 'partner_registration.php') ? 'activee' : ''; ?>" href="partner_registration.php">Partners</a>
                </li>
                <li><a class="<?= ($current_page == 'contact_us.php') ? 'activee' : ''; ?>" href="contact_us.php">Contact</a></li>

            </ul>
        </nav>
        <!-- mobile menu navigation end -->
    </div>

</div>