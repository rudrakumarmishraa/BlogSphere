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

<!-- Header -->
<?php include 'scenes/header.php'; ?>
<section id="mt_banner" style="background-image: url(images/home-banner.jpg)">
    <div class="container">
        <div class="row">
            <div class="banner-wrapper">
                <div class="banner-caption">
                    <h1 class="wow fadeInUp" data-wow-delay="0.1">DIGITAL CREATIVE<span>AGENCY</span></h1>
                    <p>We bring ide@s to life</p>
                    <a href="#mt_portfolio" class="mt_btn_color banner_down"><i class="ion-ios-arrow-thin-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Imorting different sections -->
<?php include 'scenes/portfolio.php'; ?>
<?php include 'scenes/services.php'; ?>
<?php include 'scenes/testimonial.php'; ?>
<?php include 'scenes/newsletter.php'; ?>
<?php include 'scenes/footer.php'; ?>