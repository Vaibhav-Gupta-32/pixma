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
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'new_pixma_db');
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