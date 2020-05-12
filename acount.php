<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Thông tin cá nhân</title>
<script>
	function edit(){
		var x = document.getElementsByClassName("iput");
		var i;
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'auto';
		}
		x=document.getElementById("edit");
		x.style.display="none";
		x=document.getElementById("submit1");
		x.style.display="block";
	};
	function cance(){
		var x = document.getElementsByClassName("iput");
		var i;
		for (i = 0; i < x.length; i++) {
			x[i].style['pointer-events'] = 'none';
		}
		x=document.getElementById("edit");
		x.style.display="block";
		x=document.getElementById("submit1");
		x.style.display="none";
	};

</script>
</head>

<body>
<?php require "header.html"; ?>
    <div id="main">
    <h1>THÔNG TIN CÁ NHÂN</h1>
   
    <div id="form"> 
    	<div id="edit" onclick="edit();" >Chỉnh sửa</div>
        <form style="	margin: 50px 100px;;" action="" method="post" name="reg">
           <img  src="https://st.quantrimang.com/photos/image/072015/22/avatar.jpg" alt="avatar" height="250" width="250">
            <div><span>Họ và tên</span>
                <input class="iput" type="text" name="name" placeholder="Họ và tên" id="name" required />
            </div>
            <div>
                <span>Email</span>
                    <input class="iput" type="text" name="email" placeholder="Email" id="email" required />
                <span>Số điện thoại</span>
                    <input class="iput" type="text" name="phone" placeholder="Số điện thoại" id="phone"  required />
             </div>
            <div ><span style="height:50px;">Bạn là</span>
                <select class="iput" name="role" >
                    <option value="0">Đa khoa</option>
                    <option value="1">Chuyên khoa</option>
                    <option value="2">Dinh dưỡng</option>
                    <option value="3">Điều phối</option>
                    <option value="4">Bệnh nhân</option>
                </select>

            <span >Giới tính</span>
                <select class="iput" name="sex" >
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                    <option value="2">Khác</option>
                </select>
            </div>
            <div><span>Ngày sinh</span> <input class="iput" type="text" name="birth" placeholder="dd/mm/yyyy" id="birth" required /></div>
             <div><span>Địa chỉ</span> <input class="iput" type="text" name="adress" placeholder="Địa chỉ" id="adress"   /></div>
            <div id="submit1">
            	<input class="submit" type="submit"  name="submit" id="save" value="LƯU LẠI"  />
            	<input class="submit"  onclick="cance();" value="HỦY BỎ"/>
            </div>
        </form>
    </div>
    </div>
</body>
</html>
