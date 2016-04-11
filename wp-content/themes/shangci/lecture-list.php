
<?php 
/* 
  Template Name: lecture list page
*/
?>

<?php get_header(); ?>  
  
<!-- main content -->   

  	
     <div class="container">   
        <div class="row ">
        	<div class="col-sm-10 col-sm-offset-1">
             
                     <div class="demo">
                        <div class="item">            
                            <div class="clearfix"> 
                                 <img src="<?php bloginfo('template_directory'); ?>/img/test/longheader.jpg" class="img-responsive"/>                               
                            </div>
                        </div>
                    </div>
               
     </div>
     </div>
		     
     	<div class="row">
      		<div class="col-md-10 col-md-offset-1  content-block">

           <div class="content-main">
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
              <h5 class="description"><b ><?php the_title(); ?></b></h5>
              <p><?php the_content(); ?></p>
           
                      <?php endwhile; else : ?>
			         <p><?echo  '抱歉，系统出现问题，请联络管理员。' ?></p>   
                
                  <?php endif; ?>          
		  
		  <?php wp_reset_postdata();?>
          <?php wp_reset_query();?>       
              
              <br>
              
              
               <h5 class="description"><b >最新讲座</b></h5>
              <div class="row items-row"> 
                 	
            
               <?php       
                          $posts_per_page = 9;
                          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = array(
                            'post_type' => 'lecture',
                            'paged' => $paged, 
                            'posts_per_page'=> $posts_per_page,
                            'orderby' => 'date',
                            'order' =>'DESC',
                        );
                        query_posts($args);  
				       global $wp_query; 
                    ?>     
              <?php if( have_posts() ) : while(have_posts() ) :the_post(); ?>
            
                    <div class="col-md-4">
                        <a href="<?php the_permalink();?>"><div class="thumbnail" ><figure class="tint"><img src="<?php the_post_thumbnail_url();?>" alt="" class="img-responsive"></figure></div>
                        <h5 class="text-center"><b><?php the_title(); ?></b></h5>
                		<p class="text-center"><?php the_field("lecture_holder"); ?> - <?php the_field("lecture_date"); ?></p></a>
                    </div>
                    
                   
                    
             	 <?php endwhile; else : ?>
  	
  	                <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>
  	
  	              <?php endif; ?>     
                  

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
 

<?php get_footer()?>
