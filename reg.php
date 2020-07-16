<?php
	$error['pass']='';
	//https://fathomless-savannah-38522.herokuapp.com/api/auth/sign_up?dob=22%2F12%2F1999&email=tmd22121999%40gmail.com&gender=0&name=t%E1%BB%91ng&password=123456&phone=0913421785&role=0

	header('Content-Type: text/html; charset=UTF-8');
	//Xử lý đăng nhập
	if (isset($_POST['submit'])) 
	{
    //Lấy dữ liệu nhập vào
    	$name = addslashes($_POST['name']);
    	$password = addslashes($_POST['pass']);
		$email = addslashes($_POST['email']);
		$birth  = addslashes($_POST['birth']);
		$phone = addslashes($_POST['phone']);
		$role = addslashes($_POST['role']);
		$sex = addslashes($_POST['sex']);

			
			$url='https://fathomless-savannah-38522.herokuapp.com/api/auth/sign_up';
			$curl = curl_init();
			curl_setopt_array($curl, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => $url,
    		CURLOPT_SSL_VERIFYPEER => false,
			CURLOPT_POST =>1,
			CURLOPT_POSTFIELDS => http_build_query(array( 
				'dob' => $birth,
				'email' => $email,
				'gender'=>$sex,
				'name'=>$name,
				'password'=>$password,
				'phone'=>$phone,
				'role'=>$role
			))
		));
		echo $role;
		$headers = array();
			$headers[] = 'Accept: */*';;
			$headers[] = 'Content-Type: application/json';
			curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$resp = curl_exec($curl);
		$arrResp = json_decode($resp,true);
		//var_dump($weather);
		//print_r($uid);
		//echo $arrResp;
		$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		echo $http_status;
		if (  $http_status==201 ){
			//echo $resp;
			curl_close($curl);
			//header("Location: index.php");
			//echo $arrResp;
			//echo "</br>";
		}else {
			print_r($arrResp);
			$error['pass']=$arrResp['message'];
			curl_close($curl);
			}
		
	//	}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>đăng ký</title>
<link href="style.css" rel="stylesheet" type="text/css" /><link href="ver.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="main">
	<div>Đăng ký</div>
    <form action="" method="post" name="reg">
    	<div><span>Họ và tên</span>
        	<input type="text" name="name" placeholder="Họ và tên" id="name" required />
        </div>
        <div>Email</div>
       	 	<input type="text" name="email" placeholder="Email" id="email" required />
        <div>Số điện thoại</div>
        	<input type="text" name="phone" placeholder="Số điện thoại" id="phone"  required />
        <div>Mật khẩu</div>
        <input type="password" name="pass" id="pass" required />
        <div><span>Bạn là</span>
            <select name="role" >
                <option value="0">Đa khoa</option>
                <option value="1">Chuyên khoa</option>
                <option value="2">Dinh dưỡng</option>
                <option value="3">Điều phối</option>
            </select>
        <span>Giới tính</span>
            <select name="sex" >
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
                <option value="2">Khác</option>
            </select>
        </div>
        <div>Ngày sinh</div> <input type="text" name="birth" placeholder="dd/mm/yyyy" id="birth" required />
         <div id="err"><?php echo $error['pass']; ?></div>
        <input type="submit"  name="submit" id="button" value="Đăng ký"  />
    </form>
    <div> Bạn đã có tài khoản?</div><div> <a href="login.php">Nhấn vào đây để đăng nhập</a></div>
    </div>
</body>
</html>