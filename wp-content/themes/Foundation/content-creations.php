<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<div id="post-<?php the_ID(); ?>" <?php post_class('small-4 columns end blogpost-entry'); ?>>
		<div class="entry-content">
			<div class="portof">
        <div style="position:relative;z-index:1;">
          <a href="<?php the_permalink(); ?>">
    				<?php
    				if ( has_post_thumbnail() ) { // dans la boucle
    				the_post_thumbnail();
    				}
    				?>
    			</a>
        </div>
			</div>
		</div>
	</div>
