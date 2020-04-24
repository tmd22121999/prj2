<?php 

	session_start();
	if (isset($_GET['logout'])) {
   		 session_unset();
          session_destroy();
  	}
	if (!isset($_SESSION["UID"])){
    header("Location: login.php");
    exit;
	}
	echo $_SESSION["UID"];
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>
		<?php require "header.html"; ?>
		<form action="index.php?logout=true">
		<input type="submit" name="logout" value="đăng xuất"  />
        </form>
</body>
</html>