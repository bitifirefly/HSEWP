
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-main">

        <?php do_action('vantage_entry_main_top') ?>

        <div class="entry-content">
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'vantage' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'vantage' ), 'after' => '</div>' ) ); ?>
        </div><!-- .entry-content -->

        <?php do_action('vantage_entry_main_bottom') ?>

    </div>

</article><!-- #post-<?php the_ID(); ?> -->