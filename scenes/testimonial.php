<section id="mt_testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h3>What our Client Says</h3>
            <?php
                $sql = "SELECT * FROM testimonial";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="item"><div class="testimonial_main"><div class="col-xs-12">';
                        echo '<p>'.$row["body"].'</p>';
                        echo '<em>'.$row["name"].'</em>';
                        echo '<span>'.$row["position"].'</span>';
                        echo '</div></div></div>';
                    }
                } else {
                    echo "0 results";
                }
            ?>
                
            </div>
        </div>
    </div>
</section>