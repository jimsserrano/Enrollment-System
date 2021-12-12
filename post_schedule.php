<?php
include 'admin/includes/server.php';
if (isset($_POST["btnconfirm"])) {
  $name=$_POST["name"];
  $year_level=$_POST["year_level"];
  $academic=$_POST["academic"];
  $semester=$_POST["semester"];
  $course=$_POST["course"];
 $mode_payment=$_POST["mode_payment"];
 $admission_id=$_POST["admission_id"];
  $subject_code1=$_POST["subject_code1"];
  $subject_code2=$_POST["subject_code2"];
  $subject_code3=$_POST["subject_code3"];
  $subject_code4=$_POST["subject_code4"];
  $subject_code5=$_POST["subject_code5"];
  $subject_code6=$_POST["subject_code6"];
  $subject_code7=$_POST["subject_code7"];
  $subject_code8=$_POST["subject_code8"];
  $subject_code9=$_POST["subject_code9"];
  $subject_code10=$_POST["subject_code10"];

  $subject_desc1=$_POST["subject_desc1"];
  $subject_desc2=$_POST["subject_desc2"];
  $subject_desc3=$_POST["subject_desc3"];
  $subject_desc4=$_POST["subject_desc4"];
  $subject_desc5=$_POST["subject_desc5"];
  $subject_desc6=$_POST["subject_desc6"];
  $subject_desc7=$_POST["subject_desc7"];
  $subject_desc8=$_POST["subject_desc8"];
  $subject_desc9=$_POST["subject_desc9"];
  $subject_desc10=$_POST["subject_desc10"];

  $unit1=$_POST["unit1"];
  $unit2=$_POST["unit2"];
  $unit3=$_POST["unit3"];
  $unit4=$_POST["unit4"];
  $unit5=$_POST["unit5"];
  $unit6=$_POST["unit6"];
  $unit7=$_POST["unit7"];
  $unit8=$_POST["unit8"];
  $unit9=$_POST["unit9"];
  $unit10=$_POST["unit10"];

  $day1=$_POST["day1"];
  $day2=$_POST["day2"];
  $day3=$_POST["day3"];
  $day4=$_POST["day4"];
  $day5=$_POST["day5"];
  $day6=$_POST["day6"];
  $day7=$_POST["day7"];
  $day8=$_POST["day8"];
  $day9=$_POST["day9"];
  $day10=$_POST["day10"];

  $room1=$_POST["room1"];
  $room2=$_POST["room2"];
  $room3=$_POST["room3"];
  $room4=$_POST["room4"];
  $room5=$_POST["room5"];
  $room6=$_POST["room6"];
  $room7=$_POST["room7"];
  $room8=$_POST["room8"];
  $room9=$_POST["room9"];
  $room10=$_POST["room10"];

  $time1=$_POST["time1"];
  $time2=$_POST["time2"];
  $time3=$_POST["time3"];
  $time4=$_POST["time4"];
  $time5=$_POST["time5"];
  $time6=$_POST["time6"];
  $time7=$_POST["time7"];
  $time8=$_POST["time8"];
  $time9=$_POST["time9"];
  $time10=$_POST["time10"];

  $section1=$_POST["section1"];
  $section2=$_POST["section2"];
  $section3=$_POST["section3"];
  $section4=$_POST["section4"];
  $section5=$_POST["section5"];
  $section6=$_POST["section6"];
  $section7=$_POST["section7"];
  $section8=$_POST["section8"];
  $section9=$_POST["section9"];
  $section10=$_POST["section10"];

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