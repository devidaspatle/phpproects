<?php
    error_reporting(0);
    include("includes/db_config.php");

    $resultGalleries = mysqli_query($con, "SELECT * FROM albumgalleries  order by id desc");
    $totalGalleries =mysqli_num_rows($resultGalleries);
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
                      
                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3" style="position: relative; height: 399.966px;">
                                <!-- Single Item -->
                                 <?php 
                                    $i=1;
                                    while($rowGalleries = mysqli_fetch_array($resultGalleries)) {  ?>

                                <div class="pf-item development capital" style="position: absolute; left: 0%; top: 0px;border:2px #1778ab solid;width: 300px;">
                                    <div class="effect-box">
                                        <img src="albumgallerys/<?php echo $rowGalleries['image'];?>" style="width: 300px;">
                                        <div class="info">
                                          <h4><a href="#"><?php echo $rowGalleries['title'];?></a></h4>
                                          <a href="photo_gallery_images.php?photoid=<?php echo $rowGalleries['id'];?>" ><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
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