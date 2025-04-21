<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
  // Local database configuration
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');  // systemd
  define('DB_NAME', 'new_pixma_db');
} else {
  // Server database configuration
  define('DB_HOST', 'localhost');
  define('DB_USER', 'u490924001_pixmainnorvati');
  define('DB_PASS', 'Thedigitalhouse@07');
  define('DB_NAME', 'u490924001_pixmainnorvati');
}
// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  include('function.php');
  // echo "Connected successfully"

// echo md5('Test@123');
}


?>