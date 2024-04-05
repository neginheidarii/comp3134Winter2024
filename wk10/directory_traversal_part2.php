<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Original code for error reporting and default path setting
$path = isset($_GET['q']) ? $_GET['q'] : '.';

// Sanitize the input using basename to prevent directory traversal
$safePath = basename($path);

// Bonus: Reject if input is a filename (contains a dot)
if (strpos($safePath, '.') !== false) {
    die("Accessing files is not allowed.");
}

// Construct the full path with the adjusted directory
$fullPath = "/var/www/html/wk7/" . $safePath;

// Ensure the directory exists and is not above the wk7 directory
if (file_exists($fullPath) && is_dir($fullPath)) {
    print "<pre>";
    print_r(scandir($fullPath));
    print "</pre>";
} else {
    echo "Directory does not exist.";
}
?>