<?php
$title = "";
$metadesc = "";
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
$doc_path = $_SERVER['DOCUMENT_ROOT'];
$path = $doc_path."/includes/header.php";
$page_canonical = "https://batcity.com/";
include_once($path);
?>

<body>

<!-- Navigation -->

<?php include_once($doc_path.'/includes/navbar.php'); ?>

    
    <!-- CONTENT -->
    <div id="content-block">             

        <!-- BLOCK-->
        <div class="block padding-top-90 padding-bottom-90">
            <div class="container">
            	<div class="typography text-center simple-article medium color-1 margin-bottom-35">
                	<div>Our <span>Vendors</span></div>
                </div>
                <div class="simple-article font-2 large color-6 text-center">
                    <p>Neque porro quisquam est,
 qui dolorem ipsum quia dolor sit amet,
 consectetur,
 adipisci velit,
 sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam,
 quis nostrum exercitationem ullam corporis suscipit laboriosam,
 nisi ut aliquid ex ea commodi consequatur llam corporis suscipit laboriosam,
 nisi.</p>
                </div>
            </div>
        </div>       

        <!-- TT-SERVICE-POST -->
        <div class="block padding-top-100 padding-bottom-50 lgrey">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.aakronline.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="/assets/img/vendors/akron.png" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Aakron</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.admints.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Admints & Zagabor</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.adnart.com/US/products.html" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">AdNArt</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.4logowearables.com/batcity" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Alphabroder</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.americanzebra.com/wordpress/#" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">American Zebra Line</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.apspecialties.com/index" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Ap Specialties</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>                                       
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Ariel</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Augusta Sportswear</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Ariel</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Augusta Sportswear</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.bagmakersinc.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Bag Makers</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.beaconpromotions.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Beacon</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>                                       
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.belpromo.com/nd/index.php" target="_blank">Bel Promo</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://www.bentcil.com/" target="_blank">Bentcil</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://online.bicgraphic.com/cs/bg/index" target="_blank">Bic Graphic</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://www.bluegeneration.com/" target="_blank">Blue Generation</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.bagmakersinc.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.brandboxpromos.com/" target="_blank">Brand Box</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.beaconpromotions.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.pcna.com/bullet/en-us/department/products?catpath=bullet-products.1" target="_blank">Bullet Line</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>                                       
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.castellinorthamerica.com/" target="_blank">Castelli</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.cobracap.com/" target="_blank">Cobra Cap</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.customcrest.com/UI/Default.aspx" target="_blank">Custom Crest</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://www.cbcorporate.com/corp/default.asp" target="_blank">Cutter & Buck</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.bagmakersinc.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.drum-line.com/" target="_blank">Drum Line</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.beaconpromotions.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://etsexpress.com/cataloghome.php" target="_blank">ETS Express</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>                                       
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="#" target="_blank">Ariel</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://www.evans-mfg.com/" target="_blank">Evans</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.arielpremium.com/product-categories/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://www.gemline.com/" target="_blank">Gemline</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.augustasportswear.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://www.gill-line.com/" target="_blank">Gill Line</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.bagmakersinc.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="https://www.glassamerica.com/#!/" target="_blank">Glass America</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="tt-service-post margin-bottom-45">
                            <a class="tt-service-post-img border-image-2" href="http://www.beaconpromotions.com/" target="_blank">
                                <span>
                                    <img class="img-responsive" src="https://unsplash.it/370/221" alt="">
                                </span>
                            </a> 
                            <a class="tt-service-post-link" href="http://glassplax.com/" target="_blank">Glassplax</a>
                            <div class="simple-article font-2 middle color-6">
                            </div>                           
                        </div>
                    </div>                                       
                </div>                   
            </div>
        </div>

        <!-- BLOCK --
        <div class="block padding-top-80  padding-bottom-55 overlay-3" style="background: url(/assets/img/banner-bg-9.jpg) no-repeat; background-size: cover; background-position: center center;">
            <div class="container">
                <h3 class="title-2 size-2 color-2 text-center margin-bottom-30">Custom Products for your Special Occasion</h3>
                <div class="simple-article font-2 xlarge color-5 text-center margin-bottom-25">
                    <p><i>Neque porro quisquam est,
 qui dolorem ipsum quia dolor sit amet,
 consectetur,
 adipisci velit,
 sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima</i></p>
                </div>
                <div class="text-center">
                    <a class="button size-3 font-2 color-1 style-1 radius-1" href="#" target="_blank">CHECKOUT CATEGORY</a>
                </div>           
            </div>
        </div-->

        <!-- TT-FEATURE --
        <div class="block padding-top-95 padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h3 class="title-3 type-2 margin-bottom-35">Our Featured Services</h3>
                        <div class="simple-article font-2 large color-6 text-center margin-bottom-70">
                            <p>Neque porro quisquam est,
                             qui dolorem ipsum quia dolor sit amet,
                             consectetur,
                             adipisci velit,
                             sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        </div>

                        <div class="tt-feature margin-bottom-50">
                            <div class="tt-feature-img background-block" style="background-image:url(/assets/img/feature-1.jpg);"></div>
                            <div class="tt-feature-inner">
                                <a class="tt-feature-link" href="#" target="_blank">Service 1</a>
                                <div class="simple-article font-2 middle color-6">
                                    </div>
                            </div>
                        </div>

                        <div class="tt-feature margin-bottom-50">
                            <div class="tt-feature-img background-block" style="background-image:url(/assets/img/feature-2.jpg);"></div>
                            <div class="tt-feature-inner">
                                <a class="tt-feature-link" href="#" target="_blank">Service 2</a>
                                <div class="simple-article font-2 middle color-6">
                                    </div>
                            </div>
                        </div>

                        <div class="tt-feature">
                            <div class="tt-feature-img background-block" style="background-image:url(/assets/img/feature-3.jpg);"></div>
                            <div class="tt-feature-inner">
                                <a class="tt-feature-link" href="#" target="_blank">Service 3</a>
                                <div class="simple-article font-2 middle color-6">
                                    </div>
                            </div>
                        </div>                                                
                    </div>
                </div>
            </div>
        </div-->


<?php include_once($doc_path.'/includes/footer.php'); ?>
