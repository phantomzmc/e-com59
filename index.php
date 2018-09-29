<html>
<head>
<title>การเชื่อมต่อพีเอชพีกับมายด์เอสคิวแอลโดยใช้รูปแบบภาษา UTF-8  </title>
<meta charset="utf-8">
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/stylesheet.css"
</head>
<body>
<?php
/* เปิดการเชื่อมต่อฐานข้อมูล พร้อมทั้งเลือกฐานข้อมูล*/
include "connect.php";
/* การจัดการฐานข้อมูลตามความต้องการ */
/* การเพิ่มข้อมูล */
if($_GET["Action"]=="Save")
{ $nn=$_POST["t_Name"];
$ss=$_POST["t_Surname"];//ดึงข้อมูลจากฟอร์ม
$strSQL = "INSERT INTO testtb (name,surname) VALUES ('$nn','$ss')";
$objQuery = mysqli_query($link,$strSQL);
}
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

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./imgBackground/IMG_0023.jpg" alt="Los Angeles" width="100%" height="600">
    </div>
    <div class="carousel-item">
      <img src="./imgBackground/IMG_0485.jpg" alt="Chicago" width="100%" height="600">
    </div>
    <div class="carousel-item">
      <img src="./imgBackground/IMG_6413.jpg" alt="New York" width="100%" height="600">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container">
    <h3>ShowProduct</h3>
  <div class="row">
    <?php
     /*แสดงข้อมูลที่ละรายการ*/
    while($objResult = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
    { $image=$objResult["img"];
    ?>
    <div class="col-sm-4 xs-12 md-3">
      <div class="card">
        <div class="card-header">
          <img src="imgProduct/<?=$image;?>"width="300">
        </div>
        <div class="card-body">
          <span><?=$objResult["name"];?></span>
        </div>
        <div class="card-footer">
          <p><?=$objResult["surname"];?></p>
        </div>
      </div>

    </div>
    <?php
    }
    ?>
  </div>
</div>
<div class="footer">
    <span>footer</span>
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
