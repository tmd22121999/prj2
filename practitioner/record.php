<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script>
//paste this code under the head tag or in a separate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
    function filter(){
		  var kbcheck = document.getElementById("type0");
		  var ddcheck = document.getElementById("type1");
		  if (kbcheck.checked == true){
				var x = document.getElementsByClassName("type0");
				var i;
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "table-row";
				}		  
			} else {
				var x = document.getElementsByClassName("type0");
				var i;
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}	
		  }
		  if (ddcheck.checked == true){
				var x = document.getElementsByClassName("type1");
				var i;
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "table-row";
				}		  
			} else {
				var x = document.getElementsByClassName("type1");
				var i;
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}	
		  }
	};
</script>
    <div class="se-pre-con"></div>

<?php 
	session_start();
	$uid=$_SESSION["UID"];
	$page=1;
	if(isset($_GET['page']) ) $page=$_GET['page'];
	echo $uid;
	$url='https://fathomless-savannah-38522.herokuapp.com/api/inquiries?assigned=true&page=' .$page .'&size=10';
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
	$typeInj = array("Khám bệnh","Dinh dưỡng","","bg-light");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách tư vấn</title>
<style>
input {
    pointer-events: auto !important;
}
</style>
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
      <a class="nav-link" data-toggle="tab" href="#newpa">Bệnh nhân chưa được gán</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#newinj">Yêu cầu tư vấn mới</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#inj">Yêu cầu tư vấn cũ</a>
    </li>
  </ul>

<h6>Loại yêu cầu tư vấn: </h6><input id="type0" checked="checked" name="filterA" type="checkbox" onclick="filter()" value="0" /> <span> Khám bệnh</span><input  id="type1" name="filterB" checked="checked" type="checkbox" onclick="filter()" value="0" /> <span> Dinh dưỡng</span>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="newpa" class="container tab-pane fade"><br>
      <h3>Yêu cầu gán bệnh nhân</h3>
      <p>Danh sách yêu cầu tư vấn của bệnh nhân mới chưa được gán cho đa khoa</p>
	<table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Họ tên</th>
        <th>Loại yêu cầu</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
	$i=0;
	 foreach ($arrInj as $value) {
		 
		 if($value['patient']['status']%2){
		 echo "<tr class='type".$value['type']." ". $typeInj[$value['type']+2]."'>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td>". $value['patient']['name']. "</td>";
		echo "<td>".$typeInj[$value['type']]."</td>";
        echo "<td>". $value['content']. "</td>";
         echo " <td>";
       echo 	"<a href=\"tuvan.php?id=". $value['id'] ."\" class=\" btn btn-success\" >Chấp nhận</a>";
       echo 	"<a href=\"tuvan.php?id=". $value['id'] ."\" class=\" btn btn-danger\" >Từ chối</a>";
       echo " </td>	";
	   
	   echo "</tr>";
	   $i++;
		 };
		};
		if(!$i) echo "<p class='text-danger' >Không có yêu cầu tư vấn nào của bệnh nhân chưa được gán trong trang $page.</p>";
		?>
    
<!--      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td>
        	<a href="tuvan.php" class=" btn btn-success" >Chấp nhận</a>
            <a href="tuvan.php" class="btn btn-danger" >Từ chối</a>
        </td>
      </tr>-->
    </tbody>
  </table>
    </div>
    <div id="newinj" class="container tab-pane fade"><br>
      <h3> Danh sách yêu cầu tư vấn mới</h3>
      <p>Danh sách yêu cầu mới của bệnh nhân cần được gán cho cấp dưới: bác sĩ chuyên khoa hoặc bác sĩ dinh dưỡng</p>
	<table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Họ tên</th>
        <th>Loại yêu cầu</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
    
    <?php
	$i=0;
	 foreach ($arrInj as $value) {
		 $mr=$value['medicalRecords'];
		 if(($value['patient']['status']==2) &( empty($mr) ) ){
		 echo "<tr class='type".$value['type']." ". $typeInj[$value['type']+2]."'>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td>". $value['patient']['name']. "</td>";
		echo "<td>".$typeInj[$value['type']]."</td>";
        echo "<td>". $value['content']. "</td>";
         echo " <td>";
       echo 	"<a href=\"tuvan.php?id=". $value['id'] ."\" class=\" btn btn-success\" >Gán cho cấp dưới</p>";
       echo " </td>	";
	   
	   echo "</tr>";
	   $i++;
		 };
		
		};
		if(!$i) echo " <p class='text-danger' >Không có yêu cầu tư vấn nào mới trong trang $page.</p>";
		?>    
    
<!--      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link" >Trả lời tư vấn </a></td>
      </tr>-->
    </tbody>
  </table>
    </div>
    <div id="inj" class="container tab-pane fade"><br>
        <h3> Danh sách yêu cầu tư vấn cũ</h3>
        <p>Danh sách yêu cầu tư vấn của bệnh nhân đã được gán cho cấp dưới</p>
	<table class="table table-hover">
    <thead>
      <tr>
      	<th>ID</th>
        <th>Họ tên</th>
        <th>Loại yêu cầu</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
	 foreach ($arrInj as $value) {
		 $mr=$value['medicalRecords'];
		 if($value['patient']['status']>4 ){
		 echo "<tr class='type".$value['type']." ". $typeInj[$value['type']+2]."'>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td>". $value['patient']['name']. "</td>";
		echo "<td>".$typeInj[$value['type']]."</td>";
        echo "<td>". $value['content']. "</td>";
         echo " <td>";
       echo 	"<a href=\"tuvan.php?id=". $value['id'] ."\" class=\" btn btn-warning\" >Trao đổi thêm</a>";
       echo " </td>	";
	   
	   echo "</tr>";
		 };
		// else echo "Không có yêu cầu tư vấn nào của bệnh nhân chưa được gán.
		};
		?>    
      
<!--      <tr>
        <td>Bệnh nhân 01</td>
        <td>Đau bụng</td>
        <td><a href="tuvan.php" class="nav-link" >Trao đổi thêm </a></td>
      </tr>
-->    </tbody>
  </table>
    </div>
    
    <div id="all" class="container tab-pane active"><br>
      <h3> Danh sách tất cả yêu cầu tư vấn của bệnh nhân </h3>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Bệnh nhân</th>
        <th>Loại yêu cầu</th>
        <th>Mô tả</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
      
      <?php
	 foreach ($arrInj as $value) {
		 echo "<tr class='type".$value['type']." ". $typeInj[$value['type']+2]." '>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td>". $value['patient']['name']. "</td>";
		echo "<td>".$typeInj[$value['type']]."</td>";
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
  

	<!-- <h3> Danh sách tư vấn của bệnh nhân mới</h3>
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
  </table>-->
  
	
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