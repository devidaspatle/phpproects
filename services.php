   <?php
    error_reporting(0);
    session_start();
    include("includes/db_config.php");
   
    $ids = $_SESSION['patiId'];

    $resultServices = mysqli_query($con, "SELECT * FROM services  order by id desc");
    $totalServices =mysqli_num_rows($resultServices);

     $resultTestimonials = mysqli_query($con, "SELECT * FROM  testimonials  order by id desc");
    $totalTestimonials =mysqli_num_rows($resultTestimonials);
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
                        $i=1;
                        while($rowServices = mysqli_fetch_array($resultServices)) {  ?>
                    <div class="col-md-4 col-sm-4 equal-height">
                        <div class="item">
                            <div class="info">
                                <h4>
                                    <a href="#"><?php echo ucfirst($rowServices['title']);?></a>
                                </h4>
                               
                                <p>
                                     <?php 

                                    $description = $rowServices['description'];
                                   echo substr($description, 0, 150);?></p>
                                <a class="btn btn-theme border circle btn-md" href="service_details.php?serviceid=<?php echo $rowServices['id']; ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                   
                      <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>


   <?php include("footer_pages.php"); ?>