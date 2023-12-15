<?php
error_reporting(0);
require_once('includes/db_config.php'); 
 ?>
   <?php include("header.php"); ?>
      <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Top Entry
    ============================================= -->
    <div class="top-entry-area text-center">
        <div class="container">
            <div class="row">
                <div class="item-box">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="fa fa-map-marker"></i>
                            <h4>Location</h4>
                            <p>
                                First Floor L.I.C.Building, Mehadiya Square ,<br> Next to Sule High school, Dhantoli,<br> Nagpur - 440012 (Maharashtra)
                            </p>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="fa fa-phone"></i>
                            <h4>Contact Number </h4>
                            <h3>9372166486</h3>
							 <h3>0712-24368201</h3>
							 <h3>011-40042464</h3>
                            <h3>Toll Free - 18002335112</h3>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <i class="fa fa-envelope-open"></i>
                            <h4>Email</h4>
                            <p>
                                support@zerodiabeticdiet.com<br>admin@zerodiabeticdiet.com
                               
                            </p>
                            <div> Website: <a href="http://www.zerodiabeticdiet.com" target="blank">zerodiabeticdiet.com.</a></div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Top Entry -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area bg-gray text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-items">
                    <div class="col-md-6">
                        <h2>Get in touch with us</h2>
                      
                        <form action="contact.php" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="required">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required="required">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Send Message <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>

 <div class="col-md-6"> <div class="google-maps">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14885.867960587464!2d79.0809003!3d21.133806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0bcce137846cf82!2sAppropriate%20Diet%20Therapy%20Center!5e0!3m2!1sen!2sin!4v1580301550348!5m2!1sen!2sin"  height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- Start Google Maps 
    ============================================= -->
    <!--div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14885.867960587464!2d79.0809003!3d21.133806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd0bcce137846cf82!2sAppropriate%20Diet%20Therapy%20Center!5e0!3m2!1sen!2sin!4v1580301550348!5m2!1sen!2sin"  height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div-->
    <!-- End Google Maps -->

   <?php include("footer_pages.php"); ?>