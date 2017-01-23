<select name="category" selected="<?php echo $_SESSION['category']; ?>">>
                                    <?php 
                                    $sql = "SELECT * FROM categories ";
                                    $result = sqlexec($sql);
                                     while ($row=mysqli_fetch_assoc($result)){
                                          $_SESSION['category'] = '';
                                          $id = $row['id'];
                                          $row['id'];
                                          $name = $row['name'];
                                          echo "<option value=\"$id\" if($category==$id){ $_SESSION['category'] =$id; }>" .$name.
                                          "</option>"; 
                                          if($_POST['category'] == $id){
                                            $_SESSION['category'] = 'selected';
                                          }
                                       }
                                    ?>
                                    </select>
                                    ///////////////////////
                                    nav.php

                                     <?php
                              foreach ($categories as $category) {
                                 echo"<li><a href=\"cat_question.php?id=".$category['id']."\">".$category['name']."</a></li>";
                              }
                              ?>

                              \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\



                              <select name="category">
                                    <?php 
                                    $sql = "SELECT * FROM categories ";
                                    $result = sqlexec($sql);
                                     while ($row=mysqli_fetch_assoc($result)){
                                          
                                          $id = $row['id'];
                                          $name = $row['name'];
                                          //$categoryid = $_POST['category'];
                                          echo "<option value=\"$id\" >$name</option>";
                                       
                                         
                                       }
                                    ?>
                                    </select>


<?php
session_start();
include_once('functions.php');
if(!isloggedin()){
redirect('login.php');
}

$user_id=get_current_user_id();
//$category=get_current_category_id();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $title=$_POST['title'];
 $descr=$_POST['descr'];

 //$user_id=$_POST['userid'];
 $sql="INSERT INTO questions(title,descr,userid) VALUES('$title','$descr','$user_id')";
 $result = sqlexec($sql);
 if($result){
   echo "<b>Cateory Added</b>";
   
 }
 else{
   echo "<b>Failed</b>";

 }
}
?>



                              ////////////////////////////
                              cat_question.php


                              <?php
$cat_id=$_GET['id'];
$sql="SELECT * FROM categories WHERE id='$cat_id'";
$result=mysqli_query($connect,$sql);
$category=mysqli_fetch_assoc($result);
$sql="SELECT * FROM questions WHERE category='$cat_id'";
$result=mysqli_query($connect,$sql);
$questions=mysqli_fetch_assoc($result);
?>