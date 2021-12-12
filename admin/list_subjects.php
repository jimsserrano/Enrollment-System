<?php include 'includes/retrieve_edit.php'?>
<!doctype html>
<?php include('includes/registration.php');

if (!isset($_SESSION['username'])) {
   echo "<script>alert('You must login befor viewing this page.'); location.href='login.php';</script>";
  # code...
}
  ?>
<html lang="en">
<head>
  <link rel="icon" href="images/logo.png">
	<title>List of subjects</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css2/list.css">
</head>

<body>
	<nav class="fixed-top navbar navbar-expand-lg navbar-light bg-dark border-bottom justify-content-center">
        <ul class="navbar-nav">
        
         <li class="nav-item"><a href="index.php" class="nav-link"><img src="images/logo.png" style="width: 50px;height: 40px;"></a></li>
        <li class="nav-item"><a href="index.php" class="nav-link"><h3 class="text-white">Dagupan City National Highschool</h3></a></li>
        </ul>
      </nav>


    <div class="d-flex" id="wrapper">
      <div class="bg-dark border-right" id="sidebar-wrapper">
      
      <div class="list-group list-group-flush">
        <a href="index.php" class="list-group-item list-group-item-action bg-dark mb-1 text-white"><i class="fas fa-users fa-lg"></i>Register</a>
        <a href="registered_students.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>Registered Students</a>
        <a href="enrolled_student.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>Enrolled Students</a>
        <a href="add_subject.php" class="list-group-item list-group-item-action bg-dark  mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>Add Subjects</a>
        <a href="add_course.php" class="list-group-item list-group-item-action bg-dark mb-1  text-white"><i class="fas fa-plus-square fa-lg"></i> Add Course</a>
        <a href="add_room.php" class="list-group-item list-group-item-action bg-dark mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>  Add Room</a>
        <a href="list_subjects.php" class="list-group-item list-group-item-action mb-1 bg-white active text-dark"><i class="fas fa-clipboard-list fa-lg"></i>List of Subjects</a>
        <a href="fees.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-money-check-alt fa-lg"></i>Fees</a>
         <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log Out</a>
        
      </div>
    </div>

   <div id="page-content-wrapper">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>
       
          
              <!--Start ng template para sa Add subject and add room para kay ephraim-->
              <div id="ui">
              	





   <table class="table table-striped table-bordered">
              <?php include('includes/retrieve_edit.php');?>
              <thead class="thead-dark">
              <tr>
              <td>Subject Code</td>
              <td>Subject Description</td>
              <td>Units</td>
              <td>Course</td>
              <td>Room</td>
              <td>Day</td>
              <td>Time</td>
              <td>Section</td>
              <td>Semester</td>
              <td></td>
              </tr>
            </thead>
              <?php
              $data="SELECT * FROM tbl_subject";

            $qry=mysqli_query($conn,$data) or die ("Could not execute Query.".mysql_error());
           while($subject=mysqli_fetch_array($qry)){
            ?>
    <tr>
          <td><?php echo $subject['subject_code']?></td>
          <td><?php echo $subject['subject_desc']?></td>
          <td><?php echo $subject['units']?></td>
          <td><?php echo $subject['course']?></td>
          <td><?php echo $subject['room']?></td>
          <td><?php echo $subject['day']?></td>
          <td><?php echo $subject['time_from'],"/",$subject['time_to']?></td>
          <td><?php echo $subject['section']?></td>
          <td><?php echo $subject['semester']?></td>
      <td><button class="btn btn-primary btn-block" name="edit" data-toggle="modal" data-target="#edit_subject<?php echo $subject['subject_id']?>" id="edit">Edit</button>
      <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#subject_delete<?php echo $subject['subject_id']?>" name="delete_subject">Delete</button></td>

    </tr>
  <?php include'includes/modals.php';} ?>
  </table>
              </div>
     

            
              
          
     
      </div>
       <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
   <script>
    $(document).ready(function() {
      $("#edit").click(function(){
        $("#edit_course").modal("show");
      });
      // body...
    });
  </script>
</body>

</html>