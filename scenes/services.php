<section id="mt_services" class="light-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>We offer Affordable Services</h3>
            </div>
            <div class="clearfix"></div>
            <!-- Service 1 -->
            <?php
            $sql = "SELECT * FROM services";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 col-sm-6"><div class="box text-center"><div class="icon">';
                    echo '<i class="'.$row["icon"].'"></i>';
                    echo '</div>';
                    echo '<h3>'.$row["title"].'</h3>';
                    echo '<p>'.$row["body"].'</p>';
                    echo '</div></div>';
                }
            } else {
                echo "0 services";
            }
            ?>
        </div>
    </div>
</section>