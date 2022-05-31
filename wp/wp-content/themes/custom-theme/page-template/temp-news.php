<?php /* Template Name: News Template */ ?>

<?php get_header(); ?>
<section class="techblogs">
         <div class="container">
         
         
            <div class="row newsresp">
            
            
            <?php  $args = array( 'post_type' => 'news','posts_per_page' => '-1' , 'order' => 'desc'); $index_query = new WP_Query($args); 
                  while ($index_query->have_posts()) : $index_query->the_post(); ?>
                  
               <div class="col-md-4">
                  <div class="techbox">
                     <div class="techimg"><img src="<?php echo the_post_thumbnail_url(); ?>" alt=""></div>
                     <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
                     <?php echo the_content(); ?>
                  </div>
               </div>
               
               <?php endwhile;  wp_reset_query(); ?>
               
            </div>
         </div>
      </section>
      
      
      
      
      <section class="callbacksec pad-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-callback.jpg);">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="wow fadeInLeft" data-wow-delay="0.4s">
             <h4>Sed id dui sodales, tempus ipsum id, maximus libero. Aenean placerat tellus sit amet ultricies egestas.</h4>
               <p>We provide enterprise-wide support to diverse state, federal and commercial organizations in the areas of Systems Architecture, System Engineering, Integration, Systems and Internet Security and Testing. We also provide consulting support in the evaluation.</p>
            
               </div>
         </div>
         <div class="col-md-6">
            <div class="callbackform wow fadeInRight" data-wow-delay="0.4s">
               <h4>Request a Call Back</h4>
               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit...</p>
               <!--<form action="#">
                  <div class="row">
                     <div class="col-md-6 pad-r-zero">
                        <div class="field">
                           <input type="text" placeholder="Name">
                        </div>
                        <div class="field">
                           <input type="number" placeholder="Phone">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="field">
                           <input type="email" placeholder="Email">
                        </div>
                        <div class="field">
                           <input type="text" placeholder="Subject">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="field">
                           <textarea placeholder="Message"></textarea>
                        </div>
                        <button type="submit">Submit Now!</button>
                     </div>
                  </div>
               </form>-->
               
               <?php echo do_shortcode('[contact-form-7 id="61" title="Contact form 1"]'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>