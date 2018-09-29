<meta charset="UTF-8">
<?php
include "connect.php";
$id2 = $_POST["idedit"];
$name=$_POST['t_Name'];
$surname=$_POST['t_Surname'];

$sql = "UPDATE testtb SET name='$name',surname='$surname' where id='$id2'";
if (mysqli_query($link,$sql)) {
    echo "Record Edit successfully";
	echo "<a href='test1.php'>แสดงข้อมูล</a>";
} else {
    echo "Error editing record: " . mysqli_error($link);
}

mysqli_close($link);
?>