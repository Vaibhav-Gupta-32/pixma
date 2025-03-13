<?php
include('../config/dbconnection.php'); // Adjust path as needed
include('../config/session_check.php'); // Adjust path as needed

$tblname = "contact_info";
$tblkey = "id";
$pagename = "Contact Info Update";
$page_name = basename($_SERVER['PHP_SELF']);



// Update Contact Info
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['UpdateContactInfo'])) {
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $website_url =$_POST['website_url'];

    // Update query
    $update_query = "UPDATE $tblname SET 
        address = '$address', 
        mobile = '$mobile', 
        email = '$email',
        website_url= '$website_url'
        WHERE 1";

    if (mysqli_query($conn, $update_query)) {
        $msg = "<div class='msg-container'><b class='alert alert-success msg'>Contact Info Updated Successfully</b></div>";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: 'Contact Info Updated Successfully.',
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
    } else {
        // $msg = "<div class='msg-container'><b class='alert alert-danger msg'>Update Failed !..</b></div>";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Oops!',
                text: 'Contact Info Updated Unsuccessfully',
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
    }
}

// Fetch existing contact info
$address = getvalfield($conn, $tblname, "address", "1");
$mobile = getvalfield($conn, $tblname, "mobile", "1");
$email = getvalfield($conn, $tblname, "email", "1");
$website_url = getvalfield($conn, $tblname, "website_url", "1");
?>

<!-- Starting page -->
<?php include('../includes/header.php') ?>
<?php include('../includes/sidebar.php') ?>
<?php include('../includes/navbar.php') ?>


<form action="" method="POST" enctype="multipart/form-data">
    <div class="container-fluid px-4 pt-4">
        <h4 class="text-center fw-bolder text-primary mb-3">Update Contact Info For Contact Page</h4>
        <hr class="text-danger p-2 rounded">
        <div class="row">
            <!-- For ID -->
            <input type="hidden" name="id" id="id" value="<?= $id ?>">

            <!-- Address Field -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group shadow position-relative">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Address" name="address" id="address" value="<?= $address ?>">
                        <label for="address">Address<span class="text-danger">*</span></label>
                    </div>
                </div>
            </div>

            <!-- Mobile Field -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-group shadow position-relative">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Mobile Number" maxlength="10" name="mobile" id="mobile" value="<?= $mobile ?>" pattern="^[6789]\d{9}$" title="Please enter a valid 10-digit Indian phone number starting with 6, 7, 8, or 9"
                        oninput="validatePhoneNumber(this)" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                        <label for="mobile">Mobile Number<span class="text-danger">*</span></label>
                    </div>
                </div>
            </div>

            <!-- Email Field -->
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="form-group shadow position-relative">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" value="<?= $email ?>">
                        <label for="email">Email Address<span class="text-danger">*</span></label>
                    </div>
                </div>
            </div>

            <!-- Website URL Field -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group shadow position-relative">
                    <div class="form-floating mb-3">
                        <input type="url" class="form-control" placeholder="Website URL" name="website_url" id="website_url" value="<?= $website_url ?>" required>
                        <label for="website_url">Website URL<span class="text-danger">*</span></label>
                    </div>
                </div>
            </div>    

            <!-- Submit Button -->
            <div class="col-lg-12 text-center mb-3">
                <div class="form-group">
                    <button class="col-12 text-white btn text-center shadow" id="UpdateContactInfo" type="submit" style="background-color:#4ac387;" name="UpdateContactInfo"><b>Update Contact Info</b></button>
                </div>
            </div>
        </div>
    </div>
</form>







<?php include('../includes/footer.php'); ?>
