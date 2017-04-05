<?php

	get_header();
?>

<div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">

        <!-- the loop -->
        <?php
        	if (have_posts()) {
        		while (have_posts()) {
        			the_post();
        			?>
        				<article class="post"> <!-- struktur för post -->
        					<header>
        					<div class="the-title"><h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a></h2></div>
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
                ?><h2 style="text-align: center;" class="col-md-12"><?php
        		_e("Det finns inga inlägg" ,"details"); ?></h2><?php
        	}
        ?>

      </div> <!-- col-md-8 -->
    </div> <!-- row -->
  </div> <!-- container -->