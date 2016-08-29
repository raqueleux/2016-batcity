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

    	<!-- title -->
    	<div class="block padding-top-50">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 col-md-push-3">
	    				<div class="typography simple-article text-center medium color-1 margin-bottom-65">
	    					<div class="title">Signage</div>
	    					<p>There are many variations of passages of Lorem Ipsum available,
 but the majority have suffered alteration in some form by injected.</p>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <!--  -->
	    <!-- products and sidebar -->
	    <div class="block padding-bottom-70">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<div class="row nopadding">
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/banners/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/banners/" class="h6 prod-title">Banners</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/castings/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/castings/" class="h6 prod-title">Castings</a>
		    					</div>
		    				</div>
                            <div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/glass-expressions/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/glass-expressions/" class="h6 prod-title">Glass Expressions</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/magnesium/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/magnesium/" class="h6 prod-title">Magnesium</a>
		    					</div>
		    				</div>
			    		</div>
			    		<div class="row nopadding">
                        	<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/metal-etched-plaques/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/metal-etched-plaques/" class="h6 prod-title">Metal Etched Plaques</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/metal-letters/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/metal-letters/" class="h6 prod-title">Metal Letters</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/yard-signs/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/yard-signs/" class="h6 prod-title">Yard Signs</a>
		    					</div>
		    				</div>
                            <div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="/signage/zinc/"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="/signage/zinc/" class="h6 prod-title">Zinc</a>
		    					</div>
		    				</div>
			    		</div>
	    			</div>
                   
	    			<div class="clearfix"></div>
	    			<!--div class="col-md-10 col-md-push-1">
	    				<div class="page-pagination">
							<a href="#" class="prew button color-1 style-1">prew page</a>
							<a href="#" target="_blank">1</a>
							<a href="#" target="_blank">2</a>
							<a href="#" target="_blank">3</a>
							<a href="#" class="active">4</a>
							<a href="#" target="_blank">5</a>
							<a href="#" class="next button color-1 style-1">next page</a>
						</div>
	    			</div-->
	    		</div>
	    	</div>
	    </div>
<?php include_once($doc_path.'/includes/footer.php'); ?>
