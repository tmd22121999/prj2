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
             <div class="row">
                <div class="col-md-4"><img  src="https://i.stack.imgur.com/FaRRO.jpg?s=32&g=1" alt="Smiley face" height="250" width="250"></div>
                <div class="col-md-8"><h4>Mô tả chi tiết</h4>
                    <div id="chitiet" style="width:90%">
                    	hfaflsjfsnfsakejlnd.sknflewfnk.hfaflsjfsnfsakejlnd.sknflewfnk.hfaflsjfsnfsakejlnd.sknflewfnk.hfaflsjfsnfsakejlnd.sk
                    </div>
                    <a href="#reply" style=" position:absolute; bottom:-50px; right:0;" class=" btn btn-primary" >Trả lời tư vấn</a>
                 </div>
            </div>
        </div>

		<form action="tuvan.php" method="post" class="content" name="yctuvan">
        <h3 id="reply" class=" show fade"> Nhập trả lời tư vấn </h3><br />
          <div class="row">
  			<div class="col-md"> <div class="form-group">
          <label for="chuandoan"><h5>Chuẩn đoán:</h5></label>
          <textarea name="chuandoan" class="form-control" rows="7" id="chuandoan"></textarea>
        </div></div>
  			<div class="col-md"><div class="form-group">
          <label for="kedon"><h5>Kê đơn:</h5></label>
          <textarea name="kedon" class="form-control" rows="7" id="kedon"></textarea>
        </div> </div>
		</div>
        <div class="form-group">
          <label for="ketluan"><h5>kết luận:</h5></label>
          <textarea name="keluan" class="form-control" rows="4" id="ketluan"></textarea>
        </div>
        <input value="Gửi cho bệnh nhân"  class=" btn btn-success " name="send" type="submit">
      </form>
    </div>
</body>
</html>