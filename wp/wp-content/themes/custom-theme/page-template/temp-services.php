<?php /* Template Name: Services Template */ ?>

<?php get_header(); 

$section1 = get_field('group_1'); 
$section2 = get_field('group_2'); 
$section3 = get_field('group_3'); 

?>

    <section class="servspara">
        <div class="container">
        <?php echo the_content(); ?>
             </div>
    </section>
    
    <section class="servicewrp servicewrp3">
         <div class="container">
            <div class="servbull">
               <?php echo the_field('top_content'); ?>
            </div>
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="servccon">
                  <?php echo $section1['content']; ?>
                     
                     <a href="<?php echo site_url(); ?>/contact-us/">Talk to Us</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="text-right">
                     <img src=" <?php echo $section1['image']; ?>" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      <section class="servicewrp servicewrp1">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="text-left">
                     <img src="<?php echo $section2['image']; ?>" alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="servccon">
                  <?php echo $section2['content']; ?>
                     
                     <!--<a href="<?php echo site_url(); ?>/contact-us/">Talk to Us</a>-->
                  </div>
               </div>
            </div>
         </div>
      </section>
      
      
      <!--<section class="servicewrp servicewrp2">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="servccon">
                  <?php echo $section3['content']; ?>
                     
                     <a href="<?php echo site_url(); ?>/contact-us/">Talk to Us</a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="text-right">
                     <img src="<?php echo $section3['image']; ?>" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>-->
      
      
      
       <section class="callbacksec pad-sec" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-callback.jpg);">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="wow fadeInLeft" data-wow-delay="0.4s">
               <?php echo the_field('bottom_content'); ?>
            </div>
         </div>
         <div class="col-md-6">
            <div class="callbackform wow fadeInRight" data-wow-delay="0.4s">
               <h4>Request a Call Back</h4>
               <?php $the_query = new WP_Query( 'page_id=174' ); ?>
               <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
               
               <?php echo the_content(); ?>
                <?php endwhile;?>
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