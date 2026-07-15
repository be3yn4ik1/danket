<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__brand">
                <a href="/" class="footer__logo">
                    <?php
                    $footer_logo = get_field('footer_logo', 'option');
                    if ($footer_logo) {
                        echo wp_get_attachment_image($footer_logo['ID'], 'full');
                    } else {
                        bloginfo('name');
                    }
                    ?>
                </a>
                <p class="footer__tagline">Компания Danket + ведущая компаний в России<br>в области утепления пенополиуретаном<br>и различных видов гидроизоляции.</p>
            </div>
            <div class="footer__contacts-card">
                <?php
                $phone = get_field('phone', 'option') ?: '+7 (499) 213-04-64';
                $email = get_field('email', 'option') ?: 'info@danketplus.ru';
                $address = get_field('address', 'option') ?: 'г. Одинцово, ул. Вокзальная,<br>д. 53';
                $phone_clean = preg_replace('/[^0-9\+]/', '', $phone);
                ?>
                <a href="tel:<?php echo esc_attr($phone_clean); ?>" class="footer__contact-item f18">
                    <span class="footer__contact-icon"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.05 5C16.0267 5.19057 16.9244 5.66826 17.6281 6.37194C18.3317 7.07561 18.8094 7.97326 19 8.95M15.05 1C17.0793 1.22544 18.9716 2.13417 20.4162 3.57701C21.8609 5.01984 22.772 6.91101 23 8.94M22 16.92V19.92C22.0011 20.1985 21.9441 20.4742 21.8325 20.7293C21.7209 20.9845 21.5573 21.2136 21.3521 21.4019C21.1468 21.5901 20.9046 21.7335 20.6407 21.8227C20.3769 21.9119 20.0974 21.9451 19.82 21.92C16.7428 21.5856 13.787 20.5341 11.19 18.85C8.77382 17.3147 6.72533 15.2662 5.18999 12.85C3.49997 10.2412 2.44824 7.27099 2.11999 4.18C2.095 3.90347 2.12787 3.62476 2.21649 3.36162C2.30512 3.09849 2.44756 2.85669 2.63476 2.65162C2.82196 2.44655 3.0498 2.28271 3.30379 2.17052C3.55777 2.05833 3.83233 2.00026 4.10999 2H7.10999C7.5953 1.99522 8.06579 2.16708 8.43376 2.48353C8.80173 2.79999 9.04207 3.23945 9.10999 3.72C9.23662 4.68007 9.47144 5.62273 9.80999 6.53C9.94454 6.88792 9.97366 7.27691 9.8939 7.65088C9.81415 8.02485 9.62886 8.36811 9.35999 8.64L8.08999 9.91C9.51355 12.4135 11.5864 14.4864 14.09 15.91L15.36 14.64C15.6319 14.3711 15.9751 14.1858 16.3491 14.1061C16.7231 14.0263 17.1121 14.0555 17.47 14.19C18.3773 14.5286 19.3199 14.7634 20.28 14.89C20.7658 14.9585 21.2094 15.2032 21.5265 15.5775C21.8437 15.9518 22.0122 16.4296 22 16.92Z" stroke="#929BAC" stroke-linecap="round" stroke-linejoin="round"/>
</svg> </span>
                    <span class="footer__contact-text"><?php echo esc_html($phone); ?></span>
                </a>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="footer__contact-item f18">
                    <span class="footer__contact-icon">  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="#929BAC" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M22 6L12 13L2 6" stroke="#929BAC" stroke-linecap="round" stroke-linejoin="round"/></svg>                    </span>
                    <span class="footer__contact-text"><?php echo esc_html($email); ?></span>
                </a>
                <div class="footer__contact-item">
                    <span class="footer__contact-icon"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#929BAC" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#929BAC" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </span>
                    <span class="footer__contact-text"><?php echo wp_kses_post($address); ?></span>
                </div>
            </div>
        </div>
        <nav class="footer__nav">
            <div class="footer__nav-col">
                <span class="footer__nav-title">Услуги</span>
                <ul class="footer__nav-list">
                    <li><a href="/ppu/">Утепление ППУ</a></li>
                    <li><a href="/polyurea/">Гидроизоляция полимочевиной</a></li>
                    <li><a href="/izyskaniya/">Инженерные изыскания</a></li>
                    <li><a href="/polimernye-poly/">Полимерные полы</a></li>
                </ul>
            </div>
            <div class="footer__nav-col">
                <span class="footer__nav-title">Направления</span>
                <ul class="footer__nav-list">
                    <li><a href="/ppu/promyshlennye/">Промышленные объекты и ангары</a></li>
                    <li><a href="/polyurea/krovlya/">Гидроизоляция кровли</a></li>
                    <li><a href="/polyurea/fundamenty/">Защита фундаментов и бетона</a></li>
                    <li><a href="/polimernye-poly/promyshlennye/">Промышленные полимерные полы</a></li>
                    <li><a href="/polimernye-poly/dekorativnye/">Декоративные полы</a></li>
                </ul>
            </div>
            <div class="footer__nav-col">
                <span class="footer__nav-title">Изыскания</span>
                <ul class="footer__nav-list">
                    <li><a href="/izyskaniya/geodeziya/">Геодезические изыскания</a></li>
                    <li><a href="/izyskaniya/geologiya/">Геологические изыскания</a></li>
                    <li><a href="/izyskaniya/ekologiya/">Экологические изыскания</a></li>
                    <li><a href="/izyskaniya/gidrometeorologiya/">Гидрометеорологические изыскания</a></li>
                    <li><a href="/izyskaniya/geodeziya/toposemka/">Топографическая съёмка</a></li>
                    <li><a href="/izyskaniya/geodeziya/ispolnitelnaya-semka/">Исполнительная съёмка</a></li>
                </ul>
            </div>
            <div class="footer__nav-col">
                <span class="footer__nav-title">Компания</span>
                <ul class="footer__nav-list">
                    <li><a href="/company/">О компании</a></li>
                    <li><a href="/objects/">Объекты</a></li>
                    <li><a href="/sertifikaty/">Сертификаты и СРО</a></li>
                    <li><a href="/equipment/">Парк оборудования</a></li>
                    <li><a href="/reviews/">Отзывы</a></li>
                    <li><a href="/logistika/">Логистика</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                </ul>
            </div>
        </nav>
        <div class="footer__bottom">
            <span class="footer__copy">&copy; 2009-<?php echo date('Y'); ?> ДАНКЕТ ПЛЮС</span>
            <div class="footer__bottom-links">
                <a href="/pd/" class="footer__policy">Обработка персональных данных</a>
                <a href="/pl/" class="footer__policy">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>

<div class="discuss-modal" id="discussModal">
    <div class="discuss-modal__overlay" data-modal-close></div>
    <div class="discuss-modal__inner">
        <button class="discuss-modal__close" type="button" data-modal-close aria-label="Закрыть">&times;</button>
        <h3 class="discuss-modal__title">Оставить заявку</h3>
        <p class="discuss-modal__subtitle">Свяжемся с вами в течение 15 минут и предложим решение под ваш объект</p>
        <?php echo do_shortcode('[danket_contact_form variant="short" btn_text="Оставить заявку" source="Попап"]'); ?>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
