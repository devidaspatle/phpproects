<?php
    error_reporting(0);
    include("includes/config.php");
    $sqlfaqs = "SELECT * FROM faqs where status =1";
    $resultfaqs = mysqli_query($conn, $sqlfaqs);               
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ashtvinayak Gold: Frequently Asked Questions</title>
    <base />
    <meta name="description" content="Jewelry Themes" />
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript" defer="defer"></script>
    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="catalog/view/javascript/jquery/owl-carousel/owl.transitions.css" rel="stylesheet" media="screen" />
    <script src="catalog/view/javascript/at/jquery.custom.min.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/at/custom.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins|Montserrat|Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="catalog/view/theme/jewelrythemes04/stylesheet/atstyle.css" rel="stylesheet">
     <link href="catalog/view/theme/jewelrythemes04/stylesheet/style.css" rel="stylesheet">
    <link href="catalog/view/javascript/jquery/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="admin/view/template/extension/module/so_page_builder/assets/css/shortcodes.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="catalog/view/javascript/so_page_builder/css/style_render_34.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="catalog/view/javascript/so_page_builder/css/style.css" type="text/css" rel="stylesheet" media="screen" />
    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>

    <script src="catalog/view/javascript/jquery/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="admin/view/template/extension/module/so_page_builder/assets/js/shortcodes.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/so_page_builder/js/section.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/so_page_builder/js/modernizr.video.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/so_page_builder/js/swfobject.js" type="text/javascript"></script>
    <script src="catalog/view/javascript/so_page_builder/js/video_background.js" type="text/javascript"></script>
    <link href="catalog/view/javascript/so_megamenu/so_megamenu.css" rel="stylesheet" type="text/css" />
    <link href="catalog/view/javascript/so_megamenu/wide-grid.css" rel="stylesheet" type="text/css" />
    <script src="catalog/view/javascript/so_megamenu/so_megamenu.js" type="text/javascript"></script>
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>

<body class="common-home">
   <div style=" border-bottom:background: #fff;border-bottom: 1px solid #000;">
        <div class="header_outer">
        <div class="header">
        <div class="container">
        <?php include "header.blade.php" ?>
         </div>
         </div>
         </div>
    </div>

    <div id="content" class="content_home">

        <div class="so-page-builder">
            
                   <div class="section-title text-center">
                    <h3>Frequently Asked Questions</h3>	
                     <center>
                         <div style="border:1px solid #fdbe9f;width:350px;margin-bottom: 2px;"></div>
                    </center>
                    <center>
                        <div style="border:1px solid #fdbe9f;width:350px;margin-bottom: 2px;"></div>
                    </center>
                             
                <div style="height:5px;" class="clearfix"></div>			
            </div>

            <div class="container page-builder-ltr">
                 <div class="col-md-12" style="text-align: justify;">
          <?php
             if (mysqli_num_rows($resultfaqs) > 0) {
            // output data of each row
             while($rows = mysqli_fetch_assoc($resultfaqs)) {
            ?>
          <button class="collapsible"><?php echo ucwords($rows['title']);?></button>
          <div class="content">
          <?php echo ucfirst($rows['description']);?>
          </div>
           <div style="height:5px;" class="clearfix"></div> 
         <?php } } ?>
        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
         </div>
        </div>
      

        <!--Newsletter area start-->
            </div>
        <div class="newsletter_area">
       &nbsp;

        </div>

        <!--Newsletter area start-->

    </div>

    <footer>
     <?php include "footer.blade.php" ?>
    </footer>

</body>

</html>