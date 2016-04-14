<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="Keywords" content="中国古代瓷器, 官窑瓷器, 清代瓷器， 宋代瓷器， 唐代瓷器，明代瓷器, 瓷器介绍, 瓷器欣赏">
<meta name="Description" content="中国古代瓷器, 官窑瓷器, 清代瓷器， 宋代瓷器， 唐代瓷器，明代瓷器, 瓷器介绍, 瓷器欣赏">
<title>赏瓷网-Fine Porcelain</title>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body class="content-page">
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

 	<!--<div class="navbar navbar-default navbar-fixed-top">-->
    <div class="navbar navbar-default">
 		<div class="container">
    	 	<div class="collapse" id="collapseExample">
            	<div>
                	<form class="navbar-form">
                    	<div class="input-group">
                        	<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term2">
                            	<div class="input-group-btn">
                                	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                        </div>
                   	</form>
                </div>
			</div>   
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
              <span class="sr-only">Toggle navigation</span>   
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           </button>   
           <a class="navbar-brand" href="<?php get_site_url(); ?>/shangci/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" class="img-responsive" alt=""></a>
           <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" class="visible-xs  pull-right" id="mobile-search">
            	<i class="glyphicon glyphicon-search" aria-hidden="true"></i><span style="font-size:0.6em; margin-left:5px;">快速检索</span>
           </a>
           
           <nav class="nav navbar-default navbar-offcanvas offcanvas" id="myNavmenu" role="navigation">
                 
                     <?php 

						 $defaults = array(
						'theme_location'  => 'primary-menu',
						'menu'            => 'primary',
						'container'       => 'div',
						'container_class' => 'container-fluid',
						'container_id'    => 'navfluid',
						'menu_class'      => 'nav navbar-nav navbar-right',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'depth'           => 2,
						'walker'          => new wp_bootstrap_navwalker()
					);


      				wp_nav_menu( $defaults );

    			?>
                 
                 
                 
        	</nav>  
                     
 	   </div>
    </div>