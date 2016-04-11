<?php 
/* 
  Template Name: Expert list page
*/
?>

<?php get_header(); ?> 


      <div class="container">      
     	<div class="row">
      		<div class="content-block">

              <div class="content-main">
              <h4 class="description text-center"><b >赏瓷网专家介绍</b></h4>
              
               <?php 
			  
			  $posts_per_page= 8;
			  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;			  
					  
			  
			  	$args = array(
                            'post_type' => 'expert',
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
                
                 	<div class="col-md-6">
                      <div class="row">
                        <div class="col-xs-4">
                        
                           <div class="row">
                           <img src="<?php the_post_thumbnail_url(); ?>" class="img-thumbnail" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                           </div>
                            <div class="row">
                               <h6>
                               
                              <?php  if(!empty(get_field("expert_phone"))): ?> 
                               
                               <a href="mailto:<?php the_field("expert_phone") ?>"><i class="fa fa-phone-square"></i></a> 
                               <?php endif; ?>
                               
                               <?php  if(!empty(get_field("expert_weibo"))): ?> 
                               <a href="<?php the_field("expert_weibo") ?>" target="_blank"><i class="fa fa-user-plus"></i></a>
                               
                               <?php endif; ?>
                               
                               
                               </h6>
                             </div>   
                        </div>
                        
                        
                        <div class="col-xs-8" >
                             <div class="row" style="padding:10px;">
                             
                                <h4><?php the_title(); ?></h4> 
                                <h6><?php the_content(); ?></h6>   <h6>电子邮件：<a href="mailto:<?php the_field("expert_email"); ?>" title="<?php the_title(); ?>"><?php the_field("expert_email"); ?></a></h6>
                                <h6>电话：<a href="mailto:<?php the_field("expert_phone");?>" title="<?php the_title(); ?>"><?php the_field("expert_phone");?></a></h6>
                            
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
