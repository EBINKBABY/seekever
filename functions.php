<?php
	function getconnection(){

	    $connect = mysqli_connect('localhost','root','','seekever') or die("Couldn't connect to the database");
		return $connect;
	}
	function sqlexec($sql){
		$connect = getconnection();
		$result=mysqli_query($connect,$sql);
		if($result){
			return $result;
		}
		else{
			return false;
		}
	}
	function redirect($url){
		header('location:'.$url);

	}

	function isloggedin(){
		if (isset($_SESSION['current_user'])) {
			return true;
		}else{
			return false;
		}
		
	}

	function get_current_user_id(){
		if (isset($_SESSION['current_user'])) {
			$userid = $_SESSION['current_user'];
			return $userid;
		}

	}
	function get_current_category_id()
	{
		if (isset($_SESSION['category'])){
			$category_id = $_SESSION['category'];
			return $category_id;
		}
	}


	



?>