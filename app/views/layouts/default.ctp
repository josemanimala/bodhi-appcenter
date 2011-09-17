<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
 lang="en" dir="ltr"> 
<head> 
<link href='http://fonts.googleapis.com/css?family=Ubuntu&v2' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title> 
		<?php echo "Bodhi Software"; ?>
  </title> 
	
<link rel="shortcut icon" href="http://bodhilinux.com/software/lib/tpl/incognitek_bodhi3/images/favicon.ico.png" /> 
  <meta name="generator" content="DokuWiki" /> 
<meta name="robots" content="index,follow" /> 
<meta name="date" content="2011-08-24T18:43:10-0700" /> 
<meta name="keywords" content="start" /> 
<link rel="search" type="application/opensearchdescription+xml" href="http://bodhilinux.com/software/lib/exe/opensearch.php" title="Bodhi Software" /> 
<link rel="start" href="/software/" /> 
<link rel="contents" href="/software/doku.php?id=start&amp;do=index" title="Sitemap" /> 
<link rel="alternate" type="application/rss+xml" title="Recent Changes" href="/software/feed.php" /> 
<link rel="alternate" type="application/rss+xml" title="Current Namespace" href="/software/feed.php?mode=list&amp;ns=" /> 
<link rel="alternate" type="text/html" title="Plain HTML" href="/software/doku.php?do=export_xhtml&amp;id=start" /> 
<link rel="alternate" type="text/plain" title="Wiki Markup" href="/software/doku.php?do=export_raw&amp;id=start" /> 
<link rel="canonical" href="http://www.bodhilinux.com/software/doku.php?id=start" /> 
<link rel="stylesheet" media="screen" type="text/css" href="http://bodhilinux.com/software/lib/exe/css.php?t=incognitek_bodhi3&amp;tseed=1311262030" /> 
<link rel="stylesheet" media="all" type="text/css" href="http://bodhilinux.com/software/lib/exe/css.php?s=all&amp;t=incognitek_bodhi3&amp;tseed=1311262030" /> 
<link rel="stylesheet" media="print" type="text/css" href="http://bodhilinux.com/software/lib/exe/css.php?s=print&amp;t=incognitek_bodhi3&amp;tseed=1311262030" /> 
<script type="text/javascript" ><!--//--><![CDATA[//><!--
var NS='';var JSINFO = {"id":"start","namespace":""};
//--><!]]></script> 
<script type="text/javascript" charset="utf-8" src="http://bodhilinux.com/software/lib/exe/js.php?tseed=1311262030" ></script> 
<script type="text/javascript" charset="utf-8" ><!--//--><![CDATA[//><!--
jQuery.noConflict();
 
//--><!]]></script> 
  <!-- FIXES FOR IE6:
The logo and other images should be able to use transparent pngs. Since
internet explorer 6 does not support them, I use the script 'iepngfix.htc'. 
However, the script cannot handle the background shadow of the content div. 
So we have to rebuild these elements without the shadow.       
--> 
<link rel="stylesheet" media="all" type="text/css" href="/css/screen.css" /> 
<?PHP
	echo $javascript->link('prototype');
    echo $javascript->link('scriptaculous');
	
?>
<!--[if lt IE 7]>
<script type="text/javascript">
  // This must be a path to a blank image. Used by 'iepngfix.htc'
  if (typeof blankImg == 'undefined') var blankImg = 'http://bodhilinux.com/software/lib/tpl/incognitek_bodhi3/images/blank.gif';
</script>
<style type="text/css">
  div.dokuwiki {
    margin: 0px 9px;
    border-left: 1px solid black;
    border-right: 1px solid black;
    background-image: none;
    background-color: white;
    width: 690px; /* miraculously needed when a right aligned image is taller 
                     than the text on a page */
  }
  div#breadcrumbs {
    background-image: none;
    background-color: #bbddd4;
    margin: 9px 9px 0 9px;
    border-right: 1px solid black;
    border-top: 1px solid black;
    border-left: 1px solid black;
    padding: 3px 6px 3px 6px;
  }
  div#footer {
    background-image: none;
    background-color: #bbddd4;
    margin: 0px 9px 9px 9px;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    border-left: 1px solid black;
    border-top: none;
    padding: 10px 18px 11px 18px;
  }
 
  div#navigation ul li a { border: none; margin: 0px 1px; }
  div#navigation ul li a:hover { border: 1px solid black; margin: 0px 0px; }
  textarea#wiki__text { width: 650px; }
 
  img {
     behavior: url(http://bodhilinux.com/software/lib/tpl/incognitek_bodhi3/iepngfix.php);
  }
</style>
<![endif]--> 
</head> 
 
<body> 
<div class="dokuwiki">
<div id="header">
<div id="navigation">
<link href='http://fonts.googleapis.com/css?family=Ubuntu&v2' rel='stylesheet' type='text/css'> 
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" /> 
<style> 
#bologo {
	position: relative;
	left: 10px; 
	top: 5px;
	
}
 
