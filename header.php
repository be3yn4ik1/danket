<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700;600;500;400&family=Inter:wght@300;400;500&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700;600;500;400&family=Inter:wght@300;400;500&display=swap" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@700;600;500;400&family=Inter:wght@300;400;500&display=swap"></noscript>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
<div class="container">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
<?php
$header_logo = get_field( 'header_logo', 'option' );
if ( $header_logo ) {
    echo wp_get_attachment_image( $header_logo['ID'], 'full' );
} else {
    bloginfo( 'name' );
}
?>
</a>
<nav class="header-nav">
<?php
wp_nav_menu( array(
    'theme_location' => 'header_menu',
    'container'      => false,
    'menu_class'     => 'header-menu-list',
    'fallback_cb'    => false,
) );
?>
</nav>
<div class="header-right">
<?php
$phone = get_field( 'phone', 'option' );
if ( $phone ) {
    $phone_clean = preg_replace( '/[^0-9\+]/', '', $phone );
    echo '<a href="tel:' . esc_attr( $phone_clean ) . '" class="header-phone">' . esc_html( $phone ) . '</a>';
}
?>
<a href="#discuss" class="header-btn">Обсудить проект</a>
</div>
<button class="mobile-menu-btn" aria-label="Меню">
<span></span>
<span></span>
<span></span>
</button>
</div>
</header>