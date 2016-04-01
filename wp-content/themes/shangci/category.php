<?php get_header(); ?>


  
 <!-- center container -->
   <div class="container">
        <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">  
                 <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    
                                <h3 class="text-center">分类：<?php
								
								
								// echo single_cat_title("",false); 
								$curr_cat =	$wp_query->queried_object;
           					    echo $curr_cat->name;
								
								
								?></h3>       
                    </div>
           		</div> 
                
                
                
                 <div class="row item-content">
                 <h5><span>相关资料</span></h5>
                 <div class="description">
                 <?php
				 //$cur_cat_id = get_cat_id( single_cat_title("",false)); ?>
			    <h4  class="description"><b><?php echo $curr_cat->name;  ?></b></h4>
                 
				<?php echo category_description( $curr_cat->term_id); ?>
                  
                 </div>
                </div>
                    
                       <?php
                      
						/*$cat=get_category_by_slug('棒槌瓶')->term_id;*/
                        $posts_per_page = 8;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
                        $args = array(
                            'post_type' => 'post',
							'cat'=>$curr_cat->term_id,
                            'paged' => $paged, 
                            'posts_per_page'=> $posts_per_page,
                            'orderby' => 'date',
                            'order' =>'DESC',
                        );
                       
					   query_posts($args); 
					   global $wp_query; 
       
                    ?>     
      
                <div class="row order">
                 <h4 class="text-center" >精品列表</h4>       
                
                       <span class="pull-left">排序：  <a href="#" class="glyph-switch">日期 <i class="glyphicon glyphicon-triangle-top"></i></a></span>
                       <span class="pull-right">数量:<?php echo $wp_query->found_posts;?></span>
                </div>
                
                
                <div class="row">
                
                 	<section class="item-list">
                    
                  
                      <?php if( have_posts() ) : while(have_posts() ) :the_post(); ?>
                    
                     	<div class="row result-item">
                        	<div class="col-sm-3 col-xs-4">
                            <a href="<?php the_permalink(); ?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-responsive img-rounded"  ></figure></div></a>
                            </div>
                            
                            <div class="col-sm-6 col-xs-6">
                             <h3><a href="<?php the_permalink(); ?>"><?php the_ID(); ?></a></h3>
                             <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                             <h5>11.1 公分</h5>
                               <p> <?php
					         $categories = get_the_category();
							foreach ( $categories as $category ) { 
   							
					  ?>	
				      <a href="<?php echo esc_url(get_category_link(get_cat_ID( $category->name ))); ?>"><?php echo $category->name; ?></a>; 
                    
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
<?php get_footer() ?>    
    
    
    
                        