<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Danh sách tư vấn</title>
</head>

<body>
<?php require "header.html"; ?>
<div id="main" class="container content">

<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#newpa">Tư vấn của bệnh nhân mới</a>
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
    <div id="newpa" class="container tab-pane active"><br>
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
