<?php include('includes/registration.php');

if (!isset($_SESSION['username'])) {
   echo "<script>alert('You must login befor viewing this page.'); location.href='login.php';</script>";
  # code...
}
  ?>

<html lang="en">
<head>
  <link rel="icon" href="images/logo.png">
	<title>Registered Students</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css\bootstrap.min.css">
	
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css2/registered_student.css">
   <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

 
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
        <a href="registered_students.php" class="list-group-item list-group-item-action active mb-1 bg-white text-dark"><i class="fas fa-clipboard-list fa-lg"></i>Registered Students</a>
        <a href="enrolled_student.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>Enrolled Students</a>
        <a href="add_subject.php" class="list-group-item list-group-item-action bg-dark  mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>Add Subjects</a>
        <a href="add_course.php" class="list-group-item list-group-item-action bg-dark mb-1  text-white"><i class="fas fa-plus-square fa-lg"></i> Add Course</a>
        <a href="add_room.php" class="list-group-item list-group-item-action bg-dark mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>  Add Room</a>
        <a href="list_subjects.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>List of Subjects</a>
         <a href="fees.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-money-check-alt fa-lg"></i>Fees</a>
         <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log Out</a>
      </div>
    </div>

   <div id="page-content-wrapper">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>
       
            
              <div id="ui">
             

              <table class="table table-striped table-bordered" id="result">
       
              <tr>
              <th>Or Number</th>
              <th>Academic Year</th>
              <th>Year Level</th>
              <th>Name</th>
            
              <th>Semester</th>
              <th></th>
              </tr>

    <?php
  $data="SELECT * FROM tbl_user";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.".mysql_error());
    while($data2=mysqli_fetch_assoc($qry)){
  ?>

    <tr>
      <td><?php echo $data2['or_number']?></td>
      <td><?php echo $data2['academic']?></td>
      <td><?php echo $data2['year']?></td>
      <td class="text-capitalize"><?php echo $data2['firstname']," ",$data2['middle']," ",$data2['lastname']?></td>
      
      <td><?php echo $data2['semester']?></td> 
      <td>
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#view_student<?php echo $data2['or_number']?>" name="view">View</button>

        <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#student_delete<?php echo $data2['or_number']?>" name="delete_student">Delete</button>
      </td>
    </tr>
   
  <?php include 'includes/modals.php';} ?>
  </table>    
           

      
            
              
          
     
              </div>
    


    
</div>



  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <script>
    $(document).ready(function() {
      $(".btn").click(function(){
        $("#view_student").modal("show");
      });
      // body...
    });
  </script>

  
</body>

</html>