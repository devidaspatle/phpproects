<?php
   include("includes/config.php");
    error_reporting(0);
    $subcatid = $_GET['subcatid'];
    $sqlsubcat = "SELECT * FROM subcategories where id ='$subcatid' and type_menu='2'";
    $resultsubcat = mysqli_query($conn, $sqlsubcat);
    $rowsubcats = mysqli_fetch_assoc($resultsubcat);

    $catsid = $rowsubcats['categoryid'];
    $sqlcat = "SELECT * FROM categories where id ='$catsid' and type_menu='2'";
    $resultcat = mysqli_query($conn, $sqlcat);
    $rowcats = mysqli_fetch_assoc($resultcat);
?>
    <!DOCTYPE html>
    <html dir="ltr" lang="en">
    <!--<![endif]-->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- /Added by HTTrack -->

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ashtvinayak Gold: Product Page</title>
        <base />
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
        <link href="catalog/view/javascript/jquery/magnific/magnific-popup.css" type="text/css" rel="stylesheet" media="screen" />
        <link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
        <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
        <link href="indexc21e.html?route=product/product&amp;product_id=34" rel="canonical" />
        <link href="image/catalog/cart.png" rel="icon" />
        <script src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>
        <script src="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <link href="catalog/view/javascript/so_megamenu/so_megamenu.css" rel="stylesheet" type="text/css" />
        <link href="catalog/view/javascript/so_megamenu/wide-grid.css" rel="stylesheet" type="text/css" />
        <script src="catalog/view/javascript/so_megamenu/so_megamenu.js" type="text/javascript"></script>
    </head>

    <body class="product-product-34">
        <div class="header_outer">
        <div class="header">
        <div class="container">
        <?php include "header.blade.php" ?>
         </div>
         </div>
         </div>
       <div class="container">
        <ul class="breadcrumb">
            <li><a href="jewelrythemes/oc04/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
            <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34"><?php echo ucwords($rowcats['category']); ?></a></li>
        </ul>
        <div class="row">
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="list-group">
                    <h3 class="left_box_heading">Categories</h3>

			 <?php
              $sqlcat = "SELECT * FROM categories where id ='$catsid' and type_menu='2'";
                 $resultcat = mysqli_query($conn, $sqlcat);
                if (mysqli_num_rows($resultcat) > 0) {
                while($rowcat = mysqli_fetch_assoc($resultcat)) {
        	 		$catid = $rowcat['id'];
                    $sqlsubcats = "SELECT * FROM subcategories where categoryid ='$catid' and type_menu='2'";
                    $resultsubcats = mysqli_query($conn, $sqlsubcats);
                    $rowsubcates = mysqli_fetch_assoc($resultsubcats);
                    $subcatids = $rowsubcates['id']; 
                    $sqlproducts = "SELECT * FROM products where  type_menu='2' and status =1 and categoryid ='$catid'";
                    $resultproducts = mysqli_query($conn, $sqlproducts);
                    $numproduct =  mysqli_num_rows($resultproducts);

                     $sqlsubproducts = "SELECT * FROM products where  type_menu='2' and status =1 and categoryid ='$catid' and subcategoryid = $subcatids";
                    $resultsubproducts = mysqli_query($conn, $sqlsubproducts);
                    $numsubproduct =  mysqli_num_rows($resultsubproducts);
             ?>
            <a href="#" class="list-group-item active"><?php echo $rowcat['category'];?>(<?php echo $numproduct; ?>)</a>
                      <a href="view_silver_subcategory.php?subcatid=<?php echo $rowsubcates['id'];?>" class="list-group-item">&nbsp;&nbsp;&nbsp;- <?php echo $rowsubcates['subcategory'];?>(<?php echo $numsubproduct; ?>)</a>
              <?php } } ?>
                </div>

                <div id="banner0" class="owl-carousel">
                    <div class="item">
                        <div class="slider-description"></div>
                        <img src="image/263x360-263x360.jpg" />
                       
                    </div>
                </div>
                <script type="text/javascript">
                    <!--
                    $('#banner0').owlCarousel({
                        items: 10,
                        autoPlay: 3000,
                        singleItem: true,
                        navigation: true,
                        pagination: false
                    });
                    -->
                </script>

            </aside>

            <div id="content" class="col-sm-9">
                <h3><?php echo ucwords($rowsubcats['subcategory']); ?></h3>
                <div class="row">
                    <div class="col-sm-12">
                        <p>
                        </p>

                    </div>
                </div>
                <div class="category_bordertop">
                    <h3 class="refine_search f-20">
          Refine Search
        </h3>
                    <div class="row">
                        <div class="">
                            <ul class="category_list">
                                <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34_67"> Consequat (3)</a></li>
                                <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34_69">Etiam (15)</a></li>
                                <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34_70">Etiam nec (1)</a></li>
                                <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34_68">Gire tima pokem (0)</a></li>
                                <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34_38">Nec interdum (1)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="category_filter">
                    <div class="col-md-4 btn-list-grid">
                        <div class="btn-group hidden-xs">
                            <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="
              List">
                                <i class="fa fa-th-list"></i>
                            </button>
                            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="
              Grid">
                                <i class="fa fa-th"></i>
                            </button>
                        </div>
                    </div>
                    <div class="category_limit">
                        <div class="text-left limit_inner">
                            <label class="control-label" for="input-limit">
                                Show:
                            </label>
                        </div>
                        <div class="col-md-2 text-left limit_inner">
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;limit=6" selected="selected">6</option>
                                <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;limit=25">25</option>
                                <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;limit=50">50</option>
                                <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;limit=75">75</option>
                                <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;limit=100">100</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="pagination-right">
                        <div class="text-left limit_inner">
                            <label class="control-label" for="input-sort">
                                Sort By:
                            </label>
                        </div>
                        <div class="col-md-3 text-left limit_inner sort">
                            <select id="input-sort" class="form-control" onchange="location = this.value;">
                                < <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                    <option value="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
  			<?php
                $sqlproduct = "SELECT * FROM products where subcategoryid ='$subcatid' and type_menu='2'";
                $resultproduct = mysqli_query($conn, $sqlproduct);
                if (mysqli_num_rows($resultproduct) > 0) {
                while($rowproducts = mysqli_fetch_assoc($resultproduct)) {
             ?>

                    <div class="product-layout product-list col-xs-12">
                        <div class="product-thumb">
                            <div class="image product-image">
                                <a href="view_product.php?productid=<?php echo $rowproducts['id'];?>&subcat=<?php echo $subcatid;?>"><img src="admin_panel/product/<?php echo $rowproducts['image'];?>" alt="<?php echo $rowproducts['product_name'];?>" title="<?php echo $rowproducts['product_name'];?>" class="img-responsive" style="width: 250px; height: 225px;border:1px solid #f6d7c3; text-align: center;"/></a>
                            </div>
                            <div>
                                <div class="caption">
                                    <h5>
                    <a href="view_product.php?productid=<?php echo $rowproducts['id'];?>&subcat=<?php echo $subcatid;?>"><?php echo $rowproducts['product_name'];?></a>
                  </h5>
                                    <p class="desc">
                                       <?php echo $rowproducts['description'];?>
                                    </p>
                                    <p class="price">
                                        <span class="price-new">
                      &#8377;90.00
                    </span>
                                        <span class="price-old">
                     &#8377;100.00
                    </span>
                                        <span class="price-tax">
                      Ex Tax: &#8377;90.00
                    </span>
                                    </p>
                                 
                                </div>
                              
                            </div>
                        </div>
                    </div>

 				<?php } } ?>

               </div>
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <ul class="pagination">
                            <li class="active"><span>1</span></li>
                            <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;page=2">2</a></li>
                            <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;page=3">3</a></li>
                            <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;page=4">4</a></li>
                            <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;page=2">&gt;</a></li>
                            <li><a href="jewelrythemes/oc04/index.php?route=product/category&amp;path=34&amp;page=4">&gt;|</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-right">Showing 1 to 6 of 20 (4 Pages)</div>
                </div>
            </div>
        </div>
    </div>
    <footer>
            <?php include "footer.blade.php" ?>
        </footer>
</body>

</html>