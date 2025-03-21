<?php
$page_title = "PIXMAINNOVATIONS || PATNERS REGISTRATION";
$pagename = "Partner Registration";
$current_page = basename($_SERVER['PHP_SELF']);
$meta_description = "Visit our new partner registeration panel";
$tblname = "partner_registration";
$tblkey = "id";
?>
<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>
<?php include('includes/breadcrumb.php'); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $company_bill_address = $_POST['company_bill_address'];
    $company_phone = $_POST['company_phone'];
    $company_email = $_POST['company_email'];
    $type_of_company = $_POST['type_of_company'];
    $pan_no = $_POST['pan_no'];
    $gst_no = $_POST['gst_no'];
    $registration_file = $_FILES['registration_file']['name'];
    $proprietor_name = $_POST['proprietor_name'];
    $residential_address = $_POST['residential_address'];
    $ownership_percentage = $_POST['ownership_percentage'];
    $mobile_no = $_POST['mobile_no'];
    $telephone = $_POST['telephone'];
    $account_no = $_POST['account_no'];
    $signatories_no = $_POST['signatories_no'];
    $account_type = $_POST['account_type'];
    $bank_limits = $_POST['bank_limits'];
    $lc_limit = $_POST['lc_limit'];
    $bankfile = $_FILES['bankfile']['name'];

    // Move uploaded files to a designated directory
    move_uploaded_file($_FILES['registration_file']['tmp_name'], "admin/dash/uploads/registration_file/" . $registration_file);
    move_uploaded_file($_FILES['bankfile']['tmp_name'], "admin/dash/uploads/bank_file/" . $bankfile);

    // Insert data into the database
    $sql = "INSERT INTO $tblname (company_name, company_address, company_bill_address, company_phone, company_email, type_of_company, pan_no, gst_no, registration_file, proprietor_name, residential_address, ownership_percentage, mobile_no, telephone, account_no, signatories_no, account_type, bank_limits, lc_limit, bankfile) 
            VALUES ('$company_name', '$company_address', '$company_bill_address', '$company_phone', '$company_email', '$type_of_company', '$pan_no', '$gst_no', '$registration_file', '$proprietor_name', '$residential_address', '$ownership_percentage', '$mobile_no', '$telephone', '$account_no', '$signatories_no', '$account_type', '$bank_limits', '$lc_limit', '$bankfile')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Form Submited Successfully',
                icon: 'success',
                draggable: true
            });
            });
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!-- Contact Us Section Start -->
<div class="contact-us section-margin">
    <div class="container position-relative">
        <div class="row">
            <!-- Heading Start -->
            <div class="heading-one text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <span class="heading-one-subtitle">Partner Registration</span>
                <h2 class="heading-one-title">Join Hands with Pix Plus</h2>
            </div>
            <!-- Heading End -->
        </div>
        <div class="row mb-n30">

            <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <form id="contact-form" class="contact-form" method="POST" enctype="multipart/form-data">
                    <!-- Company Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Company Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="company_name" class="form-label">Company Name :<span class="text-danger">*</span></label>
                            <input type="text" id="company_name" name="company_name" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_address" class="form-label">Office Address :<span class="text-danger">*</span></label>
                            <input type="text" id="company_address" name="company_address" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_bill_address" class="form-label">Billing Address :<span class="text-danger">*</span></label>
                            <input type="text" id="company_bill_address" name="company_bill_address" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_phone" class="form-label">Phone / Fax No. :<span class="text-danger">*</span></label>
                            <input type="text" id="company_phone" name="company_phone" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_email" class="form-label">Your email :<span class="text-danger">*</span></label>
                            <input type="email" id="company_email" name="company_email" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="type_of_company" class="form-label">Type of Company :<span class="text-danger">*</span></label>
                            <select class="form-select" name="type_of_company" id="type_of_company" style="color: #808087;" required>
                                <option value="">Select</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Proprietary">Proprietary</option>
                                <option value="Pvt. Ltd.">Pvt. Ltd.</option>
                                <option value="Public Ltd.">Public Ltd.</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                    </div>

                    <!-- Tax Registration Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Tax Registration Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="pan_no" class="form-label">Pan No :<span class="text-danger">*</span></label>
                            <input type="text" id="pan_no" name="pan_no" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="gst_no" class="form-label">GST No :<span class="text-danger">*</span></label>
                            <input type="text" id="gst_no" name="gst_no" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="registration_file" class="form-label">Attach Appropriate File(s) :<span class="text-danger">*</span></label>
                            <input type="file" id="registration_file" name="registration_file" required>
                            <!-- <input type="file" id="registration_file" name="registration_file"> -->
                        </div>
                    </div>

                    <!-- Proprietor, Partners, and Directors Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Proprietor, Partners, and Directors Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="proprietor_name" class="form-label">Name :<span class="text-danger">*</span></label>
                            <input type="text" id="proprietor_name" name="proprietor_name" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="residential_address" class="form-label">Residential Address :<span class="text-danger">*</span></label>
                            <input type="text" id="residential_address" name="residential_address" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="ownership_percentage" class="form-label">% of Ownership in Business :<span class="text-danger">*</span></label>
                            <input type="text" id="ownership_percentage" name="ownership_percentage" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="mobile_no" class="form-label">Mobile No. :<span class="text-danger">*</span></label>
                            <input type="text" id="mobile_no" name="mobile_no" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="telephone" class="form-label">Telephone :<span class="text-danger">*</span></label>
                            <input type="text" id="telephone" name="telephone" required>
                        </div>
                    </div>

                    <!-- Bank Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Bank Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="account_no" class="form-label">Account No :<span class="text-danger">*</span></label>
                            <input type="text" id="account_no" name="account_no" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="signatories_no" class="form-label">No. Of Signatories :<span class="text-danger">*</span></label>
                            <input type="text" id="signatories_no" name="signatories_no" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="account_type" class="form-label">Account Type :<span class="text-danger">*</span></label>
                            <select class="form-select" name="account_type" id="account_type" style="color: #808087;" required>
                                <option value="">Select</option>
                                <option value="Cash Credit">Cash Credit</option>
                                <option value="Over Draft">Over Draft</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="bank_limits" class="form-label">Bank Limits: Cash (OD)/ Credit :<span class="text-danger">*</span></label>
                            <input type="text" id="bank_limits" name="bank_limits" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="lc_limit" class="form-label">L/C Limit :<span class="text-danger">*</span></label>
                            <input type="text" id="lc_limit" name="lc_limit" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="bankfile" class="form-label">Attach Bank Proof : (* pdf file only)<span class="text-danger">*</span></label>
                            <input type="file" id="bankfile" name="bankfile" required>
                        </div>
                    </div>
                    <div class="col-12 text-left m-auto d-flex align-item-center justify-content-center">
                        <div class="col-lg-4 mb-3">
                            <input class="btn btn-style-one text-white text-bold" type="submit" name="Submit Now" style="height: 55px;">
                        </div>
                    </div>

                    <div class="col-12">
                        <!--== Message Notification ==-->
                        <div class="form-message mt-4"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Section End -->


<?php include('includes/footer.php'); ?>