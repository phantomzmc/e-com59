<meta charset="UTF-8">
<?php
include "connect.php";
$id2 = $_GET["iddel"];

$sql = "DELETE FROM testtb where id=$id2";

if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
	echo "<a href='test1.php'>แสดงข้อมูล</a>";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}

mysqli_close($link);
?>