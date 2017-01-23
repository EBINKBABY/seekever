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
		if (isset($_SESSION['admin_user'])) {
			return true;
		}else{
			return false;
		}
		
	}

?>