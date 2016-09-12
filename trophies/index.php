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
	    					<div class="title">Trophies <span>&amp;</span> Medals</div>
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
                    	<div class="row">
                            <div class="col-md-4">
                            <a class="margin-bottom-30" href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
                            </div>
                            <div class="col-md-8 margin-bottom-30">
                                <div class="left-margin-block">
                                <h3 class="title-3 margin-bottom-20">Wreath Action Medal Series</h3>
                                    <div class="simple-article font-2 large light-grey margin-bottom-30">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="border-bottom-1 color-4 margin-bottom-60"></div>
        
                            </div>
                            <div class="col-md-4">
                                <a class="margin-bottom-30" href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
                            </div>
                            <div class="col-md-8">
                                <div class="left-margin-block">
                                <h3 class="title-3 margin-bottom-20">Two-Tone Action Figure Resin Series</h3>
                                    <div class="simple-article font-2 large light-grey margin-bottom-30">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                    </div>
                                </div>
                            </div>
	    				</div>
                        <div class="row nopadding">
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Action Figure Resin Series</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Elite Figure Resin Series</a>
		    					</div>
		    				</div>
                            <div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Sports Legend Shield Resin Series</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Bobblehead Resin Series</a>
		    					</div>
		    				</div>
			    		</div>
			    		<div class="row nopadding">
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Generic Color Theme Resin Series</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Centurion Color Resin Series</a>
		    					</div>
		    				</div>
                            <div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Riser Color Scene Sport Series</a>
		    					</div>
		    				</div>
		    				<div class="col-md-3 nopadding col-sm-6">
		    					<div class="one-product">
		    						<a href="#" target="_blank"><img src="https://unsplash.it/300/300" alt="" class="img-responsive"></a>
		    						<a href="#" class="h6 prod-title">Sport Cup Resin Series</a>
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
