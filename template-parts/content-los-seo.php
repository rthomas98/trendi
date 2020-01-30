<div class="container-fluid mb-5 h-75 sub-banner sub-context" style="background: url('<?php the_field('los_angeles_seo_banner_image'); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="row h-100">
        <div class="col d-flex justify-content-center ">
            <div class="my-auto col text-center">
                <h1 class="mb-1"><?php the_title(); ?></h1>
                <p class="lead txt-blue">
                    <?php the_field('los_angeles_seo_content'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6">

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('los_angeles_seo_company_strategies_and_marketing_content'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $what_we_do_image = get_field('what_we_do_image');

            if( !empty($what_we_do_image) ): ?>

                <img class="img-fluid" src="<?php echo $what_we_do_image['url']; ?>" alt="<?php echo $what_we_do_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center bg-blue p-5">
            <div class="my-auto col">
                <?php the_field('what_we_do_content'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('what_we_provide_content'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col p-0">
            <?php

            $our_seo_marketing_strategy_image = get_field('our_seo_marketing_strategy_image');

            if( !empty($our_seo_marketing_strategy_image) ): ?>

                <img class="img-fluid" src="<?php echo $our_seo_marketing_strategy_image['url']; ?>" alt="<?php echo $our_seo_marketing_strategy_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col bg-red p-5">
            <?php the_field('our_seo_marketing_strategy_content'); ?>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('our_seo_marketing_strategy_content_two'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $our_seo_marketing_strategy_image_three = get_field('our_seo_marketing_strategy_image_three');

            if( !empty($our_seo_marketing_strategy_image_three) ): ?>

                <img class="img-fluid mb-4" src="<?php echo $our_seo_marketing_strategy_image_three['url']; ?>" alt="<?php echo $our_seo_marketing_strategy_image_three['alt']; ?>" width="" />

            <?php endif; ?>

            <?php

            $our_seo_marketing_strategy_image_four = get_field('our_seo_marketing_strategy_image_four');

            if( !empty($our_seo_marketing_strategy_image_four) ): ?>

                <img class="img-fluid" src="<?php echo $our_seo_marketing_strategy_image_four['url']; ?>" alt="<?php echo $our_seo_marketing_strategy_image_four['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $search_engines_image = get_field('search_engines_image');

            if( !empty($search_engines_image) ): ?>

                <img class="img-fluid mb-4" src="<?php echo $search_engines_image['url']; ?>" alt="<?php echo $search_engines_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('search_engines_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col p-5">
            <?php the_field('seo_plan_content'); ?>
        </div>
    </div>
</div>