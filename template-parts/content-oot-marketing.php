<div class="mb-5 pt-5 bg-black-horz">
    <div class="container pt-5 sub-context">
        <div class="row">
            <div class="col d-flex justify-content-center p-0">
                <div class="my-auto col text-center">
                    <h1 class="txt-white m-0"><?php the_title(); ?></h1>
                    <p class="lead txt-blue mb-5">
                        <?php the_field('oot_marketing_content'); ?>
                    </p>

                    <?php

                    $oot_marketing_banner_image = get_field('oot_marketing_banner_image');

                    if( !empty($oot_marketing_banner_image) ): ?>

                        <img class="img-fluid" src="<?php echo $oot_marketing_banner_image['url']; ?>" alt="<?php echo $oot_marketing_banner_image['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('over_the_top_service_content'); ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center p-5">
            <div class="my-auto col">
                <?php the_field('the_benefits_of_being_over_the_top_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $the_benefits_of_being_over_the_top_image = get_field('the_benefits_of_being_over_the_top_image');

            if( !empty($the_benefits_of_being_over_the_top_image) ): ?>

                <img class="img-fluid" src="<?php echo $the_benefits_of_being_over_the_top_image['url']; ?>" alt="<?php echo $the_benefits_of_being_over_the_top_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('how_we_can_help_you'); ?>
        </div>
    </div>
</div>

<?php get_template_part('partials/recent-post'); ?>