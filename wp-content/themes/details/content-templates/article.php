<article class="post"> <!-- struktur för inlägg -->
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<header>
					<h1 class="the-title"><?php the_title(); ?></h1>
					<h4 class="the_meta">
						<span class="the-date"><?php the_date(); ?></span>
						skriven av <span class="the-author"><?php the_author(); ?></span>
					</h4>
				</header>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<main class="the-content">
					<?php the_content(); ?>
				</main>
			</div> <!-- col-md-10 offset-md-1 -->
		</div> <!-- row -->
	</div> <!-- container -->
</article>