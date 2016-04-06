<?php get_header(); ?>
  
<!-- main content -->   
 
     <div class="container">   
        <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="row">
            
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="<?php echo the_field('video_link'); ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                 </div>  
                 
                 <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    
                    <h5 class="text-center"><span>
                       <?php
					  
					  $terms = get_the_terms($post->id, 'video-category');
							foreach ( $terms as $term ) { 
   								$parent = ancestor_category_custom($term, 'video-category');    
					  ?>	
						<p><a href="<?php echo get_term_link( $parent); ?>" title="<?php echo $parent->name;?>"><?php echo $parent->name; //echo $parent->parent; ?></a>：<a href="<?php echo get_term_link( $term );  ?>" title="<?php echo $term->name;?>"><?php echo $term->name;?></a></p>
                    
                    <?php		     
						}
					  ?>
                    
                    </span></h5>
                                
                    </div>
           		</div> 
                
                 
                <div class="row">
           		
                 	<div class="row text-center">
                     <h2><?php the_title(); ?></h2>
                     <p><?php echo the_field('video_sub_title'); ?></p>
                    
                    </div>  
          	   </div>
           
              
                <div class="row item-content report">
                  <div class="col-sm-10 col-sm-offset-1">
                 
               
                <div class="row"> <h4 class="inline">时长:  </h4><p class="inline"> <?php the_field("video_duration"); ?></p></div> 
                <div class="row"> <h4 class="inline">视频地址:  </h4><p class="inline"> <a href="<?php echo the_field('video_addess_youtube'); ?>">Youtube</a>，<a href="<?php echo the_field('video_address_youku'); ?>">优酷</a>，<a href="<?php echo the_field('video_address_aiqiyi'); ?>">爱奇艺</a></p></div> 
                
                <div class="row"> <h4>内容简介: </h4><p><?php the_field("video_description"); ?></p></div> 
                  

                  
             	  </div>
                </div>
                
                
             <?php endwhile; else : ?>
             <div class="row">
                <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p> 
             </div>     
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
                            'post_type' => 'video',
                            'orderby' => 'date',
                            'order' =>'DESC', 
                            'posts_per_page' => 4,
                        );
                        $query = new WP_Query( $args );
                    ?>    
               
                
                            <h4><b><a href="<?php get_site_url(); ?>/shangci/videos">最新视频</a></b></h4>
                            
                           <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>     
                         <div class="col-md-3">
                            <a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive img-rounded"   title="<?php the_title(); ?>" alt="<?php the_title(); ?>" ></figure></div></a>
                            <h5><b><?php the_title(); ?> </b></h5>
                          
                        </div>
                       
                          <?php endwhile; else : ?>
                        
                        <p><?echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
                
                        <?php endif ?>
                        <?php wp_reset_postdata();?> 
                            
                              
                      
                      <h5  class="pull-right"><b><a href="<?php get_site_url(); ?>/shangci/videos">更多视频...</a></b></h5>
                                  
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
