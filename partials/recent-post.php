<div class="container mb-5">
    <div class="row mb-4 text-center">
        <div class="col">
            <?php the_field('news_and_insight_content', 'option'); ?>
        </div>
    </div>
    <div class="row ">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php $loop = new WP_Query( array( 'post_type' => 'post', 'offset'=> 0, 'orderby' => 'post_id', 'order' => 'DSC', 'posts_per_page'=>'1' ) ); ?>

            <div class="row">

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-center">

                       <div class="my-auto col">
                           <h2><a href="<?php the_permalink() ?>">
                                   <?php echo substr(the_title('', '', FALSE), 0, 24); ?>...</a></h2>
                           <p class="lead">
                               <?php echo substr(get_the_excerpt(), 0,250); ?>...</p>

                           <p>
                               <a href="<?php the_permalink() ?>" class="red-arrow">
                                   <i class="fad fa-long-arrow-right"></i>
                               </a>
                           </p>

                       </div>
                    </div>

                <div class="col-sm-12 col-md-6 col-lg-6">
                    <a href="<?php the_permalink() ?>">  <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( '', array( 'class'  => 'img-fluid' ) );
                        }
                        ?>
                    </a>
                </div>

                <?php endwhile;
                wp_reset_query(); ?>

            </div><!-- end row -->

        </article><!-- #post-## -->
    </div>
</div>