<?php get_header(); ?>

<!-- main content -->   
     <div class="container">   
        <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">
					   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                          <div class="row">
            
                                        <?php  
                                                $terms=get_the_terms($post->id, 'lecture-category');
                                                $video_switch = false;
                                                
                                                foreach ( $terms as $term ) {
                                                
                                                    if ( $term->name == "视频" ) {
                                                        $video_switch = true;
                                                     }
                                                 
                                                }
                                        
                                         ?>
                                        
                                      <?php  if( $video_switch ):    ?>
                                        
                                              <div class="embed-responsive embed-responsive-16by9">
                                                     <iframe style="al" width="560" height="315" src="<?php the_field("lecture_video_url"); ?>" frameborder="0" allowfullscreen></iframe>
                                              </div>
                                      <?php else: ?>
                                            <div class="single-report-head-image">
                                                     <img class="img-responsive" src="<?php  the_field("lecture_image"); ?>">
                                           </div>
                                      <?php endif; ?>  
                                
                               
                             </div>  
                             
                             <div class="row">
                                <div class="col-xs-10 col-xs-offset-1">
                                
                                <h5 class="text-center"><span>
                                
										<?php 
                                        foreach ( $terms as $term ) {
                                           echo $term->name;               
                                        }
                                ?></span></h5>
                                            
                                </div>
                            </div> 
                            
                            <div class="row">
                            
                                <div class="row text-center">
                                 <h2><?php the_title(); ?></h2>
                                 <p><?php the_field("lecture_date"); ?></p>
                                
                                </div>  
                           </div>
                       
                          
                            <div class="row item-content report">
                              <div class="col-sm-10 col-sm-offset-1">
                              
                            <div class="row"><h4 class="inline">主讲人: </h4> <p class="inline"> <?php the_field("lecture_holder");?></p></div>
                            <div class="row"><h4 class="inline">举办日期: </h4> <p class="inline"> <?php the_field("lecture_date");?></p></div>
                            <?php if (!empty(get_field("lecture_place"))): ?>
                            <div class="row"> <h4 class="inline">地点: </h4> <p class="inline"> <?php the_field("lecture_place");?></p></div>
                            <?php endif;?>
                            
                            <?php if (!empty(get_field("lecture_address"))): ?>
                            <div class="row"> <h4 class="inline">地址: </h4> <p class="inline"><?php the_field("lecture_address");?></p></div>
                            <?php endif;?>
                             
                            <?php if (!empty(get_field("lecture_duration"))): ?>
                            <div class="row"> <h4 class="inline">时长: </h4> <p class="inline"> <?php the_field("lecture_duration");?></p></div> 
                            <?php endif;?>
                            
                            <?php if (!empty(get_field("lecture_ticket"))): ?>
                            <div class="row"> <h4 class="inline">购票: </h4> <p class="inline"> <?php the_field("lecture_ticket");?></p></div> 
                            <?php endif;?>
                            
                            <?php if (!empty(get_field("lecture_sponsor"))): ?>
                            <div class="row"> <h4 class="inline">主要赞助: </h4> <p class="inline"> <?php the_field("lecture_sponsor");?></p></div> 
                            <?php endif;?>
                            
                            <div class="row"> <h4>内容简介: </h4><p> <?php the_content(); ?></p></div> 
                               
                              </div>
                            </div>
                            
                              <?php endwhile; else : ?>
                                    
                                    <p><?echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
                            
                            <?php endif ?>
                            
                            <?php wp_reset_postdata();?>
                            <?php wp_reset_query();?>          
                            
                            
                            
                            
                             <div class="row item-content">
                                <div class="col-xs-6 col-xs-offset-3">
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
                            
                                        <h4><b><a href="<?php get_site_url(); ?>/shangci/lecture">最新讲座</a></b></h4>
                                        
                                 <?php              
											$args = array(
											'post_type' => 'lecture',
											'posts_per_page'=> 4,
											'orderby' => 'date',
											'order' =>'DESC',
							   				);              
                                         query_posts($args);
                              ?>          
                                        
                                 <?php if( have_posts() ) : while(have_posts() ) :the_post(); ?>         
                                    <div class="col-md-3">
                                        <a href="<?php the_permalink();?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive img-rounded" ></figure></div>
                                        <h5><b><?php the_title(); ?></b></h5>
                                        <p><?php the_field("lecture_holder"); ?> - <?php the_field("lecture_date"); ?></p></a>
                                    </div>   
                                        
                                    
								 <?php endwhile; else : ?>
                    
                                    <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>
                    
                                  <?php endif; ?>     

                                  
                                <h5  class="pull-right"><b><a href="<?php get_site_url(); ?>/shangci/lecture">更多讲座...</a></b></h5>
                                              
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
