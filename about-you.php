<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>About You - U Coin 444</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <section class="about_Banner">
      <div class="container">
         <div class="main-text">
            <h1>Get Started<span class="yellow">.</span>
               <!-- <br> <span>Simply</span> -->
            </h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
               industry's standard dummy text ever since the 1500s,
            </p>
            <a href="#" class="mn-btn">Let’s Get Started</a>
         </div>
      </div>
   </section>

   <section class="section about_you-sec">
      <div class="container">

         <div class="row align-items-center justify-content-center mb-5">
            <h2>Create Personal Account </h2>
         </div>
         <div class="row align-items-center">
            <div class="col-md-6 wow fadeInLeft animated" data-wow-delay="0.4s">
               <img src="assets/images/about-you-person.png">
               <h3 class="mt-4">
                  NORA TSUNODA
               </h3>
               <span class="mb-3">Managing Director</span>
               <p class="mt-3"><strong>ADDRESS:</strong></p>
               <span>Lorem Ipsum Dolor Sit Amet</span>

               <p class="mt-3"><strong>EMAIL:</strong></p>
               <span><a href="mailto:info@example.com">info@example.com</a></span>

               <p class="mt-3"><strong>PHONE:</strong></p>
               <span><a href="tel:+1(000)-000-000">+1(000)-000-000</a></span>

            </div>
            <div class="col-md-6 col-lg-6">
               <h3> PERSONAL INFO</h3>
               <form class="form_submission mt-4" method="POST" novalidate="novalidate">
                  <!-- Custom Fields -->
                  <input type="hidden" name="url" value='<?php echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https"
                     : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
                  <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
                  <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">


                  <div class="contact-form">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <input type="number" class="form-control" placeholder="Height" name="height" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <input type="number" class="form-control" placeholder="Weight" name="weight" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <input type="text" class="form-control" placeholder="Hairs" name="hairs" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <input type="text" class="form-control" placeholder="Eyes" name="eyes" required=""
                                 aria-required="true">
                           </div>
                        </div>
                        <!-- <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <input type="number" minlength="10" maxlength="12" pattern="\d{12}" class="form-control"
                                 placeholder="Phone Number" name="phone" required="" aria-required="true">
                           </div>
                        </div> -->
                        <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <input type="text" class="form-control" placeholder="Distinguishing characteristics"
                                 name="distinguishing-characteristics" required="" aria-required="true">
                           </div>
                        </div>
                        <!-- <div class="col-lg-12">
                           <div class="contact-form-control stats-form-control">
                              <textarea name="customers_meta[description]" id="msg" placeholder="Your Message..."
                                 required="" rows="7" aria-required="true"></textarea>
                           </div>
                        </div> -->
                        <div class="col-lg-12">
                           <button class="btn-10 mn-btn w-100" type="submit"> Submit</button>

                           <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                           <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                           <div class="loader" style="display: none"><img alt="loader" src="loader.gif"></div>

                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="row align-items-center justify-content-center flex-column pt-5 my-5">
            <h2>All Information Subject To Verification</h2>
            <h3 class="mt-5 mb-2">STATS</h3>
            <form class="form_submission mt-4" method="POST" novalidate="novalidate">
               <!-- Custom Fields -->
               <input type="hidden" name="url" value='<?php echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https"
        : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
               <input type="hidden" name="domain" value="<?php echo $_SERVER['SERVER_NAME']; ?>">
               <input type="hidden" name="subject" value="Popup Form (<?php echo $_SERVER['SERVER_NAME']; ?>)">


               <div class="contact-form">
                  <div class="row">
                     <div class="col-md-12">
                        <div
                           class="contact-form-control d-flex justify-content-center align-items-center stats-form-control">
                           <div class="student_radiobtn">
                              <label for="radio__button__1" class="d-flex justify-content-center align-items-center">
                                 <input type="radio" class="form-control mb-4 radio_input" id="radio__button__1"
                                    value="radio__button__1" name="radio__button" required="" aria-required="true">
                                 <p class="mb-4 radio_label">Registration as Student</p>
                              </label>
                           </div>
                           <div class="customer_radiobtn">
                              <label for="radio__button__2" class="d-flex justify-content-center align-items-center">
                                 <input type="radio" class="form-control mb-4 radio_iput" id="radio__button__2"
                                    value="radio__button__2" name="radio__button" required="" aria-required="true">
                                 <p class="mb-4 radio_label">Registration as Customer</p>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="contact-form-control stats-form-control">
                           <input type="text" class="form-control" placeholder="University" name="university"
                              required="" aria-required="true">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="contact-form-control stats-form-control">
                           <input type="email" class="form-control" placeholder="Sport/Activity" name="sport/activity"
                              required="" aria-required="true">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="contact-form-control stats-form-control">
                           <input type="date" class="form-control" placeholder="Years" name="years" required=""
                              aria-required="true">
                           <!-- <input type="number" minlength="10" maxlength="12" pattern="\d{12}" class="form-control"
                              placeholder="Phone Number" name="phone" required="" aria-required="true"> -->
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="contact-form-control stats-form-control">
                           <input type="text" class="form-control" placeholder="Accolades" name="accolades" required=""
                              aria-required="true">
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="contact-form-control stats-form-control">
                           <input type="text" name="nickname" id="nickname" placeholder="Nickname" required=""
                              aria-required="true">
                        </div>
                     </div>
                     <div class="col-md-12 d-flex justify-content-center">
                        <button class="btn-10 mn-btn" type="submit"> Submit</button>

                        <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none"></div>
                        <div class="success mt-3 alert alert-success text-left mb-0" style="display: none"></div>
                        <div class="loader" style="display: none"><img alt="loader" src="loader.gif"></div>

                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </section>



   <!-- Shopping Section Start -->
   <?php// include("includes/shopping.php"); ?>
   <!-- Shopping Section End -->
   <!-- Testimonial Section Start -->
   <?php// include("includes/testimonials.php"); ?>
   <!-- Testimonial Section End -->
   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
</body>

</html>