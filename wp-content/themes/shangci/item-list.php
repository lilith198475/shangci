<?php 
/* 
  Template Name: item list page
*/
?>


 <!------------------------------------------- testing -------------------------------------------------->
   <?php  
 if(isset($_POST['submit']))
{
     $cat=[]; 
	 $cat_in=[];
	 $cat_decade=[];
	 $cat_shape=[];
	 $cat_dkilns=[];
	 $cat_glaze=[];
	 $cat_craft=[];
	 
    if (isset($_POST['decade'])){
        $con = $_POST['decade'];
        foreach($con as $selected)
            /*echo $selected."\n";*/
			array_push($cat_decade,$selected);
    }
	
	 if (isset($_POST['shape'])){
        $con = $_POST['shape'];
        foreach($con as $selected)
			array_push($cat_shape,$selected);
    }
	
	 if (isset($_POST['kilns'])){
        $con = $_POST['kilns'];
        foreach($con as $selected)
/*            echo $selected."\n";*/
			array_push($cat_dkilns,$selected);
    }
	
	 if (isset($_POST['glaze'])){
        $con = $_POST['glaze'];
        foreach($con as $selected)
           /* echo $selected."\n";*/
			array_push($cat_glaze,$selected);
    }
	
	 if (isset($_POST['craft'])){
        $con = $_POST['craft'];
        foreach($con as $selected)
            /*echo $selected."\n";*/
			array_push($cat_craft,$selected);
    }
	
	$mostitem = max(sizeof($cat_decade),sizeof($cat_shape),sizeof($cat_dkilns),sizeof($cat_glaze),sizeof($cat_craft));
	if ( sizeof($cat_decade) == $mostitem )
	{
		$cat=$cat_decade; 
		$cat_in = array_merge($cat_shape,$cat_dkilns,$cat_glaze,$cat_craft);
	}
	elseif (sizeof($cat_shape) == $mostitem )
	{
		$cat=$cat_shape; 
		$cat_in = array_merge($cat_decade,$cat_dkilns,$cat_glaze,$cat_craft);
	}
	elseif (sizeof($cat_dkilns) == $mostitem )
	{
		$cat=$cat_dkilns; 
		$cat_in = array_merge($cat_decade,$cat_shape,$cat_glaze,$cat_craft);
	}
	elseif (sizeof($cat_glaze) == $mostitem )
	{
		$cat=$cat_glaze; 
		$cat_in = array_merge($cat_decade,$cat_shape,$cat_dkilns,$cat_craft);
	}
	else{
		$cat=$cat_craft; 
		$cat_in = array_merge($cat_decade,$cat_shape,$cat_dkilns,$cat_glaze);
	}

}
?>
 <!------------------------------------------- testing end-------------------------------------------------->

