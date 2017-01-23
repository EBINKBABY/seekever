<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
   <![endif]-->
   <!--[if IE 9 ]>
   <html class="ie ie9" lang="en">
      <![endif]-->
      <!--[if (gte IE 9)|!(IE)]><!-->
      <html lang="en">
         <!--<![endif]-->
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/edit_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
         <head>
            <meta charset="utf-8">
            <title>Ask me – Responsive Questions and Answers Template</title>
            <meta name="description" content="Ask me Responsive Questions and Answers Template">
            <meta name="author" content="2code.info">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="css/skins/skins.css">
            <link rel="stylesheet" href="css/responsive.css">
            <link rel="shortcut icon" href="images/favicon.png">
         </head>
         <body>
            <div class="loader">
               <div class="loader_html"></div>
            </div>
             <?php include('log.php'); ?>
               <div class="panel-pop" id="signup">
                  <h2>Register Now<i class="icon-remove"></i></h2>
                  <div class="form-style form-style-3">
                     <form>
                        <div class="form-inputs clearfix">
                           <p>
                              <label class="required">Username<span>*</span></label>
                              <input type="text">
                           </p>
                           <p>
                              <label class="required">E-Mail<span>*</span></label>
                              <input type="email">
                           </p>
                           <p>
                              <label class="required">Password<span>*</span></label>
                              <input type="password" value="">
                           </p>
                           <p>
                              <label class="required">Confirm Password<span>*</span></label>
                              <input type="password" value="">
                           </p>
                        </div>
                        <p class="form-submit">
                           <input type="submit" value="Signup" class="button color small submit">
                        </p>
                     </form>
                  </div>
               </div>
               <div class="panel-pop" id="lost-password">
                  <h2>Lost Password<i class="icon-remove"></i></h2>
                  <div class="form-style form-style-3">
                     <p>Lost your password? Please enter your username and email address. You will receive a link to create a new password via email.</p>
                     <form>
                        <div class="form-inputs clearfix">
                           <p>
                              <label class="required">Username<span>*</span></label>
                              <input type="text">
                           </p>
                           <p>
                              <label class="required">E-Mail<span>*</span></label>
                              <input type="email">
                           </p>
                        </div>
                        <p class="form-submit">
                           <input type="submit" value="Reset" class="button color small submit">
                        </p>
                     </form>
                     <div class="clearfix"></div>
                  </div>
               </div>
               <div id="header-top">
                  <section class="container clearfix">
                    <?php include('nav2.php'); ?>
                     <?php include_once('searchbox.php'); ?>
                  </section>
               </div>
               <header id="header">
                  <section class="container clearfix">
                     <!--
                     <div class="logo"><a href="index-2.html"><img alt="" src="images/logo.png"></a></div>
                     -->
                     <?php include('nav.php'); ?>
                  </section>
               </header>
               <div class="breadcrumbs">
                  <section class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <h1>Edit Profile</h1>
                        </div>
                        <div class="col-md-12">
                           <div class="crumbs">
                              <a href="#">Home</a>
                              <span class="crumbs-span">/</span>
                              <a href="#">user</a>
                              <span class="crumbs-span">/</span>
                              <span class="current">Edit Profile</span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <section class="container main-content">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="page-content">
                           <div class="boxedtitle page-title">
                              <h2>Edit Profile</h2>
                           </div>
                           <div class="form-style form-style-4">
                              <form>
                                 <div class="form-inputs clearfix">
                                    <p>
                                       <label>First Name</label>
                                       <input type="text">
                                    </p>
                                    <p>
                                       <label>Last Name</label>
                                       <input type="text">
                                    </p>
                                    <p>
                                       <label class="required">E-Mail<span>*</span></label>
                                       <input type="email">
                                    </p>
                                    <p>
                                       <label>Website</label>
                                       <input type="text">
                                    </p>
                                    <p>
                                       <label class="required">Password<span>*</span></label>
                                       <input type="password" value="">
                                    </p>
                                    <p>
                                       <label class="required">Confirm Password<span>*</span></label>
                                       <input type="password" value="">
                                    </p>
                                    <p>
                                       <label>Country</label>
                                       <input type="text">
                                    </p>
                                 </div>
                                 <div class="form-style form-style-2">
                                    <div class="user-profile-img"><img src="../ask-me/images/demo/admin.jpg" alt="admin"></div>
                                    <p class="user-profile-p">
                                       <label>Profile Picture</label>
                                    <div class="fileinputs">
                                       <input type="file" class="file">
                                       <div class="fakefile">
                                          <button type="button" class="button small margin_0">Select file</button>
                                          <span><i class="icon-arrow-up"></i>Browse</span>
                                       </div>
                                    </div>
                                    <p></p>
                                    <div class="clearfix"></div>
                                    <p>
                                       <label>About Yourself</label>
                                       <textarea cols="58" rows="8"></textarea>
                                    </p>
                                 </div>
                                 <div class="form-inputs clearfix">
                                    <p>
                                       <label>Facebook</label>
                                       <input type="text">
                                    </p>
                                    <p>
                                       <label>Twitter</label>
                                       <input type="text">
                                    </p>
                                    <p>
                                       <label>Linkedin</label>
                                       <input type="email">
                                    </p>
                                    <p>
                                       <label>Google plus</label>
                                       <input type="text">
                                    </p>
                                 </div>
                                 <p class="form-submit">
                                    <input type="submit" value="Update" class="button color small login-submit submit">
                                 </p>
                              </form>
                           </div>
                        </div>
                     </div>
                     <?php include('aside.php'); ?>
                  </div>
               </section>
               <?php include('footer.php'); ?>
            </div>
            <div class="go-up"><i class="icon-chevron-up"></i></div>
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
            <script src="js/jquery.easing.1.3.min.js"></script>
            <script src="js/html5.js"></script>
            <script src="js/twitter/jquery.tweet.js"></script>
            <script src="js/jflickrfeed.min.js"></script>
            <script src="js/jquery.inview.min.js"></script>
            <script src="js/jquery.tipsy.js"></script>
            <script src="js/tabs.js"></script>
            <script src="js/jquery.flexslider.js"></script>
            <script src="js/jquery.prettyPhoto.js"></script>
            <script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
            <script src="js/jquery.scrollTo.js"></script>
            <script src="js/jquery.nav.js"></script>
            <script src="js/tags.js"></script>
            <script src="js/jquery.bxslider.min.js"></script>
            <script src="js/custom.js"></script>
         </body>
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/edit_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>