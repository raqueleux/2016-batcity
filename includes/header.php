<?php

if (!isset($title)) $title = "";
if (!isset($metadesc)) $metadesc = '';
?>
<!DOCTYPE html>
<html>
<head>

	<!-- Google webmaster tools -->
    <meta name="msvalidate.01" content="" />
	<!-- end Google webmaster tools -->
    
	<?php if (isset($page_canonical)) print '<link rel="canonical" href="' . $page_canonical . '" />'; ?>
    <meta name="description" content="<?php echo $metadesc ?>">



	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
	<meta name="robots" content="index, follow">


    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet" type="text/css">
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/stroke-gap.min.css" rel="stylesheet">    

	<!-- CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/custom.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="/assets/img/favicon/favicon.ico" />

	<title><?php echo $title ?></title>

</head>