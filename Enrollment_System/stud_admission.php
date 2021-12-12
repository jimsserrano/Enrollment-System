<?php 
 include('admin/includes/server.php');
 include ('includes/registration.php');
  
  
  if (isset($_SESSION['or_number'])) {
    # code...
  $login=$_SESSION['or_number'];
   $data="SELECT * FROM tbl_user WHERE or_number='$login'";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.".mysql_error());
  $data2=mysqli_fetch_array($qry);
  $dataa="SELECT * FROM tbl_admission WHERE or_number='$login'";

  $qry2=mysqli_query($conn,$dataa) or die ("Could not execute Query.".mysql_error());
  $data3=mysqli_fetch_array($qry2); ;
 
}


 
?>
<?php
if (!isset($_SESSION['or_number'])) {
   echo "<script>alert('You must login before viewing this page.'); location.href='login.php';</script>";
  # code...
}
?>

<!doctype html>
<html lang="en">
<head>
	<title>Admission</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css2/registration.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>

<body>
    <nav class="navbar bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-header">
       <a href="stud_admission.php" class="nav-link"><h3 class="text-white " ><img src="images/logo.png" style="width: 100px;">Dagupan City National Highschool</h3></a>
    </div>
    <ul class="nav navbar-nav mt-3">
      
      <li class="nav-item "><a href="stud_admission.php" class="nav-link active "><h5 class="text-white border-bottom">Admission Form</h5></a></li>
        <li class="nav-item "><a href="schedule.php" class="nav-link"><h5 class="text-white ">Schedule</h5></a></li> 
        
        <li class="nav-item"><a href="logout.php" class="nav-link text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log out</a></li></ul>
    </ul>
  </div>
</nav>


      <?php if (isset($_SESSION['msg'])): ?>
      <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);

        ?>
      </div>
    <?php endif ?>
      <div class="container">
        <input type="hidden" name="keyfield" value="<?php echo $login?>">
      	<div id="ui">

          <form method="post" >
      		<center><h3>Fill up the form</h3></center>
      		<hr>
      		<h4>Personal Data</h4>
      		<hr>
          <div><p style="color: red;">Instructions :  <br>1. Kindly type 'NA' in boxes where there are no possible answers to the information being requested.
  <br>2. To make use of the letter 'Ñ', please press ALT while typing "165"; while for 'ñ', please press ALT while typing "164" and put '.' on your middle initial for Readability purposes.
</p></div>
 
      	<div class="row mb-3	">
      		<div class="col-lg-4">

              
                      <label for="exampleFormControlSelect1">Year Level</label>
                      <input class="form-control" name="year" value="<?php echo $data2['year']?>" readonly >
                     
                    </div>

                     <div class="col-lg-4">
                       <label>Or Number</label>
                      <input type="text" name="or_number" class="form-control" value="<?php echo $data2['or_number']?>" readonly >
                    </div>


                     <div class="col-lg-4">
                      <label>Academic year</label>
                      <input type="text" name="academic" class="form-control" value="<?php echo $data2['academic']?>"  readonly>
                    </div>
                  </div>
 
        <div class="row mb-3">
        	<div class="col-lg-5">
        		<label>First Name</label>
        		<input type="text" name="fname" class="form-control text-capitalize" value="<?php echo $data2['firstname']?>"  readonly>
        	</div>
        	<div class="col-lg-5">
        		<label>Last Name</label>
        		<input type="text" name="lname" class="form-control text-capitalize" value="<?php echo $data2['lastname']?>" readonly>
        	</div>
        	<div class="col-lg-2">
        		<label>Middle Initial</label>
        		<input type="text" name="middle" class="form-control text-capitalize" value="<?php echo $data2['middle']?>" readonly >
        	</div>
        </div>
        <h4>Address</h4>

        <div class="row">
        	<div class="col-lg-6">
        		<label>House#</label>
        		<input type="text" name="house#" class="form-control" required>
        		<label>Barangay</label>
        		<input type="text" name="barangay" class="form-control" required>
        		<label>Province</label>
        		<input type="text" name="province" class="form-control" required>
        	</div>
        	<div class="col-lg-6">
        		<label>Street</label>
        		<input type="text" name="street" class="form-control" required>
        		<label>Municipality</label>
        		<input type="text" name="municipality" class="form-control" required>
        		<label>Zipcode</label>
        		<input type="text" name="zipcode" class="form-control" required>
        	</div>
        	
        </div>

        <div class="row">
        	<div class="col-lg-4">
        		<label>Email address</label>
        		<input type="text" name="email" class="form-control" required>
        	</div>
        	<div class="col-lg-4">
        		<label>Contact No.</label>
        		<input type="text" name="contact" class="form-control" required>
        	</div>
          <div class="col-lg-4">
            <label>Date of Birth</label>
            <input type="text" name="dob" class="form-control" required>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <label>Place of Birth</label>
            <input type="text" name="pob" class="form-control" required>

          </div>
          <div class="col-lg-4">
            <label>Religion</label>
            <input type="text" name="religion" class="form-control" required>
          </div>
          <div class="col-lg-4">
            <label>Citizenship</label>
            <input type="text" name="citizenship" class="form-control" required>
          </div>
        </div>
          <div class="row">
            <div class="col-lg-1">
              <p>Gender</p>
            </div>
            <div class="col-lg-1">
               <input type="radio" class="form-check-input" name="gender" value="Male" required>
               <label class="form-check-label">Male</label>
              
            </div>
            <div class="col-lg-1">
               <input type="radio" class="form-check-input" name="gender" value="Female" required>
               <label class="form-check-label">Female</label>
               
            </div>
          </div>

        <hr>
        <h4>Parent's Information</h4>
        <div class="row">
          <div class="col-lg-6">
            <label>Mother's Name</label>
            <input type="text" name="mth_name" class="form-control" required> 
            <label>Address</label>
            <input type="text" name="mth_address" class="form-control" required>
            <label>Occupation</label>
            <input type="text" name="mth_occupation" class="form-control" required>
            <label>Contact No.</label>
            <input type="text" name="mth_contact" class="form-control" required>
          </div>

           <div class="col-lg-6">
            <label>Father's Name</label>
            <input type="text" name="fth_name" class="form-control" required>
            <label>Address</label>
            <input type="text" name="fth_address" class="form-control" required>
            <label>Occupation</label>
            <input type="text" name="fth_occupation" class="form-control" required>
            <label>Contact No.</label>
            <input type="text" name="fth_contact" class="form-control" required>
          </div>
        </div>
        <hr>
        <h4>Educational Background</h4>
        
        <div class="row">
          
          <div class="col-lg-6">
            <p>Primary Education</p>
            <label>School Name</label>
            <input type="text" name="primary_Sname" class="form-control" required>
         
         <label>School Address</label>
            <input type="text" name="primary_Saddress" class="form-control" required>
         
            <label>Awards Attained</label>
            <input type="text" name="primary_awards" class="form-control required">
        </div>
          
          <div class="col-lg-6">
            <p>Secondary Education</p>
            <label>School Name</label>
            <input type="text" name="secondary_Sname" class="form-control" required>
          
         <label>School Address</label>
            <input type="text" name="secondary_Saddress" class="form-control" required>
          
          
          
            <label>Awards Attained</label>
            <input type="text" name="secondary_awards" class="form-control" required>
          </div>
          </div>


        <hr>
       <button class="btn btn-primary btn-block" name="submit_form" type="submit">Submit</button>
      </form>
        </div>
       

      	</div>
      	</div>
      </div>

</body>

</html>