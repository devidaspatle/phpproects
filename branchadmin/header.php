<?php   
include "includes/check_session.php";   
	$userid =$_SESSION['rsoftId'];
	$resultAdmin = mysqli_query($con, "SELECT * FROM centres where id = '".$userid."'");
	$rowAdmin = mysqli_fetch_array($resultAdmin);
?>
        <header class="header">
	<div class="logo-container">
		<a href="dashboard.php" class="logo" style="text-decoration: none;">
			<img src="images/logo.png" style="width:100px;">
			<!-- <img src="../" height="35" alt="Porto Admin" /> -->
		</a>
		<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>
    
	<!-- start: search & user box -->
	<div class="header-left">	
    	
            <h2>&nbsp;&nbsp;
		Zero Diabetic Diet  Consultancy  in  <?php echo ucfirst($rowAdmin['centre_name']);?></h2>
           
         <span class="separator"></span>
		<div id="userbox" class="userbox">
			<a href="dashboard.php" data-toggle="dropdown">
				<figure class="profile-picture">
							<img src="#" alt="Zero Diabetic Diet" height="32" width="32" class="img-circle">
					
						                </figure>
				<div class="profile-info">
					<span class="name">
        <?php echo ucfirst($rowAdmin['centre_name']);?>
					 </span>
					<span class="role">

                    </span>
				</div>

				<i class="fa custom-caret"></i>
			</a>

			<div class="dropdown-menu">
				
				 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                 <li><a role="menuitem" tabindex="-1" href="settings.php"><i class="fa fa-user"></i> My Profile</a></li>
					    <li><a role="menuitem" tabindex="-1" href="change-password.php"><i class="fa fa-lock"></i> Change Password</a></li>
								 <li class="nav-item">
                                
                                    <a href="logout.php"> Logout</a>

                               
                            </li>
                           </ul>
			</div>
		</div>
	</div>
	<!-- end: search & user box -->
</header>