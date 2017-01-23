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
               if ($pass==$dbpassword && $userlevel == 1) {
                  $_SESSION['current_user']=$row['id'];
                  
                  redirect('user_dashboard.php');
                  
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
            <?php include('log.php'); ?>
               
               <div id="header-top">
                  <section class="container clearfix">
                     <?php include('nav2.php'); ?>
                     <?php include('searchbox.php'); ?>
                     
                  </section>
               </div>
               <header id="header">
                  <section class="container clearfix">
                     <!--<div class="logo"><a href="index-2.html"><img alt="" src="images/logo.png"></a></div> -->
                     <?php include('nav.php'); ?>
                  </section>
               </header>
               <?php include('content.php'); ?>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>