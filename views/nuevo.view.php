<!-- Header	 -->
<?php require '../views/header.view.php'; ?>

	<!-- Content form new post -->
	<section id="main" class="wrapper" style="background-color: #EEE; color: #777;">
		<div class="inner">
			<article class="feature left" style="background-color: white;">
				<div class="content" style="width: 100%;">
					<h2>Nuevo Post</h2>
					<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<div class="row uniform 50%">
							<div class="12u$">
								<input type="text" name="title" id="title" value="" placeholder="Titulo" />
							</div>
							<div class="12u$">
								<input type="text" name="extract" id="extract" value="" placeholder="Breve descripción" />
							</div>
							<div class="12u$">
								<textarea name="text" id="text" placeholder="Contenido de post..." rows="6"></textarea>
							</div>
							<div class="12u1">
								<input type="file" id="image_post" name="image_post">
							</div>
							<div class="12u$">
								<ul class="actions">
									<li>
										<input type="submit" value="Crear Post" class="special">
									</li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</article>
		</div>
	</section>

<!-- Footer -->
<?php require '../views/footer.view.php'; ?>