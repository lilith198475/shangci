<?php 
/* 
  Template Name: Book list page
*/
?>

<?php get_header(); ?> 


      <div class="container">      
     	<div class="row">
      		<div class="col-md-10 col-md-offset-1  content-block">

              <div class="content-main">
              <h4 class="description text-center"><b >瓷器鉴赏书籍推荐</b></h4>
              
               <?php 
			  
			  $posts_per_page= 8;
			  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;			  
					  
			  
			  	$args = array(
                            'post_type' => 'book',
                            'paged' => $paged, 
                            'posts_per_page'=> $posts_per_page,
                            'orderby' => 'date',
                            'order' =>'DESC',
			   );
			   $switch = 0 ;
			   query_posts($args);
			   global $wp_query;
			  
			  ?>  
               <div class="row pros">
                <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
              	
               
                
                  <?php if ($switch == 1):
				    echo "<div class='row visible-xs' style='height:20px;'></div>";
					endif;
					
					
				    if($switch == 2):
					$switch=0;
					echo "</div>";
				    echo " <div class='row pros'>";
					endif;
					
				    ?>
                
                
                   <div class="col-sm-6">
                      <div class="row">
                        <div class="col-xs-5">
                          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <img src="<?php the_post_thumbnail_url(); ?>" class="img-thumbnail" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"></a>
                        </div>
                        <div class="col-xs-7">
                             <div class="row">
                              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <h5><b><?php the_title(); ?></b></h5>
                                <h6>作者：<?php the_field("book_author"); ?></h6> 
                                <P><?php the_field("book_short_description");?></p>
                              </a>  
                             </div>
                            
                        </div>	
                     </div>
                    </div>
              
               <?php 
				    $switch= $switch + 1;
			 ?>
               
          <?php endwhile; else: ?>  
                  
                <p><?php echo  '抱歉，系统出现错误，请联系管理员。' ?></p>
          
          <?php endif; ?>  
          </div>
             
		</div>
	</div>
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
 

<?php get_footer()?>
