<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$passwords = ['password1', '123456', 'qwerty', 'password', '123456789', '12345678', '12345', '1234567', 'football', 'iloveyou'];

if (isset($_POST['password'])) {
    $entered_password = $_POST['password'];
    if (in_array($entered_password, $passwords)) {
        echo "<h1>Successfully authenticated</h1>";
    } else {
        echo "<h1>Weak Password</h1>";
        echo "<form method=\"post\">";
        echo "<label>Password</label>";
        echo "<input type=\"password\" name=\"password\">";
        echo "<br/>";
        echo "<input type=\"submit\">";
        echo "</form>";
    }
} else {
    echo "<h1>Weak Password</h1>";
    echo "<form method=\"post\">";
    echo "<label>Password</label>";
    echo "<input type=\"password\" name=\"password\">";
    echo "<br/>";
    echo "<input type=\"submit\">";
    echo "</form>";
}
