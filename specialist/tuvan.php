<?php 
	session_start();
	$uid=$_SESSION["UID"];
	echo $uid; 
	$_SESSION['tvid']=$_GET['id'];
	$tvid=$_SESSION['tvid']; 
	$url='https://fathomless-savannah-38522.herokuapp.com/api/inquiries/'.$tvid;
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
	
	// Trao đổi với bệnh nhân
	
	if (isset($_POST['reply']) & isset($_POST['replyText'])) 
	{
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://fathomless-savannah-38522.herokuapp.com/api/replies');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,"{ \"inquiry_id\": $tvid, \"reply\": \"$replyMess\"}");
		
		$headers = array();
		$headers[] = 'Accept: */*';
		$headers[] = 'Authorization: '.$uid;
		$headers[] = 'Content-Type: application/json';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		$resultReply = curl_exec($ch);
		 $newMess=json_decode($resultReply,true);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		else {//print_r($resultReply);
			$arrResp['replies'][]=$newMess;
		}
		curl_close($ch);
	}
	
	// Trả lời tư vấn
	

	
		if (isset($_POST['send']) ) 
	{
			$myObj->diagnose = $_POST['chuandoan'];
			$myObj->inquiry_id = $tvid;
			$myObj->note = $_POST['ketluan'];
			$myObj->prescription = $_POST['kedon'];
			
			$myJSON = json_encode($myObj);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://fathomless-savannah-38522.herokuapp.com/api/records');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$myJSON);
		
		$headers = array();
		$headers[] = 'Accept: */*';
		$headers[] = 'Authorization: '.$uid;
		$headers[] = 'Content-Type: application/json';

		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		
		$resultReply = curl_exec($ch);
		 $newRecord=json_decode($resultReply,true);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		//print_r($resultReply);
		curl_close($ch);
	}
	
	 //print_r($resp);
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
			 vào ngày : $date[2] /$date[1] /$date[0] " ?> </h6><br/>
             <div class="row">
                <div class="col-md-4"><img  src="https://i.stack.imgur.com/FaRRO.jpg?s=32&g=1" alt="Smiley face" height="250" width="250"></div>
                <div class="col-md-8"><h4>Mô tả chi tiết</h4>
                    <div id="chitiet" style="width:90%">
                    	<?php echo $arrInj['content']; ?>
                    </div>
                    <div style=" position:absolute; bottom:-50px; right:0;" >
                    	<a href="#messcontain"  class=" btn btn-primary" >Trao đổi thêm</a>
                        <a href="#reply"  class=" btn btn-primary" >Trả lời tư vấn</a>
                    </div>
                 </div>
            </div>
        </div>
