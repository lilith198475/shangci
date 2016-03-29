<?php 
/* 
  Template Name: category - famouse maker   
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
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-age" ?>"><P><b>年代分类</b></P></a></div>
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-kilns" ?>"><p><b>窑口分类</b></p></a></div>
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-shape" ?>"><p><b>器型分类</b></p></a></div>
                      <div class="col-xs-2 tab-sleep"><a href="<?php echo $_SERVER['PHP_SELF']."/category-shape" ?>"><p><b>釉色分类</b></p></a></div>                 <div class="col-xs-2 tab-active"><p><b>名家名瓷</b></p></div>
                    </div>
               </div>  
               
              <div class="content-main">             
                    
            <?php 
                     $idObj = get_category_by_slug('famous_maker'); 
                     $id = $idObj->term_id;

                    $rowswitch=0;
           ?>
                  <div class="row items-row">   
       <?php
            $categories = get_categories( array( 'child_of' => $id, 'depth'=> 5, )); 
            foreach ( $categories as $category ) {
                
                
		          if ( $rowswitch == 4){
			          echo "</div>"; 
                      echo "<div class='row items-row'>";
					  $rowswitch=0;
                  }
                $rowswitch = $rowswitch + 1;
                   $query = new WP_Query( array( 'cat' => $category->term_id, 'posts_per_page' => 1) );
                      
                     if ( $query->have_posts() ) {
                       
                        while ( $query->have_posts() ) {
                            $query->the_post();
                         ?>
                     
                      	<div class="col-md-3">
                        <a href="<?php echo get_category_link( $category->term_id ); ?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-responsive img-circle"  ></figure></div>
                        <h5><b><?php echo $category->cat_name;  ?></b></h5></a>
                        
            		</div>
                      
              <?php }
                      
                    }
                
                
                
                   else {
                        echo "没有关联的项目";
                    }
                   wp_reset_postdata();
            }
         wp_reset_query();     
                
         ?>        
                  
              </div>
 		   </div>
		</div>
	</div>



<?php get_footer() ?>
