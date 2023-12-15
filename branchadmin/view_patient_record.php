<?php

error_reporting(0);

include_once("includes/db_config.php");

$patient_id = $_GET['patient_id'];

$resultQgl = mysqli_query($con, "SELECT * FROM patients where patient_id = '$patient_id'");

$totalPatient =mysqli_num_rows($resultQgl);

$rowQgl = mysqli_fetch_array($resultQgl);

$centre_id = $rowQgl['centre_id'];
$state = $rowQgl['state'];

$resultCentres = mysqli_query($con, "SELECT * FROM centres  where id ='$centre_id'");
$totalCentres =mysqli_num_rows($resultCentres);
$rowCentres=mysqli_fetch_array($resultCentres);

$resultState = mysqli_query($con, "SELECT * FROM states where sta_id ='$state'");
$rowState=mysqli_fetch_array($resultState);

?>

    <!doctype html>

    <html class="fixed">

    <head>

        <!-- Basic -->

        <meta charset="utf-8">

        <title>Zero Diabetic Diet | Consultancy </title> |

        <!-- Web Fonts  -->

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->

        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

        <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

        <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

        <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

        <!-- Theme CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme.css" />

        <!-- Skin CSS -->

        <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

        <!-- Theme Custom CSS -->

        <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

        <script src="assets/vendor/modernizr/modernizr.js"></script>

        <!-- Head Libs -->

    </head>

    <body>

        <section class="body">

            <!-- start: header -->

            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <style>
                .notifications > li .notification-icon {
                    /* background: #FFF; */
                    border-radius: 50%;
                    /* box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.3); */
                    /* display: inline-block; */
                    /* height: 30px; */
                    /* position: relative; */
                    /* width: 30px; */
                    text-align: center;
                    font-size: 12px;
                    margin-left: 8px;
                }
                
                @media only screen and (min-width: 768px) {
                    .top_head {
                        display: block;
                    }
                }
                
                @media only screen and (min-width: 768px) and (max-width:1100px) {
                    .logo h4 {
                        font-size: 14px;
                    }
                    .top_head a {
                        font-size: 12px;
                        padding: 5px;
                    }
                    .header .separator {
                        margin: 0 5px 0 !important;
                    }
                    .userbox .name {
                        font-size: 10px;
                    }
                }
                
                @media only screen and (max-width: 767px) {
                    .top_head {
                        display: none;
                    }
                }
            </style>

            <?php include "header.php"; ?>

                <!-- end: header -->

                <div class="inner-wrapper">

                    <!-- start: sidebar -->

                    <style>
                        /*span.help_btn a {

    color: #abb4be;

    text-decoration: none;

    font-size: 1.3rem;

        padding: 12px 25px;

}

span.help_btn div {

    margin: 30px 0;

}*/
                        
                        .help_btn {
                            margin-top: 50px;
                            padding: 10px 25px;
                        }
                        
                        .faq_btn {
                            padding: 10px 25px;
                        }
                        
                        ul.nav-main li i {
                            margin-right: 1.1em;
                        }
                        
                        .help_btn i.fa.fa-question-circle {
                            font-size: 2.0rem;
                        }
                        
                        .faq_btn i.fa.fa-info-circle {
                            font-size: 2.0rem;
                        }
                        
                        .help_btn a,
                        .faq_btn a {
                            text-decoration: none;
                        }
                        
                        ul.nav-main > li > a:hover,
                        ul.nav-main > li > a:focus {
                            background-color: #03486B;
                        }
                        
                        ul.nav-main li .nav-children li a:hover,
                        ul.nav-main li .nav-children li a:focus {
                            background: #03486B;
                        }
                        
                        @media only screen and (min-width: 768px) {
                            .menu_not {
                                display: none;
                            }
                        }
                        
                        @media only screen and (max-width: 767px) {
                            .menu_not {
                                float: right;
                                margin: 16px 0;
                                display: block;
                            }
                        }
                    </style>

                    <script>
                        function printDiv(divName) {

                            var printContents = document.getElementById(divName).innerHTML;

                            var originalContents = document.body.innerHTML;

                            document.body.innerHTML = printContents;

                            window.print();

                            document.body.innerHTML = originalContents;

                        }
                    </script>

                    <?php include "left.php"; ?>

                        <!-- end: sidebar -->

                        <section role="main" class="content-body">

                            <header class="page-header">

                                <h2>View Patient Record</h2>

                                <div class="right-wrapper pull-right">

                                    <ol class="breadcrumbs">

                                        <li>

                                            <a href="dashboard.php">

                                                <i class="fa fa-home"></i>

                                            </a>

                                        </li>

                                        <li><a href="registration.html">Patient Record</a></li>

                                        <li><span>Patient Record&nbsp;&nbsp;</span></li>

                                    </ol>

                                </div>

                            </header>

                            <!-- start: page -->

                            <input type="button" onClick="printDiv('printableArea')" value="Print" />

                            <!-- start: page -->

                            <div id="printableArea" style="border:dotted">

                                <div class="row">

                                    <div class="col-md-12">

                                        <section class="panel">

                                            <table class="table" style="background-color:#FFFFFF;">

                                                <thead>

                                                    <tr>

                                                        <td colspan="6">
                                                            <div style="background-color:#FFFFFF;">

                                                                <div style="text-align:center"><img src="images/logo.png" style="width:100px"></div>

                                                                <div style="text-align:center; font-size:14px; color:#000066">
                                                                    <h5><b>Address: <?php echo $rowCentres['address'];?>, <?php echo $rowCentres['city'];?>-<?php echo $rowCentres['pincode'];?></b></h5></div>
                                                                <div style="text-align:center; font-size:14px;color:#000066">
                                                                    <h5><b>Email:zerodiabetes@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone. No. <?php echo $rowCentres['mobile_number'];?></b></h5></div>
                                                                <div style="text-align:center">
                                                                    <h2 class="panel-title"><b>Appropriate Diet Therapy Centre in <?php echo $rowCentres['centre_name'];?></b></h2></div>&nbsp;&nbsp;
                                                                <div style="border-bottom: dotted;"></div>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td>Patient ID </td>
                                                        <td>
                                                            <?php echo $rowQgl['patient_id'];?>
                                                        </td>
                                                        <td>Patient Name</td>
                                                        <td>
                                                            <?php echo ucwords($rowQgl['patient_name']);?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Marital Status : </td>
                                                        <td>
                                                            <?php echo $rowQgl['marital_status'];?>
                                                        </td>
                                                        <td>Gender</td>
                                                        <td>
                                                            <?php echo $rowQgl['gender'];?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Age</td>
                                                        <td>
                                                            <?php echo $rowQgl['age'];?>
                                                        </td>
                                                        <td>Date Of Birth</td>
                                                        <td>
                                                            <?php 
                                                    $dateofbirth = $rowQgl['date_of_birth'];
                                                    if(!empty($dateofbirth))
                                                    {
                                                    echo  date("d-m-Y", strtotime($dateofbirth));
                                                    }
                                                ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email ID</td>
                                                        <td>
                                                            <?php echo $rowQgl['email'];?>
                                                        </td>
                                                        <td> Mobile No. </td>
                                                        <td>
                                                            <?php echo $rowQgl['mobile_number'];?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <h5><b>Present Address</b></h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Address</td>
                                                        <td>
                                                            <?php echo $rowQgl['address'];?>
                                                        </td>
                                                        <td>Country</td>
                                                        <td>
                                                            <?php echo $rowQgl['country'];?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>State</td>
                                                        <td>
                                                            <?php  echo $rowState['sta_name']; ?>
                                                        </td>
                                                        <td>City</td>
                                                        <td>
                                                            <?php echo $rowQgl['city'];?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>District</td>
                                                        <td>
                                                            <?php echo ucwords($rowQgl['district']);?>
                                                        </td>
                                                        <td>Pincode</td>
                                                        <td>
                                                            <?php echo $rowQgl['pincode'];?>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Office Name: </td>

                                                        <td></td>

                                                        <td>Salary:</td>

                                                        <td></td>

                                                    </tr>

                                                    <tr>

                                                        <td>Monthly Income: </td>

                                                        <td></td>

                                                        <td>Present Occupation:</td>

                                                        <td></td>

                                                    </tr>

                                                    <tr>

                                                        <td>Nature of Occupation: </td>

                                                        <td>Heavy</td>

                                                        <td>Moderate</td>

                                                        <td>Light work</td>

                                                    </tr>

                                                    <tr>

                                                        <td>Family History : </td>

                                                        <td>Heart attack,Hypertension</td>

                                                        <td>Stoke,Mental disorder </td>

                                                        <td>Cancer, Thyroid ,Diabetes,Asthma</td>

                                                    </tr>

                                                    <tr>

                                                        <td>Social History: </td>

                                                        <td colspan="3">Alcohol, Tobacco chewing, Smoking </td>

                                                    </tr>

                                                    <tr>

                                                        <td>Leading questions: </td>

                                                        <td colspan="3">(Did you have any following problem?)</td>

                                                    </tr>

                                                    <tr>

                                                        <td colspan="4">
                                                            <table contenteditable="0" width="100%">

                                                                <tr>

                                                                    <td>Endocrine: </td>

                                                                    <td>Excessive thirst </td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                    <td>Excessive Eating</td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Endocrine: </td>

                                                                    <td>Excessive urination </td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                    <td>weight loss & Tiredness</td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Endocrine: </td>

                                                                    <td>weight gain & Lethargy</td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                    <td>Tingling, Numbness sensations</td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                </tr>

                                                                <tr>

                                                                    <td>Endocrine: </td>

                                                                    <td>Heat intolerance</td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                    <td>Hair loss</td>

                                                                    <td>Y</td>

                                                                    <td>N</td>

                                                                </tr>

                                                            </table>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td colspan="4"><h5><b>Investigations</b></h5></td>

                                                    </tr>

                                                    <tr>

                                                        <td colspan="4">
                                                            <table class="table" width="100%">

                                                                <tbody>

                                                                    <tr>

                                                                        <th scope="row">SN</th>

                                                                        <th>Investigations Name</th>

                                                                        <th>Investigations Value</th>
                                                                        <th>Date</th>
                                                                    </tr>

                                                                    <?php

                                        $i=1;