<?php 	if (!$arrResp['type']) $a='medicalRecords';
	else  $a='dietRecords';
	if ($arrResp['patient']['status']>4 ) 
	 {
	?>
<div  id="lstv">

		<div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#dstv">
                Lịch sử tư vấn
              </a>
            </div>
            <div id="dstv" class="collapse " data-parent="#lstv">
              <div class="card-body">
                
                <div id="accordion">
<?php
	$i=0;
	if(empty($arrResp[$a]) ) echo "Yêu cầu này chưa có tư vấn nào";
	foreach($arrResp[$a] as $value){ $i++;?>
  
                  <div class="card">
                    <div class="card-header">
                      <a class="card-link" data-toggle="collapse" href="#collapse<?php echo $i?>">
                        Tư vấn lần <?php echo $i;?>
                      </a>
                    </div>
                    <div id="collapse<?php echo $i?>" class="collapse " data-parent="#accordion">
                      <div class="card-body">
                         <div class="row">
                            <div class="col-md-4">
                               <img  src="  <?php echo $value['doctor']['avatar'] ?>" alt="Avatar" height="50" width="50">
                            	<?php
                                    echo "<div><h6>Tư vấn của bác sĩ  :</h6>  ".$value['doctor']['name'].", ".$value['doctor']['age'] ." tuổi</div>";
									echo "<div> Số điện thoại : ".$value['doctor']['phoneNumber']."; \nEmail : ".$value['doctor']['email'] ."</div>";
									//echo "<div> ".$value['doctor']['description'] ."</div>";
									//echo "<div>Chuyên môn  : " .$value['doctor']['specialties']['name'] ." (".$value['doctor']['specialty']['detail'] .") </div>";
                                ?>
                            </div>
                            <div class="col-md-8">
								<?php
									 if ($type==0) echo "<div><h6>Chuẩn đoán :</h6>  ".$value['diagnose']."</div>";
                                    echo "<div><h6>Kê đơn :</h6>  ".$value['prescription']."</div>";
                                    echo "<div><h6>Kết luận : </h6> ".$value['note']."</div>";
                                ?>
                            </div>
                         </div>
						
                      </div>
                    </div>
                  </div>    
      	<?php }; ?>

			    
              </div>
            </div>
          </div>
</div> </div>
	<?php }; ?>

		<form action="" method="post" class="content" name="yctuvan">
        <h3 id="reply" class=" show fade"> Nhập trả lời tư vấn </h3><br />
          <div class="row">
  			<div  id="kedon" class="col-md"><div class="form-group">
          <label for="kedon"><h5>Kê đơn:</h5></label>
          <textarea name="kedon" class="form-control" rows="7" id="kedone"></textarea>
        </div> </div>
        
        <?php if($type==0) {?>
  			
        <div class="col-md"> <div class="form-group">
          <label for="chuandoan"><h5>Chuẩn đoán:</h5></label>
          <textarea name="chuandoan" class="form-control" rows="7" id="chuandoan"></textarea>
        </div></div>
        <?php } ;?>
		</div>
        <div class="form-group">
          <label for="ketluan"><h5>kết luận:</h5></label>
          <textarea name="ketluan" class="form-control" rows="4" id="ketluan"></textarea>
        </div>
         <button type="submit" value="Gửi cho bệnh nhân"  class=" btn btn-success " name="send">Gửi cho bệnh nhân</button>
      </form>
      
      

      
      
       <div id="messcontain"class="container content">
    	<h3>Trao đổi thêm với bệnh nhân</h3>
        <div id="mess">
        <?php foreach($arrResp['replies'] as $value){ $role=$value['user']['role'];$time=$value['createdAt'];?>
        
         <div class="mcontainer <?php if (!($role=='PATIENT')) echo 'darker'; ?>">
            <img src="<?php echo $value['user']['avatar'];  ?>" alt="Avatar" <?php if (!($role=='PATIENT')) echo 'class="right"'; ?> style="width: 100px;height: 100px;">
            <p style="font-weight: bold;"><?php echo $value['user']['name']." (".$role.")";  ?></p>
            <p><?php echo $value['content'];?></p>
            <span <?php 
						if (!($role=='PATIENT')) echo 'class="time-left"' ;else echo  'class="time-right" ' ;
						echo ">  $time[3]:$time[4]:$time[5] $time[2]/$time[1]/$time[0]" ; ?></span>
          </div>
        <?php }; ?>
        </div>
          <!--<div class="mcontainer patient">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width: 50px;height: 50px;">
            <p>Hello. How are you today?</p>
            <span class="time">11:00</span>
          </div>
          
          </div>-->
          
<!--          <form id="messinput" action="" method="post"  class="form-inline " name="freply">
                        <div class="form-group"  style="width:90%;">
                        <input style="pointer-events:auto; width:100%;" name="replyText" type="text" class="form-control mb-2 mr-sm-2" placeholder="Nhập tin nhắn" id="tinnhan" required="required">
                      </div>
                      <button type="submit" name="reply" class="btn btn-primary mb-2">Gửi</button>
          </form>-->
    </div>
      
      
    </div>
</body>
</html>
<script>
//		document.getElementById("kedon");
//		if(</?php echo $type?>==1)
//			document.getElementById("kedon").style.display="none";
</script>