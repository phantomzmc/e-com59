<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <title></title>
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
    <div class="container">
      <h3>เพิ่มรายการสินค้า</h3>
      <form name="frm_input" method="post" action="addData2.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="email">Name:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter email" name="t_Name">
        </div>
        <div class="form-group">
          <label for="pwd">Surname:</label>
          <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="t_Surname">
        </div>
        <div class="form-group">
          <label for="pwd">Image:</label>
          <input name="file_pic" type="file"/>
          <input name="MAX_FILE_SIZE" type="hidden" value="100000" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  	<!-- Popper JS -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

  	<!-- Latest compiled JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
