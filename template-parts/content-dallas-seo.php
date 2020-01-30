<div class=" mb-5 h-50 pt-5 bg-black">
    <div class="container h-100 sub-context">
        <div class="row h-100">
            <div class="col d-flex justify-content-center">
                <div class="my-auto col">
                    <h1 class="txt-white m-0"><?php the_title(); ?></h1>
                    <p class="lead txt-gold">
                        <?php the_field('banner_content'); ?>
                    </p>
                    <p>
                        <a href="<?php the_field('banner_contact_link'); ?>" class="btn-lg btn btn-red pl-5 pr-5">
                            contact us
                        </a>

                        <a href="#" class="btn btn-lg btn-red-outline pl-5 pr-5">
                            click to call
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">

            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row mb-3">
                <div class="col">
                    <div class="overlay"></div>
                    <div class="txt-overlay">
                        <?php

                        $dallas_seo_company_image = get_field('dallas_seo_company_image');

                        if( !empty($dallas_seo_company_image) ): ?>

                            <img class="img-fluid" src="<?php echo $dallas_seo_company_image['url']; ?>" alt="<?php echo $dallas_seo_company_image['alt']; ?>" width="" />

                        <?php endif; ?>
                        <div class="bottom-left p-4 txt-white">
                            <?php the_field('dallas_seo_company_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="txt-overlay">
                        <?php

                        $our_clients_image = get_field('our_clients_image');

                        if( !empty($our_clients_image) ): ?>

                            <img class="img-fluid" src="<?php echo $our_clients_image['url']; ?>" alt="<?php echo $our_clients_image['alt']; ?>" width="" />

                        <?php endif; ?>
                        <div class="bottom-left p-4 txt-white">
                            <?php the_field('our_clients_content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 bg-black d-flex justify-content-center p-5">
            <div class="my-auto col">
                <?php the_field('what_we_do_content'); ?>

                <p>
                    <a href="<?php the_field('what_we_do_link'); ?>" class="red-arrow">
                        <i class="fad fa-long-arrow-right"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-0">
            <?php

            $what_we_do_image = get_field('what_we_do_image');

            if( !empty($what_we_do_image) ): ?>

                <img class="img-fluid" src="<?php echo $what_we_do_image['url']; ?>" alt="<?php echo $what_we_do_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col bg-blue p-5">
            <?php the_field('what_we_offer_content'); ?>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col p-0">
            <?php

            $what_we_offer_image = get_field('what_we_offer_image');

            if( !empty($what_we_offer_image) ): ?>

                <img class="img-fluid" src="<?php echo $what_we_offer_image['url']; ?>" alt="<?php echo $what_we_offer_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <?php the_field('seo_content'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col">
                <?php the_field('ppc_content'); ?>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php

            $ppc_image = get_field('ppc_image');

            if( !empty($ppc_image) ): ?>

                <img class="img-fluid" src="<?php echo $ppc_image['url']; ?>" alt="<?php echo $ppc_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 text-center p-0">
            <?php

            $social_media_image = get_field('social_media_image');

            if( !empty($social_media_image) ): ?>

                <img class="img-fluid" src="<?php echo $social_media_image['url']; ?>" alt="<?php echo $social_media_image['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row h-50">
                <div class="col d-flex justify-content-center p-5 bg-grey">
                    <div class="my-auto col">
                        <?php the_field('social_media_content'); ?>
                    </div>
                </div>
            </div>
            <div class="row h-50">
                <div class="col d-flex justify-content-center p-5 bg-red">
                    <div class="my-auto col">
                        <?php the_field('content_marketing_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col">
            <?php the_field('reputation_management_content'); ?>
        </div>
    </div>
</div>