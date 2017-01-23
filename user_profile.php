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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
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
                     <?php include('searchbox.php'); ?>
                     
                  </section>
               </div>
               <header id="header">
                  <section class="container clearfix">
                     <!--<div class="logo"><a href="index-2.html"><img alt="" src="images/logo.png"></a></div>-->
                     <?php include('nav.php'); ?>
                  </section>
               </header>
               <div class="breadcrumbs">
                  <section class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <h1>User Profile : admin</h1>
                        </div>
                        <div class="col-md-12">
                           <div class="crumbs">
                              <a href="#">Home</a>
                              <span class="crumbs-span">/</span>
                              <a href="#">User</a>
                              <span class="crumbs-span">/</span>
                              <span class="current">User Profile : admin</span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <section class="container main-content">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="row">
                           <div class="user-profile">
                              <div class="col-md-12">
                                 <div class="page-content">
                                    <h2>About admin</h2>
                                    <div class="user-profile-img"><img width="60" height="60" src="../ask-me/images/demo/admin.jpg" alt="admin"></div>
                                    <div class="ul_list ul_list-icon-ok about-user">
                                       <ul>
                                          <li><i class="icon-plus"></i>Registerd : <span>Jan 10, 2014</span></li>
                                          <li><i class="icon-map-marker"></i>Country : <span>Egypt</span></li>
                                          <li><i class="icon-globe"></i>Website : <a target="_blank" href="http://2code.info/">view</a></li>
                                       </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada .</p>
                                    <div class="clearfix"></div>
                                    <span class="user-follow-me">Follow Me</span>
                                    <a href="#" original-title="Facebook" class="tooltip-n">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="30" span_bg="#3b5997" span_hover="#2f3239">
                                    <i class="social_icon-facebook"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" original-title="Twitter" class="tooltip-n">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="30" span_bg="#00baf0" span_hover="#2f3239">
                                    <i class="social_icon-twitter"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" original-title="Linkedin" class="tooltip-n">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="30" span_bg="#006599" span_hover="#2f3239">
                                    <i class="social_icon-linkedin"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" original-title="Google plus" class="tooltip-n">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="30" span_bg="#c43c2c" span_hover="#2f3239">
                                    <i class="social_icon-gplus"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" original-title="Email" class="tooltip-n">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="30" span_bg="#000" span_hover="#2f3239">
                                    <i class="social_icon-email"></i>
                                    </span>
                                    </span>
                                    </a>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="page-content page-content-user-profile">
                                    <div class="user-profile-widget">
                                       <h2>User Stats</h2>
                                       <div class="ul_list ul_list-icon-ok">
                                          <ul>
                                             <li><i class="icon-question-sign"></i><a href="user_questions.html">Questions<span> ( <span>30</span> ) </span></a></li>
                                             <li><i class="icon-comment"></i><a href="user_answers.html">Answers<span> ( <span>10</span> ) </span></a></li>
                                             <li><i class="icon-star"></i><a href="user_favorite_questions.html">Favorite Questions<span> ( <span>3</span> ) </span></a></li>
                                             <li><i class="icon-heart"></i><a href="user_points.html">Points<span> ( <span>20</span> ) </span></a></li>
                                             <li><i class="icon-asterisk"></i>Best Answers<span> ( <span>2</span> ) </span></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="page-content">
                           <div class="user-stats">
                              <div class="user-stats-head">
                                 <div class="block-stats-1 stats-head">#</div>
                                 <div class="block-stats-2 stats-head">Today</div>
                                 <div class="block-stats-3 stats-head">Month</div>
                                 <div class="block-stats-4 stats-head">Total</div>
                              </div>
                              <div class="user-stats-item">
                                 <div class="block-stats-1">Questions</div>
                                 <div class="block-stats-2">5</div>
                                 <div class="block-stats-3">20</div>
                                 <div class="block-stats-4">100</div>
                              </div>
                              <div class="user-stats-item">
                                 <div class="block-stats-1">Answers</div>
                                 <div class="block-stats-2">30</div>
                                 <div class="block-stats-3">150</div>
                                 <div class="block-stats-4">1000</div>
                              </div>
                              <div class="user-stats-item user-stats-item-last">
                                 <div class="block-stats-1">Visitors</div>
                                 <div class="block-stats-2">100</div>
                                 <div class="block-stats-3">3000</div>
                                 <div class="block-stats-4">5000</div>
                              </div>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>