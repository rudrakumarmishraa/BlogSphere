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
<?php include 'scenes/header.php'; ?>
<section id="mt_general_banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-wrapper">
                    <div class="banner-caption wow fadeInUp" data-wow-delay="0.3">
                        <h1>Contact</h1>
                        <p>Got questions or feedback? Contact BlogSphere for swift assistance. Your thoughts matter;
                            we're here to help enhance your experience!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mt_contact_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="mt_address">
                    <strong>BlogSphere Headquarters</strong> <br>
                    123 Web Lane <br>
                    Tech City, Varanasi <br>
                    UP, India <br>
                </div>
                <div class="mt_phone"><span>Call Us:</span>+91 3 8376 6284</div>
            </div>
            <div class="col-sm-8">
                <h3>Stay in Touch</h3>
                <form action="contact.php" method="post">
                    <input type="text" name="name" id="name" placeholder="Your name" required>
                    <input type="email" name="email" id="email" placeholder="Your email" required>
                    <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message"
                        required></textarea>
                    <p>
                        <?php
                        // Check if the form is submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Get the input values from the form
                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $message = $_POST["message"];
                            // MYSQL backend creds
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "blogswebsite";
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";
                            $result = $conn->query($sql);
                            if($result){
                                echo "Thank your for your feedback";
                            } else {
                                echo "Err: Message not sent";
                            }
                        }
                        ?>
                    </p>
                    <button class="mt_btn_color" id="submit-btn">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'scenes/footer.php'; ?>