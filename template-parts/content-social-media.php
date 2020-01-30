<div class=" mb-5 pt-5 bg-black">
    <div class="container sub-context">
        <div class="row p-5">
            <div class="col d-flex justify-content-center">
                <div class="my-auto col text-center">
                    <h1 class="txt-white m-0"><?php the_title(); ?></h1>
                    <p class="lead txt-gold mb-4">
                        <?php the_field('social_media_advertising_content'); ?>
                    </p>
                    <?php

                    $social_media_advertising_banner_image = get_field('social_media_advertising_banner_image');

                    if( !empty($social_media_advertising_banner_image) ): ?>

                        <img class="img-fluid" src="<?php echo $social_media_advertising_banner_image['url']; ?>" alt="<?php echo $social_media_advertising_banner_image['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <?php

            $social_media_advertising_intro_one = get_field('social_media_advertising_intro_one');

            if( !empty($social_media_advertising_intro_one) ): ?>

                <img class="img-fluid" src="<?php echo $social_media_advertising_intro_one['url']; ?>" alt="<?php echo $social_media_advertising_intro_one['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <?php

            $social_media_advertising_image_two = get_field('social_media_advertising_image_two');

            if( !empty($social_media_advertising_image_two) ): ?>

                <img class="img-fluid" src="<?php echo $social_media_advertising_image_two['url']; ?>" alt="<?php echo $social_media_advertising_image_two['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('social_media_advertising_intro_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $social_media_advertising_image_three = get_field('social_media_advertising_image_three');

            if( !empty($social_media_advertising_image_three) ): ?>

                <img class="img-fluid" src="<?php echo $social_media_advertising_image_three['url']; ?>" alt="<?php echo $social_media_advertising_image_three['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row m-0">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <div class="row bg-blue h-50">
                <div class="col-12 d-flex justify-content-center p-5">
                    <div class="my-auto col">
                        <h2><?php the_field('the_advantages_of_social_media_advertising_title'); ?></h2>
                        <?php the_field('the_advantages_of_social_media_advertising_content_one'); ?>
                    </div>
                </div>
            </div>
            <div class="row bg-red h-50">
                <div class="col-12 d-flex justify-content-center p-5">
                    <div class="my-auto col">
                        <?php the_field('the_advantages_of_social_media_advertising_content_two'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $the_advantages_of_social_media_advertising_image = get_field('the_advantages_of_social_media_advertising_image');

            if( !empty($the_advantages_of_social_media_advertising_image) ): ?>

                <img class="img-fluid" src="<?php echo $the_advantages_of_social_media_advertising_image['url']; ?>" alt="<?php echo $the_advantages_of_social_media_advertising_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('good_social_media_campaign_content'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $good_social_media_campaign_image = get_field('good_social_media_campaign_image');

            if( !empty($good_social_media_campaign_image) ): ?>

                <img class="img-fluid" src="<?php echo $good_social_media_campaign_image['url']; ?>" alt="<?php echo $good_social_media_campaign_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('good_social_media_campaign_content_two'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('good_social_media_campaign_content_three'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $good_social_media_campaign_image_two = get_field('good_social_media_campaign_image_two');

            if( !empty($good_social_media_campaign_image_two) ): ?>

                <img class="img-fluid" src="<?php echo $good_social_media_campaign_image_two['url']; ?>" alt="<?php echo $good_social_media_campaign_image_two['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $good_social_media_campaign_image_three = get_field('good_social_media_campaign_image_three');

            if( !empty($good_social_media_campaign_image_three) ): ?>

                <img class="img-fluid" src="<?php echo $good_social_media_campaign_image_three['url']; ?>" alt="<?php echo $good_social_media_campaign_image_three['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('good_social_media_campaign_content_three'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('social_media_platforms_content'); ?>
        </div>
    </div>


    <?php if(get_field('social_media_platforms')): ?>
        <div class="row mb-4">
            <?php while( have_rows('social_media_platforms') ): the_row();

                // vars
                $social_media_platforms_box_content = get_sub_field('social_media_platforms_box_content');

                ?>
                <div class="col-sm-6 col-md-12 col-lg-6 mb-4 mb-md-6 d-flex justify-content-center">
                   <div class="bg-black">
                       <div class="my-auto col p-5">
                           <?php echo $social_media_platforms_box_content; ?>
                       </div>
                   </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <div class="row mb-4">
        <div class="col">
            <?php the_field('social_media_platforms_content_two'); ?>
        </div>
    </div>
</div>

<?php get_template_part('partials/recent-post'); ?>