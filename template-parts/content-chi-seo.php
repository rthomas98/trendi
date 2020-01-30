<div class="container-fluid p-5 mb-5 bg-black">
    <div class="row pt-5">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $chicago_seo_banner_image = get_field('chicago_seo_banner_image');

            if( !empty($chicago_seo_banner_image) ): ?>

                <img class="img-fluid" src="<?php echo $chicago_seo_banner_image['url']; ?>" alt="<?php echo $chicago_seo_banner_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center sub-context">
            <div class="my-auto col">
                <h1 class="m-0"><?php the_title(); ?></h1>
                <p class="lead txt-red">
                    <?php the_field('chicago_seo_banner_content'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('unlock_your_business_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $unlock_your_business_image = get_field('unlock_your_business_image');

            if( !empty($unlock_your_business_image) ): ?>

                <img class="img-fluid" src="<?php echo $unlock_your_business_image['url']; ?>" alt="<?php echo $unlock_your_business_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row m-0">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $why_seo_image = get_field('why_seo_image');

            if( !empty($why_seo_image) ): ?>

                <img class="img-fluid" src="<?php echo $why_seo_image['url']; ?>" alt="<?php echo $why_seo_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <div class="row bg-grey h-50">
                <div class="col-12 d-flex justify-content-center p-5">
                    <div class="my-auto col">
                        <?php the_field('why_seo_content'); ?>
                    </div>
                </div>
            </div>
            <div class="row bg-red h-50">
                <div class="col-12 d-flex justify-content-center p-5">
                    <div class="my-auto col">
                        <?php the_field('why_seo_content_two'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 p-0">
    <div class="row">
        <div class="col p-5 bg-black">
            <?php the_field('why_seo_content_three'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col text-center p-0">
            <?php

            $why_seo_image_two = get_field('why_seo_image_two');

            if( !empty($why_seo_image_two) ): ?>

                <img class="img-fluid" src="<?php echo $why_seo_image_two['url']; ?>" alt="<?php echo $why_seo_image_two['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $why_seo_image_three = get_field('why_seo_image_three');

            if( !empty($why_seo_image_three) ): ?>

                <img class="img-fluid" src="<?php echo $why_seo_image_three['url']; ?>" alt="<?php echo $why_seo_image_three['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center bg-blue p-5">
            <div class="my-auto col">
                <?php the_field('why_seo_content_four'); ?>
                <?php the_field('why_seo_content_five'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('what_services_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $what_services_image = get_field('what_services_image');

            if( !empty($what_services_image) ): ?>

                <img class="img-fluid" src="<?php echo $what_services_image['url']; ?>" alt="<?php echo $what_services_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('what_services_content_two'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $why_do_i_need_seo_image = get_field('why_do_i_need_seo_image');

            if( !empty($why_do_i_need_seo_image) ): ?>

                <img class="img-fluid" src="<?php echo $why_do_i_need_seo_image['url']; ?>" alt="<?php echo $why_do_i_need_seo_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('why_do_i_need_seo_content'); ?>
            </div>
        </div>
    </div>
</div>