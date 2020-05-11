<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Thông tin cá nhân</title>
</head>

<body>
    <div id="main">
    <form action="" method="post" name="reg">
    	<div><span>Họ và tên</span>
        	<input type="text" name="name" placeholder="Họ và tên" id="name" required />
        </div>
        <div>Email</div>
       	 	<input type="text" name="email" placeholder="Email" id="email" required />
        <div>Số điện thoại</div>
        	<input type="text" name="phone" placeholder="Số điện thoại" id="phone"  required />
        <div><span>Bạn là</span>
            <select name="role" >
                <option value="0">Đa khoa</option>
                <option value="1">Chuyên khoa</option>
                <option value="2">Dinh dưỡng</option>
                <option value="3">Điều phối</option>
                <option value="4">Bệnh nhân</option>
            </select>
        <span>Giới tính</span>
            <select name="sex" >
                <option value="0">Nam</option>
                <option value="1">Nữ</option>
                <option value="2">Khác</option>
            </select>
        </div>
        <div>Ngày sinh</div> <input type="text" name="birth" placeholder="dd/mm/yyyy" id="birth" required />
         <div>Địa chỉ</div>
        	<input type="text" name="adress" placeholder="Địa chỉ" id="adress"   />
        <input type="submit"  name="submit" id="button" value="Đăng ký"  />
    </form>
    </div>
</body>
</html>