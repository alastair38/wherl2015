<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

	<div id="content" class="single-blog">

		<div id="inner-content" class="clearfix">

			<div id="main" class="large-8 small-12 columns first clearfix" role="main">
				<header class="article-header">
		<h1 class="page-title"><?php wp_title(''); ?></h1>

	</header> <!-- end article header -->

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'partials/loop', 'archive' ); ?>





					<?php endwhile; ?>

							<?php if (function_exists('joints_page_navi')) { ?>
									<?php joints_page_navi(); ?>
							<?php } else { ?>

									<nav class="wp-prev-next">
											<ul class="clearfix">
												<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "jointstheme")) ?></li>
												<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "jointstheme")) ?></li>
											</ul>
									</nav>
							<?php } ?>

					<?php else : ?>



					<?php endif; ?>
			</div> <!-- end #main -->

			 <div id="single-latest" class="large-4 small-12 columns" role="aside">


<?php


										$newsitems = get_posts(array(
												'post_type' => 'news',
												'posts_per_page' => 3
										));

										?>

										<?php if( $newsitems ): ?>
										<h4>Latest News</h4>
										<?php foreach( $newsitems as $newsitem ): ?>

										<div>
												<h6><a href="<?php echo get_the_permalink( $newsitem->ID ); ?>"><?php echo get_the_title( $newsitem->ID ); ?></a></h6>
									 </div>

<?php endforeach; ?>





				<?php endif; ?>

				 <?php


										$findings = get_posts(array(
												'post_type' => 'finding',
												'posts_per_page' => 3
										));

										?>

										<?php if( $findings ): ?>
									 <hr>
									 <h4>Latest Findings</h4>
										<?php foreach( $findings as $finding ): ?>


										 <div>
												 <h6><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Findings' ) ) ); ?>"><?php echo get_the_title( $finding->ID ); ?></a></h6>
									 </div>

<?php endforeach; ?>

<?php endif; ?>

	 <?php


										$events = get_posts(array(
												'post_type' => 'events',
												'posts_per_page' => 3
										));

										?>

										<?php if( $events ): ?>
										<hr>
										<h4>Latest Events</h4>
										<?php foreach( $events as $event ): ?>

										<div>
												<h6><a href="<?php echo get_the_permalink( $event->ID ); ?>"><?php echo get_the_title( $event->ID ); ?></a></h6>
									 </div>

<?php endforeach; ?>





				<?php endif; ?>

	 <?php get_sidebar(); ?>


</div>


		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
