<div class="work-with-us p-5" style="background: url('<?php the_field('word_with_us_image', 'option'); ?>') no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <?php the_field('work_with_us_content', 'option'); ?>
                <p>
                    <a href="<?php the_field('work_with_us_link', 'option'); ?>" class="red-arrow">
                        <i class="fad fa-long-arrow-right"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>