<section class="section latest-posts width-constrain">
    <div class="section__inner">
        <div class="summary">
            <div class="summary-header">
                <h2 class="title title-post"><?php _e( 'Latest Posts', 'giving-theme' ); ?></h2> 
                <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur asperiores, ad voluptatibus, alias laudantium, tempora dignissimos distinctio', 'giving-theme' ); ?></p>     
            </div>  

            <div class="summary-content post">
                <section class="items-list">
                    <?php
                    $args = array(
                        'posts_per_page'  => 6,
                        'post_type'       => 'post',
                        'order'          => 'ASC'
                    );

                    $query = new WP_Query( $args );
                    $post_idx = 0;

                    if ( $query->have_posts() ) :
                        while ($query->have_posts() ) : $query->the_post();                  
                    ?>
                    <article class="item">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                        <img src="https://source.unsplash.com/370x370/?news&<?php echo  $post_idx++;?>" alt="News <?php echo  $post_idx++;?>">
                        <?php endif; ?>
                        <div class="item-summary">
                            <h3 class="title title-block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="action-link"><?php _e( 'Read more', 'giving-theme' ); ?></a>
                        </div>
                    </article>
                    <?php 
                        endwhile; 
                    endif;

                    wp_reset_postdata();
                    ?>
                </section>
            </div>      
        </div>
    </div>
</section>