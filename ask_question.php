<?php
session_start();
include_once('functions.php');
// if(!isloggedin()){
// redirect('login.php');
// }

//$user_id=get_current_user_id();
//$category=get_current_category_id();
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//  $title=$_POST['title'];
//  $descr=$_POST['descr'];

//  //$user_id=$_POST['userid'];
//  $sql="INSERT INTO questions(title,descr,userid) VALUES('$title','$descr','$user_id')";
//  $result = sqlexec($sql);
//  if($result){
//    echo "Cateory Added";
   
//  }
//  else{
//    echo "Failed";

//  }
// }
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
      <!-- Mirrored from 2code.info/demo/html/ask-me-html/ask_question.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      <head>
         <meta charset="utf-8">
         <title>SeekEver – Responsive Questions and Answers Template</title>
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
            
            <div id="header-top">
               <section class="container clearfix">
                  <?php include_once('nav2.php');?>
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
                        <h1>ചോദ്യം ചോദിക്കുക</h1>
                     </div>
                     <div class="col-md-12">
                        <div class="crumbs">
                           <a href="#">തുടക്കം</a>
                           <span class="crumbs-span">/</span>
                           <a href="#">പേജുകൾ</a>
                           <span class="crumbs-span">/</span>
                           <span class="current">ചോദ്യം ചോദിക്കുക</span>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <section class="container main-content">
               <div class="row">
                  <div class="col-md-9">
                     <div class="page-content ask-question">
                        <div class="boxedtitle page-title">
                           <h2>ചോദ്യം ചോദിക്കുക</h2>
                        </div>
                        <p>നിങ്ങളുടെ ചോദ്യങ്ങൾ മറ്റുള്ളവരുമായി  പങ്കുവെക്കാനുള്ള അവസരം പ്രയോജനപ്പെടുത്തൂ.</p>
                        <div class="form-style form-style-3" id="question-submit">
                           <form method="POST" action="">
                              <div class="form-inputs clearfix">
                                 <p>
                                    <label class="required">ശീർഷകം<span>*</span></label>
                                    <input name="title" type="text" id="question-title">
                                    <span class="form-description"> ചോദ്യവുമായി ബന്ധപ്പെട്ടിരിക്കുന്ന വിഷയം ടൈപ്പ് ചെയ്യുക.</span>
                                 </p>
                                 <p>
                                    <label class="required">വിഭാഗം<span>*</span></label>
                                    <span class="styled-select">
                                    <select name="category">
                                    <?php 
                                    $sql = "SELECT * FROM categories ";
                                    $result = sqlexec($sql);
                                     while ($row=mysqli_fetch_assoc($result)){
                                          
                                          $id = $row['id'];
                                          $name = $row['name'];
                                    
                                          echo "<option value=\"$id\" >".$name."</option>";
                                       
                                         
                                       }
                                    ?>
                                    </select>
                                      
                                    </span>
                                    <span class="form-description">ചോദ്യവുമായി ബന്ധപ്പെട്ടിരിക്കുന്ന ഉചിതമായ വിഭാഗം തിരഞ്ഞെടുക്കുക</span>
                                 </p>
                              <div id="form-textarea">
                                 <p>
                                    <label class="required">വിവരങ്ങൾ<span>*</span></label>
                                    <textarea name="descr" id="question-details" aria-required="true" cols="58" rows="8"></textarea>
                                    <span class="form-description">ചോദ്യവുമായി ബന്ധപ്പെട്ട വിശദ വിവരങ്ങൾ ടൈപ്പ് ചെയ്യുക. </span>
                                 </p>
                              </div>
                              <p class="form-submit">
                                 <input value="ചോദ്യം പ്രസിദ്ധീകരിക്കുക" type="submit" id="publish-question" class="button color small submit">
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
                  <aside class="col-md-3 sidebar">
                     <div class="widget widget_stats">
                        <h3 class="widget_title">സാംഖ്യികം</h3>
                        <div class="ul_list ul_list-icon-ok">
                           <ul>
                              <li><i class="icon-question-sign"></i>ചോദ്യങ്ങൾ ( <span>20</span> )</li>
                              <li><i class="icon-comment"></i>ഉത്തരങ്ങൾ ( <span>50</span> )</li>
                           </ul>
                        </div>
                     </div>
                     <div class="widget widget_social">
                        <h3 class="widget_title">Find Us</h3>
                        <ul>
                           <li class="rss-subscribers">
                              <a href="#" target="_blank">
                              <strong>
                              <i class="icon-rss"></i>
                              <span>Subscribe</span><br>
                              <small>To RSS Feed</small>
                              </strong>
                              </a>
                           </li>
                           <li class="facebook-fans">
                              <!--<a href="https://www.facebook.com/" target="">-->
                              <strong>
                              <i class="social_icon-facebook"></i>
                              <span>5,000</span><br>
                              <small>People like it</small>
                              </strong>
                              </a>
                           </li>
                           <li class="twitter-followers">
                              <a href="#" target="_blank">
                              <strong>
                              <i class="social_icon-twitter"></i>
                              <span>3,000</span><br>
                              <small>Followers</small>
                              </strong>
                              </a>
                           </li>
                           <li class="youtube-subs">
                              <a href="#" target="_blank">
                              <strong>
                              <i class="icon-play"></i>
                              <span>1,000</span><br>
                              <small>Subscribers</small>
                              </strong>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="widget widget_login">
                        <h3 class="widget_title">Login</h3>
                        <div class="form-style form-style-2">
                           <form>
                              <div class="form-inputs clearfix">
                                 <p class="login-text">
                                    <input type="text" value="Username" onfocus="if (this.value == 'Username') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Username';}">
                                    <i class="icon-user"></i>
                                 </p>
                                 <p class="login-password">
                                    <input type="password" value="Password" onfocus="if (this.value == 'Password') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Password';}">
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
                           <ul class="login-links login-links-r">
                              <li><a href="#">Register</a></li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <div class="widget widget_highest_points">
                        <h3 class="widget_title">Highest points</h3>
                        <ul>
                           <li>
                              <div class="author-img">
                                 <a href="#"><img width="60" height="60" src="../ask-me/images/demo/admin.jpg" alt=""></a>
                              </div>
                              <h6><a href="#">admin</a></h6>
                              <span class="comment">12 Points</span>
                           </li>
                           <li>
                              <div class="author-img">
                                 <a href="#"><img width="60" height="60" src="../ask-me/images/demo/avatar.png" alt=""></a>
                              </div>
                              <h6><a href="#">vbegy</a></h6>
                              <span class="comment">10 Points</span>
                           </li>
                           <li>
                              <div class="author-img">
                                 <a href="#"><img width="60" height="60" src="../ask-me/images/demo/avatar.png" alt=""></a>
                              </div>
                              <h6><a href="#">ahmed</a></h6>
                              <span class="comment">5 Points</span>
                           </li>
                        </ul>
                     </div>
                     <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Tags</h3>
                        <a href="#">projects</a>
                        <a href="#">Portfolio</a>
                        <a href="#">Wordpress</a>
                        <a href="#">Html</a>
                        <a href="#">Css</a>
                        <a href="#">jQuery</a>
                        <a href="#">2code</a>
                        <a href="#">vbegy</a>
                     </div>
                     <div class="widget">
                        <h3 class="widget_title">Recent Questions</h3>
                        <ul class="related-posts">
                           <li class="related-item">
                              <h3><a href="#">This is my first Question</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <div class="clear"></div>
                              <span>Feb 22, 2014</span>
                           </li>
                           <li class="related-item">
                              <h3><a href="#">This Is My Second Poll Question</a></h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <div class="clear"></div>
                              <span>Feb 22, 2014</span>
                           </li>
                        </ul>
                     </div>
                  </aside>
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
      <!-- Mirrored from 2code.info/demo/html/ask-me-html/ask_question.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
   </html>