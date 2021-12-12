<?php
include 'admin/includes/server.php';

if (isset($_POST['cancel'])) {

	header("Location:schedule.php");
}
if (isset($_POST['print_sched'])) {
	$name=mysqli_real_escape_string($conn,$_POST["name"]);
  $year_level=mysqli_real_escape_string($conn,$_POST["year_level"]);
  $academic=mysqli_real_escape_string($conn,$_POST["academic"]);
  $semester=mysqli_real_escape_string($conn,$_POST["semester"]);
  $course=mysqli_real_escape_string($conn,$_POST["course"]);
  $mode_payment=mysqli_real_escape_string($conn,$_POST["mode_payment"]);
$admission_id=mysqli_real_escape_string($conn,$_POST["admission_id"]);
  $tuition=mysqli_real_escape_string($conn,$_POST["tuition_fee"]);
  $computer_laboratory=mysqli_real_escape_string($conn,$_POST["computer_laboratory"]);
  $miscellaneous=mysqli_real_escape_string($conn,$_POST["total_miscellaneous_fee"]);
  $other_fee=mysqli_real_escape_string($conn,$_POST["other_fee"]);
  $uniforms=mysqli_real_escape_string($conn,$_POST["uniforms"]);
  $books=mysqli_real_escape_string($conn,$_POST["books"]);
  $grand_total=mysqli_real_escape_string($conn,$_POST["grand_total"]);
 
  $subject_code1=mysqli_real_escape_string($conn,$_POST["subject_code1"]);
  $subject_code2=mysqli_real_escape_string($conn,$_POST["subject_code2"]);
  $subject_code3=mysqli_real_escape_string($conn,$_POST["subject_code3"]);
  $subject_code4=mysqli_real_escape_string($conn,$_POST["subject_code4"]);
  $subject_code5=mysqli_real_escape_string($conn,$_POST["subject_code5"]);
  $subject_code6=mysqli_real_escape_string($conn,$_POST["subject_code6"]);
  $subject_code7=mysqli_real_escape_string($conn,$_POST["subject_code7"]);
  $subject_code8=mysqli_real_escape_string($conn,$_POST["subject_code8"]);
  $subject_code9=mysqli_real_escape_string($conn,$_POST["subject_code9"]);
  $subject_code10=mysqli_real_escape_string($conn,$_POST["subject_code10"]);

  $subject_desc1=mysqli_real_escape_string($conn,$_POST["subject_desc1"]);
  $subject_desc2=mysqli_real_escape_string($conn,$_POST["subject_desc2"]);
  $subject_desc3=mysqli_real_escape_string($conn,$_POST["subject_desc3"]);
  $subject_desc4=mysqli_real_escape_string($conn,$_POST["subject_desc4"]);
  $subject_desc5=mysqli_real_escape_string($conn,$_POST["subject_desc5"]);
  $subject_desc6=mysqli_real_escape_string($conn,$_POST["subject_desc6"]);
  $subject_desc7=mysqli_real_escape_string($conn,$_POST["subject_desc7"]);
  $subject_desc8=mysqli_real_escape_string($conn,$_POST["subject_desc8"]);
  $subject_desc9=mysqli_real_escape_string($conn,$_POST["subject_desc9"]);
  $subject_desc10=mysqli_real_escape_string($conn,$_POST["subject_desc10"]);

  $unit1=mysqli_real_escape_string($conn,$_POST["unit1"]);
  $unit2=mysqli_real_escape_string($conn,$_POST["unit2"]);
  $unit3=mysqli_real_escape_string($conn,$_POST["unit3"]);
  $unit4=mysqli_real_escape_string($conn,$_POST["unit4"]);
  $unit5=mysqli_real_escape_string($conn,$_POST["unit5"]);
  $unit6=mysqli_real_escape_string($conn,$_POST["unit6"]);
  $unit7=mysqli_real_escape_string($conn,$_POST["unit7"]);
  $unit8=mysqli_real_escape_string($conn,$_POST["unit8"]);
  $unit9=mysqli_real_escape_string($conn,$_POST["unit9"]);
  $unit10=mysqli_real_escape_string($conn,$_POST["unit10"]);

  $day1=mysqli_real_escape_string($conn,$_POST["day1"]);
  $day2=mysqli_real_escape_string($conn,$_POST["day2"]);
  $day3=mysqli_real_escape_string($conn,$_POST["day3"]);
  $day4=mysqli_real_escape_string($conn,$_POST["day4"]);
  $day5=mysqli_real_escape_string($conn,$_POST["day5"]);
  $day6=mysqli_real_escape_string($conn,$_POST["day6"]);
  $day7=mysqli_real_escape_string($conn,$_POST["day7"]);
  $day8=mysqli_real_escape_string($conn,$_POST["day8"]);
  $day9=mysqli_real_escape_string($conn,$_POST["day9"]);
  $day10=mysqli_real_escape_string($conn,$_POST["day10"]);

  $room1=mysqli_real_escape_string($conn,$_POST["room1"]);
  $room2=mysqli_real_escape_string($conn,$_POST["room2"]);
  $room3=mysqli_real_escape_string($conn,$_POST["room3"]);
  $room4=mysqli_real_escape_string($conn,$_POST["room4"]);
  $room5=mysqli_real_escape_string($conn,$_POST["room5"]);
  $room6=mysqli_real_escape_string($conn,$_POST["room6"]);
  $room7=mysqli_real_escape_string($conn,$_POST["room7"]);
  $room8=mysqli_real_escape_string($conn,$_POST["room8"]);
  $room9=mysqli_real_escape_string($conn,$_POST["room9"]);
  $room10=mysqli_real_escape_string($conn,$_POST["room10"]);

  $time1=mysqli_real_escape_string($conn,$_POST["time1"]);
  $time2=mysqli_real_escape_string($conn,$_POST["time2"]);
  $time3=mysqli_real_escape_string($conn,$_POST["time3"]);
  $time4=mysqli_real_escape_string($conn,$_POST["time4"]);
  $time5=mysqli_real_escape_string($conn,$_POST["time5"]);
  $time6=mysqli_real_escape_string($conn,$_POST["time6"]);
  $time7=mysqli_real_escape_string($conn,$_POST["time7"]);
  $time8=mysqli_real_escape_string($conn,$_POST["time8"]);
  $time9=mysqli_real_escape_string($conn,$_POST["time9"]);
  $time10=mysqli_real_escape_string($conn,$_POST["time10"]);

  $section1=mysqli_real_escape_string($conn,$_POST["section1"]);
  $section2=mysqli_real_escape_string($conn,$_POST["section2"]);
  $section3=mysqli_real_escape_string($conn,$_POST["section3"]);
  $section4=mysqli_real_escape_string($conn,$_POST["section4"]);
  $section5=mysqli_real_escape_string($conn,$_POST["section5"]);
  $section6=mysqli_real_escape_string($conn,$_POST["section6"]);
  $section7=mysqli_real_escape_string($conn,$_POST["section7"]);
  $section8=mysqli_real_escape_string($conn,$_POST["section8"]);
  $section9=mysqli_real_escape_string($conn,$_POST["section9"]);
  $section10=mysqli_real_escape_string($conn,$_POST["section10"]);

  $schedule="INSERT INTO tbl_schedule(admission_id,fullname,academic_year,year_level,semester, course, mode_payment,subject_code1, subject_code2, subject_code3, subject_code4, subject_code5, subject_code6, subject_code7, subject_code8, subject_code9, subject_code10, subject_desc1, subject_desc2, subject_desc3, subject_desc4, subject_desc5, subject_desc6, subject_desc7, subject_desc8, subject_desc9, subject_desc10, unit1, unit2, unit3, unit4, unit5, unit6, unit7, unit8, unit9, unit10, day1, day2, day3, day4, day5, day6, day7, day8, day9, day10,room1,room2,room3,room4,room5,room6,room7,room8,room9,room10, time1, time2, time3, time4, time5, time6, time7, time8, time9, time10, section1, section2, section3, section4,section5, section6, section7, section8, section9, section10, tuition, book, uniform, computer_laboratory, miscellaneous, other_fee, total_tuition) 
  VALUES ('$admission_id','$name', '$academic', '$year_level', '$semester', '$course', '$mode_payment', '$subject_code1', '$subject_code2', '$subject_code3', '$subject_code4', '$subject_code5', '$subject_code6', '$subject_code7', '$subject_code8', '$subject_code9', '$subject_code10', '$subject_desc1', '$subject_desc2', '$subject_desc3', '$subject_desc4', '$subject_desc5', '$subject_desc6', '$subject_desc7', '$subject_desc8', '$subject_desc9', '$subject_desc10', '$unit1', '$unit2', '$unit3', '$unit4', '$unit5', '$unit6', '$unit7', '$unit8', '$unit9', '$unit10', '$day1', '$day2', '$day3', '$day4', '$day5', '$day6', '$day7', '$day8', '$day9', '$day10','$room1','$room2','$room3','$room4','$room5','$room6','$room7','$room8','$room9','$room10', '$time1', '$time2', '$time3', '$time4', '$time5', '$time6', '$time7', '$time8', '$time9', '$time10', '$section1', '$section2', '$section3', '$section4', '$section5', '$section6', '$section7', '$section8', '$section9', '$section10', '$tuition', '$books', '$uniforms', '$computer_laboratory', '$miscellaneous', '$other_fee', '$grand_total')";

mysqli_query($conn,$schedule);


}

