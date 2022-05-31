<?php /* Template Name: About Template */ ?>


<?php get_header(); 

$section1 = get_field('section_1'); 
$vision = get_field('our_vision'); 
$mision = get_field('our_mission'); 
$sba = get_field('sba'); 


?>

    <section class="abtsec">
         <div class="container">
             <p><?php echo the_field('sba_top'); ?></p>
             <div class="row align-items-center">
                 <div class="col-md-3">
                     <div>
                         <img src="https://insitechstaging.com/demo/precision/wp/wp-content/uploads/2021/11/sba.png" alt="">
                     </div>
                 </div>
                 <div class="col-md-7">
                    <p><?php echo the_field('sba_right'); ?></p>
                    </div>
                 <div class="col-md-2"></div>
             </div>
             <?php echo $sba['content']; ?>
         </div>
    </section>

    <section class="abtdesc">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
               <?php echo $section1['content']; ?>
                 
               </div>
               <div class="col-md-6">
                  <div>
                     <img src="<?php echo $section1['image']; ?>" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <!--
      <section>
         <div class="container-fluid pad-zero">
            <div class="row">
               <div class="col-md-6 pad-zero">
                  <div class="bluebox" style="background-image: url(<?php echo $vision['image']; ?>);">
                  <?php echo $vision['content']; ?>
                </div>
               </div>
               <div class="col-md-6 pad-zero">
                  <div class="bluebox yelowbox" style="background-image: url(<?php echo $mision['image']; ?>);">
                  
                  <?php echo $mision['content']; ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </section>
      -->
      
      <section class="teamsec" style="display:none;">
         <div class="container">
            <h4>Our Team</h4>
            <p>Vestibulum sed mauris sed augue condimentum mattis. Donec ac neque viverra, scelerisque lectus et, hendrerit velit. Donec a sem leo. Sed euismod in nibh at commodo. Morbi in consectetur libero. Morbi auctor finibus varius. Nullam tincidunt accumsan elit ut sodales. In interdum vehicula urna ut vestibulum.</p>
            
           <?php if( have_rows('team_repeater') ): ?>
            <ul class="teamslider">

   <?php  while( have_rows('team_repeater') ) : the_row(); ?>
               <li>
                  <div class="teambox">
                     <div class="teamimg">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="">
                     </div>
                     <h6><?php echo get_sub_field('name'); ?></h6>
                     <span><?php echo get_sub_field('designation'); ?></span>
                     <p><?php echo get_sub_field('content'); ?></p>
                  </div>
               </li>
               
               <?php endwhile; ?>
               
            </ul>
            
            <?php endif; ?>
         </div>
      </section>

      <section class="abtchat">
   <div class="container">
     <!-- <h4>Sed id dui sodales, tempus ipsum id, maximus libero. <br>Aenean placerat tellus sit am et ultricies egestas.</h4>
      <p>Vestibulum sed mauris sed augue condimentum mattis. Donec ac neque viverra, scelerisque lectus et, hendrerit <br>velit. Donec a sem leo. Sed euismod in nibh at commodo. Morbi in consectetur libero. Morb</p>
      --><a href="<?php echo site_url(); ?>/contact-us/">Talk to Us</a>
   </div>
</section>




<?php get_footer(); ?>