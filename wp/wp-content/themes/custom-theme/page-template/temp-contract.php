<?php /* Template Name: Contract Template */ ?>

<?php get_header(); 

$section1 = get_field('section_1'); 
$section2 = get_field('section_2'); 


?>


 <div class="innerbaner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <h1><?php echo the_title(); ?></h1>
               </div>
            </div>
         </div>
      </div>
      
       <section class="contractsec">
         <div class="container">
             <div class="contractcon row align-items-center">
                 <div class="col-md-3">
                     <img src="https://insitechstaging.com/demo/precision/wp/wp-content/uploads/2021/11/sba.png" alt="">
                 </div>
                 <div class="col-md-7">
                     <p>Precision Tech has been certified as a participant of the U.S. Small Business Administration (SBA) 8(a) Business Development Program (BD) and Small Disadvantaged Business (SDB) Program.   Precision Tech has been certified through the year 2030.</p>
                 </div>
             </div>
            <div class="contrs">
               <div class="row align-items-center">
                  <div class="col-md-6">
                  <?php echo $section1['content']; ?> 
                  </div>
                  <div class="col-md-6">
                     <img src="<?php echo $section1['image']; ?>" alt="">
                  </div>
               </div>
            </div>
            <div class="contrs1">
               <?php echo $section2['content']; ?>
            </div>
         </div>
      </section>
      
<?php get_footer(); ?>
