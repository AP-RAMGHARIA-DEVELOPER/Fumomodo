<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package e-comerce-theme
 */

?>


  <div class="grid-x grid-margin-x my_footer">
    <div class="cell small-12">
	<footer id="colophon" class="site-footer">

	<div class="grid-x fot_links">
  <div class="cell large-auto">
	  
  <ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Milk</li>
</ul>
  </div>
  <div class="cell large-auto">
  
  <ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Milk</li>
</ul>
  </div>
  <div class="cell large-auto">
  
  <ul>
  <li>Coffee</li>
  <li>Tea</li>
  <li>Milk</li>
  <li>Milk</li>
</ul>
  </div>
  
  
</div>
		</div>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="grid-x grid-margin-x third">
<div class="cell small-12 ">
<?php wp_footer(); ?>
	</div>
	<div class="cell small-12 ">
<div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'e-comercetheme' ) ); ?>">
                <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'copyright@2021 %s', 'wordpress2021' ), '' );
                ?>
            </a>
            <span class="sep">  </span>
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( ' %1$s  %2$s', 'e-comercetheme' ), '', '<a href="http://underscores.me/"></a>' );
                ?>
		</div><!-- .site-info -->
</div>
</div>
</body>
</html>
