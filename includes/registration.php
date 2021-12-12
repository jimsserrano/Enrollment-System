<?php
 include('admin/includes/server.php');
 session_start();
 $errors = array();

if (isset($_SESSION['locked'])) {
  $difference=time()-$_SESSION['locked'];
  if ($difference >30) {
    unset($_SESSION['login_attempts']);
    unset($_SESSION['locked']);

  }
}
if (isset($_POST['login_student'])) {
	$user_or=mysqli_real_escape_string($conn,$_POST['OR_number']);
  if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts']=0;
  }
	if (empty($user_or)) {
    $_SESSION['error']="Please type in your OR Number";
    header("Location:login.php");
    exit();
  }

  else
  {
    $sql="SELECT * FROM tbl_user WHERE or_number='$user_or'";
    $query=mysqli_query($conn,$sql);
    if ($result=mysqli_fetch_array($query)) {
      $OR=$result['or_number'];
    if ($OR!==$user_or) {
        $_SESSION['login_attempts']+=1;
        $_SESSION['error']="Wrong Or Number";
       header("Location:login.php");
      }
      elseif ($OR==$user_or) {
       header("Location: stud_admission.php");
      $_SESSION['or_number'] = $result['or_number'];
     
    }
  }
  else
  {
      $_SESSION['login_attempts']+=1;
      $_SESSION['error']="Or number does not exist";
      header("Location:login.php");
      exit(); 
  }
}
}

  
//Admission Form

if (isset($_POST['submit_form'])) {
//$year_level=$_POST['year'];
//$academic_year=$_POST['academic'];
//$stud_fname=$_POST['fname'];
//$stud_lname=$_POST['lname'];
//$stud_mi=$_POST['middle'];

$or_number=mysqli_real_escape_string($conn,$_POST['or_number']);
$academic=mysqli_real_escape_string($conn,$_POST['academic']);
$year=mysqli_real_escape_string($conn,$_POST['year']);
$firstname=mysqli_real_escape_string($conn,$_POST['fname']);
$lastname=mysqli_real_escape_string($conn,$_POST['lname']);
$middle=mysqli_real_escape_string($conn,$_POST['middle']);
$house=mysqli_real_escape_string($conn,$_POST['house#']);
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
$mth_contact=mysqli_real_escape_string($conn,$_POST['mth_contact']);
$fth_name=mysqli_real_escape_string($conn,$_POST['fth_name']);
$fth_address=mysqli_real_escape_string($conn,$_POST['fth_address']);
$fth_occupation=mysqli_real_escape_string($conn,$_POST['fth_occupation']);
$fth_contact=mysqli_real_escape_string($conn,$_POST['fth_contact']);
$primary_Sname=mysqli_real_escape_string($conn,$_POST['primary_Sname']);
$primary_Saddress=mysqli_real_escape_string($conn,$_POST['primary_Saddress']);
$primary_awards=mysqli_real_escape_string($conn,$_POST['primary_awards']);
$secondary_Sname=mysqli_real_escape_string($conn,$_POST['secondary_Sname']);
$secondary_Saddress=mysqli_real_escape_string($conn,$_POST['secondary_Saddress']);
$secondary_awards=mysqli_real_escape_string($conn,$_POST['secondary_awards']);

$sqli="INSERT INTO tbl_admission(academic_year,year_level,or_number,firstname,lastname,middle,stud_houseNo,stud_street,stud_barangay,stud_municipality,stud_province,stud_zipcode,stud_email,stud_contact,stud_dob,stud_pob,stud_religion,stud_citizenship,stud_gender,mth_name,mth_address,mth_occupation,mth_no,fth_name,fth_address,fth_occupation,fth_no,primary_Sname,primary_Saddress,primary_awards,secondary_Sname,secondary_Saddress,secondary_awards) 
VALUES ('$academic','$year','$or_number','$firstname','$lastname','$middle','$house','$street','$barangay','$municipality','$province','$zipcode','$email','$contact','$dob','$pob','$religion','$citizenship','$gender','$mth_name','$mth_address','$mth_occupation','$mth_contact','$fth_name','$fth_address','$fth_occupation','$fth_contact','$primary_Sname','$primary_Saddress','$primary_awards','$secondary_Sname','$secondary_Saddress','$secondary_awards')";

if (mysqli_query($conn, $sqli)) {
    $last_id = mysqli_insert_id($conn);
     $_SESSION['lastid']=$last_id;
     header("Location:schedule.php");
} 


$_SESSION['msg']="Succesfully submitted";




}


?>