
<!DOCTYPE html>
<html>
<head>
    <title>CSFR Example</title>
    <style>
        .splash-msg {
            display: none;
        }
    </style>
</head>
<body>
    <h1>CSFR Example</h1>
    <form method="post" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <label for="confirmation">Confirmation:</label>
        <input type="text" id="confirmation" name="confirmation"><br> <!-- Add a new input field for confirmation -->
        <input type="submit" name="submit" value="Submit">
    </form>
    <div id="splash-msg" class="splash-msg"></div>
	<?php
	session_start(); // Start the session

	// Check if form is submitted
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		// Get form data
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmation = $_POST['confirmation']; // Retrieve the POST value for confirmation

		// Get the session variable for confirmation
		$session_confirmation = $_SESSION['confirmation'];

		// Check if username and password are correct
		if ($username === 'host' && $password === 'pass') {
			// Check if session variable and POST value for confirmation are equal
			if ($session_confirmation === $confirmation) {
				echo '<script>document.getElementById("splash-msg").innerHTML = "Success!";</script>';
			} else {
				echo '<script>document.getElementById("splash-msg").innerHTML = "Failure! Confirmation values do not match!";</script>';
			}
		} else {
			echo '<script>document.getElementById("splash-msg").innerHTML = "Failure!";</script>';
		}
		echo '<script>document.getElementById("splash-msg").style.display = "block";</script>';
	}
	?>
</body>
</html>
