<?php 

 include('admin/includes/server.php');
 include ('includes/registration.php');

  



 
if (!isset($_SESSION['or_number'])) {
   echo "<script>alert('You must login bcompiler_write_functions_from_file(filehandle, fileName) viewing this page.'); location.href='login.php';</script>";
  # code...
}
#if (!isset($_SESSION['firstname'])) {
 #  echo "<script>alert('You must fill up the form before going to this page'); location.href='stud_admission.php';</script>";
  # code...
#}



  $sql="SELECT * FROM tbl_course";
  $result=mysqli_query($conn,$sql);

 if (isset($_SESSION['or_number'])) {
    # code...
  $login=$_SESSION['or_number'];
   $data="SELECT * FROM tbl_user WHERE or_number='$login'";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.".mysql_error());
  $data2=mysqli_fetch_array($qry);
  $dataa="SELECT * FROM tbl_admission WHERE or_number='$login'";

  $qry2=mysqli_query($conn,$dataa) or die ("Could not execute Query.".mysql_error());
  $data3=mysqli_fetch_array($qry2); 

 


 
}

include 'post_schedule.php';


?>
<!doctype html>
<html lang="en">
<head>
	<title>Schedule</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css2/schedules.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
   <script src="js/bootstrap.bundle.js"></script>
  <script src="jquery/jquery.js"></script>

</head>

