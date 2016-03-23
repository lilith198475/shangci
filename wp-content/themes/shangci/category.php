<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h4><?php the_title(); ?></h4>
                    
                        <?php endwhile; else : ?>

 <p><?echo  'Sorry, no posts found. Please contact Administrator' ?></p>
			
			     <?php endif; ?>


<?php

$cur_cat_id = get_cat_id( single_cat_title("",false));

echo $cur_cat_id;



?>
                        