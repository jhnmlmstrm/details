<article class="post with-featured-image"> <!-- struktur för inlägg -->
	<div class="featured-image ml-auto mr-auto" style="background-image: url(<?php the_post_thumbnail_url('post-featured-image'); ?>);"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<header>
					<h1 class="the-title"><?php the_title(); ?></h1>
					<h4 class="the_meta">
						<span class="the-date"><?php the_date(); ?></span>
						<?php _e("Skriven av", "details"); ?><span class="the-author"><?php the_author(); ?></span>
					</h4>
				</header>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<main class="the-content"><?php the_content(); ?>
				</main>
			</div> <!-- col-md-10 offset-md-1 -->
		</div> <!-- row -->
	</div> <!-- container -->
</article>