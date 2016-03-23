<?php get_header(); ?>


<!-- main content -->   
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	 <div class="container">
     	<div class="row  item-title">
      		<div class="col-sm-2">    
            
            <h1><?php the_ID(); ?></h1>
            </div>
            
            <div class="col-sm-10">
            <h3><?php the_title(); ?></h3>
            <h5><?php the_field('subtitle'); ?></h5>
           
            
            </div>
		</div>
     </div>   
     
     <div class="container">   
        <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">
            <?php 
			if(is_singular() and has_shortcode( $post->post_content, 'gallery' )):
			
			?>
            
              <div class="row">
            
                     <div class="demo">
                        <div class="item">            
                            <div class="clearfix">
                            	 <p><span class="glyphicon glyphicon-zoom-in"></span> <a href="#">按图放大</a></p>
                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                   <?php $gallery = get_post_gallery_images( $post );
								   foreach( $gallery as $image_url ) {
						
								   ?>
                                    <li data-thumb="<?php echo $image_url ;?>"> 
                                        <a href="#" onClick="event.preventDefault();" title="Image 2"><img src="<?php echo $image_url; ?>" class="img-responsive lightimg"/></a>
                                    </li>
                                   <?php  }?>      
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                 </div>  
                 
              <?php endif ?>   
                 
                 
                 <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    
                                <h4 class="text-center" style="border-bottom: 2px solid #6A6A6A; padding-bottom:5px;">精品详情</h4>
                                
                    </div>
           		</div> 
                
                <div class="row">
                
           		<div class="col-sm-8">
                 	<div class="row item-content-title item-content">
                     <h4><?php the_title(); ?></h4>
                     <p><?php the_field('size'); ?></p>
                    
                    </div>
                 	<div class="row item-content">
                      <h5><span>分类</span></h5>
                      <?php
					         $categories = get_the_category();
							foreach ( $categories as $category ) { 
   							 $cat_tree = get_category_parents($category);
							$top_cat = split('/',$cat_tree);
							$parent = $top_cat[0];
					  ?>	
					<p><?php echo $parent; ?>：<a href="<?php echo esc_url(get_category_link(get_cat_ID( $category->name ))); ?>"><?php echo $category->name;?></a></p>
                    
                     <?php		     
						}
					  ?>
                      
                    </div>
                    <div class="row item-content">
                    	<h5><span>精品来源</span></h5>
                        <p>1894-1922年間得自中國，後家族傳承</p>
                    </div>
                    
                 
                </div>
                
                <div class="col-sm-3 col-sm-offset-1 hidden-xs">
                  <div class="row item-content">
               		<div class="col-sm-6 col-md-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-facebook"></i>
                            
                           </a> 
                          </div>
                          <div class="col-sm-6 col-md-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-weixin"></i>
                       
                            </a>
                          </div>
                          <div class="col-sm-6 col-md-3 social">
                          <a href="#" class="social-icon">
                            <i class="fa fa-instagram"></i>
                      
                            </a>
                          </div>
                          <div class="col-sm-6 col-md-3 social">

                          <a href="#" class="social-icon">
                            <i class="fa fa-weibo"></i>
                      
                            </a>
                          </div>
                  </div> 
                  <div class="row ">
                    <p><a href="#">联系专家关于详细问题</a></p>
                    <p><a href="#">打印本藏品信息</a></p>
                  </div>       
                    
                 </div>
              
           </div>
           
              
                <div class="row item-content">
                 <h5><span>相关资料</span></h5>
                 <div class="description">
                 <?php
				  $content = strip_shortcode_gallery( get_the_content() );                                        
                  $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ); 
				  echo $content;
				 ?>
                 </div>
                </div>
                
               <?php endwhile; else : ?>
			         <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>   
                
             <?php endif; ?>   
              <?php wp_reset_postdata();?> 
             	<hr class="visible-xs">
                  <div class="row item-content visible-xs" >
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
                  <div class="row item-content visible-xs ">
                    <p><a href="#">联系专家关于详细问题</a></p>
                    <p><a href="#">打印本藏品信息</a></p>
                  </div>        
                <hr>
                
                
                
               <div class="row">
                
                <?php
                   
                        

                        $args = array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' =>'DESC', 
                            'posts_per_page' => 5,
                        );
                        $query = new WP_Query( $args );
                    ?>    
                
                
                            <h4><b><a href="<?php get_site_url(); ?>/shangci/jingping">最新精品</a></b></h4>
                         <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>   
                         <div class="col-md-2">
                            <a href="<?php the_permalink(); ?>" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-responsive img-rounded"  ></figure></div>
                            <h5><b><?php the_title(); ?> </b></h5>
                            <p><?php the_field('subtitle'); ?></p></a>
                        </div>
                        
                        
                        <?php endwhile; else : ?>
                        
                        <p><?echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
                
                        <?php endif ?>
                        <?php wp_reset_postdata();?> 
                        
                       

                          <div class="col-md-2">
                            <a href="<?php get_site_url(); ?>/shangci/jingping" class="link-more">
                                <div class="image-preview-container">
                                        <div class="round-button">
                                                <span class="fa-stack fa-lg">
                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                    <i class="fa fa-folder-o fa-stack-1x fa-inverse"></i>
                                                </span>
                                                <br><br>
                                        更多精品欣赏
                                        </div> 
                                </div>
                            </a>
                        </div>
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

<?php get_footer(); ?>