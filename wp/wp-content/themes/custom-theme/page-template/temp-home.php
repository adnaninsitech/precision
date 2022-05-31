<?php /* Template Name: Home Template */ ?>

<?php get_header(); 

$banner = get_field('banner'); 
$section1 = get_field('section_1'); 
$section2 = get_field('section_2'); 
$section3 = get_field('section_3'); 
$section4 = get_field('section_4'); 


?>



<div class="mainBanner" style="background-image: url(<?php echo $banner['image']; ?>);">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="wow fadeInLeft" data-wow-delay="0.4s">
                     <?php echo $banner['content']; ?>
                     <a href="<?php echo $banner['link_1']; ?>" class="mn-btn">Read More</a>
                     <a href="<?php echo $banner['link_2']; ?>" class="mn-btn">Contact Us</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
<section class="aboutsec">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="aboutwrap">
                     <div class="wow fadeInLeft" data-wow-delay="0.3s">
                        <img src="<?php echo $section1['image']; ?>" alt="">
                     </div>
                     <div class="aboutbar wow fadeInLeft" data-wow-delay="0.8s">
                        <?php echo $section1['title']; ?>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="wow fadeInLeft" data-wow-delay="0.5s">
                   <?php echo $section1['content']; ?>
                     <a href=" <?php echo $section1['link']; ?>" class="mn-btn">Know More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
<section class="videosec" style="background-image: url(<?php echo $section2['bg_image']; ?>);">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-5">
                  <div class="wow fadeInLeft" data-wow-delay="0.4s">
                 <?php echo $section2['content']; ?>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="vidbox wow fadeInUp" data-wow-delay="0.4s">
                     <img src="<?php echo $section2['thumbnail']; ?>" alt="">
                     <a href="<?php echo $section2['video']; ?>" class="vidbtn" data-fancybox="media"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vidbtn.png" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </section>

<section class="servicesec pad-sec">
         <div class="container">
            <h4 class="wow fadeInDown" data-wow-delay="0.4s">our services</h4>
            <div class="row">
            <?php  $args = array( 'post_type' => 'services','posts_per_page' => '-1' , 'order' => 'desc'); $index_query = new WP_Query($args); 
                  while ($index_query->have_posts()) : $index_query->the_post(); ?>
            
               <div class="col-md-4 pad-zero">
				   <a href="<?php echo site_url(); ?>/services">
					  <div class="servbox wow fadeInLeft" data-wow-delay="0.5s" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
						 <div>
							<h6><?php echo the_title(); ?></h6>
							<?php echo the_content(); ?>
						 </div>
					  </div>
				   </a>
               </div>
               
               <?php endwhile; wp_reset_query(); ?>
               
            </div>
            <a href="<?php echo site_url(); ?>/services" class="mn-btn wow fadeInUp" data-wow-delay="0.9s">Know More</a>
         </div>
      </section>
    
<section class="faqsec pad-sec">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="aboutwrap">
                     <div class="wow fadeInLeft" data-wow-delay="0.3s">
                        <img src="<?php echo $section3['faq_image']; ?>" alt="">
                     </div>
                     <div class="aboutbar wow fadeInLeft" data-wow-delay="0.6s">
                        <h5>HOW WE CAN HELP YOU? <span>Frequently Asked Questions</span></h5>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="faqwrap wow fadeInLeft" data-wow-delay="0.4s">
                     <ul>
                     <?php  while( have_rows('section_3') ) : the_row(); ?>
                      <?php $x=1; while( have_rows('faq_repeater') ) : the_row(); ?>
                      
                        <li class="<?php if($x==1){echo 'active' ;} else{echo''; }   ?>">
                           <div class="faqbox">
                              <h5><?php echo get_sub_field('question'); ?></h5>
                              <div class="faqopt">
                                 <p><?php echo get_sub_field('answer'); ?></p>
                              </div>
                           </div>
                        </li>
                        
                        <?php $x++; endwhile; ?>
                        <?php endwhile; ?>
                        
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
<section class="callbacksec pad-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-callback.jpg);">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="wow fadeInLeft" data-wow-delay="0.4s">
            <?php echo $section4['content']; ?>
               </div>
         </div>
         <div class="col-md-6">
            <div class="callbackform wow fadeInRight" data-wow-delay="0.4s">
               <h4>Request a Call Back</h4>
            <?php echo the_content(); ?><!--<form action="#">
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

<!--<section class="latestsec pad-sec">
         <div class="container">
            <h4 class="wow fadeInDown" data-wow-delay="0.4s">Latest News</h4>
            <p class="wow fadeInDown" data-wow-delay="0.5s">Lorem Ipsum passages, and more recently with desktop publishing including versions of It is a long.....</p>
            <div class="row newsresp wow fadeInDown" data-wow-delay="0.6s">
            
            
            
            <?php  $args = array( 'post_type' => 'news','posts_per_page' => '-1' , 'order' => 'asc'); $index_query = new WP_Query($args); 
                  while ($index_query->have_posts()) : $index_query->the_post(); ?>
                  
                  
               <div class="col-md-4">
                  <div class="latesbox">
                     <div class="latesimg">
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                     </div>
                     <div class="latescon">
                        <a href="<?php echo the_permalink(); ?>"><h6><?php echo the_title(); ?></h6></a>
                        <ul>
                           <li><p>Posted by:</p></li>
                           <li><a href="#"><span><i class="fas fa-user"></i></span><?php the_author_meta( 'display_name' ); ?></a></li>
                           <li><a href="#"><span><i class="fas fa-comment"></i></span> Comment</a></li>
                           <li><a href="#"><span><i class="fas fa-thumbs-up"></i></span> Like</a></li>
                        </ul>
                        <?php wpautop(the_content()); ?>
                     </div>
                  </div>
               </div>
               
               <?php endwhile; ?>
               
               
            </div>
         </div>
      </section>-->


<?php get_footer(); ?>