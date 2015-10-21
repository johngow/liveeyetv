<?php return array(

/* Theme Admin Menu */
"menu" => array(
    array("id"    => "1",
          "name"  => "General"),
    
    array("id"    => "2",
          "name"  => "Homepage"),

		array("id"    => "5",
					"name"  => "Styling"),
 
  	array("id"    => "7",
          "name"  => "Banners"),
),

/* Theme Admin Options */
"id1" => array(
    array("type"  => "preheader",
          "name"  => "Theme Settings"),
 
	array("name"  => "Logo Image",
          "desc"  => "Upload a custom logo image for your site, or you can specify an image URL directly.",
          "id"    => "misc_logo_path",
          "std"   => "",
          "type"  => "upload"),

    array("name"  => "Favicon URL",
          "desc"  => "Upload a favicon image (16&times;16px).",
          "id"    => "misc_favicon",
          "std"   => "",
          "type"  => "upload"),
          
    array("name"  => "Custom Feed URL",
          "desc"  => "Example: <strong>http://feeds.feedburner.com/wpzoom</strong>",
          "id"    => "misc_feedburner",
          "std"   => "",
          "type"  => "text"),
  
	array("name"  => "Enable comments on static pages",
          "id"    => "comments_page",
          "std"   => "off",
          "type"  => "checkbox"),
 
    array("name"  => "Sidebar Position",
          "desc"  => "Select default position for the sidebar.",
          "id"    => "sidebar_pos",
          "options" => array('Right', 'Left'),
          "std"   => "Right",
          "type"  => "select"),


    array("type"  => "preheader",
          "name"  => "Navigation Bar"),

    array("name"  => "Display RSS Icon",
          "id"    => "rss_icon",
          "std"   => "on",
          "type"  => "checkbox"),
 
     array("name"  => "RSS Icon Label",
          "desc"  => "Default: <strong>Subscribe</strong>",
          "id"    => "rss_label",
          "std"   => "Subscribe",
          "type"  => "text"),
  
    array("name"  => "Display Search Bar?",
          "id"    => "search_form",
          "std"   => "on",
          "type"  => "checkbox"),
  
 
 	array("type"  => "preheader",
          "name"  => "Global Posts Options"),
 
    array("name"  => "Excerpt Length",
          "desc"  => "Default: <strong>60</strong> (words)",
          "id"    => "excerpt_length",
          "std"   => "60",
          "type"  => "text"),
          
    array("name"  => "Display Thumbnail",
          "id"    => "index_thumb",
          "std"   => "on",
          "type"  => "checkbox"),
          
    array("name"  => "Thumbnail Width (in pixels)",
          "desc"  => "Default: <strong>225</strong> (pixels)",
          "id"    => "thumb_width",
          "std"   => "225",
          "type"  => "text"),
          
    array("name"  => "Thumbnail Height (in pixels)",
          "desc"  => "Default: <strong>145</strong> (pixels)",
          "id"    => "thumb_height",
          "std"   => "145",
          "type"  => "text"),

    array("name"  => "Display Author Name",
          "id"    => "display_author",
          "std"   => "on",
          "type"  => "checkbox"),  
           
    array("name"  => "Display No. of Comments",
          "id"    => "display_comments",
          "std"   => "on",
          "type"  => "checkbox"),  
          
    array("name"  => "Display Read More button",
          "id"    => "display_readmore",
          "std"   => "on",
          "type"  => "checkbox"),
          
	array("name"  => "Display Date/Time",
          "desc"  => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
          "id"    => "display_date",
          "std"   => "on",
          "type"  => "checkbox"), 
            
 
 	array("type"  => "preheader",
          "name"  => "Single Post Options"),
          
    array("name"  => "Display Category",
          "id"    => "post_category",
          "std"   => "on",
          "type"  => "checkbox"), 
          
	array("name"  => "Display Date/Time",
          "desc"  => "<strong>Date/Time format</strong> can be changed <a href='options-general.php' target='_blank'>here</a>.",
          "id"    => "post_date",
          "std"   => "on",
          "type"  => "checkbox"),  
 
    array("name"  => "Display Author",
          "desc"  => "You can edit your profile on this <a href='profile.php' target='_blank'>page</a>.",
          "id"    => "post_author",
          "std"   => "on",
          "type"  => "checkbox"),
           
    array("name"  => "Display Tags",
          "id"    => "post_tags",
          "std"   => "on",
          "type"  => "checkbox"),
          
	array("name"  => "Display Share Buttons",
          "id"    => "post_share",
          "std"   => "on",
          "type"  => "checkbox"),
          
    array("name" => "Display Comments",
          "id"    => "post_comments",
          "std"   => "on",
          "type"  => "checkbox"),
),

"id2" => array(          
 	array("type"  => "preheader",
          "name"  => "Featured Slideshow"),
          
	array("name"  => "Display Slideshow on Homepage?",
          "desc"  => "This slideshow will display posts in which you have marked <strong>Feature on Homepage?</strong> option.",
          "id"    => "featured_enable",
          "std"   => "on",
          "type"  => "checkbox"),  
           
  	array("name"  => "Number of Featured Posts",
          "desc"  => "Default: 10",
          "id"    => "slideshow_posts",
          "std"   => "10",
          "type"  => "text"),  
          
	array("name"  => "Autoplay slider",
          "desc"  => "Should the slider start rotating automatically?",
          "id"    => "featured_rotate",
          "std"   => "off",
          "type"  => "checkbox"),   
          
	array("name"  => "Autoplay Interval",
          "desc"  => "Select the interval (in milliseconds) at which the slider should change posts (if autoplay is enabled). Default: 3000 (3 seconds).",
          "id"    => "featured_interval",
          "std"   => "3000",
          "type"  => "text"),
       
 
	array("type"  => "preheader",
          "name"  => "Recent Posts"),
          
	array("name"  => "Display Recent Posts on Homepage",
          "id"    => "recent_posts",
          "std"   => "on",
          "type"  => "checkbox"),
          
  	array("name"  => "Title for Recent Posts",
          "desc"  => "Default: <em>Other News</em>",
          "id"    => "recent_title",
          "std"   => "Other News",
          "type"  => "text"), 
          
	array("name"  => "Exclude categories",
          "desc"  => "Choose the categories which should be excluded from the main Loop on the homepage.<br/><em>Press CTRL or CMD key to select/deselect multiple categories </em>",
          "id"    => "recent_part_exclude",
          "std"   => "",
          "type"  => "select-category-multi"),

	array("name"  => "Hide Featured Posts in Recent Posts?",
          "desc"  => "You can use this option if you want to hide posts which are featured in the slider on front page.",
          "id"    => "hide_featured",
          "std"   => "on",
          "type"  => "checkbox"),
 ),

"id5" => array(
    array("type"  => "preheader",
          "name"  => "Colors"),

    array("name"  => "Background Color",
           "id"   => "bg_color",
           "type" => "color",
           "selector" => "body",
           "attr" => "background-color"),

    array("name"  => "Logo Color",
           "id"   => "logo_color",
           "type" => "color",
           "selector" => "#logo h1 a",
           "attr" => "color"),
   
    array("name"  => "Link Color",
           "id"   => "a_css_color",
           "type" => "color",
           "selector" => "a",
           "attr" => "color"),
           
    array("name"  => "Link Hover Color",
           "id"   => "ahover_css_color",
           "type" => "color",
           "selector" => "a:hover",
           "attr" => "color"),

    array("name"  => "Widget Title Color",
           "id"   => "widget_color",
           "type" => "color",
           "selector" => ".widget h3.title",
           "attr" => "color"),

    array("type"  => "preheader",
          "name"  => "Fonts"),

    array("name" => "General Text Font Style", 
          "id" => "typo_body", 
          "type" => "typography", 
          "selector" => "body" ),

    array("name" => "Logo Text Style", 
          "id" => "typo_logo", 
          "type" => "typography", 
          "selector" => "#logo h1 a" ),

    array("name"  => "Slider Post Title Style",
           "id"   => "typo_slider_title",
           "type" => "typography",
           "selector" => "#slider h2 a"),

    array("name"  => "Featured Category Title Style",
           "id"   => "typo_featcat_title",
           "type" => "typography",
           "selector" => ".block h3 a"),

    array("name"  => "Post Title Style",
           "id"   => "typo_post_title",
           "type" => "typography",
           "selector" => ".posts h2 a"),

    array("name"  => "Individual Post Title Style",
           "id"   => "typo_individual_title",
           "type" => "typography",
           "selector" => ".single .post h1 a"),
 
     array("name"  => "Widget Title Style",
           "id"   => "typo_widget",
           "type" => "typography",
           "selector" => ".widget h3.title"),

),

"id7" => array( 
    array("type"  => "preheader",
          "name"  => "Header Ad"),
          
    array("name"  => "Enable ad space in the header?",
          "id"    => "ad_head_select",
          "std"   => "off",
          "type"  => "checkbox"),
          
    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "ad_head_code",
          "std"   => "",
          "type"  => "textarea"),
          
    array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>468 × 60px</strong>",
          "id"    => "banner_top",
          "std"   => "",
          "type"  => "upload"),
          
    array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_top_url",
          "type"  => "text"),
          
    array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_top_alt",
          "type"  => "text"),

          
    array("type"  => "preheader",
          "name"  => "Sidebar Ad"),
          
    array("name"  => "Enable ad space in sidebar?",
          "id"    => "ad_side",
          "std"   => "off",
          "type"  => "checkbox"),
          
    array("name"  => "Ad Position",
          "desc"  => "Do you want to place the banner before the widgets or after the widgets?",
          "id"    => "ad_side_pos",
          "options" => array('Before widgets', 'After widgets'),
          "std"   => "Before widgets",
          "type"  => "select"),
          
    array("name"  => "HTML Code (Adsense)",
          "desc"  => "Enter complete HTML code for your banner (or Adsense code) or upload an image below.",
          "id"    => "ad_side_imgpath",
          "std"   => "",
          "type"  => "textarea"),
          
    array("name"  => "Upload your image",
          "desc"  => "Upload a banner image or enter the URL of an existing image.<br/>Recommended size: <strong>250 × 125px</strong>",
          "id"    => "banner_sidebar",
          "std"   => "",
          "type"  => "upload"),
          
    array("name"  => "Destination URL",
          "desc"  => "Enter the URL where this banner ad points to.",
          "id"    => "banner_sidebar_url",
          "type"  => "text"),
          
    array("name"  => "Banner Title",
          "desc"  => "Enter the title for this banner which will be used for ALT tag.",
          "id"    => "banner_sidebar_alt",
          "type"  => "text"),

)


/* end return */);