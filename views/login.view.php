<!-- Header -->
<?php require 'header.view.php'; ?>
	
	<!-- Form Login -->
	<section id="main" class="wrapper">
		<div class="container">
			<div class="row" style="display: flex; justify-content: center;">
				<section class="6u 12u$(xsmall)">
					<header class="major special">
						<h3>Iniciar Sesion</h3>
					</header>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
						<div class="row uniform 50%">
							<div class="12u$">
								<input type="text" name="username" id="username" value="" placeholder="Usuario" />
							</div>
							<div class="12u$">
								<input type="password" name="password" id="password" value="" placeholder="Contraseña" />
							</div>
							<div class="12u$">
								<ul class="actions">
									<li>
										<input type="submit" value="Iniciar Sesion" class="special">
									</li>
								</ul>
							</div>
							<p><?php echo $errores; ?></p>
						</div>
					</form>
				</section>
			</div>
		</div>
	</section>

<!-- Footer -->
<?php require 'footer.view.php'; ?>