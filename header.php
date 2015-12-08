<?php 
//echo dirname("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
//print_r($_SERVER);
$dir = dirname("http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
$page = basename("http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);

$u_agent = $_SERVER['HTTP_USER_AGENT']; 
$isIE = False; 
if(preg_match('/MSIE/i',$u_agent)) { $isIE = True; }
?>



<!DOCTYPE html>
<html>
<head>
<meta name="robots" content="index,follow" />
<?php echo '<meta name="description" content="'.$metas['description'].'" />'; ?>
<?php echo '<meta name="keywords" content="'.$metas['keywords'].'" />'; ?>
<meta name="author" content="Jeff Miller, Chicago" />
<meta name="security" content="public" />
<meta name="revisit-after" content="7 days" />
<meta http-equiv="Content-Language" CONTENT="EN" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="distribution" content="global" />
<meta name="google-site-verification" content="5s5UG3R4PRJtUXYBctAdTtSPcX3CypmyFd2asuX2nxI" />
<?php echo '<title>'.$metas['title'].'</title>'; ?>
<?php echo '<link href="'.$dir.'/css/slimstyle.css" rel="stylesheet" media="screen" type="text/css" />'; ?>

<!--[if lte IE 8]>
<script src="<?php echo $dir; ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<?php 
if ($page == "gallery.php") {
	echo "<script type='text/javascript' src='gallery/js/prototype.js'></script>";
	echo "<script type='text/javascript' src='gallery/js/scriptaculous.js?load=effects'></script>";
	echo "<script type='text/javascript' src='gallery/js/lightbox.js'></script>";
	echo "<link rel='stylesheet' href='gallery/css/lightbox.css' type='text/css' media='screen' />";
}
?>
</head>

<body>

<header>
	<a id="logo" href="<?php echo $dir; ?>/index.php"><img src="<?php echo $dir; ?>/images/logo.jpg" height="35" width="147" border="0" /></a>
	<nav>
		<ul>
			<li <?php echo ($page == "index.php") ? 'class="selected"' : ''; ?>><a href="<?php echo $dir; ?>/index.php">Home</a></li>
			<li <?php echo ($page == "about_us.php") ? 'class="selected"' : ''; ?>><a href="<?php echo $dir; ?>/about_us.php">About Us</a></li>
			<li <?php echo ($page == "schedule.php") ? 'class="selected"' : ''; ?>><a href="<?php echo $dir; ?>/schedule.php">Calendar</a></li>
			<li <?php echo ($page == "gallery.php") ? 'class="selected"' : ''; ?>><a href="<?php echo $dir; ?>/gallery.php">Photos</a></li>
			<li <?php echo ($page == "services.php") ? 'class="selected"' : ''; ?>><a href="<?php echo $dir; ?>/services.php">Services</a></li>
			<li <?php echo ($page == "contact_us.php") ? 'class="selected"' : ''; ?>><a href="<?php echo $dir; ?>/contact_us.php">Contact Us</a></li>
		</ul>
	</nav>
	<div id="rotate_banner"></div>
</header>