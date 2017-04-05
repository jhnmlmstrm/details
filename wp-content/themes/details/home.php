
<?php
  get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-9">

      <!-- the loop -->
      <?php
      	if (have_posts()) {
      		while (have_posts()) {
      			the_post();
      			?>
      				<article class="post"> <!-- struktur för post -->
      					<header>
                  <div class="ml-auto mr-auto bild" style="background-image: url(<?php the_post_thumbnail_url('post-featured-image'); ?>);"></div>
      						<div class="the-title"><h1><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h1></div>
      					</header>
      					<main class="the-content">
      						<?php the_excerpt(); ?>
      					</main>
                <hr>
      				</article>
      			<?php
      		}
      	}else {
      		/* inget att visa */
      		e_("Det finns inga inlägg" ,"details");
      	}
      ?>

    </div> <!-- col-md-9 -->
    <div class="col-md-3">
      <?php
      	get_sidebar();
      ?>
    </div> <!-- col-md-3 -->
  </div> <!-- row -->
</div> <!-- container -->

<?php
  get_footer();
?>