<body>
  <nav class="navbar bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="stud_admission.php" class="nav-link"><h3 class="text-white " ><img src="images/logo.png" style="width: 100px;">Dagupan City National Highschool</h3></a>
    </div>
    <ul class="nav navbar-nav mt-3">
      
      <li class="nav-item "><a href="stud_admission.php" class="nav-link active "><h5 class="text-white">Admission Form</h5></a></li>
        <li class="nav-item "><a href="schedule.php" class="nav-link"><h5 class="text-white border-bottom">Schedule</h5></a></li> 
        
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
    <form method="post" action="sched_confirmation.php">
      <div>
        <input type="hidden" name="keyfield" value="<?php echo $login?>">
      	<div id="ui">
          <center><label><h2>Choose your schedule</h2></label></center>
          <hr>
          <div class="row ">
      
 
            <div class="col-lg-4 m-1">
              <label>Name</label>
                    <input name="name" class="form-control text-capitalize" id="name" value="<?php echo $data2['firstname'],' ', $data2['middle'],' ', $data2['lastname']?>">
                    
             
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2 m-1">
              <label>Academic Year</label>
              
              <input type="text" name="academic" class="form-control" value="<?php echo $data2['academic']?>" readonly style="font-size: 15px;">
            </div>
            <div class="col-lg-1"></div>

            <div class="col-lg-2 m-1">
              <label>Year Level</label>
              <input type="text" name="year_level" class="form-control" value="<?php echo $data2['year']?>" readonly style="font-size: 15px;">
            </div>
          </div>
          <div class="row">
          <input type="hidden" name="admission_id" value="<?php echo $_SESSION['lastid']?>">
 
            <div class="col-lg-4 m-1">
              <label>Course</label>
                    <select name="course" class="form-control" id="course">
                         <option value="">Select a course</option>
                       
                        <?php
                        while($rows=mysqli_fetch_assoc($result)) {
                         $courses=$rows['course_desc'];
                         echo "<option value='$courses'>$courses</option>"; 
                        }
                        ?>
                      </select> 
             
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2 m-1">
              <label>Semester</label>
              
              <input name="semester" class="form-control" id="semester" value="<?php echo $data2['semester']?>" readonly>
               
               
             
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2 m-1">
                           <label>Mode of payment</label>
              
              <select name="mode_payment" class="form-control">
                <option value=""></option>
                <option value="installment">Installment</option>
                <option value="full payment">Full Payment</option>
              </select> 
            </div>
          </div>
          <br>
          
          


        <div class="row">
          <div class="col-lg-2">
            <label class="m-1"><h4>Subject Code</h4></label>
            
            
             <select name="subject_code1" id="subject_code1" class="form-control m-1 " style="font-size: 15px;" >
             <option value="">Select Subject</option>
           </select>

           <select name="subject_code2" id="subject_code2" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

            <select name="subject_code3" id="subject_code3" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

            <select name="subject_code4" id="subject_code4" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

            <select name="subject_code5" id="subject_code5" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

            <select name="subject_code6" id="subject_code6" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

           <select name="subject_code7" id="subject_code7" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

           <select name="subject_code8" id="subject_code8" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

           <select name="subject_code9" id="subject_code9" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

            <select name="subject_code10" id="subject_code10" class="form-control m-1 " style="font-size: 15px;">
             <option value="">Select Subject</option>
           </select>

          </div>

          <div class="col-lg-3">
            <label class="m-1"><h4>Subjects Description</h4></label>
            
            
             <input name="subject_desc1" id="subject_desc1" class="form-control m-1 " readonly style="font-size: 15px;" >
            

           <input name="subject_desc2" id="subject_desc2" class="form-control m-1 " readonly style="font-size: 15px;">
             

            <input name="subject_desc3" id="subject_desc3" class="form-control m-1 " readonly style="font-size: 15px;">
            

            <input name="subject_desc4" id="subject_desc4" class="form-control m-1 " readonly style="font-size: 15px;">
           

            <input name="subject_desc5" id="subject_desc5" class="form-control m-1 " readonly style="font-size: 15px;">
             

            <input name="subject_desc6" id="subject_desc6" class="form-control m-1 " readonly style="font-size: 15px;">
           

           <input name="subject_desc7" id="subject_desc7" class="form-control m-1 " readonly style="font-size: 15px;">
             

           <input name="subject_desc8" id="subject_desc8" class="form-control m-1 " readonly style="font-size: 15px;">
            

           <input name="subject_desc9" id="subject_desc9" class="form-control m-1 " readonly style="font-size: 15px;">
            

            <input name="subject_desc10" id="subject_desc10" class="form-control m-1 " readonly style="font-size: 15px;">
            

          </div>


          <div class="col-lg-1">
            <label class="m-1"><h4>Units</h4></label>
           <input name="unit1" id="unit1" class="form-control m-1" readonly style="font-size: 15px;">
             
          
           <input name="unit2" id="unit2" class="form-control m-1" readonly style="font-size: 15px;">
            

           <input name="unit3" id="unit3" class="form-control m-1" readonly style="font-size: 15px;">
           
          

           <input name="unit4" id="unit4" class="form-control m-1" readonly style="font-size: 15px;">
         
          

           <input name="unit5" id="unit5" class="form-control m-1" readonly style="font-size: 15px;">
             
           

           <input name="unit6" id="unit6" class="form-control m-1" readonly style="font-size: 15px;">
            
          

           <input name="unit7" id="unit7" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="unit8" id="unit8" class="form-control m-1" readonly style="font-size: 15px;">
          
          

           <input name="unit9" id="unit9" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="unit10" id="unit10" class="form-control m-1" readonly style="font-size: 15px;">
           
           
        

          </div>

           <div class="col-lg-1">
            <label class="m-1"><h4>Day</h4></label>
           <input name="day1" id="day1" class="form-control m-1" readonly style="font-size: 15px;">
             
          
           <input name="day2" id="day2" class="form-control m-1" readonly style="font-size: 15px;">
            

           <input name="day3" id="day3" class="form-control m-1" readonly style="font-size: 15px;">
           
          

           <input name="day4" id="day4" class="form-control m-1" readonly style="font-size: 15px;">
         
          

           <input name="day5" id="day5" class="form-control m-1" readonly style="font-size: 15px;">
             
           

           <input name="day6" id="day6" class="form-control m-1" readonly style="font-size: 15px;">
            
          

           <input name="day7" id="day7" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="day8" id="day8" class="form-control m-1" readonly style="font-size: 15px;">
          
          

           <input name="day9" id="day9" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="day10" id="day10" class="form-control m-1" readonly style="font-size: 15px;">

         </div>


            <div class="col-lg-2">
            <label class="m-1"><h4>Time</h4></label>
           <input name="time1" id="time1" class="form-control m-1" readonly style="font-size: 15px;" >
             
          
           <input name="time2" id="time2" class="form-control m-1" readonly style="font-size: 15px;">
            

           <input name="time3" id="time3" class="form-control m-1" readonly style="font-size: 15px;">
           
          

           <input name="time4" id="time4" class="form-control m-1" readonly style="font-size: 15px;">
         
          

           <input name="time5" id="time5" class="form-control m-1" readonly style="font-size: 15px;">
             
           

           <input name="time6" id="time6" class="form-control m-1" readonly style="font-size: 15px;">
            
          

           <input name="time7" id="time7" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="time8" id="time8" class="form-control m-1" readonly style="font-size: 15px;">
          
          

           <input name="time9" id="time9" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="time10" id="time10" class="form-control m-1" readonly style="font-size: 15px;">

         </div>


            <div class="col-lg-1">
            <label class="m-1"><h4>Room</h4></label>
           <input name="room1" id="room1" class="form-control m-1" readonly style="font-size: 15px;">
             
          
           <input name="room2" id="room2" class="form-control m-1" readonly style="font-size: 15px;">
            

           <input name="room3" id="room3" class="form-control m-1" readonly style="font-size: 15px;">
           
          

           <input name="room4" id="room4" class="form-control m-1" readonly style="font-size: 15px;">
         
          

           <input name="room5" id="room5" class="form-control m-1" readonly style="font-size: 15px;">
             
           

           <input name="room6" id="room6" class="form-control m-1" readonly style="font-size: 15px;">
            
          

           <input name="room7" id="room7" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="room8" id="room8" class="form-control m-1" readonly style="font-size: 15px;">
          
          

           <input name="room9" id="room9" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="room10" id="room10" class="form-control m-1" readonly style="font-size: 15px;">
         </div>



            <div class="col-lg-1">
            <label class="m-1"><h4>Section</h4></label>
           <input name="section1" id="section1" class="form-control m-1" readonly style="font-size: 15px;">
             
          
           <input name="section2" id="section2" class="form-control m-1" readonly style="font-size: 15px;">
            

           <input name="section3" id="section3" class="form-control m-1" readonly style="font-size: 15px;">
           
          

           <input name="section4" id="section4" class="form-control m-1" readonly style="font-size: 15px;">
         
          

           <input name="section5" id="section5" class="form-control m-1" readonly style="font-size: 15px;">
             
           

           <input name="section6" id="section6" class="form-control m-1" readonly style="font-size: 15px;">
            
          

           <input name="section7" id="section7" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="section8" id="section8" class="form-control m-1" readonly style="font-size: 15px;">
          
          

           <input name="section9" id="section9" class="form-control m-1" readonly style="font-size: 15px;">
          
           

           <input name="section10" id="section10" class="form-control m-1" readonly style="font-size: 15px;">
           
           
        

          </div>


        


     

          <div class="col-lg-1">
            <br>
            <br>
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear1"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear2"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear3"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear4"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear5"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear6"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear7"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear8"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear9"  value="&times;" style="font-size: 15px;">
            <input  type="button" class="btn btn-danger btn-block m-1" id="btnclear10"  value="&times;" style="font-size: 15px;">

          </div>
        </div>
          

          <br>
          <div class="row">
            <div class="col-lg-5">
             
              </div>
          </div>
          <div class="row">
            <div class="col-lg-10"></div>
            <div class="col-lg-2">
             <button class="btn btn-primary btn-block m-1" name="btnconfirm" >Confirm</button>
            </div>
          </div>
        </div>
       

      	</div>
      	
      </form>

