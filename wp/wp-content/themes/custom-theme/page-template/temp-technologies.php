<?php /* Template Name: Technologies Template */ ?>

<?php get_header(); 

$section1 = get_field('top_content'); 

?>

<section class="techdessec">
         <div class="container">
            <div class="servbull">
            <?php echo the_field('top_content');  ?>
               
            </div>
            <div class="row align-items-end">
               <div class="col-md-6">
               <?php echo the_field('left_content'); ?>
                 
               </div>
               <div class="col-md-6">
               <?php echo the_field('right_content'); ?>
                  
               </div>
            </div>
         </div>
      </section>
      
<section class="techstripe">
         <div class="container">
            <?php echo the_field('hero_banner_content'); ?>
         </div>
  </section>   
  
<section class="techblogs">
         <div class="container">
         
         <?php if( have_rows('logos') ): ?>
            <ul>
            <?php while( have_rows('logos') ) : the_row(); ?>
               <li><a href="#"><img src="<?php echo the_sub_field('images'); ?>" alt=""></a></li>
             <?php endwhile; ?>  
            </ul>
            
            <?php endif; ?>
            <div class="row">
            
            
            <?php  $args = array( 'post_type' => 'news','posts_per_page' => '3' , 'order' => 'desc'); $index_query = new WP_Query($args); 
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
      
<div class="techlive">
  <section class="abtchat">
   <div class="container">
      <?php echo the_field('bottom_content'); ?>
      <a href="#">Talk to Us</a>
   </div>
 </section>     
</div>
  
  



<?php get_footer(); ?>