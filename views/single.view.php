<!-- Header -->
<?php require 'header.view.php'; ?>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="inner">

			<header class="major special">
				<h2><?php echo $post['title']; ?></h2>
				<p><?php echo $post['extract']; ?></p>
			</header>

			<a href="#" class="image fit"><img src="images/<?php echo $post['thumb']; ?>" alt="" /></a>
			<p><?php echo nl2br($post['text']); ?></p>

			<i><?php echo datePost($post['date']); ?></i>

			<hr>

			<!-- Author -->
			<?php require 'author.view.php' ?>
			
		</div>
	</section>

<!-- Footer -->
<?php require 'footer.view.php'; ?>