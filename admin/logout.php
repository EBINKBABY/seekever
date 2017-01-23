<?php

session_start();
session_destroy();
echo "You have been logged out";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<a href="../index.php">Back to home</a>
</body>
</html>