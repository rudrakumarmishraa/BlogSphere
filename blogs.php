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
<section id="blog_single_main_sec">
	<div class="container">
		<div class="row grid-masonry">
			<?php
			$sql = "SELECT * FROM blogs";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo '<div class="col-md-4 col-sm-12 grid-item"><div class="blog-post_wrapper"><div class="blog-post-inner_wrapper"><div class="blog-post-image"><div class="effects clearfix effect-bounce"><div class="img">';
					echo '<img style="width: 100px; height: 200px;" src="' . $row['img'] . '" alt="image"class="img-responsive center-block post_img" />';
					echo '</div></div></div><div class="post-detail_container"><div class="post-content"><h3 class="post-title entry-title">';
					echo '<a href="blog.php?blogid=' . $row['blogid'] . '">';
					echo $row['title'];
					echo '</a></h3>';
					echo '<ul class="list-unstyled list-inline post-metadata"><li><i class="ion-ios-stopwatch-outline"></i>';
					echo $row['date'];
					echo '</li></ul>';
					echo '<p class="post-excerpt">';
					echo substr($row['body'], 0, 200);
					echo '</p><div class="view_detail">';
					echo '<a href="blog.php?blogid=' . $row["blogid"] . '" class="mt_btn_color">Read more</a></div>';
					echo '</div></div></div></div></div>';
				}
			}
			?>
		</div>
	</div>
</section>
<?php include 'scenes/footer.php'; ?>