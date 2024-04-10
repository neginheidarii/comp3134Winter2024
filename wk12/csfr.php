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
        <input type="submit" name="submit" value="Submit">
    </form>
    <div id="splash-msg" class="splash-msg"></div>
    <?php
        // Check if form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Check if username and password are correct
            if ($username === 'host' && $password === 'pass') {
                echo '<script>document.getElementById("splash-msg").innerHTML = "Success!";</script>';
            } else {
                echo '<script>document.getElementById("splash-msg").innerHTML = "Failure!";</script>';
            }
            echo '<script>document.getElementById("splash-msg").style.display = "block";</script>';
        }
    ?>
</body>
</html>
