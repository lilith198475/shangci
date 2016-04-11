<?php 
/* 
  Template Name: contact us page
*/
?>

<?php get_header(); ?>
  
<!-- main content -->   

  	
     <div class="container">      
     	<div class="row">
      		<div class="col-md-10 col-md-offset-1  content-block">

              <div class="content-main">
              
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <h4 class="description text-center"><b ><?php the_title();?></b></h4>
            
               <?php the_content() ?>
             <?php endwhile; else : ?>        
              <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>   
            <?php endif; ?>   
            
             
               
             <div class="row pros">
            
              <hr style="margin:15px 0;">
               <h4 class="description text-center"><b>快速联系我们</b></h4>
             </div>
              
               
             <div class="row pros">
             
              <form class="form-horizontal " role="form" method="post" action="index.php">
                <div class="form-group">
                    <label for="name" class="col-sm-2 text-center">姓名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="尊姓大名" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 text-center">您的电子邮件</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="xxx@domin.com" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 text-center">请您留言</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 text-center">2 + 3 = ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="您的答案">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
        </div>
    </form>
             
             
             </div> 
                
           
                
              
 		   	</div>
		</div>
	</div>
    </div>
 
<?php get_footer() ?>
