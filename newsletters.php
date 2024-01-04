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
    $redirecto = $_POST["came"];
    $email = $_POST["email"];
    // MYSQL backend creds
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "blogswebsite";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: $redirecto");
    exit();
    
} else {
    header("Location: index.php");
    exit();
}
?>