<?php 

	session_start();
//	$uid=$_SESSION["UID"];
//	if (isset($_GET['logout'])) {
//		$url='https://fathomless-savannah-38522.herokuapp.com/api/auth/sign_out';
//		$curl = curl_init();
//		curl_setopt_array($curl, array(
//    			CURLOPT_RETURNTRANSFER => 1,
//    			CURLOPT_URL => $url,
//    			CURLOPT_SSL_VERIFYPEER => false,
//			CURLOPT_POST =>1
//			
//		));
//		$headers = array(
//			"accept: */*",
//    			"Authorization: ".$uid
//		);
//		curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
//		$resp = curl_exec($curl);
//		$arrResp = json_decode($resp,true);
//		curl_close($curl);
//   		session_unset();
//          	session_destroy();
//  	}
//	if (!isset($_SESSION["UID"])){
//    header("Location: ../login.php");
//    exit;
//	}
//   print($uid);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->

</head>

<body>
		<?php require "header.html"; ?>
        <div  id="main" class="container">
		<form action="index.php?logout=true">
		<input type="submit" name="logout" value="đăng xuất"  />
        </form>
        </div>
</body>
</html>
