<?php
error_reporting(0);
require_once('includes/db_config.php'); 

 
    $resultCentres = mysqli_query($con, "SELECT * FROM centres  order by centre_name asc");
    $totalCentres =mysqli_num_rows($resultCentres);
 ?>
   <?php include("header.php"); ?>
     
         <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
   
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Centres</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Centres</a></li>
                      
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
                <table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>Centre ID:</th>
                                        <th>Centre Name</th>
                                        <th>Address</th>
                                        <th>Mobile Number</th>
                                        <th>Contact Person</th>
                                    </tr>

                                </thead>

                                <tbody>

                                      <?php 
                                        $i=1;
                                      while($centres = mysqli_fetch_array($resultCentres)) {  ?>
                                        <tr>            
                                        <td align="center"><?php echo $i++; ?></td>
                                        <td align="left"><?php echo $centres['centre_name']; ?></td>
                                        <td align="left"><?php echo $centres['address']; ?></td>
                                        <td><?php echo $centres['mobile_number']; ?></td>
                                        <td align="left"><?php echo $centres['contact_person']; ?></td>
                                    </tr>   
                                  <?php 
                                        }
                                    ?>                          

                                </tbody>

                            </table>


                </div>
            </div>
        </div>
    </div>


   <?php include("footer_pages.php"); ?>