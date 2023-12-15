<?php
    error_reporting(0);
    include("includes/config.php");
    if( isset($_POST['submit'])) {

        $subject = "Enquiry for  jewellery";
        $text="\r\n <br><strong>Name : </strong>".$_POST['name']."\r\n ".
        "\r\n <br><strong>Contact Numbers : </strong>".$_POST['contact_number']."\r\n ".
            "\r\n <br><strong>Emial ID :</strong>".$_POST['email']."\r\n ".
            "\r\n <br><strong>Message: :</strong>".$_POST['message']."\r\n ";

            $msg = "<b>".$subject."</b><br>\r\n". $text;
        
            $to = "devidas.patle@findingpi.com, devidas.patle@gmail.com"; //, 
            $headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
            
            $bound_text =   "Ashtavinayak Gold";
            $bound =    "--".$bound_text."\r\n";
            $bound_last =   "--".$bound_text."--\r\n";
                             
            $headers = "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
            // defining header for mail (MIME type, boundries)
            $headers .= "MIME-Version: 1.0\r\n"
                ."Content-Type: multipart/mixed; boundary=\"$bound_text\"\r\n";
        #       ."Location: thanks.html";
            $message="";
            $message .= $bound; //defining teh boundries
                 
            $message .="Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
                ."Content-Transfer-Encoding: 7bit\r\n"
                .$msg
                ."<br>\r\n"
                .$bound;
            $message .=     "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
                ."Content-Transfer-Encoding: 7bit\r\n"
                .$bound_last; 
            //echo $message;
            
            //sending the mail
            //$issend=mail($to, $subject, $message, $headers);  
            if(mail($to, $subject, $message, $headers))
            {
            
                //$msg="Thank you for contacting Ashtavinayak Gold.!<br>
//We shall revert to you soon";
            //}else{
                //$msg="There is some problem, Please Try Again Letter! ";
            //} 
    }
    
   header("Location: thanks_page.php");  
   
    //else{ header("Location: contact.php");}
}

    $sqlStore = "SELECT * FROM stores where id = 4";
    $resultStore = mysqli_query($conn, $sqlStore);
    $rowStore = mysqli_fetch_assoc($resultStore);
 
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ashtvinayak Gold: Support Centre </title>
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

   <style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.containers {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<script type="text/javascript" language="javascript" >
function validate()
{
var regexNum = /\d/;
var regexLetter = /[a-zA-z]/;
//alert('hi');
var name=document.getElementById('name').value;
var contact_number=document.getElementById('contact_number').value;
var email=document.getElementById('email').value;
var message=document.getElementById('message').value;

if(name=="")
{
alert("Please Enter  Name !");
document.getElementById('name').focus();
return false;
}
if(regexNum.test(name) || !regexLetter.test(name))
{
alert('Type character only');
document.getElementById('name').focus();
return false();
}


if ((contact_number==null)||(contact_number=="")){
        
        alert("Please enter contact number!");
        document.getElementById('contact_number').focus();
        return false;
    }
    

if(isNaN(contact_number)||mobile.indexOf(" ")!=-1)
{
alert("Enter numeric value");
document.getElementById('contact_number').focus();
return false;
}   


if (contact_number.length<10 || contact_number.length >10 )
{
alert("Please enter valid contact number ! ");
    document.getElementById('contact_number').focus();
    return false;
}

if(message=="")
{
alert("Please Enter Enquiry Message");
document.getElementById('message').focus();
return false;
}

//////////mob_indul//////

return true;
}
</script>
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
                    <h3>Support Centre</h3>	
                     <center>
                         <div style="border:1px solid #fdbe9f;width:230px;margin-bottom: 2px;"></div>
                    </center>
                    <center>
                        <div style="border:1px solid #fdbe9f;width:230px;margin-bottom: 2px;"></div>
                    </center>        
                  <div style="height:5px;" class="clearfix"></div>			
            </div>
         <div style="height:10px;"></div>

            <div class="container page-builder-ltr">
                 <div class="col-md-12  style="text-align: justify;">
                 <div class="col-md-4" style="text-align: left;">
                 <h4>Rajasthan</h4>
                 <div class="footer_icon">
                    <div><i class="fa fa-paper-plane" aria-hidden="true"></i> <?php echo $rowStore['address'];?></div>
                    <div><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $rowStore['email'];?>"><?php echo $rowStore['email'];?></a></div>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:+<?php echo $rowStore['contact'];?>">+91 <?php echo $rowStore['contact'];?></a>
                    </div>
                    
                </div>
                </div>
                 <div class="col-md-8"  style="text-align: left;">
                   
                <div>
                  <form action="" method="post" onsubmit="return validate(this.value);">
                    <label for="fname">Full Name<span style="color:red">*</span>:</label>
                    <input type="text" id="name" name="name" placeholder="Your name..">

                    <label for="lname">Contact Number<span style="color:red">*</span>:</label>
                    <input type="text" id="contact_number" name="contact_number" placeholder="Contact Number..">

                     <label for="lname">Email address:</label>
                    <input type="text" id="email" name="FromEmailAddress" placeholder="Email address..">

                    <label for="subject">Message<span style="color:red">*</span>:</label>
                    <textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>

                    <input type="submit" value="Submit" name="submit">
                  </form>
                </div>
                 </div>  
                    <br><br>
                 </div>
 
            </div>
        </div>
      
<div style="height:15px;" class="clearfix"></div>
        <!--Newsletter area start-->
     
        </div>

            </div>
      

        <!--Newsletter area start-->

    </div>

    <footer>
     <?php include "footer.blade.php" ?>
    </footer>

</body>

</html>