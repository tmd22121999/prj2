<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    // mã hóa pasword
   // $password = md5($password);
     

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </head>
    <body>
        <form action='test.php' method='POST'>
            <table cellpadding='0' cellspacing='0' border='1'>
                <tr>
                    <td>
                        Tên đăng nhập :
                    </td>
                    <td>
                        <input type='text' name='txtUsername' />
                    </td>
                </tr>
                <tr>
                    <td>
                        Mật khẩu :
                    </td>
                    <td>
                        <input type='password' name='txtPassword' />
                    </td>
                </tr>
            </table>
            <input type='submit' value='Đăng nhập' />
            <a href='dangky.php' title='Đăng ký'>Đăng ký</a>
        </form>
        <input type='submit' value='Đăng nhập'  id='dangnhap'/>
        <div id='result'>kết quả<?php 
	$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://fathomless-savannah-38522.herokuapp.com/api/auth/login/phone?password=123456&phone=0986135713',
    CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_POST =>1
	
));

$resp = curl_exec($curl);
//Dữ liệu thời tiết ở dạng JSON
//$weather = json_decode($resp);
//var_dump($weather);
$uid=json_decode($resp);
echo $uid;
echo "</br>";
curl_close($curl);

	$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://fathomless-savannah-38522.herokuapp.com/api/specialties',
    CURLOPT_SSL_VERIFYPEER => false,
));

$headers = array(
	"accept: */*",
    "Authorization: ".$uid
);
curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
$resp = curl_exec($curl);
//Dữ liệu thời tiết ở dạng JSON
$weather = json_decode($resp,true);
echo $weather["message"];
//var_dump($weather);
curl_close($curl);
?></div>
    </body>
</html>
<script>
$(document).ready(function(){
 $('#dangnhap').click(function(){
	
 	
	
   })
})
</script>