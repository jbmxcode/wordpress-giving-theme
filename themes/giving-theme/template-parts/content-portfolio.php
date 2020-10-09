<section class="section portfolio width-constrain">
    <div class="section__inner">
        <div class="summary">
            <div class="summary-header">
                <h2 class="hidden"><?php _e( 'Portfolio', 'giving-theme' ); ?></h2>      
            </div>  

            <div class="summary-content tabs">  
                <nav class="portfolio-categories tabs-categories">
                    <ul class="items-list">
                    <?php
                        $args = array(
                            'post_type'       => 'portfolio',
                            'order'          => 'ASC'
                        );

                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post();
                                $term = get_queried_object();
                                $post_categories = get_the_terms ( get_the_ID(), 'category' );

                                foreach ( $post_categories as $term ) {
                                    echo '<li class="item"><a>' . $term->name . '</a></li>';
                                }
                            endwhile;
                        endif;

                        wp_reset_postdata();
                    ?>
                    </ul>
                </nav> 
                <div class="portfolio-content tabs-content">
                    <ul class="items-list">
                        <?php
                        $args2 = array(
                            'posts_per_page'  => 6,
                            'post_type'       => 'portfolio',
                            'order'          => 'ASC'
                        );

                        $query2 = new WP_Query( $args2 );
                        $post_idx = 0;

                        if ( $query2->have_posts() ) :
                            while ( $query2->have_posts() ) : $query2->the_post(); 
                        ?>  
                        <li class="item">
                            <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php else : ?>
                            <img src="https://source.unsplash.com/370x370/?products&<?php echo  $post_idx++;?>" alt="Image">
                            <?php endif; ?>

                            <div class="item-summary">
                                <h3 class="title title-block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>

                        <?php    
                            endwhile;
                        endif; 
                        wp_reset_postdata();?>
                    </ul>
                </div>             
            </div>     
        </div>
    </div>
</section>