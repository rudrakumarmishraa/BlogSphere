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

<!-- Banner -->
<section id="mt_general_banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-wrapper">
                    <div class="banner-caption wow fadeInUp" data-wow-delay="0.3">
                        <h1>About Us</h1>
                        <p style="text-align: justify;">Welcome to BlogSphere, where words come to life. We're passionate about empowering voices, sharing stories, and fostering a vibrant community of creative minds. Join us on this literary journey!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mt_company_info">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="about_company">
                    <h3>Company History</h3>
                    <p style="text-align: justify;">Established in 2015, BlogSphere embarked on a mission to redefine digital expression. Born from a collective love for storytelling, we envisioned a platform where diverse voices could resonate. As our community flourished, BlogSphere evolved, introducing innovative features, fostering creativity, and connecting writers globally. Over the years, we've become a hub for aspiring bloggers and seasoned wordsmiths alike, offering a space to share, inspire, and grow. Committed to constant innovation, our journey continues to shape the future of online narratives, creating a dynamic and inclusive environment for the ever-expanding world of digital storytelling.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="company_vision_mission">
                <div class="col-sm-6">
                    <h3>Company Vision</h3>
                    <p style="text-align: justify;">At BlogSphere, we envision a world where every voice has the power to inspire and be heard. Our vision is to cultivate a diverse and inclusive community of bloggers, fostering creativity and empowering individuals to share their unique stories. We strive to provide an innovative platform that not only connects writers globally but also serves as a catalyst for positive change. By continuously evolving and embracing emerging technologies, we aim to be the forefront of digital storytelling, shaping the future landscape of online narratives. Join us in building a community where words have the potential to transcend boundaries and create meaningful connections.</p>
                </div>
                <div class="col-sm-6">
                    <h3>Company Mission</h3>
                    <p style="text-align: justify;">At BlogSphere, our mission is to empower individuals to share their stories, ideas, and perspectives through a user-friendly and innovative blogging platform. We are dedicated to providing a space where creativity flourishes, connections are forged, and diverse voices find a global audience. Committed to fostering a supportive community, we strive to equip bloggers with the tools they need to succeed, offering features that enhance their storytelling experience. With a focus on accessibility, inclusivity, and constant improvement, we aspire to be the go-to platform for digital storytellers, catalyzing a positive impact on the world through the art of written expression.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Imorting different sections -->
<?php include 'scenes/services.php'; ?>
<?php include 'scenes/testimonial.php'; ?>
<?php include 'scenes/newsletter.php'; ?>
<?php include 'scenes/footer.php'; ?>