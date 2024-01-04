<?php
session_start();
// Check if the user is not logged in, redirect to login page
if (isset($_SESSION["loggedin"])) {
    if ($_SESSION["loggedin"] === true) {
        header("Location: adminpage.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/arcade/64/blog.png">
    <title>Signin | BlogSphere</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            user-select: none;
        }

        body {
            width: 100vw;
        }

        img {
            width: 100vw;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        body,
        input,
        textarea {
            font-family: 'Roboto', sans-serif;
        }

        form {
            position: absolute;
            top: 50%;
            left: 50%;
            padding: 1rem;
            border-radius: 10px;
            backdrop-filter: blur(20px);
            transform: translate(-50%, -50%);
            box-shadow: 0 0 5px .8px rgba(166, 166, 166, 40%);
            z-index: 100;
        }

        form h1 {
            margin: 3rem 1rem 2rem 1rem;
            color: #000;
            color: #777;
        }

        form .input {
            position: relative;
            margin: 2rem 0;
        }

        form .input input {
            width: 320px;
            outline: none;
            font-size: 1.5rem;
            border: 1px solid #e0e0e0;
            border-radius: 50px;
            padding: 2px 2px 2px 40px;
            transition: 0.2s ease;
        }

        form .input input:focus {
            box-shadow: 0 0 3px .8px #458eff;
        }

        form .input svg {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 25px;
            height: 25px;
            fill: #666;
        }

        form button {
            width: 100%;
            font-size: 1.5rem;
            margin-bottom: 3rem;
            padding: 5px;
            color: #fff;
            background: #458eff;
            border: 0;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.5s ease;
        }

        form button:hover {
            scale: 0.95;
        }

        form a {
            display: flex;
            position: absolute;
            top: 5px;
            left: 5px;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
            text-decoration: none;
            cursor: pointer;
            color: #777;
            transition: 0.5s ease;
        }

        form a:hover {
            transform: scale(0.9);
            color: #000;
        }

        form a svg {
            width: 15px;
            height: 15px;
        }

        form #error {
            width: 100%;
            font-size: 0.8rem;
            font-weight: 600;
            text-align: center;
            color: #ff00009c;
            margin: 1rem 0;
            padding: 0 10px;
        }
    </style>
</head>

<body>
    <img src="https://img.freepik.com/free-vector/digital-technology-background-with-abstract-wave-border_53876-117508.jpg" alt="BGIMG">
    <form action="login.php" method="post">
        <h1>Admin Login</h1>
        <div class="input">
            <input type="text" placeholder="username" name="username">
            <svg height="16" width="14" viewBox="0 0 448 512">
                <path opacity="1" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
            </svg>
        </div>
        <div class="input">
            <input type="password" placeholder="password" name="password">
            <svg height="16" width="16" viewBox="0 0 512 512">
                <path opacity="1" d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
            </svg>
        </div>
        <p id="error">
            <?php
            if (isset($_GET['error'])) {
                echo "Invalid username or password";
            }
            ?>
        </p>
        <button>Login</button>
        <a href="index.php">
            <svg viewBox="0 0 24 24" fill="none" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
            Go back
        </a>
    </form>
</body>
<script>
    // Event Listner for Username
    document.querySelectorAll("input")[0].addEventListener("keyup", (event) => {
        if (event.target.value.length > 8) {
            document.querySelector("#error").innerHTML = "username must be less than 8 character"
        } else {
            document.querySelector("#error").innerHTML = ""
        }
    })
    // Event Listner for Password
    document.querySelectorAll("input")[1].addEventListener("keyup", (event) => {
        if (event.target.value.length > 8) {
            document.querySelector("#error").innerHTML = "password must be less than 8 character"
        } else {
            document.querySelector("#error").innerHTML = ""
        }
    })
</script>

</html>