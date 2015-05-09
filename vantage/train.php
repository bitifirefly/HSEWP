<html>
<head>
 
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
<?php
/**
 *
 * Template Name:国际急救培训
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <?php include(TEMPLATEPATH . '/traintplt.php'); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'blank', 'page' ); ?>
            <?php endwhile; // end of the loop. ?>

        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->

<?php get_footer();?>
</body>
</html>