.menu {
	/*margin-top: 25px;	*/
	width: 100%;
	height: 70px;
	z-index: 100;
	 position: absolute;
	 bottom: 0;
	 right: 0;
	background-color: #ffffff;
	border-top: solid 1px #ff6600;
	border-bottom: solid 1px #ff6600; 
	-moz-border-bottom-colors: #f60 #fff;
	
	
}
 
.menu h3 {
    font-family: Ubuntu, ariel; /* no .ttf */
    font-size: 10pt;
    letter-spacing: 1px;
    line-height: 1.5em;
    color: #5a2e1b;
}
 
#nav {
	position: absolute;
	bottom: 23px;
	right: 5px;
	width: 525px;
	float: right;
	margin: 1px;
	padding-left: 5px;
	padding-right: 5px;
	line-height: 100%;
	border-top: solid 1px #ff6600;
	border-bottom: solid 1px #ff6600; 
	-moz-border-bottom-colors: #f60 #fff;
}
 
#nav li {
	padding-right: 5px;
	float: right;
	position: relative;
	list-style: none;
	font-family: Ubuntu; /* no .ttf */
    font-size: 10pt;
    letter-spacing: 1px;
    line-height: 1.5em;
}
/* main level link */
#nav a {
	font-weight: bold;
	color: #5a2e1b;
	text-decoration: none;
	display: block;
	padding: 1px 3px 1px 3px;
	margin: 0;
	-webkit-border-radius: 5px;
	-moz-border-radius-topleft: 5px;
-moz-border-radius-topright:5px;
-moz-border-radius-bottomleft:0px;
-moz-border-radius-bottomright:5px;
	
}
/* main level link hover */
/*.current {
	background: #ff6600; /* for non-css3 browsers */
	/*background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, #ABD450), color-stop(1, #6C9313));
	background-image: -moz-linear-gradient(center bottom,#ABD450 0%,#6C9313 100%);
	color: #5a2e1b;
	-moz-border-radius-topleft: 5px;
-moz-border-radius-topright:5px;
-moz-border-radius-bottomleft:0px;
-moz-border-radius-bottomright:5px;
	
}*/
 
#nav li:hover > a {
	background: #ff6600; /* for non-css3 browsers */
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, #f27b0f), color-stop(1, #FFD300));
	background-image: -moz-linear-gradient(center bottom,#f27b0f 0%,#FFD300 100%);
	color: #444;
	-webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, .3);
	-moz-box-shadow: 0 2px 3px rgba(8, 8, 8, .3);
	box-shadow: 0 2px 3px rgba(8, 8, 8, .3);
 
}
 
/* sub levels link hover */
#nav ul li:hover a, #nav li:hover li a {
	color: #444;
	background: none;
	border: none;
	color: #5a2e1b;
	/*-webkit-box-shadow: none;*/
	-moz-box-shadow: none;
}
#nav ul a:hover {
	background: #0399d4 !important; /* for non-css3 browsers */
	filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ABD450', endColorstr='#6C9313'); /* for IE */
	background: -webkit-gradient(linear, left top, left bottom, from(#ABD450), to(#6C9313)) !important; /* for webkit browsers */
	background: -moz-linear-gradient(top,  #ABD450,  #6C9313) !important; /* for firefox 3.6+ */
 
	color: #fff !important;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	text-shadow: 0 1px 1px rgba(0, 0, 0, .1);
}
/* level 2 list */
#nav ul {
	background: #ff6600; /* for non-css3 browsers */
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, #f27b0f), color-stop(1, #ffd300));
	background-image: -moz-linear-gradient(center bottom,#f27b0f 0%,#FFD300 100%);
 
	display: none;
	margin-left: auto;
	margin-right: auto;
	padding: 0;
	width: 185px;
	position: absolute;
	top: 21px;
	left: 0;
	/*border: solid 1px #b4b4b4;*/
	-webkit-border-radius: 10px;
	-moz-border-radius-topleft: 0px;
-moz-border-radius-topright:10px;
-moz-border-radius-bottomleft:0px;
-moz-border-radius-bottomright:10px;
	/*border-radius: 10px;*/
	/*-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .3);*/
	-moz-box-shadow: 0 1px 3px rgba(8, 8, 8, .3);
	/*box-shadow: 0 1px 3px rgba(8, 8, 8, .3);*/
}
/* dropdown */
#nav li:hover > ul {
	display: block;
}
#nav ul li {
	float: none;
	margin: 0;
	padding: 0;
}
#nav ul a {
	font-weight: normal;
	text-shadow: 0 1px 1px rgba(255, 255, 255, .9);
}
/* level 3+ list */
#nav ul ul {
	left: 181px;
	top: 0;
}
/* rounded corners for first and last child */
#nav ul li:first-child > a {
	-webkit-border-top-left-radius: 0;
	-moz-border-radius-topleft: 0;
	-webkit-border-top-right-radius: 9px;
	-moz-border-radius-topright: 9px;
	
}
#nav ul li:last-child > a {
	-webkit-border-bottom-left-radius: 0;
	-moz-border-radius-bottomleft: 0;
	-webkit-border-bottom-right-radius: 9px;
	-moz-border-radius-bottomright: 9px;
	
}
/* clearfix */
#nav:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
#nav {
	display: inline-block;
}
html[xmlns] #nav {
	display: block;
}
* html #nav {
	height: 1%;
}
 
 
 
