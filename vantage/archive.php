<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<header class="page-header">
			<h1 id="page-title"><?php echo vantage_get_archive_title() ?></h1>
			<?php
			if ( is_category() ) {
				// show an optional category description
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo apply_filters( 'vantage_category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

			}
			elseif ( is_tag() ) {
				// show an optional tag description
				$tag_description = tag_description();
				if ( ! empty( $tag_description ) )
					echo apply_filters( 'vantage_tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
			}
			?>
		</header><!-- .page-header -->
    
    <?php /*指定不同分类目录用不同模板*/ ?>
		<?php
		if(is_category(array(8,14))) {
    include(TEMPLATEPATH . '/Neboshtplt.php');
    }elseif(is_category(array(9,15))) {
    include(TEMPLATEPATH . '/Opitotplt.php');
    }elseif(is_category(array(10,16))) {
    include(TEMPLATEPATH . '/traintplt.php');
    }elseif(is_category(array(11,17))) {
    include(TEMPLATEPATH . '/coursetplt.php');
    }
		?>
    
    
		<?php get_template_part( 'loops/loop', siteorigin_setting('blog_archive_layout') ) ?>

	</div><!-- #content .site-content -->
</section><!-- #primary .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>