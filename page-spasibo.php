<?php
get_header();
$phone = get_field('phone', 'option') ?: '+7 (499) 213-04-64';
$phone_clean = preg_replace('/[^0-9\+]/', '', $phone);
?>
<main>
<section class="eng-services">
    <div class="container">
        <div class="thankyou">
            <div class="thankyou__icon">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="32" cy="32" r="32" fill="#F76321"/>
                    <path d="M20 33.5L27.5 41L44 24" stroke="#fff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <h1 class="thankyou__title">Заявка отправлена</h1>
            <p class="thankyou__text">Спасибо! Мы получили вашу заявку и свяжемся с вами в ближайшее время, чтобы обсудить задачу и предложить решение.</p>
            <div class="thankyou__actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header-btn">На главную</a>
                <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="thankyou__phone"><?php echo esc_html($phone); ?></a>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
