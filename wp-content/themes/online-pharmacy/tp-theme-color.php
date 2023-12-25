<?php

$online_pharmacy_tp_theme_css = '';

//theme color
$online_pharmacy_tp_color_option = get_theme_mod('online_pharmacy_tp_color_option');

if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='button[type="submit"], .top-header,.main-navigation .menu > ul > li.highlight,.readmore-btn a,.more-btn a,.box:before,.box:after,a.added_to_cart.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,a.added_to_cart.wc-forward,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info ,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.woocommerce span.onsale,.book-tkt-btn a.register-btn:hover,.error-404 [type="submit"]{';
$online_pharmacy_tp_theme_css .='background-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3, .box-content a,.book-tkt-btn a.register-btn:hover,#theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading,#footer li a:hover, #theme-sidebar li a:hover,#theme-sidebar a:hover,.wp-block-search .wp-block-search__label, .main-navigation .current-menu-item > a, .search-submit,#slider .inner_carousel h2,#slider .inner_carousel p,.call-info span, .wp-block-search .wp-block-search__label{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='p.wp-block-tag-cloud a:hover{';
$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='@media screen and (max-width:1000px) {';
$online_pharmacy_tp_theme_css .='.toggle-nav button  {';
    $online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='} }';
}
//hover color
$online_pharmacy_tp_color_option_link = get_theme_mod('online_pharmacy_tp_color_option_link');

if($online_pharmacy_tp_color_option_link != false){
$online_pharmacy_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover, .readmore-btn a:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover,#theme-sidebar .tagcloud a:hover, #theme-sidebar button[type="submit"]:hover,.more-btn a:hover,nav.woocommerce-MyAccount-navigation ul li:hover{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_color_option_link).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option_link != false){
$online_pharmacy_tp_theme_css .='a:hover,.main-navigation a:hover,.media-links i:hover,.box-content a:hover {';
	$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option_link).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option_link != false){
$online_pharmacy_tp_theme_css .='#footer .tagcloud a:hover, .post_tag a:hover,#theme-sidebar .tagcloud a:hover{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_option_link).';';
$online_pharmacy_tp_theme_css .='}';
}


$online_pharmacy_tp_secoundary_color_option = get_theme_mod('online_pharmacy_tp_secoundary_color_option');

if($online_pharmacy_tp_secoundary_color_option != false){
$online_pharmacy_tp_theme_css .='.book-tkt-btn a.register-btn{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_secoundary_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}

//preloader

$online_pharmacy_tp_preloader_color1_option = get_theme_mod('online_pharmacy_tp_preloader_color1_option');
$online_pharmacy_tp_preloader_color2_option = get_theme_mod('online_pharmacy_tp_preloader_color2_option');
$online_pharmacy_tp_preloader_bg_color_option = get_theme_mod('online_pharmacy_tp_preloader_bg_color_option');

if($online_pharmacy_tp_preloader_color1_option != false){
$online_pharmacy_tp_theme_css .='.center1{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_preloader_color1_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_color1_option != false){
$online_pharmacy_tp_theme_css .='.center1 .ring::before{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_preloader_color1_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_color2_option != false){
$online_pharmacy_tp_theme_css .='.center2{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_preloader_color2_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_color2_option != false){
$online_pharmacy_tp_theme_css .='.center2 .ring::before{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_preloader_color2_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_preloader_bg_color_option != false){
$online_pharmacy_tp_theme_css .='.loader{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_preloader_bg_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}

// footer-bg-color
$online_pharmacy_tp_footer_bg_color_option = get_theme_mod('online_pharmacy_tp_footer_bg_color_option');

if($online_pharmacy_tp_footer_bg_color_option != false){
$online_pharmacy_tp_theme_css .='#footer{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_footer_bg_color_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}