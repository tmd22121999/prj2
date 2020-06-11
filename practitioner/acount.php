
<?php 
	session_start();
	$uid=$_SESSION["UID"];
	//echo $_SESSION["UID"];
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
		echo 'alert(\"$arrResp\")';
		echo '</script>';
		curl_close($curl);
   		session_unset();
          	session_destroy();
  	}
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
	//print_r($arrResp);
	$name=$arrResp['name'];
	$email=$arrResp['email'];
	$avatar=$arrResp['avatar'];
	$gender=$arrResp['gender'];
	$age=$arrResp['age'];
	$bd=$arrResp['dateOfBirth'];
	$phone=$arrResp['phoneNumber'];
	$creatAt=$arrResp['createdAt'] ;
	curl_close($curl);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<title>Thông tin cá nhân</title>
<script>
	function edit(){
		var x = document.getElementsByTagName("input");
		var i;
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'auto';
		}
		var x = document.getElementsByTagName("select");
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'auto';
		}
		var x = document.getElementsByTagName("label");
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'auto';
		}
		x=document.getElementById("edit");
		x.style.display="none";
		x=document.getElementById("submit1");
		x.style.display="block";
	};
	function cance(){
		var x = document.getElementsByTagName("input");
		var i;
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'none';
		}
		var x = document.getElementsByTagName("select");
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'none';
		}
		var x = document.getElementsByTagName("label");
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'none';
		}
		x=document.getElementById("edit");
		x.style.display="block";
		x=document.getElementById("submit1");
		x.style.display="none";
		document.getElementById("myForm").reset();
	};

</script>
</head>

<body>
<?php require "header.html"; ?>
    <p>.</p><br/>
    <div id="main" class="content">
    <h1>THÔNG TIN CÁ NHÂN</h1>
   
    <div id="form"> 
    	<div class=" btn btn-primary"  id="edit" onclick="edit();" >Chỉnh sửa</div>
        <form id="myForm" style="	margin: 50px 100px;;" action="" method="post" name="reg">
           <img  src="  <?php echo $avatar ?>" alt="Avatar" height="250" width="250">
            
            <div class="form-group">
                <label for="name">Họ và tên :</label>
                <input   type="text" class="form-control" placeholder="Nhập họ và tên" id="name" value="<?php echo $name;?>"required/>
              </div>
  			<!--<div><span>Họ và tên</span>
                <input class="iput" type="text" name="name" placeholder="Họ và tên" id="name" value="" required />
            </div>-->
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" placeholder="Nhập email" id="email" value="<?php echo $email;?>"required/>
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại :</label>
                <input type="text" class="form-control" placeholder="Nhập sđt" id="phone" value="<?php echo $phone;?>" required/>
              </div>
<!--            <div>
                <span>Email</span>
                    <input class="iput" type="text" name="email" placeholder="Email" id="email"   value="<?php echo $email;?>"  required />
                <span>Số điện thoại</span>
                    <input class="iput" type="text" name="phone" placeholder="Số điện thoại" id="phone"  value="<?php echo $phone;?>"   required />
             </div>-->
            <div ><span style="height:50px;">Chức vụ : bác sĩ chuyên khoa</span>
                <!--<select class="iput" name="role" >
                    <option value="0">Đa khoa</option>
                    <option value="1">Chuyên khoa</option>
                    <option value="2">Dinh dưỡng</option>
                    <option value="3">Điều phối</option>
                    <option value="4">Bệnh nhân</option>
                </select>-->
            <div class="form-group">
              <label for="gender">Giới tính:</label>
              <select class="form-control" id="gender">
                 <option <?php if($gender == '0') echo"selected"; ?>   value="0">Nam</option>
                 <option <?php if($gender == '1') echo"selected"; ?>   value="1">Nữ</option>
                 <option <?php if($gender == '2') echo"selected"; ?>   value="2">Khác</option>
              </select>
            </div>
            <!--<span >Giới tính</span>
                <select class="iput" name="sex" >
                    <option  value="0">Nam</option>
                    <option   value="1">Nữ</option>
                    <option    value="2">Khác</option>
                </select>-->
            </div>
            <div class="form-group">
                <label for="bd">Ngày sinh :</label>
                <input type="text" class="form-control" placeholder="Nhập ngày sinh" id="bd" value="<?php echo $bd;?>" required/>
              </div>
            <!--<div><span>Ngày sinh</span> <input class="iput" type="text" name="birth" placeholder="dd/mm/yyyy" id="birth"  value="<?php echo $bd;?>"  required /></div>-->
             <div><span>Địa chỉ</span> <input class="iput" type="text" name="adress" placeholder="Địa chỉ" value="không có :v" id="adress"   /></div>
             <div>Ngày tạo <?php echo $creatAt[2] . "/". $creatAt[1] ."/" . $creatAt[0]  ?>
            <div id="submit1">
                  <button style="width:40%;" type="submit" class="btn btn-success"  type="submit"  name="submit" id="save" >LƯU LẠI</button>
                   <button style="width:40%;" type="button" class="btn btn-danger" onclick="cance();">HỦY BỎ</button>
            </div>
        </form>
    </div>
    </div>
</body>
</html>