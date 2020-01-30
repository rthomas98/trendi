<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0 sub-banner">
            <div class="overlay"></div>
            <?php

            $internet_marketing_banner_image = get_field('internet_marketing_banner_image');

            if( !empty($internet_marketing_banner_image) ): ?>

                <img class="img-fluid" src="<?php echo $internet_marketing_banner_image['url']; ?>" alt="<?php echo $internet_marketing_banner_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center">
            <div class="my-auto col p-5 sub-context">
                <h1 class="m-0"><?php the_title(); ?></h1>
                <p class="lead txt-gold">
                    <?php the_field('internet_marketing_banner_content'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="ol-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto container">
                <?php the_field('internet_marketing_intro_content'); ?>
            </div>
        </div>
        <div class="ol-sm-12 col-md-12 col-lg-6 p-0 d-flex justify-content-center">
            <div class="my-auto col">
                <?php

                $internet_marketing_intro_image = get_field('internet_marketing_intro_image');

                if( !empty($internet_marketing_intro_image) ): ?>

                    <img class="img-fluid" src="<?php echo $internet_marketing_intro_image['url']; ?>" alt="<?php echo $internet_marketing_intro_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="bg-black p-5 mb-5">
    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <div class="my-auto container">
                    <?php the_field('search_engine_optimization_content'); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                    <?php

                    $search_engine_optimization_image = get_field('search_engine_optimization_image');

                    if( !empty($search_engine_optimization_image) ): ?>

                        <img class="img-fluid mb-4" src="<?php echo $search_engine_optimization_image['url']; ?>" alt="<?php echo $search_engine_optimization_image['alt']; ?>" width="" />

                    <?php endif; ?>

                <?php

                $search_engine_optimization_image_two = get_field('search_engine_optimization_image_two');

                if( !empty($search_engine_optimization_image_two) ): ?>

                    <img class="img-fluid" src="<?php echo $search_engine_optimization_image_two['url']; ?>" alt="<?php echo $search_engine_optimization_image_two['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0 d-flex justify-content-center">
            <div class="my-auto col">
                <?php

                $optimization_image = get_field('optimization_image');

                if( !empty($optimization_image) ): ?>

                    <img class="img-fluid" src="<?php echo $optimization_image['url']; ?>" alt="<?php echo $optimization_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto container">
                <?php the_field('optimization_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col">
                <?php

                $social_media_marketing_image = get_field('social_media_marketing_image');

                if( !empty($social_media_marketing_image) ): ?>

                    <img class="img-fluid mb-4" src="<?php echo $social_media_marketing_image['url']; ?>" alt="<?php echo $social_media_marketing_image['alt']; ?>" width="" />

                <?php endif; ?>
                <?php the_field('social_media_marketing_content'); ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row m-0">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $attracting_the_right_audience_image = get_field('attracting_the_right_audience_image');

            if( !empty($attracting_the_right_audience_image) ): ?>

                <img class="img-fluid" src="<?php echo $attracting_the_right_audience_image['url']; ?>" alt="<?php echo $attracting_the_right_audience_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <div class="row bg-grey h-50">
                <div class="col-12 d-flex justify-content-center p-5">
                    <div class="my-auto col">
                        <?php the_field('attracting_the_right_audience_content'); ?>
                    </div>
                </div>
            </div>
            <div class="row bg-red h-50">
                <div class="col-12 d-flex justify-content-center p-5">
                    <div class="my-auto col">
                        <?php the_field('grow_your_audience_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto container">
                <?php the_field('ppc_marketing_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $ppc_marketing_image = get_field('ppc_marketing_image');

            if( !empty($ppc_marketing_image) ): ?>

                <img class="img-fluid mb-4" src="<?php echo $ppc_marketing_image['url']; ?>" alt="<?php echo $ppc_marketing_image['alt']; ?>" width="" />

            <?php endif; ?>

        </div>
    </div>
    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $ppc_marketing_image_two = get_field('ppc_marketing_image_two');

            if( !empty($ppc_marketing_image_two) ): ?>

                <img class="img-fluid mb-4" src="<?php echo $ppc_marketing_image_two['url']; ?>" alt="<?php echo $ppc_marketing_image_two['alt']; ?>" width="" />

            <?php endif; ?>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto container">
                <?php the_field('ppc_marketing_content_two'); ?>
            </div>
        </div>
    </div>
</div>