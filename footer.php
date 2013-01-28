<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package UW
 * @subpackage UW Theme
 * @since UW Theme 1.0
 */
?>
	</div><!-- #main -->
	<footer id="colophon" role="contentinfo">
            
            <div class="row">
              <div class="four columns">
                <div class="panel">
                  <h5>This is a regular panel.</h5>
                  <p>It has an easy to override visual style, and is appropriately subdued.</p>
                </div>
              </div>
              <div class="four columns">
                <div class="panel">
                  <h5>This is a callout panel.</h5>
                  <p>Content...</p>
                </div>
              </div>
              <div class="four columns">
                <div class="panel">
                  <h5>This is a callout panel.</h5>
                  <p>Content...</p>
                </div>
              </div>    
            </div>            
            
            <div class="site-info row">
              <div class="twelve columns">
                <div class="panel callout radius">                
                    <?php do_action( 'uwtheme_credits' ); ?>
                    <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'uwtheme' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'uwtheme' ); ?>"><?php printf( __( 'Proudly powered by %s', 'uwtheme' ), 'WordPress' ); ?></a>
                </div>
              </div>    
            </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>