   <?php include("header.php"); ?>
        
    <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Login</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


        <div class="features-area default-padding bg-gray">
            <div class="container">
                <div class="row">

                    <div role="form" class="wpcf7" id="wpcf7-f203-p196-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                          <div class="col-md-3 appoinment">&nbsp;</div>
                        <form action="login_code.php" method="post" class="wpcf7-form">
                           
                            <div class="col-md-6 appoinment">
                                <div class="appoinment-box">
                            <div style="color:#FF0000"><?php 
                              error_reporting(0);
                              $msg = $_GET['msg'];
                                if($msg=='error')
                                {
                                  echo "The username or password you entered is incorrect";
                                }
                                
                            ?></div>
                                    <div class="heading">
                                        <h4>Online Login</h4>
                                        <h2>Login</h2>
                                        <p></p>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap Name"><input type="text" 
                                                        name="mobile" value="" size="40" class="form-control" id="f-name" placeholder="Mobile Number"  required="required"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <span class="wpcf7-form-control-wrap l-lname"><input type="password" name="password" value="" size="40" class="form-control" id="l-lname"  placeholder="Password" required="required"></span>
                                                </div>
                                            </div>
                                          
                                          
                                       <input type="hidden" name="addLogin" id="addLogin" value="addLogin">
                                  
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

            
        </div>
    </div>
    </div>

   

   <?php include("footer_pages.php"); ?>