<?php get_header(); ?>





	 <div class="container">
     	<div class="row  in-category-title">
            
            <div class="col-xs-12">
            <h2>赏瓷精品</h2>
            <h5></h5>
            
            </div>
		</div>
     </div>   
     
     <div class="container-fluid hidden-xs">   
     
      <div class="row">
       <div class="col-md-12">
        <div class="well">
            <div id="myCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                
                  <?php       
                        $posts_per_page1 = 12;
						$posts_per_row= 4;
						$posts_counter=0;
                        

                        $args1 = array(
                            'post_type' => 'post',
                            'posts_per_page'=> $posts_per_page1,
                            'orderby' => 'date',
                            'order' =>'DESC',
                        );
                        $the_query = new WP_Query( $args1 );
                    ?>     
                
                	<?php if( $the_query->have_posts() ) : while($the_query->have_posts() ) :$the_query->the_post(); ?>
                     <?php if ($posts_counter==0){
					  echo "<div class='item active'> \n";
					  echo "<div class='row'> \n";
					 }
                      else if(($posts_counter % $posts_per_row) ==0) { 
					 
						  echo "</div> \n";	
						  echo "</div> \n";
					   echo "<div class='item '> \n";
                       echo "<div class='row'> \n";
					  }
                    ?>                 
                       <div class="col-xs-3"><a href="<?php the_permalink(); ?>" class="thumbnail"><img src="<?php the_field('slider_thumb') ?>" alt="Image" class="img-responsive"></a>
                       </div>
                      
                
                
                    <?php
					
						if(($posts_per_page1-$posts_counter) == 1 )
						 {
							   echo "</div> \n";	
						       echo "</div> \n";
						 }
						  $posts_counter = $posts_counter+1;
						  
					 ?>  
                     
                     
                	<?php endwhile; else : ?>
  	
  	                <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>
  	
  	                <?php endif; ?>        
                    <?php wp_reset_postdata();?>
                    <?php wp_reset_query();?>  
                
                </div>
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" ></span></a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" ></span></a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>
   </div>  
   </div>
   
  
 
   
   
   <!-- center container -->
   <div class="container">
        <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">  
                 <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    
                                <h4 class="text-center" style="border-bottom: 2px solid #6A6A6A; padding-bottom:5px;">精品列表</h4>       
                    </div>
           		</div> 
                
                <div class="row">
                 <?php 
				 
				
				 
				 foreach ($cat_decade as $dec) {
    					 echo $dec.','; 
					 }
				 
				 
				 ?>
                
                </div>
                
                <div class="row filter hidden-xs">
                <form action="" method="POST">
 
                		<div class="form-inline filter-form" role="form">
                        	<div class="row">
                             <div class="col-sm-4">
                                	<label> <strong>年份</strong></label>
                                    <div class="filter-select">
                                     <?php 
									 $args_cat= array(
									  'child_of' => get_category_by_slug('decade')->term_id,
									  'hierarchical'=> 1, 
									  'depth'=> 10, 
									  'show_option_none'=>'',
									  'id'=> 'ms',
									  'name'=> 'decade[]',
									  'class'=>'',
									  'multiple'=>'multiple',
								     
									  
									 );
									 wp_dropdown_categories( $args_cat );
									
									  ?>
                                    </div>
                               </div>
                               
                               <div class="col-sm-4">
                                	<label> <strong>器型</strong></label>
                                    <div class="filter-select">

                                       <?php 
									 $args_cat2= array(
									  'child_of' => get_category_by_slug('shape')->term_id,
									  'hierarchical'=> 1, 
									  'depth'=> 10, 
									  'show_option_none'=>'',
									  'id'=> 'ms2',
									  'name'=> 'shape[]',
									  'class'=>'',
									  'multiple'=>'multiple',
									 );
									 wp_dropdown_categories( $args_cat2 );
									
									  ?>
                                    </div>
                               </div> 
                                <div class="col-sm-3 no-padding">
                                		<a href="#" class="more-filter glyph-switch" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-controls="collapseExample2">更多搜索选项 <i class="glyphicon glyphicon-triangle-top"></i></a>		
    							</div>
                                <div class="col-sm-1 no-padding">
                                <button type="submit" value="Submit" name="submit" class="btn btn-default btn-sm">搜索</button>
                                </div>  
                          	</div>
                        </div>

                    
                     <div class="collapse" id="collapseExample2">
 					    <div class="filter-more">
                         		<div class="filter-select">
                        			<label> <strong>窑口</strong></label>
   									<!--<select id="ms3" multiple="multiple">
                                        <option value="yaokou-dingyaoxi">定窑系</option>
                                        <option value="yaokou-cizhouyaoxi">磁州窑系</option>
                                        <option value="yaokou-yaozhouyaoxi">耀州窑系</option>
                                        <option value="yaokou-junyaoxi">钧窑系</option>
                                        <option value="yaokou-longquanyaoxi">龙泉窑系</option>
                                        <option value="yaokou-jindezhenyaoxi">景德镇窑系</option>
                                        <option value="yaokou-jianyaoxi">建窑系</option>
                                        <option value="yaokou-yueyaoxi">越窑系</option>
                                    </select>-->
                                    
                                   
                                         <?php 
									 $args_cat3= array(
									  'child_of' => get_category_by_slug('kilns')->term_id,
									  'hierarchical'=> 1, 
									  'depth'=> 10, 
									  'show_option_none'=>'',
									  'id'=> 'ms3',
									  'name'=> 'kilns[]',
									  'class'=>'',
									  'multiple'=>'multiple',
									 );
									 wp_dropdown_categories( $args_cat3 );
									
									  ?>
                                    
                                 </div>  
                                 <div class="filter-select">
                        			<label> <strong>釉色</strong></label>
   									<!--<select id="ms4" multiple="multiple">
                                        <option value="mingjia-nianxiyao">年希尧</option>
                                        <option value="mingjia-tangyao">唐英</option>
                                    </select>-->
                                    
                                      <?php 
									 $args_cat4= array(
									  'child_of' => get_category_by_slug('glaze')->term_id,
									  'hierarchical'=> 1, 
									  'depth'=> 10, 
									  'show_option_none'=>'',
									  'id'=> 'ms4',
									  'name'=> 'glaze[]',
									  'class'=>'',
									  'multiple'=>'multiple',
									 );
									 wp_dropdown_categories( $args_cat4);
									
									  ?>
                                 </div>  
                                 
                                 <div class="filter-select">
                        			<label> <strong>工艺</strong></label>
   									<!--<select id="ms4" multiple="multiple">
                                        <option value="mingjia-nianxiyao">年希尧</option>
                                        <option value="mingjia-tangyao">唐英</option>
                                    </select>-->
                                    
                                      <?php 
									 $args_cat5= array(
									  'child_of' => get_category_by_slug('craft')->term_id,
									  'hierarchical'=> 1, 
									  'depth'=> 10, 
									  'show_option_none'=>'',
									  'id'=> 'ms5',
									  'name'=> 'craft[]',
									  'class'=>'',
									  'multiple'=>'multiple',
									 );
									 wp_dropdown_categories( $args_cat5);
									
									  ?>
                                 </div>   
  					    </div>
                   
					</div>
                    
                    
                    </form>
          	    </div>
                
                
                
                
                <div class="row order">
                       <span class="pull-left">排序：  <a href="#" class="glyph-switch">日期 <i class="glyphicon glyphicon-triangle-top"></i></a></span>
                       <span class="pull-right">相关精品:7</span>
                </div>
                
                
                <div class="row">
                
                 	<section class="item-list">
                    
                       <?php
                      
						/*$cat=get_category_by_slug('棒槌瓶')->term_id;*/
                        $posts_per_page = 8;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
                        $args = array(
                            'post_type' => 'post',
							'cat'=>$cat,
							'category__and'=> $cat_in,
                            'paged' => $paged, 
                            'posts_per_page'=> $posts_per_page,
                            'orderby' => 'date',
                            'order' =>'DESC',
                        );
                        query_posts($args); 
                    ?>     
                      <?php if( have_posts() ) : while(have_posts() ) :the_post(); ?>
                    
                     	<div class="row result-item">
                        	<div class="col-sm-3 col-xs-4">
                            <a href="<?php the_permalink(); ?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-responsive img-rounded"  ></figure></div></a>
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                             <h3><?php the_ID(); ?></h3>
                             <h5><?php the_title(); ?></h5>
                             <h5>11.1 公分</h5>
                               <p> <?php
					         $categories = get_the_category();
							foreach ( $categories as $category ) { 
   							
					  ?>	
				      <a href="<?php get_category_link($category); ?>"><?php echo $category->name; ?></a>; 
                    
                     <?php		     
						}
					  ?></p>

                            </div>
                            
                            <div class="col-sm-3 hidden-xs">
                            <a href="<?php the_permalink(); ?>"><h5>点击查看精品详情</h5></a>
                            </div>  
                            
                            <div class="col-xs-2 visible-xs">
                            <a href="<?php the_permalink(); ?>"><h2>>></h2></a>
                            </div>     
                            
                        </div>
                        
                     <?php endwhile; else : ?>
  	
  	                <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>
  	
  	                <?php endif; ?>        
                        
  

                    </section>        
                </div>
                <div class="row">
                            
                            <nav style="text-align:center;">
                                     <ul class="pagination">
                                       <?php wpbeginner_numeric_posts_nav(); ?>
                                  </ul>
                        </nav>
                     
        		</div>
                <?php wp_reset_postdata();?> 
                <?php wp_reset_query();?> 
                
                </div>
                
                
                  
            </div>  
        </div>
      </div>
      
   
      
     
 
 <!-- Light Box -->  
 <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-body">
    <button type="button" class="close" data-dismiss="modal">×</button>
		<img src="" class="img-responsive">
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>







<?php get_footer() ?>

<?php
echo '<script type="text/javascript">';
echo '$("#ms").val([';
echo '"21",';
echo '"22"';
echo ']);';

echo '</script>';



?>

