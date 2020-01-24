<div class="container-fluid p-0 mb-5">
    <div class="bg-black p-5 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-center">
        <div class="my-auto col">
            <?php the_field('latest_projects_content', 'option'); ?>
            <p>
                <a href="<?php the_field('latest_projects_link', 'option'); ?>" class="red-arrow">
                    <i class="fad fa-long-arrow-right"></i>
                </a>
            </p>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-5 d-flex justify-content-center">
        <div class="my-auto col">

        </div>
    </div>
</div>