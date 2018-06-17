<?php

defined('_JEXEC') or die;

$menu = &JSite::getMenu();
$active = $menu->getActive();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/reset.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/menu.css" type="text/css" media="screen,projection" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/print.css" type="text/css" media="print" />
<!--[if IE]>
  <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lte IE 6]>
  <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie6only.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!-- This line of code imports the JQuery library from Google -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<!-- This is the actual rotator javascript from http://jquery.malsup.com/cycle/ -->
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/js/jquery.cycle.all.js"></script>

<!-- This is the commands that tell the image rotator what to do. -->
<script type="text/javascript">
jQuery.noConflict();
jQuery(function() {
    jQuery('.newsflash').cycle({
        fx: 'fade',
        timeout: 5000,
    pause: 1
    });
});
</script>
<!-- These are the CSS styles that should be applied to give the rotator the proper formatting. -->
<style type="text/css">
.newsflash {
  background-color: #000;
  overflow: hidden;
  height: 204px;
  width: 533px;
}
.newsflash.non {
  overflow: auto;
  height: auto;
}
</style>
</head>

<body class="<?php print $active->alias; ?>">
<div id="wrapper">
  <div id="top-banner">
      <div class="section">
          <jdoc:include type="modules" name="banner" />
        </div>
    </div><!-- end top-banner -->
    <div id="header" class="clearfix">
      <div id="logoheader">
          <div class="section">
              <h1 id="logo"><a href="<?php echo $this->baseurl ?>">Red Star Property Management Inc.</a></h1>
            </div>
        </div>
        <div id="rotator">
          <div class="section">
              <jdoc:include type="modules" name="rotator" />
          </div>
          <div id="banner-overlay"></div>
        </div>
    </div><!-- end header -->
    <div id="body" class="clearfix">
        <div id="nav">
          <jdoc:include type="modules" name="menu" />
        </div><!-- end menu -->
        <div id="content">
          <div class="section">
              <jdoc:include type="message" />
                <jdoc:include type="component" />
            </div>
        </div><!-- end content -->
  </div><!-- end body -->
    <div id="footer-outer">
    </div><!-- end footer -->
</div><!-- end wrapper -->
<jdoc:include type="modules" name="debug" />
</body>
</html>
