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

<?php 

$recipe_args = array(

    'post_type'=>'sampletheme_recipe',
    'posts_per_page'=>3,
)

    $recipe_query = new WP_Query($recipe_args);


    if($recipe_query->have_posts()){
        while($recipe_query->have_posts()){
            $recipe_query->the_post()
       
        ?>
       <h2><?php the_title();?></h2>
       <?php
        
        
        }
    }
?>


  <div class="grid-x grid-margin-x my_footer">
    <div class="cell small-12">
	<footer id="colophon" class="site-footer">

	<div class="grid-x fot_links">
  <div class="cell large-auto">
  <h3>home</h3>
  <ul>
  <li>Customer Care</li>
  <li>Food Safety</li>
  <li>Returns</li>
  <li>Contact Us</li>
</ul>
  </div>
  <div class="cell large-auto">
  <h3>home</h3>
  <ul>
  <li>Community</li>
  <li>Newsroom</li>
  <li>Health&Safety</li>
  <li>Teams Member</li>
</ul>
  </div>
  <div class="cell large-auto">
  <h3>home</h3>
  <ul>
  <li>Customer Care</li>
  <li>Food Safety</li>
  <li>Returns</li>
  <li>Accessibilty</li>
</ul>
  </div>
  
  <div class="cell large-auto">
  <h3>home</h3>
  <ul>
  <li>Newsroom</li>
  <li>Food Safety</li>
  <li>Team Member</li>
  <li>Returns</li>
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
