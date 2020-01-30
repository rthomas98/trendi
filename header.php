<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Trendi_Marketing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo mb-5"><img class="img-fluid mr-2" src="<?php bloginfo('template_url'); ?>/img/trendi-logo.png" width="100"></img>trendi <span class="txt-light">marketing</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item <?php if (is_page('/')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/') ?>">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>SEO</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if (is_page('/seo-company')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/seo-company') ?>">SEO Company</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/chicago-seo')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/chicago-seo') ?>">Chicago SEO</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/dallas-seo-company')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/dallas-seo-company') ?>">Dallas SEO Company</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/los-angeles-seo-company')) echo 'active'; ?>">
                            <a class="nav-link" href="<? echo site_url('/los-angeles-seo-company') ?>">Los Angeles SEO Company</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/seo-faqs')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/seo-faqs') ?>">SEO FAQ's</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>Digital Marketing</span>
                            </a>
                        </li>
                        <li class="nav-item <?php if (is_page('/internet-marketing')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/internet-marketing') ?>">Internet Marketing</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/pay-per-click-advertising')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/pay-per-click-advertising') ?>">Pay Per Click Advertising</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/social-media-advertising')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/social-media-advertising') ?>">Social Media Advertising</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/personal-injury-lawyer-marketing')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/personal-injury-lawyer-marketing') ?>">Personal Injury Lawyer Marketing</a>
                        </li>
                        <li class="nav-item <?php if (is_page('/over-the-top-ott')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/over-the-top-ott') ?>">Over The Top (OTT) Marketing</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-2">
                    <ul class="nav flex-column">
                        <li class="nav-item <?php if (is_page('/contact-us')) echo 'active'; ?>">
                            <a class="nav-link" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>