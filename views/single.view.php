<!-- Main -->
	<section id="main" class="wrapper">
		<div class="container">

			<header class="major special">
				<h2><?php echo $post['title']; ?></h2>
				<p><?php echo $post['extract']; ?></p>
			</header>

			<a href="#" class="image fit"><img src="images/<?php echo $post['thumb']; ?>" alt="" /></a>
			<p><?php echo $post['text']; ?></p>

			<i><?php echo datePost($post['date']); ?></i>

			<hr>

			<div style="width: 80%; margin: 0 auto; text-align: center; border: 2px solid #51BAA4; border-radius: 10px; padding: 1.3em;margin-bottom: 1em;">
				<figure style="width: auto; line-height: 0; margin-bottom: 10px;">
					<img style="width: 100px; border-radius: 50%" src="images/user.jpg" alt="">
				</figure>
				<div style="padding-left: 1.3em; text-align: center;">
					<strong><a href="" style="font-size: 1.3em;">Author: Maycon X. Huayapa H.</a></strong>
					<br>
					<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit labore iusto, pariatur corrupti. Quidem, eum aperiam reiciendis, voluptatibus optio molestiae accusamus a ducimus officia illo suscipit saepe libero asperiores illum?</i>
				</div>
			</div>
		</div>
	</section>