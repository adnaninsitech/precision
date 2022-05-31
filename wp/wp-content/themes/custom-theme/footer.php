 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright']
 ?>

  <footer>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="widget">
               <div class="ftr-logo">
                  <a href="./"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                  <?php echo $options['FooterAbout']; ?>
                   </div>
            </div>
         </div>
         <div class="col-md-2">
            <div class="widget">
               <h6>Quick Link</h6>
               <?php wp_nav_menu( array('menu'=> 'Quick Link','theme_location' => 'quick_link','fallback_cb'=> false, 'menu_class' => 'ftr-links', 'container' => false ) ); ?>
               <!--<ul class="ftr-links">
                  <li><a href="./">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="services.php">Services</a></li>
                  <li><a href="news.php">News</a></li>
                  <li><a href="#">FAQ’s</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
               </ul>-->
            </div>
         </div>
         <div class="col-md-3">
            <div class="widget">
               <h6>Follow Us</h6>
               <ul class="ftr-links">
                <!--   <li><a href="<?php echo $options['facebook']; ?>">Facebook</a></li>
                <li><a href="<?php echo $options['twitter']; ?>">Twitter</a></li> -->
                  <li><a href="<?php echo $options['linkedin']; ?>">Linkedin</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-3">
            <div class="widget">
               
               
               
               <a href="./"><img src="https://www.precisiontech.net/wp-content/uploads/2021/11/sba.png" alt=""></a>
               
            </div>
         </div>
      </div>
   </div>
</footer>
<div class="copyright">
   <div class="container">
      <p><?php echo $copyrite; ?> </p>
   </div>
</div> 




<!-- POPUP -->
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
               <input type="text" placeholder="Position" readonly>
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


<script>
	new WOW().init();
</script>



        
<?php wp_footer(); ?>
</body>
</html>