<?php
include_once("includes/db_config.php");
include_once("includes/check_session.php");

$resultEmployees = mysqli_query($con, "SELECT * FROM employee_registration");
$totalEmployees =mysqli_num_rows($resultEmployees);

?>

<!doctype html>

<html class="fixed">

	<head>

		<!-- Basic -->

		<meta charset="utf-8">

		    <title>Zero Diabetic Diet | Consultancy </title>
		<!-- Web Fonts  -->

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">



		<!-- Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />



		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />

		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />

		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />



		<!-- Specific Page Vendor CSS -->

		<link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />

		<link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />

		<link rel="stylesheet" href="assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />



		<!-- Theme CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme.css" />



		<!-- Skin CSS -->

		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />



		<!-- Theme Custom CSS -->

		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">



		<!-- Head Libs -->

		<script src="assets/vendor/modernizr/modernizr.js"></script>

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8ffc0b31bc8d9ff82fbb94689dd1d7ff">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script>
	<script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap.html" async></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>




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

    font-size:12px;

    margin-left:8px;

}

@media only screen and (min-width: 768px) {

.top_head {

 display:block;

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

	 display:none;

}

}

</style>

<?php include "header.php"; ?>



<script type="text/javascript">

	function isNumber(evt,id) {

	    evt = (evt) ? evt : window.event;

      	var charCode = (evt.which) ? evt.which : evt.keyCode;

      	if (charCode > 31 && (charCode < 43 || charCode > 57)) {

          document.getElementById(id).style.border = "1px solid red";

          return false;

      	}

      	else

      	{

      	  document.getElementById(id).style.border = "";

          return true;

      	}

	}

	 

	function checkEmail_div(id1,id2)

	{

	    if (document.getElementById(id1).value === '')

	    {

	    	document.getElementById(id1).style.borderColor = "";

		    document.getElementById(id2).innerHTML='';

	    }

	    else

	    {

		    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;



		    if (!filter.test(document.getElementById(id1).value))

		    {

		       document.getElementById(id1).value='';

		       document.getElementById(id1).style.border = "1px solid red";

		       document.getElementById(id2).innerHTML='<font color="#FF0000">Please provide a valid Email Address.</font>';

		       document.getElementById(id1).focus();

		    }

		    else

		    {

		       document.getElementById(id1).style.borderColor = "";

		       document.getElementById(id2).innerHTML='';

		    }

		}

	}  	

</script>			<!-- end: header -->

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

.help_btn a, .faq_btn a{

	text-decoration:none;

	}



	ul.nav-main > li > a:hover, ul.nav-main > li > a:focus {

    background-color:#03486B;

}





ul.nav-main li .nav-children li a:hover, ul.nav-main li .nav-children li a:focus {

    background:#03486B;

}





@media only screen and (min-width: 768px) {

.menu_not {

 display:none;

}

}



@media only screen and (max-width: 767px) {

.menu_not {

    float: right;

    margin: 16px 0;

	 display:block;

}

}

</style>

<?php include "left.php"; ?>

				<!-- end: sidebar -->

				<section role="main" class="content-body">

					<header class="page-header">

						<h2>Employee  Registration</h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="dashboard.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								<li><span>Employee  Registration &nbsp;&nbsp;</span></li>

							</ol>

						</div>

					</header>

					<!-- start: page -->

					<section class="panel">	


                    					

						<header class="panel-heading">

							<a href="create_employee_registration.php" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Create Employee Registration</a>

						</header>

						<div class="panel-body">

								<table id="example" class="table table-striped table-bordered" style="width:100%">


								<thead>

									<tr>

										<th>Sr.No</th>

										<th>Employee</th>
										<th>Name</th>

										<th>Contact No.</th>

										<th>Employee Type</th>

										<th>City</th>

										<th>Date of Join</th>

										<th>Action</th>

									</tr>

								</thead>

								<tbody>
									<?php
									 $i = 1;
									  while($rowEmployees = mysqli_fetch_array($resultEmployees)) 
									  { 
									  	$stafftypeid = $rowEmployees['stafftype'];
									  	$resultDesignation = mysqli_query($con, "SELECT * FROM designation where id = '$stafftypeid'");
										$rowDesignation =mysqli_fetch_array($resultDesignation);
										$designation = $rowDesignation['designation'];
									?>
										<tr>

										<td><?php echo $i++; ?></td>

										<td><?php echo $rowEmployees['emp_id'];?></td>

										<td><?php echo ucwords($rowEmployees['fullname']);?></td>

										<td><?php echo $rowEmployees['phone'];?></td>

										<td><?php echo $designation;?></td>

										<td> <?php echo $rowEmployees['city'];?></td>

										<td><?php 
												$originalDate = $rowEmployees['dob'];
												if(!empty($originalDate))
												{
												echo  date("d-m-Y", strtotime($originalDate));
												}
											?></td>

										<td align="center">

											<a href="edit_employee_registration.php?act=edit&type=<?php echo $rowEmployees['id'];?>" title="Edit" onClick="return confirm('Do You Want To Edit This Record ?');"><i class="fa fa-edit"></i>

											</a>&nbsp;

                                            <a href="employee_registration.php?act=del&type=<?php echo $rowEmployees['id'];?>" title="Delete" onClick="return confirm('Do You Want To Delete This Record ?');">

												<i class="fa fa-trash"></i>

											</a>

                                           <a  href="view_employee_registration.php?act=print&type=<?php echo $rowEmployees['id'];?>" onClick="return confirm('Do You Want To Print This Record ?');" ><i class="fa fa-print"></i>

											</a>

										</td>

									</tr>	
								<?php } ?>



																	
</tbody>

							</table>

						</div>

					</section>

					<!-- end: page -->

				</section>

			</div>			

		</section>

		
		<script type="text/javascript" class="init">	
		$(document).ready(function() {
			$('#example').DataTable();
		} );

	</script>
		<!-- Theme Base, Components and Settings -->

		<script src="assets/javascripts/theme.js"></script>

		<!-- Vendor -->

		

	</body>

</html>