<div class="container-fluid mb-5 h-75 sub-banner sub-context" style="background: url('<?php the_field('seo_faqs_banner_image'); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="row h-100">
        <div class="col d-flex justify-content-center ">
            <div class="my-auto col text-center">
                <h1 class="mb-1"><?php the_title(); ?></h1>
                <p class="lead txt-gold">
                    <?php the_field('seo_faqs_banner_content'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="bg-blue col p-5">
            <?php the_field('seo_faqs_intro_content'); ?>
        </div>
    </div>
</div>

<div class="container mb-5">
    <ul class="nav mb-5" id="myTab" role="tablist">
        <li class="nav-item col-sm-12 col-md-12 col-lg-4 text-center">
            <a class="nav-link active p-5 faq-box" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">
                <i class="fad fa-list-ul mb-2 fa-3x"></i>
                <p class="lead">SEO Basics</p>
                <p>
                    Morbi sodales vulputate mauris, non fringilla libero maximus sed.
                </p>
            </a>
        </li>
        <li class="nav-item col-sm-12 col-md-12 col-lg-4 text-center">
            <a class="nav-link p-5 faq-box" id="strategy-tab" data-toggle="tab" href="#strategy" role="tab" aria-controls="strategy" aria-selected="false">
                <i class="fad fa-chess-queen-alt mb-2 fa-3x"></i>
                <p class="lead">SEO Strategy</p>
                <p>
                    Morbi sodales vulputate mauris, non fringilla libero maximus sed.
                </p>
            </a>
        </li>
        <li class="nav-item col-sm-12 col-md-12 col-lg-4 text-center">
            <a class="nav-link p-5 faq-box" id="link-tab" data-toggle="tab" href="#link" role="tab" aria-controls="link" aria-selected="false">
                <i class="fad fa-link mb-2 fa-3x"></i>
                <p class="lead">Links and Link Building</p>
                <p>
                    Morbi sodales vulputate mauris, non fringilla libero maximus sed.
                </p>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">
            <?php if(get_field('seo_faqs_seo_basics')): ?>
                <div class="mb-4">
                    <?php while( have_rows('seo_faqs_seo_basics') ): the_row();

                        // vars
                        $seo_faqs_question = get_sub_field('seo_faqs_question');
                        $seo_faqs_answer = get_sub_field('seo_faqs_answer');
                        ?>
                    <div class="mb-4">

                            <h3>
                                <?php echo $seo_faqs_question; ?>
                            </h3>
                            <p>
                                <?php echo $seo_faqs_answer; ?>
                            </p>
                    </div>
                    <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
        <div class="tab-pane fade" id="strategy" role="tabpanel" aria-labelledby="strategy-tab">
            <?php if(get_field('seo_faqs_seo_strategy')): ?>
            <div class="mb-4">
                <?php while( have_rows('seo_faqs_seo_strategy') ): the_row();

                    // vars
                    $seo_faqs_question = get_sub_field('seo_faqs_question');
                    $seo_faqs_answer = get_sub_field('seo_faqs_answer');
                    ?>
                    <div class="mb-4">

                        <h3>
                            <?php echo $seo_faqs_question; ?>
                        </h3>
                        <p>
                            <?php echo $seo_faqs_answer; ?>
                        </p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab">
            <?php if(get_field('seo_faqs_links_and_link_building')): ?>
            <div class="mb-4">
                <?php while( have_rows('seo_faqs_links_and_link_building') ): the_row();

                    // vars
                    $seo_faqs_question = get_sub_field('seo_faqs_question');
                    $seo_faqs_answer = get_sub_field('seo_faqs_answer');
                    ?>
                    <div class="mb-4">

                        <h3>
                            <?php echo $seo_faqs_question; ?>
                        </h3>
                        <p>
                            <?php echo $seo_faqs_answer; ?>
                        </p>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('partials/clients-say'); ?>
<?php get_template_part('partials/recent-projects'); ?>
<?php get_template_part('partials/recent-post'); ?>