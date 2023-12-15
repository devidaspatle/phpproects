<?php
include("includes/config.php");
    error_reporting(0);
    $productid = $_GET['productid'];
    $subcatid = $_GET['subcat'];
 	$sqlsubcat = "SELECT * FROM subcategories where id ='$subcatid'";
    $resultsubcat = mysqli_query($conn, $sqlsubcat);
    $rowcats = mysqli_fetch_assoc($resultsubcat);

    $sqlproduct = "SELECT * FROM products where id ='$productid'";
    $resultproduct = mysqli_query($conn, $sqlproduct);
    $rowproducts = mysqli_fetch_assoc($resultproduct);
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
        <div class="container">
            <?php include "header.blade.php" ?>
        </div>
        <div style="height:20px;"></div>
        <div class="container">

            <div class="product_title">

                <h3><?php echo $rowproducts['product_name'];?></h3>

                <ul class="breadcrumb product_page">

                    <li>
                        <a href="index9328.html?route=common/home">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                  Womens
                </a>
                    </li>

                    <li>
                        <a href="#">
                   <?php echo $rowcat['subcategory'];?>
                </a>
                    </li>

                    <li>
                        <a href="#">
                  <?php echo $rowproducts['product_name'];?>
                </a>
                    </li>

                </ul>

            </div>

            <div class="row">

                <div id="content" class="col-sm-9">

                    <div class="row">

                        <div class="col-sm-6 product_left">

                            <div class="thumbnails">

                                <div><a class="thumbnail" href="../public/product/<?php echo $rowproducts['image'];?>" title="Etiam nec interdum"><img src="../public/product/<?php echo $rowproducts['image'];?>" title="<?php echo $rowproducts['category'];?>" alt="<?php echo $rowproducts['category'];?>" id="atzoom" data-zoom-image="../public/product/<?php echo $rowproducts['image'];?>"/></a>
                                </div>

                                <div class="image_additional_outer">

                                    <div id="additional-images" class="owl-carousel owl-theme">

                                            <div class="image-additional item">
                                                <a class="thumbnail elevatezoom-gallery" href="../public/products/<?php echo $rowproducts['image'];?>" title="<?php echo $rowproducts['product_name'];?>" data-zoom-image="../public/products/<?php echo $rowproducts['image'];?>" data-image="../public/products/<?php echo $rowproducts['image'];?>"> 
	 <img src="../public/product/<?php echo $rowproducts['image'];?>" title="<?php echo $rowproducts['product_name'];?>" alt="<?php echo $rowproducts['product_name'];?>"  /> </a>
                                            </div>
                                           

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-sm-6 product_center">

                            <!--  <h2>Etiam nec interdum></h2>-->

                            <ul class="list-unstyled price_section">

                                <li>

                                    <h2 class="price_section_inner">100.00</h2>

                                </li>

                                <li>
                                    Ex Tax: 100.00
                                </li>

                            </ul>

                            <div class="rating rating_border">

                                <p>

                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>

                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>

                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>

                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>

                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>

                                    <a class="review-count review_tag" href="#" onclick="('a[href=\'#tab-review\']').trigger('click'); return false;">
                                0 reviews
                            </a> |
                                    <a class="write-review" href="#" onclick="('a[href=\'#tab-review\']').trigger('click'); return false;">
                                Write a review
                            </a>
                                </p>

                            </div>

                            <ul class="list-unstyled">

                                <li>
                                    Brand:
                                    <a href="#">
                                Ashtavinayak Gold
                            </a>
                                </li>

                                <li>
                                    Product Code: Product 7
                                </li>

                                <li>
                                    Availability:
                                    <i class="fa fa-check-square-o"></i> In Stock
                                </li>

                            </ul>

                            <div id="product">

                                <a class="sizechart" href="#">Size Chart</a>

                                <div class="alert alert-info"><i class="fa fa-info-circle"></i> This product has a minimum quantity of 1
                                </div>

                            </div>

                            <!-- AddThis Button BEGIN -->

                            <div class="addthis_inline_share_toolbox"></div>

                        </div>

                    </div>

                </div>

                <!--right column-->

                <aside id="column-right" class="col-sm-3 hidden-xs">
                    <div class="container htmlmodule">
                        <div class="row">
                            <div class="pro_static_content_main">
                                <div class="pro_cms_img"><img src="image/catalog/Data/promo-1.png" style="width:100%;" alt="brand"></div>

                                <div class="pro_static_content">This is a static CMS block edited from theme admin panel.You can insert ant content (text, images, HTML)) here. Lorem ipsum dolor sit amet, consectetur adipiscing elit porta.</div>
                            </div>
                        </div>
                    </div>

                </aside>

                <div class="column_right_outer">

                    <div class="pro_tag">

                    </div>

                </div>

                <div id="tabs_info" class="col-sm-12">

                    <ul class="nav nav-tabs">

                        <li class="active">
                            <a href="#tab-description" data-toggle="tab">
                        Description
                    </a>
                        </li>

                        <li>
                            <a href="#tab-review" data-toggle="tab">
                        Reviews (0)
                    </a>
                        </li>

                    </ul>

                    <div class="tab-content">

                        <div class="tab-pane active" id="tab-description">
                            <?php echo ucfirst($rowproducts['description']);?>
                        </div>

                        <div class="tab-pane" id="tab-review">

                            <form class="form-horizontal" id="form-review">

                                <div id="review"></div>

                                <h2>Write a review</h2>

                                <div class="form-group required">

                                    <div class="col-sm-12">

                                        <label class="control-label" for="input-name">
                                            Your Name
                                        </label>

                                        <input type="text" name="name" value="" id="input-name" class="form-control" />

                                    </div>

                                </div>

                                <div class="form-group required">

                                    <div class="col-sm-12">

                                        <label class="control-label" for="input-review">
                                            Your Review
                                        </label>

                                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>

                                        <div class="text-right"> Review must be between 25 and 1000 characters!</div>

                                        <div class="help-block">
                                            <span class="text-danger">Note:</span> HTML is not translated!
                                        </div>

                                    </div>

                                </div>

                                <div class="form-group required">

                                    <div class="col-sm-12">

                                        <label class="control-label">
                                            Rating
                                        </label>

                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;

                                        <input type="radio" name="rating" value="1" /> &nbsp;

                                        <input type="radio" name="rating" value="2" /> &nbsp;

                                        <input type="radio" name="rating" value="3" /> &nbsp;

                                        <input type="radio" name="rating" value="4" /> &nbsp;

                                        <input type="radio" name="rating" value="5" /> &nbsp; Good
                                    </div>

                                </div>

                                <!--  -->

                                <div class="buttons clearfix">

                                    <div class="pull-right">

                                        <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">
                                            Continue
                                        </button>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="related_product">

                    <div class="box-header">

                        <div class="row">

                            <div class="col-sm-12 col-xs-12">

                                <div class="section-title">

                                    <h1 class="fp_carousel-title">Related Products</h1>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="">

                        <div class="product-item owl-carousel owl-theme" id="related_product">

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="index6320.html?route=product/product&amp;product_id=28">

                                                <img src="image/cache/catalog/Data/product/product-2-700x700.jpg" alt="Bima zuma" title="Bima zuma" class="img-responsive" /></a>

                                        </div>

                                        <div class="caption">

                                            <h5><a href="index6320.html?route=product/product&amp;product_id=28">Bima zuma</a></h5>
                                            <p class="price">
                                                100.00 <span class="price-old">120.00</span>
                                                <span class="price-tax">Ex Tax: 100.00</span>
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="indexf073.html?route=product/product&amp;product_id=30">

                                                <img src="image/cache/catalog/Data/product/product-3-700x700.jpg" alt="Aliquam Consequat" title="Aliquam Consequat" class="img-responsive" /></a>
                                        </div>

                                        <div class="caption">

                                            <h5><a href="indexf073.html?route=product/product&amp;product_id=30">Aliquam Consequat</a></h5>
                                            <p class="price">
                                                <span class="price-new">80.00</span> <span class="price-old">100.00</span>
                                                <span class="price-tax">Ex Tax: 80.00</span>
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="index6a4d.html?route=product/product&amp;product_id=33">

                                                <img src="image/cache/catalog/Data/product/product-1-700x700.jpg" alt="Letraset Sheets" title="Letraset Sheets" class="img-responsive" /></a>
                                        </div>

                                        <div class="caption">

                                            <h5><a href="index6a4d.html?route=product/product&amp;product_id=33">Letraset Sheets</a></h5>

                                            <p class="price">

                                                <span class="price-new">95.00</span> <span class="price-old">200.00</span>

                                                <span class="price-tax">Ex Tax: 95.00</span>

                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="indexfac8.html?route=product/product&amp;product_id=35">

                                                <img src="image/cache/catalog/Data/product/product-4-700x700.jpg" alt="Laborum Com" title="Laborum Com" class="img-responsive" /></a>

                                        </div>

                                        <div class="caption">

                                            <h5><a href="indexfac8.html?route=product/product&amp;product_id=35">Laborum Com</a></h5>

                                            <p class="price">

                                                100.00

                                                <span class="price-tax">Ex Tax: 100.00</span>

                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="indexbb02.html?route=product/product&amp;product_id=42">

                                                <img src="image/cache/catalog/Data/product/product-1-700x700.jpg" alt="Accumsan Elit" title="Accumsan Elit" class="img-responsive" /></a>

                                        </div>

                                        <div class="caption">

                                            <h5><a href="indexbb02.html?route=product/product&amp;product_id=42">Accumsan Elit</a></h5>

                                            <p class="price">

                                                <span class="price-new">90.00</span> <span class="price-old">100.00</span>

                                                <span class="price-tax">Ex Tax: 90.00</span>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="indexd21c.html?route=product/product&amp;product_id=47">

                                                <img src="image/cache/catalog/Data/product/product-5-700x700.jpg" alt="Andouille eu" title="Andouille eu" class="img-responsive" /></a>
                                        </div>

                                        <div class="caption">

                                            <h5><a href="indexd21c.html?route=product/product&amp;product_id=47">Andouille eu</a></h5>

                                            <p class="price">
                                                100.00
                                                <span class="price-tax">Ex Tax: 100.00</span>
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="index3d7a.html?route=product/product&amp;product_id=49">

                                                <img src="image/cache/catalog/Data/product/product-2-700x700.jpg" alt="Laoreet Dolore" title="Laoreet Dolore" class="img-responsive" /></a>
                                        </div>

                                        <div class="caption">

                                            <h5><a href="index3d7a.html?route=product/product&amp;product_id=49">Laoreet Dolore</a></h5>

                                            <p class="price">

                                                199.99

                                                <span class="price-tax">Ex Tax: 199.99</span>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="item">

                                <div class="product-layout">

                                    <div class="product-thumb transition">

                                        <div class="image product-image">
                                            <a href="index75be.html?route=product/product&amp;product_id=50">

                                                <img src="image/cache/catalog/Data/product/product-2-700x700.jpg" alt="Adipiscing Elit" title="Adipiscing Elit" class="img-responsive" /></a>

                                        </div>

                                        <div class="caption">

                                            <h5><a href="index75be.html?route=product/product&amp;product_id=50">Adipiscing Elit</a></h5>

                                            <p class="price">

                                                <span class="price-new">90.00</span> <span class="price-old">100.00</span>

                                                <span class="price-tax">Ex Tax: 90.00</span>

                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!--  -->

            </div>

        </div>

        <script type="text/javascript">
            <!--

            $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {

                $.ajax({

                    url: 'index.php?route=product/product/getRecurringDescription',

                    type: 'post',

                    data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),

                    dataType: 'json',

                    beforeSend: function() {

                        $('#recurring-description').html('');

                    },

                    success: function(json) {

                        $('.alert, .text-danger').remove();

                        if (json['success']) {

                            $('#recurring-description').html(json['success']);

                        }

                    }

                });

            });

            //-->
        </script>

        <script type="text/javascript">
            <!--

            $('.button-cart').on('click', function() {

                $.ajax({

                    url: 'index.php?route=checkout/cart/add',

                    type: 'post',

                    data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),

                    dataType: 'json',

                    beforeSend: function() {

                        $('#button-cart').button('loading');

                    },

                    complete: function() {

                        $('#button-cart').button('reset');

                    },

                    success: function(json) {

                        $('.alert, .text-danger').remove();

                        $('.form-group').removeClass('has-error');

                        if (json['error']) {

                            if (json['error']['option']) {

                                for (i in json['error']['option']) {

                                    var element = $('#input-option' + i.replace('_', '-'));

                                    if (element.parent().hasClass('input-group')) {

                                        element.parent().before('<div class="text-danger">' + json['error']['option'][i] + '</div>');

                                    } else {

                                        element.before('<div class="text-danger">' + json['error']['option'][i] + '</div>');

                                    }

                                }

                            }

                            if (json['error']['recurring']) {

                                $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');

                            }

                            // Highlight any found errors

                            $('.text-danger').parent().addClass('has-error');

                        }

                        if (json['success']) {

                            $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                            $('#cart > button').html('<i class="fa fa-shopping-bag"></i> <span id="cart-total">' + json['total'] + '</span>');

                            $('html, body').animate({
                                scrollTop: 0
                            }, 'slow');

                            $('#cart > ul').load('index1e1c.html?route=common/cart/info%20ul%20li');

                        }

                    },

                    error: function(xhr, ajaxOptions, thrownError) {

                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                    }

                });

            });

            //-->
        </script>

        <script type="text/javascript">
            <!--

            $('.date').datetimepicker({

                pickTime: false

            });

            $('.datetime').datetimepicker({

                pickDate: true,

                pickTime: true

            });

            $('.time').datetimepicker({

                pickDate: false

            });

            $('button[id^=\'button-upload\']').on('click', function() {

                var node = this;

                $('#form-upload').remove();

                $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

                $('#form-upload input[name=\'file\']').trigger('click');

                if (typeof timer != 'undefined') {

                    clearInterval(timer);

                }

                timer = setInterval(function() {

                    if ($('#form-upload input[name=\'file\']').val() != '') {

                        clearInterval(timer);

                        $.ajax({

                            url: 'index.php?route=tool/upload',

                            type: 'post',

                            dataType: 'json',

                            data: new FormData($('#form-upload')[0]),

                            cache: false,

                            contentType: false,

                            processData: false,

                            beforeSend: function() {

                                $(node).button('loading');

                            },

                            complete: function() {

                                $(node).button('reset');

                            },

                            success: function(json) {

                                $('.text-danger').remove();

                                if (json['error']) {

                                    $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');

                                }

                                if (json['success']) {

                                    alert(json['success']);

                                    $(node).parent().find('input').attr('value', json['code']);

                                }

                            },

                            error: function(xhr, ajaxOptions, thrownError) {

                                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);

                            }

                        });

                    }

                }, 500);

            });

            //-->
        </script>

        <script type="text/javascript">
            <!--

            $('#review').delegate('.pagination a', 'click', function(e) {

                e.preventDefault();

                $('#review').fadeOut('slow');

                $('#review').load(this.href);

                $('#review').fadeIn('slow');

            });

            $('#review').load('indexc62b.html?route=product/product/review&amp;product_id=34');

            $('#button-review').on('click', function() {

                $.ajax({

                    url: 'index.php?route=product/product/write&product_id=34',

                    type: 'post',

                    dataType: 'json',

                    data: $("#form-review").serialize(),

                    beforeSend: function() {

                        $('#button-review').button('loading');

                    },

                    complete: function() {

                        $('#button-review').button('reset');

                    },

                    success: function(json) {

                        $('.alert-success, .alert-danger').remove();

                        if (json['error']) {

                            $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');

                        }

                        if (json['success']) {

                            $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                            $('input[name=\'name\']').val('');

                            $('textarea[name=\'text\']').val('');

                            $('input[name=\'rating\']:checked').prop('checked', false);

                        }

                    }

                });

            });

            $(document).ready(function() {

                $('.sizechart').magnificPopup({

                    type: 'image',

                    closeOnContentClick: true,

                    image: {
                        verticalFit: true
                    }

                });

                /*  $('.thumbnails').magnificPopup({

                        type:'image',

                        delegate: 'a',

                        gallery: {

                            enabled:true

                        }

                    });

                }); */

                $("#related_product").owlCarousel({

                    slideSpeed: 500,

                    items: 4,

                    itemsDesktop: [1199, 4],

                    itemsDesktopSmall: [979, 3],

                    itemsTablet: [992, 3],

                    itemsMobile: [767, 2],

                    itemsMobileSmall: [480, 1],

                    autoWidth: true,

                    loop: true,

                    pagination: false,

                    navigation: true,

                    navigationText: [

                        "<i class='fa fa-caret-left'></i>",

                        "<i class='fa fa-caret-right'></i>"

                    ],

                    stopOnHover: true

                });

                $("#additional-images").owlCarousel({

                    navigation: true,

                    pagination: false,

                    navigationText: [

                        "<i class='fa fa-angle-left'></i>",

                        "<i class='fa fa-angle-right'></i>"

                    ],

                    items: 4,

                    itemsDesktop: [1199, 3],

                    itemsDesktopSmall: [979, 3],

                    itemsTablet: [992, 3],

                    itemsMobile: [767, 4],

                    itemsMobileSmall: [480, 3],

                });

                if ($(window).width() > 767) {

                    $("#atzoom").elevateZoom({

                        gallery: 'image_additional_outer',

                        //inner zoom                 

                        zoomType: "inner",

                        cursor: "crosshair"

                        /*//tint

                        tint:true, 

                        tintColour:'#F90', 

                        tintOpacity:0.5

                        //lens zoom

                        zoomType : "lens", 

                        lensShape : "round", 

                        lensSize : 200 

                        //Mousewheel zoom

                        scrollZoom : true*/

                    });

                    var z_index = 0;

                    $(document).on('click', '.thumbnail', function() {

                        $('.thumbnails').magnificPopup('open', z_index);

                        //$('.thumbnails div:first').addClass('zoom-box');

                        return false;

                    });

                    $('.image_additional_outer a').click(function() {

                        var smallImage = $(this).attr('data-image');

                        var largeImage = $(this).attr('data-zoom-image');

                        var ez = $('#atzoom').data('elevateZoom');

                        $('.zoom-box .thumbnail').attr('data-image', largeImage);

                        $(".zoom-box #atzoom").attr("src", smallImage);

                        $(".zoom-box #atzoom").attr("data-zoom-image", smallImage);

                        ez.swaptheimage(smallImage, largeImage);

                        z_index = $(this).index('.image_additional_outer a') + 1;

                        return false;

                    });

                } else {

                    $(document).on('click', '.thumbnail', function() {

                        $('.thumbnails').magnificPopup('open', 0);

                        return false;

                    });

                }

                $('.thumbnails').magnificPopup({

                    delegate: 'a',

                    type: 'image',

                    tLoading: 'Loading image #%curr%...',

                    mainClass: 'mfp-with-zoom',

                    gallery: {

                        enabled: true,

                        navigateByImgClick: true,

                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image

                    },

                    image: {

                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

                        titleSrc: function(item) {

                            return item.el.attr('title');

                        }

                    }

                });

            });

            //-->
        </script>

        <script src="catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>

        <script src="catalog/view/javascript/jquery/jquery.elevatezoom.min.js" type="text/javascript"></script>

        <link href="catalog/view/javascript/jquery/magnific/magnific-popup.css" rel="stylesheet" type="text/css" />

        <footer>
            <?php include "footer.blade.php" ?>
        </footer>
    </body>

    </html>