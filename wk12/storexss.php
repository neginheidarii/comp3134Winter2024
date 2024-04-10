<?php
    // Read the contents of the text file
    $filename = __DIR__ . '/storexss.txt';
    $fileContents = file_get_contents($filename);

    // Output the contents of the text file without sanitization
    echo $fileContents;
?>
