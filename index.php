<?php get_header(); ?>

<h1>index.php template</h1>

<div class="smoothBaby smooth-fadeInDown">

	<?php // Uncomment to use Featured Image.
	   // get_template_part( 'template-parts/featured-image' );
	   // echo "Doing featured image";
	?>

	<?php // Uncomment to use Banner Slider
		$banner_slide_tag = 'homepage';
		include( locate_template( 'parts/flickity-banner.php' ) );
	?>
</div>

<div id="content">

	<div id="inner-content" class="row">

	    <main id="main" class="large-8 medium-8 columns smoothBaby smooth-fadeInLeft" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive' ); ?>

			<?php endwhile; ?>

				<?php joints_page_navi(); ?>

			<?php else : ?>

				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>

	    </main> <!-- end #main -->

	    <?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
