<!DOCTYPE html>
<html>
<head>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	
	<link rel="stylesheet" href='<?php bloginfo('template_url'); ?>/orbit-1.2.3.css' type='text/css' media='screen' />
	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.orbit-1.2.3.min.js"></script>

</head>

<body>
<header>
        
    <?php wp_nav_menu(  
    array(  
        'container'       => 'nav',  
        'container_id'    => 'menu',  
        'menu_class'      => 'dropdown'  
    )  
    ); ?>  


  <div id="logo">

    <img id="long" src="<?php bloginfo('template_url'); ?>/images/longlogo.png"/>
  </div>

</header>
</body>
</html>