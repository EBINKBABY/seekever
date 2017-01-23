<?php
include_once('functions.php');
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id']))
{
   $id  = $_GET['id'];
   $sql = " DELETE FROM categories WHERE id = '$id' LIMIT 1";
   $result = sqlexec($sql);
   if($result){
      echo "Deleted Successfully";
   }
   else{
      echo "Deletion Failed";

   }

}
?>