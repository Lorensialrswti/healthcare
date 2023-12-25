<?php


$online_pharmacy_tp_theme_css = '';


//theme color
$online_pharmacy_tp_color_option = get_theme_mod('online_pharmacy_tp_color_option');

if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='button[type="submit"], .top-header,.main-navigation .menu > ul > li.highlight,.readmore-btn a,.more-btn a,.box:before,.box:after,a.added_to_cart.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,a.added_to_cart.wc-forward,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,#slider .carousel-control-prev-icon, #slider .carousel-control-next-icon,.call-info span,#abt-product .owl-nav i,.error-404 [type="submit"]{';
$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3, a, a:hover,#theme-sidebar .textwidget a, #footer .textwidget a, .comment-body a, .entry-content a, .entry-summary a,.main-navigation a:hover,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a,#theme-sidebar h3,#theme-sidebar a:hover,h1, h2, h3, h4, h5, h6,h2.woocommerce-loop-product__title, .woocommerce div.product .product_title,.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .product-details span,.book-tkt-btn a.register-btn:hover, #theme-sidebar h2.wp-block-heading,.wp-block-search .wp-block-search__label,.page-box h4 a, #theme-sidebar li a:hover , .header-search [type="submit"],.main-navigation a:hover,.box-content a{';
$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='}';
}


if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.product-details, #abt-product hr{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_option).' !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='.product-details{';
	$online_pharmacy_tp_theme_css .='box-shadow:none !important;';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option != false){
$online_pharmacy_tp_theme_css .='@media screen and (max-width:1000px) {';
$online_pharmacy_tp_theme_css .='.toggle-nav button i  {';
    $online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option).';';
$online_pharmacy_tp_theme_css .='} }';
}
//hover color
$online_pharmacy_tp_color_option_link = get_theme_mod('online_pharmacy_tp_color_option_link');

if($online_pharmacy_tp_color_option_link != false){
$online_pharmacy_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover, .readmore-btn a:hover,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover,#theme-sidebar .tagcloud a:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.call-info span:hover,#abt-product .owl-nav i:hover{';
	$online_pharmacy_tp_theme_css .='background: '.esc_attr($online_pharmacy_tp_color_option_link).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option_link != false){
$online_pharmacy_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover , #footer li a:hover{';
	$online_pharmacy_tp_theme_css .='color: '.esc_attr($online_pharmacy_tp_color_option_link).';';
$online_pharmacy_tp_theme_css .='}';
}
if($online_pharmacy_tp_color_option_link != false){
$online_pharmacy_tp_theme_css .='#footer .tagcloud a:hover,p.wp-block-tag-cloud a:hover,.post_tag a:hover,#theme-sidebar .tagcloud a:hover{';
	$online_pharmacy_tp_theme_css .='border-color: '.esc_attr($online_pharmacy_tp_color_option_link).';';
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

//footer image
$online_pharmacy_footer_widget_image = get_theme_mod('online_pharmacy_footer_widget_image');
if($online_pharmacy_footer_widget_image != false){
$online_pharmacy_tp_theme_css .='#footer{';
	$online_pharmacy_tp_theme_css .='background: url('.esc_attr($online_pharmacy_footer_widget_image).');';
$online_pharmacy_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$health_care_hospital_slider_content_layout = get_theme_mod('health_care_hospital_slider_content_layout', 'RIGHT-ALIGN'); 
$online_pharmacy_tp_theme_css .= '#slider .carousel-caption{';
switch ($health_care_hospital_slider_content_layout) {
    case 'LEFT-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:left; right: 50%; left: 20%';
        break;
    case 'CENTER-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:center; left: 20%; right: 20%';
        break;
    case 'RIGHT-ALIGN':
        $online_pharmacy_tp_theme_css .= 'text-align:right; left: 50%; right: 20%';
        break;
    default:
        $online_pharmacy_tp_theme_css .= 'text-align:left; right: 50%; left: 20%';
        break;
}
$online_pharmacy_tp_theme_css .= '}';

