<!-- Header	 -->
<?php require '../views/header.view.php'; ?>

	<!-- One -->
	<section id="one" class="wrapper" style="background-color: #EEE; color: #777;">
		<div class="inner">
			<h2>Panel de control</h2>
			<ul class="actions">
				<li><a href="<?php echo RUTA; ?>/admin/nuevo.php" class="button special"><i class="fa fa-file-o" aria-hidden="true"></i> Nuevo Post</a></li>
				<li><a href="<?php echo RUTA; ?>/admin/cerrar.php" class="button"><i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesion</a></li>
			</ul>
			<?php foreach($posts as $post) : ?>
				<article class="feature left" style="background-color: white;">
					<div class="content" style="width: 100%;">
						<h4><a><?php echo $post['title'] ?></a></h4>
						<p><?php echo $post['extract'] ?></p>
						<ul class="actions small">
							<li>
								<a href="<?php echo RUTA; ?>/admin/editar.php?id=<?php echo $post['id'] ?>" class="button special small"><i class="fa fa-pencil" aria-hidden="true" style="margin-right: 5px"></i> Editar</a>
							</li>
							<li>
								<a href="<?php echo RUTA; ?>/post.php?id=<?php echo $post['id'] ?>" class="button alt small" target="_blank"><i class="fa fa-external-link" aria-hidden="true" style="margin-right: 5px"></i> Ver</a>
							</li>
							<li>
								<a href="<?php echo RUTA; ?>/admin/borrar.php?id=<?php echo $post['id'] ?>" class="button small"><i class="fa fa-trash-o" aria-hidden="true" style="margin-right: 5px"></i> Borrar</a>
							</li>
						</ul>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- Pagination -->
	<?php require '../views/pagination.view.php'; ?>

<!-- Footer -->
<?php require '../views/footer.view.php'; ?>