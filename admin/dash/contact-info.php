<?php
include('../config/dbconnection.php'); // Adjust path as needed
include('../config/session_check.php'); // Adjust path as needed

$tblname = "contact_us";
$tblkey = "id";
$pagename = "Contact Info";
$title = "Contact Info | Admin Panel";
$page_name = basename($_SERVER['PHP_SELF']);

?>

<!-- Starting page -->
<?php include('../includes/header.php') ?>
<?php include('../includes/sidebar.php') ?>
<?php include('../includes/navbar.php') ?>


<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <h6 class="mb-4 text-center mt-2 pt-3 "><?= $pagename; ?> Table</h6>
            <div class=" rounded" style="overflow-y: scroll;">

                <table class="table table-striped border shadow" id="example" class="display">
                    <thead class=" head">
                        <tr class="text-center text-nowrap">
                            <th class="text-center" width="5%" scope="col">S.NO</th>
                            <th class="text-center" width="15%" scope="col">Name</th>
                            <th class="text-center" width="20%" scope="col">Email</th>
                            <th class="text-center" width="15%" scope="col">Phone</th>
                            <th class="text-center" width="20%" scope="col">Enquiry</th>
                            <th class="text-center" width="20%" scope="col">Message</th>
                            <th class="text-center" width="5%" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $fetch = mysqli_query($conn, "SELECT * FROM $tblname ORDER BY $tblkey DESC");
                        while ($row = mysqli_fetch_array($fetch)) {
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?= $i++ ?></th>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= htmlspecialchars($row['email']) ?></td>
                                <td><?= htmlspecialchars($row['phone']) ?></td>
                                <td><?= htmlspecialchars($row['enquiry']) ?></td>
                                <td><?= htmlspecialchars($row['message']) ?></td>
                                <td class="action">
                                    <a class="text-danger" href="#"
                                        onclick="confirmDelete(<?= $row['id']; ?>, '<?= $tblname; ?>', '<?= $tblkey ?>')"><i
                                            class="fas fa-trash-alt me-2" title="Delete"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('../includes/footer.php'); ?>