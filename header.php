<?php
    global $myplugin;
    $optionTheme  = $myplugin->themeSettings->getSettings();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" id="ao_optimized_gfonts" href="https://fonts.googleapis.com/css?family=Rubik%3A300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i&#038;subset=latin%2Clatin-ext" />-->
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php echo get_bloginfo('name')?></title>
    <meta name="generator" content="WordPress 5.3.2" />
    <meta name="generator" content="WooCommerce 3.8.1" />
    <link href='https://fonts.gstatic.com' crossorigin='anonymous' rel='preconnect' />

    <?php wp_head(); ?>
</head>
<body class="home page-template page-template-page-slider page-template-page-slider-php page page-id-7788 custom-background theme-interico siteorigin-panels siteorigin-panels-before-js siteorigin-panels-home woocommerce-no-js wp-featherlight-captions header-style-1 subnav-fullwidth subnav-dark subnav-content-right header-typography-style-3 submenu-dark light custom-colors">
    <div class="preloader-wrapper dark">
        <div class="preloader"></div>
    </div>
    <div id="wrapper">
        <div class="subnav hide-on-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if(!empty($optionTheme['awe_gar_open_time'])): ?>
                            <div class="subnav-item">
                                <p> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php _e('Opening time:', 'bookawesome') ?> <?php echo $optionTheme['awe_gar_open_time'] ?></p>
                            </div>
                        <?php endif ?>
                        <?php if(!empty($optionTheme['awe_gar_email'])): ?>
                            <div class="subnav-item">
                                <p> <i class="fa fa-envelope-o" aria-hidden="true"></i> <?php _e('Email:', 'bookawesome') ?> <?php echo $optionTheme['awe_gar_email'] ?></p>
                            </div>
                        <?php endif ?>
                        <?php if(!empty($optionTheme['awe_gar_phone'])): ?>
                            <div class="subnav-item">
                                <p> <i class="fa fa-phone" aria-hidden="true"></i> <?php _e('Phone:', 'bookawesome') ?> <?php echo $optionTheme['awe_gar_phone'] ?></p>
                            </div>
                        <?php endif ?>
                        <ul class="social">
                            <li><a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-wrapper">
            <header id="header" class="shadow-soft sticky-mob" data-spy="affix" data-offset-top="160">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 id="logo">
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php echo !empty($optionTheme['awe_head_logo']) ? esc_url($optionTheme['awe_head_logo']) : '' ?>" alt="<?php echo get_bloginfo('name'); ?>">
                                </a>
                            </h1>
                            <button type="button" id="menu-btn" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
                            <nav>
                                <?php
                                    wp_nav_menu(
                                        [
                                            'theme_location'     => 'awe-main-menu',
                                            'walker'             => new CustomPrimaryMenuWalker(),
                                            'container'          => 'div',
                                            'container_class'    => 'menu-main-menu-container',
                                            'menu_class'         => 'collapse navbar-collapse',
                                            'menu_id'            => 'mainmenu',
                                        ]
                                    );
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div id="slider-fullwidth" class="carousel slider-style-3 slide carousel-fade" data-ride="carousel" data-interval="6000">
            <div class="carousel-inner">
                <?php
                    $i = 0;
                    $numberItem = count($optionTheme['awe_list_bg']);
                    if(!empty($optionTheme['awe_list_bg'])):
                        foreach($optionTheme['awe_list_bg'] as $item): $i++; ?>
                            <div class="item <?php echo (1 == $i) ? 'active' : '' ?>">
                                <div class="overlay" style="opacity: 0.5; background-color: #333333"></div>
                                <div class="lines-overlay animated fadeInDown"></div>
                                <div class="slide-img animated fadeInRight" style="background-image:url(<?php echo !empty($item['item_bg']) ? esc_url($item['item_bg']) : ''; ?>);"></div>
                                <div class="container">
                                    <div class="carousel-content animated fadeIn">
                                        <div class="slide-subtitle animated fadeInLeft"><span><?php echo $i ?></span> / <?php echo $numberItem ?></div>
                                        <div class="slide-title animated fadeInLeft">
                                            <h2 class="headline-large"><?php echo !empty($item['title']) ? $item['title'] : '' ?></h2>
                                        </div>
                                        <div class="slide-content animated fadeInLeft"></div>
                                        <div class="slide-buttons animated fadeInLeft">
                                            <p>
                                                <a href="<?php echo !empty($item['item_btn_view_url']) ? $item['item_btn_view_url'] : '' ?>" class="btn btn-primary arrow-right">
                                                    <span><?php echo !empty($item['item_btn_view']) ? $item['item_btn_view'] : '' ?></span>
                                                </a>
                                                <?php if(!empty($item['item_btn_contact_url'])): ?>
                                                <a href="<?php echo $item['item_btn_contact_url'] ?>" class="btn btn-regular arrow-none">
                                                    <span><?php echo $item['item_btn_contact'] ?></span>
                                                </a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control left" href="#slider-fullwidth" data-slide="prev">
                                <span class="icon-arrow-left"></span>
                            </a>
                            <a class="carousel-control right" href="#slider-fullwidth" data-slide="next">
                                <span class="icon-arrow-right"></span>
                            </a>
                    <?php endforeach;?>
                <?php endif; ?>
            </div>
        </div>