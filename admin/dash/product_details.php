<?php include('../config/dbconnection.php') ?>
<?php include('../config/session_check.php') ?>
<?php
$currentDate = date('Y-m-d');
$tblname = "product_details";
$tblkey = "id";
$pagename = "Product Details";
$page_name = basename($_SERVER['PHP_SELF']);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // print_r($_FILES);die;
    // Retrieve posted values
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $product_id = mysqli_real_escape_string($conn, $_POST['product_id']);


    $uploadOk = "";
    $target_dir = "images/product-details/";
    $maxSize = 5000000; // 5 MB
    $allowedTypes = ["jpg", "png", "jpeg"];
    $customFileName = $target_dir;
    // Initialize variables
    $file_upload1 = ['success' => false, 'filePath' => ''];
    $file_upload2 = ['success' => false, 'filePath' => ''];

    // Call the function for each file upload if the file is set
    if (isset($_FILES['file_upload1']) && !empty($_FILES['file_upload1']['name']))
        $file_upload1 = handleFileUpload('file_upload1', $target_dir, $maxSize, $allowedTypes);

    if (isset($_FILES['file_upload2']) && !empty($_FILES['file_upload2']['name']))
        $file_upload2 = handleFileUpload('file_upload2', $target_dir, $maxSize, $allowedTypes);

    if (!empty($file_upload1['success']) && !empty($file_upload2['success'])) {
        // echo "At least one file was uploaded successfully.";
        $uploadOk = 1;
        $file_path1 = $file_upload1['filePath'];
        $file_path2 = $file_upload2['filePath'];
    } else {
        // echo "File upload failed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        $sql = "insert INTO $tblname (image1, image2, description, product_id) VALUES ('$file_path1','$file_path2','$description','$product_id')";
        // echo $sql;die;
        if (mysqli_query($conn, $sql)) {
            echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: 'Gallery Added Successfully.',
                    icon: 'success',
                    confirmButtonText: 'Done',
                    timer: 3000, // 3000 milliseconds = 3 seconds
                    timerProgressBar: true,
                    allowOutsideClick: false, 
                    customClass: { confirmButton: 'custom-confirm-button' },
                    willClose: () => {
                        // Redirect to a specific URL after the alert is closed
                        window.location.href = '{$page_name}';
                    }
                });
            });
                    </script>";

            // $msg = "<div class='msg-container'><b class='alert alert-success msg'>Gallery Added Successfully.</b></div>";
        } else {
            echo "<script>
                        document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: 'Oops!',
                        text: 'Gallery Added Unsuccessfully.',
                        icon: 'error',
                        confirmButtonText: 'Okay',
                        timer: 3000, // 3000 milliseconds = 3 seconds
                        timerProgressBar: true,
                        backdrop: true,
                        allowOutsideClick: false,
                        customClass: { confirmButton: 'custom-confirm-button' },
                        willClose: () => {
                            // Redirect to a specific URL after the alert is closed
                            window.location.href = '{$page_name}';
                        }
                    });
                });
                    </script>";
            // $msg = "<div class='msg-container'><b class='alert alert-danger msg'>Error: " . $sql . "<br>" . mysqli_error($conn) . "</b></div>";
        }
        // Redirect to the same page or another page
        // header("Location: " . $_SERVER['PHP_SELF']);
        // exit();

    } else {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Oops!',
                text: 'Sorry, your file was not uploaded.',
                icon: 'error',
                confirmButtonText: 'Okay',
                timer: 3000, // 3000 milliseconds = 3 seconds
                timerProgressBar: true,
                backdrop: true,
                allowOutsideClick: false,
                customClass: { confirmButton: 'custom-confirm-button' },
                willClose: () => {
                    // Redirect to a specific URL after the alert is closed
                    window.location.href = '{$page_name}';
                }
            });
        });
            </script>";
        // $msg = "<div class='msg-container'><b class='alert alert-danger msg'>Sorry, your file was not uploaded.</b></div>";
    }
    // Display the message if it exists
    // if (isset($_SESSION['msg'])) {
    //     echo $_SESSION['msg'];
    //     unset($_SESSION['msg']);
    // }

}
?>

