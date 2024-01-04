<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (isset($_SESSION["loggedin"])) {
    if ($_SESSION["loggedin"] === true) {
        header("Location: adminpage.php");
        exit();
    }
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate the username and password (you should add more robust validation)
    if ($username == "admin" && $password == "admin") {
        $_SESSION["loggedin"] = true;
        header("Location: adminpage.php");
        exit();
    } else {
        header("Location: signin.php?error=1");
        exit();
    }
} else {
    header("Location: adminpage.php");
    exit();
}
?>