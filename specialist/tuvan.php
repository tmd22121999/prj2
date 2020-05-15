<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trả lời tư vấn</title>

</head>

<body>
	<?php require "header.html"; ?>
	<div id="main">
		<form action="tuvan.php" method="post" name="yctuvan">'
        <div> Mời nhập yêu cầu tư vấn của bạn </div>
        <textarea name="tuvan" cols="50" rows="20"></textarea>
      </form>
      <form action="tuvan.php" method="get"><input name="" type="submit"></form>
    </div>
</body>
</html>