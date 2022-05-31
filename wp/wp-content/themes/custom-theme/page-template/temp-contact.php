<?php /* Template Name: Contact Template */ ?>



<?php get_header(); ?>


 <section class="getformsec">
         <div class="container">
            <h4>Get In Touch With Us</h4>
            <!--<form action="#">
              div class="row">
                  <div class="col-md-4">
                     <div class="field2">
                        <input type="text" placeholder="Enter your name">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="field2">
                        <input type="email" placeholder="Your Email">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="field2">
                        <input type="text" placeholder="Subject">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="field2">
                     <textarea placeholder="Your message here"></textarea>
                     </div>
                     <button type="submit">Send to us</button>
                  </div>
               </div>
               
               
            </form>-->
            
            <?php echo do_shortcode('[contact-form-7 id="177" title="contact form page"]'); ?>
         </div>
      </section>
      
      
      
       <section class="getsecmap">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <h5>12989 Hampton Forest Court Fairfax, Virginia 22030</h5>
                  <ul class="getinfo">
                     <li><a href="mailto:<?php echo $options['email']; ?>"><span>Email:</span> <?php echo $options['email']; ?></a></li>
                     <li><a href="tel:<?php echo $options['phone_number']; ?>"><span>Phone:</span> <?php echo $options['phone_number']; ?></a></li>
                  </ul>
                  <ul class="getsocial">
                     <li><a href="<?php echo $options['facebook']; ?>">Facebook</a></li>
                     <li><a href="<?php echo $options['vimeo']; ?>">Vimeo</a></li>
                     <!-- <li><a href="#">Google+</a></li> -->
                     <li><a href="<?php echo $options['twitter']; ?>">Twitter</a></li>
                     <li><a href="<?php echo $options['Instagram']; ?>">Instagram</a></li>
                     <li><a href="<?php echo $options['youtube']; ?>">Youtube</a></li>
                  </ul>
               </div>
               <div class="col-md-8">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3107.938495656252!2d-77.3957486848886!3d38.83386937958056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64571c640a6ad%3A0x487654d4e2aee3c!2s12989%20Hampton%20Forest%20Ct%2C%20Fairfax%2C%20VA%2022030%2C%20USA!5e0!3m2!1sen!2s!4v1631563675487!5m2!1sen!2s"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
      </section>







<?php get_footer(); ?>