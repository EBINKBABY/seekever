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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
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
                     <div class="logo">
                        <a href="index-2.html">
                     </div>
                     <?php include('nav.php'); ?>
                  </section>
               </header>
               <div class="section-warp ask-me">
                  <div class="container clearfix">
                     <div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
                        <div class="row">
                           <div class="col-md-3">
                              <h2>നിങ്ങളുടെ ചോദ്യങ്ങൾക്ക് സ്വാഗതം     
                                 </h2>
                              <p></p>
                              <div class="clearfix"></div>
                              <a class="color button dark_button medium" href="#">About Us</a>
                              <a class="color button dark_button medium" href="login.html">Join Now</a>
                           </div>
                           <div class="col-md-9">
                              <form class="form-style form-style-2">
                                 <p>
                                    <textarea rows="4" id="question_title" onfocus="if(this.value=='Ask any question and you be sure find your answer ?')this.value='';" onblur="if(this.value=='')this.value='Ask any question and you be sure find your answer ?';">Ask any question and you be sure find your answer ?</textarea>
                                    <i class="icon-pencil"></i>
                                    <span class="color button small publish-question">Ask Now</span>
                                 </p>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <section class="container main-content">
                  <div class="row">
                     <div class="col-md-9">
                        <div class="tabs-warp question-tab">
                           <ul class="tabs">
                              <li class="tab"><a href="#" class="current">Recent Questions</a></li>
                              <li class="tab"><a href="#">Most Responses</a></li>
                              <li class="tab"><a href="#">Recently Answered</a></li>
                              <li class="tab"><a href="#">No answers</a></li>
                           </ul>
                           <div class="tab-inner-warp">
                              <div class="tab-inner">
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This is my first Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-poll">
                                    <h2>
                                       <a href="single_question_poll.html">This Is My Second Poll Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Third Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fourth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fifth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Sixth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My seventh Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Eighth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                              </div>
                           </div>
                           <div class="tab-inner-warp">
                              <div class="tab-inner">
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This is my first Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-poll">
                                    <h2>
                                       <a href="single_question_poll.html">This Is My Second Poll Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Third Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fourth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fifth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Sixth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My seventh Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Eighth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                              </div>
                           </div>
                           <div class="tab-inner-warp">
                              <div class="tab-inner">
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This is my first Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-poll">
                                    <h2>
                                       <a href="single_question_poll.html">This Is My Second Poll Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Third Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fourth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fifth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Sixth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My seventh Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Eighth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
                              </div>
                           </div>
                           <div class="tab-inner-warp">
                              <div class="tab-inner">
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This is my first Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-poll">
                                    <h2>
                                       <a href="single_question_poll.html">This Is My Second Poll Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Third Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fourth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Fifth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Sixth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My seventh Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/avatar.png"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <article class="question question-type-normal">
                                    <h2>
                                       <a href="single_question.html">This Is My Eighth Question</a>
                                    </h2>
                                    <a class="question-report" href="#">Report</a>
                                    <div class="question-type-main"><i class="icon-question-sign"></i>Question</div>
                                    <div class="question-author">
                                       <a href="#" original-title="ahmed" class="question-author-img tooltip-n"><span></span><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                                    </div>
                                    <div class="question-inner">
                                       <div class="clearfix"></div>
                                       <p class="question-desc">Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae velit in neque dictum blandit.</p>
                                       <div class="question-details">
                                          <span class="question-answered"><i class="icon-ok"></i>in progress</span>
                                          <span class="question-favorite"><i class="icon-star"></i>5</span>
                                       </div>
                                       <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                                       <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                                       <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                                       <span class="question-view"><i class="icon-user"></i>70 views</span>
                                       <div class="clearfix"></div>
                                    </div>
                                 </article>
                                 <a href="#" class="load-questions"><i class="icon-refresh"></i>Load More Questions</a>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>