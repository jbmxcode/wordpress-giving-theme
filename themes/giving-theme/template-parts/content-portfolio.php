<section class="section portfolio width-constrain">
    <div class="section__inner">
        <div class="summary">
            <div class="summary-header">
                <h2 class="hidden">Portfolio</h2>      
            </div>  

            <div class="summary-content tabs">
                <nav class="portfolio-categories tabs-categories">
                    <ul class="items-list">
                        <li class="item"><a href="">All</a></li>
                        <li class="item"><a href="">Coding</a></li>
                        <li class="item"><a href="">Design</a></li>
                        <li class="item"><a href="">Development</a></li>
                        <li class="item"><a href="">Illustration</a></li>
                        <li class="item"><a href="">Photography</a></li>
                    </ul>
                </nav>

                <div class="portfolio-content tabs-content">
                    <ul class="items-list">
                    <?php
                        $args = array(
                            'posts_per_page'  => 6,
                            'post_type'       => 'portfolio',
                            'order'          => 'ASC'
                        );

                        $query = new WP_Query( $args );

                        $post_idx = 0;

                        while ($query->have_posts() ) : $query->the_post(); 
                    ?>  
                        <li class="item">
                            <?php if ( has_post_thumbnail() ){ ?>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            <?php } else { ?>
                            <img src="https://source.unsplash.com/370x370/?products&<?php echo  $post_idx++;?>" alt="Image">
                            <?php } ?>

                            <div class="item-summary">
                                <h3 class="title title-block"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </li>

                    <?php     
                    endwhile; 
                    wp_reset_postdata();?>
                    </ul>
                </div>
            </div>      
        </div>
    </div>
</section>