<?php
/* MotoLokalizator 2017 <domain = polmak.ayz.pl> */

	require_once ('php/db_settings.php');
	require_once ('php/db_connect.php');
	require_once ('php/theme_staff.php');

	
	$template = new ThemeStaff('show');

?>
<!doctype html>
<html lang="pl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css.css" type="text/css" />
<title>MotoLokalizator - <?php echo $template->AddSiteName(); ?></title>
</head>

<body>
	<div id="content">
    	<header>
        	<h1 class="title-h1"><a href="http://polmak.ayz.pl/">MotoLokalizator</a></h1>
            <h2 class="tagline"><?php echo $template->AddSiteName(); ?></h2>
        	<nav>
            	<div id="navigation">
            	<ul class="menu">
                	<li><a href="http://polmak.ayz.pl/">START</a></li>
            		<li><a href="http://polmak.ayz.pl/?show=offers">OFERTY</a></li>
                </ul>
                </div>
            </nav>
        </header>
        
        <section>
			<?php $template->IncludeSite(); ?>
	   </section>
       
       <div id="footer">
       		<footer>
            	<h3>MOTOLOKALIZATOR</h3>
                <h4><?php echo $template->AddSiteName(); ?></h4>
                <p> Cracow University of Economics &bull; PROJECT &bull; MATEUSZ &amp; RAFAŁ &copy; <?php echo date('Y'); ?></p>
       		</footer>
       </div>
	</div>
</body>
</html>