<?php
session_start();
if (isset($_SESSION["loggedin"])) {
	if ($_SESSION["loggedin"] === true) {
		header("Location: adminpage.php");
		exit();
	}
}
?>
<?php
if (!isset($_GET['blogid'])) {
	header("Location: blogs.php");
	exit();
}
?>
<?php include 'scenes/header.php'; ?>
<?php
// Blogs Variables
$id = $_GET['blogid'];
$title = "";
$body = "";
$img = "";
$date = "";
$sql = "SELECT * FROM `blogs` WHERE blogid='$id'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$title = $row["title"];
		$body = $row["body"];
		$img = $row["img"];
		$date = $row["date"];
	}
}
?>
<section id="blog_main_sec">
	<div class="container">
		<div class="row">
			<main class="col-md-8">
				<div class="post_img">
					<img style="border-radius: 10px;" src="<?php echo $img; ?>" alt="Blog Image">
				</div>
				<div class="post_title">
					<h3>
						<?php echo $title; ?>
					</h3>
					<i class="ion-ios-calendar-outline"></i>
					<span style="font-size: 1.5rem;">&nbsp;
						<?php echo $date; ?>&nbsp;
					</span>
				</div>
				<div style="text-align: justify; font-size: 1.5rem;" class="post_body">
					<?php echo $body; ?>
				</div>
			</main>
			<aside class="col-sm-4">
				<section class="widget widget_recent_entries">
					<h3 class="blog_heading_border">
						Recent Posts
					</h3>
					<ul>
						<?php
						$sql = "SELECT * FROM blogs ORDER BY date DESC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								echo '<li>';
								echo '<img style="width: 70px; height: 70px;" src="' . $row["img"] . '" alt="image" />';
								echo '<h4><a href="blog.php?blogid=' . $row["blogid"] . '">' . $row["title"] . '</a></h4>';
								echo '<p>' . $row["date"] . '</p>';
								echo '</li>';
							}
						}
						?>
					</ul>
				</section>
		</div>

	</div>
</section>
<?php include 'scenes/footer.php'; ?>