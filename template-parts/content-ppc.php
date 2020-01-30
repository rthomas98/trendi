<div class=" mb-5 pt-5 bg-split-blue">
    <div class="container-fluid sub-context">
        <div class="row p-5">
            <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                <?php

                $pay_per_click_advertising_banner_image = get_field('pay_per_click_advertising_banner_image');

                if( !empty($pay_per_click_advertising_banner_image) ): ?>

                    <img class="img-fluid" src="<?php echo $pay_per_click_advertising_banner_image['url']; ?>" alt="<?php echo $pay_per_click_advertising_banner_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <div class="my-auto col">
                    <h1 class="txt-white m-0"><?php the_title(); ?></h1>
                    <p class="lead txt-gold">
                        <?php the_field('pay_per_click_advertising_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('pay_per_click_advertising_intro_content'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <?php

            $pay_per_click_advertising_intro_image = get_field('pay_per_click_advertising_intro_image');

            if( !empty($pay_per_click_advertising_intro_image) ): ?>

                <img class="img-fluid" src="<?php echo $pay_per_click_advertising_intro_image['url']; ?>" alt="<?php echo $pay_per_click_advertising_intro_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <?php

                $pay_per_click_advertising_image_two = get_field('pay_per_click_advertising_image_two');

                if( !empty($pay_per_click_advertising_image_two) ): ?>

                    <img class="img-fluid" src="<?php echo $pay_per_click_advertising_image_two['url']; ?>" alt="<?php echo $pay_per_click_advertising_image_two['alt']; ?>" width="" />

                <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('what_is_pay_per_click_content'); ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center p-5">
            <div class="my-auto col">
                <?php the_field('making_ppc_work_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $making_ppc_work_image = get_field('making_ppc_work_image');

            if( !empty($making_ppc_work_image) ): ?>

                <img class="img-fluid" src="<?php echo $making_ppc_work_image['url']; ?>" alt="<?php echo $making_ppc_work_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <?php

            $keywords_image = get_field('keywords_image');

            if( !empty($keywords_image) ): ?>

                <img class="img-fluid" src="<?php echo $keywords_image['url']; ?>" alt="<?php echo $keywords_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('keywords_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('keywords_content_two'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $paid_search_campaign_image = get_field('paid_search_campaign_image');

            if( !empty($paid_search_campaign_image) ): ?>

                <img class="img-fluid" src="<?php echo $paid_search_campaign_image['url']; ?>" alt="<?php echo $paid_search_campaign_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('paid_search_campaign_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('choose_trendi_marketing_content'); ?>
        </div>
    </div>
</div>

<?php get_template_part('partials/recent-post'); ?>