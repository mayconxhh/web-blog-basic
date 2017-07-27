<!-- One -->
	<section id="one" class="wrapper style1">
		<div class="inner">
			<h2><?php echo $title; ?></h2>
			<?php foreach($results as $post) : ?>
				<article class="feature left">
					<span class="image"><img src="<?php echo RUTA; ?>/images/<?php echo $post['thumb']; ?>" alt="" /></span>
					<div class="content">
						<h2><a href="post.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h2>
						<p><?php echo $post['extract'] ?></p>
						<ul class="actions">
							<li>
								<a href="post.php?id=<?php echo $post['id'] ?>" class="button alt"><i class="fa fa-chevron-right" aria-hidden="true" style="margin-right: 5px"></i> Ver</a>
							</li>
						</ul>
					</div>
				</article>
		<?php endforeach; ?>
		</div>
	</section>