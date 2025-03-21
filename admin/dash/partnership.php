<?php
include('../config/dbconnection.php'); // Adjust path as needed
include('../config/session_check.php'); // Adjust path as needed

$tblname = 'partner_registration';
$tblkey = 'id';
$pagename = "Inbox Messages Page";
$username = $_SESSION['username'];
$page_name = basename($_SERVER['PHP_SELF']);
// Get images From db  Profile image 
// $profile_img = getvalfield($conn, $tblname, "profile_picture", "username='$username'");
$admin_name = getvalfield($conn, 'adminlogin', "admin_name", "username='$username'");



?>

<!-- Starting page -->
<?php include('../includes/header.php') ?>
<?php include('../includes/sidebar.php') ?>
<?php include('../includes/navbar.php') ?>

<div class="container-fluid px-4 pt-4">

    <!-- Table -->
    <hr class="text-primary p-2 rounded">
    <!-- Table Start -->

    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <h4 class="text-center fw-bolder text-primary mb-3">Partners Registration</h4>
            <div class="table-responsive rounded">
                <!-- Responsive wrapper -->
                <table class="table table-striped border shadow">
                    <thead class="head">
                        <tr class="text-center text-nowrap">
                            <th scope="col">S.NO</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Address</th>
                            <th scope="col">Company Phone</th>
                            <th scope="col">Company Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $fetch = mysqli_query($conn, "SELECT * FROM $tblname ORDER BY $tblkey DESC");
                        while ($row = mysqli_fetch_array($fetch)) {
                            $messageID = 'message' . $row['id']; // Create unique ID for each row
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= htmlspecialchars($row['company_name']) ?></td>
                                <td><?= htmlspecialchars($row['company_address']) ?></td>
                                <td><?= htmlspecialchars($row['company_phone']) ?></td>
                                <td><?= htmlspecialchars($row['company_email']) ?></td>
                                <td>
                                    <a class="rounded p-1 bg-white" title="View-Message" data-bs-toggle="collapse" data-bs-target="#<?= $messageID ?>" aria-expanded="false" aria-controls="<?= $messageID ?>">
                                        <i class="fa-solid fa-eye"></i>Details
                                        <i class="fa-solid fa-square-caret-down"></i>
                                    </a>
                                </td>
                                <td class="">
                                    <a class="text-danger" href="#" onclick="confirmDelete(<?= $row['id']; ?>, 'inbox', 'id')">
                                        <i class="fas fa-trash-alt me-2" title="Delete"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="collapse-row">
                                <td colspan="8" class="rounded alert-success m-0 p-0">
                                    <div class="collapse" id="<?= $messageID ?>">
                                        <div class="row">
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">Company Bill Address : </span> <?= nl2br(htmlspecialchars($row['company_bill_address'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">Type of Company : </span> <?= nl2br(htmlspecialchars($row['type_of_company'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">Pan No : </span> <?= nl2br(htmlspecialchars($row['pan_no'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">Gst No : </span> <?= nl2br(htmlspecialchars($row['gst_no'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">registration_file : </span> <?= nl2br(htmlspecialchars($row['registration_file'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">proprietor_name : </span> <?= nl2br(htmlspecialchars($row['proprietor_name'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">residential_address : </span> <?= nl2br(htmlspecialchars($row['residential_address'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">ownership_percentage : </span> <?= nl2br(htmlspecialchars($row['ownership_percentage'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">mobile_no : </span> <?= nl2br(htmlspecialchars($row['mobile_no'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">telephone : </span> <?= nl2br(htmlspecialchars($row['telephone'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">account_no : </span> <?= nl2br(htmlspecialchars($row['account_no'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">signatories_no : </span> <?= nl2br(htmlspecialchars($row['signatories_no'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">account_type : </span> <?= nl2br(htmlspecialchars($row['account_type'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">bank_limits : </span> <?= nl2br(htmlspecialchars($row['bank_limits'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">lc_limit : </span> <?= nl2br(htmlspecialchars($row['lc_limit'])) ?></p>
                                            </div>
                                            <div class="col-4 col-md-4 col-sm-6">
                                                <p class="text-start text-secondary"><span class="fw-bold">bankfile : </span> <?= nl2br(htmlspecialchars($row['bankfile'])) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <!-- Table End -->
</div>


<?php include('../includes/footer.php'); ?>