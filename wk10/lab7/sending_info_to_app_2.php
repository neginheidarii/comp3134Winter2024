<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>
<?php
// Retrieve the value from the form or query string
$content = $_GET['q'];

// Strip HTML tags from the content
$filteredContent1 = strip_tags($content);

// Display the HTML entity value of the content
$filteredContent2 = htmlentities($content);

// Output the filtered content
echo "<br>Filtered Content using strip_tags(): " . $filteredContent1;
echo "<br>Filtered Content using htmlentities(): " . $filteredContent2;
?>
