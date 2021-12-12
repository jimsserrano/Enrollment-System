<?php
include 'includes/server.php';
#-------------------------------ADD FUNCTIONS------------------------------------------------
#ADDING COURSE
 if (isset($_POST['add'])) {

 	$course_code=mysqli_real_escape_string($conn,$_POST['course_code']);
 	$course_desc=mysqli_real_escape_string($conn,$_POST['course_desc']);

 	$crs="SELECT course_code FROM tbl_course WHERE course_code='$course_code'";
 	$qry=mysqli_query($conn,$crs);
 	if ($result=mysqli_fetch_array($qry)) {
 		$crs_code=$result['course_code'];
 		if ($crs_code===$course_code) {
 		header("Location: add_course.php?error");
 		exit;
 		
 	}
 	
		
 	}

 	else
 	{
 	$sql="INSERT INTO tbl_course(course_code,course_desc) VALUES ('$course_code','$course_desc')";
 	# code...
 	 mysqli_query($conn,$sql);
 	 header("Location: add_course.php?success");
 	 exit();	
 	}
 	
 }






if (isset($_POST['add_subj'])) {

	$course=mysqli_real_escape_string($conn,$_POST['course']);
	$subject_code=mysqli_real_escape_string($conn,$_POST['subj_code']);
	$units=mysqli_real_escape_string($conn,$_POST['units']);
	$subject_name=mysqli_real_escape_string($conn,$_POST['subj_name']);
	$section=mysqli_real_escape_string($conn,$_POST['section']);
	$days=$_POST['day'];
	$b=implode('/', $days);
	$time_from=mysqli_real_escape_string($conn,$_POST['time_from']);
	$time_to=mysqli_real_escape_string($conn,$_POST['time_to']);
	$semester=mysqli_real_escape_string($conn,$_POST['semester']);
	
	$room=$_POST['room'];
	$asd="SELECT subject_code FROM tbl_subject WHERE subject_code='$subject_code'";
	if ($result=mysqli_fetch_array($conn,$asd)) {
		$code=$result['subject_code']; 
	}
	
	if ($code===$subject_code) {

		echo "<script>alert('Subject Code already exists');Location: add_subject.php;</script>";
		exit();
	}
	else{
$subj="INSERT INTO tbl_subject(subject_code,subject_desc,units,course,room,day,time_from,time_to,section,semester) VALUES('$subject_code','$subject_name','$units','$course','$room','$b','$time_from','$time_to','$section','$semester')";

	mysqli_query($conn, $subj);
		header("Location: add_subject.php");
		exit;
	# code...
	}
	
}
if (isset($_POST['room_add'])) {

	$room_number=mysqli_real_escape_string($conn,$_POST['number_room']);
	$room_desc=mysqli_real_escape_string($conn,$_POST['desc_room']);

	$room="INSERT INTO tbl_room(room_number,room_desc) VALUES ('$room_number','$room_desc')";
	mysqli_query($conn,$room);
	header("Location: add_room.php");
	exit;
	# code...
}

if (isset($_POST['add_fee'])) {
	$fee_name=mysqli_real_escape_string($conn,$_POST['fee_name']);
	$fee_price=mysqli_real_escape_string($conn,$_POST['fee_price']);
	if (is_numeric($fee_price)) {
		$fee="INSERT INTO tbl_fee(fee_name,fee_price) VALUES ('$fee_name','$fee_price')";
		mysqli_query($conn,$fee);
		header("Location: fees.php");
	}
	else
	{
		
		header("Location: fees.php?error");
	}
	
	
	exit();

	# code...
}
#----------------------------------END OF ADD FUNCTION----------------------------------------------------------
#---------------------------SAVE FUNCTIONS-----------------------------------------------------------------------

if (isset($_POST['save_subj'])) {
	$course=mysqli_real_escape_string($conn,$_POST['course']);
	$subj_id=mysqli_real_escape_string($conn,$_POST['subj_id']);
	$subj_code=mysqli_real_escape_string($conn,$_POST['subj_code']);
	$units=mysqli_real_escape_string($conn,$_POST['units']);
	$subj_name=mysqli_real_escape_string($conn,$_POST['subj_name']);
	$section=mysqli_real_escape_string($conn,$_POST['section']);
	$room=mysqli_real_escape_string($conn,$_POST['room']);
	$days=$_POST['day'];
	$time=mysqli_real_escape_string($conn,$_POST['time']);
	$b=implode('/', $days);
	$time_from=mysqli_real_escape_string($conn,$_POST['time_from']);
	$time_to=mysqli_real_escape_string($conn,$_POST['time_to']);
	$semester=mysqli_real_escape_string($conn,$_POST['semester']);
	
	
	$save_subj="UPDATE tbl_subject SET subject_desc='$subj_name',units='$units',course='$course',section='$section',room='$room',day='$b',time_from='$time_from',time_to='$time_to',semester='$semester' WHERE subject_id='$subj_id'";
	mysqli_query($conn,$save_subj);
	header("Location: list_subjects.php");
	exit;
}


