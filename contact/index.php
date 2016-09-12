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
    <!-- main block blog--
    	<div class="block padding-top-60 padding-bottom-65" style="background: url(https://unsplash.it/800) no-repeat; background-size: cover; background-position: center center;">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 col-md-push-3">
	    				<div class="banner-text text-center">
		    				<div class=" simple-article small">
		    					<div class="h1">Our Contact <b>information</b></div>
		    					<p>The point of using lorem ipsum is that it has a more or less normal distribution of letters as opposed to using established fact that a reader</p>
							</div>
							<a href="#" class="button color-1 blog-b">home <i class="fa fa-chevron-right"></i> contact</a>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div-->
	   <!--  -->
	   <div class="block padding-top-50 padding-bottom-45">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6 col-md-push-3">
	    				<div class="simple-article text-center medium color-1 margin-bottom-65">
	    					<h3 class="title"><span>get in touch</span></h3>
	    					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem lorem Ipsum has been the industry's standard dummy text ever since.</p>
	    				</div>
	    			</div>
	    			<div class="clearfix"></div>
	    			<div class="col-md-8 col-md-push-2">
	    				<form class="text-center margin-bottom-65 contact-form">
	    					<div class="fl">
								<input required="" type="text" class="simple-input" placeholder="Your Name..." value="">
							</div>
							<div class="fr">
	                        	<input required="" type="email" class="simple-input" placeholder="Your E-mail..." value="">
	                        </div>
	                        <textarea required placeholder="Enter Your Message ..."></textarea>
	                        <input type="submit" class="button color-1" value="submit comment" name="submit">
						</form>
					</div>
					<div class="col-md-10 col-md-push-1">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="one-box text-center simple-article">
									<i class="fa fa-mobile"></i>
									<h5>Phone:</h5>
									<a href="tel:15123021212">(512) 302-1212</a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="one-box text-center simple-article">
									<i class="fa fa-map-marker"></i>
									<h5>Address:</h5>
									<a href="https://www.google.com/maps/place/Bat+City+Awards+%26+Apparel/@30.280888,-97.74402,15z/data=!4m2!3m1!1s0x0:0x79ddd493c8de6f75?sa=X&ved=0ahUKEwjU6fObhcjOAhVRImMKHRT4BMUQ_BIIcjAL">1707 Nueces St., Austin, TX 78701</a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="one-box text-center simple-article">
									<i class="fa fa-envelope-o"></i>
									<h5>Email:</h5>
									<a href="#" target="_blank">sales@batcity.com</a>
								</div>
							</div>
						</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <!--  -->
	    <!-- map -->
	    <div class="block">
			<div class="map">
			    <div id="map-canvas" data-lat="30.280925" data-lng="-97.744036" data-zoom="3"></div>
			    <div class="addresses-block">
			        <a data-lat="30.280925" data-lng="-97.744036" data-string="Bat City"></a>
			    </div>
			</div>
    	</div>
<?php include_once($doc_path.'/includes/footer.php'); ?>
