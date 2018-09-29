<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="./css/stylesheet.css">
	</head>
	<body>
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
		<?php
		include "connect.php";

		$id2 = $_GET["idedit"];
		$strSQL3 = "SELECT * FROM testtb where id=$id2";

		$objQuery3 = mysqli_query($link,$strSQL3);
		//$objResult2=mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);
		while($objResult2=mysqli_fetch_ASSOC($objQuery3))
			{
		?>
		<div class="container">
			<h3>เพิ่มรายการสินค้า</h3>
			<form method="post" action="editdata2.php">
				<div class="form-group">
					<label for="email">Name:</label>
					<input type="text" class="form-control" id="email" placeholder="Enter email" name="t_Name" value="<?=$objResult2['name']?>">
				</div>
				<div class="form-group">
					<label for="pwd">Surname:</label>
					<input type="text" class="form-control" id="pwd" placeholder="Enter password" name="t_Surname" value="<?=$objResult2['surname']?>">
				</div>
				<input name="idedit" type="hidden" value="<?=$id2?>">

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
		<?php	}?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</body>
</html>
