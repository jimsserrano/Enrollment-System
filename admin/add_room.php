
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
  <title>Add room</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css2\add_room.css">
</head>

<body>
  <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-dark border-bottom justify-content-center">
        <ul class="navbar-nav">

          <!--<div class="fixed-top navbar justify-content-left">
          <a href="index.php" class="list-group-item bg-dark mb-3 text-white">Eprim</a>
          <a href="index.php" class="list-group-item bg-dark mb-3 text-white">Eprim</a>
        </div>-->
        
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
        <a href="add_room.php" class="list-group-item list-group-item-action bg-white active mb-1 text-dark"><i class="fas fa-plus-square fa-lg"></i>  Add Room</a>
        <a href="list_subjects.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>List of Subjects</a>
        <a href="fees.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-money-check-alt fa-lg"></i>Fees</a>
         <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log Out</a>
        
      </div>
    </div>

   <div id="page-content-wrapper">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>
       
          
             
             <div id="ui">
              <button class="btn btn-primary"  data-toggle="modal" data-target="#add_room" id="edit">Add Room</button>
                 <!--TABLE FOR VIEWING OF ROOM-->

                 <!--MODAL FOR ADDING ROOM-->
 
  <div class="modal fade" id="add_room" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Add Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        

         
        <form method="post" action="<?php include('includes/retrieve_edit.php');?>">
          
          <label>Room ID</label>
          <input type="text" name="number_room" class="form-control" required >
          <label>Building Name</label>
          <input type="text" name="desc_room" class="form-control" required>
        <div class="row">
          <div class="col-lg-8"></div>
          <div class="col-lg-4"><button class="btn btn-primary btn-block" type="submit" name="room_add">Add</button></div>
        </div>
      </form>
        
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    
      
    </div>      
    </div>

    
  </div>

  <!-- END OF MODAL FOR ADDING ROOM-->
  <!--TABLE FOR VIEWING OF ROOM-->
  <table class="table table-striped table-bordered">
    
    <tr>
      <td>Room ID</td>
      <td>Room Description</td>
      <td></td>
    </tr>
  
    <?php
  $data="SELECT * FROM tbl_room";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.".mysql_error());
    while($room_fetch=mysqli_fetch_assoc($qry)){
  ?>
    <tr>
      <td><?php echo $room_fetch['room_number']?></td>
      <td><?php echo $room_fetch['room_desc']?></td>
      <td><button class="btn btn-primary btn-block" name="edit" data-toggle="modal" data-target="#edit_room<?php echo $room_fetch['room_id']?>" id="edit">Edit</button>
      <button class="btn btn-warning btn-block" name="delete_room" data-toggle="modal" data-target="#room_delete<?php echo $room_fetch['room_id']?>">Delete</button></td>

    </tr>
  <?php include 'includes/modals.php' ; } ?>
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
</body>

</html>