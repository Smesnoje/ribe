<?php /* Template Name: Front */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">
			<?php 
			// list sections
				$posts = get_posts(array(
					'posts_per_page'	=> -1,
					'post_type'			=> 'section',					
				));
			?>
			<?php foreach( $posts as $post ): 
					setup_postdata( $post );?>
					<?php $type = get_field('type'); ?>
					<?php include 'sections/'.$type.'.php';?>
			<?php endforeach; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
