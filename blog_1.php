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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/blog_1_full_width.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:29 GMT -->
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
                    <?php include_once('nav2.php');
                   ?>
                     <?php include_once('searchbox.php'); ?>

                  </section>
               </div>
               <header id="header">
                  <section class="container clearfix">
                    <?php include_once('nav.php'); ?>
                  </section>
               </header>
               <div class="breadcrumbs">
                  <section class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <h1>Blog 1</h1>
                        </div>
                        <div class="col-md-12">
                           <div class="crumbs">
                              <a href="#">Home</a>
                              <span class="crumbs-span">/</span>
                              <span class="current">Blog 1 full width</span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <section class="container main-content page-full-width">
                  <div class="row">
                     <div class="col-md-12">
                        <article class="post clearfix">
                           <div class="post-inner">
                              <div class="post-img"><a href="single_post.html"><img src="../ask-me/images/demo/posts/loneliness-1440x900.jpg" alt=""></a></div>
                              <h2 class="post-title"><span class="post-type"><i class="icon-picture"></i></span><a href="single_post.html">This is a Standard Post.</a></h2>
                              <div class="post-meta">
                                 <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                 <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                 <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                 <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                              </div>
                              <div class="post-content">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                 <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                              </div>
                           </div>
                        </article>
                        <article class="post clearfix">
                           <div class="post-inner">
                              <div class="flexslider blog_silder margin_b_20 post-img">
                                 <ul class="slides">
                                    <li><img src="../ask-me/images/demo/posts/3d-cartoon-caracter2.jpg" alt=""></li>
                                    <li><img src="../ask-me/images/demo/posts/WebshotNature-250.jpg" alt=""></li>
                                 </ul>
                              </div>
                              <h2 class="post-title"><span class="post-type"><i class="icon-film"></i></span><a href="single_post.html">Beautiful Gallery Post.</a></h2>
                              <div class="post-meta">
                                 <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                 <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                 <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                 <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                              </div>
                              <div class="post-content">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                 <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                              </div>
                           </div>
                        </article>
                        <article class="post clearfix">
                           <div class="post-inner">
                              <div class="video_embed post-img"><iframe height="500" src="http://www.youtube.com/embed/JuyB7NO0EYY"></iframe></div>
                              <h2 class="post-title"><span class="post-type"><i class="icon-play-circle"></i></span><a href="single_post.html">This is a Video Post.</a></h2>
                              <div class="post-meta">
                                 <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                 <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                 <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                 <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                              </div>
                              <div class="post-content">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                 <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                              </div>
                           </div>
                        </article>
                        <article class="post clearfix">
                           <div class="post-inner">
                              <h2 class="post-title"><span class="post-type"><i class="icon-file-alt"></i></span><a href="single_post.html">Post Without Image.</a></h2>
                              <div class="post-meta">
                                 <span class="meta-author"><i class="icon-user"></i><a href="#">Administrator</a></span>
                                 <span class="meta-date"><i class="icon-time"></i>September 30 , 2013</span>
                                 <span class="meta-categories"><i class="icon-suitcase"></i><a href="#">Wordpress</a></span>
                                 <span class="meta-comment"><i class="icon-comments-alt"></i><a href="#">15 comments</a></span>
                              </div>
                              <div class="post-content">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi.</p>
                                 <a href="single_post.html" class="post-read-more button color small">Continue reading</a>
                              </div>
                           </div>
                        </article>
                        <div class="pagination">
                           <a href="#" class="prev-button"><i class="icon-angle-left"></i></a>
                           <span class="current">1</span>
                           <a href="#">2</a>
                           <a href="#">3</a>
                           <a href="#">4</a>
                           <a href="#">5</a>
                           <span>...</span>
                           <a href="#">11</a>
                           <a href="#">12</a>
                           <a href="#">13</a>
                           <a href="#" class="next-button"><i class="icon-angle-right"></i></a>
                        </div>
                     </div>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/blog_1_full_width.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:29 GMT -->
      </html>
