
<?php get_header(); ?>



<article class="bio-directors">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>
			<p class="text-bio">
				<?php the_content(); ?>
			</p>
			<?php the_title('<h3 class="title-name">','</h3>'); ?>
			<?php
		endwhile;
	else: ?>
	<?php endif; ?>
</article>



<?php get_footer(); ?>
