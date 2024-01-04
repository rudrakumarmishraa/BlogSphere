<?php
session_start();
// Check if the user is not logged in, redirect to login page
if (isset($_SESSION["loggedin"])) {
    if ($_SESSION["loggedin"] !== true) {
        header("Location: signin.php");
        exit();
    }
} else {
    header("Location: signin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/arcade/64/blog.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Add Service</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            font-size: 18px;
            font-family: 'Roboto', sans-serif;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
        }


        .navigation {
            display: flex;
            width: 100vw;
            gap: 1rem;
            background: var(--light);
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            overflow-x: hidden;
        }

        .navigation a {
            min-width: fit-content;
            text-decoration: none;
            color: var(--dark);
            border: 1px solid #333;
            padding: 5px 20px;
            border-radius: 50px;
            transition: 0.5s ease;
        }

        .navigation a.active {
            background: var(--primary);
            color: var(--light);
        }

        .navigation a:hover {
            background: var(--primary);
            color: var(--light);
        }

        form {
            display: flex;
            width: 500px;
            flex-direction: column;
            gap: 2rem;
            margin: 1rem auto;
            padding: 1rem;
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
            border-radius: 5px;
        }


        form h3 {
            font-size: 2rem;
            font-weight: 500;
        }

        form .form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        form .form .input {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
        }

        form .form .input label {
            font-size: 1.5rem;
            color: #777;
        }

        form .form .input input {
            outline: none;
            border: 0;
            font-size: 1.3rem;
        }

        form .form .input textarea {
            width: 100%;
            height: 150px;
            outline: none;
            border: 0;
            resize: none;
            font-size: 1.3rem;
        }

        form .form button {
            font-size: 1.5rem;
            padding: 10px 20px;
            border: 0;
            border-radius: 5px;
            background: var(--indigo);
            color: #fff;
            transition: 0.5s ease;
            cursor: pointer;
        }

        form .form button:hover {
            background: var(--purple);
        }

        #error {
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--danger);
        }

        @media screen and (max-width:450px) {
            form {
                width: 320px;
            }
        }

        #btn-logout {
            position: fixed;
            bottom: 10px;
            right: 20px;
            padding: 10px 40px;
            border-radius: 50px;
            text-decoration: none;
            color: var(--white);
            background: var(--danger);
            border: 1px solid var(--danger);
            transition: 0.5s ease;
        }

        #btn-logout:hover {
            color: var(--danger);
            background: var(--white);
        }
    </style>
</head>
<body>
<a id="btn-logout" href="logout.php">Logout</a>
    <div class="navigation">
        <a href="adminpage.php">Dashboard</a>
        <a href="writeblog.php">Write Blog</a>
        <a href="editblogs.php">Edit Blog</a>
        <a href="addportfolio.php">Add Portfolio</a>
        <a href="deleteportfolio.php">Delete Portfolio</a>
        <a class="active" href="addservice.php">Add Service</a>
        <a href="deleteservice.php">Delete Service</a>
        <a href="addtestimonial.php">Add Testimonial</a>
        <a href="deletetestimonial.php">Delete Testimonial</a>
        <a href="contactmessages.php">Contact Messages</a>
    </div>
    <form action="addservice.php" method="post">
        <h3>Add Service Item</h3>
        <div class="form">
            <div class="input">
                <label for="title">Title of Service</label>
                <input type="text" placeholder="title" name="title">
            </div>
            <div class="input">
                <label for="icon">Icon of Service</label>
                <input type="text" placeholder="icon" name="icon">
            </div>
            <div class="input">
                <label for="title">Body of Service</label>
                <textarea name="body" placeholder="body"></textarea>
            </div>
            <p id="error">
                <?php
                // Check if the form is submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "blogswebsite";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    // Get the input values from the form
                    $title = $_POST["title"];
                    $icon = $_POST["icon"];
                    $body = $_POST["body"];
                    if ($title == "" || $icon == "" || $body == "") {
                        echo 'Please fill all details.';
                    } else {
                        $sql = "INSERT INTO `services` (`icon`, `title`, `body`) VALUES ('$icon', '$title', '$body')";
                        $result = $conn->query($sql);
                        if ($result) {
                            echo 'Added Successfully.';
                        }
                    }
                }
                ?>
            </p>
            <button>Submit</button>
        </div>
    </form>
</body>
<script>
    const container = document.querySelector(".navigation");
    container.addEventListener("wheel", function(e) {
        if (e.deltaY > 0) {
            container.scrollLeft += 100;
            e.preventDefault();
        } else {
            container.scrollLeft -= 100;
            e.preventDefault();
        }
    })
</script>
</html>