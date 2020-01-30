<div class="container-fluid p-0 mb-5">
    <div class="row">
        <div class="bg-black p-4 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center">
            <div class="my-auto col p-5">
                <?php the_field('latest_projects_content', 'option'); ?>
                <p>
                    <a href="<?php the_field('latest_projects_link', 'option'); ?>" class="red-arrow">
                        <i class="fad fa-long-arrow-right"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                    <?php

                    $latest_project_image_one = get_field('latest_project_image_one', 'option');

                    if( !empty($latest_project_image_one) ): ?>

                        <img class="img-fluid" src="<?php echo $latest_project_image_one['url']; ?>" alt="<?php echo $latest_project_image_one['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                    <?php

                    $latest_project_image_two = get_field('latest_project_image_two', 'option');

                    if( !empty($latest_project_image_two) ): ?>

                        <img class="img-fluid" src="<?php echo $latest_project_image_two['url']; ?>" alt="<?php echo $latest_project_image_two['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 p-0">
                    <?php

                    $latest_project_image_three = get_field('latest_project_image_three', 'option');

                    if( !empty($latest_project_image_three) ): ?>

                        <img class="img-fluid" src="<?php echo $latest_project_image_three['url']; ?>" alt="<?php echo $latest_project_image_three['alt']; ?>" width="" />

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>