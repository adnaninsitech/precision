<?php /* Template Name: News Page
Template Post Type: news*/
?>
<?php get_header(); ?>



    <div class="innerbaner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/bg-news.jpg);">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <h1><?php echo the_title(); ?></h1>
               </div>
            </div>
         </div>
      </div>

      <section class="newsec">
         <div class="container">
            <div class="servbull">
               <?php echo the_field('content'); ?>
            </div>
            <div class="row">
               <div class="col-md-8">
                  <div class="newsimg">
                     <img src="<?php echo the_field('bg_image'); ?>" alt="">
                     <span><?php echo get_the_date('F j, Y'); ?></span>
                  </div>
                  <?php echo the_field('inner_content'); ?>
                   </div>
               <div class="col-md-4">
                  <div class="newsearch">
                     <h5>Search</h5>
                     <form action="#">
                        <input type="text" placeholder="Your keyword">
                        <button type="submit"><i class="far fa-search"></i></button>
                     </form>
                  </div>
                  <div class="latestpost">
                     <div class="latesthead">
                        <h5>Latest Posts</h5>
                     </div>
                     
                     <?php  $args = array( 'post_type' => 'news','posts_per_page' => '-1' , 'order' => 'desc'); $index_query = new WP_Query($args); 
                  while ($index_query->have_posts()) : $index_query->the_post(); ?>
                     <div class="latestbox">
                        <div class="latesimg2"><img src="<?php echo the_post_thumbnail_url();  ?>" alt=""></div>
                        <div><a href="#"><?php echo the_title(); ?></a></div>
                     </div>
                     
                     <?php endwhile; wp_reset_query(); ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>




<?php get_footer(); ?>
