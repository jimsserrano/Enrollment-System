<?php include('includes/retrieve_edit.php');?>
  <!--Fetch modal and Update-->





<div class="modal fade" id="view_student<?php echo $data2['or_number']?>"  tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modallabel">Student's Information</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body m-1">

        <form method="POST" >
        
         <div class="row">
          <div class="col-lg-9">
          <h5>Student's Data</h5>
          </div>
        </div>
        <hr>
        
        <div class="row"> 
          
          <div class="col-lg-4">

            <label class="font-weight-bold">Academic Year:</label><input type="text" name="academic" class="form-control mb-2 text-capitalize" value="<?php echo  $data2['academic'];?>"  id="acad">
          </div>
          <div class="col-lg-4">
            <label class="font-weight-bold">Or Number:</label><input type="text" name="or_number" value="<?php echo  $data2['or_number'];?>" class="form-control mb-2"  id="or" readonly>
          </div>
          <div class="col-lg-4">
            <label class="font-weight-bold">Year Level:</label><input type="text" name="year" value="<?php echo  $data2['year'];?>" class="form-control mb-2 text-capitalize"  id="year">
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4">
            <label class="font-weight-bold">firstname:</label><input type="text" name="firstname" value="<?php echo  $data2['firstname']?>"  class="form-control mb-2 text-capitalize" id="firstname">
          </div>

          <div class="col-lg-4">
              <label class="font-weight-bold">Lastname:</label>
              <input type="text" name="lastname" value="<?php echo  $data2['lastname']?>"  class="form-control mb-2 text-capitalize" id="lastname">
          </div>
          <div class="col-lg-4">
              <label class="font-weight-bold">Middle Initial:</label>
              <input type="text" name="middle" value="<?php echo $data2['middle'];?>"  class="form-control mb-2 text-capitalize" id="middle">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <label class="font-weight-bold">Semester</label>
            <select name="semester" class="form-control">
              <option value="1st semester" <?php if ($data2['semester']=='1st semester') {
                echo "selected='selected'";
              }?>>1st Semester</option>
              <option value="2nd semester" <?php if ($data2['semester']=='2nd semester') {
                echo "selected='selected'";
              }?>>2nd Semester</option>
            </select>
            
          </div>
        </div>
        <br><hr>
        

        <button type="submit" class="btn btn-success" name="save_register">Save Changes</button>
          
       </form>
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        
      </div>
       
    </div>      
    </div>

    
  </div> 






