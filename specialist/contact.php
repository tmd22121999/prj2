<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trao đổi với bệnh nhân</title>
</head>

<body>

<?php require "header.html"; ?>
<p>.</p><br/>
<div id="main" </div>

		<div class="row">
  			<div  id="kedon" class="col-md-4">a </div>
        

        <div class="col-md-8"> 
        
        <div id="messcontain"class="container content">
    	<h3>Trao đổi thêm với bệnh nhân</h3>
           <form action="" method="post" class="form-inline " name="contact">
                        <div class="form-group"  style="width:80%;">
                        <input style="pointer-events:auto; width:100%;" type="email" class="form-control mb-2 mr-sm-2" placeholder="Nhập tin nhắn" id="mess">
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">Gửi</button>
          </form>
          
          <div id="mess">
        
        <?php foreach($arrResp['replies'] as $value){ $role=$value['user']['role'];$time=$value['createdAt'];?>
        
         <div class="mcontainer <?php if (!($role=='PATIENT')) echo 'darker'; ?>">
            <img src="<?php echo $value['user']['avatar'];  ?>" alt="Avatar" <?php if (!($role=='PATIENT')) echo 'class="right"'; ?> style="width: 100px;height: 100px;">
            <p style="font-weight: bold;"><?php echo $value['user']['name']." (".$role.")";  ?></p>
            <p><?php echo $value['content'];?></p>
            <span <?php 
						if (!($role=='PATIENT')) echo 'class="time-left"' ;else  'class="time-right" ' ;
						echo ">  $time[3]:$time[4]:$time[5] $time[2]/$time[1]/$time[0]" ; ?></span>
          </div>
        <?php }; ?>
        
          <!--<div class="mcontainer patient">
            <img src="/w3images/bandmember.jpg" alt="Avatar" style="width: 50px;height: 50px;">
            <p>Hello. How are you today?</p>
            <span class="time">11:00</span>
          </div>
          
          </div>-->
		
        </div>
    </div>  <!--messcontain-->
            </div>    <!--colum-->
        </div><!--row-->
      
    </div><!--main-->

</body>
</html>