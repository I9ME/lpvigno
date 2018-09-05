

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

 get_template_part('template-parts/header/header','tags');

  ?>

<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TNM849K');</script>
<!-- End Google Tag Manager -->
	
<div id="page" class="Site">
	<header id="masthead" class="Site-header u-positionAbsolute u-sizeFull u-paddingVertical u-paddingHorizontal--inter is-animating u-zIndex20">
		<div class="u-maxSize--container u-alignCenterBox u-alignCenter u-displayFlex">
			<!-- Logo do site -->
			<div class="Site-header-branding u-positionRelative"> 
				<?php  get_template_part('template-parts/header/header','branding');?>
			</div>
			<!-- Menu de Navegação -->
				<?php  get_template_part('template-parts/header/header','navigation');?>
			
		</div><!-- .u-maxSize--container -->

	</header><!-- #masthead -->

	

	<div class="Site-container">
		<div id="content" class="Site-container-content u-overflowHidden">
