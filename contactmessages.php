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
    <title>Contact Messages</title>
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

        #messages {
            display: flex;
            width: 90%;
            flex-direction: column;
            margin: 1rem auto;
            gap: 3rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
        }

        #messages h3 {
            font-size: 2rem;
        }

        #messages .messages {
            display: flex;
            flex-direction: column;
        }

        #messages .messages .message {
            display: grid;
            width: 100%;
            grid-template-columns: 50px 3fr 3fr 6fr;
            padding: 20px 0;
            color: var(--dark);
            border-bottom: 1px solid #e0e0e0;
        }

        #messages .messages .message:first-child {
            background: var(--gray);
            color: var(--white);
        }

        #messages .messages .message span {
            padding: 5px 10px;
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
        <a href="addservice.php">Add Service</a>
        <a href="deleteservice.php">Delete Service</a>
        <a href="addtestimonial.php">Add Testimonial</a>
        <a href="deletetestimonial.php">Delete Testimonial</a>
        <a class="active" href="contactmessages.php">Contact Messages</a>
    </div>
    <div id="messages">
        <h3>Contact Messages</h3>
        <div class="messages">
            <div class="message">
                <span>#</span>
                <span>Name</span>
                <span>Email</span>
                <span>Message</span>
            </div>
            <?php
            // MYSQL backend creds
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blogswebsite";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = 'SELECT * FROM contactus';
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="message">';
                    echo '<span>' . $i . '</span>';
                    echo '<span>' . $row["name"] . '</span>';
                    echo '<span>' . $row["email"] . '</span>';
                    echo '<span>' . $row["message"] . '</span>';
                    echo '</div>';
                    $i = $i + 1;
                }
            }
            $conn->close();
            ?>
        </div>
    </div>
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