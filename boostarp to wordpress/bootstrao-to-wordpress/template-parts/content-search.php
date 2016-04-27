<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrao_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}
			?>

	    <?php if ( 'post' == get_post_type() ) : ?> 
		  
          <div class="post-details">
             <i class="fa fa-user" style="padding-right:2px"></i><?php the_author(); ?>
             <i class="fa fa-clock-o" style="padding-right:2px"></i><time><?php the_date(); ?></time>
             <i class="fa fa-folder"></i> <?php the_category( ', ' ); ?>
             <i class="fa fa-tag"></i> <?php the_tags(); ?>
                      
             <div class="post-comments-badge">
                  <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number( 0, 1, '%'); ?></a>
             </div><!-- post-comments-badge -->
             
               <?php edit_post_link('Edit', '<i class="fa fa-pencil" style="padding-right:2px"></i>',''); ?>
                     
         </div><!-- post-details -->
          
		<?php endif; ?>
	</header><!-- .entry-header -->
      
      <?php if( has_post_thumbnail() ){ // check for feature image?>
          <div class="post-image">
              <?php the_post_thumbnail(); ?>
              <!--<img src="img/hero-bg.jpg" alt="post-image">-->
          </div><!-- post-image -->
      <?php }?>
      
        <div class="post-excerpt">
            <?php the_excerpt(); ?>     
        </div><!-- post-excerpt -->
	
</article><!-- #post-## -->
