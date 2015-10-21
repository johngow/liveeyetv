<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <title><?php ui::title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie7.css" /><![endif]-->
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie6.css" /><![endif]-->
	<?php if (option::get('sidebar_pos') == 'Left') { ?><style type="text/css">#sidebar { float:left; } #middle { float:right;} </style> <?php } ?>
      
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
 </head>
<body <?php body_class(); ?>>
 <div id="whiteWrapper">
	<div id="header">
	
		<div id="logo">
            <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('description'); ?>">
                <img src="<?php echo ui::logo(); ?>" alt="<?php bloginfo('name'); ?>" />
           </a>
        </div>
        
 <div id="header-icons">       
       
       <div id="social-icons-row-2">   

             <a href="http://www.myspace.com/liveeyetv">
                  <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/mediaicon_header_myspace_24x23.png" id="my-new-image" alt="MySpace icon" />
             </a>
          
             <a href="http://vimeo.com/user823597">
                  <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/mediaicon_header_vimeo_24x23.png" id="my-new-image" alt="Vimeo icon" />
             </a>
                  
             <a href="http://www.youtube.com/user/liveeyetv">
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/mediaicon_header_youtube_24x23.png" id="my-new-image" alt="Youtube icon" />
             </a>
            
       </div>
       
        <div id="social-icons-row-1">           
             
             <a href="http://www.facebook.com/LiveEyeTv?fref=tsetse">
                  <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/mediaicon_header_facebook_24x23.png" id="my-new-image" alt="Facebook icon" />
             </a>
          
             <a href="https://twitter.com/LiveEyeTv">
                  <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/mediaicon_header_twitter_24x23.png" id="my-new-image" alt="Twitter icon" />
             </a>
                  
             <a href="http://liveeyetv.org/?feed=rss">
                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/mediaicon_header_rss_24x23.png" id="my-new-image" alt="RSS icon" />
             </a>
                          
       </div>
    
 </div>   
 
<div id="search"> 
	<form method="get" id="searchform" action="http://www.liveeyetv.org">
		<input name="s" id="se" size="25" onblur="if (this.value == '') {this.value = '';}" onfocus="if (this.value == '') {this.value = '';}" value="" class="text" type="text">
		<input id="searchsubmit" class="submit" value="Search" type="submit">
	</form>
</div>
 
		<?php if (option::get('ad_head_select') == 'on') { ?>
		
		<?php } ?>
		
	</div>

	<div>
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


 			
		</div> <!-- /#menu-wrap -->
    
    </div> <!-- /#menu -->
     
 	<div id="content-wrap">
		<div id="content">