</style>
<div class="menu"> 
<div id="bologo"> 
<a href="/index.php"  accesskey="h" title="[ALT+H]"><img src="http://bodhilinux.com/software/lib/tpl/incognitek_bodhi3/images/weblogo.png" alt="Bodhi Software" /></a></div> 
<ul id="nav"> 
<li><a href="http://www.bodhilinux.com/index.php">Home</a></li> 
 
<li><a href="#">Documentation</a> 
<ul> 
<li><a href="http://www.bodhilinux.com/wiki">Document Wiki</a></li> 
<li><a href="http://www.bodhilinux.com/wiki/doku.php?id=e17_-_the_bodhi_guide_to_enlightenment">Enlightenment Guide</a></li> 
<li><a href="http://www.bodhilinux.com/quickstart/quickstartEN/">Quick Start</a></li> 
</ul> 
</li> 
 
<li><a href="#">Resources</a> 
<ul> 
<li><a href="http://art.bodhilinux.com/">Art Wiki</a></li> 
<li><a href="http://webchat.freenode.net/?channels=bodhilinux">IRC WEB Chat</a></li> 
<li><a href="http://www.bodhilinux.com/forums">Forum</a></li> 
<li><a href="http://software.bodhilinux.com/">Software Wiki</a></li> 
 
</ul> 
</li> 
 
<li><a href="http://www.bodhilinux.com/download.php">Download</a> 
	<!-- LEAVE IN Next setion is for 3rd  level menu as guide incase re introduced at later date LEAVE IN --> 
	<!-- <ul>
	<li><a href="#">via Torrent</a></li>
	<li><a href="#">via Direct Download</a></li>
	<li><a href="">md5 check sum</a></li>
	</ul> --> 
</li> 
 
<li><a href="#">Gallery</a> 
<ul> 
<li><a href="http://www.bodhilinux.com/gallerydotw.php">Desktop of the Week</a></li> 
<li><a href="http://www.bodhilinux.com/gallerysystem.php">System Images</a></li> 
 
</ul> 
</li> 
 
<li><a href="#">About</a> 
<ul> 
<li><a href="http://www.bodhilinux.com/about.php">What Is Bodhi Linux?</a></li> 
<li><a href="http://www.bodhilinux.com/system.php">System Requirements</a></li> 
<li><a href="http://www.bodhilinux.com/team.php">Team</a></li> 
<li><a href="http://www.bodhilinux.com/affiliates.php">Affiliates</a></li> 
<li><a href="http://www.bodhilinux.com/media.php">In the News</a></li> 
</ul> 
</li> 
 
</ul> 
</div>     
</div>     
</div>
<div id='searchBar' align='right'>
<?php echo $form->create('Software',array('url' => '/software/searchPost')); ?>
<?php 
echo '<span align="right"><font color="black" size="4">Search for software:&nbsp;</font></span>';
echo $ajax->autoComplete('Software.search', '/software/search')?>
<?php echo $form->end()?>
<div id='view' class='auto_complete'>
</div>
</div>
<div class="page"> 

			<?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
</div>
</div>
<div id='footer'>
<?PHP
echo "<center><font color='black' size='2'>Bodhi Appcenter,&nbsp;".Configure::read( 'Appcenter.copyright' ).",&nbsp; ".Configure::read( 'Appcenter.year' ).",&nbsp;".Configure::read( 'Appcenter.build' )."</font></center>";
?>
	<?php echo $this->element('sql_dump'); ?>
</body> 
</html>
