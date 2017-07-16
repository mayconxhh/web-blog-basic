<?php 
	$number_pages = number_pages($blog_config['post_for_page'], $conection);
 ?>
<section class="main" style="background-color: #EEE;">
	<div class="container 12u1">
		<ul class="actions special" style="margin: 0; padding-bottom: 2em; text-align: center;">
		<?php if (current_page() === 1 || current_page() === 0): ?>
			<li><a class="button fit disabled">&laquo; Anterior</a></li>			
		<?php else: ?>
			<li><a class="button fit" href="index.php?p=<?php echo current_page() - 1; ?>">&laquo; Anterior</a></li>
		<?php endif; ?>
		<?php if (current_page() === (int)$number_pages): ?>
			<li><a class="button fit disabled" >Siguiente &raquo;</a></li>
		<?php else: ?>
			<li><a class="button fit" href="index.php?p=<?php echo current_page() + 1; ?>">Siguiente &raquo;</a></li>
		<?php endif; ?>
		</ul>
	</div>
</section>