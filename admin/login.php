<?php
   session_start();
   include('functions.php');
   $connect = getconnection();
   if ($_SERVER['REQUEST_METHOD']=='POST') {
   	$user=$_POST['username'];
   	$pass=$_POST['password'];
   
   	if($user && $pass) 
   	{
   		$sql="SELECT * FROM users WHERE username = '$user'";
   		$result = sqlexec($sql);
   	    $numrows = mysqli_num_rows($result);
   	   if($numrows !=0){
   			while($row =mysqli_fetch_assoc($result)){
   				$dbpassword = $row['password'];
   				$userlevel = $row['level'];
   				if ($pass==$dbpassword && $userlevel == 0) {
   					$_SESSION['admin_user']=$row['id'];
   					
   					redirect('index.php');
   					
   				}
   				else{
   					echo"Your password  is incorrect!..";
   				}
   			}
   		}	
   		else{
   			die("That user doesn't exists!.");
   		}
   	}
   	else
   	{
   		echo"Please enter a valid username and password!";
   	}
   
   
   }
   
   
   ?>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
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
            <div id="wrap" class="grid_1200">
               
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
               </section>
            </div>
            <header id="header">
               <section class="container clearfix">
               </section>
            </header>
            <div class="breadcrumbs">
               <section class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h1> Admin Login</h1>
                     </div>
                  </div>
               </section>
            </div>
            <section class="container main-content">
               <div class="login">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="page-content">
                           <h2>Login</h2>
                           <div class="form-style form-style-3">
                              <form action="" method="post">
                                 <div class="form-inputs clearfix">
                                    <p class="login-text">
                                       <input type="text" name="username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
                                       <i class="icon-user"></i>
                                    </p>
                                    <p class="login-password">
                                       <input type="password" name="password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
                                       <i class="icon-lock"></i>
                                       <a href="#">Forget</a>
                                    </p>
                                 </div>
                                 <p class="form-submit login-submit">
                                    <input type="submit" value="Log in" class="button color small login-submit submit">
                                 </p>
                                 <div class="rememberme">
                                    <label><input type="checkbox" checked="checked"> Remember Me</label>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <footer id="footer">
               <section class="container">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="widget widget_contact">
                           <h3 class="widget_title">Where We Are ?</h3>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu.</p>
                           <ul>
                              <li>
                                 <span>Address :</span>
                                 Ask Me Network, 33 Street, syada Zeinab, Cairo, Egypt.
                              </li>
                              <li>
                                 <span>Support :</span>Support Telephone No : (+2)01111011110
                              </li>
                              <li>
                                 Support Email Account : <a class="__cf_email__" href="http://2code.info/cdn-cgi/l/email-protection" data-cfemail="8be2e5ede4cbeef3eae6fbe7eea5e8e4e6">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="widget">
                           <h3 class="widget_title">Quick Links</h3>
                           <ul>
                              <li><a href="index-2.html">Home</a></li>
                              <li><a href="ask_question.html">Ask Question</a></li>
                              <li><a href="#">About</a></li>
                              <li><a href="cat_question.html">Questions</a></li>
                              <li><a href="user_profile.html">Users</a></li>
                              <li><a href="blog_1.html">Blog</a></li>
                              <li><a href="right_sidebar.html">Pages</a></li>
                              <li><a href="shortcodes.html">Shortcodes</a></li>
                              <li><a href="contact_us.html">Contact Us</a></li>
                              <li><a href="#">FAQs</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="widget">
                           <h3 class="widget_title">Popular Questions</h3>
                           <ul class="related-posts">
                              <li class="related-item">
                                 <h3><a href="#">This is my first Question</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                 <div class="clear"></div>
                                 <span>Feb 22, 2014</span>
                              </li>
                              <li class="related-item">
                                 <h3><a href="#">This Is My Second Poll Question</a></h3>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                 <div class="clear"></div>
                                 <span>Feb 22, 2014</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="widget widget_twitter">
                           <h3 class="widget_title">Latest Tweets</h3>
                           <div class="tweet_1"></div>
                        </div>
                     </div>
                  </div>
               </section>
            </footer>
            <footer id="footer-bottom">
               <section class="container">
                  <div class="copyrights f_left">Copyright 2014 Ask me | <a href="#">By 2code</a></div>
                  <div class="social_icons f_right">
                     <ul>
                        <li class="twitter"><a original-title="Twitter" class="tooltip-n" href="#"><i class="social_icon-twitter font17"></i></a></li>
                        <li class="facebook"><a original-title="Facebook" class="tooltip-n" href="#"><i class="social_icon-facebook font17"></i></a></li>
                        <li class="gplus"><a original-title="Google plus" class="tooltip-n" href="#"><i class="social_icon-gplus font17"></i></a></li>
                        <li class="youtube"><a original-title="Youtube" class="tooltip-n" href="#"><i class="social_icon-youtube font17"></i></a></li>
                        <li class="skype"><a original-title="Skype" class="tooltip-n" href="skype:#?call"><i class="social_icon-skype font17"></i></a></li>
                        <li class="flickr"><a original-title="Flickr" class="tooltip-n" href="#"><i class="social_icon-flickr font17"></i></a></li>
                        <li class="rss"><a original-title="Rss" class="tooltip-n" href="#"><i class="social_icon-rss font17"></i></a></li>
                     </ul>
                  </div>
               </section>
            </footer>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>