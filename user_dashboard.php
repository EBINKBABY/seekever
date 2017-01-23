<?php
session_start();
include_once('functions.php');

if (!isloggedin()) {
	redirect('login.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
</head>
<body>
<ul>
	<a href="ask_question.php"><li>Ask A question</li></a>

</ul>
</body>
</html>

