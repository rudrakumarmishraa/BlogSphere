<section id="mt_portfolio" class="gallery-section gallery-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt_filter">
                    <h1>Portfolio</h1>
                </div>
            </div>
        </div>
        <div class="row portfolio_row">
            <div class="isotopeContainer">
                <?php
                $sql = "SELECT * FROM portfolio";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="portfolio_grid no-padding isotopeSelector webdesign grid-item">';
                        echo '<figure class="portfolio_hover">';
                        echo '<img src="' . $row["image"] . '" alt="image" class="img-responsive center-block" />';
                        echo ' <figcaption>';
                        echo '<b class="detail_portfolio">';
                        echo '<center><h3>' . $row["title"] . '</h3></center>';
                        echo '</b>';
                        echo '<a href="' . $row["image"] . '" class="fancybox open_img">';
                        echo '<h5><i class="ion-ios-plus-empty"></i></h5>';
                        echo '</a></figcaption></figure></div>';
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>