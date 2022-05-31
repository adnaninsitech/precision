<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
	

        
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>


 <header class="fixed">
	<div class="main-header">
		<div class="container">
			<div class="menu-Bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-3 text-left">
					<a href="<?php echo site_url(); ?>" class="logo">
						<img src="<?php echo $logoSrc; ?>" alt="">
					</a>
					<a href="<?php echo site_url(); ?>" class="logo2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.png" alt="">
					</a>
				</div>
				<div class="col-md-9 text-right">
					<ul class="header-lst">
						<li><a href="tel:<?php echo $options['phone_number']; ?>"><span><i class="fas fa-phone-alt"></i></span> Call: <?php echo $options['phone_number']; ?></a></li>
						<li><a href="mailto:<?php echo $options['email']; ?>"><span><i class="fal fa-envelope"></i></span> Email: <?php echo $options['email']; ?></a></li>
					</ul>
					<div class="menuWrap">
						<?php wp_nav_menu( array('menu'=> 'Header Menu','theme_location' => 'header_menu','fallback_cb'=> false, 'menu_class' => 'menu', 'container' => false ) ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<?php if ( is_home() || is_front_page() ) {  ?>

<?php } elseif(is_page('74') || is_page(102) ||is_page(142) || is_page(172) || is_page(174) ) { ?>


 <div class="innerbaner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1><?php echo the_title(); ?></h1>
               </div>
            </div>
         </div>
      </div>

<?php }  else { ?>



<?php } ?>