if (isset($_POST['print_sched'])) {
  $name=mysqli_real_escape_string($conn,$_POST["name"]);
  $year_level=mysqli_real_escape_string($conn,$_POST["year_level"]);
  $academic=mysqli_real_escape_string($conn,$_POST["academic"]);
  $semester=mysqli_real_escape_string($conn,$_POST["semester"]);
  $course=mysqli_real_escape_string($conn,$_POST["course"]);
 $mode_payment=mysqli_real_escape_string($conn,$_POST["mode_payment"]);

 $tuition=mysqli_real_escape_string($conn,$_POST["tuition_fee"]);
  $computer_laboratory=mysqli_real_escape_string($conn,$_POST["computer_laboratory"]);
  $miscellaneous=mysqli_real_escape_string($conn,$_POST["total_miscellaneous_fee"]);
  $other_fee=mysqli_real_escape_string($conn,$_POST["other_fee"]);
  $uniforms=mysqli_real_escape_string($conn,$_POST["uniforms"]);
  $books=mysqli_real_escape_string($conn,$_POST["books"]);
  $grand_total=mysqli_real_escape_string($conn,$_POST["grand_total"]);
 
  $subject_code1=mysqli_real_escape_string($conn,$_POST["subject_code1"]);
  $subject_code2=mysqli_real_escape_string($conn,$_POST["subject_code2"]);
  $subject_code3=mysqli_real_escape_string($conn,$_POST["subject_code3"]);
  $subject_code4=mysqli_real_escape_string($conn,$_POST["subject_code4"]);
  $subject_code5=mysqli_real_escape_string($conn,$_POST["subject_code5"]);
  $subject_code6=mysqli_real_escape_string($conn,$_POST["subject_code6"]);
  $subject_code7=mysqli_real_escape_string($conn,$_POST["subject_code7"]);
  $subject_code8=mysqli_real_escape_string($conn,$_POST["subject_code8"]);
  $subject_code9=mysqli_real_escape_string($conn,$_POST["subject_code9"]);
  $subject_code10=mysqli_real_escape_string($conn,$_POST["subject_code10"]);

  $subject_desc1=mysqli_real_escape_string($conn,$_POST["subject_desc1"]);
  $subject_desc2=mysqli_real_escape_string($conn,$_POST["subject_desc2"]);
  $subject_desc3=mysqli_real_escape_string($conn,$_POST["subject_desc3"]);
  $subject_desc4=mysqli_real_escape_string($conn,$_POST["subject_desc4"]);
  $subject_desc5=mysqli_real_escape_string($conn,$_POST["subject_desc5"]);
  $subject_desc6=mysqli_real_escape_string($conn,$_POST["subject_desc6"]);
  $subject_desc7=mysqli_real_escape_string($conn,$_POST["subject_desc7"]);
  $subject_desc8=mysqli_real_escape_string($conn,$_POST["subject_desc8"]);
  $subject_desc9=mysqli_real_escape_string($conn,$_POST["subject_desc9"]);
  $subject_desc10=mysqli_real_escape_string($conn,$_POST["subject_desc10"]);

  $unit1=mysqli_real_escape_string($conn,$_POST["unit1"]);
  $unit2=mysqli_real_escape_string($conn,$_POST["unit2"]);
  $unit3=mysqli_real_escape_string($conn,$_POST["unit3"]);
  $unit4=mysqli_real_escape_string($conn,$_POST["unit4"]);
  $unit5=mysqli_real_escape_string($conn,$_POST["unit5"]);
  $unit6=mysqli_real_escape_string($conn,$_POST["unit6"]);
  $unit7=mysqli_real_escape_string($conn,$_POST["unit7"]);
  $unit8=mysqli_real_escape_string($conn,$_POST["unit8"]);
  $unit9=mysqli_real_escape_string($conn,$_POST["unit9"]);
  $unit10=mysqli_real_escape_string($conn,$_POST["unit10"]);

  $day1=mysqli_real_escape_string($conn,$_POST["day1"]);
  $day2=mysqli_real_escape_string($conn,$_POST["day2"]);
  $day3=mysqli_real_escape_string($conn,$_POST["day3"]);
  $day4=mysqli_real_escape_string($conn,$_POST["day4"]);
  $day5=mysqli_real_escape_string($conn,$_POST["day5"]);
  $day6=mysqli_real_escape_string($conn,$_POST["day6"]);
  $day7=mysqli_real_escape_string($conn,$_POST["day7"]);
  $day8=mysqli_real_escape_string($conn,$_POST["day8"]);
  $day9=mysqli_real_escape_string($conn,$_POST["day9"]);
  $day10=mysqli_real_escape_string($conn,$_POST["day10"]);

  $room1=mysqli_real_escape_string($conn,$_POST["room1"]);
  $room2=mysqli_real_escape_string($conn,$_POST["room2"]);
  $room3=mysqli_real_escape_string($conn,$_POST["room3"]);
  $room4=mysqli_real_escape_string($conn,$_POST["room4"]);
  $room5=mysqli_real_escape_string($conn,$_POST["room5"]);
  $room6=mysqli_real_escape_string($conn,$_POST["room6"]);
  $room7=mysqli_real_escape_string($conn,$_POST["room7"]);
  $room8=mysqli_real_escape_string($conn,$_POST["room8"]);
  $room9=mysqli_real_escape_string($conn,$_POST["room9"]);
  $room10=mysqli_real_escape_string($conn,$_POST["room10"]);

  $time1=mysqli_real_escape_string($conn,$_POST["time1"]);
  $time2=mysqli_real_escape_string($conn,$_POST["time2"]);
  $time3=mysqli_real_escape_string($conn,$_POST["time3"]);
  $time4=mysqli_real_escape_string($conn,$_POST["time4"]);
  $time5=mysqli_real_escape_string($conn,$_POST["time5"]);
  $time6=mysqli_real_escape_string($conn,$_POST["time6"]);
  $time7=mysqli_real_escape_string($conn,$_POST["time7"]);
  $time8=mysqli_real_escape_string($conn,$_POST["time8"]);
  $time9=mysqli_real_escape_string($conn,$_POST["time9"]);
  $time10=mysqli_real_escape_string($conn,$_POST["time10"]);

  $section1=mysqli_real_escape_string($conn,$_POST["section1"]);
  $section2=mysqli_real_escape_string($conn,$_POST["section2"]);
  $section3=mysqli_real_escape_string($conn,$_POST["section3"]);
  $section4=mysqli_real_escape_string($conn,$_POST["section4"]);
  $section5=mysqli_real_escape_string($conn,$_POST["section5"]);
  $section6=mysqli_real_escape_string($conn,$_POST["section6"]);
  $section7=mysqli_real_escape_string($conn,$_POST["section7"]);
  $section8=mysqli_real_escape_string($conn,$_POST["section8"]);
  $section9=mysqli_real_escape_string($conn,$_POST["section9"]);
  $section10=mysqli_real_escape_string($conn,$_POST["section10"]);

$b= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit1'");
if (mysqli_num_rows($b)==1) {
  while ($row = mysqli_fetch_assoc($b)) {
  $result= $row['fee_price']; 

  }
}
else
{
  $result="0";

}




$c= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit2'");
if (mysqli_num_rows($c)==1) {
  while ($row = mysqli_fetch_assoc($c)) {
  $result1= $row['fee_price']; 


  }
}
else
{
  $result1="0";

}

$d= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit3'");
if (mysqli_num_rows($d)==1) {
  while ($row = mysqli_fetch_assoc($d)) {
  $result2= $row['fee_price']; 


  }
}
else
{
  $result2="0";


}

$e= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit4'");
if (mysqli_num_rows($e)==1) {
  while ($row = mysqli_fetch_assoc($e)) {
  $result3= $row['fee_price']; 


  }
}
else
{
  $result3="0";

}

$f= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit5'");
if (mysqli_num_rows($f)==1) {
  while ($row = mysqli_fetch_assoc($f)) {
  $result4= $row['fee_price']; 


  }
}
else
{
  $result4="0";


}

$g= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit6'");
if (mysqli_num_rows($g)==1) {
  while ($row = mysqli_fetch_assoc($g)) {
  $result5= $row['fee_price']; 


  }
}
else
{
  $result5="0";
}

$h= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit7'");
if (mysqli_num_rows($h)==1) {
  while ($row = mysqli_fetch_assoc($h)) {
  $result6= $row['fee_price']; 


  }
}
else
{
  $result6="0";
 

}
$i= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit8'");
if (mysqli_num_rows($i)==1) {
  while ($row = mysqli_fetch_assoc($i)) {
  $result7= $row['fee_price']; 


  }
}
else
{
  $result7="0";
  

}
$j= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit9'");
if (mysqli_num_rows($j)==1) {
  while ($row = mysqli_fetch_assoc($j)) {
  $result8= $row['fee_price']; 


  }
}
else
{
  $result8="0";
  
}
$k= mysqli_query($conn,"SELECT * FROM tbl_fee WHERE LEFT(fee_name, 1) = '$unit10'");
if (mysqli_num_rows($k)==1) {
  while ($row = mysqli_fetch_assoc($k)) {
  $result9= $row['fee_price']; 

  }
}
else
{
  $result9="0";
  

}

$calc=$result+$result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9;







}
 
  

 

?>