<?php get_header(); ?>

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="container"> 
 		 <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">
             
                 
            
                
                <div class="row">
           		
                 	<div class="row text-center responsive_title">
                     <h2><?php the_title(); ?></h2>
                      <div class="single-report-head-image">
                      <img class="img-responsive" src="<?php the_post_thumbnail_url() ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                     
                    </div>
                     
                   
                     
                     <p>作者：<?php the_field('book_author'); ?></p>
                     <p>ISBN：<?php the_field('book_isbn'); ?></p>
                     
                       <h5 class="text-center"><strong>相关分类：</strong> <span>
                        <p>
                      <?php
					        $categories = get_the_category();
							foreach ( $categories as $category ) { 
					  ?>	
						<!--  <a href="<?php //echo esc_url(get_category_link(get_cat_ID( $category->name ))); ?>" title="<?php //echo $category->name; ?>">-->
						  <?php echo $category->name; ?>
                          
                         <!-- </a>-->
                    
                    <?php		     
						}
					  ?>
                      </p>
                    
                    </span></h5>
                     
                       
                    
                    </div>  
          	   </div>
         
              
                <div class="row item-content report">
                  <div class="col-sm-10 col-sm-offset-1">
                  <h5><span>内容简介</span></h5>
                
                 
                  <?php 
				  
				 (!empty( the_field('book_description')))?the_field('book_description') : the_field('book_short_description'); 
				  
				  
				  ?>
                  
             	  </div>
                </div>
                
                
                
                <div class="row" style="height:60px;"></div>
                
                
                 <?php endwhile; else : ?>
                <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>   
             <?php endif; ?>  
                 <?php wp_reset_postdata();?> 
                 <div class="row item-content">
                    <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 ">
                    	<div class="row">
               			<div class="col-xs-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-facebook"></i>
                            
                           </a> 
                          </div>
                          <div class="col-xs-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-weixin"></i>
                       
                            </a>
                          </div>
                          <div class="col-xs-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-instagram"></i>
                      
                            </a>
                          </div>
                          <div class="col-xs-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-weibo"></i>
                      
                            </a>
                          </div>
                  </div> 
                  </div>
                  </div>
           
                <hr>
                
                
               <div class="row">
               
                <?php
                   
                        

                        $args = array(
                            'post_type' => 'book',
                            'orderby' => 'date',
                            'order' =>'DESC', 
                            'posts_per_page' => 4,
                        );
                        $query = new WP_Query( $args );
                    ?>    
                
                            <h4><b><a href="<?php get_site_url(); ?>/shangci/book">最新专题</a></b></h4>
             
                          <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>     
                         <div class="col-md-3">
                            <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-rounded"   title="<?php the_title(); ?>" alt="<?php the_title(); ?>" ></figure></div></a>
                            <h5><b><?php the_title(); ?> </b></h5>
                          
                        </div>
                       
                          <?php endwhile; else : ?>
                        
                        <p><?echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
                
                        <?php endif ?>
                        <?php wp_reset_postdata();?> 
                        
                         <h5  class="pull-right"><b><a href="<?php get_site_url(); ?>/shangci/book">更多专题...</a></b></h5>
                         
   				</div>
            </div>  
        </div>
 
 </div>  

<?php get_footer(); ?>