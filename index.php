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
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

<title>MotoLokalizator - <?php echo $template->AddSiteName(); ?></title>
<link rel="stylesheet" href="css.css" type="text/css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
<?php 
if(checkUA()){
echo '<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>'; 
echo '<script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>';
if ($_GET['id']){
		echo '<script type="text/javascript" src="js/globalmobile.js"></script>';
	}
}
else {
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
	if ($_GET['id']){
		echo '<script type="text/javascript" src="js/global.js"></script>';
	}
 }

?>



</head>

<body>
<div id="main"  data-role="page" data-title="Moto Lokaziator">
	<div id="content">
    	<header data-role="header">
        	<h1 class="title-h1"><a data-role="button" data-icon="home" href="http://polmak.ayz.pl/">MotoLokalizator</a></h1>
            <h2 class="tagline"><?php echo $template->AddSiteName(); ?></h2>
         </header>
         
         <section>
        	<nav data-role="navbar">
            	<div id="navigation">
            	<ul class="menu" data-role="controlgroup" data-type="horizontal">
                	<li data-role="button"><a  href="http://polmak.ayz.pl/">START</a></li>
            		<li data-role="button"><a  href="http://polmak.ayz.pl/?show=offers">OFERTY</a></li>
                </ul>
                </div>
            </nav>
        </section>
        
        <section>
        	<div data-role="content">
			<?php $template->IncludeSite(); ?>
            </div>
	   </section>
       
       <div id="footer">
       		<footer data-role="footer" data-position="fixed">
            	<h3>MOTOLOKALIZATOR</h3>
                <h4><?php echo $template->AddSiteName(); ?></h4>
                <p> Cracow University of Economics &bull; PROJECT &bull; MATEUSZ &amp; RAFAŁ &copy; <?php echo date('Y'); ?></p>
       		</footer>
       </div>
	</div>
</div>
</body>
</html>