
<?<?php session_start();
include_once('functions.php');
if(!isloggedin()){
redirect('login.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
   $cat_id = $_GET['id'];
}
$sql="SELECT * FROM categories WHERE id='$cat_id' ";
$result=getconnection();
$category=mysqli_fetch_assoc($result);
$sql="SELECT * FROM questions WHERE category='$cat_id'";
$result=mysqli_query($connect,$sql);
$questions=mysqli_fetch_assoc($result);
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/cat_question.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
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
               
               <div id="header-top">
                  <section class="container clearfix">
                  <?php include_once('nav2.php'); ?>
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
                           <h1>Questions Category</h1>
                        </div>
                        <div class="col-md-12">
                           <div class="crumbs">
                              <a href="#">Home</a>
                              <span class="crumbs-span">/</span>
                              <span class="current"><?php echo $category['name']; ?></span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <section class="container main-content">
                  <div class="row">
                     <div class="col-md-9">
                        <?php
echo "<article class=\"question question-type-normal\">"; 
echo "   <h2>"; 
echo "      <a href=\"single_question.html\">This is my first Question</a>"; 
echo "   </h2>"; 
echo "   <a class=\"question-report\" href=\"#\">Report</a>"; 
echo "   <div class=\"question-type-main\"><i class=\"icon-question-sign\"></i>Question</div>"; 
echo "   <div class=\"question-author\">"; 
echo "      <a href=\"#\" original-title=\"ahmed\" class=\"question-author-img tooltip-n\"><span></span><img alt=\"\" src=\"../ask-me/images/demo/avatar.png\"></a>"; 
echo "   </div>"; 
echo "   <div class=\"question-inner\">"; 
echo "      <div class=\"clearfix\"></div>"; 
echo "      <p class=\"question-desc\">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>"; 
echo "      <div class=\"question-details\">"; 
echo "         <span class=\"question-answered question-answered-done\"><i class=\"icon-ok\"></i>solved</span>"; 
echo "         <span class=\"question-favorite\"><i class=\"icon-star\"></i>5</span>"; 
echo "      </div>"; 
echo "      <span class=\"question-category\"><a href=\"#\"><i class=\"icon-folder-close\"></i>wordpress</a></span>"; 
echo "      <span class=\"question-date\"><i class=\"icon-time\"></i>4 mins ago</span>"; 
echo "      <span class=\"question-comment\"><a href=\"#\"><i class=\"icon-comment\"></i>5 Answer</a></span>"; 
echo "      <span class=\"question-view\"><i class=\"icon-user\"></i>70 views</span>"; 
echo "      <div class=\"clearfix\"></div>"; 
echo "   </div>"; 
echo "</article>";
?>

                        
                        <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/cat_question.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>