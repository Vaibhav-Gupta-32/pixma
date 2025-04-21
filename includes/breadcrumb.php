    <!-- Breadcrumb Section Start -->
    <div class="section-padding breadcrumb" data-bg-image="assets/images/breadcrumb/breadcrumb-1.png">
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <?php if ($current_page == "products_details.php") { ?>
                            <h1 class="title"><?= $product_name; ?></h1>
                        <?php } else { ?>
                            <h1 class="title"><?= $pagename; ?></h1>
                        <?php } ?>
                        <!-- <ul class="breadcrumb-list">
                            <li><a href="index.php">Home</a></li>
                            <li><span><?= $pagename; ?></span></li>
                        </ul> -->
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->