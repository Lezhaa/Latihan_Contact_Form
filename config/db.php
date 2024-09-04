<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_DATABASE', 'contact_form');

// Membuat Koneksi
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

// Check koneksi
if($conn->connect_error) {
    die(`Connection failed $conn->connect_error`);
}

?>