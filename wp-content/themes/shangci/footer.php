 
 <footer>
 
 <!-- Footer layer 1 -->  
   <div class="container-fluid" id="footer-lay1">
   	<div class="container">
      <div class="row">
       	<div class="col-md-3 hidden-xs hidden-sm">
        
        
        <?php
                     $menu_location = 'Footer-about-link';
                     $menu_locations = get_nav_menu_locations();
                     $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
                     $menu_name = (isset($menu_object->name) ? $menu_object->name : '')
                 ?>
                    <h5><b><?php echo esc_html($menu_name); ?></b></h5>
                        <?php
                             $defaults = array(
                            'theme_location'  => 'Footer-about-link',
                            'menu'            => '',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                             );
                              wp_nav_menu( $defaults );
                         ?>  

        </div>
        
        
        
        <div class="col-md-3 hidden-xs col-sm-4">
        
          <?php
                     $menu_location = 'Footer-service-link';
                     $menu_locations = get_nav_menu_locations();
                     $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
                     $menu_name = (isset($menu_object->name) ? $menu_object->name : '')
                 ?>
                    <h5><b><?php echo esc_html($menu_name); ?></b></h5>
                        <?php
                             $defaults = array(
                            'theme_location'  => 'Footer-service-link',
                            'menu'            => '',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                             );
                              wp_nav_menu( $defaults );
                         ?>  
          
          
          
        </div>
        <div class="col-md-3 col-xs-6  col-sm-4  foot-more">
             
          <?php
                     $menu_location = 'Footer-more-link';
                     $menu_locations = get_nav_menu_locations();
                     $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
                     $menu_name = (isset($menu_object->name) ? $menu_object->name : '')
                 ?>
                    <h5><b><?php echo esc_html($menu_name); ?></b></h5>
                        <?php
                             $defaults = array(
                            'theme_location'  => 'Footer-more-link',
                            'menu'            => '',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                             );
                              wp_nav_menu( $defaults );
                         ?>  
                         
                         
        </div>
        <div class="col-md-3 col-xs-6 col-sm-4">
        
          <?php
                     $menu_location = 'Footer-more-link';
                     $menu_locations = get_nav_menu_locations();
                     $menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
                     $menu_name = (isset($menu_object->name) ? $menu_object->name : '')
                 ?>
         
          
            <?php
                             $defaults = array(
                            'theme_location'  => 'Footer-special-link',
                            'menu'            => '',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => '',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => '',
                            'before'          => '<div class="row"><hr><h4> ',
                            'after'           => '</h4></div>',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="foot-special">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                             );
                              wp_nav_menu( $defaults );
                         ?>  
          
          
          <div class="row">
          <hr>
          
          
          </div>
        </div>
        
        
        
      </div>
    </div>
   </div>
   
 <!-- Footer layer 2 -->  
   <div class="container-fluid" id="footer-lay2">
   	<div class="container">
      <div class="col-xs-2 social">
      <a href="#" class="social-icon">
      	<i class="fa fa-facebook"></i>
        <span class="hidden-xs">Facebook</span>
       </a> 
      </div>
      <div class="col-xs-2 social">
      <a href="#" class="social-icon">
      	<i class="fa fa-weixin"></i>
        <span class="hidden-xs">微信</span>
        </a>
      </div>
      <div class="col-xs-2 social">
      <a href="#" class="social-icon">
      	<i class="fa fa-instagram"></i>
        <span class="hidden-xs">Instagram</span>
        </a>
      </div>
      <div class="col-xs-2 social">
      <a href="#" class="social-icon">
      	<i class="fa fa-youtube"></i>
        <span class="hidden-xs">YouTube</span>
        </a>
      </div>
      <div class="col-xs-2 social">
      <a href="#" class="social-icon">
      	<i class="fa fa-weibo"></i>
        <span class="hidden-xs">微博</span>
      </a>  
      </div>
      <div class="col-xs-2 social">
      <a href="#"  class="social-icon">
      	<i class="fa fa-vimeo-square"></i>
        <span class="hidden-xs">Vimeo</span>
      </a>  
      </div>
    </div>
   </div>  
 <!-- Footer layer 3 -->  
   <div class="container-fluid" id="footer-lay3">
   		<div class="container">
        	<p>&copy;  <?php echo date('Y'); ?>  Obsidian Digital Inc All rights reserved</p>
   		</div>
   </div>
</footer>

<a href="#0" class="cd-top">Top</a>
 <!--[if lte IE 9]>       
            <script src="js/ie-bootstrap-carousel.min.js"></script>
        <![endif]-->
  <?php wp_footer(); ?>
</body>
</html>