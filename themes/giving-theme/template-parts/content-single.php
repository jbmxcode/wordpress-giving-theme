<div class="single-post">
    <div class="row">
        <div class="row__inner">
            <div class="column">

                <article class="blog-post">
                    <div class="section__inner">
                        <div class="post">
                            <div class="post-thumbnail">                                
                                <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php else : ?>
                                <img src="https://source.unsplash.com/870x500/??office" alt="Image">
                                <?php endif; ?>
                            </div>
                            
                            <div class="post-title">
                                <h2 class="title title-post"><span class="title-inner"><?php the_title(); ?></span></h2> 
                            </div>  

                            <div class="post-meta">
                                <ul class="items-list">
                                    <li class="item"><?php giving_theme_posted_on(); ?></li>
                                    <li class="item"><?php giving_theme_posted_by(); ?></li>
                                </ul>
                            </div>

                            <div class="post-content">
                                <?php the_content(); ?>
                            </div>      
                        </div>
                    </div>
                </article>            
            
                <?php get_template_part( 'content', 'comments' ); ?>

            </div>        
        </div>
    </div>
</div>