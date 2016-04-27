<?php
/* Template Name: Resources Page */
	 
get_header();

$thumbnail = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>
    
    <!--FEATURE IMAGE
    ===========================================-->
     <?php if( has_post_thumbnail() ) { ?>
        
        <section class="feature-image" style="background: url('<?php echo $thumbnail; ?>') no-repeat fixed; background-size:cover;" data-type="background" data-speed="2">
         <h1 class="page-title"><?php the_title(); ?></h1>
        </section>
        
     <?php } else {?>   
        
        <section class="feature-image feature-image-default" data-type="background" data-speed="2">
         <h1 class="page-title"><?php the_title(); ?></h1>
        </section>
      
	  <?php }?>
    
    <!--MAIN CONTENT
     ===========================================-->
      <div class="container">
        <div class="row" id="primary">
          
          <div id="content" class="col-sm-12">
             
             <section class="main-content">
                
                <?php while( have_posts() ) : the_post();?>
                
                  <?php the_content(); ?>
                
                <?php endwhile; //end of the loop ?>
                
                <?php $loop = new WP_Query( array( 'post_type' => 'resource','orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                
                <hr>
                
                <div class="resource-row clearfix">
                
                 
                 <?php while( $loop->have_posts() ) : $loop->the_post() ?>
                    
                    <?php
					    $resource_image  = get_field('resource_image');
                        $resource_url    = get_field('resource_url');
                        $button_text     = get_field('button_text');
					?>
                    
                    <div class="resource">
                     
                     <img src="<?php echo $resource_image[url]; ?>" alt=" <?php echo $resource_image[alt]; ?>">
                      
                     
                     <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
                     
                         <?php the_content(); ?>
                     
                     <?php if( !empty($button_text) ) : ?>
                     
                       <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                     
                     <?php endif;?>
                     
                  </div><!-- resource -->
                   
                 
                 <?php endwhile; ?>
                   
                   
                  <!--<div class="resource">
                     <img src="img/coda_logo.jpg" alt="Coda 2">
                     
                     <h3><a href="https://panic.com/coda/">Coda 2</a></h3>
                     
                     <p>If you’re serious about coding, or you want to start out with a solid tool to code with, I strongly recommend Coda 2 for Mac. A beautiful User Interface with tabbed navigation, a super sidebar, and a simple layout. The features are outrageous and extensive, with code folding, smart complete, auto indentation, GIT integration, a built-in terminal, iCloud support — to name a few. The features seem to be endless.</p>
                     <p>I use Coda 2 for all of my courses & tutorials, and if you decide to use Coda 2 as your editor of choice, it would greatly benefit you when taking my courses. The price of the editor weighs in at $75, but it’s worth every penny — in my honest opinion.</p>
                     
                     <a href="#" class="btn btn-success">Check out Coda 2</a>
                     
                  </div>--><!-- resource -->
                  
                  <!--<div class="resource">
                     <img src="img/dropbox-logo.jpg" alt="DropBox">
                     
                     <h3><a href="www.dropbox.com">Dropbox</a></h3>
                     
                     <p>This tool should go without saying. But if I have to explain — you <strong>need</strong> this tool. I use it 24/7 — literally. Dropbox is where I store my personal &amp; business related data. It’s accessible anywhere, and regularly backs up my important information.</p>
                     <p>Because my data is accessible anywhere, Dropbox allows me to work on a client project at home, on the bus, in a coffee shop, or at a friend’s house. It’s truly a gem of a tool, and I think you’ll believe me.</p>
                     
                     <a href="#" class="btn btn-success">Try Dropbox for free</a>
                     
                  </div>--><!-- resource -->
                
                </div><!-- resources-row -->
                
             </section><!-- main-content -->
             
          </div><!-- content -->
        
        </div><!-- row -->
      </div><!-- container -->

<?php get_footer(); ?>   