<html>

<head>
<script type="text/javascript">

function delayer(){
document.write("<?php phponload();?>");
}

</script>
<title>Untitled 4</title>
</head>

<body onLoad="setTimeout('delayer()',30000);">




<?php

$a=array (
  'content' => 
  array (
    0 => 
    array (
      'id' => 1,
      'patient' => 
      array (
        'id' => 16,
        'role' => 'PATIENT',
        'name' => 'Trần Tuấn Thành',
        'age' => 22,
        'practitioner' => 
        array (
          'id' => 9,
          'role' => 'PRACTITIONER',
          'name' => 'Nguyễn Huy Tùng',
          'age' => 22,
          'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
        ),
      ),
      'albumId' => NULL,
      'replies' => 
      array (
        0 => 
        array (
          'id' => 7,
          'inquiry' => 
          array (
            'id' => 1,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman đang rảnh không có việc gì làm',
            'type' => 0,
          ),
          'user' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'content' => 'Hihi
',
          'createdAt' => 
          array (
            0 => 2020,
            1 => 5,
            2 => 19,
            3 => 9,
            4 => 23,
            5 => 13,
          ),
          'updatedAt' => 
          array (
            0 => 2020,
            1 => 5,
            2 => 19,
            3 => 9,
            4 => 23,
            5 => 13,
          ),
        ),
      ),
      'medicalRecords' => 
      array (
        0 => 
        array (
          'id' => 5,
          'inquiry' => 
          array (
            'id' => 1,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman đang rảnh không có việc gì làm',
            'type' => 0,
          ),
          'note' => 'chẩn đoán',
          'prescription' => 'đơn thuốc',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'ghi chú',
        ),
        1 => 
        array (
          'id' => 6,
          'inquiry' => 
          array (
            'id' => 1,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman đang rảnh không có việc gì làm',
            'type' => 0,
          ),
          'note' => 'chẩn đoán 2',
          'prescription' => 'đơn thuốc 2',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'ghi chú 2',
        ),
        2 => 
        array (
          'id' => 7,
          'inquiry' => 
          array (
            'id' => 1,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman đang rảnh không có việc gì làm',
            'type' => 0,
          ),
          'note' => 'chẩn đoán 3',
          'prescription' => 'đơn thuốc 3',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'ghi chú 3',
        ),
        3 => 
        array (
          'id' => 9,
          'inquiry' => 
          array (
            'id' => 1,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman đang rảnh không có việc gì làm',
            'type' => 0,
          ),
          'note' => 'ghi chú 4',
          'prescription' => 'đơn thuốc 4',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'chẩn đoán 4',
        ),
      ),
      'dietRecords' => 
      array (
      ),
      'content' => 'Batman đang rảnh không có việc gì làm',
      'type' => 0,
      'date' => '17/05/2020 08:16:02',
      'createdAt' => 
      array (
        0 => 2020,
        1 => 4,
        2 => 24,
        3 => 11,
        4 => 51,
        5 => 9,
      ),
      'updatedAt' => 
      array (
        0 => 2020,
        1 => 5,
        2 => 19,
        3 => 9,
        4 => 19,
        5 => 19,
      ),
    ),
    1 => 
    array (
      'id' => 2,
      'patient' => 
      array (
        'id' => 16,
        'role' => 'PATIENT',
        'name' => 'Trần Tuấn Thành',
        'age' => 22,
        'practitioner' => 
        array (
          'id' => 9,
          'role' => 'PRACTITIONER',
          'name' => 'Nguyễn Huy Tùng',
          'age' => 22,
          'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
        ),
      ),
      'albumId' => NULL,
      'replies' => 
      array (
      ),
      'medicalRecords' => 
      array (
        0 => 
        array (
          'id' => 8,
          'inquiry' => 
          array (
            'id' => 2,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman bị mất ngủ',
            'type' => 0,
          ),
          'note' => 'Note của tôi',
          'prescription' => 'prescription của tôi',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 2,
            'role' => 'SPECIALIST',
            'name' => 'Bác sĩ chuyên khoa 01',
            'age' => 46,
          ),
          'diagnose' => 'diagnose của tôi',
        ),
        1 => 
        array (
          'id' => 2,
          'inquiry' => 
          array (
            'id' => 2,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman bị mất ngủ',
            'type' => 0,
          ),
          'note' => 'Rối loạn giấc ngủ',
          'prescription' => 'Thuốc ngủ neuractine 2mg',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'Không được suy nghĩ nhiều',
        ),
        2 => 
        array (
          'id' => 3,
          'inquiry' => 
          array (
            'id' => 2,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman bị mất ngủ',
            'type' => 0,
          ),
          'note' => 'Không được chơi điện thoại khuya',
          'prescription' => 'Cất điện thoại đi nhé em',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'Rối loạn giấc ngủ',
        ),
        3 => 
        array (
          'id' => 4,
          'inquiry' => 
          array (
            'id' => 2,
            'patient' => 
            array (
              'id' => 16,
              'role' => 'PATIENT',
              'name' => 'Trần Tuấn Thành',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Batman bị mất ngủ',
            'type' => 0,
          ),
          'note' => 'Rối loạn giấc ngủ',
          'prescription' => 'Dậy sớm',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'Dậy sớm để thể dục cho healthy',
        ),
      ),
      'dietRecords' => 
      array (
      ),
      'content' => 'Batman bị mất ngủ',
      'type' => 0,
      'date' => '17/05/2020 08:16:02',
      'createdAt' => 
      array (
        0 => 2020,
        1 => 4,
        2 => 24,
        3 => 11,
        4 => 51,
        5 => 17,
      ),
      'updatedAt' => 
      array (
        0 => 2020,
        1 => 5,
        2 => 19,
        3 => 8,
        4 => 39,
        5 => 21,
      ),
    ),
    2 => 
    array (
      'id' => 4,
      'patient' => 
      array (
        'id' => 5,
        'role' => 'PATIENT',
        'name' => 'Bệnh nhân 01',
        'age' => 31,
        'practitioner' => 
        array (
          'id' => 9,
          'role' => 'PRACTITIONER',
          'name' => 'Nguyễn Huy Tùng',
          'age' => 22,
          'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
        ),
      ),
      'albumId' => NULL,
      'replies' => 
      array (
      ),
      'medicalRecords' => 
      array (
      ),
      'dietRecords' => 
      array (
      ),
      'content' => 'Đau thận',
      'type' => 0,
      'date' => '17/05/2020 08:16:02',
      'createdAt' => 
      array (
        0 => 2020,
        1 => 5,
        2 => 9,
        3 => 3,
        4 => 14,
        5 => 50,
      ),
      'updatedAt' => 
      array (
        0 => 2020,
        1 => 5,
        2 => 9,
        3 => 3,
        4 => 14,
        5 => 50,
      ),
    ),
    3 => 
    array (
      'id' => 5,
      'patient' => 
      array (
        'id' => 17,
        'role' => 'PATIENT',
        'name' => 'Nguyễn Ngọc Thắng',
        'age' => 22,
        'practitioner' => 
        array (
          'id' => 9,
          'role' => 'PRACTITIONER',
          'name' => 'Nguyễn Huy Tùng',
          'age' => 22,
          'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
        ),
      ),
      'albumId' => NULL,
      'replies' => 
      array (
      ),
      'medicalRecords' => 
      array (
        0 => 
        array (
          'id' => 1,
          'inquiry' => 
          array (
            'id' => 5,
            'patient' => 
            array (
              'id' => 17,
              'role' => 'PATIENT',
              'name' => 'Nguyễn Ngọc Thắng',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Đau đầu do hút quá nhiều thuốc',
            'type' => 0,
          ),
          'note' => 'Ngủ ngày 8 tiếng, ăn mỗi ngày 3000 Kcal',
          'prescription' => 'Ăn uống ngủ nghỉ đầy đủ, không cần thuốc',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'Hihihoho',
        ),
        1 => 
        array (
          'id' => 10,
          'inquiry' => 
          array (
            'id' => 5,
            'patient' => 
            array (
              'id' => 17,
              'role' => 'PATIENT',
              'name' => 'Nguyễn Ngọc Thắng',
              'age' => 22,
              'practitioner' => 
              array (
                'id' => 9,
                'role' => 'PRACTITIONER',
                'name' => 'Nguyễn Huy Tùng',
                'age' => 22,
                'avatar' => 'https://res.cloudinary.com/drjpuaacz/image/upload/v1589533624/ABClinic_Avatars/raccoon_thumb.ngsversion.1485815402351.adapt.1900.1_shbsfn.jpg',
              ),
            ),
            'content' => 'Đau đầu do hút quá nhiều thuốc',
            'type' => 0,
          ),
          'note' => 'Ghi chú',
          'prescription' => 'Đơn thuốc',
          'createdAt' => 
          array (
          ),
          'specialist' => 
          array (
            'id' => 10,
            'role' => 'SPECIALIST',
            'name' => 'Lê Quang Thế Anh',
            'age' => 22,
            'avatar' => 'http://res.cloudinary.com/drjpuaacz/image/upload/v1589883400/ABClinic_Avatars/bird_qmdpy1.png',
          ),
          'diagnose' => 'Chẩn đoán',
        ),
      ),
      'dietRecords' => 
      array (
      ),
      'content' => 'Đau đầu do hút quá nhiều thuốc',
      'type' => 0,
      'date' => '17/05/2020 08:16:02',
      'createdAt' => 
      array (
        0 => 2020,
        1 => 5,
        2 => 12,
        3 => 11,
        4 => 39,
        5 => 19,
      ),
      'updatedAt' => 
      array (
        0 => 2020,
        1 => 5,
        2 => 18,
        3 => 1,
        4 => 22,
        5 => 44,
      ),
    ),
  ),
  'pageable' => 
  array (
    'sort' => 
    array (
      'sorted' => true,
      'unsorted' => false,
      'empty' => false,
    ),
    'pageNumber' => 0,
    'pageSize' => 4,
    'offset' => 0,
    'paged' => true,
    'unpaged' => false,
  ),
  'totalElements' => 7,
  'totalPages' => 2,
  'last' => false,
  'first' => true,
  'sort' => 
  array (
    'sorted' => true,
    'unsorted' => false,
    'empty' => false,
  ),
  'numberOfElements' => 4,
  'size' => 4,
  'number' => 0,
  'empty' => true,
);
$arrInj=$a['content'];


?>

		<?php 
			require "header.html";
			function phponload(){
				//header("Location: login.php");
			//print_r($a); 
			//$arrInj=$a['content'];
			//echo $arrInj[0]['patient']['name'];
			//echo "aaaa";
			};
			
		?>

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
       echo 	"<a href=\"tuvan.php\" class=\" btn btn-success\" >Chấp nhận</a>";
       echo     "<a href=\"tuvan.php\" class=\"btn btn-danger\" >Từ chối</a>";
       echo " </td>	";
	   echo "</tr>";
	   };
		?>
      
    </tbody>
  </table>
	

</body>
</html>
