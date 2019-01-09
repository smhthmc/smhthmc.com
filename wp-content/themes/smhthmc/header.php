<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Page title -->
	<title>Web Yazılım ve Tasarım Hakkında Herşey</title>
	<!-- Page description -->
	<meta name="description" content="">
	<!-- Meta -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon  -->
	<link rel="icon" type="image/png" href="/wp-content/themes/smhthmc/template/img/logos/favicon.png" sizes="16x16">
	
	<!-- Include StyleSheets -->
	<?php wp_head(); ?>
</head>


<?php

if(is_front_page()):
    $smhthmc_classes = array('smhthmc-class', 'my-class');
else:
    $smhthmc_classes = array('no-smhthmc-class');
endif;

?>

<body <?php body_class( $smhthmc_classes ); ?>>
	<!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!-- Preloader: uncomment this if you want to show a smooth preloader while the page is loading. Don't forget to add the 'js-preload-me' class on the <body> tag. -->
	<!-- <div class="preloader js-preloader"><div class="preloader-animation"></div></div>
 -->
	<!-- End of Preloader -->
	<div class="page js-page ">
		<!-- Header -->
		<div class="header header-over large">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-5">
						<!-- Logo Image -->
						
						<a href="/" class="logo-image">
							<?php 
								$custom_logo_id = get_theme_mod( 'custom_logo' );
								$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
								echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="logo">';
							?>
						</a>
						<!-- End of Logo Image -->
					</div>
					<div class="col-md-9 col-sm-6 col-xs-7">
						<!-- Menu -->
						<nav class="right helper">

							<?php 
								wp_nav_menu(array(
										'theme_location' =>'primary',
										'container' => false,
										'menu_class' => 'menu sf-menu js-menu',
									)
								); 
							?>	
						<!--<ul class="menu sf-menu js-menu">
								<li>
									<a href="/courses.html">Eğitimler</a>
								</li>
								<li>
									<a href="/tutorials.html">Uygulamalar</a>
								</li>
								<li>
									<a href="#">İpuçları</a>
								</li>
							</ul>-->
						</nav> 
						<!-- End of Menu -->
					</div>
				</div>
			</div>
		</div>
		<!-- End of Header -->

         
       
    
    
