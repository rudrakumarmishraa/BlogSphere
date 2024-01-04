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
<?php include 'scenes/header.php';?>
<section id="mt_general_banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-wrapper">
                    <div class="banner-caption wow fadeInUp" data-wow-delay="0.3">
                        <h1>Work</h1>
                        <p>Explore my BlogSphere portfolio—a collection of my thoughts, stories, and creative expressions. Join me on this journey through diverse topics and perspectives, discovering the essence of my digital narrative.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Imorting different sections -->
<?php include 'scenes/portfolio.php'; ?>
<?php include 'scenes/newsletter.php'; ?>
<?php include 'scenes/footer.php';?>