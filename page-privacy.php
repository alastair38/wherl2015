<?php
/*
Template Name: Cookies + Privacy
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="row clearfix">

				    <div id="main" class="large-12 medium-12 columns" role="main">



                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <?php get_template_part( 'partials/loop', 'home' ); ?>

                            <?php endwhile; else : ?>

                            <?php wp_reset_postdata(); ?>

                            <?php endif; ?>


    				</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
