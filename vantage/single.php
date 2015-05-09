<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

	<?php /*指定不同分类目录下文章用不同模板*/ ?>
		<?php
		if(in_category(array(8,14))) {
    include(TEMPLATEPATH . '/Neboshtplt.php');
    }elseif(in_category(array(9,15))) {
    include(TEMPLATEPATH . '/Opitotplt.php');
    }elseif(in_category(array(10,16))) {
    include(TEMPLATEPATH . '/traintplt.php');
    }elseif(in_category(array(11,17))) {
    include(TEMPLATEPATH . '/coursetplt.php');
    }
		?>
    
    <?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php if( siteorigin_setting('navigation_post_nav') ) vantage_content_nav( 'nav-below' ); ?>

		<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
			<?php comments_template( '', true ); ?>
		<?php endif; ?>

	<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>