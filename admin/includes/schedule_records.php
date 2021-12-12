<?php 
include ('server.php');

   
  $data="SELECT * FROM tbl_admission INNER JOIN tbl_schedule ON tbl_admission.admission_id=tbl_schedule.admission_id WHERE id_schedule=".$_POST["userid"]."";

  $qry=mysqli_query($conn,$data) or die ("Could not execute Query.");
    while($data2=mysqli_fetch_assoc($qry)){

    	?>
    	<div class="row">
    	<div class="col-lg-8">
    	<table style="border-spacing: 3px;border-collapse: separate;">
    		<tr>
    			<td class="font-weight-bold" width="20%">Students Name</td>
    			<td>:</td>
    			<td><?php echo $data2['fullname']?></td>
    		</tr>
    		<tr>
    			<td class="font-weight-bold" width="20%">Course:</td>
    			<td>:</td>
    			<td><?php echo $data2['course']?></td>
    		</tr>
    		<tr>
    			<td class="font-weight-bold" width="20%">Academic Year:</td>
    			<td>:</td>
    			<td><?php echo $data2['academic_year']?></td>
    		</tr>
    	</table>	
    	</div>
    	<div class="col-lg-4">
    		<table style="border-spacing: 3px;border-collapse: separate;">
    		<tr>
    			<td class="font-weight-bold" width="20%">Year Level:</td>
    			<td width="1%">:</td>
    			<td width="10%"><?php echo $data2['year_level']?></td>
    		</tr>
    		<tr>
    			<td class="font-weight-bold" width="20%">Semester:</td>
    			<td width="1%">:</td>
    			<td width="10%"><?php echo $data2['semester']?></td>
    		</tr>
    		<tr>
    			<td class="font-weight-bold" width="20%">Mode of Payment:</td>
    			<td width="1%">:</td>
    			<td width="10%"><?php echo $data2['mode_payment']?></td>
    		</tr>
    	</table>	
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
	<?php if (isset($data2['subject_code1'])) {
		echo $data2['subject_code1'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc1'])) {
		echo $data2['subject_desc1'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit1'])) {
		echo $data2['unit1'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time1'])) {
		echo $data2['time1'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day1'])) {
		echo $data2['day1'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room1'])) {
		echo $data2['room1'];
	} 
	else{echo ""; } ?>
	
		
	</td>


	<td style="border:1px solid black;">
	<?php if (isset($data2['section1'])) {
		echo $data2['section1'];
	} 
	else{echo ""; } ?>
	</tr>



<!--2ND ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code2'])) {
		echo $data2['subject_code2'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc2'])) {
		echo $data2['subject_desc2'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit2'])) {
		echo $data2['unit2'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time2'])) {
		echo $data2['time2'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day2'])) {
		echo $data2['day2'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room2'])) {
		echo $data2['room2'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section2'])) {
		echo $data2['section2'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--3RD ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code3'])) {
		echo $data2['subject_code3'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc3'])) {
		echo $data2['subject_desc3'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit3'])) {
		echo $data2['unit3'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time3'])) {
		echo $data2['time3'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day3'])) {
		echo $data2['day3'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room3'])) {
		echo $data2['room3'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section3'])) {
		echo $data2['section3'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--4TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code4'])) {
		echo $data2['subject_code4'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc4'])) {
		echo $data2['subject_desc4'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit4'])) {
		echo $data2['unit4'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time4'])) {
		echo $data2['time4'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day4'])) {
		echo $data2['day4'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room4'])) {
		echo $data2['room4'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section4'])) {
		echo $data2['section4'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--5TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code5'])) {
		echo $data2['subject_code5'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc5'])) {
		echo $data2['subject_desc5'];
	} 
	else{echo ""; } ?>
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit5'])) {
		echo $data2['unit5'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time5'])) {
		echo $data2['time5'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day5'])) {
		echo $data2['day5'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room5'])) {
		echo $data2['room5'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section5'])) {
		echo $data2['section5'];
	} 
	else{echo ""; } ?>
	</tr>

	<!--6TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code6'])) {
		echo $data2['subject_code6'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc6'])) {
		echo $data2['subject_desc6'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit6'])) {
		echo $data2['unit6'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time6'])) {
		echo $data2['time6'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day6'])) {
		echo $data2['day6'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room6'])) {
		echo $data2['room6'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section6'])) {
		echo $data2['section6'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--7TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code7'])) {
		echo $data2['subject_code7'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc7'])) {
		echo $data2['subject_desc7'];
	} 
	else{echo ""; } ?>
	
		

	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit7'])) {
		echo $data2['unit7'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time7'])) {
		echo $data2['time7'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day7'])) {
		echo $data2['day7'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room7'])) {
		echo $data2['room7'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section7'])) {
		echo $data2['section7'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--8TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code8'])) {
		echo $data2['subject_code8'];
	} 
	else{echo ""; } ?>
	
		
	
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc8'])) {
		echo $data2['subject_desc8'];
	} 
	else{echo ""; } ?>
	
		
	
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit8'])) {
		echo $data2['unit8'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time8'])) {
		echo $data2['time8'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day8'])) {
		echo $data2['day8'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room8'])) {
		echo $data2['room8'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section8'])) {
		echo $data2['section8'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--9TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code9'])) {
		echo $data2['subject_code9'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc9'])) {
		echo $data2['subject_desc9'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit9'])) {
		echo $data2['unit9'];
	} 
	else{echo ""; } ?>
	
		
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time9'])) {
		echo $data2['time9'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day9'])) {
		echo $data2['day9'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room9'])) {
		echo $data2['room9'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section9'])) {
		echo $data2['section9'];
	} 
	else{echo ""; } ?>
	</tr>


	<!--10TH ROW-->
	<tr style="text-align: center;">
		<td style="border:1px solid black;">
	<?php if (isset($data2['subject_code10'])) {
		echo $data2['subject_code10'];
	} 
	else{echo ""; } ?>
	
		
	</td>
	<td style="border:1px solid black;">
	<?php if (isset($data2['subject_desc10'])) {
		echo $data2['subject_desc10'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;" >
	<?php if (isset($data2['unit10'])) {
		echo $data2['unit10'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['time10'])) {
		echo $data2['time10'];
	} 
	else{echo ""; } ?>
	
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['day10'])) {
		echo $data2['day10'];
	} 
	else{echo ""; } ?>
	
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['room10'])) {
		echo $data2['room10'];
	} 
	else{echo ""; } ?>
		
	</td>

	<td style="border:1px solid black;">
	<?php if (isset($data2['section10'])) {
		echo $data2['section10'];
	} 
	else{echo ""; } ?>
		</tr>

 
</table>
    	</div>
    	

<?php } ?>