<?php include('../includes/header.php') ?>
<?php include('../includes/sidebar.php') ?>
<?php include('../includes/navbar.php') ?>


<style>
    input[type="file"]::file-selector-button {
        color: #00698f;
        /* change the text color to blue */
        background-color: white;
        /* change the background color to light gray */
        border: none;
    }

    .action {
        width: auto;
        /* Adjust width as needed */
        height: 100px;
    }

    .image-cell {
        width: 150px;
        /* Adjust width as needed */
        height: 100px;
        /* Adjust height as needed */
        overflow: hidden;
        /* Hide overflow if the image is larger */
        text-align: center;
        /* Center the image horizontally */
        vertical-align: middle;
        /* Center the image vertically */
    }

    .image-cell img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        /* This will crop the image if it exceeds the size of the td */
    }
</style>

<div class="container-fluid pt-4 px-4 ">
    <!-- Start New aavedan Form -->
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container-fluid pt-4 px-4 ">
            <h4 class="text-center fw-bolder text-primary mb-3">Add <?= $pagename; ?></h4>
            <hr class="text-danger p-2 rounded">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="form-group shadow ">
                        <div class="form-floating mb-3 ">
                            <select name="product_id" id="product_id" class="form-control bg-white" required>
                                <option value="">Select Product</option>
                                <?php
                                $fetch = mysqli_query($conn, "SELECT * FROM product_master ORDER BY id DESC");
                                while ($row = mysqli_fetch_array($fetch)) {
                                ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['title'] ?></option>
                                <?php } ?>
                            </select>
                            <label for="aavak_no">Product<span class="text-danger">*</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-content-center">
                    <div class="form-group shadow">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="tittle" id="tittle" placeholder=" " required>
                            <label for="tittle">Title <span class="text-danger">*</span> </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group shadow ">
                        <div class="form-floating mb-3 ">
                            <input type="file" class="form-control bg-white" id="file_upload1" name="file_upload1"
                                placeholder=" " required>
                            <label for="aavak_no">Picture 1<span class="text-danger">*</span></label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group shadow ">
                        <div class="form-floating mb-3 ">
                            <input type="file" class="form-control bg-white" id="file_upload2" name="file_upload2"
                                placeholder=" " required>
                            <label for="aavak_no">Picture 2<span class="text-danger">*</span></label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-group shadow">
                        <div class="form-floating mb-3">
                            <!-- <input type="text" class="form-control"  name="date" id="date" placeholder="आवेदन दिनांक" required> -->
                            <textarea name="description" class="form-control" id="description" placeholder=" " required></textarea>
                            <label for="description"> Description<span class="text-danger">*</span></label>
                            <!-- <div class="aa text-danger"><small>Max-Length is 300 letters..</small></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="form-group">
                        <button class="col-12 text-white btn  text-center shadow" type="submit" style="background-color:#4ac387;" name="submit"><b>Submit</b></button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <!-- New aavedan close -->
</div>

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <h6 class="mb-4 text-center mt-2 pt-3 "><?= $pagename; ?> Table</h6>
            <div class=" rounded" style="overflow-y: scroll;">

                <table class="table table-striped border shadow" id="example" class="display">
                    <thead class=" head">
                        <tr class="text-center text-nowrap">
                            <th scope="col">S.NO</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

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
                                <td class="image-cell">
                                    <a href="<?= $row['location']; ?>" target="_blank"><img src="<?= $row['location']; ?>" alt="<?= htmlspecialchars($row['tittle']); ?>"
                                            class="img-thumbnail"></a>
                                </td>
                                <td><?= htmlspecialchars($row['tittle']) ?></td>
                                <td><?= htmlspecialchars($row['description']) ?></td>
                                <td class="action">
                                    <!-- <a href="#" onclick="view(<?= $row['id'] ?>)"><i class="fas fa-eye me-2"
                                            title="View"></i></a>
                                    <a href="#" onclick="edit(<?= $row['id'] ?>)"><i class="fas fa-pen me-2"
                                            title="Edit"></i></a> -->
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
<!-- Table End -->

<?php include('../includes/footer.php'); ?>