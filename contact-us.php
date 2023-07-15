<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Contact Us - U Coin 444</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <section class="contact_Banner">
      <div class="container">
         <div class="main-text">
            <!-- <h1>Lorem Ipsum<br> <span>Simply</span><span class="yellow">.</span></h1> -->
            <h1>Contact Us<span class="yellow">.</span></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
               industry's standard dummy text ever since the 1500s,
            </p>
            <!-- <a href="#" class="mn-btn">Let’s Get Started</a> -->
         </div>
      </div>
   </section>

   <section class="section contact_info">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="contct_box">
                  <!-- <i class="fas fa-phone-alt"></i> -->
                  <img src="/assets/images/phone-icon.png">
                  <a href="tel:+1(000)-000-000">
                     +1(000)-000-000
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="contct_box">
                  <!-- <i class="fas fa-envelope"></i> -->
                  <img src="/assets/images/mail-icon.png">
                  <a href="mailto:info@example.com">
                     info@example.com
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="contct_box">
                  <!-- <i class="fas fa-map-marked-alt"></i> -->
                  <img src="/assets/images/map-icon.png">
                  <p>
                     lorem ipsum Dolor Sit amet
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="section cont_form">
      <div class="container">
         <div class="row mb-5">
            <div class="col-lg-12">
               <h2 class="text-center"> Contact Us</h2>
            </div>
         </div>
         <div class="row mt-5">
            <div class="col-lg-6">
               <h3> Get in Touch with Us!</h3>
               <form class="form_submission mt-4" method="POST" novalidate="novalidate">
                  <!-- Custom Fields -->
                  <input type="hidden" name="url" value='<?php echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https"
        : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
                  <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                  <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">


                  <div class="contact-form">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="text" class="form-control" placeholder="Your Name" name="name" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="email" class="form-control" placeholder="Your Email" name="email" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="number" minlength="10" maxlength="12" pattern="\d{12}" class="form-control"
                                 placeholder="Phone Number" name="phone" required="" aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="text" class="form-control" placeholder="Subject"
                                 name="customers_meta[subject]" required="" aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="contact-form-control">
                              <textarea name="customers_meta[description]" id="msg" placeholder="Your Message..."
                                 required="" rows="7" aria-required="true"></textarea>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <button class="btn-10 mn-btn" type="submit"> Submit</button>

                           <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                           <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                           <div class="loader" style="display: none"><img alt="loader" src="loader.gif"></div>

                        </div>
                     </div>
                  </div>
               </form>

            </div>
            <div class="col-lg-6">
               <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1680571532790!5m2!1sen!2s"
                  width="550" height="100%"></iframe>
            </div>
         </div>
      </div>
   </section>



   <!-- Testimonial Section Start -->
   <?php include("includes/testimonials.php"); ?>
   <!-- Testimonial Section End -->
   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
</body>

</html>