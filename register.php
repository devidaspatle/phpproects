<?php

error_reporting(0);

require_once('includes/db_config.php'); 

$resultCentres = mysqli_query($con, "SELECT * FROM centres  order by centre_name asc");

$totalCentres =mysqli_num_rows($resultCentres);

$resultState = mysqli_query($con, "SELECT * FROM states order by sta_name asc");

?>

   <?php include("header.php"); ?>

<link rel="stylesheet" type="text/css" media="screen" href="calender/jquery-ui.css" />
    <script src="calender/jquery.js"></script>
    <script src="calender/jquery-ui.js"></script>
    <script type = "text/javascript">
        $(document).ready(function () {
            var age = "";
            $('#dob').datepicker({
                onSelect: function (value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true,
                changeYear: true
            })
        })
    </script>
    <script language="JavaScript">
        <!--
        function calculateBmi() {
        var weight = document.bmiForm.weight.value
        var height = document.bmiForm.height.value
        if(weight > 0 && height > 0){   
        var finalBmi = weight/(height/100*height/100)
        document.bmiForm.bmi.value = finalBmi
        if(finalBmi < 18.5){
        document.bmiForm.meaning.value = "That you are too thin."
        }
        if(finalBmi > 18.5 && finalBmi < 25){
        document.bmiForm.meaning.value = "That you are healthy."
        }
        if(finalBmi > 25){
        document.bmiForm.meaning.value = "That you have overweight."
        }
        }
        else{
        alert("Please Fill in everything correctly")
        }
        }
        //-->
        </script>

    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <h1>Patient Registration </h1>

                </div>

                <div class="col-md-6 text-right">

                    <ul class="breadcrumb">

                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

                        <li><a href="#">Pages</a></li>

                        <li class="active"> Registration </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <!-- End Breadcrumb -->



        <div class="features-area default-padding bg-gray">

            <div class="container">

                <div class="row">

                    <div role="form" class="wpcf7" id="wpcf7-f203-p196-o1" lang="en-US" dir="ltr">

                        <div class="screen-reader-response"></div>

                       



                <form name="bmiForm" action="patient_code.php" method="post" class="wpcf7-form">

                        

                            <div class="col-md-12 appoinment">

                                <div class="appoinment-box">

                                   

                                    <div style="font-weight: bold">

                                        <div class="row">

                                             <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap Name"> 

                                             <select id="centre_id" name="centre_id" class="form-control" required="required"  style="height: 50px;" >

                                                <option value="">Select Centre Name</option>

                                                 <?php  while($rowCentre = mysqli_fetch_array($resultCentres))

                                                 {

                                                ?>

                                                <option value="<?php echo $rowCentre['id'];?>">

                                                    <?php echo $rowCentre['centre_name'];?></option>    

                                                <?php }?>

                                            </select>     </span>

                                                </div>

                                            </div> <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap Name"><input type="password" 

                                                        name="password" value="" size="40" class="form-control" id="f-name" placeholder="Password" required="required"></span>

                                                </div>

                                            </div>

                                            <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap Name"><input type="text" 

                                                        name="patient_name" value="" size="40" class="form-control" id="f-name" placeholder="Patient Name" required="required" ></span>

                                                </div>

                                            </div>

                                            <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap l-lname"><input type="text"  name="surname" id="surname" value="" size="40" class="form-control" placeholder="Surname" required="required"></span>

                                                </div>

                                            </div>

                                            <div class="col-md-3">

                                                <div class="form-group">

                                                   <select name="marital_status" id="marital_status" class="form-control"  style="height: 50px;" >

                                                    <option value="">Select Marital Status </option>

                                                    <option value="Married">Married</option>

                                                    <option value="Single">Single</option>                                                  

                                                </select>

                                                </div>

                                            </div>

                                            <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap Male">

                                                        <select name="gender"  id="gender" class="form-control"  style="height: 50px;" required="required" >

                                                            <option value="">Select Gender</option>

                                                            <option value="Male">Male</option>

                                                            <option value="Female">Female</option>

                                                            <option value="Other">Other</option></select>

                                                    </span>

                                            </div>

                                        </div>

                                            <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap date_of_birth"><input type="text" name="date_of_birth" value="" size="40" class="form-control"  id = "dob"   placeholder="Date of Birth" ></span>

                                                </div>

                                            </div>

                                            

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <span class="wpcf7-form-control-wrap Male">

                                                    <input type="text" name="age" value="" size="4" class="form-control"  id = "age" readonly placeholder="Age" >

                                            </span>

                                        </div>

                                    </div>

                                     



                                          <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap Email"><input type="text" name="email" value="" size="40" class="form-control" id="email"  placeholder="Email" required=""></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap mobile_number"><input type="text" name="mobile_number" id="mobile_number" value="" size="40" class="form-control" placeholder="Mobile" required="required"></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                  <select id="country" name="country" class="form-control" required style="height: 50px;">



                                                <option value="">Select Country</option>

                                                <option value="India" selected="selected">India</option>



                                               

                                            </select>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                <span class="wpcf7-form-control-wrap date_of_birth">

                                                <select id="state" name="state" class="form-control" required style="height: 50px;" >



                                                <option value="">Select State</option>

                                                 <?php  while($rowState = mysqli_fetch_array($resultState))

                                                 {

                                                ?>

                                                <option value="<?php echo $rowState['sta_id'];?>"<?php if($rowState['sta_id'] == 26) { echo "selected='selected'";}?>>

                                                    <?php echo $rowState['sta_name'];?></option>    

                                                <?php }?>

                                            </select>   </span>

                                                </div>

                                            </div>

                                            

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap city"><input type="text" name="city" value="" size="40" class="form-control" id="city"  placeholder="City/Town" required="required"></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap District"><input type="text" name="district" id="district" value="" size="40" class="form-control"  placeholder="District" required="required"></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap Pincode"><input type="text" name="pincode" id="pincode" value="" size="40" class="form-control"   placeholder="Pincode" ></span>

                                                </div>

                                            </div>

                                             <div class="col-md-12">

                                                <div class="form-group"><b>How did you come to know Appropriate Diet Therapy Centre </b></div></div>



                                              <div class="col-md-3">

                                                <div class="form-group">

                                                <span class="wpcf7-form-control-wrap date_of_birth"> 

                                                <select id="appropriate" name="appropriate" class="form-control" required style="height: 50px;" >

                                                <option value="">How you came to know </option>

                                                <option value="1">Advertisement</option>

                                                <option value="2"> Privious Patient</option>

                                                <option value="3">Doctor</option>

                                                <option value="4">Website</option>

                                                <option value="5">Video</option>

                                                <option value="6">Friend</option>

                                                <option value="7">Relative</option>

                                                </select></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap">
                                <select name="blood_group" id="blood_group"  class="form-control" style="height: 50px;">
                                                <option value="">Select Blood Group</option>
                                                  <option value="A Rh +ve">A Rh +ve</option>
                                                  <option value="O Rh +ve">O Rh +ve</option>
                                                  <option value="B Rh +ve">B Rh +ve</option>
                                                  <option value="AB Rh +ve">AB Rh +ve</option>
                                                  <option value="A Rh -ve">A Rh -ve</option>
                                                  <option value="O Rh -ve">O Rh -ve</option>
                                                  <option value="B Rh -ve">B Rh -ve</option>
                                                  <option value="AB Rh -ve">AB Rh -ve</option>
                                              </select>
                                                 </span>

                                                </div>

                                            </div>



                                              <div class="col-md-6">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap allergy"><input type="text" name="allergy" id="allergy" value="" size="40" class="form-control" placeholder="Known Allergy If Any" ></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap height"><input type="text" name="height" id="height" value="" size="40" class="form-control" placeholder="Height(cm)"></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap weight"><input type="text" name="weight" id="weight" value="" size="40" class="form-control" placeholder="Weight(kg)"></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap bmi"><input type="text" name="bmi" value="" size="40" class="form-control"  placeholder="BMI(Click Here)"  onClick="calculateBmi()" readonly></span>

                                                </div>

                                            </div>
                                             <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap bmi"><input type="text"name="meaning"size="40" class="form-control"  placeholder="This Means" readonly></span>

                                                </div>

                                            </div>
                                             <div class="col-md-12"> <div class="form-group"><b>Registration Amount </b></div></div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap amount"><input type="text" name="amount" value="1000" size="40" class="form-control"   placeholder="Registration Amount" readonly="readonly" ></span>

                                                </div>

                                            </div>

                                              <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap consaltancy"><input type="text" name="consaltancy" id="consaltancy" value="" size="40" class="form-control"  placeholder="Consaltancy Charges" ></span>

                                                </div>

                                            </div>

                                            <div class="col-md-3">

                                                <div class="form-group">

                                                    <span class="wpcf7-form-control-wrap mode_payment"><input type="text" name="mode_payment" id="mode_payment" value="Cash" size="40" class="form-control"  placeholder="Mode Payment" readonly="readonly" ></span>

                                                </div>

                                            </div>



                                    <div class="col-md-12">

                                        <input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="submit" class="wpcf7-form-control wpcf7-submit" id="submit"><span class="ajax-loader"></span>

                                    </div>

                                </div>

                            </div>

                    </div>

                </div>

                <div class="wpcf7-response-output wpcf7-display-none"></div>

                </form>

              

           



            </div>



            

        </div>

    </div>

    </div>



   



   <?php include("footer_pages.php"); ?>