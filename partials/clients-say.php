<div class="bg-grey p-5">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col text-center">
                <?php the_field('testimonial_title', 'option'); ?>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
                <?php

                $testimonial_image = get_field('testimonial_image', 'option');

                if( !empty($testimonial_image) ): ?>

                    <img class="img-fluid" src="<?php echo $testimonial_image['url']; ?>" alt="<?php echo $testimonial_image['alt']; ?>" width="" />

                <?php endif; ?>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-8 d-flex justify-content-center">
                <div class="my-auto col">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <a href="#">
                                                    <img src="https://www.tutorialrepublic.com//examples/images/clients/2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                                    <p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <a href="#">
                                                    <img src="https://www.tutorialrepublic.com//examples/images/clients/4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque.</p>
                                                    <p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item carousel-item">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <a href="#">
                                                    <img src="https://www.tutorialrepublic.com//examples/images/clients/5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Nam eusem scelerisque tempor, varius quam luctus dui. Mauris magna metus nec.</p>
                                                    <p class="overview"><b>Martin Sommer</b>, UX Analyst</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <div class="media">
                                            <div class="media-left d-flex mr-3">
                                                <a href="#">
                                                    <img src="https://www.tutorialrepublic.com//examples/images/clients/3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="testimonial">
                                                    <p>Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget mi suscipit tincidunt. Utmtc tempus dictum. Pellentesque.</p>
                                                    <p class="overview"><b>John Williams</b>, Web Developer</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>