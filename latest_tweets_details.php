   <?php
    error_reporting(0);
    include("includes/db_config.php");
   
    $serviceid = $_GET['serviceid'];
    $resultServices = mysqli_query($con, "SELECT * FROM services WHERE id = '".$serviceid."'");
    $totalServices =mysqli_num_rows($resultServices);

 ?>
   <?php include("header.php"); ?>
         <div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(images/7-6.jpg);">
   
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Latest Tweets</h1>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Latest Tweets</a></li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div id="services" class="services-area inc-icon bg-gray carousel-shadow default-padding bottom-less">
        <div class="container">
            

            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                    
                    <div class="col-md-12 col-sm-12 equal-height">
                        <div class="item">
                            <div class="info" style="text-align: justify;">
                                <h4>
                                    <a href="#">Knowledge is life and ignorance is death.</a>
                                </h4>
                <div style="text-align: justify;">

                    Prevalence of diabetes in female is 8.4 %, while in male is 9.1%, 1 person is suffering from diabetes in every 11 person in India. Prevalence of diabetes after 75 years is 50 %.
               </br>
                Diabetes is diagnosed when FBS level more than 126 mg/dL, postprandial sugar level more than 200 mg/dL, and HbA1c levels above 5.7 %. Type I diabetes is diagnosed by Fasting C-peptide level if below 0.4 nanograms per milliliter (ng/mL) and fasting insulin below 8 uIU/mL.
                </br>
                In Type II diabetes Fasting C-peptide level and fasting insulin are normal or more. Type II Diabetes is due to Insulin resistance  (high Acidity, inflammatory factor, Obesity, Non-alcoholic fatty liver, Lack of micronutrients, sleep, increase Stress, Excess omega six fatty acid and inadequate omega three fatty acid, Lack of blood circulating & Muscle strengthening exercise, leads to loss of beta cell, beta cell mass and insulin secretion).
                </br>
                Our aim to make India zero diabetic country by educating the people, most of the people are not aware of cause of Diabetes. Type I Diabetes usually diagnosed after six month of life, caused by drinking cow milk, it has Insulin like Growth Factor, which is similar to insulin in composition, and this IGF attach to the DNA of beta cell, and destroy them. It also develops antigen antibodies to insulin, hypersensitivity and allergy leads to destruction of B cell, reduces beta cell mass and insulin secretion. (Cause is autoimmune)
                </br>
                Diabetes patient needs education on diet, lifestyle change and not only medicine. You may realize that there are no essential carbohydrates but there are essential fats (Omega 3) and essential Proteins (Amino acids) 
                </br>
                My humble efforts toward the citizen of India to change their life style, diet to revert diabetes and its complications, prevent Non diabetes from developing Diabetes especially young children. Avoid milk, sugar, packed and process food. There is scientifically proven solution to Diabetes.
                </br>
                Appropriate Diet Therapy </br>
                Nagpur 440012
                </div>
                                
                            </div>
                        </div>
                    </div>
                
                   
                      <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>


   <?php include("footer_pages.php"); ?>