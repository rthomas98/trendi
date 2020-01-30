<div class="banner mb-5" style="background: url('<?php the_field('banner_image'); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">

    <div class="banner-sidebar">
        <div class="content">
            <div class="separator"></div>
        </div>
    </div>

    <div class="container h-100">
        <div class="row h-80">
            <div class="col-sm-12 col-md-12 col-lg-7 d-flex justify-content-center">
                <div class="my-auto col">

                    <h1 class="animated fadeIn delay-1s">
                        <?php the_field('banner_title'); ?>
                        <a href="<?php the_field('banner_cta_button'); ?>" class="circle d-flex justify-content-center animated infinite fadeIn delay-2s">
                            <div class="my-auto text-center">
                                View Our<br><strong>WORKS</strong>
                            </div>
                        </a>
                    </h1>
                    <?php the_field('banner_sub_header'); ?>
                    <?php the_field('banner_content'); ?>

                    <?php if(get_field('banner_services')): ?>
                        <div class="row mb-4 animated fadeIn delay-1s">
                            <?php while( have_rows('banner_services') ): the_row();

                                // vars
                                $banner_icon = get_sub_field('banner_icon');
                                $banner_label = get_sub_field('banner_label');
                                $banner_link = get_sub_field('banner_link');
                                ?>
                                <a href="<?php echo $banner_link; ?>" class="col-sm-6 col-md-12 col-lg-3 mb-4 mb-md-4 mb-lg-0 d-flex justify-content-center">
                                    <div class="my-auto col text-center">
                                        <i class="fa <?php echo $banner_icon; ?>"></i>
                                        <h4 class="text-uppercase"><?php echo $banner_label; ?></h4>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 d-flex justify-content-center animated fadeIn delay-1s">
                <div class="my-auto col">
                    <?php

                    $banner_logo = get_field('banner_logo');

                    if( !empty($banner_logo) ): ?>

                        <img class="img-fluid" src="<?php echo $banner_logo['url']; ?>" alt="<?php echo $banner_logo['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row h-20">
            <div class="col text-center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
    <path fill="none" stroke="#ffffff" stroke-width="5" stroke-miterlimit="10" d="M68.167,63.598c0,9.693-7.858,17.553-17.554,17.553
      h-0.226c-9.695,0-17.554-7.858-17.554-17.553V36.404c0-9.694,7.859-17.554,17.554-17.554h0.226c9.693,0,17.554,7.859,17.554,17.554
      V63.598L68.167,63.598z"/>
                    <rect id="red-scroll" x="48.521" y="31.707" fill="#DC171D" width="3.958" height="19.293"/>
  </svg>
                <h5>Scroll for more</h5>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php the_field('client_focus_header'); ?>

            <?php

            $client_focus_image_one = get_field('client_focus_image_one');

            if( !empty($client_focus_image_one) ): ?>

                <img class="img-fluid" src="<?php echo $client_focus_image_one['url']; ?>" alt="<?php echo $client_focus_image_one['alt']; ?>" width="" />

            <?php endif; ?>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <?php the_field('client_focus_content'); ?>

            <?php

            $client_focus_image_two = get_field('client_focus_image_two');

            if( !empty($client_focus_image_two) ): ?>

                <img class="img-fluid" src="<?php echo $client_focus_image_two['url']; ?>" alt="<?php echo $client_focus_image_two['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-sm-12 col-md-12 col-lg-6">

            <?php

            $client_focus_image_three = get_field('client_focus_image_three');

            if( !empty($client_focus_image_three) ): ?>

                <img class="img-fluid" src="<?php echo $client_focus_image_three['url']; ?>" alt="<?php echo $client_focus_image_three['alt']; ?>" width="" />

            <?php endif; ?>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">

            <?php

            $client_focus_image_four = get_field('client_focus_image_four');

            if( !empty($client_focus_image_four) ): ?>

                <img class="img-fluid" src="<?php echo $client_focus_image_four['url']; ?>" alt="<?php echo $client_focus_image_four['alt']; ?>" width="" />

            <?php endif; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mb-4">
        <div class="col">
            <?php the_field('client_relationships_title'); ?>
        </div>
    </div>
</div>

<div class="container-fluid mb-5">
    <?php if(get_field('client_relationships_services')): ?>
        <div class="row">
            <?php while( have_rows('client_relationships_services') ): the_row();

                // vars
                $client_relationships_image = get_sub_field('client_relationships_image');
                $client_relationships_content = get_sub_field('client_relationships_content');
                $client_relationships_link = get_sub_field('client_relationships_link');
                ?>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="txt-overlay service-box">
                        <div class="overlay"></div>
                        <img class="img-fluid" src="<?php echo $client_relationships_image['url']; ?>" alt="<?php echo $client_relationships_image['alt'] ?>" />
                        <div class="bottom-left p-3">
                            <?php echo $client_relationships_content; ?>
                            <p>
                                <a href="" class="red-arrow">
                                    <i class="fad fa-long-arrow-right"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>

<?php get_template_part('partials/clients-say'); ?>
<?php get_template_part('partials/recent-projects'); ?>
<?php get_template_part('partials/recent-post'); ?>
