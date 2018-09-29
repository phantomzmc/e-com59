<?php
/* เปิดการเชื่อมต่อฐานข้อมูล พร้อมทั้งเลือกฐานข้อมูล*/
include "connect.php";
/* การจัดการฐานข้อมูลตามความต้องการ */
/* การเพิ่มข้อมูล */
if($_GET["Action"]=="save")
{  // ดึงข้อมูลจากฟอร์ม
$file_pic=$_FILES['file_pic']['tmp_name'];
$file_pic_name=$_FILES['file_pic']['name'];
$file_pic_size=$_FILES['file_pic']['size'];
$file_pic_type=$_FILES['file_pic']['type'];

$nn=$_POST["t_Name"]; $ss=$_POST["t_Surname"];

$strSQL = "INSERT INTO testtb(name,surname) VALUES ('$nn','$ss')";
$objQuery = mysqli_query($link,$strSQL);

if($file_pic) {
		$array_last=explode(".",$file_pic_name);
		$c=count($array_last) -1;
		$lastname=strtolower($array_last[$c]);

		if ($lastname=="gif" or $lastname=="jpg" or $lastname=="jpeg") {
			$sql2="select max(id) from testtb";
			$result2=mysqli_query($link,$sql2);
			$row=mysqli_fetch_row($result2);

			$photoname=$row[0].".".$lastname;
			copy($file_pic,"imgProduct/".$photoname);

			$sql3="update testtb set img='$photoname'  where  id='$row[0]' ";
			$result3=mysqli_query($link,$sql3);
		}
		unlink($file_pic);
}

}
