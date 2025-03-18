<?php
$page_title = "PIXMAINNOVATIONS || PATNERS REGISTRATION";
$pagename = "Partner Registration";
$current_page = basename($_SERVER['PHP_SELF']);
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
    $company_subject = $_POST['company_subject'];
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
    $sql = "INSERT INTO partner_registration (company_name, company_address, company_bill_address, company_phone, company_email, company_subject, type_of_company, pan_no, gst_no, registration_file, proprietor_name, residential_address, ownership_percentage, mobile_no, telephone, account_no, signatories_no, account_type, bank_limits, lc_limit, bankfile) 
            VALUES ('$company_name', '$company_address', '$company_bill_address', '$company_phone', '$company_email', '$company_subject', '$type_of_company', '$pan_no', '$gst_no', '$registration_file', '$proprietor_name', '$residential_address', '$ownership_percentage', '$mobile_no', '$telephone', '$account_no', '$signatories_no', '$account_type', '$bank_limits', '$lc_limit', '$bankfile')";

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
                <span class="heading-one-subtitle">Contact Us</span>
                <h2 class="heading-one-title">Stay Connected</h2>
            </div>
            <!-- Heading End -->
        </div>
        <div class="row mb-n30">
            <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <div class="contact-head">
                    <p class="text">Kimod tempoer incididunt onomes sundo ritoma amar korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor inci didunt o ritoma amar korem ipsum</p>
                </div>
                <!-- Contact Information Start -->
                <ul class="contact-info">
                    <li>
                        <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Address</h3>
                            <span class="text">20, Mounten Street, UK</span>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Phone</h3>
                            <span class="text"><a href="tel:+123456789">+123 456 789</a></span>
                        </div>
                    </li>
                    <li>
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-info-content">
                            <h3 class="title">Email</h3>
                            <span class="text"><a href="mailto:hello@avers.com">hello@avers.com</a></span>
                        </div>
                    </li>
                </ul>
                <!-- Contact Information End -->
            </div>

            <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                <form id="contact-form" class="contact-form" method="POST" enctype="multipart/form-data">
                    <!-- Company Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Company Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="company_name">Company Name :</label>
                            <input type="text" id="company_name" name="company_name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_address">Office Address :</label>
                            <input type="text" id="company_address" name="company_address">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_bill_address">Billing Address :</label>
                            <input type="text" id="company_bill_address" name="company_bill_address">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_phone">Phone / Fax No. :</label>
                            <input type="text" id="company_phone" name="company_phone">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_email">Your email :</label>
                            <input type="email" id="company_email" name="company_email">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="company_subject">Type of Company :</label>
                            <input id="company_subject" name="company_subject">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="type_of_company">Type of Company :</label>
                            <select class="form-select" name="type_of_company" id="type_of_company" style="color: #808087;">
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
                            <label for="pan_no">Pan No :</label>
                            <input type="text" id="pan_no" name="pan_no">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="gst_no">GST No :</label>
                            <input type="text" id="gst_no" name="gst_no">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="registration_file">Attach Appropriate File(s) :</label>
                            <input type="file" id="registration_file" name="registration_file">
                        </div>
                    </div>

                    <!-- Proprietor, Partners, and Directors Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Proprietor, Partners, and Directors Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="proprietor_name">Name :</label>
                            <input type="text" id="proprietor_name" name="proprietor_name">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="residential_address">Residential Address :</label>
                            <input type="text" id="residential_address" name="residential_address">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="ownership_percentage">% of Ownership in Business :</label>
                            <input type="text" id="ownership_percentage" name="ownership_percentage">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="mobile_no">Mobile No. :</label>
                            <input type="text" id="mobile_no" name="mobile_no">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="telephone">Telephone :</label>
                            <input type="text" id="telephone" name="telephone">
                        </div>
                    </div>

                    <!-- Bank Details Fields -->
                    <div class="col-md-12 d-flex mb-2 align-items-center justify-content-start" style="height: 36px; background-color:#322fb3; color:white">
                        <div class="ps-2">Bank Details</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="account_no">Account No :</label>
                            <input type="text" id="account_no" name="account_no">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="signatories_no">No. Of Signatories :</label>
                            <input type="text" id="signatories_no" name="signatories_no">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="account_type">Account Type :</label>
                            <select class="form-select" name="account_type" id="account_type" style="color: #808087;">
                                <option value="">Select</option>
                                <option value="Cash Credit">Cash Credit</option>
                                <option value="Over Draft">Over Draft</option>
                                <option value="General">General</option>
                            </select>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="bank_limits">Bank Limits: Cash (OD)/ Credit :</label>
                            <input type="text" id="bank_limits" name="bank_limits">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="lc_limit">L/C Limit :</label>
                            <input type="text" id="lc_limit" name="lc_limit">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="bankfile">Attach Bank Proof : (* pdf file only)</label>
                            <input type="file" id="bankfile" name="bankfile">
                        </div>
                    </div>
                    <div class="col-12 text-left m-auto d-flex justify-content-center">
                        <div class="col-lg-4 mb-3">
                            <input class="btn btn-style-one text-white text-bold" type="submit" name="Submit Now">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        let isValid = true;
        const inputs = document.querySelectorAll('#contact-form input, #contact-form select');
        inputs.forEach(input => {
            if (input.value.trim() === '') {
                isValid = false;
                alert('Please fill out all fields.');
                input.focus();
                event.preventDefault();
                return false;
            }
        });
        return isValid;
    });
});
</script>

<?php include('includes/footer.php'); ?>