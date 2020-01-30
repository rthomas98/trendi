<div class=" mb-5 pt-5 bg-split-red">
    <div class="container-fluid sub-context">
        <div class="row p-5">
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
                <div class="my-auto col">
                    <h1 class="txt-white m-0"><?php the_title(); ?></h1>
                    <p class="lead txt-blue">
                        <?php the_field('law_marketing_content'); ?>
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-0">
                <?php

                $law_marketing_banner_image = get_field('law_marketing_banner_image');

                if( !empty($law_marketing_banner_image) ): ?>

                    <img class="img-fluid" src="<?php echo $law_marketing_banner_image['url']; ?>" alt="<?php echo $law_marketing_banner_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col p-0">
            <?php

            $law_marketing_intro_image = get_field('law_marketing_intro_image');

            if( !empty($law_marketing_intro_image) ): ?>

                <img class="img-fluid" src="<?php echo $law_marketing_intro_image['url']; ?>" alt="<?php echo $law_marketing_intro_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col bg-blue p-5">
            <?php the_field('law_marketing_intro_content'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $importance_of_seo_image = get_field('importance_of_seo_image');

            if( !empty($importance_of_seo_image) ): ?>

                <img class="img-fluid" src="<?php echo $importance_of_seo_image['url']; ?>" alt="<?php echo $importance_of_seo_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('importance_of_seo_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('the_industry_content'); ?>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center">
            <div class="my-auto col text-center">
                <h3><?php the_field('the_industry_label'); ?></h3>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $the_industry_image = get_field('the_industry_image');

            if( !empty($the_industry_image) ): ?>

                <img class="img-fluid" src="<?php echo $the_industry_image['url']; ?>" alt="<?php echo $the_industry_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('the_industry_content_two'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $the_industry_image_two = get_field('the_industry_image_two');

            if( !empty($the_industry_image_two) ): ?>

                <img class="img-fluid" src="<?php echo $the_industry_image_two['url']; ?>" alt="<?php echo $the_industry_image_two['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $marketing_tips_image = get_field('marketing_tips_image');

            if( !empty($marketing_tips_image) ): ?>

                <img class="img-fluid" src="<?php echo $marketing_tips_image['url']; ?>" alt="<?php echo $marketing_tips_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 bg-gold d-flex justify-content-center p-5">
            <div class="my-auto col">
                <?php the_field('marketing_tips_content'); ?>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $personal_injury_advertising_image = get_field('personal_injury_advertising_image');

            if( !empty($personal_injury_advertising_image) ): ?>

                <img class="img-fluid" src="<?php echo $personal_injury_advertising_image['url']; ?>" alt="<?php echo $personal_injury_advertising_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('personal_injury_advertising_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('making_your_website_user-friendly_content'); ?>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-blue d-flex justify-content-center p-5">
            <div class="my-auto col">
                <?php the_field('personal_injury_lawyer_marketing_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $personal_injury_lawyer_marketing_image = get_field('personal_injury_lawyer_marketing_image');

            if( !empty($personal_injury_lawyer_marketing_image) ): ?>

                <img class="img-fluid" src="<?php echo $personal_injury_lawyer_marketing_image['url']; ?>" alt="<?php echo $personal_injury_lawyer_marketing_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>


<div class="container mb-5">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('ppc_optimization_content'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $the_problem_with_chatbots_image = get_field('the_problem_with_chatbots_image');

            if( !empty($the_problem_with_chatbots_image) ): ?>

                <img class="img-fluid" src="<?php echo $the_problem_with_chatbots_image['url']; ?>" alt="<?php echo $the_problem_with_chatbots_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('the_problem_with_chatbots_content'); ?>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <?php the_field('mobile-friendly_design_content'); ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('getting_professional_advice_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $getting_professional_advice_image = get_field('getting_professional_advice_image');

            if( !empty($getting_professional_advice_image) ): ?>

                <img class="img-fluid" src="<?php echo $getting_professional_advice_image['url']; ?>" alt="<?php echo $getting_professional_advice_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php the_field('getting_professional_advice_content_two'); ?>
        </div>
    </div>
</div>