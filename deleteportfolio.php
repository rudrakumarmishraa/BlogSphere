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
    <title>Delete Portfolio</title>
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

        #portfolios {
            width: 90%;
            margin: 1rem auto;
            padding: 1rem;
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
            border-radius: 5px;
        }

        #portfolios h3 {
            font-size: 2rem;
            font-weight: 500;
        }

        #portfolios .portfolios {
            display: flex;
            gap: 2rem;
            padding: 1rem 1rem 1rem 0;
            flex-wrap: wrap;
        }

        #portfolios .portfolios .portfolio {
            display: flex;
            width: 270px;
            height: 300px;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
            transition: 0.5s ease;
        }

        #portfolios .portfolios .portfolio:hover {
            transform: scale(1.02);
        }

        #portfolios .portfolios .portfolio img {
            width: 270px;
            height: 150px;
        }

        #portfolios .portfolios .portfolio h4 {
            width: 95%;
        }

        #portfolios .portfolios .portfolio button {
            width: 90%;
            font-size: 1.5rem;
            padding: 5px 10px;
            margin: 5px 5%;
            border: 0;
            border-radius: 5px;
            color: var(--light);
            background: var(--danger);
            cursor: pointer;
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
        <a class="active" href="deleteportfolio.php">Delete Portfolio</a>
        <a href="addservice.php">Add Service</a>
        <a href="deleteservice.php">Delete Service</a>
        <a href="addtestimonial.php">Add Testimonial</a>
        <a href="deletetestimonial.php">Delete Testimonial</a>
        <a href="contactmessages.php">Contact Messages</a>
    </div>
    <div id="portfolios">
        <h3>Portfolios</h3>
        <div class="portfolios">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "blogswebsite";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $title = $_POST["title"];
                $sql = "DELETE FROM `portfolio` WHERE title='$title'";
                $result = $conn->query($sql);
            }

            $sql = "SELECT * FROM portfolio";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<form method="post" class="portfolio">';
                    echo '<img src="' . $row["image"] . '" alt="Logo">';
                    echo '<h4>' . $row["title"] . '</h4>';
                    echo '<button>Delete</button>';
                    echo '<input style="display: none;" value="' . $row["title"] . '" name="title" />';
                    echo '</form>';
                }
            }
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