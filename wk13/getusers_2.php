<!DOCTYPE html>
<html>
<head>
    <title>Get Users</title>
</head>
<body>
    <h1>Get Users</h1>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname">
        <input type="submit" value="Search">
    </form>
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Get user input from form
        $firstname = $_GET["firstname"];

		$servername = "localhost";
		$username = "web";
		$password = "pass";
		$dbname = "my_schema";

		try {
			// Create a new PDO instance
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// Set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			// Prepare the query
			$result = $conn->prepare("SELECT * FROM users WHERE firstname = :firstname AND active = 1");
			// Bind the parameter
			$result->bindParam(':firstname', $firstname);
			// Execute the query
			$result->execute();
			// Fetch the result
			$row = $result->fetch();
			print_r($row);

			// Close database connection
			$conn = null;
		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
    }
    ?>
</body>
</html>
