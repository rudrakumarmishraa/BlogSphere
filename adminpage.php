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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogswebsite";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables
$blogs = 0;
$services = 0;
$testimonial = 0;
$message = 0;

// Blogs
$sql = "SELECT * FROM blogs";
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $blogs = $blogs + 1;
    }
}

// Services
$sql = "SELECT * FROM services";
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $services = $services + 1;
    }
}

// testimonial
$sql = "SELECT * FROM testimonial";
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $testimonial = $testimonial + 1;
    }
}

// Messages
$sql = "SELECT * FROM contactus";
$result = $conn->query($sql);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $message = $message + 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/arcade/64/blog.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Admin Page</title>
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

        #pills {
            display: flex;
            width: 90%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 1rem auto;
            padding: 1rem;
            gap: 1rem;
        }

        #pills h3 {
            width: 100%;
            font-size: 1.75rem;
            font-weight: 700;
        }

        #pills .pills {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        #pills .pills .pill {
            position: relative;
            display: flex;
            width: 270px;
            height: 150px;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
            border-radius: 5px;
            overflow: hidden;
        }

        #pills .pills .pill:nth-child(1) {
            color: var(--blue);
        }

        #pills .pills .pill:nth-child(2) {
            color: var(--indigo);
        }

        #pills .pills .pill:nth-child(3) {
            color: var(--purple);
        }

        #pills .pills .pill:nth-child(4) {
            color: var(--orange);
        }

        #pills .pills .pill h1 {
            font-size: 2.5rem;
            z-index: 100;
        }

        #pills .pills .pill h2 {
            font-size: 1.25rem;
            z-index: 100;
        }

        #pills .pills .pill i {
            position: absolute;
            font-size: 6rem;
            right: -5px;
            bottom: -5px;
            color: #e0e0e0;
        }

        #latest-blogs {
            display: flex;
            width: 90%;
            flex-direction: column;
            gap: 1rem;
            margin: 1rem auto;
            padding: 1rem;
        }

        #latest-blogs h2 {
            width: 100%;
        }

        #latest-blogs .blogs {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        #latest-blogs .blogs .blog {
            display: flex;
            justify-content: center;
            padding: 1rem;
            gap: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
            text-decoration: none;
            color: #333;
        }

        #latest-blogs .blogs .blog:nth-child(2n) {
            flex-direction: row-reverse;
        }

        #latest-blogs .blogs .blog .content {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        #latest-blogs .blogs .blog .content p {
            width: 100%;
            text-align: justify;
            color: #777;
        }

        #latest-blogs .blogs .blog img {
            width: 200px;
            border-radius: 10px;
        }

        @media screen and (max-width:1100px) {
            #latest-blogs .blogs .blog {
                flex-direction: column;
            }

            #latest-blogs .blogs .blog:nth-child(2n) {
                flex-direction: column;
            }

            #latest-blogs .blogs .blog img {
                width: 100%;
            }
        }
        @media screen and (max-width:750px) {
            #pills .pills .pill {
                width: 100%;
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
        <a class="active" href="adminpage.php">Dashboard</a>
        <a href="writeblog.php">Write Blog</a>
        <a href="editblogs.php">Edit Blog</a>
        <a href="addportfolio.php">Add Portfolio</a>
        <a href="deleteportfolio.php">Delete Portfolio</a>
        <a href="addservice.php">Add Service</a>
        <a href="deleteservice.php">Delete Service</a>
        <a href="addtestimonial.php">Add Testimonial</a>
        <a href="deletetestimonial.php">Delete Testimonial</a>
        <a href="contactmessages.php">Contact Messages</a>
    </div>
    <div id="pills">
        <h3>BlogSphere Activity</h3>
        <div class="pills">
            <div class="pill">
                <h2>Blogs Writeen</h2>
                <h1><?php echo $blogs; ?>+</h1>
                <i class="fa-brands fa-blogger-b"></i>
            </div>
            <div class="pill">
                <h2>Services Added</h2>
                <h1><?php echo $services; ?>+</h1>
                <i class="fa-solid fa-bell-concierge"></i>
            </div>
            <div class="pill">
                <h2>Added Testimonial</h2>
                <h1><?php echo $testimonial; ?>+</h1>
                <i class="fa-solid fa-users"></i>
            </div>
            <div class="pill">
                <h2>Contact Messages</h2>
                <h1><?php echo $message; ?>+</h1>
                <i class="fa-solid fa-message"></i>
            </div>
        </div>
    </div>
    <div id="latest-blogs">
        <h2>Latest Blogs</h2>
        <div class="blogs">
            <?php
            $sql = "SELECT * FROM blogs ORDER BY date DESC";
            $result = $conn->query($sql);
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    echo '<a href="content.php?id=' . $row["blogid"] . '" class="blog">';
                    echo '<div class="content">';
                    echo '<h3>' . $row["title"] . '</h3>';
                    echo '<p>';
                    echo substr($row["body"], 0, 500) . '.....';
                    echo '</p>';
                    echo '<span>';
                    echo $row["date"];
                    echo '</span>';
                    echo '</div>';
                    echo '<img src="' . $row["img"] . '">';
                    echo '</a>';
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