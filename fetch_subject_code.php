<?php
include 'admin/includes/server.php';

$subject_code=$_POST["Subject_code"];
$semester=$_POST["Semester"];

$sql="SELECT * FROM tbl_subject WHERE course='$subject_code' AND semester='$semester'";
$result=mysqli_query($conn,$sql);
$output='<option value="">Select Subject</option';
while ($row=mysqli_fetch_array($result)) {

	$output.='<br><option value="'.$row["subject_code"].'">'.$row["subject_code"].'</option>';
}
echo $output;

?>