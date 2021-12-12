<?php include('includes/registration.php');

if (!isset($_SESSION['username'])) {
   echo "<script>alert('You must login befor viewing this page.'); location.href='login.php';</script>";
  # code...
}
  ?>

<html lang="en">
<head>
  <link rel="icon" href="images/logo.png">
	<title>Enrolled Students</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css\bootstrap.min.css">
	
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css2/registered_student.css">
   <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){

 $('.schedule').click(function(){
   
   var userid = $(this).data('id');

   // AJAX request
   $.ajax({
    url: 'includes/schedule_records.php',
    type: 'post',
    data: {userid: userid},
    success: function(response){ 
      // Add response in Modal body
      $('.modal-body').html(response);

      // Display Modal
      $('#view_schedule').modal('show'); 
    }
  });
 });
});
  </script>
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
        <a href="registered_students.php" class="list-group-item list-group-item-action  mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>Registered Students</a>
        <a href="enrolled_student.php" class="list-group-item list-group-item-action mb-1 active bg-white text-dark"><i class="fas fa-clipboard-list fa-lg"></i>Enrolled Students</a>
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
          <?php
     $fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    if (strpos($fullURL,"error")==true) {
      echo "<p style='color:red;'>Invalid inputs</p>";
    }
     if (strpos($fullURL,"success")==true) {
      echo "<p style='color:green;'>Successfully Updated</p>";
    }
      ?>

              <div id="ui">

              <table class="table table-striped table-bordered">
            
              <tr>
              <th>Admission ID</th>
             
              <th>Academic Year</th>
              <th>Year Level</th>
              <th>Name</th>
             
              <th></th>
              </tr>
            
    <?php
  $data="SELECT * FROM tbl_admission INNER JOIN tbl_schedule ON tbl_admission.admission_id=tbl_schedule.admission_id";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.");
    while($data2=mysqli_fetch_assoc($qry)){
  ?>

    <tr>
      <td><?php echo $data2['admission_id']?></td>
      
      <td><?php echo $data2['academic_year']?></td>
      <td><?php echo $data2['year_level']?></td>
      <td class="text-capitalize"><?php echo $data2['firstname']," ",$data2['middle']," ",$data2['lastname']?></td>
     
      <td>
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#view_students<?php echo $data2['admission_id']?>" name="view">View</button>
       <?php
        echo '<button class="btn btn-primary btn-block schedule" data-toggle="modal" data-id="'.$data2['id_schedule'].'">Schedule</button>'?>
        <button class="btn btn-warning btn-block" data-toggle="modal" data-target="#student_deletes<?php echo $data2['admission_id']?>" name="delete_student">Delete</button>
      </td>
    </tr>
   
  <?php include 'includes/modals.php';} ?>
  </table>    
           

      
            
              
          
     
              </div>
    


    
</div>

<div class="modal fade" id="view_schedule"  tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modallabel">Student's Information</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body m-1">

     

        <div class="row">
          <div class="col">
            
          </div>     
        </div>



      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        
      </div>
       
    </div>      
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