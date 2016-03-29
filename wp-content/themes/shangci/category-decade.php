<?php 
/* 
  Template Name: category - decade
*/
?>

<?php get_header(); ?>



<!-- main content -->   

  	 <div class="container category-container">
     	<div class="row">
      		<div class="col-md-10 col-md-offset-1  content-block">
               <div  class="content-tag">
               		<div class="row">
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-craft" ?>"><p><b>工艺分类</b></p></a></div>
                      <div class="col-xs-2 tab-active"><P><b>年代分类</b></P></div>
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-kilns" ?>"><p><b>窑口分类</b></p></a></div>
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-shape" ?>"><p><b>器型分类</b></p></a></div>
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-glaze" ?>"><p><b>釉色分类</b></p></a></div>    
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-people" ?>"><p><b>名家名瓷</b></p></a></div>
                    </div>
               </div>  
               
              <div class="content-main">             
                    
            <?php 
						 $idObj = get_category_by_slug('decade'); 
						 $id = $idObj->term_id;
						 $rowswitch=0;
						 $ulswitch = true;
           ?>
              <div class="row"> 
                 <div class="col-sm-4 col-xs-6 category-list">  
       	  <?php
					$categories = get_categories( array( 'child_of' => $id, 'depth'=> 5, )); 
					foreach ( $categories as $category ) {
                    
					if($category->category_parent == $id){
					  $rowswitch = $rowswitch + 1;			
					  	if(!$ulswitch)
					  	{ 
					  		echo "</ul>\n";
					  	}
					  	$ulswitch = false;
					  
					   if ( $rowswitch == 2){
							echo "</div>\n";
							echo "<div class='col-sm-4 col-xs-6 category-list'>\n"; 
							$rowswitch=0;
				     	}
						?>
						<a href="<?php echo get_category_link( $category->term_id ); ?>">
					      <?php  echo "<h5><b>" . $category->cat_name . "</b></h5>\n";
						?>
                        </a>
                          
					<?php	  
					  		echo "<ul>\n\r";
				 	 	}
				 	  else {
					?>	  
					<a href="<?php echo get_category_link( $category->term_id ); ?>">
                    <?php	  
                     		echo "<li>". $category->cat_name ."</li>\n";
				  		
					?>
                    </a>	
						<?php }	  
				 }
				 ?>
                 </ul>
                </div>                                    
              </div>
 		   </div>          
		</div>
	</div>



<?php get_footer() ?>
