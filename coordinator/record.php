<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách tư vấn</title>
</head>

<body>
<?php require "header.html"; ?>
<div id="main" class="container">
    
   	 <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#newpa">Tư vấn của bệnh nhân mới</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#newinj">Tất cả yêu cầu tư vấn</a>
        </li>
      </ul>
    <div class="tab-content">
        <div id="newpa" class="container tab-pane active"><br>
          <h3> Yêu cầu tư vấn của bệnh nhân mới</h3>
          <p>Danh sách hững yêu cầu tư vấn của bệnh nhân mới chưa được gán cho bác sĩ đã khoa: </p>
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
                <a href="#" class=" btn btn-success" >Gán bệnh nhân</a>
            </td>
          </tr>
        </tbody>
      </table>
        </div>
        <div id="newinj" class="container tab-pane fade"><br>
          <h3> Danh sách yêu cầu tư vấn </h3>
          <p>Danh sách tất cả yêu cầu tư vấn của bệnh nhân đã được gửi đến bệnh viện:</p>
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
               		 <td><a href="tuvan.php" class="nav-link" >Xem chi tiết</a></td>
					</tr>
            	</tbody>
          	</table>
        </div>
    </div>
</div>
</body>
</html>