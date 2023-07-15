<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Register - U Coin 444</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <section class="register_Banner">
      <div class="container">
         <div class="main-text">
            <!-- <h1>Lorem Ipsum<br> <span>Simply</span><span class="yellow">.</span></h1> -->
            <h1>Register Now<span class="yellow">.</span></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
               industry's standard dummy text ever since the 1500s,
            </p>
            <!-- <a href="#" class="mn-btn">Let’s Get Started</a> -->
         </div>
      </div>
   </section>

   <!-- <section class="section contact_info">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="contct_box">
                  <i class="fas fa-phone-alt"></i>
                  <img src="/assets/images/phone-icon.png">
                  <a href="tel:+1(000)-000-000">
                     +1(000)-000-000
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="contct_box">
                  <i class="fas fa-envelope"></i>
                  <img src="/assets/images/mail-icon.png">
                  <a href="mailto:info@example.com">
                     info@example.com
                  </a>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="contct_box">
                  <i class="fas fa-map-marked-alt"></i>
                  <img src="/assets/images/map-icon.png">
                  <p>
                     lorem ipsum Dolor Sit amet
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section> -->


   <section class="section reg_form">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center">
               <h2> LOGIN NOW</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua.</p>
               <form class="form_submission mt-4" method="POST" novalidate="novalidate">
                  <!-- Custom Fields -->
                  <input type="hidden" name="url" value='<?php echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https"
        : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
                  <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                  <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">


                  <div class="reg-form">
                     <div class="row">
                        <!-- <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="text" class="form-control" placeholder="Your Name" name="name" required=""
                                 aria-required="true">
                           </div>
                        </div> -->
                        <div class="col-md-12">
                           <div class="register-form-control">
                              <input type="email" class="form-control" placeholder="Your Email" name="email" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="register-form-control">
                              <input type="password" class="form-control" placeholder="Enter Password" name="password"
                                 required="" aria-required="true">
                           </div>
                        </div>
                        <!-- <div class="col-md-6">
                           <div class="contact-form-control">
                              <input type="number" minlength="10" maxlength="12" pattern="\d{12}" class="form-control"
                                 placeholder="Phone Number" name="phone" required="" aria-required="true">
                           </div>
                        </div> -->
                        <!-- <div class="col-md-6">
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
                        </div> -->
                        <div class="col-md-12">
                           <button class="btn-10 mn-btn" type="submit"> Submit</button>
                           <a href="about-you.php" class="btn-10 mn-btn reg">Register Now </a>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-lg-5">
               <div class="reg-side-form">
                  <h3 class="text-white text-center">SIGNUP</h3>
                  <p class="text-white text-center my-3">Register Now</p>
                  <div class="form-area">
                     <div class="entry-box5">

                        <form class=" form-box1 has-validation-callback form_submission" method="POST"
                           novalidate="novalidate">

                           <!-- Custom Fields -->
                           <input type="hidden" name="url" value='<?php echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https"
        : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
                           <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                           <input type="hidden" name="subject"
                              value="Signup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">
                           <input type="hidden" name="price" data-name="price" value="">
                           <input type="hidden" name="title" data-name="title" value="">

                           <!--PPC parameters -->
                           <input type="hidden" name="keyword"
                              value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : " ---"; ?>">
                           <input type="hidden" name="matchtype" value="<?php echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : " ---";
        ?>">
                           <input type="hidden" name="msclkid"
                              value="<?php echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : " ---"; ?>">
                           <input type="hidden" name="gclid"
                              value="<?php echo (isset($_GET['gclid'])) ? $_GET['gclid'] : " ---"; ?>">
                           <!--End PPC paramters -->

                           <div class="col-sm-12 entry-right-5 p-0">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="name" name="name" aria-describedby="name"
                                    placeholder="Full Name" data-validation="required" aria-required="true">
                              </div>
                              <div class="form-group">
                                 <input type="email" class="form-control" id="email" name="email"
                                    aria-describedby="email" placeholder="Email" data-validation="required"
                                    aria-required="true">
                              </div>
                              <div class="form-group">
                                 <input type="number" class="form-control" id="phone" name="phone" minlength="10"
                                    maxlength="12" aria-describedby="Phone Number" placeholder="Phone"
                                    data-validation="required" aria-required="true">
                              </div>
                              <div class="form-group">
                                 <textarea class="form-control" name="message"
                                    placeholder="Enter your Message"></textarea>
                              </div>

                              <div class="form-btn1">
                                 <button class="entery-submit gold-btn" type="submit" id="signupBtn">
                                    SUBMIT
                                 </button>
                                 <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                                 <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                                 </div>
                                 <div class="loader" style="display: none"><img alt="loader" src="loader.gif"></div>

                                 <!--<p>You will get confirmation link on your email. <br>No Spam</p>-->
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
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