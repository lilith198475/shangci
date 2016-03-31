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
                            
                             <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <img src="<?php the_field('slider_thumb') ?>" class="img-thumbnail" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></a>
                              <div class="carousel-caption">
                                <a href="<?php the_permalink(); ?>" class="text-center" title="<?php the_title(); ?>"> <h4><?php the_title(); ?></h4>
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
                    <a href="single-report/1.html" style="margin-bottom:0px;">
                    <div class="thumbnail" ><figure class="tint"><img src="img/single-report/1/thumbnail.jpg" alt="" class="img-responsive img-rounded"></figure></div>
                    
                    <h4 class="text-center">中國瓷器收藏指南：七大注意事項</h4>
                   <p class="text-center">中國瓷器可能令新進藏家望而生畏，專家葛曼琪 (Margaret Gristina) 與Menachem Wecker分享鑑賞心得，協助藏家收窄購藏的範圍。</p></a>            
                
            </div>                 
          </div>
        </div>
       </div> 
         <hr style="margin-top:0px;"> 
        
         <!-- The second row content --> 
      <div class="container">
      <div class="row">
      <div class="col-md-8"> <h4><b>更多分类欣赏</b> 
      <a href="category-crafts.html" class="round-button">
      
      	<span class="fa-stack fa-lg">
  			<i class="fa fa-circle fa-stack-2x"></i>
  			<i class="fa fa-bars fa-stack-1x fa-inverse"></i>
		</span>
	</a>
    </h4> </div>
      </div>
      
        <div class="row"> 
         	<div class="col-md-4">
           
           		<a href="qixing-panxing.html" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="img/single-item/56/slider-thumb.jpg" alt="" class="img-responsive img-rounded" ></figure></div>
            	<h5><b>器型-盘型</b></h5>
                <p>敞口、浅腹、平底、高足或圈足</p></a>
            </div>
            
            <div class="col-md-4">
            	<a href="qixing-panxing.html" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="img/single-item/801/slider-thumb.jpg" alt="" class="img-responsive img-rounded" ></figure></div>
            	<h5><b>釉色-青花</b></h5>
                <p>青花瓷又称白地青花瓷,常简称青,属釉下彩瓷.</p></a>
            </div>
            
            
            <div class="col-md-4">
            	<a href="qixing-panxing.html" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="img/single-item/301/slider-thumb.jpg" alt="" class="img-responsive img-rounded" ></figure></div>
            	<h5><b>窑口-景德镇</b></h5>
                <p>诞生于今江西省景德镇，故称景德镇窑,据记载始烧于唐武德(618一626)间。</p></a>
            </div>
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
		  $args2 = array(
		  'post_type' => 'post',
		  'orderby' => 'date',
		  'order' =>'DESC',
		  'posts_per_page' => 11,
		  );
		  
		  $rowswitch=0;
		  $query2 = new WP_Query( $args2 );
		?> 
         <?php if( $query2->have_posts() ) : while( $query2->have_posts() ) : $query2->the_post(); ?>
          <?php 
		   if ( $rowswitch == 6){
			    echo "</div>"; 
			    echo "<div class='row items-row'>";
				$rowswitch = 0;
		   }
		   $rowswitch = $rowswitch + 1;
		   ?>
         	<div class="col-md-2">
           		<a href="<?php the_permalink(); ?>" class="text-center" title="<?php the_title(); ?>"><div class="thumbnail" ><figure class="tint" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-responsive img-rounded" ></figure></div>
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
      <a href="video.html" class="round-button">
      
      	<span class="fa-stack fa-lg">
  			<i class="fa fa-circle fa-stack-2x"></i>
  			<i class="fa fa-video-camera fa-stack-1x fa-inverse"></i>
		</span>
	</a>
      
      </h4> </div>
      </div>
      <div class="row">
        <div class="col-md-5">
        	<a href="single-video/1.html" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="img/thumbnail/video1.jpg" alt="" class="img-responsive img-rounded"  ></figure></div>
            	<h5><b>国宝档案</b></h5>
             <p>粉彩瓷器</p></a>
        </div>
        <div class="col-md-5">
        	<a href="single-video/2.html" class="text-center"><div class="thumbnail" ><figure class="tint"><img src="img/thumbnail/video2.jpg"  alt="" class="img-responsive img-rounded" ></figure></div>
            	<h5><b>台北故宫</b></h5>
            <p>故宫国宝在台北</p></a>
        </div>
         <div class="col-md-2">
            	<a href="video.html" class="link-more">
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
