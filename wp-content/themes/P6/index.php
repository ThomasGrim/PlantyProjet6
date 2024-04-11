<?php get_header( ); ?>
<section>
    <div class="container">
    <?php if(have_posts(  )):?>   
        <?php while(have_posts(  )): the_post(); ?>
                <div class="row m-dw-30">
                    <div class="col-xs-2">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </div>
                    <div class="col-xs-10">
                        <!-- <h1><?php the_title(  ); ?></h1> -->
                        <?php the_content(  ); ?> <!-- affiche l'excerpt de l'article sinon mettre "content" ou "excerpt" -->
                    </div>
                </div> <!-- /row -->
            <?php endwhile; ?>       
        <?php else: ?>          
                <div class="row">
                    <p>il n'y a pas de résultats</p>
                </div>                
        <?php endif; ?>
    </div> <!-- /container --> 
</section>  


<?php get_footer(); ?>