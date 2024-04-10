<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>

<?php
// Retrieve the value from the form or query string
$content = $_GET['q'];

// Output the content without any filtering
echo $content;
?>