if (isset($_POST['save_course'])) {
	$course_id=mysqli_real_escape_string($conn,$_POST['course_id']);
	$course_code=mysqli_real_escape_string($conn,$_POST['course_code']);
	$course_desc=mysqli_real_escape_string($conn,$_POST['course_desc']);

	mysqli_query($conn,"UPDATE tbl_course SET course_desc='$course_desc',course_code='$course_code' WHERE course_id='$course_id'");
	header("Location: add_course.php");
	exit;
	# code...
}

if (isset($_POST['save_room'])) {
	$room_id=mysqli_real_escape_string($conn,$_POST['room_id']);
	$room_number=mysqli_real_escape_string($conn,$_POST['room_number']);
	$room_desc=mysqli_real_escape_string($conn,$_POST['room_desc']);

	mysqli_query($conn,"UPDATE tbl_room SET room_desc='$room_desc',room_number='$room_number' WHERE room_id='$room_id'");
	header("Location: add_room.php");
	exit;
	# code...
}

if (isset($_POST['save_register']))
{
$or_number=mysqli_real_escape_string($conn,$_POST['or_number']);
$academic=mysqli_real_escape_string($conn,$_POST['academic']);
$year=mysqli_real_escape_string($conn,$_POST['year']);
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$middle=mysqli_real_escape_string($conn,$_POST['middle']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
$semester=mysqli_real_escape_string($conn,$_POST['semester']);

mysqli_query($conn,"UPDATE tbl_user SET

	academic='$academic',
	year='$year',
	firstname='$firstname',
	middle='$middle',
	lastname='$lastname',
	semester='$semester'
	WHERE or_number='$or_number'


	");
header("Location: registered_students.php");
exit();
}
if (isset($_POST['save_admission'])) {

$admission_id=mysqli_real_escape_string($conn,$_POST['admission_id']);
$course=mysqli_real_escape_string($conn,$_POST['course']);
$academic=mysqli_real_escape_string($conn,$_POST['academic']);
$year=mysqli_real_escape_string($conn,$_POST['year']);
$firstname=mysqli_real_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_real_escape_string($conn,$_POST['lastname']);
$middle=mysqli_real_escape_string($conn,$_POST['middle']);
$house=mysqli_real_escape_string($conn,$_POST['house']);
$barangay=mysqli_real_escape_string($conn,$_POST['barangay']);
$street=mysqli_real_escape_string($conn,$_POST['street']);
$municipality=mysqli_real_escape_string($conn,$_POST['municipality']);
$province=mysqli_real_escape_string($conn,$_POST['province']);
$zipcode=mysqli_real_escape_string($conn,$_POST['zipcode']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$contact=mysqli_real_escape_string($conn,$_POST['contact']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$pob=mysqli_real_escape_string($conn,$_POST['pob']);
$religion=mysqli_real_escape_string($conn,$_POST['religion']);
$citizenship=mysqli_real_escape_string($conn,$_POST['citizenship']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$mth_name=mysqli_real_escape_string($conn,$_POST['mth_name']);
$mth_address=mysqli_real_escape_string($conn,$_POST['mth_address']);
$mth_occupation=mysqli_real_escape_string($conn,$_POST['mth_occupation']);
$mth_contact=mysqli_real_escape_string($conn,$_POST['mth_no']);
$fth_name=mysqli_real_escape_string($conn,$_POST['fth_name']);
$fth_address=mysqli_real_escape_string($conn,$_POST['fth_address']);
$fth_occupation=mysqli_real_escape_string($conn,$_POST['fth_occupation']);
$fth_contact=mysqli_real_escape_string($conn,$_POST['fth_no']);
$primary_Sname=mysqli_real_escape_string($conn,$_POST['primary_Sname']);
$primary_Saddress=mysqli_real_escape_string($conn,$_POST['primary_Saddress']);
$primary_awards=mysqli_real_escape_string($conn,$_POST['primary_awards']);
$secondary_Sname=mysqli_real_escape_string($conn,$_POST['secondary_Sname']);
$secondary_Saddress=mysqli_real_escape_string($conn,$_POST['secondary_Saddress']);
$secondary_awards=mysqli_real_escape_string($conn,$_POST['secondary_awards']);

$update="UPDATE tbl_admission SET
		
	
		academic_year='$academic',
		year_level='$year',
		firstname='$firstname',
		lastname='$lastname',
		middle='$middle',
		stud_houseNo='$house',
		stud_street='$street',
		stud_barangay='$barangay',
		stud_municipality='$municipality',
		stud_province='$province',
		stud_zipcode='$zipcode',
		stud_email='$email',
		stud_contact='$contact',
		stud_dob='$dob',
		stud_pob='$pob',
		stud_religion='$religion',
		stud_citizenship='$citizenship',
		stud_gender='$gender',
		mth_name='$mth_name',
		mth_address='$mth_address',
		mth_occupation='$mth_occupation',
		mth_no='$mth_no',
		fth_name='$fth_name',
		fth_address='$fth_address',
		fth_occupation='$fth_occupation',
		fth_no='$fth_no',
		primary_Sname='$primary_Sname',
		primary_Saddress='$primary_Saddress',
		primary_awards='$primary_awards',
		secondary_Sname='$secondary_Sname',
		secondary_Saddress='$secondary_Saddress',
		secondary_awards='$secondary_awards'
		 WHERE admission_id='$admission_id'";

	if(mysqli_query($conn,$update)){
		header("Location: enrolled_student.php?success");
	}
	else
	{
		header("Location:enrolled_student.php?error"); 	
	
	}
	exit();

} 
if (isset($_POST['save_fee'])) {
	$fee_id=mysqli_real_escape_string($conn,$_POST['fee_id']);
	$fee_name=mysqli_real_escape_string($conn,$_POST['fee_name']);
	$fee_price=mysqli_real_escape_string($conn,$_POST['fee_price']);

	$fee_save="UPDATE tbl_fee SET fee_name='$fee_name', fee_price='$fee_price' WHERE fee_id='$fee_id' ";
	mysqli_query($conn,$fee_save);
	header("Location: fees.php");
	exit();
	# code...
}



#---------------------------END OF SAVE FUNCTIONS-------------------------------------------------------

#-----------------------------------DELETE FUNCTIONS---------------------------------------------------

	if (isset ($_POST['delete_subject'])) 
	{
		$list_subject = mysqli_real_escape_string($conn,$_POST['list_subject']);
		mysqli_query($conn,"DELETE from tbl_subject WHERE subject_id='$list_subject'") or die(mysql_error());
		header("Location: list_subjects.php");
	}

	if (isset ($_POST['delete_students'])) 
	{
		$list_student = mysqli_real_escape_string($conn,$_POST['list_student']);
		mysqli_query($conn,"DELETE from tbl_admission WHERE admission_id='$list_student'") or die(mysql_error());
		header("Location:enrolled_student.php");
	}
	if (isset ($_POST['delete_registeredstudent'])) 
	{
		$list_registeredstudent = mysqli_real_escape_string($conn,$_POST['list_registeredstudent']);
		mysqli_query($conn,"DELETE from tbl_user WHERE or_number='$list_registeredstudent'") or die(mysql_error());
		header("Location:registered_students.php");
		
	}
	if (isset ($_POST['delete_course'])) 
	{
		$list_course =mysqli_real_escape_string($conn,$_POST['list_course']);
		mysqli_query($conn,"DELETE from tbl_course WHERE course_id='$list_course'") or die(mysql_error());
		header("Location:add_course.php");
	}
	if (isset ($_POST['delete_room'])) 
	{
		$list_room =mysqli_real_escape_string($conn,$_POST['list_room']) ;
		mysqli_query($conn,"DELETE from tbl_room WHERE room_id='$list_room'") or die(mysql_error());
		header("Location:add_room.php");
	}
	if (isset ($_POST['delete_fee'])) 
	{
		$list_fee = mysqli_real_escape_string($conn,$_POST['list_fee']);
		mysqli_query($conn,"DELETE from tbl_fee WHERE fee_id='$list_fee'") or die(mysql_error());
		header("Location:fees.php");
	}



#----------------------------------END OF DELETE FUNCTIONS---------------------------------------------------	
?>