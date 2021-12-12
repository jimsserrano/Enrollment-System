<?php
include 'admin/includes/server.php';

$output='';
$sql="SELECT * FROM tbl_subject WHERE subject_code='".$_POST["Section"]."'ORDER BY subject_code";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result);

	echo  $output=$row["section"];



?>