</body>

</html>


<!--Script for printing schedule-->

<script>
 $(document).ready(function(){
    $('#subject_code1').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit1').val(data);

        }
      });

    });
  });
</script>
<!--SCRIPT FOR RETAINING SELECTED OPTIONS AFTER SUBMISSION-->

<!--Script for Clearing text fields-->
<script>
 
  $(function () {
        $("#btnclear1").bind("click", function () {
            $("#subject_code1")[0].selectedIndex = 0;
            $("#subject_desc1").val("");
            $("#unit1").val("");
            $("#day1").val("");
            $("#time1").val("");
            $("#room1").val("");
            $("#section1").val("");
        });
    });
   $(function () {
        $("#btnclear2").bind("click", function () {
            $("#subject_code2")[0].selectedIndex = 0;
            $("#subject_desc2").val("");
            $("#unit2").val("");
            $("#day2").val("");
             $("#time2").val("");
            $("#room2").val("");
            $("#section2").val("");
        });
    });
    $(function () {
        $("#btnclear3").bind("click", function () {
            $("#subject_code3")[0].selectedIndex = 0;
            $("#subject_desc3").val("");
            $("#unit3").val("");
            $("#day3").val("");
             $("#time3").val("");
            $("#room3").val("");
            $("#section3").val("");
        });
    });
     $(function () {
        $("#btnclear4").bind("click", function () {
            $("#subject_code4")[0].selectedIndex = 0;
            $("#subject_desc4").val("");
            $("#unit4").val("");
            $("#day4").val("");
             $("#time4").val("");
            $("#room4").val("");
            $("#section4").val("");
        });
    });
      $(function () {
        $("#btnclear5").bind("click", function () {
            $("#subject_code5")[0].selectedIndex = 0;
            $("#subject_desc5").val("");
            $("#unit5").val("");
            $("#day5").val("");
             $("#time5").val("");
            $("#room5").val("");
            $("#section5").val("");
        });
    });
       $(function () {
        $("#btnclear6").bind("click", function () {
            $("#subject_code6")[0].selectedIndex = 0;
            $("#subject_desc6").val("");
            $("#unit6").val("");
            $("#day6").val("");
             $("#time6").val("");
            $("#room6").val("");
            $("#section6").val("");
        });
    });
        $(function () {
        $("#btnclear7").bind("click", function () {
            $("#subject_code7")[0].selectedIndex = 0;
            $("#subject_desc7").val("");
            $("#unit7").val("");
            $("#day7").val("");
             $("#time7").val("");
            $("#room7").val("");
            $("#section7").val("");
        });
    });
         $(function () {
        $("#btnclear8").bind("click", function () {
            $("#subject_code8")[0].selectedIndex = 0;
            $("#subject_desc8").val("");
            $("#unit8").val("");
            $("#day8").val("");
             $("#time8").val("");
            $("#room8").val("");
            $("#section8").val("");
        });
    });
          $(function () {
        $("#btnclear9").bind("click", function () {
            $("#subject_code9")[0].selectedIndex = 0;
            $("#subject_desc9").val("");
            $("#unit9").val("");
            $("#day9").val("");
             $("#time9").val("");
            $("#room9").val("");
            $("#section9").val("");
        });
    });
           $(function () {
        $("#btnclear10").bind("click", function () {
            $("#subject_code10")[0].selectedIndex = 0;
            $("#subject_desc10").val("");
            $("#unit10").val("");
            $("#day10").val("");
             $("#time10").val("");
            $("#room10").val("");
            $("#section10").val("");
        });
    });
