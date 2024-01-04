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

if (!isset($_GET['id'])) {
    header("Location: editblogs.php");
    exit();
}

// MYSQL backend creds
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogswebsite";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$title = "";
$body = "";
$img = "";
$sql = "SELECT * FROM blogs WHERE blogid='$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $title = $row["title"];
        $body = $row["body"];
        $img = $row["img"];
    }
} else {
    header("Location: editblogs.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $title = $_POST["title"];
    $body = $_POST["body"];
    $date = date("Y-m-d");

    $sql = "UPDATE `blogs` SET `title` = '$title', body='$body', date='$date' WHERE `blogs`.`id` = '$id'";
    $result = $conn->query($sql);
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/arcade/64/blog.png">
    <title>Edit Blog</title>
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
            justify-content: center;
            align-items: center;
            margin: 1rem auto;
            gap: 1rem;
            padding: 1rem;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
        }

        form h1 {
            width: 100%;
            font-weight: 500;
        }

        form .input {
            display: flex;
            width: 100%;
            flex-direction: column;
            padding: 5px 10px;
            gap: 10px;
            border: 1px solid var(--dark);
            border-radius: 10px;
        }

        form .input label {
            color: #777;
            font-size: 1.25rem;
        }

        form .input input {
            width: 100%;
            outline: none;
            border: 0;
            font-size: 1.5rem;
        }

        form .input textarea {
            width: 100%;
            height: 200px;
            outline: none;
            border: 0;
            font-size: 1.5rem;
            resize: none;
        }

        form .input input[type="file"] {
            font-size: 1rem;
        }

        #error {
            width: 100%;
            font-size: 0.9rem;
            font-weight: 600;
            color: red;
        }

        form button {
            width: 100%;
            background: var(--purple);
            color: var(--white);
            font-size: 1.5rem;
            padding: 10px;
            border: 0;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.5s ease;
        }

        form button:hover {
            background: var(--indigo);
            color: var(--light);
        }

        form img {
            width: 100%;
            height: 200px;
            border-radius: 10px;
        }

        @media screen and (max-width:600px) {
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
        <a class="active" href="editblogs.php">Edit Blog</a>
        <a href="addportfolio.php">Add Portfolio</a>
        <a href="deleteportfolio.php">Delete Portfolio</a>
        <a href="addservice.php">Add Service</a>
        <a href="deleteservice.php">Delete Service</a>
        <a href="addtestimonial.php">Add Testimonial</a>
        <a href="deletetestimonial.php">Delete Testimonial</a>
        <a href="contactmessages.php">Contact Messages</a>
    </div>
    <form action="editblog.php?id=<?php echo $_GET['id']; ?>" method="post">
        <h1>Edit a Blog</h1>
        <img src="<?php echo $img; ?>" alt="Logo">
        <div class="input">
            <label for="title">Title of Blog</label>
            <input type="text" name="title" placeholder="title" value="<?php echo $title; ?>">
        </div>
        <div class="input">
            <label for="title">Body of Blog</label>
            <textarea name="body" placeholder="body"><?php echo $body; ?></textarea>
        </div>
        <p id="error"></p>
        <button>Submit</button>
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