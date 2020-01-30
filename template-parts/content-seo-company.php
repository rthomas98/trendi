<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center">
            <div class="my-auto col p-5 sub-context text-center">
                <h1 class="m-0"><?php the_title(); ?></h1>
                <p class="lead txt-red">
                    <?php the_field('seo_banner_content'); ?>
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0 sub-banner">
            <div class="overlay"></div>
            <?php

            $seo_banner_image = get_field('seo_banner_image');

            if( !empty($seo_banner_image) ): ?>

                <img class="img-fluid" src="<?php echo $seo_banner_image['url']; ?>" alt="<?php echo $seo_banner_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <?php if(get_field('seo_services_box')): ?>
        <div class="row">
            <?php while( have_rows('seo_services_box') ): the_row();

                $seo_service_box_icon = get_sub_field('seo_service_box_icon');
                $seo_service_box_label = get_sub_field('seo_service_box_label');

                ?>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 mb-0 mb-md-0 mb-lg-0 d-flex p-5 justify-content-center bg-blue">
                    <div class="my-auto col text-center">
                        <i class="fad icon-size <?php echo $seo_service_box_icon; ?> mb-3"></i>
                        <h4 class="text-uppercase"><?php echo $seo_service_box_label; ?></h4>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('seo_intro_content'); ?>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">

    <div class="row p-3">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <div class="row mb-3">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php

                    $site_rankings_image_one = get_field('site_rankings_image_one');

                    if( !empty($site_rankings_image_one) ): ?>

                        <img class="img-fluid" src="<?php echo $site_rankings_image_one['url']; ?>" alt="<?php echo $site_rankings_image_one['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <?php

                    $site_rankings_image_two = get_field('site_rankings_image_two');

                    if( !empty($site_rankings_image_two) ): ?>

                        <img class="img-fluid" src="<?php echo $site_rankings_image_two['url']; ?>" alt="<?php echo $site_rankings_image_two['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php

                    $site_rankings_image_three = get_field('site_rankings_image_three');

                    if( !empty($site_rankings_image_three) ): ?>

                        <img class="img-fluid" src="<?php echo $site_rankings_image_three['url']; ?>" alt="<?php echo $site_rankings_image_three['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <?php

                    $site_rankings_image_four = get_field('site_rankings_image_four');

                    if( !empty($site_rankings_image_four) ): ?>

                        <img class="img-fluid" src="<?php echo $site_rankings_image_four['url']; ?>" alt="<?php echo $site_rankings_image_four['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col p-5">
                <?php the_field('site_rankings_content'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col text-center">
            <?php

            $site_rankings_group_image = get_field('site_rankings_group_image');

            if( !empty($site_rankings_group_image) ): ?>

                <img class="img-fluid" src="<?php echo $site_rankings_group_image['url']; ?>" alt="<?php echo $site_rankings_group_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col">
            <?php the_field('attracts_more_visitors_content'); ?>
        </div>
    </div>
</div>

<div class="container-fluid mb-5 p-0">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $seo_links_image = get_field('seo_links_image');

            if( !empty($seo_links_image) ): ?>

                <img class="img-fluid" src="<?php echo $seo_links_image['url']; ?>" alt="<?php echo $seo_links_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center bg-black p-5">
            <div class="my-auto col">
                <?php the_field('seo_links_content'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $getting_attention_image = get_field('getting_attention_image');

            if( !empty($getting_attention_image) ): ?>

                <img class="img-fluid" src="<?php echo $getting_attention_image['url']; ?>" alt="<?php echo $getting_attention_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('getting_attention_content'); ?>
            </div>
        </div>
    </div>
</div>