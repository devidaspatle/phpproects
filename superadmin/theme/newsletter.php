<?php
error_reporting(0); 
$message = $_GET['msg'];

if($message=='success')
{
?>
<div class="col-md-12" style="text-align: center; color: green"><?php echo "New record created successfully";?></div>
<?php 
}
?>
 <div class="container">
                <div class="row">
                    <div class="col-md-2">&nbsp;</div>
                    <div class="col-md-8">
                        <div class="newsletter_content">
                            <div class="section-title text-center">

                                <div style="height:35px;" class="clearfix">&nbsp;</div>

                                <form action="newsletter_code.php" method="post">
                                    <input placeholder="Enter Your Email Id..." type="email" name="email" required="required" />
                                <button style="background: #000000; color:#fff;" type="submit" name="submit">subscribe </button>
                                </form>

                                <div style="height:5px;" class="clearfix"></div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">&nbsp;</div>
                </div>
            </div>
            <div style="height:10px;" class="clearfix"></div>