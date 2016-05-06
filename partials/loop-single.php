<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">

	<?php $image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
	if ($image){
	?>

	<div class="blog-thumbnail columns" style="background: url('<?php echo $image;?>') no-repeat; background-size: cover; background-position: center center;">
	</div>
	<?php } else {?>
	<div class="blog-thumbnail columns" style="background: url('<?php echo get_template_directory_uri(); ?>/library/images/featured.png') no-repeat; background-size: cover; background-position: center center;">

	</div>
	<?php }?>
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>


   <p class="categories">This article is posted in: <?php the_category(', '); ?></p>
    </header> <!-- end article header -->
	 <?php get_template_part( 'partials/content', 'byline' ); ?>


    <section class="entry-content clearfix" itemprop="articleBody">
	<p id="edit-link"><?php edit_post_link('Edit Article'); ?></p>
		<?php the_content(); ?>


		<p class="tags"><?php the_tags(); ?></p>

	</section> <!-- end article section -->
    <?php get_template_part( 'partials/content', 'share' ); ?>
	<footer class="article-footer">


		</footer> <!-- end article footer -->

<?php
if ( is_user_logged_in() ) {	                                               comments_template();
}?>

</article> <!-- end article -->
