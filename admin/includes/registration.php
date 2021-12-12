<!--Students Registration And Admin's Login-->
<?php
 include 'server.php';
session_start();

if (isset($_POST['register'])) {
	# code...

$year_level=mysqli_real_escape_string($conn,$_POST['year']);
$academic_year=mysqli_real_escape_string($conn,$_POST['academic']);
$or_number=mysqli_real_escape_string($conn,$_POST['or']);
$stud_fname=mysqli_real_escape_string($conn,$_POST['firstname']);
$stud_lname=mysqli_real_escape_string($conn,$_POST['lastname']);
$stud_mi=mysqli_real_escape_string($conn,$_POST['middle']);

$semester=mysqli_real_escape_string($conn,$_POST['semester']);
$errorEmptyy=false;
$errorOR=false;
if (empty($year_level) || empty($academic_year) || empty($or_number) || empty($stud_fname) || empty($stud_lname) || empty($stud_mi) || empty($semester)) {
  echo "<script>alert('Please fill up all fields');</script>";
  $errorEmptyy=true;
  }
else{
$or_check_query="SELECT * FROM tbl_user WHERE or_number='$or_number'";
$fetch=mysqli_query($conn,$or_check_query);
if($or=mysqli_fetch_array($fetch)) {
  $dbor=$or['or_number'];
  if ($dbor===$or_number) {
    echo "<script>alert('Or Number already exists');</script>";
    $errorOR=true;
  }
}
 elseif($dbor!=$or_number) {
  
  $sql= "INSERT INTO tbl_user(or_number,academic,year,firstname,lastname,middle,semester)
          VALUES ('$or_number','$academic_year','$year_level','$stud_fname','$stud_lname','$stud_mi','$semester')";

          mysqli_query($conn,$sql);

           echo "<script>alert('Successfully Submitted')location.href='index.php';</script>";
         
}
else {
  
    echo "<script>alert('Or Number already exists');</script>";
} 

}
exit();
}



if (isset($_SESSION['locked'])) {
  $difference=time()-$_SESSION['locked'];
  if ($difference >30) {
    unset($_SESSION['login_attempts']);
    unset($_SESSION['locked']);

  }
}

if (isset($_POST['admin_login'])) { 
  $admin_username=mysqli_real_escape_string($conn,$_POST['admin_username']);
  $admin_password=mysqli_real_escape_string($conn,$_POST['admin_password']);
  $errorEmpty=false;
  if (!isset($_SESSION['login_attempts'])) {
   $_SESSION['login_attempts']=0;
  }


if (empty($admin_username)|| empty($admin_password)) {
  $_SESSION['error']="Please fill in all fields";
  header("Location:login.php");
  $errorEmpty=true;

  exit();
}
else
{
  
    # code.. 
    $sql = " SELECT * from tbl_login where username = '$admin_username' and password = '$admin_password'";
    $query = mysqli_query($conn,$sql);

    if ($admin = mysqli_fetch_array($query)) {
      $username=$admin['username'];
      $password=$admin['password'];
      if ($username!==$admin_username && $password!==$admin_password) {
        $_SESSION['login_attempts']+=1;
        $_SESSION['error']="Wrong Username or Password";
       header("Location:login.php");
      }
      elseif ($username==$admin_username && $password==$admin_password) {
       header("Location: index.php");
      $_SESSION['username'] = $admin['username'];
      $_SESSION['password'] = $admin['password'];
      }
    }

    else
    {
      $_SESSION['login_attempts']+=1;
      $_SESSION['error']="Wrong Username or Password";
      
      header("Location:login.php");
      exit(); 
    }
}
   
}








?>