$resultInvestigations = mysqli_query($con, "SELECT * FROM patientinvests where patient_id = '".$patient_id."'");

                                        while($investigations = mysqli_fetch_array($resultInvestigations))

                                        {
                                     
                                        $diabetesid = $investigations['diabetes_id'];
                                        if(!empty($investigations['diabetes_value'])){
                                        $resultDiagnosis = mysqli_query($con, "SELECT * FROM investigations where id  = '$diabetesid'");
                                          $rowDiagnosis = mysqli_fetch_array($resultDiagnosis);
                                    ?>

                                                                        <tr>

                                                                            <th scope="row">
                                                                                <?php echo $i++; ?>
                                                                            </th>

                                                                            <td>
                                                                                <?php echo $rowDiagnosis['investigations_name'];?>
                                                                            </td>

                                                                            <td>
                                                                                <?php echo $investigations['diabetes_value'];?>
                                                                            </td>
 <td> <?php 
                                                                        $dateofallinvt = $investigations['created_at'];
                                                                        if(!empty($dateofallinvt))
                                                                        {
                                                                        echo  date("d-m-Y", strtotime($dateofallinvt));
                                                                        } ?></td>
                                                                        </tr>
                                                                        <?php } }?>

                                                                </tbody>

                                                            </table>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td colspan="4"><h5><b>Supplements <b></h5></td>

                                                    </tr>

                                                    <tr>

                                                        <td colspan="4">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Sr. No.</th>
                                                                        <th scope="col">Supplements </th>
                                                                        <th scope="col">Doses</th>
                                                                        <th scope="col">Instruction </th>
                                                                        <th scope="col">No of B </th>
                                                                        <th scope="col">Price</th>
                                                                        <th scope="col">Total Price</th>
                                                                        <th scope="col">Date </th>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
       $i=1;
       $resultPrescriptions = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '".$patient_id."'");
           while($rowPrescriptions =    mysqli_fetch_array($resultPrescriptions))
        {
       $supplementsids = $rowPrescriptions['supplements_id'];

           $rowFormulas = mysqli_query($con, "SELECT * FROM formulas where id = '".$supplementsids."'");

       $rowFormulas =mysqli_fetch_array($rowFormulas);
        if(!empty($rowPrescriptions['noofb'])){
         ?>
        <tr>
            <th scope="row">
                <?php echo $i++;?>
            </th>
            <td>
                <?php echo $supplementsids = $rowFormulas['formulas_name'];?>
            </td>
            <td>
                <?php   $doses = $rowPrescriptions['doses'];

                if($doses==1)
                {
                    echo "0-1-1";
                }
                if($doses==2)
                {
                echo "1-1-1";   
                }
                 if($doses==3)
                {
                    echo "1-0-1";
                }
                if($doses==4)
                {
                echo "0-1-0";   
                }
                if($doses==5)
                {
                    echo "0-0-1";
                }
                if($doses==6)
                {
                echo "1-0-0";   
                }
                if($doses==7)
                {
                    echo "2-0-2";
                }
                if($doses==8)
                {
                echo "2-0-1";   
                }
                if($doses==9)
                {
                echo "2-2-2";   
                }
        ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php 
                       $instruction =  $rowPrescriptions['instruction'];

                if($instruction==1)
                {
                    echo "1/2 hour before Meal";
                }
                if($instruction==2)
                {
                echo "1/2 hour after Meal"; 
                }
         ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo  $explodedno =  $rowPrescriptions['noofb']; ?>

                                                                            </td>
                                                                            <td>
                                                                                <?php  echo $exploded = $rowPrescriptions['price']; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php  echo $gtotal = $exploded * $explodedno; ?>
                                                                            </td>
                                                                        <td> <?php 
                                                                        $dateofallothh = $rowPrescriptions['created_at'];
                                                                        if(!empty($dateofallothh))
                                                                        {
                                                                        echo  date("d-m-Y", strtotime($dateofallothh));
                                                                        } ?></td>
                                                                        </tr>
                                                                        <?php  } } ?>

                                                                            <tr>
                                                                                <th scope="row">Total</th>
                                                                                <td>&nbsp;</td>
                                                                                <td>&nbsp;</td>
                                                                                <td>&nbsp;</td>
                                                                                <td>&nbsp;</td>
                                                                                <td align="right">RS.</td>
                                                                                <td colspan="2"><b>
          <?php 
           $explodedno =0;
           $exploded = 0;
           $gtotald = 0;
           $gtotal = 0;

       $resultPres = mysqli_query($con, "SELECT * FROM prescriptions where patient_id = '".$patient_id."'");
       while($rowPrescriptions =  mysqli_fetch_array($resultPres))
        {
          $explodedno =  $rowPrescriptions['noofb'];
          $exploded = $rowPrescriptions['price'];
          $gtotal = $exploded * $explodedno;
         $gtotald += $gtotal;
      }
      echo $gtotald;
       ?>/</b></td>
                                                                            </tr>
                                                                </tbody>
                                                            </table>

                                                        </td>

                                                        </tr>

                                                        <tr>

                                                            <td colspan="4"><h5><b>Allopathic Medicine History </b></h5></td>

                                                        </tr>

                                                        <tr>

                                                            <td colspan="4">
                                                                <table class="table" width="100%">

                                                                    <tbody>

                                                                        <tr>

                                                                            <th>Brand Name</th>

                                                                            <th>Generic Value</th>

                                                                            <th>Doses </th>
                                                                            <th>Date </th>
                                                                        </tr>
                                                                        <?php

     $resuAllopathics = mysqli_query($con, "SELECT * FROM allopathics where patient_id = '".$patient_id."'");

                              while ($rowAllopathics = mysqli_fetch_array($resuAllopathics)) {
                                if(!empty($rowAllopathics['brand_name'])){
                            ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <?php echo $rowAllopathics['brand_name'];?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $rowAllopathics['generic_name']; ?>
                                                                                </td>
                                                                                <td>
                                                                                    <?php echo $rowAllopathics['doses']; ?>
                                                                                </td>
                                                                                <td>
                                                                         <?php 
                                                                        $dateofallothh = $rowAllopathics['created_at'];
                                                                        if(!empty($dateofallothh))
                                                                        {
                                                                        echo  date("d-m-Y", strtotime($dateofallothh));
                                                                        } ?>
                                                                                </td>
                                                                            </tr>
                                                                            <?php } }  ?>
                                                                    </tbody>

                                                                </table>

                                                                </div>

                                    </div>
                                    </section>

                                </div>

                            </div>

                </div>

                <footer class="panel-footer">

                    <div class="row">

                        <div class="col-sm-12 col-sm-offset-5">

                        </div>

                    </div>

                </footer>

                <!-- end: page -->

                </section>

                </div>

        </section>

        <!-- Vendor -->

        <script src="assets/vendor/jquery/jquery.js"></script>

        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>

        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>

        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>

        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>

        <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

        <!-- Specific Page Vendor -->

        <script src="assets/vendor/jquery-validation/jquery.validate.js"></script>

        <!-- Theme Base, Components and Settings -->

        <script src="assets/javascripts/theme.js"></script>

        <!-- Theme Custom -->

        <script src="assets/javascripts/theme.custom.js"></script>

        <!-- Theme Initialization Files -->

        <script src="assets/javascripts/theme.init.js"></script>

        <!-- Examples -->

        <script src="assets/javascripts/forms/examples.validation.js"></script>

        <script src="assets/javascripts/custom.js"></script>

        <script src="assets/javascripts/ajaxupload.3.5.js"></script>

    </body>

    </html>