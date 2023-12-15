<?php
    error_reporting(0);
    include("includes/db_config.php");

    $resultPhotos = mysqli_query($con, "SELECT * FROM photos  order by id desc");
    $totalPhotos =mysqli_num_rows($resultPhotos);
 ?>
   <?php include("header.php"); ?>
      <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
   
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Gallery Grid</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li class="active">Grid</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area default-padding">
        <div class="container">
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3" style="position: relative; height: 599.966px;">
                                <!-- Single Item -->
                                 <?php 
                                    $i=1;
                                    while($rowPhoto = mysqli_fetch_array($resultPhotos)) {  ?>

                                <div  class="col-md-4  style="position: absolute; left: 0%; top: 0px; border:2px #1778ab solid">
                                        <div>
                                        <img src="photos/<?php echo $rowPhoto['image'];?>" style="border:2px #1778ab solid;height: 300px;">
                                        
                                       
                                    </div>
<h4><?php echo ucfirst($rowPhoto['title']);?></h4>
                                </div>
                            <?php } ?>
                             
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

   <?php include("footer_pages.php"); ?>