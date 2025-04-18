<?php include('../config/dbconnection.php') ?>
<?php include('../config/session_check.php') ?>
<?php
$currentDate = date('Y-m-d');
$tblname = "gallery";
$tblkey = "id";
$pagename = "Gallery";
$title = "Gallery | Admin Panel";
$page_name = basename($_SERVER['PHP_SELF']);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // print_r($_POST);die;
    // Retrieve posted values
    $tittle = mysqli_real_escape_string($conn, $_POST['tittle']);
    $center = mysqli_real_escape_string($conn, $_POST['center']);
    // $location = mysqli_real_escape_string($conn, $_POST['location']);


    $uploadOk = "";
    $target_dir = "images/gallery/";
    $maxSize = 10000000; // 10 MB
    $allowedTypes = ["jpg", "png", "jpeg", "mp4"];
    $customFileName = $target_dir;
    // Initialize variables
    $file_upload = ['success' => false, 'filePath' => ''];

    // Call the function for each file upload if the file is set
    if (isset($_FILES['file_upload']) && !empty($_FILES['file_upload']['name']))
        $file_upload = handleFileUpload('file_upload', $target_dir, $maxSize, $allowedTypes);

    if (!empty($file_upload['success'])) {
        // echo "At least one file was uploaded successfully.";
        $uploadOk = 1;
        $file_path = $file_upload['filePath'];
    } else {
        // echo "File upload failed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 1) {
        $sql = "insert INTO $tblname (tittle,location,center) VALUES ('$tittle','$file_path','$center')";
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
                <!-- <div class="col-lg-6">
                    <div class="form-group shadow">
                        <div class="form-floating mb-3">
                            <select name="service" id="" class="form-select bg-white">
                                <option value="">------Select------</option>
                                <option value="Threading">Threading</option>
                                <option value="Facial">Facial</option>
                                <option value="Waxing">Waxing</option>
                                <option value="Face Bleach">Face Bleach</option>
                                <option value="Hair Highlights">Hair Highlights</option>
                                <option value="Body Bleach">Body Bleach</option>
                                <option value="Face D-Tan">Face D-Tan</option>
                                <option value="Body D-Tan">Body D-Tan</option>
                                <option value="Face Treatment">Face Treatment</option>
                                <option value="Skin Care Service">Skin Care Service</option>
                                <option value="Body Polishing & Spa">Body Polishing & Spa</option>
                                <option value="Hair Cuting">Hair Cuting</option>
                                <option value="Hand and Foot Care">Hand and Foot Care</option>
                                <option value="Hair Wash">Hair Wash</option>
                                <option value="Hair Spa">Hair Spa</option>
                                <option value="Blow Dry & Styleing">Blow Dry & Styleing</option>
                                <option value="Hair Color">Hair Color</option>
                                <option value="Treatment & Cemical Work">Treatment & Cemical Work</option>
                                <option value="Nail Arts">Nail Arts</option>
                                <option value="Special Service">Special Service</option>
                            </select>
                            <label for="">Service<span class="text-danger">*</span></label>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-6 col-md-12 col-sm-12 align-content-center">
                    <div class="form-group shadow">
                        <div class="form-floating mb-3">
                            <!-- <input type="text" class="form-control" name="center" id="center" placeholder=" " required> -->
                            <select class="form-select" name="center" id="center" placeholder=" ">
                                <option value="">Select</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Raipur">Raipur</option>
                                <option value="Kolkata">Kolkata</option>
                            </select>
                            <label for="tittle">Center <span class="text-danger">*</span> </label>
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
                <div class="col-lg-12">
                    <div class="form-group shadow ">
                        <div class="form-floating mb-3 ">
                            <input type="file" class="form-control bg-white" id="file_upload" name="file_upload"
                                placeholder=" " required>
                            <label for="">Picture<span class="text-danger">*</span></label>
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
                            <th scope="col">Center</th>
                            <!-- <th scope="col">Service</th> -->
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
                                    <?php
                                    $filePath = $row['location'];
                                    $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
                                    if (in_array(strtolower($fileExtension), ['mp4'])) {
                                        // Display video tag for video files
                                        echo '<video controls class="img-thumbnail" style="max-width: 100%; max-height: 100%;">
                                                <source src="' . htmlspecialchars($filePath) . '" type="video/mp4">
                                              </video>';
                                    } else {
                                        // Display image tag for image files
                                        echo '<a href="' . htmlspecialchars($filePath) . '" target="_blank">
                                                <img src="' . htmlspecialchars($filePath) . '" alt="' . htmlspecialchars($row['tittle']) . '" class="img-thumbnail">
                                              </a>';
                                    }
                                    ?>
                                </td>
                                <td><?= htmlspecialchars($row['tittle']) ?></td>
                                <td><?= htmlspecialchars($row['center']) ?></td>
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