</script>

<!--FETCHING 1ST 2Nd SEM SUBJECTS-->
<script>
  $(document).ready(function(){
    $('#subject_code10').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc10').val(data);
        }
      });

    });
  });
</script>

<!--script for fetching subject code-->
<script>
  $(document).ready(function(){
    $('#course').change(function(){
     var subject_code=$(this).val();
     var semester=$("#semester").val();
      $.ajax({
        url:"fetch_subject_code.php",
        method:"post",
        data:{Subject_code:subject_code,Semester:semester},
        dataType:"text",
        success:function(data)
        {
          $('#subject_code1').html(data);
          $('#subject_code2').html(data);
          $('#subject_code3').html(data);
          $('#subject_code4').html(data);
          $('#subject_code5').html(data);
          $('#subject_code6').html(data);
          $('#subject_code7').html(data);
          $('#subject_code8').html(data);
          $('#subject_code9').html(data);
          $('#subject_code10').html(data);
        }
      });
     $('#semester').value(function(){
     
      var semester=$(this).val();
      $.ajax({
        url:"fetch_subject_code.php",
        method:"post",
        data:{Subject_code:subject_code,Semester:semester},
        dataType:"text",
        success:function(data)
        {
          $('#subject_code1').html(data);
          $('#subject_code2').html(data);
          $('#subject_code3').html(data);
          $('#subject_code4').html(data);
          $('#subject_code5').html(data);
          $('#subject_code6').html(data);
          $('#subject_code7').html(data);
          $('#subject_code8').html(data);
          $('#subject_code9').html(data);
          $('#subject_code10').html(data);
        }
      });
    });
   

    });
  });
 

