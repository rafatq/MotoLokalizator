<?php
/* MotoLokalizator 2017 <domain = polmak.ayz.pl> */

	require_once ('php/db_settings.php');
	require_once ('php/db_connect.php');
	require_once ('php/theme_staff.php');
	require_once ('php/functions.php');

	
	$template = new ThemeStaff('show');

?>
<!doctype html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<!-- <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>MotoLokalizator - <?php echo $template->AddSiteName(); ?></title>
<link rel="icon" href="http://polmak.ayz.pl/img/motolokalizator-icon.ico" />
<link rel="shortcut icon" href="http://polmak.ayz.pl/img/motolokalizator-icon.ico" >
<link rel="stylesheet" href="http://polmak.ayz.pl/css.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

<?php 
if(checkUA()){
echo '<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />'."\n";
echo '<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>'."\n"; 
echo '<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>'."\n";
echo '<script type="text/javascript" src="http://polmak.ayz.pl/js/globalmobile.js"></script>';
/* echo  '<script type="text/javascript" src="http://polmak.ayz.pl/js/formmobile.js"></script>'."\n"; 
echo '<script type="text/javascript" src="http://polmak.ayz.pl/js/geolocationmobile.js"></script>'; */
}
else {
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>'."\n";
	if ($_GET['show'] == 'start'){
		echo '<script type="text/javascript" src="http://polmak.ayz.pl/js/geolocation.js"></script>'."\n";
		echo '<script type="text/javascript" src="http://polmak.ayz.pl/js/form.js"></script>'."\n";
		echo '<script type="text/javascript" src="http://polmak.ayz.pl/js/uploadimage.js"></script>';
	} else echo '<script type="text/javascript" src="http://polmak.ayz.pl/js/global.js"></script>';
	
}
?>
</head>
<body>
<?php $template->IncludeStart(); ?>
<?php $template->IncludeSite(); ?>        
</body>
</html>