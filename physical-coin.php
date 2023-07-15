<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Physical Coin - U Coin 444</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <?php include("includes/header.php"); ?>

   <section class="physical_coin_banner">
      <div class="container">
         <div class="main-text">
            <!-- <h1>Lorem Ipsum<br> <span>Simply</span><span class="yellow">.</span></h1> -->
            <h1>Physical Coin<span class="yellow">.</span></h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
               industry's standard dummy text ever since the 1500s,
            </p>
            <a href="/about-you.php" class="mn-btn mt-4">Let’s Get Started</a>
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

   <section class="section physical_coin_form">
      <div class="container">
         <div class="row">
            <h2 class="text-center w-100">Specs On Our Physical Coins</h2>
            <div class="physical__form__wrapper w-100">
               <form class="physical__form form_submission my-5" method="POST">
                  <div class="row justify-content-center">
                     <div class="col-lg-6">
                        <div class="mb-3 d-flex physical-form-control">
                           <!--<input type="number" class="mr-4" placeholder="Diameter: 1 3/4 inch">-->
                           <label >Diameter: 1 3/4 inch</label>
                            <select type="number" class="mr-4 form-select">
                              <option>1 inch</option>
                              <option>2 inch</option>
                              <option>3 inch</option>
                              <option>4 inch</option>
                            </select>
                           <img src="assets/images/diameter_img.png">
                        </div>
                        <div class="mb-3 d-flex physical-form-control">
                            <label >Thickness: 1/8 inch</label>
                            <select type="number" class="mr-4 form-select">
                              <option>1 inch</option>
                              <option>2 inch</option>
                              <option>3 inch</option>
                              <option>4 inch</option>
                              <option>5 inch</option>
                              <option>6 inch</option>
                              <option>7 inch</option>
                              <option>8 inch</option>
                            </select>
                           <!--<input type="number" class="mr-4" placeholder="Thickness: 1/8 inch">-->
                           <img src="assets/images/thickness_img.png">
                        </div>
                        <div class="mb-3 d-flex physical-form-control">
                           <!--<input type="number" class="mr-4" placeholder="Weight: 1.3 oz">-->
                           <label >Weight: 1.3 oz</label>
                            <select type="number" class="mr-4 form-select">
                              <option>.1 oz</option>
                              <option>.2 oz</option>
                              <option>.3 oz</option>
                              <option>.4 oz</option>
                              <option>.5 oz</option>
                              <option>.6 oz</option>
                              <option>.7 oz</option>
                              <option>.8 oz</option>
                              <option>.9 oz</option>
                              <option>1 oz</option>
                              <option>1.1 oz</option>
                              <option>1.2 oz</option>
                              <option>1.3 oz</option>
                            </select>
                           <img src="assets/images/weight_img.png">
                        </div>
                        <div class="mb-3 d-flex physical-form-control">
                           <!--<input type="text" class="mr-4" placeholder="Composition: zinc alloy">-->
                           <label >Composition: zinc alloy</label>
                            <select type="number" class="mr-4 form-select">
                              <option>zinc alloy</option>
                             
                            </select>
                           <img src="assets/images/zin_img.png">
                        </div>
                        <div class="mb-3 d-flex physical-form-control">
                           <input type="submit" class="" value="Place Order">
                        </div>
                     </div>
                     <!-- <div class="col-lg-2">
                     </div> -->
                  </div>
               </form>

               <div>
                  <p class="text-center w-60 m-auto"><strong>Production time: 4-6 weeks (process includes design, mold
                        fabrication/setting,
                        manufacture, painting, engraving shipping)</strong></p>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- <section class="section reg_form">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center">
               <h2> LOGIN NOW</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua.</p>
               <form class="form_submission mt-4" method="POST" novalidate="novalidate">
                  <input type="hidden" name="url" value='<?php // echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
                  <input type="hidden" name="domain" value="<?php // echo $_SERVER['SERVER_NAME']; ?>">
                  <input type="hidden" name="subject" value="Popup Form (<?php // echo $_SERVER['SERVER_NAME']; ?>)">

                  <div class="reg-form">
                     <div class="row">
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

                           <input type="hidden" name="url"
                           value='<?php // echo (isset($_SERVER[' HTTPS']) && $_SERVER['HTTPS']==='on' ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ; ?>'>
                           <input type="hidden" name="domain" value="<?php // echo $_SERVER['SERVER_NAME']; ?>">
                           <input type="hidden" name="subject"
                              value="Signup Form (<?php // echo $_SERVER['SERVER_NAME']; ?>)">
                           <input type="hidden" name="price" data-name="price" value="">
                           <input type="hidden" name="title" data-name="title" value="">

                           <input type="hidden" name="keyword"
                              value="<?php // echo (isset($_GET['keyword'])) ? $_GET['keyword'] : " ---"; ?>">
                           <input type="hidden" name="matchtype" value="<?php // echo (isset($_GET['matchtype'])) ? $_GET['matchtype'] : " ---"; ?>">
                           <input type="hidden" name="msclkid"
                              value="<?php // echo (isset($_GET['msclkid'])) ? $_GET['msclkid'] : " ---"; ?>">
                           <input type="hidden" name="gclid"
                              value="<?php // echo (isset($_GET['gclid'])) ? $_GET['gclid'] : " ---"; ?>">

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

                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->



   <!-- Testimonial Section Start -->
   <?php // include("includes/testimonials.php"); ?>
   <!-- Testimonial Section End -->
   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
</body>

</html>