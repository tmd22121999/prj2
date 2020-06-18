<?php 

	session_start();
	$uid=$_SESSION["UID"];
	if (isset($_GET['logout'])) {
		$url='https://fathomless-savannah-38522.herokuapp.com/api/auth/sign_out';
		$curl = curl_init();
		curl_setopt_array($curl, array(
    			CURLOPT_RETURNTRANSFER => 1,
    			CURLOPT_URL => $url,
    			CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_POST =>1
			
		));
		$headers = array(
			"accept: */*",
    			"Authorization: ".$uid
		);
		curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
		$resp = curl_exec($curl);
		$arrResp = json_decode($resp,true);
		echo '<script language="javascript">';
		echo 'alert($arrResp)';
		echo '</script>';
		curl_close($curl);
   		session_unset();
          	session_destroy();
  	}
	//print($uid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang chủ</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif) center no-repeat #fff;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    </script>
</head>

<body>
<div class="se-pre-con"></div>
		<?php require "header.html"; ?>
        <div  id="main">
		<form action="index.php?logout=true">
		<input type="submit" name="logout" value="đăng xuất"  />
        </form>
         <?php
			  if (!isset($_SESSION["UID"])){
				header("Location: login.php");
				exit;
			}	
			
		?>
        </div>
</body>
<div class="se-pre-con"></div>



<?php 
	$url='https://fathomless-savannah-38522.herokuapp.com/api/user';
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $url,
		CURLOPT_SSL_VERIFYPEER => false,
		//CURLOPT_POST =>1
	));
	
	$headers = array(
		"accept: */*",
		"Authorization: ".$uid
	);
	
	curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
	$resp = curl_exec($curl);
	$arrResp = json_decode($resp,true);
	curl_close($curl);
	switch ( $arrResp['role']) {
  		case "SPECIALIST":
		//	$_SESSION["UID"]=$uid;
			//header("Location: specialist/acount.php");
			echo '<script>';
			echo "window.location = 'specialist/acount.php';";
   			echo '</script>';	
		break;
  		case "PRACTITIONER":
    		//header("Location: record.php");
			echo '<script>';
			echo "window.location = 'practitioner';";
   			echo '</script>';		
			break;
		case "DIETITIAN":
			echo '<script>';
			echo "window.location = 'specialist/acount.php';";
   			echo '</script>';	
			//header("Location:specialist/acount.php");
		break;
		case "COORDINATOR":
			echo '<script>';
			echo "window.location = 'coordinator';";
   			echo '</script>';	
//			header("Location: coordinator");
		break;

		 default:
		 	echo '<script language="text/javascript">';
			echo 'alert( "bệnh nhân không được lướt web để sử dụng ứng dụng =))))) mời tải app về để sử dụng")';
			echo '</script>';
			
			$url='https://fathomless-savannah-38522.herokuapp.com/api/auth/sign_out';
			$curl = curl_init();
			curl_setopt_array($curl, array(
					CURLOPT_RETURNTRANSFER => 1,
					CURLOPT_URL => $url,
					CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_POST =>1
				
			));
			$headers = array(
				"accept: */*",
					"Authorization: ".$uid
			);
			curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
			$resp = curl_exec($curl);
			$arrResp = json_decode($resp,true);

			curl_close($curl);
			session_unset();
				session_destroy();
				echo '<script>';
			echo 'alert("vì lý do nào đó bệnh nhân không được lướt web để sử dụng ứng dụng , \nmời bạn tải app về để sử dụng. nếu là bác sĩ ");';
			echo "window.location.reload();";
			echo '</script>';
			
			break;
			}
		?>

</html>