</script>


<!--script for fetching subject desc-->
<script>
  $(document).ready(function(){
    $('#subject_code1').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc1').val(data);
        }
      });

    });
  });
   $(document).ready(function(){
    $('#subject_code2').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc2').val(data);
        }
      });

    });
  });
    $(document).ready(function(){
    $('#subject_code3').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc3').val(data);
        }
      });

    });
  });
     $(document).ready(function(){
    $('#subject_code4').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc4').val(data);
        }
      });

    });
  });
      $(document).ready(function(){
    $('#subject_code5').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc5').val(data);
        }
      });

    });
  });
       $(document).ready(function(){
    $('#subject_code6').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc6').val(data);
        }
      });

    });
  });
        $(document).ready(function(){
    $('#subject_code7').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc7').val(data);
        }
      });

    });
  });
         $(document).ready(function(){
    $('#subject_code8').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc8').val(data);
        }
      });

    });
  });
          $(document).ready(function(){
    $('#subject_code9').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc9').val(data);
        }
      });

    });
  });
           $(document).ready(function(){
    $('#subject_code10').change(function(){
      var subject_desc=$(this).val();
      $.ajax({
        url:"fetch_subject.php",
        method:"post",
        data:{Subject_desc:subject_desc},
        dataType:"text",
        success:function(data)
        {
          $('#subject_desc10').val(data);
        }
      });

    });
  });

</script>



<!--Script for fetching units-->
<script>
 $(document).ready(function(){
    $('#subject_code1').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit1').val(data);

        }
      });

    });
  });
   $(document).ready(function(){
    $('#subject_code2').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit2').val(data);
        }
      });

    });
  });
    $(document).ready(function(){
    $('#subject_code3').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit3').val(data);
        }
      });

    });
  });
     $(document).ready(function(){
    $('#subject_code4').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit4').val(data);
        }
      });

    });
  });
      $(document).ready(function(){
    $('#subject_code5').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit5').val(data);
        }
      });

    });
  });
       $(document).ready(function(){
    $('#subject_code6').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit6').val(data);
        }
      });

    });
  });
        $(document).ready(function(){
    $('#subject_code7').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit7').val(data);
        }
      });

    });
  });
         $(document).ready(function(){
    $('#subject_code8').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit8').val(data);
        }
      });

    });
  });
          $(document).ready(function(){
    $('#subject_code9').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit9').val(data);
        }
      });

    });
  });
           $(document).ready(function(){
    $('#subject_code10').change(function(){
      var unit=$(this).val();
      $.ajax({
        url:"fetch_unit.php",
        method:"post",
        data:{Units:unit},
        dataType:"text",
        success:function(data)
        {
          $('#unit10').val(data);
        }
      });

    });
  });
</script>

<!--Script for fetching day-->
<script>
 $(document).ready(function(){
    $('#subject_code1').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day1').val(data);

        }
      });

    });
  });
   $(document).ready(function(){
    $('#subject_code2').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day2').val(data);
        }
      });

    });
  });
    $(document).ready(function(){
    $('#subject_code3').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day3').val(data);
        }
      });

    });
  });
     $(document).ready(function(){
    $('#subject_code4').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day4').val(data);
        }
      });

    });
  });
      $(document).ready(function(){
    $('#subject_code5').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day5').val(data);
        }
      });

    });
  });
       $(document).ready(function(){
    $('#subject_code6').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day6').val(data);
        }
      });

    });
  });
        $(document).ready(function(){
    $('#subject_code7').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day7').val(data);
        }
      });

    });
  });
         $(document).ready(function(){
    $('#subject_code8').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day8').val(data);
        }
      });

    });
  });
          $(document).ready(function(){
    $('#subject_code9').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day9').val(data);
        }
      });

    });
  });
           $(document).ready(function(){
    $('#subject_code10').change(function(){
      var day=$(this).val();
      $.ajax({
        url:"fetch_day.php",
        method:"post",
        data:{Day:day},
        dataType:"text",
        success:function(data)
        {
          $('#day10').val(data);
        }
      });

    });
  });
