<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
    <title><?php ui::title(); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' rel='stylesheet' type='text/css'>
    
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie7.css" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie6.css" /><![endif]-->
	<?php if (option::get('sidebar_pos') == 'Left') { ?><style type="text/css">#sidebar { float:left; } #middle { float:right;} </style> <?php } ?>
      
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
 </head>
<body <?php body_class(); ?>>
 
	<div id="header">
	
		<div id="logo">
			<?php if (!option::get('misc_logo_path')) { echo "<h1>"; } ?>

			<a href="<?php echo home_url(); ?>" title="<?php bloginfo('description'); ?>">
				<?php if (!option::get('misc_logo_path')) { bloginfo('name'); } else { ?>
					<img src="<?php echo ui::logo(); ?>" alt="<?php bloginfo('name'); ?>" />
				<?php } ?>
			</a>

			<?php if (!option::get('misc_logo_path')) { echo '</h1><p id="tagline">' . get_bloginfo('description') . '</p>'; } ?>
        </div>
 
		<?php if (option::get('ad_head_select') == 'on') { ?>
			<div id="ad468">
			
				<?php if ( option::get('ad_head_code') <> "") { 
					echo stripslashes(option::get('ad_head_code'));             
				} else { ?>
					<a href="<?php echo option::get('banner_top_url'); ?>"><img src="<?php echo option::get('banner_top'); ?>" alt="<?php echo option::get('banner_top_alt'); ?>" /></a>
				<?php } ?>		   	
					
			</div><!-- /.adv -->
		<?php } ?>

		<div class="clear"></div>
		
	</div>

	<div id="menu">
		<div id="menu-wrap">
 			<?php if (has_nav_menu( 'primary' )) { 
				wp_nav_menu(array(
				'container' => 'menu',
				'container_class' => '',
				'menu_class' => 'dropdown',
				'menu_id' => 'mainmenu',
				'sort_column' => 'menu_order',
				'theme_location' => 'primary'
				));
	 		}					
			else
				{
					echo '<p>Please set your Top navigation menu on the <strong><a href="'.get_admin_url().'nav-menus.php">Appearance > Menus</a></strong> page.</p>
				 ';
				}
			?>

			<?php if (option::get('rss_icon') == 'on') { ?>
	 			<div id="rss_icon">
	 				 <a href="<?php ui::rss(); ?>"><?php echo option::get('rss_label'); ?></a> 
	 			</div>
 			<?php } ?>
 		
			<?php if (option::get('search_form')  == 'on') { get_search_form(); } ?>
 			
		</div> <!-- /#menu-wrap -->
    
    </div> <!-- /#menu -->
     
 	<div id="content-wrap">
		<div id="content">