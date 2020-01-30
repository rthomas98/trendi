<div class=" mb-5 pt-5 bg-split-gold">
    <div class="container-fluid sub-context">
        <div class="row p-5">
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <div class="my-auto col">
                    <h1 class="txt-white m-0"><?php the_title(); ?></h1>
                    <p class="lead txt-blue">
                        <?php the_field('contact_us_banner_content'); ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                <?php

                $contact_us_banner_image = get_field('contact_us_banner_image');

                if( !empty($contact_us_banner_image) ): ?>

                    <img class="img-fluid" src="<?php echo $contact_us_banner_image['url']; ?>" alt="<?php echo $contact_us_banner_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col text-center">
            <p class="lead">
                <?php the_field('contact_us_intro'); ?>
            </p>
            <h2>
                Corporate Office
            </h2>
        </div>
    </div>
</div>


<?php get_template_part('partials/recent-post'); ?>