</script>




<!--Script for fetching Section-->
<script>
 $(document).ready(function(){
    $('#subject_code1').change(function(){
      var section=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:section},
        dataType:"text",
        success:function(data)
        {
          $('#section1').val(data);

        }
      });

    });
  });
   $(document).ready(function(){
    $('#subject_code2').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section2').val(data);
        }
      });

    });
  });
    $(document).ready(function(){
    $('#subject_code3').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section3').val(data);
        }
      });

    });
  });
     $(document).ready(function(){
    $('#subject_code4').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section4').val(data);
        }
      });

    });
  });
      $(document).ready(function(){
    $('#subject_code5').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section5').val(data);
        }
      });

    });
  });
       $(document).ready(function(){
    $('#subject_code6').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section6').val(data);
        }
      });

    });
  });
        $(document).ready(function(){
    $('#subject_code7').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section7').val(data);
        }
      });

    });
  });
         $(document).ready(function(){
    $('#subject_code8').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section8').val(data);
        }
      });

    });
  });
          $(document).ready(function(){
    $('#subject_code9').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section9').val(data);
        }
      });

    });
  });
           $(document).ready(function(){
    $('#subject_code10').change(function(){
      var subject=$(this).val();
      $.ajax({
        url:"fetch_section.php",
        method:"post",
        data:{Section:subject},
        dataType:"text",
        success:function(data)
        {
          $('#section10').val(data);
        }
      });

    });
  });
</script>

<!--Script for fetching Time-->
<script>
 $(document).ready(function(){
    $('#subject_code1').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time1').val(data);

        }
      });

    });
  });
   $(document).ready(function(){
    $('#subject_code2').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time2').val(data);
        }
      });

    });
  });
    $(document).ready(function(){
    $('#subject_code3').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time3').val(data);
        }
      });

    });
  });
     $(document).ready(function(){
    $('#subject_code4').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time4').val(data);
        }
      });

    });
  });
      $(document).ready(function(){
    $('#subject_code5').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time5').val(data);
        }
      });

    });
  });
       $(document).ready(function(){
    $('#subject_code6').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time6').val(data);
        }
      });

    });
  });
        $(document).ready(function(){
    $('#subject_code7').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time7').val(data);
        }
      });

    });
  });
         $(document).ready(function(){
    $('#subject_code8').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time8').val(data);
        }
      });

    });
  });
          $(document).ready(function(){
    $('#subject_code9').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time9').val(data);
        }
      });

    });
  });
           $(document).ready(function(){
    $('#subject_code10').change(function(){
      var time=$(this).val();
      $.ajax({
        url:"fetch_time.php",
        method:"post",
        data:{Time:time},
        dataType:"text",
        success:function(data)
        {
          $('#time10').val(data);
        }
      });

    });
  });
</script>

<!--Script for fetching Room-->
<script>
 $(document).ready(function(){
    $('#subject_code1').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room1').val(data);

        }
      });

    });
  });
   $(document).ready(function(){
    $('#subject_code2').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room2').val(data);
        }
      });

    });
  });
    $(document).ready(function(){
    $('#subject_code3').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room3').val(data);
        }
      });

    });
  });
     $(document).ready(function(){
    $('#subject_code4').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room4').val(data);
        }
      });

    });
  });
      $(document).ready(function(){
    $('#subject_code5').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room5').val(data);
        }
      });

    });
  });
       $(document).ready(function(){
    $('#subject_code6').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room6').val(data);
        }
      });

    });
  });
        $(document).ready(function(){
    $('#subject_code7').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room7').val(data);
        }
      });

    });
  });
         $(document).ready(function(){
    $('#subject_code8').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room8').val(data);
        }
      });

    });
  });
          $(document).ready(function(){
    $('#subject_code9').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room9').val(data);
        }
      });

    });
  });
           $(document).ready(function(){
    $('#subject_code10').change(function(){
      var room=$(this).val();
      $.ajax({
        url:"fetch_room.php",
        method:"post",
        data:{Room:room},
        dataType:"text",
        success:function(data)
        {
          $('#room10').val(data);
        }
      });

    });
  });
</script>