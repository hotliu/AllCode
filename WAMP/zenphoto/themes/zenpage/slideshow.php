<?php

// force UTF-8 Ø

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="<?php echo $_zp_themeroot; ?>/slideshow.css" type="text/css" />
<?php zp_apply_filter('theme_head'); ?>
<title><?php echo getBareGalleryTitle(); ?> <?php echo gettext("Slideshow"); ?></title>
<meta http-equiv="content-type" content="text/html; charset=<?php echo getOption('charset'); ?>" />
<?php printSlideShowJS(); ?>

</head>
<body>
	<?php zp_apply_filter('theme_body_open'); ?>
	<div id="slideshowpage">
			<?php printSlideShow(true,true); ?>
	</div>
<?php zp_apply_filter('theme_body_close'); ?>

</body>
</html>