<?php 
/* 
  Template Name: article list page
*/
?>

<?php get_header(); ?>
  
<!-- main content -->   

  	 <div class="container">
     	<div class="row  in-reports-title">
            
            <div class="col-xs-12">
            <h1 class="text-center">专题文章以及新闻</h1>
            <h4 class="text-center">浏览所有专题文章以及新闻询</h4>
            
            </div>
		</div>
     </div>   
     
   
   <!-- center container -->
   <div class="container">
        <div class="row in-reports-title">
        	<div class="col-sm-12">  
                 <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    
                                <h5 class="text-center">专题排序</h5>       
                    </div>
           		 </div> 
                 
               <div class="row"> 
                                           
                        <div class="text-center reports-dropdown-block">
                        			<div class="btn-group reports-dropdown" role="group">
                         			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      所有类别
                                      <span class="glyphicon glyphicon-menu-down pull-right"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">器型</a></li>
                                      <li><a href="#">鉴别</a></li>
                                      <li><a href="#">拍卖</a></li>
                                      <li><a href="#">窑口</a></li>
                                      <li><a href="#">釉色</a></li>
                                      <li><a href="#"></a></li>
                                    </ul>
                                    </div>
                                    
                                    <div class="btn-group reports-dropdown" role="group">
                                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      所有专题类别
                                      <span class="glyphicon glyphicon-menu-down pull-right"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#">访谈</a></li>
                                      <li><a href="#">短片</a></li>
                                      <li><a href="#">专家指南</a></li>
                                      <li><a href="#">藏家及珍藏</a></li>
                                      <li><a href="#">艺术及收藏品</a></li>
                                      <li><a href="#">艺术新闻及评论</a></li>
                                      <li><a href="#">大师与名匠</a></li>
                                      <li><a href="#">拍卖预展</a></li>
                                    </ul>
                                    </div>
                        
                        </div>
                 
                
               </div> 
                
                <div class="row order report-order">
                       <span class="pull-left">排序：  <a href="#" class="glyph-switch">日期 <i class="glyphicon glyphicon-triangle-top"></i></a></span>
                       <span class="pull-right">相关新闻:4</span>
                </div>
                
                
                <div class="row">
                
                 <?php
                  $posts_per_page = 2;
                  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				  $args = array(
                            'post_type' => 'article',
							
						
                            'paged' => $paged, 
                            'posts_per_page'=> $posts_per_page,
                            'orderby' => 'date',
                            'order' =>'DESC',
                        );
						
			     query_posts($args);  
					
				
                  ?>
                 	<section class="reports-list">
                     
					 
					 <?php if( have_posts() ) : while(have_posts() ) :the_post(); ?>
                    
                     	<div class="row result-item">
                        	<div class="col-sm-6">
                            <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_field('page_thumbnail'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive img-rounded"  ></figure></div></a>
                            </div>  
                            <div class="col-sm-6">
                          <?php  
                            $terms = get_the_terms($post->id, 'article-category');
							foreach ( $terms as $term ) { 
   							$parent = ancestor_category_custom($term, 'article-category');
                            ?>
                            <h6><a href="<?php echo get_term_link( $parent); ?>" title="<?php echo $parent->name;?>"><?php echo $parent->name; //echo $parent->parent; ?></a>：<a href="<?php echo get_term_link( $term );  ?>" title="<?php echo $term->name;?>"><?php echo $term->name;?></h6></p><br>
                            
                          <?php		     
						}
					  ?>  
                            
                            
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_field('sub_title'); ?></p>
                            <a href="single-report/1.html"><h5>阅读全文</h5></a>
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
                
                
                </div>
                
                
                 <?php wp_reset_postdata();?> 
                <?php wp_reset_query();?>  
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