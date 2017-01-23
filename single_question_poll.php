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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/single_question_poll.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
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
                     <!--<div class="logo"><a href="index-2.html"><img alt="" src="images/logo.png"></a></div> -->
                     <?php include('nav.php'); ?>
                  </section>
               </header>
               <div class="breadcrumbs">
                  <section class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <h1>This is my second Poll Question</h1>
                        </div>
                        <div class="col-md-12">
                           <div class="crumbs">
                              <a href="#">Home</a>
                              <span class="crumbs-span">/</span>
                              <a href="#">Questions</a>
                              <span class="crumbs-span">/</span>
                              <span class="current">This is my second Poll Question</span>
                           </div>
                        </div>
                     </div>
                  </section>
               </div>
               <section class="container main-content">
                  <div class="row">
                     <div class="col-md-9">
                        <article class="question single-question question-type-poll">
                           <h2>
                              <a href="single_question.html">This is my second Poll Question</a>
                           </h2>
                           <a class="question-report" href="#">Report</a>
                           <div class="question-type-main"><i class="icon-signal"></i>Poll</div>
                           <div class="question-inner">
                              <div class="clearfix"></div>
                              <div class="question-desc">
                                 <div class="poll_1">
                                    <div class="progressbar-warp">
                                       <span class="progressbar-title">The first option 0%</span>
                                       <div class="progressbar">
                                          <div class="progressbar-percent poll-result" attr-percent="0"></div>
                                       </div>
                                       <span class="progressbar-title">The second option 75%</span>
                                       <div class="progressbar">
                                          <div class="progressbar-percent" style="background-color: #3498db;" attr-percent="75"></div>
                                       </div>
                                       <span class="progressbar-title">The third option 0%</span>
                                       <div class="progressbar">
                                          <div class="progressbar-percent poll-result" attr-percent="0"></div>
                                       </div>
                                       <span class="progressbar-title">The fourth option 25%</span>
                                       <div class="progressbar">
                                          <div class="progressbar-percent" style="background-color: #3498db;" attr-percent="25"></div>
                                       </div>
                                    </div>
                                    <a href="#" class="color button small poll_polls margin_0">Rating</a>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="poll_2">
                                    <form class="form-style form-style-3">
                                       <div class="form-inputs clearfix">
                                          <p>
                                             <input id="poll-1" name="poll-radio" type="radio">
                                             <label for="poll-1">The first option</label>
                                          </p>
                                          <p>
                                             <input id="poll-2" name="poll-radio" type="radio">
                                             <label for="poll-2">The second option</label>
                                          </p>
                                          <p>
                                             <input id="poll-3" name="poll-radio" type="radio">
                                             <label for="poll-3">The third option</label>
                                          </p>
                                          <p>
                                             <input id="poll-4" name="poll-radio" type="radio">
                                             <label for="poll-4">The fourth option</label>
                                          </p>
                                       </div>
                                    </form>
                                    <a href="#" class="color button small poll_results margin_0">Results</a>
                                 </div>
                                 <div class="clearfix height_20"></div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed commodo velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a aliquet rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque blandit posuere turpis, eget auctor felis pharetra eu .</p>
                              </div>
                              <div class="question-details">
                                 <span class="question-answered question-answered-done"><i class="icon-ok"></i>solved</span>
                                 <span class="question-favorite"><i class="icon-star"></i>5</span>
                              </div>
                              <span class="question-category"><a href="#"><i class="icon-folder-close"></i>wordpress</a></span>
                              <span class="question-date"><i class="icon-time"></i>4 mins ago</span>
                              <span class="question-comment"><a href="#"><i class="icon-comment"></i>5 Answer</a></span>
                              <span class="question-view"><i class="icon-user"></i>70 views</span>
                              <span class="single-question-vote-result">+22</span>
                              <ul class="single-question-vote">
                                 <li><a href="#" class="single-question-vote-down" title="Dislike"><i class="icon-thumbs-down"></i></a></li>
                                 <li><a href="#" class="single-question-vote-up" title="Like"><i class="icon-thumbs-up"></i></a></li>
                              </ul>
                              <div class="clearfix"></div>
                           </div>
                        </article>
                        <div class="share-tags page-content">
                           <div class="question-tags"><i class="icon-tags"></i>
                              <a href="#">wordpress</a>, <a href="#">question</a>, <a href="#">developer</a>
                           </div>
                           <div class="share-inside-warp">
                              <ul>
                                 <li>
                                    <a href="#" original-title="Facebook">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="20" span_bg="#3b5997" span_hover="#666">
                                    <i i_color="#FFF" class="social_icon-facebook"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" target="_blank">Facebook</a>
                                 </li>
                                 <li>
                                    <a href="#" target="_blank">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="20" span_bg="#00baf0" span_hover="#666">
                                    <i i_color="#FFF" class="social_icon-twitter"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a target="_blank" href="#">Twitter</a>
                                 </li>
                                 <li>
                                    <a href="#" target="_blank">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="20" span_bg="#ca2c24" span_hover="#666">
                                    <i i_color="#FFF" class="social_icon-gplus"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" target="_blank">Google plus</a>
                                 </li>
                                 <li>
                                    <a href="#" target="_blank">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="20" span_bg="#e64281" span_hover="#666">
                                    <i i_color="#FFF" class="social_icon-dribbble"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" target="_blank">Dribbble</a>
                                 </li>
                                 <li>
                                    <a target="_blank" href="#">
                                    <span class="icon_i">
                                    <span class="icon_square" icon_size="20" span_bg="#c7151a" span_hover="#666">
                                    <i i_color="#FFF" class="icon-pinterest"></i>
                                    </span>
                                    </span>
                                    </a>
                                    <a href="#" target="_blank">Pinterest</a>
                                 </li>
                              </ul>
                              <span class="share-inside-f-arrow"></span>
                              <span class="share-inside-l-arrow"></span>
                           </div>
                           <div class="share-inside"><i class="icon-share-alt"></i>Share</div>
                           <div class="clearfix"></div>
                        </div>
                        <div class="about-author clearfix">
                           <div class="author-image">
                              <a href="#" original-title="admin" class="tooltip-n"><img alt="" src="../ask-me/images/demo/admin.jpg"></a>
                           </div>
                           <div class="author-bio">
                              <h4>About the Author</h4>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor neque. Nullam lobortis, sapien vitae lobortis tristique.
                           </div>
                        </div>
                        <div id="related-posts">
                           <h2>Related questions</h2>
                           <ul class="related-posts">
                              <li class="related-item">
                                 <h3><a href="#"><i class="icon-double-angle-right"></i>This Is My Second Poll Question</a></h3>
                              </li>
                              <li class="related-item">
                                 <h3><a href="#"><i class="icon-double-angle-right"></i>This is my third Question</a></h3>
                              </li>
                              <li class="related-item">
                                 <h3><a href="#"><i class="icon-double-angle-right"></i>This is my fourth Question</a></h3>
                              </li>
                              <li class="related-item">
                                 <h3><a href="#"><i class="icon-double-angle-right"></i>This is my fifth Question</a></h3>
                              </li>
                           </ul>
                        </div>
                        <div id="commentlist" class="page-content">
                           <div class="boxedtitle page-title">
                              <h2>Answers ( <span class="color">5</span> )</h2>
                           </div>
                           <ol class="commentlist clearfix">
                              <li class="comment">
                                 <div class="comment-body comment-body-answered clearfix">
                                    <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
                                    <div class="comment-text">
                                       <div class="author clearfix">
                                          <div class="comment-author"><a href="#">admin</a></div>
                                          <div class="comment-vote">
                                             <ul class="question-vote">
                                                <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                                <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                             </ul>
                                          </div>
                                          <span class="question-vote-result">+1</span>
                                          <div class="comment-meta">
                                             <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                          </div>
                                          <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                                       </div>
                                       <div class="text">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                       </div>
                                       <div class="question-answered question-answered-done"><i class="icon-ok"></i>Best Answer</div>
                                    </div>
                                 </div>
                                 <ul class="children">
                                    <li class="comment">
                                       <div class="comment-body clearfix">
                                          <div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
                                          <div class="comment-text">
                                             <div class="author clearfix">
                                                <div class="comment-author"><a href="#">vbegy</a></div>
                                                <div class="comment-vote">
                                                   <ul class="question-vote">
                                                      <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                                      <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                                   </ul>
                                                </div>
                                                <span class="question-vote-result">+1</span>
                                                <div class="comment-meta">
                                                   <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                                </div>
                                                <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                                             </div>
                                             <div class="text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                             </div>
                                          </div>
                                       </div>
                                       <ul class="children">
                                          <li class="comment">
                                             <div class="comment-body clearfix">
                                                <div class="avatar"><img alt="" src="../ask-me/images/demo/admin.jpg"></div>
                                                <div class="comment-text">
                                                   <div class="author clearfix">
                                                      <div class="comment-author"><a href="#">admin</a></div>
                                                      <div class="comment-vote">
                                                         <ul class="question-vote">
                                                            <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                                            <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                                         </ul>
                                                      </div>
                                                      <span class="question-vote-result">+9</span>
                                                      <div class="comment-meta">
                                                         <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                                      </div>
                                                      <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                                                   </div>
                                                   <div class="text">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li class="comment">
                                       <div class="comment-body clearfix">
                                          <div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
                                          <div class="comment-text">
                                             <div class="author clearfix">
                                                <div class="comment-author"><a href="#">ahmed</a></div>
                                                <div class="comment-vote">
                                                   <ul class="question-vote">
                                                      <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                                      <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                                   </ul>
                                                </div>
                                                <span class="question-vote-result">-3</span>
                                                <div class="comment-meta">
                                                   <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                                </div>
                                                <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                                             </div>
                                             <div class="text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                              <li class="comment">
                                 <div class="comment-body clearfix">
                                    <div class="avatar"><img alt="" src="../ask-me/images/demo/avatar.png"></div>
                                    <div class="comment-text">
                                       <div class="author clearfix">
                                          <div class="comment-author"><a href="#">2code</a></div>
                                          <div class="comment-vote">
                                             <ul class="question-vote">
                                                <li><a href="#" class="question-vote-up" title="Like"></a></li>
                                                <li><a href="#" class="question-vote-down" title="Dislike"></a></li>
                                             </ul>
                                          </div>
                                          <span class="question-vote-result">+1</span>
                                          <div class="comment-meta">
                                             <div class="date"><i class="icon-time"></i>January 15 , 2014 at 10:00 pm</div>
                                          </div>
                                          <a class="comment-reply" href="#"><i class="icon-reply"></i>Reply</a>
                                       </div>
                                       <div class="text">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ol>
                        </div>
                        <div id="respond" class="comment-respond page-content clearfix">
                           <div class="boxedtitle page-title">
                              <h2>Leave a reply</h2>
                           </div>
                           <form action="#" method="post" id="commentform" class="comment-form">
                              <div id="respond-inputs" class="clearfix">
                                 <p>
                                    <label class="required" for="comment_name">Name<span>*</span></label>
                                    <input name="author" type="text" value="" id="comment_name" aria-required="true">
                                 </p>
                                 <p>
                                    <label class="required" for="comment_email">E-Mail<span>*</span></label>
                                    <input name="email" type="text" value="" id="comment_email" aria-required="true">
                                 </p>
                                 <p class="last">
                                    <label class="required" for="comment_url">Website<span>*</span></label>
                                    <input name="url" type="text" value="" id="comment_url">
                                 </p>
                              </div>
                              <div id="respond-textarea">
                                 <p>
                                    <label class="required" for="comment">Comment<span>*</span></label>
                                    <textarea id="comment" name="comment" aria-required="true" cols="58" rows="8"></textarea>
                                 </p>
                              </div>
                              <p class="form-submit">
                                 <input name="submit" type="submit" id="submit" value="Post your answer" class="button small color">
                              </p>
                           </form>
                        </div>
                        <div class="post-next-prev clearfix">
                           <p class="prev-post">
                              <a href="#"><i class="icon-double-angle-left"></i>&nbsp;Prev question</a>
                           </p>
                           <p class="next-post">
                              <a href="#">Next question&nbsp;<i class="icon-double-angle-right"></i></a>
                           </p>
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
         <!-- Mirrored from 2code.info/demo/html/ask-me-html/single_question_poll.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2016 07:06:27 GMT -->
      </html>