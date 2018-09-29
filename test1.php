<html>
<head>
<title>การเชื่อมต่อพีเอชพีกับมายด์เอสคิวแอลโดยใช้รูปแบบภาษา UTF-8  </title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/stylesheet.css">
</head>
<body>
<?php
/* เปิดการเชื่อมต่อฐานข้อมูล พร้อมทั้งเลือกฐานข้อมูล*/
include "connect.php";
/* การจัดการฐานข้อมูลตามความต้องการ */
/* การเพิ่มข้อมูล */

/* แสดงข้อมูล */
$strSQL2 = "SELECT * FROM testtb";
$objQuery2 = mysqli_query($link,$strSQL2);
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">หน้าแรก</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="test1.php">แก้ไขข้อมูลสินค้า</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addData.php">เพิ่มข้อมูล</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<h3>แก้ไขข้อมูลสินค้า</h3>
	<div class="row">
		<?php
		while($objResult = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
		{
		?>
		<div class="col-sm-4 xs-12 md-3">
      <div class="card">
        <div class="card-header">
          <img src="imgProduct/<?=$image;?>"width="300">
        </div>
        <div class="card-body">
          <span><?=$objResult["name"];?></span>
					<p><?=$objResult["surname"];?></p>
        </div>
        <div class="card-footer" id="card-footer">
					<a href="editdata.php?idedit=<?=$objResult['id']?>"><button type="button" class="btn btn-warning">Edit</button></a>
					<a href="deldata.php?iddel=<?=$objResult['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
        </div>
      </div>
    </div>
		<?php
		}
		?>
	</div>
</div>

	<?php
/* การปิดการเชื่อมต่อฐานข้อมูล  */
	mysqli_close($link);
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
