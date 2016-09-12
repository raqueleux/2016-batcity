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
       
        <!-- main block blog-->
		<div class="container">
        	<div class="block padding-top-85 padding-bottom-30">
				<div class="row">
					<div class="col-sm-3">
                        <a class="border-image margin-bottom-30" href="#" target="_blank">
                            <span>
                                <img class="img-responsive" src="https://unsplash.it" alt="">
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <div class="left-margin-block">
                            <h3 class="title-3 margin-bottom-20"><span>Our</span> Mission</h3>
                            <div class="simple-article font-2 large light-grey margin-bottom-30">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                            </div>

                            <div class="border-bottom-1 margin-bottom-35"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                <!-- TT-SUCCESS --
        <div class="block padding-top-85 lgrey">
            <div class="container">
                <h3 class="title-3 type-2 margin-bottom-35"><span>Company</span> Overview</h3>
                <div class="simple-article font-2 large light-grey text-center margin-bottom-90">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisui.</p>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="tt-success type-2 clearfix margin-bottom-60">
                            <a class="tt-success-icon margin-bottom-30" href="#" target="_blank"><i class="fa fa-code"></i></a>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">WEB DEVELOPMENT</a>
                                <div class="simple-article font-2 middle color-3">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut oditautry fugit, sed quia consequuntur.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-4">
                        <div class="tt-success type-2 clearfix margin-bottom-60">
                            <a class="tt-success-icon margin-bottom-30" href="#" target="_blank"><i class="fa fa-line-chart"></i></a>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">SINCE 1985</a>
                                <div class="simple-article font-2 middle color-3">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut oditautry fugit, sed quia consequuntur.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-4">
                        <div class="tt-success type-2 clearfix margin-bottom-60">
                            <a class="tt-success-icon margin-bottom-30" href="#" target="_blank"><i class="fa fa-hand-paper-o"></i></a>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">WE ARE BRAND MAKER</a>
                                <div class="simple-article font-2 middle color-3">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut oditautry fugit, sed quia consequuntur.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>                                        
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="tt-success type-2 clearfix margin-bottom-60">
                            <a class="tt-success-icon margin-bottom-30" href="#" target="_blank"><i class="fa fa-user"></i></a>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">LOVE FROM OUR CLIENTS</a>
                                <div class="simple-article font-2 middle color-3">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut oditautry fugit, sed quia consequuntur.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-4">
                        <div class="tt-success type-2 clearfix margin-bottom-60">
                            <a class="tt-success-icon margin-bottom-30" href="#" target="_blank"><i class="fa fa-paint-brush"></i></a>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">ULTIMATE DESIGN</a>
                                <div class="simple-article font-2 middle color-3">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut oditautry fugit, sed quia consequuntur.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-4">
                        <div class="tt-success type-2 clearfix margin-bottom-60">
                            <a class="tt-success-icon margin-bottom-30" href="#" target="_blank"><i class="fa fa-desktop"></i></a>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">TRUSTED COMPANY</a>
                                <div class="simple-article font-2 middle color-3">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut oditautry fugit, sed quia consequuntur.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>                                        
                </div>                
            </div>
        </div-->
        
	<!-- one-work --
        <div class="block padding-top-85 padding-bottom-80">
            <div class="container">
                <h3 class="title-3 type-2 margin-bottom-35"><span>Work</span> Process</h3>
                <div class="simple-article font-2 middle light-grey text-center margin-bottom-50">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
 sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
 qui dolorem ipsum quia dolor sit amet,
 consectetur,
 adipisci velit,
 sed quia non numquam eius modi tempora incidunt ut labore et.</p>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="one-work">
                            <div class="work-img type-2">
                                <img src="/assets/img/work-4.png" alt="">
                            </div>
                            <div class="work-text">
	                            <div class="simple-article font-2 middle text-center color-3">
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="one-work">
                            <div class="work-img type-2">
                                <img src="/assets/img/work-5.png" alt="">
                            </div>
                            <div class="work-text">
	                            <div class="simple-article font-2 middle text-center color-3">
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	                            </div>                            	
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="one-work">
                            <div class="work-img type-2">
                                <img src="/assets/img/work-6.png" alt="">
                            </div>
                            <div class="work-text">
	                            <div class="simple-article font-2 middle text-center color-3">
	                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
	                            </div>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div-->   
        
                <!-- SUCCESS BLOCK-->
        <div class="block padding-top-85 padding-bottom-50" style="background: url(/assets/img/banner-bg-3.jpg) no-repeat; background-size: cover; background-position: center center;">
            <div class="container">
                <h3 class="title-3 type-2 margin-bottom-35"><span>Our</span> Story</h3>
                <div class="simple-article font-2 large light-grey text-center margin-bottom-90">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem enim ad on numquam eius modi teminima veniam.</p>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="tt-success clearfix margin-bottom-30">
                            <div class="tt-success-icon"><i class="stroke-gap icon-Microphone"></i></div>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">OUR MISSION</a>
                                <div class="simple-article font-2 middle light-grey">
                                    <p>Neque porro quisquam est, qui dolorem ips um quia dolor sit amet, consectetur adipis  civelit, sed quia non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="tt-success clearfix margin-bottom-30">
                            <div class="tt-success-icon"><i class="stroke-gap icon-Files"></i></div>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">OUR VISION</a>
                                <div class="simple-article font-2 middle light-grey">
                                    <p>Neque porro quisquam est, qui dolorem ips um quia dolor sit amet, consectetur adipis  civelit, sed quia non.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-sm-4">
                        <div class="tt-success clearfix margin-bottom-30">
                            <div class="tt-success-icon"><i class="stroke-gap icon-Column"></i></div>
                            <div class="tt-success-info">
                                <a class="tt-success-title margin-bottom-15" href="#" target="_blank">OUR HISTORY</a>
                                <div class="simple-article font-2 middle light-grey">
                                    <p>Neque porro quisquam est, qui dolorem ips um quia dolor sit amet, consectetur adipis  civelit, sed quia non.</p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
                <!-- tt-timeline-wrapper -->
        <div class="block padding-top-85 padding-bottom-100">
            <div class="container">
                <h3 class="title-3 type-2 margin-bottom-35"><span>Our</span> History</h3>
                <div class="simple-article font-2 middle light-grey text-center margin-bottom-80">
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut.</p>
                </div>
                <div class="tt-timeline-wrapper">
                    <div class="tt-timeline-row date">
                        <div class="tt-timeline-date">JAN 2007</div>
                    </div>            
                    <div class="tt-timeline-row left">
                        <div class="tt-timeline-line"></div>
                        <div class="tt-timeline-inner">
                            <div class="tt-timeline-table">
                                <div class="tt-timeline-cell">
                                    <a class="tt-timeline-title margin-bottom-10" href="#" target="_blank">Blank</a>
                                    <div class="simple-article font-2 middle light-grey margin-bottom-0">
                                        <p>Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consecer quaerat voluptatem quisquam est, qui dolor ipsum quia dolor sit dolor sit amet consecer quaerat ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-timeline-row right">
                        <div class="tt-timeline-line"></div>
                        <div class="tt-timeline-inner">
                            <div class="tt-timeline-table">
                                <div class="tt-timeline-cell">
                                    <a class="tt-timeline-title margin-bottom-10" href="#" target="_blank">Blank</a>
                                    <div class="simple-article font-2 middle light-grey margin-bottom-0">
                                        <p>Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consecer quaerat voluptatem quisquam est, qui dolor ipsum quia dolor sit dolor sit amet consecer quaerat ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-timeline-row date">
                        <div class="tt-timeline-date">FEB 2009</div>
                    </div>
                    <div class="tt-timeline-row left">
                        <div class="tt-timeline-line"></div>
                        <div class="tt-timeline-inner">
                            <div class="tt-timeline-table">
                                <div class="tt-timeline-cell">
                                    <a class="tt-timeline-title margin-bottom-10" href="#" target="_blank">Blank</a>
                                    <div class="simple-article font-2 middle light-grey margin-bottom-0">
                                        <p>Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consecer quaerat voluptatem quisquam est, qui dolor ipsum quia dolor sit dolor sit amet consecer quaerat ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-timeline-row right">
                        <div class="tt-timeline-line"></div>
                        <div class="tt-timeline-inner">
                            <div class="tt-timeline-table">
                                <div class="tt-timeline-cell">
                                    <a class="tt-timeline-title margin-bottom-10" href="#" target="_blank">Blank</a>
                                    <div class="simple-article font-2 middle light-grey margin-bottom-0">
                                        <p>Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consecer quaerat voluptatem quisquam est, qui dolor ipsum quia dolor sit dolor sit amet consecer quaerat ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-timeline-row date">
                        <div class="tt-timeline-date">MARCH 2015</div>
                    </div>
                    <div class="tt-timeline-row left">
                        <div class="tt-timeline-line"></div>
                        <div class="tt-timeline-inner">
                            <div class="tt-timeline-table">
                                <div class="tt-timeline-cell">
                                    <a class="tt-timeline-title margin-bottom-10" href="#" target="_blank">Blank</a>
                                    <div class="simple-article font-2 middle light-grey margin-bottom-0">
                                        <p>Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consecer quaerat voluptatem quisquam est, qui dolor ipsum quia dolor sit dolor sit amet consecer quaerat ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-timeline-row right">
                        <div class="tt-timeline-line"></div>
                        <div class="tt-timeline-inner">
                            <div class="tt-timeline-table">
                                <div class="tt-timeline-cell">
                                    <a class="tt-timeline-title margin-bottom-10" href="#" target="_blank">Blank</a>
                                    <div class="simple-article font-2 middle light-grey margin-bottom-0">
                                        <p>Neque porro quisquam est, qui dolor ipsum quia dolor sit amet consecer quaerat voluptatem quisquam est, qui dolor ipsum quia dolor sit dolor sit amet consecer quaerat ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                             
            </div>
        </div>
      
<?php include_once($doc_path.'/includes/footer.php'); ?>
