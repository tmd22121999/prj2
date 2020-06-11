<?php 
	session_start();
	$uid=$_SESSION["UID"];
	echo $uid;
	$page=1;
	if(isset($_GET['page']) ) $page=$_GET['page'];

	$url="https://fathomless-savannah-38522.herokuapp.com/api/patients?page=$page&size=10";
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
	//print_r($resp);
	$arrInj=$arrResp['content'];
	//print_r($arrResp);
	curl_close($curl);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách bệnh nhân</title>
</head>
<body>
<?php require "header.html"; ?>
<p>.</p><br/>
<div id="main" class="container content">
	<div  class="mr-auto"> <h2>Danh sách bênh nhân</h2></div>
        <a href="reg.php" class=" btn btn-success" >Đăng ký tài khoản bệnh nhân mới</a>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
         <th>Avatar</th>
        <th>Họ và tên</th>
        <th>Tuổi</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
     <?php
	 foreach ($arrInj as $value) {
		 echo "<tr>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td><img src=\"". $value['avatar']. "\" alt=\"Avatar\" height=\"150\" width=\"150\"></td>";
        echo "<td>". $value['name']. "</td>";
		echo "<td>". $value['age']. "</td>";
     //   echo "<td>". $value['name']. "</td>";
         echo " <td>";
       echo 	"<a href=\"benhnhan.php?id=".$value['id']."\" class=\" btn btn-info\" >Xem chi tiết bệnh nhân</a>";
      // echo     "<a href=\"tuvan.php\" class=\"btn btn-danger\" >Từ chối</a>";
       echo " </td>	";
	   
	   echo "</tr>";
	   };
		?>
    </tbody>
  </table>
    	<ul class="pagination  justify-content-center" style="margin:20px 0">
      <li class="page-item  <?php if($arrResp['first']) echo 'disabled' ;?>"><a class="page-link" href="?page=<?php echo $page-1; ?>">Previous</a></li>
      <?php for($i = 1; $i <= $arrResp['totalPages']; $i++) { ?>
      <li class="page-item  <?php if($i==$page) echo 'active' ;?> "><a class="page-link" href="?page=<?php echo $i .' ">'.$i; ?></a></li>
	  <?php 
	  	};
	  ?>
      <li class="page-item <?php if($arrResp['last']) echo 'disabled' ;?> "><a class="page-link" href="?page=<?php echo $page+1; ?>">Next</a></li>
	</ul>
</div>
</body>
</html>