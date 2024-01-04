<section id="mt_newsletter">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="started_heading text-center">
                    <h1>Newsletter</h1>
                    <p>Register now with our newsletter and get latest updates available.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="newsletter_form">
                    <form action="newsletters.php" method="post">
                        <input type="email" name="email" placeholder="email">
                        <input style="display: none;" type="text" name="came" value="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <button type="submit" class="mt_btn_color">SignUp</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>