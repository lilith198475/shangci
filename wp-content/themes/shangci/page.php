<?php get_header(); ?>
<!-- main content -->   

  	
     <div class="container">   
           
     	<div class="row">
      		<div class="col-md-10 col-md-offset-1  content-block">

           <div class="content-main">
           
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h4 class="description"><b ><?php the_title();?></b></h4>
              <p> <?php the_modified_time('F j, Y'); ?></p>
                  <br>
              <?php echo the_content()?>
              
                
                 <?php endwhile; else : ?>
                <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>   
                <?php endif; ?>  
                 
         </div>
           
              
		</div>
	</div>
    </div>
 
<?php get_footer(); ?>
