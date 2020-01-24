<?php get_template_part('partials/work-with-us'); ?>
<?php get_template_part('partials/newsletter'); ?>

<footer class="footer">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <?php

                $footer_logo = get_field('footer_logo', 'option');

                if( !empty($footer_logo) ): ?>

                    <img class="img-fluid mb-3" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" width="100" />

                <?php endif; ?>
                <h3 class="text-uppercase txt-gold">trendi <span class="txt-light txt-white">marketing</span></h3>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col text-center">
                <?php the_field('footer_content', 'option'); ?>

                <?php if( have_rows('footer_social', 'option') ): ?>

                    <ul class="nav justify-content-center">

                        <?php while( have_rows('footer_social', 'option') ): the_row();

                            $social_icon = get_sub_field('social_icon');
                            $social_url = get_sub_field('social_url');

                            ?>

                            <li class="nav-item">

                                <a class="nav-link" href="<?php echo $social_url; ?>" target="_blank">
                                    <i class="fab <?php echo $social_icon; ?>"></i>
                                </a>

                            </li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

                <p>
                    <small>
                        &copy; <?php echo date('Y'); ?>, Tredndi Marketing | All Rights Reserved. | Privacy Policy | Terms
                    </small>
                </p>

            </div>
        </div>
    </div>
</footer>