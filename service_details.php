   <?php
    error_reporting(0);
    include("includes/db_config.php"); 
    $ids = $_SESSION['patiId'];
    $serviceid = $_GET['serviceid'];
    $resultServices = mysqli_query($con, "SELECT * FROM services WHERE id = '".$serviceid."'");
    $totalServices =mysqli_num_rows($resultServices);

 ?>
   <?php include("header.php"); ?>
         <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
   
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Our Services</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Our Services</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div id="services" class="services-area inc-icon bg-gray carousel-shadow default-padding bottom-less">
        <div class="container">
            

            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                     <?php 
                       
                        $rowServices = mysqli_fetch_array($resultServices); ?>
                    <div class="col-md-12 col-sm-12 equal-height">
                        <div class="item">
                            <div class="info" style="text-align: justify;">
                                <h4>
                                    <a href="#"><?php echo ucfirst($rowServices['title']);?></a>
                                </h4>

                                     <?php 

                                    echo $description = ucfirst($rowServices['description']);
                                 ?>
                                
                            </div>
                        </div>
                    </div>
                
                   
                      <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>


   <?php include("footer_pages.php"); ?>