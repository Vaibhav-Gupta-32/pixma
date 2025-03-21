<?php
$page_title = "PIXMAINNOVATIONS || ABOUT us";
$pagename = "Products Details";
$current_page = basename($_SERVER['PHP_SELF']);
$meta_description = "One of the best digital podium, flat interactive panel, standee sales and service centre in raipur at best price for all business types.";
$tblname = "product_details";
$tblkey = "id";
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
<?php
if (isset($_GET['p_id'])) {
    $id = base64_decode($_GET['p_id']);
    $sql = "SELECT * FROM $tblname left join product_master as pm on $tblname.$tblkey = pm.id WHERE product_id = $tblname.$tblkey";
    //  echo $sql; die;
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $product_name = $row['title'];
            $image1 = $row['image1'];
            $image2 = $row['image2'];
            $main_image = $row['location'];
            $description_array = preg_split('/\r\n|\r|\n/', $row['description']);
            // $product_description = $row['product_description'];
        }
    }
}
?>

<!-- Project Details images Start -->
<!-- <div class="project-details-images section-padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <img src="admin/dash/<?=$image1?>" alt="ProjectImage">
            </div>
            <div class="col-md-4 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".25s">
                <div class="group-image">
                    <img src="admin/dash/<?=$main_image?>" alt="ProjectImage">
                    <img src="admin/dash/<?=$image2?>" alt="ProjectImage">
                </div>
            </div>
        </div>
    </div> -->
<!-- </div> -->
<!-- Project Details images End -->

<!-- Project Details Content Start -->
<div class="project-details">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <h2 class="project-details-title"><?= $product_name; ?></h2>
                <?php  
                foreach ($description_array as $key => $value) {
                    echo "<p>".$value."</p>";
                }
                ?>
                <!-- <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor inci didunt ut labore et dolore magna aliqu magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
                <p>Minisi ut aliquip ex ea commodo conseq Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu</p>
                <p>olore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolo dque ipsa quae ab illo inventore olore magnam aliquam quaerat voluptatem.</p> -->
                <!-- <div class="project-details-social">
                    <span class="label">Share</span>
                    <ul class="social">
                        <li>
                            <a href="<?=$facebook;?>" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="<?=$twitter;?>" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?=$linkedIn;?>" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li>
                            <a href="<?=$instagram;?>" class="linkedin"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".1s">
                <!-- <div class="col-md-4 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".25s"> -->
                <div class="group-image">
                    <img src="admin/dash/<?=$image1;?>" class="mb-2" alt="ProjectImage">
                    <img src="admin/dash/<?=$image2;?>" class="mb-2" alt="ProjectImage">
                <!-- </div> -->
                </div>
            </div>
            <!-- <div class="col-lg-4 wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".2s">
                <ul class="project-details-sidebar">
                    <li>
                        <span class="title">Client Name</span>
                        <p>Hello Theme Club</p>
                    </li>
                    <li>
                        <span class="title">Duration</span>
                        <p>2 months</p>
                    </li>
                    <li>
                        <span class="title">Category</span>
                        <p>Web development</p>
                    </li>
                    <li>
                        <span class="title">Project Lead</span>
                        <p>Juwel Khan</p>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</div>
<!-- Project Details Content End -->

<?php include('includes/footer.php'); ?>