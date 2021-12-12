
<?php
session_start();
include 'post_schedule.php';
include 'includes/schedule_save.php';
?>
<html lang="en">
<head>
	<link rel="icon" href="images/logo.png">
	<title>Schedule Confirmation</title>
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
        <li class="nav-item "><a href="schedule.php" class="nav-link"><h5 class="text-white ">Schedule</h5></a></li> 
        
        <li class="nav-item"><a href="logout.php" class="nav-link text-white"><i class="fas fa-sign-out-alt fa-lg"></i>Log out</a></li></ul>
    </ul>
  </div>
</nav>
<form method="post" action="sched_print.php">

<div id="ui">
	<div class="row">
		<div class="col-lg-10">
			<input type="hidden" name="admission_id" value="<?php echo $_POST['admission_id']?>">
	 <table style="border-spacing: 5px;border-collapse: separate;">
	 	<tr>
	 		<td>Student name</td>
	 		<td></td>
	 		<td>:</td>
	 		<td></td>
	 		<td><span class="text-capitalize">
	 			<?php if (isset($_POST['name'])) {
		echo $_POST['name'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="name"
				<?php if (isset($_POST['name'])): ?>
					value="<?php echo $_POST['name'];?>"
				
				<?php endif ?>
				>
	</span></td>
	 	</tr>

	 	<tr>
	 		<td>Course</td>
	 		<td></td>
	 		<td>:</td>
	 		<td></td>
	 		<td><span class="text-capitalize">
	 			<?php if (isset($_POST['course'])) {
		echo $_POST['course'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="course"
				<?php if (isset($_POST['course'])): ?>
					value="<?php echo $_POST['course'];?>"
				
				<?php endif ?>
				>
	</span></td>
	 	</tr>

	 	<tr>
	 		<td><p>School year</td>
	 		<td></td>
	 		<td>:</td>
	 		<td></td>
	 		<td><?php if (isset($_POST['academic'])) {
		echo $_POST['academic'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="academic"
				<?php if (isset($_POST['academic'])): ?>
					value="<?php echo $_POST['academic'];?>"
				
				<?php endif ?>
				>
	</td>
	 	</tr>
	 </table>
	</div>

	 <div class="col-lg-2">
	 	<table style="border-spacing: 5px;border-collapse: separate;">
	 		<tr>
	 		<td>Year level</td>
	 		<td></td>
	 		<td>:</td>
	 		<td></td>
	 		<td><?php if (isset($_POST['year_level'])) {
		echo $_POST['year_level'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="year_level"
				<?php if (isset($_POST['year_level'])): ?>
					value="<?php echo $_POST['year_level'];?>"
				
				<?php endif ?>
				>
	</td>
	 	</tr>

	 	<tr>
	 		<td>Semester</td>
	 		<td></td>
	 		<td>:</td>
	 		<td></td>
	 		<td><?php if (isset($_POST['semester'])) {
		echo $_POST['semester'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="semester"
				<?php if (isset($_POST['semester'])): ?>
					value="<?php echo $_POST['semester'];?>"
				
				<?php endif ?>
				>
	</td>
	 	</tr>
	 	
	 	</table>
	 </div>
	 	
	
</div>


<table class="table" style="border:1px solid black;">
	<tr style="text-align: center;">
	<th style="border:1px solid black;">Subject</th>
	<th style="border:1px solid black;">Description</th>
	<th style="border:1px solid black;">Units</th>
	<th style="border:1px solid black;">Time</th>
	<th style="border:1px solid black;">Day</th>
	<th style="border:1px solid black;">Room</th>
	<th style="border:1px solid black;">Section</th>
	
	</tr>
	<!--FIRST ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code1'])) {
		echo $_POST['subject_code1'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="subject_code1"
				<?php if (isset($_POST['subject_code1'])): ?>
					value="<?php echo $_POST['subject_code1'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc1'])) {
		echo $_POST['subject_desc1'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="subject_desc1"
				<?php if (isset($_POST['subject_desc1'])): ?>
					value="<?php echo $_POST['subject_desc1'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit1'])) {
		echo $_POST['unit1'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="unit1"
				<?php if (isset($_POST['unit1'])): ?>
					value="<?php echo $_POST['unit1'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time1'])) {
		echo $_POST['time1'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time1"
				<?php if (isset($_POST['time1'])): ?>
					value="<?php echo $_POST['time1'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day1'])) {
		echo $_POST['day1'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day1"
				<?php if (isset($_POST['day1'])): ?>
					value="<?php echo $_POST['day1'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room1'])) {
		echo $_POST['room1'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room1"
				<?php if (isset($_POST['room1'])): ?>
					value="<?php echo $_POST['room1'];?>"
				
				<?php endif ?>
		>
	</td>


	<td style="border:1px solid black;">
	<?php if (isset($_POST['section1'])) {
		echo $_POST['section1'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section1"
				<?php if (isset($_POST['section1'])): ?>
					value="<?php echo $_POST['section1'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>



<!--2ND ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code2'])) {
		echo $_POST['subject_code2'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code2"
				<?php if (isset($_POST['subject_code2'])): ?>
					value="<?php echo $_POST['subject_code2'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc2'])) {
		echo $_POST['subject_desc2'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="subject_desc2"
				<?php if (isset($_POST['subject_desc2'])): ?>
					value="<?php echo $_POST['subject_desc2'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit2'])) {
		echo $_POST['unit2'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit2"
				<?php if (isset($_POST['unit2'])): ?>
					value="<?php echo $_POST['unit2'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time2'])) {
		echo $_POST['time2'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time2"
				<?php if (isset($_POST['time2'])): ?>
					value="<?php echo $_POST['time2'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day2'])) {
		echo $_POST['day2'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day2"
				<?php if (isset($_POST['day2'])): ?>
					value="<?php echo $_POST['day2'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room2'])) {
		echo $_POST['room2'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room2"
				<?php if (isset($_POST['room2'])): ?>
					value="<?php echo $_POST['room2'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section2'])) {
		echo $_POST['section2'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section2"
				<?php if (isset($_POST['section2'])): ?>
					value="<?php echo $_POST['section2'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--3RD ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code3'])) {
		echo $_POST['subject_code3'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code3"
				<?php if (isset($_POST['subject_code3'])): ?>
					value="<?php echo $_POST['subject_code3'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc3'])) {
		echo $_POST['subject_desc3'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="subject_desc3"
				<?php if (isset($_POST['subject_desc3'])): ?>
					value="<?php echo $_POST['subject_desc3'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit3'])) {
		echo $_POST['unit3'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit3"
				<?php if (isset($_POST['unit3'])): ?>
					value="<?php echo $_POST['unit3'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time3'])) {
		echo $_POST['time3'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time3"
				<?php if (isset($_POST['time3'])): ?>
					value="<?php echo $_POST['time3'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day3'])) {
		echo $_POST['day3'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day3"
				<?php if (isset($_POST['day3'])): ?>
					value="<?php echo $_POST['day3'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room3'])) {
		echo $_POST['room3'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room3"
				<?php if (isset($_POST['room3'])): ?>
					value="<?php echo $_POST['room3'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section3'])) {
		echo $_POST['section3'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section3"
				<?php if (isset($_POST['section3'])): ?>
					value="<?php echo $_POST['section3'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--4TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code4'])) {
		echo $_POST['subject_code4'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code4"
				<?php if (isset($_POST['subject_code4'])): ?>
					value="<?php echo $_POST['subject_code4'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc4'])) {
		echo $_POST['subject_desc4'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_desc4"
				<?php if (isset($_POST['subject_desc4'])): ?>
					value="<?php echo $_POST['subject_desc4'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit4'])) {
		echo $_POST['unit4'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="unit4"
				<?php if (isset($_POST['unit4'])): ?>
					value="<?php echo $_POST['unit4'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time4'])) {
		echo $_POST['time4'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time4"
				<?php if (isset($_POST['time4'])): ?>
					value="<?php echo $_POST['time4'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day4'])) {
		echo $_POST['day4'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day4"
				<?php if (isset($_POST['day4'])): ?>
					value="<?php echo $_POST['day4'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room4'])) {
		echo $_POST['room4'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room4"
				<?php if (isset($_POST['room4'])): ?>
					value="<?php echo $_POST['room4'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section4'])) {
		echo $_POST['section4'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section4"
				<?php if (isset($_POST['section4'])): ?>
					value="<?php echo $_POST['section4'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--5TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code5'])) {
		echo $_POST['subject_code5'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code5"
				<?php if (isset($_POST['subject_code5'])): ?>
					value="<?php echo $_POST['subject_code5'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc5'])) {
		echo $_POST['subject_desc5'];
	} 
	else{echo ""; } ?>
		<input type="hidden" name="subject_desc5"
				<?php if (isset($_POST['subject_desc5'])): ?>
					value="<?php echo $_POST['subject_desc5'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit5'])) {
		echo $_POST['unit5'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit5"
				<?php if (isset($_POST['unit5'])): ?>
					value="<?php echo $_POST['unit5'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time5'])) {
		echo $_POST['time5'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time5"
				<?php if (isset($_POST['time5'])): ?>
					value="<?php echo $_POST['time5'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day5'])) {
		echo $_POST['day5'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day5"
				<?php if (isset($_POST['day5'])): ?>
					value="<?php echo $_POST['day5'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room5'])) {
		echo $_POST['room5'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room5"
				<?php if (isset($_POST['room5'])): ?>
					value="<?php echo $_POST['room5'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section5'])) {
		echo $_POST['section5'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section5"
				<?php if (isset($_POST['section5'])): ?>
					value="<?php echo $_POST['section5'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>

	<!--6TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code6'])) {
		echo $_POST['subject_code6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code6"
				<?php if (isset($_POST['subject_code6'])): ?>
					value="<?php echo $_POST['subject_code6'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc6'])) {
		echo $_POST['subject_desc6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_desc6"
				<?php if (isset($_POST['subject_desc6'])): ?>
					value="<?php echo $_POST['subject_desc6'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit6'])) {
		echo $_POST['unit6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit6"
				<?php if (isset($_POST['unit6'])): ?>
					value="<?php echo $_POST['unit6'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time6'])) {
		echo $_POST['time6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time6"
				<?php if (isset($_POST['time6'])): ?>
					value="<?php echo $_POST['time6'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day6'])) {
		echo $_POST['day6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day6"
				<?php if (isset($_POST['day6'])): ?>
					value="<?php echo $_POST['day6'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room6'])) {
		echo $_POST['room6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room6"
				<?php if (isset($_POST['room6'])): ?>
					value="<?php echo $_POST['room6'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section6'])) {
		echo $_POST['section6'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section6"
				<?php if (isset($_POST['section6'])): ?>
					value="<?php echo $_POST['section6'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--7TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code7'])) {
		echo $_POST['subject_code7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code7"
				<?php if (isset($_POST['subject_code7'])): ?>
					value="<?php echo $_POST['subject_code7'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc7'])) {
		echo $_POST['subject_desc7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_desc7"
				<?php if (isset($_POST['subject_desc7'])): ?>
					value="<?php echo $_POST['subject_desc7'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit7'])) {
		echo $_POST['unit7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit7"
				<?php if (isset($_POST['unit7'])): ?>
					value="<?php echo $_POST['unit7'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time7'])) {
		echo $_POST['time7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time7"
				<?php if (isset($_POST['time7'])): ?>
					value="<?php echo $_POST['time7'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day7'])) {
		echo $_POST['day7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day7"
				<?php if (isset($_POST['day7'])): ?>
					value="<?php echo $_POST['day7'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room7'])) {
		echo $_POST['room7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room7"
				<?php if (isset($_POST['room7'])): ?>
					value="<?php echo $_POST['room7'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section7'])) {
		echo $_POST['section7'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section7"
				<?php if (isset($_POST['section7'])): ?>
					value="<?php echo $_POST['section7'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--8TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code8'])) {
		echo $_POST['subject_code8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code8"
				<?php if (isset($_POST['subject_code8'])): ?>
					value="<?php echo $_POST['subject_code8'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc8'])) {
		echo $_POST['subject_desc8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_desc8"
				<?php if (isset($_POST['subject_desc8'])): ?>
					value="<?php echo $_POST['subject_desc8'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit8'])) {
		echo $_POST['unit8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit8"
				<?php if (isset($_POST['unit8'])): ?>
					value="<?php echo $_POST['unit8'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time8'])) {
		echo $_POST['time8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time8"
				<?php if (isset($_POST['time8'])): ?>
					value="<?php echo $_POST['time8'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day8'])) {
		echo $_POST['day8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day8"
				<?php if (isset($_POST['day8'])): ?>
					value="<?php echo $_POST['day8'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room8'])) {
		echo $_POST['room8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room8"
				<?php if (isset($_POST['room8'])): ?>
					value="<?php echo $_POST['room8'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section8'])) {
		echo $_POST['section8'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section8"
				<?php if (isset($_POST['section8'])): ?>
					value="<?php echo $_POST['section8'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--9TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code9'])) {
		echo $_POST['subject_code9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code9"
				<?php if (isset($_POST['subject_code9'])): ?>
					value="<?php echo $_POST['subject_code9'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc9'])) {
		echo $_POST['subject_desc9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_desc9"
				<?php if (isset($_POST['subject_desc9'])): ?>
					value="<?php echo $_POST['subject_desc9'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit9'])) {
		echo $_POST['unit9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit9"
				<?php if (isset($_POST['unit9'])): ?>
					value="<?php echo $_POST['unit9'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time9'])) {
		echo $_POST['time9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time9"
				<?php if (isset($_POST['time9'])): ?>
					value="<?php echo $_POST['time9'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day9'])) {
		echo $_POST['day9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day9"
				<?php if (isset($_POST['day9'])): ?>
					value="<?php echo $_POST['day9'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room9'])) {
		echo $_POST['room9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room9"
				<?php if (isset($_POST['room9'])): ?>
					value="<?php echo $_POST['room9'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section9'])) {
		echo $_POST['section9'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section9"
				<?php if (isset($_POST['section9'])): ?>
					value="<?php echo $_POST['section9'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>


	<!--10TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_code10'])) {
		echo $_POST['subject_code10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_code10"
				<?php if (isset($_POST['subject_code10'])): ?>
					value="<?php echo $_POST['subject_code10'];?>"
				
				<?php endif ?>
		>
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($_POST['subject_desc10'])) {
		echo $_POST['subject_desc10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="subject_desc10"
				<?php if (isset($_POST['subject_desc10'])): ?>
					value="<?php echo $_POST['subject_desc10'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($_POST['unit10'])) {
		echo $_POST['unit10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="unit10"
				<?php if (isset($_POST['unit10'])): ?>
					value="<?php echo $_POST['unit10'];?>"
				
				<?php endif ?>
		>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['time10'])) {
		echo $_POST['time10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="time10"
				<?php if (isset($_POST['time10'])): ?>
					value="<?php echo $_POST['time10'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['day10'])) {
		echo $_POST['day10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="day10"
				<?php if (isset($_POST['day10'])): ?>
					value="<?php echo $_POST['day10'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['room10'])) {
		echo $_POST['room10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="room10"
				<?php if (isset($_POST['room10'])): ?>
					value="<?php echo $_POST['room10'];?>"
				
				<?php endif ?>
		>
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($_POST['section10'])) {
		echo $_POST['section10'];
	} 
	else{echo ""; } ?>
	<input type="hidden" name="section10"
				<?php if (isset($_POST['section10'])): ?>
					value="<?php echo $_POST['section10'];?>"
				
				<?php endif ?>
		>
	</td>
	</tr>

 
</table>
<div class="row">
	<div class="col-lg-5">
		<table style="border-spacing: 5px;border-collapse: separate;">
               <th>Tuition Fee</th>
                <tr>
                  <td>Tuition Fee</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php
                 
                  echo number_format($calc,2);
                  ?>
                  	<input type="hidden" name="tuition_fee" value="<?php echo number_format($calc,2)?>">
                  </td>
                </tr>

                   <tr>
                  <th>Total Tuition Fees</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th name="total_tuition_fee"><?php
                  echo number_format($calc,2);
                  
                  ?></th>
                </tr>

                <?php
                $fee="computer laboratory";
                $sql="SELECT * FROM tbl_fee WHERE fee_name='$fee'";
                $row=mysqli_query($conn,$sql);
                $result=mysqli_fetch_assoc($row);
                ?>

               <th>Laboratory Fee</th>
                <tr>
                  <td>Computer Laboratory</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo number_format($result["fee_price"],2) ?>
                  	<input type="hidden" name="computer_laboratory" value="<?php echo number_format($result["fee_price"],2)?>">
                  </td>
                </tr>

                   <tr>
                  <th>Total Laboratory Fees</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th name="total_laboratory"><?php echo number_format($result["fee_price"],2) ?></th>
                </tr>

                  <?php
                $miscellaneous="Miscellaneous fee";
                $query="SELECT * FROM tbl_fee WHERE fee_name='$miscellaneous'";
                $rows=mysqli_query($conn,$query);
                $result1=mysqli_fetch_assoc($rows);
                ?>
                <tr>
                  <th>Total Miscellaneous Fees</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php echo number_format($result1["fee_price"],2) ?>
                  	<input type="hidden" name="total_miscellaneous_fee" value="<?php echo number_format($result1["fee_price"],2)?>">
                  </th>
                </tr>

                  <?php
                $other="other school fee";
                $queryy="SELECT * FROM tbl_fee WHERE fee_name='$other'";
                $rowss=mysqli_query($conn,$queryy);
                $result2=mysqli_fetch_assoc($rowss);
                ?>
                <tr>
                  <th>Other School Fees</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th name="other_fee"><?php echo number_format($result2["fee_price"],2)?>
                  		<input type="hidden" name="other_fee" value="<?php echo number_format($result2["fee_price"],2)?>">
                  </th>
                </tr>

                   <?php
                $uniform="uniform";
                $queryyy="SELECT * FROM tbl_fee WHERE fee_name='$uniform'";
                $rowsss=mysqli_query($conn,$queryyy);
                $result3=mysqli_fetch_assoc($rowsss);
                ?>
                <tr>
                  <td>Uniforms</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo number_format($result3["fee_price"],2)?>
                  		<input type="hidden" name="uniforms" value="<?php echo number_format($result3["fee_price"],2)?>">
                  </td>
                </tr>
                    <?php
                $book="book";
                $queryyyy="SELECT * FROM tbl_fee WHERE fee_name='$book'";
                $rowssss=mysqli_query($conn,$queryyyy);
                $result4=mysqli_fetch_assoc($rowssss);
                ?>
                <tr>
                  <td>Books</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo number_format($result4["fee_price"],2)?>
                  		<input type="hidden" name="books" value="<?php echo number_format($result4["fee_price"],2)?>">
                  </td>
                </tr>
               

                 <tr>
                  <th>Total Other School Fees</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th name="total_other_fee"><?php echo number_format($result2['fee_price']+$result3['fee_price']+$result4['fee_price'],2);?></th>
                </tr>
              </table>
            </div>

            <div class="col-lg-2"></div>
              <div class="col-lg-5">
                <table style="border-spacing: 5px;border-collapse: separate;">
               <tr>
                  <th>TOTAL TUITION & FEES</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td name="total_tuition"><?php echo number_format($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$calc,2)?></td>
                </tr>
                <tr>
                  <th>Books&Uniforms</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td name="books_uniforms"><?php echo number_format($result3['fee_price']+$result4['fee_price'],2); ?></td>
                </tr>

                   <tr>
                  <th>GRAND TOTAL</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php echo $grand_total=number_format($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$result3['fee_price']+$result4['fee_price']+$calc,2)?>
                  		<input type="hidden" name="grand_total" value="<?php echo number_format($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$result3['fee_price']+$result4['fee_price']+$calc,2)?>">
                  </th>
                </tr>


               <tr>
                  <th>Mode of Payment</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo $_POST['mode_payment'];?>

                  	
                  	<input type="hidden" name="mode_payment" value="<?php echo $_POST['mode_payment']?>
                  	">
                  </td>
                </tr>

                   <tr>
                  <th>TOTAL AMMOUNT DUE</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php echo number_format($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$result3['fee_price']+$result4['fee_price']+$calc,2)?></th>
                </tr>


                 <tr>
                  <td>1st Periodic exam</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php  $total=($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$result3['fee_price']+$result4['fee_price']+$calc)/3;
                  	echo  number_format($total,2);
                  ?></th>
                </tr>

                  

                   <tr>
                  <td>2nd Periodic exam</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php  $total=($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$result3['fee_price']+$result4['fee_price']+$calc)/3;
                  	echo  number_format($total,2);
                  ?></th>
                </tr>
                
                   <tr>
                  <td>3rd Periodic exam</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php  $total=($result['fee_price']+$result1['fee_price']+$result2['fee_price']+$result3['fee_price']+$result4['fee_price']+$calc)/3;
                  	echo  number_format($total,2);
                  ?>
                  	
                  </th>
                </tr>
                
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>:</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <th><?php  echo $grand_total;
                  ?>
                  	
                  </th>
                </tr>
                

               
              </table>
             

            
          
	</div>
</div>
<div class="row">
	<div class="col-lg-5"></div>
	<div class="col-lg-5"></div>
	<div class="col-lg-2"><button type="submit" class="btn btn-primary" name="print_sched">Print</button>
		<button type="submit" class="btn btn-warning" name="cancel">Cancel</button></div>
</div>

</form>
</div>

</body>
</html>

