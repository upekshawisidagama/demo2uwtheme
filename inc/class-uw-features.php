<?php

class UW_Features{
    
    function __construct(){
        $args = array(
                'width'         => 1000,
                'flex-height'    => true,
                'height'        => 300,
                'default-image' => get_template_directory_uri() . '/images/banner.png',
        );
        add_theme_support( 'custom-header', $args );
    }   
    
    /**
     * Displays navigation to next/previous pages when applicable.
     *
     * @since UW Theme 1.0
     */
    function uwtheme_content_nav( $html_id ) {
            global $wp_query;

            $html_id = esc_attr( $html_id );

            if ( $wp_query->max_num_pages > 1 ) : ?>
                    <nav id="<?php echo $html_id; ?>" class="navigation">
                            <h3 class="assistive-text"><?php _e( 'Post navigation', 'uwtheme' ); ?></h3>
                            <div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'uwtheme' ) ); ?></div>
                            <div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'uwtheme' ) ); ?></div>
                    </nav><!-- #<?php echo $html_id; ?> .navigation -->
            <?php endif;
    }    
}

?>
