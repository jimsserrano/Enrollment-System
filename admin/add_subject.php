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
	<title>Add students</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css2/add_subject.css">
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
        <a href="add_subject.php" class="list-group-item list-group-item-action bg-white active mb-1 text-dark"><i class="fas fa-plus-square fa-lg"></i>Add Subjects</a>
        <a href="add_course.php" class="list-group-item list-group-item-action bg-dark mb-1  text-white"><i class="fas fa-plus-square fa-lg"></i> Add Course</a>
        <a href="add_room.php" class="list-group-item list-group-item-action bg-dark mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>  Add Room</a>
        <a href="list_subjects.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>List of Subjects</a>
        <a href="fees.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-money-check-alt fa-lg"></i>Fees</a>
         <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log Out</a>
        
      </div>
    </div>

   <div id="page-content-wrapper">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>
       
          
              <!--Start ng template para sa Add subject and add room para kay ephraim-->
              <div id="ui">
              	<h3>Add Subject</h3>
                <?php 
                
                $sql="SELECT course_desc FROM tbl_course";
                $course=mysqli_query($conn,$sql);

                $sql2="SELECT * FROM tbl_room";
                $room=mysqli_query($conn,$sql2);
                ?>
              <form class="form-group m-2" method="post">
                  <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Course</h5></label>
                    </div>
                    <div class="col-lg-9">
                      <select name="course" class="form-control">
                        <?php
                        while($rows=mysqli_fetch_assoc($course)) {
                         $courses=$rows['course_desc'];
                         echo "<option value='$courses'>$courses</option>"; 
                        }
                        ?>
                      </select> 
                    </div>
                  </div>

                  <br>
                  <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Subject Code</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="subj_code" class="form-control text-uppercase">
                      </select> 
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2">
                      <label><h5>Units</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="units" class="form-control">
                    </div>
                  </div>


                  <br>
                  <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Subject Name</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="subj_name" class="form-control">
                      </select> 
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2">
                      <label><h5>Section</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="section" class="form-control">
                    </div>
                  </div>
                  <!--Days-->
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="row ml-4">
                   <div class="col-lg-1">
                     <label><h5>Days</h5></label>
                  </div> 
                  
                 
                 </div>

                 <div class="row ml-5">
                
                   <div class="col-lg-3">
                      <input type="checkbox" class="form-check-input" name="day[]" value="M" >
                      <label class="form-check-label">Monday</label>
                  </div>
                  <div class="col-lg-2">
                      <input type="checkbox" class="form-check-input" name="day[]" value="T" >
                      <label class="form-check-label">Tuesday</label>
                  </div>
                  
                   

                  </div>

                   <div class="row ml-5">
                   
                   <div class="col-lg-3">
                      <input type="checkbox" class="form-check-input" name="day[]" value="W" >
                      <label class="form-check-label">Wednesday</label>
                  </div>
                  <div class="col-lg-2">
                      <input type="checkbox" class="form-check-input" name="day[]" value="Th" >
                      <label class="form-check-label">Thursday</label>
                  </div>

                  <!--TIME SLOT-->
                  
                   
                  </div>

                   <div class="row ml-5">
                  
                   <div class="col-lg-2">
                      <input type="checkbox" class="form-check-input" name="day[]" value="F" >
                      <label class="form-check-label">Friday</label>
                  </div>

                   
                 
                  </div>

                  <div class="row ml-5">
                    <div class="col-lg-4">
                    </div>
                    
                    
                  </div>
                    </div>
                    <div class="col-lg-3">
                      <h5>Time</h5>
                      <label>From:</label>
                      <input type="text" name="time_from" class="form-control">
                      
                    </div>
                    <div class="col-lg-3" style="margin-top: 31px;" >
                      
                      <label>To:</label>
                      <input type="text" name="time_to" class="form-control">
                    </div>
                  </div>
                  <!-- END Days-->


                  
                  <br>
                   <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Room</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <select name="room" class="form-control">
                        <?php
                        while($fetch=mysqli_fetch_assoc($room)) {
                         $rooms=$fetch['room_desc'];
                         echo "<option value='$rooms'>$rooms</option>"; 
                        }
                        ?>
                      </select> 
                    </div>
                    <div class="col-lg-3">
                      <label><h5>Semester</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <select name="semester" class="form-control">
                       
                        <option value="1st semester">1st Semester</option>
                        <option value="2nd semester">2nd Semester</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                   <div class="col-lg-8">
                     
                   </div>
                   <div class="col-lg-4">
                     <button class="btn btn-primary btn-block" type="submit" name="add_subj">Add</button>
                   </div>
                 </div> 
              </form>
                 

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