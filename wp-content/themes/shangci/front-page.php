<?php 
/* 
  Template Name: main Page
*/
?>
<?php get_header() ?>	

  
    <!-- The first row content --> 
    <div class="container">
   		<div class="row">
          <div class="col-md-8">
          	<div id="slidercontent">        
                    <h4><b>最新资讯</b></h4>
                     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                          </ol>
                          <!-- Wrapper for slides -->
                          <?php
						    $args = array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' =>'DESC',
                            'posts_per_page' => 5,
                        	);
                            $query = new WP_Query( $args );
							$firstswitch = true;
                   		    ?>    
                           <div class="carousel-inner" role="listbox">
                           
                           <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                            <?php
							  if($firstswitch) {
							   echo "<div class='item active'>";
							   $firstswitch = false;
							  }else{
								echo "<div class='item'>";
							  }
								
						      ?> 
                            
                             <a href="<?php the_permalink(); ?>"> <img src="<?php the_field('slider_thumb') ?>" class="img-thumbnail" alt="..."></a>
                              <div class="carousel-caption">
                                <a href="<?php the_permalink(); ?>" class="text-center"> <h4><?php the_title(); ?></h4>
                    		 <p><?php the_field('subtitle'); ?> </p></a>
                              </div>
                            </div>
                            <?php endwhile; else : ?>
                        
                            <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
                
                            <?php endif ?>
                           <?php wp_reset_postdata();?> 
                      

                          </div>
                         <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                     </div>    
              </div>	  
          </div>
          
         <hr class="visible-xs" style="margin-top:0px;"> 
          
          <div class="col-md-4">
          	<div id="newscontent">
               
                    <h4><b>专题报道</b></h4>
                       <?php
						    $args = array(
                            'post_type' => 'article',
                            'orderby' => 'date',
                            'order' =>'DESC',
                            'posts_per_page' => 1,
                        	);
                            $query = new WP_Query( $args );
						
                   		?>    
                    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                     <a href="<?php the_permalink(); ?>" style="margin-bottom:0px;">
                  	  <div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-responsive img-rounded"></figure></div>
                  	  <h4 class="text-center"><?php the_title(); ?></h4>
                    <p class="text-center"><?php the_field('sub_title')?></p></a>    
                   <?php endwhile; else : ?>
					 <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
                    <?php endif ?>
                    <?php wp_reset_postdata();?>              
                
            </div>                 
          </div>
        </div>
       </div> 
         <hr style="margin-top:0px;"> 
        
         <!-- The second row content --> 
      <div class="container">
      <div class="row">
      <div class="col-md-8"> <h4><b>更多分类欣赏</b> 
      <a href="<?php get_site_url(); ?>/shangci/category-crafts" class="round-button">
      
      	<span class="fa-stack fa-lg">
  			<i class="fa fa-circle fa-stack-2x"></i>
  			<i class="fa fa-bars fa-stack-1x fa-inverse"></i>
		</span>
	</a>
    </h4> </div>
      </div>
      
        <div class="row">
        	  <?php
				  $args2 = array(
				  'post_type' => 'post',
				  'orderby' => 'rand',
				  'posts_per_page' => 3,
				  );
				  
				  $query2 = new WP_Query( $args2 );
			  ?> 
            <?php if( $query2->have_posts() ) : while( $query2->have_posts() ) : $query2->the_post(); ?>
         	<div class="col-md-4">
              <?php
					      $categories = get_the_category();
						  $category_index = rand(0, sizeof($categories)-1);
   						  $cat_tree = get_category_parents($categories[$category_index]);
					     $top_cat = explode("/",$cat_tree);
				        $parent = $top_cat[0];
					  ?>	
                      
                      
           		<a href="<?php echo esc_url(get_category_link(get_cat_ID( $categories[$category_index]->name ))); ?>" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="<?php the_field('slider_thumb') ?>" alt="" class="img-responsive img-rounded" ></figure></div>
            	<h5><b>  
				  
				      <?php echo $parent ?>: <?php echo  $categories[$category_index]->name; 
					  
					  
					  ?>; 
                    
                    </b></h5>
                <p><?php 
				$c = category_description( $categories[$category_index]->term_id);	
				echo excerpt_read_more_link($c);
				?>
                
                
                </p></a>
            </div>
            
             <?php endwhile; else : ?>
 					<p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
		 	<?php endif ?>
			<?php wp_reset_postdata();?>

        </div>  
   </div>
   
   <hr>
   
      <!-- The third row content --> 
      <div class="container">
      <div class="row">
      <div class="col-md-8"> 
      	<h4><b>精品瓷器欣赏</b> 
              <a href="<?php get_site_url(); ?>/shangci/jingping" class="round-button">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-folder-o fa-stack-1x fa-inverse"></i>
                </span>
            </a>
        </h4> 
    	</div>
      </div>
        <div class="row items-row">
        
        <?php
		  $args3 = array(
		  'post_type' => 'post',
		  'orderby' => 'date',
		  'order' =>'DESC',
		  'posts_per_page' => 11,
		  );
		  
		  $rowswitch=0;
		  $query3 = new WP_Query( $args3 );
		?> 
         <?php if( $query3->have_posts() ) : while( $query3->have_posts() ) : $query3->the_post(); ?>
          <?php $rowswitch = $rowswitch + 1;
		   if ( $rowswitch == 7){
			    echo "</div>"; 
			    echo "<div class='row items-row'>";
		   }
		   ?>
         	<div class="col-md-2">
           		<a href="<?php the_permalink(); ?>" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-responsive img-rounded"  ></figure></div>
            	<h5><b><?php the_title(); ?></b></h5>
                <p><?php the_field('subtitle'); ?></p></a>
            </div>
            
          <?php endwhile; else : ?>
 			<p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
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
   <hr>
   
   <!-- The fourth row content -->  
    <div class="container">
    <div class="row">
      <div class="col-md-8"> <h4> <b>视频</b>
      <a href="<?php get_site_url(); ?>/shangci/video-page" class="round-button">
      
      	<span class="fa-stack fa-lg">
  			<i class="fa fa-circle fa-stack-2x"></i>
  			<i class="fa fa-video-camera fa-stack-1x fa-inverse"></i>
		</span>
	</a>
      
      </h4> </div>
      </div>
      <div class="row">
        <?php
		  $args4 = array(
		  'post_type' => 'video',
		  'orderby' => 'date',
		  'order' =>'DESC',
		  'posts_per_page' => 2,
		  );
		  $query4 = new WP_Query( $args4 );
		?> 
        
        <?php if( $query4->have_posts() ) : while( $query4->have_posts() ) : $query4->the_post(); ?>
        <div class="col-md-5">
        	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive img-rounded"  ></figure></div>
            	<h5><b><?php the_title(); ?></b></h5>
               <p><?php the_field('video_sub_title'); ?></p></a>
        </div>
        
       <?php endwhile; else : ?>
       			<p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>   
	   <?php endif ?>
	 <?php wp_reset_postdata();?>     
         <div class="col-md-2">
            	<a href="<?php get_site_url(); ?>/shangci/video-page" class="link-more">
                	<div class="image-preview-container2">
                            <div class="round-button">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-video-camera fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <br><br>
                                    更多视频欣赏  
                            </div>
                            
                            
                    </div>     
                </a>
        </div>
 	  </div>
   </div>


<?php get_footer()?>
