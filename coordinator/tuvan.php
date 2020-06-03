<?php 
	session_start();
	$uid=$_SESSION["UID"];
	echo $uid;
	$injid=$_GET['id'];
	$url='https://fathomless-savannah-38522.herokuapp.com/api/inquiries/'.$injid;
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
	$arrInj=$arrResp;
	$date=$arrInj['date'];
	curl_close($curl);
		//print($resp);
	$type=$arrInj['type'];
	echo "type : " .$type;
	$pantient=$arrInj['patient'];
	echo $pantient['name'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trả lời tư vấn</title>
<style>
	body{
		background-color:#DDD !important;
	}
	html {
		scroll-behavior: smooth;
		background-color:#DDD;
	}
	.content {
		background-color: #FFF;
		margin:30px 3% 50px 0px;
		padding:40px 5% 70px 40px;
	}
</style>

</head>

<body>
	<?php require "header.html"; ?>
	<div id="main">
     	<p></p><br />
        <div class=" content">  
       		<h3>Chi tiết yêu cầu tư vấn</h3><br />
            <h6>Chi tiết yêu cầu tư vấn của bệnh nhân <?php echo " ". $pantient['name'] .", ". $pantient['age'] ." tuổi (id: ".$pantient['id'] . ")
			 vào ngày : " . $date[2] . "/" . $date[1] . "/" . $date[0]  ?> </h6><br/>
             <div class="row">
                <div class="col-md-4"><img  src="https://i.stack.imgur.com/FaRRO.jpg?s=32&g=1" alt="Smiley face" height="250" width="250"></div>
                <div class="col-md-8"><h4>Mô tả chi tiết</h4>
                    <div id="chitiet" style="width:90%">
                    	<?php echo $arrInj['content']; ?>
                    </div>
                    <div style=" position:absolute; bottom:-50px; right:0;" >
                    	<a href="#ganbn"  class=" btn btn-primary" >Gán cho bác sĩ đa khoa</a>
                    </div>
                 </div>
            </div>
        </div>
        
        <div  id="ganbn" class="container content">
	<div> <h2>Danh sách bác sĩ đa khoa</h2></div>
	<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
         <th>Avatar</th>
        <th>Họ và tên</th>
        <th>Tuổi</th>
        <th>Chuyên khoa</th>
        <th>gì đó</th>
      </tr>
    </thead>
    <tbody>
     <?php
	 
	 $url="https://fathomless-savannah-38522.herokuapp.com/api/doctors?page=1&search=role=0&size=10";
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
	$arrdoc=$arrResp['content'];
	//print_r($arrResp);
	curl_close($curl);
	 
	 foreach ($arrdoc as $value) {
		 echo "<tr>";
      	echo "<td>". $value['id']. "</td>";
      	echo "<td><img src=\"". $value['avatar']. "\" alt=\"Avatar\" height=\"100\" width=\"100\"></td>";
        echo "<td>". $value['name']. "</td>";
		echo "<td>". $value['age']. "</td>";
        echo "<td>";
		     $spec= $value['specialties'];
			 foreach($spec as $special){
			  	echo "<p> ".$special['name'] ." (".$special['detail'].");</p>";
			  };
 		echo "</td>";
         echo " <td>";
       echo 	"<a href=\"tuvan.php?id=$injid&docid=".$value['id']."\" class=\" btn btn-success\" >Gán cho bệnh nhân</a></br>";
      echo     "<a href=\"tuvan.php\" class=\"btn btn-info\" >Xem chi tiết thông tin bác sĩ</a>";
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
        
  
</div>

</body>
</html>
<script>
//		document.getElementById("kedon");
//		if(</?php echo $type?>==1)
//			document.getElementById("kedon").style.display="none";
</script>