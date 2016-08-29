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
	    					<div class="title">Art <span>Glass</span></div>
	    					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected.</p>
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
					
			    		<iframe class="preview_frame" src="http://www.premiercrystal.com/category.php?cat1=26&cat2=119&cat1Desc=Glass+Awards&cat2Desc=Art+Glass&mysite=&level=cat2&p=yes" name="preview-frame" frameborder="0" noresize="noresize" data-view="fullScreenPreview"></iframe>
                   
                    
	    			<div class="clearfix"></div>
	    		</div>
	    	</div>
	    </div>
	<?php include_once($doc_path.'/includes/footer.php'); ?>
