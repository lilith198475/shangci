
<?php 
/* 
  Template Name: about us page
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
                                 <img src="img/test/longheader.jpg" class="img-responsive"/>                               
                            </div>
                        </div>
                    </div>
               
     </div>
     </div>
		     
     	<div class="row">
      		<div class="col-md-10 col-md-offset-1  content-block">

              <div class="content-main">
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <h4 class="description"><b ><?php the_title();?></b></h4>
                      <?php the_content(); ?>
            <?php endwhile; else : ?>        
              <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>   
            <?php endif; ?>          
                        
 		   </div>
		</div>
	</div>
    </div>
 
<?php get_footer() ?>
