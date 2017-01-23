<?php
include('connect.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
if($password && $password2 && $username && $email)
{
	if($password == $password2)
	{
		$sql = "INSERT INTO register(username,email,password,password2) VALUES('$username','$email','$password','$password2')";
        $result = $connect->query($sql);
	    echo "Registered Successfully";
	    //header("Location: index.php");
	}
	else
     {
	echo "Passwords are different";
     }
}
else
{
	echo "Please fill all fields";
}

?>