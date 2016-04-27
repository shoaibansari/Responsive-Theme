<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrao_to_WordPress
 */

?>

	<?php /*?></div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootstrao-to-wordpress' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'bootstrao-to-wordpress' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'bootstrao-to-wordpress' ), 'bootstrao-to-wordpress', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php */?>

<?php wp_footer(); ?>

<!--SIGN UP SETION
     ===========================================-->
     <section id="signup" data-type="background" data-speed="4">
       <div class="container signup-cntr">
         <div class="row">
           <div class="col-sm-6 col-sm-offset-3">
              <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
              <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
           </div><!--col-->
         </div><!--row-->
       </div><!--container-->
     </section><!--signup-->
    <!-- style="margin-left:265px;-->
    
    
     <!--FOOTER
     ===========================================-->
     <footer>
       <div class="container">
         <div class="col-sm-3">
           <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo (1).png" alt="Bootstrao to Wordpress"></a></p>
         </div><!--col-->
         <div class="col-sm-6">
           <?php
				 wp_nav_menu( array(
						   
				'theme_location'  => 'footer',
				'container'       => 'nav',
				'menu_class'      => 'list-unstyled list-inline',
				
				));
			?>
         </div><!--col-->
         <div class="col-sm-3">
           <p class="pull-right"><?php bloginfo('name'); ?>&copy; <?php echo date('Y'); ?> <?php the_author_link(); ?></p>
         </div><!--col-->
       </div><!--container-->
     </footer>
     
     <!--MODAl
     ===========================================-->
     <div class="modal fade" id="myModal">
       <div class="modal-dialog">
         <div class="modal-content">
         
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
               <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing list</h4>
            </div><!-- modal-header -->
            
            <div class="modal-body">
               <p>Simple enter your name and email! As a thank you for joning us, 
               we're going to give you one of our best-selling courses, <em>for free</em></p>
               
               <form class="form-inline" role="form">
               
                  <div class="form-group">
                      <label class="sr-only" for="subscribe-name">Your first name</label>
                      <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                  </div><!-- form-group -->
                  
                  <div class="form-group">
                      <label class="sr-only" for="subscribe-email">and your email</label>
                      <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                  </div><!-- form-group -->
                  <input type="submit" class="btn btn-danger" value="Subscribe!">
               </form>
               <hr>
               <p><small>By providing your email you content to receiving occasional promotional email &amp; newsletters. <br>No Spam. just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
            </div><!-- modal-body -->
         
         </div><!-- modal-content -->
       </div><!-- modal-dialog -->
     </div><!-- modal -->







<!--BOOTSTRAP CORE JS
     ===========================================-->
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
     
     <script>
	 //$(function(){
//		 
//		 //Cahe the window object
//		 var $window = $(window);
//		 
//		 //parallax background effect
//		 $('section[data-type="background"]').each(function() {
//            
//			var $bgobj = $(this); //assigning the object
//			$(window).scroll(function(){
//			
//			  //scroll the background at var speed
//			  // the yPos is a negative value bcoz we're scrolling it UP!
//			  var yPos = -($window.scrollTop() / $bgobj.data('speed'));
//			  
//			  //put together our final position
//			  var cords = '50%' + yPos + 'px';
//				
//			  //Move the background
//			  $bgobj.css({ backgroundPosition: cords});
//			  
//		    });//end window scroll
//        });
//		 
//	 });
	 </script>


</body>
</html>
