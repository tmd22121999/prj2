<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});</script>
    <div class="se-pre-con"></div>

<?php 
	session_start();
	$uid=$_SESSION["UID"];
	echo $uid;
	$url='https://fathomless-savannah-38522.herokuapp.com/api/inquiries?page=1&size=4';
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
	$arrInj=$arrResp['content'];
	//print_r($arrResp);
	curl_close($curl);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách tư vấn</title>

</head>

<body>

<?php require "header.html"; ?>
<p>.</p><br/>
<div id="main" class="container content">

<ul class="nav nav-tabs" role="tablist">
	<li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#all">Tất cả yêu cầu tư vấn</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#newpa">Tư vấn của bệnh nhân mới</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#newinj">Tư vấn mới</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#inj">Tư vấn cũ</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="newpa" class="container tab-pane fade"><br>
      <h3> Danh sách tư vấn của bệnh nhân mới</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td>
        	<a href="tuvan.php" class=" btn btn-success" >Chấp nhận</a>
            <a href="tuvan.php" class="btn btn-danger" >Từ chối</a>
        </td>
      </tr>
    </tbody>
  </table>
    </div>
    <div id="newinj" class="container tab-pane fade"><br>
      <h3> Danh sách tư vấn mới</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link" >Trả lời tư vấn </a></td>
      </tr>
    </tbody>
  </table>
    </div>
    <div id="inj" class="container tab-pane fade"><br>
        <h3> Danh sách tư vấn cũ</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link" >Trao đổi thêm </a></td>
      </tr>
    </tbody>
  </table>
    </div>
    
    <div id="all" class="container tab-pane active"><br>
      <h3> Danh sách tất cả yêu cầu tư vấn của bệnh nhân </h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Bệnh nhân</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
	 foreach ($arrInj as $value) {
		 echo "<tr>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td>". $value['patient']['name']. "</td>";
        echo "<td>". $value['content']. "</td>";
         echo " <td>";
       echo 	"<a href=\"tuvan.php?id=". $value['id'] ."\" class=\" btn btn-primary\" >Xem chi tiết yêu cầu</a>";
       //echo     "<a href=\"tuvan.php\" class=\"btn btn-danger\" >Từ chối</a>";
       echo " </td>	";
	   
	   echo "</tr>";
	   };
		?>
    </tbody>
  </table>
    </div>
    
  </div>
  
</div>
	<!--<h3> Danh sách tư vấn của bệnh nhân mới</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link nav-danger" >Chấp nhận</a></td>
      </tr>
    </tbody>
  </table>
  <h3> Danh sách tư vấn mới</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link" >Trả lời tư vấn </a></td>
      </tr>
    </tbody>
  </table>
  <h3> Danh sách tư vấn cũ</h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>Họ tên</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link" >Trao đổi thêm </a></td>
      </tr>
    </tbody>
  </table>-->
</div>
</body>
</html>