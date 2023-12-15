 <?php 
    $sqlStore = "SELECT * FROM stores where id = 4";
    $resultStore = mysqli_query($conn, $sqlStore);
    $rowStore = mysqli_fetch_assoc($resultStore);

    $sqlFaq = "SELECT * FROM faqs where status =1 limit 5";
    $resultFaq = mysqli_query($conn, $sqlFaq);  
  ?>
  <div class="container footer_center">
            <div class="row">
                <div class="container footermodule">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 atfooter1">
                            <div class="promo-banner space5">
                                <h4 class="footer-title footer_padding">Company</h4>
                                <hr class="footer_border">
                                <ul class="list-unstyled">
                                    <li><a href="aboutus.php">About Us</a></li>
                                    <li><a href="contactus.php">Locate Us</a></li>
                                    <li><a href="terms_conditions.php">Terms &amp; Conditions</a></li>
                                    <li><a href="support_centre.php">Support Centre</a></li>
                                    <li><a href="customer-testimonials.php">Customer Testimonials</a></li>
                                    <li><a href="http://192.168.0.131/ashtavinayak/public" target="_blank">Admin Login</a></li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5col-sm-5 col-xs-12 atfooter2">
                            <div class="promo-banner space5">
                                <h4 class="footer-title footer_padding">FAQs</h4>
                                <hr class="footer_border">
                                <ul class="list-unstyled">
                                 <?php
                                 if (mysqli_num_rows($resultFaq) > 0) {
                                // output data of each row
                                 while($rowfaq = mysqli_fetch_assoc($resultFaq)) {
                                ?>    
                                <li><a href="faqs.php"><?php echo ucwords($rowfaq['title']);?></a></li>
                                <?php } } ?>
                                </ul>
                            </div>
                        </div>
                        <!--div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 atfooter3">
                            <div class="promo-banner space5">
                                <h4 class="footer-title footer_padding">Useful Links</h4>
                                <hr class="footer_border">
                                <ul class="list-unstyled">
                                    <li><a href="javascript:void(0)">Gift Cards</a></li>
                                    <li><a href="javascript:void(0)">Size Chart</a></li>
                                    <li><a href="javascript:void(0)">Our Locations</a></li>
                                </ul>
                            </div>
                        </div-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 atfooter4">
                            <div class="promo-banner space5">
                                <h4 class="footer-title footer_padding">Connect With Us</h4>
                                <hr class="footer_border">
                                <div class="contact_footer">
                                    <div class="footer_icon">
                                        <a target="_blank" href="https://www.facebook.com/Ashtavinayak-Gold-446704202488721/?modal=admin_todo_tour"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a target="_blank" href="https://www.twitter.com"/><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a target="_blank" href="https://www.instagram.com/ashtavinayakgold.media/">
                                            <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="contact_footer">
                                    <div class="footer_icon">
                                        <div><i class="fa fa-paper-plane" aria-hidden="true"></i><?php echo $rowStore['address'];?></div>
                                        <div><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $rowStore['email'];?>"><?php echo $rowStore['email'];?></a></div>
                                        <div><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+91 <?php echo $rowStore['contact'];?>">+91 <?php echo $rowStore['contact'];?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer_bottom_outer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footerbottom_link">
                       
                            <div class="copyright">
                            <p> &copy; <?php echo date("Y"); ?> <a style="color:#fdbe9f;" href="http://findingpi.com/" target="blank" > FindingPi </a> | All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       
                    </div>
                </div>
            </div>
        </div>