<div class="row">
    <div class="col-md-2 at-text-center">
        <div id="logo">
            <a href="index.php"><img src="image/catalog/Data/logo.png" title="CIVIFLORA" alt="CIVIFLORA" class="img-responsive" /></a>
        </div>
    </div>
    <div class="col-md-10">
        <div class="megamenu">
            <div class="responsive">

                <nav class="navbar-default">
                    <div class=" container-megamenu   horizontal ">
                        <div class="navbar-header">
                            <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="megamenu-wrapper">
                            <span id="remove-megamenu" class="fa fa-times"></span>
                            <div class="megamenu-pattern">
                                <div class="container">
                                    <ul class="megamenu" data-transition="slide" data-animationtime="500">
                                        <li class="home">
                                            <a href="index.php">
                                                <span><strong>   Home   </strong></span>
                                            </a>
                                        </li>
                                        <li class="with-sub-menu hover">
                                            <p class='close-menu'></p>
                                            <a href="#" class="clearfix">
                                                <strong>
                                                Gold
                                            </strong>
                                               <b class='caret'></b>
                                            </a>
                                            <div class="sub-menu" style="width: 100%;">
                                                <div class="content">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="categories ">
                                                                <div class="row">
                                                                  
                                                                  <?php 
                                                                        $sql = "SELECT * FROM categories where type_menu = 1";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                            // output data of each row
                                                                            while($rowCategory = mysqli_fetch_assoc($result)) {
                                                                                ?>
                                                                        <div class="col-sm-6 static-menu">
                                                                        <div class="menu">
                                                                            <ul>
                                                                               <li><a href="#" onclick="window.location = '#'" class="main-menu"><?php echo $rowCategory['category'];?></a>
                                                                    <?php
                                                                    $catid = $rowCategory['id'];
                                                                    $sqlsub = "SELECT * FROM subcategories where categoryid='$catid'";
                                                                    $resultsub = mysqli_query($conn, $sqlsub);
                                                                        if (mysqli_num_rows($result) > 0) {
                                                                       while( $rowSubcategory = mysqli_fetch_assoc($resultsub))
                                                                          {
                                                                            ?>
                                                                            <ul>
                                                                                <li><a href="view_subcategory.php?subcat=<?php echo $rowSubcategory['id']; ?>" onclick="window.location = '#';"><?php echo $rowSubcategory['subcategory']; ?></a></li>
                                                                            </ul>
                                                                              <?php } }?>      
                                                                                </li>
                                                                          
                                                                            </ul>
                                                                        </div>
                                                                    </div>
  <?php }  } $rowCategory?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class=" with-sub-menu hover">
                                            <p class='close-menu'></p>
                                            <a href="#" class="clearfix">
                                                <strong>
                                                Silver
                                            </strong>

                                                <b class='caret'></b>
                                            </a>
                                            <div class="sub-menu" style="width: 100%">
                                                <div class="content">
                                                     <div class="row">
                                                        <div class="col-sm-12">
                                                            <?php
                                                             $sqlsilver = "SELECT * FROM subcategories where type_menu = 2 limit 6";
                                                                 $resultsilver = mysqli_query($conn, $sqlsilver);
                                                                if (mysqli_num_rows($resultsilver) > 0) {
                                                                    // output data of each row
                                                                while($rowCategorysilver = mysqli_fetch_assoc($resultsilver)) {
                                                             ?>
                                                            <div class="col-sm-2 ">
                                                                <div class="product-thumb">
                                                                    <div class="image">
                                                                        <a href="view_silver_subcategory.php?subcatid=<?php echo $rowCategorysilver['id']; ?>">
                                                            <img src="../public/subcategory/<?php echo $rowCategorysilver['image'];?>" alt="<?php echo $rowCategorysilver['subcategory'];?>" title="<?php echo $rowCategorysilver['subcategory'];?>" class="img-responsive" style="width: 150px;height: 120px" />
                                                                        </a>
                                                                    </div>
                                                                    <div>
                                                                        <div class="caption">
                                                                            <h4><a href="view_silver_subcategory.php?subcatid=<?php echo $rowCategorysilver['id']; ?>"><?php echo $rowCategorysilver['subcategory'];?></a></h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } }?>

                                                        </div>
                                                    </div>
                                                      <div class="border"></div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="link ">
                                                                <img src="image/catalog/Data/promo-2.png" alt="" style="width: 100%;">

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="link ">
                                                                <img src="image/catalog/Data/promo-1.png" alt="" style="width: 100%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                  
                                                   
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="investment.php">
                                                <span><strong>Investment</strong></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="categories.php">
                                                <span><strong>Categories</strong></span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="aboutus.php">
                                                <span><strong>About Us</strong></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contactus.php">
                                                <span><strong>Contact Us</strong></span>
                                            </a>
                                        </li>
                                        <li  class=" with-sub-menu hover">
                                            <a href="contactus.php">
                                                <span><strong>Gold Rate</strong></span>
                                            </a>
                                         <div class="sub-menu" style="width: 200px; padding-left: 700px;">
                                <div class="content" style="width: 200px">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="html ">
                                               
                                                <ul class="row-list f-menu" style="font-size: 14px;">
                                                     <?php
                                    $sqlgoldrate = "SELECT * FROM goldrates";
                                    $resultrate = mysqli_query($conn, $sqlgoldrate);
                                    if (mysqli_num_rows($resultrate) > 0) { 
                                     while($rowrate = mysqli_fetch_assoc($resultrate)) {
                                ?>
                                                    <li><?php echo $rowrate['gold_rate'];?>(Carat-<?php echo $rowrate['carat'];?>)</li>
                                                   <?php } } ?>  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

        </div>

        <script>
            $(document).ready(function() {
                $('a[href="http://opencart.multipurposethemes.com/jewelrythemes/oc04/"]').each(function() {
                    $(this).parents('.with-sub-menu').addClass('sub-active');
                });
            });
        </script>

    </div>
</div>
