<article class="page"> <!-- struktur för sida -->
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<header>
					<h1 class="the-title"><?php the_title(); ?></h1>
				</header>
			</div> <!-- col-md-10 offset-md-1 -->
		</div> <!-- row -->
	</div><!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-4">
				<?php the_content(); ?>
			</div> <!-- col-md-10 offset-md-1 -->
		</div> <!-- row -->
	</div> <!-- container -->
</article>