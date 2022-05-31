<?php /* Template Name: Careers Template */ ?>


<?php get_header(); ?>

 <div class="innerbaner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <h1><?php echo the_title(); ?></h1>
               </div>
            </div>
         </div>
      </div>
      
      
      
      
       <section class="carersec">
         <div class="container">
         <?php echo the_content(); ?>
            <h4>Open Positions</h4>
            <div class="carropt">
               <div class="row align-items-center">
               
               
               
               <?php

// Check rows exists.
if( have_rows('jobs') ):

    // Loop through rows.
    while( have_rows('jobs') ) : the_row(); ?>
                  <div class="col-md-9">
                     <h6><?php echo get_sub_field('title'); ?></h6>
                     <p><?php echo get_sub_field('description'); ?></p>
                  </div>
                  <div class="col-md-3">
                     <a href="#" class="popmainbtn">Apply Now</a>
                  </div>
                  
                  
                  <?php endwhile; endif; ?>
                 
               </div>
            </div>
            <h2>For further information about how to sole source an opportunity to Precision tech, please visit our <a href="<?php echo site_url(); ?>/contract/">Contracts page</a>.</h2>
         </div>
      </section>
      
      
      
      <div class="popmain">
   <h4>Application Form</h4>
   <a href="#" class="closePop">x</a>
   <form action="#">
      <div class="row">
         <div class="col-md-6">
            <div class="popfield">
               <input type="text" placeholder="First Name">
            </div>
         </div>
         <div class="col-md-6">
            <div class="popfield">
               <input type="text" placeholder="Last Name">
            </div>
         </div>
         <div class="col-md-6">
            <div class="popfield">
               <input type="number" placeholder="Phone Number">
            </div>
         </div>
         <div class="col-md-6">
            <div class="popfield">
               <input type="email" placeholder="Email">
            </div>
         </div>
         <div class="col-md-12">
            <div class="popfield">
               <input type="text" placeholder="Position" value= "1234" readonly>
            </div>
            <div class="popfield">
               <label>Attach your resume:</label>
               <input type="file">
            </div>
            <button type="submit">Submit</button>
         </div>
      </div>
   </form>
</div>
<div class="overlay"></div> 

<?php get_footer(); ?>