
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
	<title>Index</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css\bootstrap.min.css">
	
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css2/indexx.css">
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
        <a href="index.php" class="list-group-item list-group-item-action bg-white mb-1 text-dark"><i class="fas fa-users fa-lg"></i>Register</a>
        <a href="registered_students.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>Registered Students</a>
        <a href="enrolled_student.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>Enrolled Students</a>
        <a href="add_subject.php" class="list-group-item list-group-item-action bg-dark  mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>Add Subjects</a>
        <a href="add_course.php" class="list-group-item list-group-item-action bg-dark mb-1  text-white"><i class="fas fa-plus-square fa-lg"></i> Add Course</a>
        <a href="add_room.php" class="list-group-item list-group-item-action bg-dark  mb-1 text-white"><i class="fas fa-plus-square fa-lg"></i>  Add Room</a>
        <a href="list_subjects.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-clipboard-list fa-lg"></i>List of Subjects</a>
        <a href="fees.php" class="list-group-item list-group-item-action mb-1 bg-dark text-white"><i class="fas fa-money-check-alt fa-lg"></i>Fees</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log Out</a>
        
      </div>
    </div>

   <div id="page-content-wrapper">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>
       

              <div id="ui">

              
                <form class="form-group" method="post" action="index.php">
                  
                  <div class="row"><!--Top row-->
                   
                  <div class="col-lg-5"><p><h3>Register an Enrollee</h3></p></div>
                  <div class="col-lg-3"></div>
                  <div class="col-lg-4">
                    
                  </div>
                  
                    </div> <!-- end of top row-->
                 
                   <br>
                  <br>
                  <div class="row"><!--First row for year level and acad year-->
                    
                    <div class="col-lg-4">
                      <label>Academic Year </label>
                      <input type="text" name="academic" class="form-control" id="academic" value="<?php echo isset($_POST["academic"]) ? $_POST["academic"] : ''; ?>">
                    </div>

                     <div class="col-lg-4">
                      <label for="year_level">Year Level</label>
                      <input class="form-control" name="year" id="year" value="<?php echo isset($_POST["year"]) ? $_POST["year"] : ''; ?>">
                      
                    </div>

                     <div class="col-lg-4">
                      <label>OR Number</label>
                      <input type="text" name="or" class="form-control" id="or" value="<?php echo isset($_POST["or"]) ? $_POST["or"] : ''; ?>">
                      
                    </div>
                  </div><!--End of first row-->
                 
                  <br>

                  <div class="row"><!--Second row for Name etc -->
                    
                    <div class="col-lg-4">
                      <label>First Name</label>
                      <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo isset($_POST["firstname"]) ? $_POST["firstname"] : ''; ?>">
                    </div>
                      <div class="col-lg-4">
                      <label>Middle Initial</label>
                      <input type="text" name="middle" class="form-control" id="middle" value="<?php echo isset($_POST["middle"]) ? $_POST["middle"] : ''; ?>">
                    </div>
                    
                  
                     <div class="col-lg-4">
                      <label>Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="lastname" value="<?php echo isset($_POST["lastname"]) ? $_POST["lastname"] : ''; ?>">
                       </div>

                  </div><!--End of Second row--> 
                  <br>
                  <div class="row">
                    <div class="col-lg-4">
                      <select class="form-control" name="semester" id="semester">
                        <option value="1st semester">1st Semester</option>
                        <option value="2nd semester">2nd Semester</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <button class="btn btn-primary btn-block" type="submit" name="register" id="register" onclick="fadeout()">Register</button>
                </form>
                <center><p class="form-message"></p></center>
                
              
                
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
    $(document).ready(function(){
      $("form").submit(function(event){
        event.preventDefault();
        var academic=$("#academic").val();
        var year=$("#year").val();
        var or=$("#or").val();
        var course=$("#course").val();
        var firstname=$("#firstname").val();
        var middle=$("#middle").val();
        var lastname=$("#lastname").val();
        var semester=$("#semester").val();
        var submit=$("#register").val();
        $(".form-message").load("includes/registration.php", {
          academic: academic,
          year: year,
          or: or,
          course: course,
          firstname: firstname,
          middle: middle,
          lastname: lastname,
          semester: semester,
          register: submit
          


        });
      });

    });
  </script>

 
</body>

</html>