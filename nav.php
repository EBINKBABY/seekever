
 <nav class="navigation">
                        <ul>
                           <li>
                              <a href="index.php">തുടക്കം</a>
                             
                           </li>
                           <li class="ask_question"><a href="ask_question.php">ചോദ്യം</a></li>
                           <li>
                              <a href="cat_question.php">വിഭാഗങ്ങൾ</a>
                              <ul>
                               <?php 
                               include('functions.php');
                                    $sql = "SELECT * FROM categories ";
                                    $result = sqlexec($sql);
                                     while ($row=mysqli_fetch_assoc($result)){
                                          
                                          $id = $row['id'];
                                          $name = $row['name'];
                                      echo "<li><a href=\"cat_question.php?id=$id\">$name</a></li>";
                                         
                                       }
                                    ?>
                              </ul>
                           </li>
                           <li>
                              <a href="user_profile.php">ഉപയോക്താവ്</a>
                              <ul>
                                 <li><a href="user_profile.php">രൂപരേഖ</a></li>
                                 <li><a href="user_questions.php">ചോദ്യങ്ങള്‍</a></li>
                                 <li><a href="user_answers.php">ഉത്തരങ്ങൾ</a></li>
                                 <li><a href="user_favorite_questions.php">പ്രിയപ്പെട്ട ചോദ്യങ്ങള്‍</a></li>
                                 <li><a href="user_points.php">നേട്ടങ്ങൾ</a></li>
                                 <li><a href="edit_profile.php">രൂപരേഖ തിരുത്തുക</a></li>
                              </ul>
                           </li>
                           <li><a href="shortcodes.php">അറിയിപ്പുകൾ</a></li>
                           <li><a href="contact_us.php">ബന്ധപ്പെടുക</a></li>
                        </ul>
                     </nav>
                     