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
	<title>Add course</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css2/add_course.css">
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
        <a href="add_course.php" class="list-group-item list-group-item-action bg-white mb-1 active text-dark"><i class="fas fa-plus-square fa-lg"></i> Add Course</a>
        <a href="add_room.php" class="list-group-item list-group-item-action bg-dark mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>  Add Room</a>
        <a href="list_subjects.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>List of Subjects</a>
        <a href="fees.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-money-check-alt fa-lg"></i>Fees</a>
         <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log Out</a>
        
      </div>
    </div>

    <div id="page-content-wrapper">

      <button class="btn btn-primary" id="menu-toggle">Menu</button>

      <?php
    $fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullURL,"error")==true) {
      echo "<p style='color:red;'>Subject code already exist</p>";
    }
     if (strpos($fullURL,"success")==true) {
      echo "<p style='color:green;'>Successfully added</p>";
    }
      ?>
      <div id="ui">
        <!--MODAL FOR ADDING COURSE-->
      <button class="btn btn-primary" data-toggle="modal" data-target="#create_user" id="add_course">Add Course</button>

  <div class="modal fade" id="create_user" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Add Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <?php include'includes/retrieve_edit.php'?>
        <form method="post">
          <label>Course Code</label>
          <input type="text" name="course_code" class="form-control text-uppercase">
          <label>Course Description</label>
          <input type="text" name="course_desc" class="form-control">
         <div class="row">
          <div class="col-lg-8"><p style="color: red;"><?php if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            # code...
          } ?></p></div>
          <div class="col-lg-4"><button class="btn btn-primary btn-block" type="submit" name="add">Add</button></div> 
        </div></form>
       

        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
      
    </div>      
    </div>

    
  </div>
  <!-- END OF MODAL FOR ADDING COURSE-->
 
    


  <!--TABLE FOR VIEWING OF COURSES-->
  <table class="table table-striped table-bordered">
  
    <tr>
      <td>Course Code</td>
      <td>Course Description</td>
      <td></td>
    </tr>
    <?php
  $data="SELECT * FROM tbl_course";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.".mysql_error());
    while($data2=mysqli_fetch_assoc($qry)){
  ?>
    <tr>
      <td><?php echo $data2['course_code']?></td>
      <td><?php echo $data2['course_desc']?></td>
      <td><button class="btn btn-primary btn-block" name="edit" data-toggle="modal" data-target="#edit_course<?php echo $data2['course_id']?>" id="edit">Edit</button>
      <button class="btn btn-warning btn-block" name="delete_course" data-toggle="modal" data-target="#course_delete<?php echo $data2['course_id']?>">Delete</button></td>

    </tr>
  <?php include 'includes/modals.php' ; } ?>
  </table>
 

  



 




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
      $("#add_course").click(function(){
        $("#create_user").modal("show");
      });
      // body...
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