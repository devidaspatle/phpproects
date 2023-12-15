<?php
  error_reporting(0);
    include("includes/db_config.php");
 
    $resultCentres = mysqli_query($con, "SELECT * FROM centres  order by centre_name asc");
 ?>

   <?php include("header.php"); ?>
        <div class="banner-area">
            <div id="bootcarousel" class="carousel inc-top-heading slide carousel-fade animate_text" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner text-light carousel-zoom">

                    <div class="item">
                        <div class="slider-thumb bg-cover" style="background-image: url(images/1202.jpg);"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h4 data-animation="animated fadeInUp" class="">Best Service Good health</h4>
                                                <h1 data-animation="animated fadeInDown" class="">Best care for your <span>health</span></h1>
                                                <p data-animation="animated slideInUp" class="">
                                                    The ourselves suffering the sincerity. Inhabit her manners adapted age certain.
                                                    <br> Debating offended at branched striking be subjects.
                                                </p>
                                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="slider-thumb bg-cover" style="background-image: url(images/23.jpg);"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                                  
                                            <div class="content">
                                                <h4 data-animation="animated fadeInUp" class="">Best Service Good health</h4>
                                                <h1 data-animation="animated fadeInDown" class="">Dr. S Kumar well known  <span>Scientists</span> & Nutritionist</h1>
                                                <p data-animation="animated slideInUp" class="">
                                                    <br> who treated more than 50000 patients successfully.
                                                </p>
                                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-thumb bg-cover" style="background-image: url(images/3.jpg);"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h4 data-animation="animated fadeInUp" class="animated fadeInUp">Best Service Good health</h4>
                                                <h1 data-animation="animated fadeInDown" class="animated fadeInDown">24 hours <span>emergency</span> services</h1>
                                                <p data-animation="animated slideInUp" class="animated slideInUp">
                                                    The ourselves suffering the sincerity. Inhabit her manners adapted age certain.
                                                    <br> Debating offended at branched striking be subjects.
                                                </p>
                                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md animated slideInUp" href="#">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End Wrapper for slides -->

                <!-- Left and right controls -->
                <a class="left carousel-control shadow" href="#bootcarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control shadow" href="#bootcarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="features-area default-padding bg-gray">
            <div class="container">
                <div class="row">
                    <div role="form" class="wpcf7" id="wpcf7-f203-p196-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="appointment_code.php" method="post" class="wpcf7-form">
                           
                            <div class="col-md-6 appoinment">
                                <div class="appoinment-box">
                                    <div class="heading">
                                      
                                        <h2>Ask for Return call</h2>
                                        <p></p>
                                    </div>
                                    <div>
                                        <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <select id="centre_id" name="centre_id" class="form-control" required  style="height: 50px;" >

                                                <option value="">Select Centre Name</option>

                                                 <?php  while($rowCentre = mysqli_fetch_array($resultCentres))

                                                 {

                                                ?>

                                                <option value="<?php echo $rowCentre['id'];?>">

                                                    <?php echo $rowCentre['centre_name'];?></option>    

                                                <?php }?>

                                            </select> 
                                                </div>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap Name"><input type="text" 
                                                        name="first-name" value="" size="40" class="form-control" id="f-name" placeholder="Full Name"  required="required"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap l-lname"><input type="email" name="patient_date" value="" size="40" class="form-control" id="l-lname"  placeholder="Email Id" required="required"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap Phone"><input type="text" name="mobile_number" value="" size="40" class="form-control" id="phone"  placeholder="Phone" required="required"></span>
                                                </div>
                                            </div>
                                         
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap Male">
                                                        <select name="gender" class="form-control" style="height: 50px;" >
                                                            <option value="">Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Other">Other</option></select>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <span class="wpcf7-form-control-wrap Male">
                                                    <input type="text" name="age" value="" size="4" class="form-control" id="age" placeholder="Age" required="required">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group comments">
                                            <span class="wpcf7-form-control-wrap comments"><textarea name="comments" cols="40" rows="3" class="form-control" id="comments" aria-invalid="false" placeholder="Your Diagnosis *" required="required"></textarea></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" name="submit" class="wpcf7-form-control wpcf7-submit" id="submit"><span class="ajax-loader"></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>

            <div id="features" class="col-md-6 features-items">
                <img src="images/drskumar.jpg">
            </div>

        </div>
    </div>

    <div class="chose-us-area item-half">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="heading">
                        <h2><br>Why Chose us</h2>
                        <p style="text-align: justify;">
                           I am Dr.Kumar. Basically I brought this first time in India—diet as a therapy, and the title goes as appropriate diet therapy centers. We got our main office at Dadar and along with that we got about 18 centers across India. This is basically, we are seeing for years together people are suffering from most of the metabolic disorders and for that we are trying allopath, homoeopath, ayurveda, but still we are not fining any solution for acidity. So we are seeing, because it is not a disease, then it has something related to the cell, because as you know the cell become a tissue, tissue become an organ, organ becomes a system, and system becomes a body, so basically it is a degeneration at the cellular level.</p>
                           <p style="text-align: justify;">So what we are trying to do with our diet therapy we are changing the diet in a scientific manner because the diet we take in India is basically a cultural diet , emotional diet, traditional diet. But our body works on a scientific principal of the PH which is basically an alkaline PH. But unfortunatelhy the food we take in India are acidic in nature. And they are responsible for destruction at the cellular level. So by changing diet we stop further damage at organic level and then we try to revive those cells by giving very specific ingredients derived from the food and that’s why we are able to find a solution.</p>
                    </div>


                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div id="testimonials" class="testimonials-area carousel-shadow bg-gray default-padding">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Patient <span>Testimonials</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme owl-loaded owl-drag">

                        <!-- Single Item -->

                        <!-- Single Item -->

                        <!-- Single Item -->

                        <!-- End Single Item -->
                        <div class="owl-stage-outer"
                         <div class="owl-stage" style="transform: translate3d( 0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1755px;">

                            <?php 
                        $i=1;

                    $resultTestimonials = mysqli_query($con, "SELECT * FROM  testimonials  order by id desc");
                        $totalTestimonials =mysqli_num_rows($resultTestimonials);
   
                        while($rowTestimonials = mysqli_fetch_array($resultTestimonials)) { 
                         ?>
                                <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                    <div class="item">
                                        <div class="content">
                                           <?php echo substr($rowTestimonials['description'], 0,250);?>
                                           
                                        </div>
                                        <div class="provider">
                                            <div class="thumb">
                                                <img src="testimonials/<?php echo $rowTestimonials['image'];?>" alt="Thumb">
                                            </div>
                                            <div class="info">
                                                <h4><?php echo ucfirst($rowTestimonials['name']);?></h4>
                                                <h5><?php echo ucfirst($rowTestimonials['title']);?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                               
                        </div>
                        <div class="owl-nav">
                            <div class="owl-prev"><i class="fa fa-angle-left"></i></div>
                            <div class="owl-next disabled"><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <div class="newsletter-area default-padding shadow dark bg-fixed text-center text-light" style="background-image: url(images/7-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Subscribe For Get Update</h4>
                    <h2>Let’s Find An Office Near You.</h2>
                    <div role="form" class="wpcf7" id="wpcf7-f42-p6-o2" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="#wpcf7-f42-p6-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="42">
                                <input type="hidden" name="_wpcf7_version" value="5.0.2">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f42-p6-o2">
                                <input type="hidden" name="_wpcf7_container_post" value="6">
                            </div>
                            <div>
                                <div class="input-group stylish-input-group">
                                    <span class="wpcf7-form-control-wrap Email"><input type="email" name="Email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter your e-mail here"></span>
                                    <button type="submit"><i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <?php include("footer.php"); ?>