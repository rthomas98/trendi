<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center">
            <div class="my-auto col p-5 sub-context">
                <h1 class="m-0"><?php the_title(); ?></h1>
                <p class="lead txt-gold">
                    <?php the_field('pay_per_click_advertising_content'); ?>
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0 sub-banner">
            <div class="overlay"></div>
            <?php

            $pay_per_click_advertising_banner_image = get_field('pay_per_click_advertising_banner_image');

            if( !empty($pay_per_click_advertising_banner_image) ): ?>

                <img class="img-fluid" src="<?php echo $pay_per_click_advertising_banner_image['url']; ?>" alt="<?php echo $pay_per_click_advertising_banner_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>
