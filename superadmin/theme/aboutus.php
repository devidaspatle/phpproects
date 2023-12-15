<?php
    error_reporting(0);
    include("includes/config.php");
    $webcontent = "SELECT * FROM webcontents where id =1 and status =1";
    $results = mysqli_query($conn, $webcontent);
    $rows = mysqli_fetch_assoc($results); 

    $webcontentmsg = "SELECT * FROM webcontents where id =2 and status =1";
    $resultsmsg = mysqli_query($conn, $webcontentmsg);
    $rowmsg = mysqli_fetch_assoc($resultsmsg); 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ashtvinayak Gold: About Us</title>
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

    <style type='text/css'>
        .newsletter_content form button {
            position: absolute;
            content: "";
            right: 0;
            top: 0;
            font-size: 16px;
            font-weight: 500;
            text-align: center;
            padding: 0 60px;
            background: #c09578;
            color: #fff;
            height: 100%;
            border: 0;
            border-radius: 4px;
            text-transform: capitalize;
        }
        
        .newsletter_content form input {
            width: 100%;
            padding: 10px 224px 10px 20px;
            border: 1px solid #6d6d6d;
            background: none;
            color: #a7a7a7;
            border-radius: 4px;
            background: #ebebeb
        }
        
        .newsletter_content form {
            width: 690px;
            position: relative;
            margin: 0 auto;
        }
        
        .newsletter_content {
            text-align: center;
        }
        
        a {
            text-decoration: none;
            color: #000
        }
        
        img {
            max-width: 100%;
            vertical-align: middle;
            border: 0
        }
        
        body {
            color: #2e2e2e;
        }
        
        #body-wrapper {
            max-width: 100%;
            margin: 0 auto;
            background-color: #ededed;
            box-shadow: 0 0 5px RGBA(0, 0, 0, 0.2)
        }
        
        #content-wrapper {
            margin: 0 auto;
            padding: 20px 0 40px;
            overflow: hidden
        }
        
        .prtn-article .prtn-article-image {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .prtn-article .prtn-bgr {
            bottom: 0;
            left: 0;
            opacity: 0.7;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }
        
        .prtn-article .prtn-article-image .prtn-featured-wid {
            width: 100%;
            height: 280px;
            display: block;
            background-size: cover !important;
            background-position: center center !important;
        }
        
        .prtn-article .prtn-post-image:hover .prtn-bgr {
            opacity: 1;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
        }
        
        .prtn-article .share-links {
            opacity: 0;
            left: 0;
            margin-top: -15px;
            position: absolute;
            right: 0;
            top: 50%;
            -webkit-transition: 0.4s;
            -o-transition: 0.4s;
            transition: 0.4s;
            display: inline;
            text-align: center;
        }
        
        .prtn-article .prtn-post-image:hover .share-links {
            opacity: 1
        }
        
        .index #main-wrapper .blog-posts .post-outer,
        body.archive #main-wrapper .blog-posts .post-outer {
            float: left;
            width: 100%;
            padding: 0px 15px;
            box-sizing: border-box;
        }
        
        .index #main-wrapper .blog-posts .post-outer .prtn-article,
        body.archive #main-wrapper .blog-posts .post-outer .prtn-article {
            background: #fff;
            padding-right: 0px;
            border-radius: 5px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .05);
            -webkit-transition: all .6s cubic-bezier(.165, .84, .44, 1);
            -moz-transition: all .6s cubic-bezier(.165, .84, .44, 1);
            -o-transition: all .6s cubic-bezier(.165, .84, .44, 1);
            transition: all .6s cubic-bezier(.165, .84, .44, 1);
        }
        
        .prtn-article .article-content {
            box-sizing: border-box;
            padding: 10px 20px;
        }
        
        .index #main-wrapper .blog-posts .post-outer .prtn-article:hover,
        body.archive #main-wrapper .blog-posts .post-outer .prtn-article:hover {
            -webkit-transform: translate(0, -8px);
            -moz-transform: translate(0, -8px);
            -ms-transform: translate(0, -8px);
            -o-transform: translate(0, -8px);
            transform: translate(0, -8px);
            box-shadow: 0 40px 40px rgba(0, 0, 0, .16);
        }
        
        .prtn-article .entry-content {
            font-size: 14px;
            line-height: 24px;
            color: #8e8e95;
            padding-top: 10px;
        }
        
        .prtn-article a.btn-read {
            background: #b9902c;
            border: 1px solid #eaeaf1;
            display: inline-block;
            right: 20px;
            padding: 10px 20px 9px;
            margin-top: 20px;
            margin-bottom: 10px;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }
        
        .prtn-article a.btn-read:hover {
            background: #cead4a;
            color: white;
            border: 1px solid #cead4a;
        }
        
        .prtn-article .entry-title a:hover {
            color: #000
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
                    <h3>About Us</h3>	
                     <center>
                         <div style="border:1px solid #fdbe9f;width:200px;margin-bottom: 2px;"></div>
                    </center>
                    <center>
                        <div style="border:1px solid #fdbe9f;width:200px;margin-bottom: 2px;"></div>
                    </center>
                             
                <div style="height:5px;" class="clearfix"></div>			
            </div>

            <div class="container page-builder-ltr">
                <div><?php echo ucfirst($rows['description']);?></div>
                        </div>
        </div>
      

        <!--Newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-8">
                        <div class="newsletter_content">
                            <div class="section-title text-center">
                                <h3>Director's message</h3>
                                <center>
                                    <div style="border:1px solid #fdbe9f;width:200px;margin-bottom: 2px;"></div>
                                </center>
                                <center>
                                    <div style="border:1px solid #fdbe9f;width:200px;margin-bottom: 2px;"></div>
                                </center>
                             

                                <div style="height:5px;" class="clearfix"></div>

                            </div>
 
                         <div class="col-md-12">&nbsp;</div>
                        </div>
                    </div>
                </div>
                  <div class="row">
                <div class="col-md-2">
                <img style="border:2px solid #f6d7c3;text-align: center; width: 160px; height: 170px" src="image/avtar.png"/>
                 <h4>Test 1</h4>
                </div>
               <div class="col-md-10" style="text-align: justify;">
             
              <?php echo ucfirst($rowmsg['description']);?>
               </div>
                </div>
            </div>
            </div>

        <div class="newsletter_area">
           <?php include "newsletter.php" ?>

        </div>

        <!--Newsletter area start-->

    </div>

    <footer>
     <?php include "footer.blade.php" ?>
    </footer>

</body>

</html>