<div class="modal fade" id="view_students<?php echo $data2['admission_id']?>" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="modallabel">Student's Information</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body m-1">

        <form method="POST" action="<?php include('includes/retrieve_edit.php');?>">
        
         <div class="row">
          <div class="col-lg-9">
          <h5>Personal Data</h5>
          </div>
          <div class="col-lg-3">
          <h6>Admission No:<input type="text" name="admission_id"  value="<?php echo $data2['admission_id']?>" readonly></h6>
          </div>
        </div>
        <hr>
       
        <div class="row"> 
          
          <div class="col-lg-4">

            <label class="font-weight-bold">Academic Year:</label><input type="text" name="academic" class="form-control mb-2 text-capitalize" value="<?php echo  $data2['academic_year'];?>"  id="acad">
          </div>
          <div class="col-lg-4">
            <label class="font-weight-bold">Or Number:</label><input type="text" name="or_number" value="<?php echo  $data2['or_number'];?>" class="form-control mb-2"  id="or">
          </div>
          <div class="col-lg-4">
            <label class="font-weight-bold">Year Level:</label><input type="text" name="year" value="<?php echo  $data2['year_level'];?>" class="form-control mb-2 text-capitalize"  id="year">
          </div>
        </div>


        <div class="row">
          <div class="col-lg-4">
            <label class="font-weight-bold">firstname:</label><input type="text" name="firstname" value="<?php echo  $data2['firstname']?>"  class="form-control mb-2 text-capitalize" id="firstname">
          </div>

          <div class="col-lg-4">
              <label class="font-weight-bold">Lastname:</label>
              <input type="text" name="lastname" value="<?php echo  $data2['lastname']?>"  class="form-control mb-2 text-capitalize" id="lastname">
          </div>
          <div class="col-lg-4">
              <label class="font-weight-bold">Middle Initial:</label>
              <input type="text" name="middle" value="<?php echo $data2['middle'];?>"  class="form-control mb-2 text-capitalize" id="middle">
          </div>
        </div>
        <br><hr>
        <div class="row">
          <div class="col-lg-6">
            <label class="font-weight-bold">House#</label>
            <input type="text" name="house" class="form-control mb-2"  id="house" value="<?php echo $data2['stud_houseNo'];?>">

            <label class="font-weight-bold">Barangay</label>
            <input type="text" name="barangay" class="form-control mb-2"  id="barangay" value="<?php echo $data2['stud_barangay'];?>">

            <label class="font-weight-bold">Province</label>
            <input type="text" name="province" class="form-control mb-2"  id="province" value="<?php echo
             $data2['stud_province'];?>">
          </div>

          <div class="col-lg-6">
            <label class="font-weight-bold">Street</label>
            <input type="text" name="street" class="form-control mb-2"  id="street" value="<?php echo $data2['stud_street'];?>">

            <label class="font-weight-bold">Municipality</label>
            <input type="text" name="municipality" class="form-control mb-2"  id="municipality" value="<?php echo $data2['stud_municipality'];?>">

            <label class="font-weight-bold">Zipcode</label>
            <input type="text" name="zipcode" class="form-control mb-2"  id="zipcode" value="<?php echo $data2['stud_zipcode'];?>">
          </div>
         </div>
         <br><hr>
        <div class="row">
            
          <div class="col-lg-4">
            <label class="font-weight-bold">Contact:</label><input type="text" name="contact" value="<?php echo  $data2['stud_contact'];?>" class="form-control mb-2 text-capitalize"  id="contact">

            <label class="font-weight-bold">Place of Birth:</label><input type="text" name="pob" value="<?php echo  $data2['stud_pob'];?>" class="form-control mb-2 text-capitalize"  id="pob">
            
          </div>
          <div class="col-lg-4">
           <label class="font-weight-bold">Email:</label><input type="text" name="email" value="<?php echo  $data2['stud_email'];?>" class="form-control mb-2 text-capitalize"  id="email"> 

           <label class="font-weight-bold">Date of Birth:</label><input type="text" name="dob" value="<?php echo  $data2['stud_dob'];?>" class="form-control mb-2 text-capitalize"  id="dob">

            
          </div>
          
          <div class="col-lg-4">

            <label class="font-weight-bold">Religion:</label><input type="text" name="religion" value="<?php echo  $data2['stud_religion'];?>" class="form-control mb-2 text-capitalize"  id="religion">

            <label class="font-weight-bold">Gender:</label><input type="text" name="gender" value="<?php echo  $data2['stud_gender'];?>" class="form-control mb-2 text-capitalize"  id="gender">
          </div>
        </div>


        


        <div class="row">
          
          <div class="col-lg-4">
           <label class="font-weight-bold">Citizenship:</label><input type="text" name="citizenship" value="<?php echo $data2['stud_citizenship'];?>" class="form-control mb-2 text-capitalize"  id="citizenship">
          </div>
        </div>
       <br> <hr>
        <h4>Parent'Information</h4>
        <hr>
        <div class="row">
          <div class="col-lg-6">
            <label class="font-weight-bold">Mother's Name:</label> 
            <input type="text" name="mth_name" value="<?php echo $data2['mth_name']?>" class="form-control mb-2 text-capitalize"  id="mth_name">

            <label class="font-weight-bold">Address:</label> 
            <input type="text" name="mth_address" value="<?php echo $data2['mth_address']?>" class="form-control mb-2 text-capitalize"  id="mth_address">

            <label class="font-weight-bold">Occupation:</label> 
            <input type="text" name="mth_occupation" value="<?php echo $data2['mth_occupation']?>" class="form-control mb-2 text-capitalize"  id="mth_occupation" >

            <label class="font-weight-bold">Contact Number:</label> 
            <input type="text" name="mth_no" value="<?php echo $data2['mth_no']?>" class="form-control mb-2 text-capitalize"  id="mth_no">
          </div>

          <div class="col-lg-6">
            <label class="font-weight-bold">Father's Name:</label> 
            <input type="text" name="fth_name" value="<?php echo $data2['fth_name']?>" class="form-control mb-2 text-capitalize"  id="fth_name">

            <label class="font-weight-bold">Address:</label> 
            <input type="text" name="fth_address" value="<?php echo $data2['fth_address']?>" class="form-control mb-2 text-capitalize"  id="fth_address">

            <label class="font-weight-bold">Occupation:</label> 
            <input type="text" name="fth_occupation" value="<?php echo $data2['fth_occupation']?>" class="form-control mb-2 text-capitalize"  id="fth_occupation">

            <label class="font-weight-bold">Contact Number:</label> 
            <input type="text" name="fth_no" value="<?php echo $data2['fth_no']?>" class="form-control mb-2 text-capitalize"  id="fth_no">
          </div>
        </div>


         <br><hr>
        <h4>Educational Background</h4>
        <hr>
        <div class="row">
          <div class="col-lg-6">
            <h5>Primary Education</h5>
            <label class="font-weight-bold">School Name:</label> 
            <input type="text" name="primary_Sname" value="<?php echo $data2['primary_Sname']?>" class="form-control mb-2 text-capitalize"  id="primary_Sname">

            <label class="font-weight-bold">Address:</label> 
            <input type="text" name="primary_Saddress" value="<?php echo $data2['primary_Saddress']?>" class="form-control mb-2 text-capitalize"  id="primary_Saddress">

            <label class="font-weight-bold">Occupation:</label> 
            <input type="text" name="primary_awards" value="<?php echo $data2['primary_awards']?>" class="form-control mb-2 text-capitalize"   id="primary_awards">
           </div>

          <div class="col-lg-6">
            <h5>Secondary Education</h5>
            <label class="font-weight-bold">School Name:</label> 
            <input type="text" name="secondary_Sname" value="<?php echo $data2['secondary_Sname']?>" class="form-control mb-2 text-capitalize"  id="secondary_Sname">

            <label class="font-weight-bold">Address:</label> 
            <input type="text" name="secondary_Saddress" value="<?php echo $data2['secondary_Saddress']?>" class="form-control mb-2 text-capitalize"  id="secondary_Saddress">
            <label class="font-weight-bold">Occupation:</label> 

            <input type="text" name="secondary_awards" value="<?php echo $data2['secondary_awards']?>" class="form-control mb-2 text-capitalize"  id="secondary_awards">
           
          </div>
        </div>

        <button type="submit" class="btn btn-success" name="save_admission">Save Changes</button>
          
       </form>
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        
      </div>
       
    </div>      
    </div>

    
  </div> 

  <!--Fetch modal and Update-->



  <!--MODAL FOR EDITTING COURSE-->
 
  <div class="modal fade" id="edit_subject<?php echo $subject['subject_id']?>" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Edit Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        

      
         <form class="form-group m-2" method="post" action="<?php include('includes/retrieve_edit.php');?>">  
                  <input type="hidden" name="subj_id" value="<?php echo $subject['subject_id']?>">
                  <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Course</h5></label>
                    </div>
                    <div class="col-lg-9">
                      <select name="course" class="form-control" >
                        
                <?php

                
                $sql="SELECT course_desc FROM tbl_course";
                $course=mysqli_query($conn,$sql);

                $sql2="SELECT * FROM tbl_room";
                $room=mysqli_query($conn,$sql2);
              
                        while($rows=mysqli_fetch_assoc($course)) {
                         $courses=$rows['course_desc'];
                         echo '<option value="'.$courses.'" '.(($courses==$subject['course'])?'selected="selected"':"").'>'.$courses.'</option>'; 
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
                      <input type="text" name="subj_code" class="form-control" value="<?php echo $subject['subject_code']?>">
                      </select> 
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2">
                      <label><h5>Units</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="units" class="form-control" value="<?php echo $subject['units']?>">
                    </div>
                  </div>


                  <br>
                  <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Subject Name</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="subj_name" class="form-control" value="<?php echo $subject['subject_desc']?>">
                      </select> 
                    </div>
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-2">
                      <label><h5>Section</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <input type="text" name="section" class="form-control" value="<?php echo $subject['section']?>">
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-lg-6">
                      <div class="row ml-1">
                   <div class="col-lg-1">

                     <label><h5>Days</h5></label>
                  </div> 
                  <?php 
                  $a=$subject['day'];
                  $b=explode("/", $a);
                  
                  ?>
                 
                 </div>

                 <div class="row ml-1">
                
                   <div class="col-lg-3 mr-5">
                      <input type="checkbox" class="form-check-input" name="day[]" value="M" <?php if(in_array("M",$b))
                      {
                        echo "checked";
                      }
                      ?> >
                      <label class="form-check-label">Monday</label>
                      

                  </div>
                  <div class="col-lg-2">
                      <input type="checkbox" class="form-check-input" name="day[]" value="T"    <?php if(in_array("T",$b))
                      {
                        echo "checked";
                      }
                      ?>>
                      <label class="form-check-label">Tuesday</label>
                    
                  </div>
                  
                   

                  </div>

                   <div class="row ml-1">
                   
                   <div class="col-lg-3 mr-5">
                      <input type="checkbox" class="form-check-input" name="day[]" value="W"   <?php if(in_array("W",$b))
                      {
                        echo "checked";
                      }
                      ?> >
                      <label class="form-check-label">Wednesday</label>
                     
                  </div>
                  <div class="col-lg-2">
                      <input type="checkbox" class="form-check-input" name="day[]" value="Th"  <?php if(in_array("Th",$b))
                      {
                        echo "checked";
                      }
                      ?> >
                      <label class="form-check-label">Thursday</label>
                      
                  </div>

                  <!--TIME SLOT-->
                  
                   
                  </div>

                   <div class="row ml-1">
                  
                   <div class="col-lg-2">
                      <input type="checkbox" class="form-check-input" name="day[]" value="F"  <?php if(in_array("F",$b))
                      {
                        echo "checked";
                      }
                      ?>>
                      <label class="form-check-label">Friday</label>
                     
                  </div>

                   
                 
                  </div>

                  <div class="row ml-1">
                    <div class="col-lg-4">
                    </div>
                    
                    
                  </div>
                    </div>
                  
                    <div class="col-lg-3">
                      <h5>Time</h5>
                      <label>From:</label>
                      <input type="text" name="time_from" class="form-control" value="<?php echo $subject['time_from']?>">
                      
                    </div>
                    <div class="col-lg-3" style="margin-top: 31px;" >
                      
                      <label>To:</label>
                      <input type="text" name="time_to" class="form-control" value="<?php echo $subject['time_to']?>">
                    </div>
                  </div>
                  <br>
                   <div class="row">
                    <div class="col-lg-3">
                      <label><h5>Room</h5></label>
                    </div>
                    <div class="col-lg-3">
                      <select name="room" class="form-control">
                         <?php while($rows=mysqli_fetch_assoc($room)) {
                         $rooms=$rows['room_desc'];
                         echo '<option value="'.$rooms.'" '.(($rooms==$subject['room'])?'selected="selected"':"").'>'.$rooms.'</option>'; 
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
                     <button class="btn btn-primary btn-block" type="submit" name="save_subj">Save</button>
                   </div>
                 </div> 
              </form>
        
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    
      
    </div>      
    </div>

    
  </div>


  <!--MODAL FOR EDITTING COURSE-->
 
  <div class="modal fade" id="edit_course<?php echo $data2['course_id']?>" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Edit Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        

         
        <form method="post" action="<?php include('includes/retrieve_edit.php');?>">
          <input type="hidden" name="course_id" value="<?php echo $data2['course_id']?>">
          <label>Course Code</label>
          <input type="text" name="course_code" class="form-control text-uppercase" value="<?php echo $data2['course_code']?>">
          <label>Course Description</label>
          <input type="text" name="course_desc" class="form-control" value="<?php echo $data2['course_desc']?>">
        <div class="row">
          <div class="col-lg-8"></div>
          <div class="col-lg-4"><button class="btn btn-primary btn-block" type="submit" name="save_course">save</button></div>
        </div>
      </form>
        
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    
      
    </div>      
    </div>

    
  </div>

  <!-- END OF MODAL FOR EDITTING COURSE-->
  <!--MODAL FOR EDITTING FEE-->
 
  <div class="modal fade" id="edit_fee<?php echo $data2['fee_id']?>" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Edit Fee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        

         
        <form method="post" action="<?php include('includes/retrieve_edit.php');?>">
          <input type="hidden" name="fee_id" value="<?php echo $data2['fee_id']?>">
          <label>Fee Name</label>
          <input type="text" name="fee_name" class="form-control text-capitalize" value="<?php echo $data2['fee_name']?>">
          <label>Fee Price</label>
          <input type="text" name="fee_price" class="form-control" value="<?php echo $data2['fee_price']?>">
        <div class="row">
          <div class="col-lg-8"></div>
          <div class="col-lg-4"><button class="btn btn-primary btn-block" type="submit" name="save_fee">save</button></div>
        </div>
      </form>
        
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    
      
    </div>      
    </div>

    
  </div>

  <!-- END OF MODAL FOR EDITTING FEE-->




<!--MODAL FOR EDITTING ROOM-->
 
  <div class="modal fade" id="edit_room<?php echo $room_fetch['room_id']?>" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Edit Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        

         
        <form method="post" action="<?php include('includes/retrieve_edit.php');?>">
          <input type="hidden" name="room_id" value="<?php echo $room_fetch['room_id']?>">
          <label>Room ID</label>
          <input type="text" name="room_number" class="form-control" value="<?php echo $room_fetch['room_number']?>">
          <label>Building Name</label>
          <input type="text" name="room_desc" class="form-control" value="<?php echo $room_fetch['room_desc']?>">
        <div class="row">
          <div class="col-lg-8"></div>
          <div class="col-lg-4"><button class="btn btn-primary btn-block" type="submit" name="save_room">save</button></div>
        </div>
      </form>
        
        
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    
      
    </div>      
    </div>

    
  </div>

  <!-- END OF MODAL FOR EDITTING ROOM-->


  <!--MODAL FOR DELETING SUBJECTS-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true" id="subject_delete<?php echo $subject['subject_id']?>">
        <div class="modal-dialog" style="width: 40%;">
          <div class="modal-content"> 
            <div class="modal-header">
             <h5 class="modal-title" id="modallabel">Delete Confirmation</h5>
           
      </div>
            <!-- BODY -->
            <div class="modal-body">
              <form method="post" name="subject_form">
                <label>Are you sure you want to delete this record?</label>
                <input type="hidden" name="list_subject" value="<?php echo $subject['subject_id']?>">
                <div class="form-group">
                  <input type="submit" name="delete_subject" value ="Delete" class="btn btn-danger" >  
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
            <!-- END OF BODY -->
          </div>
        </div>
      </div>
    
 <!--END OF SUBJECT DELETION-->
 
  <!--MODAL FOR DELETING FEE-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true" id="fee_delete<?php echo $data2['fee_id']?>">
        <div class="modal-dialog" style="width: 40%;">
          <div class="modal-content"> 
            <div class="modal-header">
             <h5 class="modal-title" id="modallabel">Delete Confirmation</h5>
           
      </div>
            <!-- BODY -->
            <div class="modal-body">
              <form method="post" name="student_form">
                <label>Are you sure you want to delete this record?</label>
                <input type="hidden" name="list_fee" value="<?php echo $data2['fee_id']?>">
                <div class="form-group">
                  <input type="submit" name="delete_fee" value ="Delete" class="btn btn-danger" >  
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
            <!-- END OF BODY -->
          </div>
        </div>
      </div>
    
 <!--END OF FEE DELETION-->



  <!--MODAL FOR DELETING STUDENTS(ENROLLLED)-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true" id="student_deletes<?php echo $data2['admission_id']?>">
        <div class="modal-dialog" style="width: 40%;">
          <div class="modal-content"> 
            <div class="modal-header">
             <h5 class="modal-title" id="modallabel">Delete Confirmation</h5>
           
      </div>
            <!-- BODY -->
            <div class="modal-body">
              <form method="post" name="student_form">
                <label>Are you sure you want to delete this record?</label>
                <input type="hidden" name="list_student" value="<?php echo $data2['admission_id']?>">
                <div class="form-group">
                  <input type="submit" name="delete_students" value ="Delete" class="btn btn-danger" >  
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
            <!-- END OF BODY -->
          </div>
        </div>
      </div>
    
 <!--END OF STUDENTS DELETION(ENROLLLED)-->



  <!--MODAL FOR DELETING STUDENTS(REGISTERED)-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true" id="student_delete<?php echo $data2['or_number']?>">
        <div class="modal-dialog" style="width: 40%;">
          <div class="modal-content"> 
            <div class="modal-header">
             <h5 class="modal-title" id="modallabel">Delete Confirmation</h5>
           
      </div>
            <!-- BODY -->
            <div class="modal-body">
              <form method="post" name="student_form">
                <label>Are you sure you want to delete this record?</label>
                <input type="hidden" name="list_registeredstudent" value="<?php echo $data2['or_number']?>">
                <div class="form-group">
                  <input type="submit" name="delete_registeredstudent" value ="Delete" class="btn btn-danger" >  
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
            <!-- END OF BODY -->
          </div>
        </div>
      </div>
    
 <!--END OF STUDENTS DELETION(REGISTERED)-->


  <!--MODAL FOR DELETING COURSE-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true" id="course_delete<?php echo $data2['course_id']?>">
        <div class="modal-dialog" style="width: 40%;">
          <div class="modal-content"> 
            <div class="modal-header">
             <h5 class="modal-title" id="modallabel">Delete Confirmation</h5>
           
      </div>
            <!-- BODY -->
            <div class="modal-body">
              <form method="post" name="course_form">
                <label>Are you sure you want to delete this record?</label>
                <input type="hidden" name="list_course" value="<?php echo $data2['course_id']?>">
                <div class="form-group">
                  <input type="submit" name="delete_course" value ="Delete" class="btn btn-danger" >  
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
            <!-- END OF BODY -->
          </div>
        </div>
      </div>
    
 <!--END OF  COURSE DELETION-->


  <!--MODAL FOR DELETING ROOM-->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true" id="room_delete<?php echo $room_fetch['room_id']?>">
        <div class="modal-dialog" style="width: 40%;">
          <div class="modal-content"> 
            <div class="modal-header">
             <h5 class="modal-title" id="modallabel">Delete Confirmation</h5>
           
      </div>
            <!-- BODY -->
            <div class="modal-body">
              <form method="post" name="room_form">
                <label>Are you sure you want to delete this record?</label>
                <input type="hidden" name="list_room" value="<?php echo $room_fetch['room_id']?>">
                <div class="form-group">
                  <input type="submit" name="delete_room" value ="Delete" class="btn btn-danger" >  
                  <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                </div>
              </form>
            </div>
            <!-- END OF BODY -->
          </div>
        </div>
      </div>
    
 <!--END OF ROOM DELETION-->