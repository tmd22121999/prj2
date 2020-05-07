<?php 

	session_start();
	/*if (isset($_SESSION['UID'] )){
		header("Location: index.php");
    	exit;
	}*/
	$error['pass']='';
	header('Content-Type: text/html; charset=UTF-8');
	//Xử lý đăng nhập
	if (isset($_POST['submit'])) 
	{
    //Lấy dữ liệu nhập vào
    	$username = addslashes($_POST['username']);
    	$password = addslashes($_POST['pass']);
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
   		 if (!$username || !$password) {
        		$error['pass']= "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
    		}
		else{
			// kiểm tra đăng bằng bằng email hay phone
			//$isEmail=preg_match("/@/",$username);
			//if (!$isEmail) $url='https://fathomless-savannah-38522.herokuapp.com/api/auth/login/phone?password='.$password.'&phone='.$username;
			//else 
			$url='https://fathomless-savannah-38522.herokuapp.com/api/auth/login?account='.$username.'&password='.$password;
			$curl = curl_init();
			curl_setopt_array($curl, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => $url,
    		CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_POST =>1
			
		));
		$resp = curl_exec($curl);
		$arrResp = json_decode($resp,true);
		//var_dump($weather);
		//print_r($uid);
		if (!($arrResp['userId']==-1)){
			$_SESSION["UID"]=$arrResp;
			$message = "aaaaa";
			$message =json_encode($message);
			echo "<script type='text/javascript'>alert('$message');</script>";
			curl_close($curl);
				echo '<script  type="text/javascript">';
				echo 'alert("'.$arrResp.'")';
				echo '</script>';
			header("Location: index.php");
			echo $uid;
			echo "</br>";
		}else {
			$error['pass']="Sai email,sdt hoặc mật khẩu, mời bạn nhập lại.";
			}
		curl_close($curl);
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng nhập</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="ver.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<h1 style="color:#FFF">Vui lòng đăng nhập để sử dụng trang web</h1>
	<div style=" width:300px;" id="main">
	<div>Đăng nhập</div>
	<form action="login.php" method="post" name="login" id="form" required />
		<div>Sđt hoặc email </div>
    	<input type="text" name="username" placeholder="sđt hoặc email"required />
    	<div>Mật khẩu</div>
    	<input type="password" name="pass"  />
        <br/>
         <div id="err"><?php echo $error['pass']; ?></div>
        <input type="submit"  name="submit"  value="Đăng nhập"  />
       
	</form>
	<div>Nếu bạn chưa có tài khoản? </div><div><a href="reg.php">Nhấn vào đây để tạo tài khoản</a></div>
    </div>
</body>
</html>
