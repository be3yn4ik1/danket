<?php
add_action( 'template_redirect', 'redirect_old_geodez_hub' );
function redirect_old_geodez_hub() {
    $request_path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
    if ( $request_path === '/geodez' || $request_path === '/geodez/' ) {
        wp_safe_redirect( home_url( '/izyskaniya/geodeziya/' ), 301 );
        exit;
    }
}


if ( ! function_exists( 'danket_plus_setup' ) ) {
	function danket_plus_setup() {
		register_nav_menus(
			array(
				'header_menu' => esc_html__( 'Header Menu', 'danket-plus' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'danket_plus_setup' );
add_action('after_setup_theme', function() {
    add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
});



if ( ! function_exists( 'danket_plus_scripts' ) ) {
	function danket_plus_scripts() {
		wp_enqueue_style( 'danket-plus-styles', get_stylesheet_uri(), array(), '1.0.0' );
		wp_enqueue_style( 'danket-plus-main-style', get_template_directory_uri() . '/assets/style.css', array(), '1.1.0' );
		wp_enqueue_script( 'danket-plus-main-script', get_template_directory_uri() . '/assets/custom.js', array(), '1.1.0', true );
	}
}
add_action( 'wp_enqueue_scripts', 'danket_plus_scripts' );

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('the_generator', '__return_empty_string');
function remove_plugin_updates($value) { return null; }
add_filter('site_transient_update_plugins', 'remove_plugin_updates');
function remove_theme_updates($value) { return null; }
add_filter('site_transient_update_themes', 'remove_theme_updates');
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

//****************ШОРТКОДЫ
add_shortcode('danket_contact_form', 'danket_contact_form_shortcode');
function danket_contact_form_shortcode($atts) {
    $atts = shortcode_atts([
        'hide_file' => 'false',
        'btn_text'  => 'Передать ТЗ на оценку'
    ], $atts, 'danket_contact_form');

    $hide_file = filter_var($atts['hide_file'], FILTER_VALIDATE_BOOLEAN);

    ob_start();
    ?>
    <form class="cta__form" action="#" method="post">
        <div class="cta__fields">
            <div class="cta__field">
                <label class="cta__label" for="ctaName">Имя</label>
                <input class="cta__input" id="ctaName" type="text" name="name" placeholder="" required>
            </div>
            <div class="cta__field">
                <label class="cta__label" for="ctaCompany">Компания</label>
                <input class="cta__input" id="ctaCompany" type="text" name="company" placeholder="" required>
            </div>
        </div>
        <div class="cta__field--full">
            <label class="cta__label" for="ctaPhone">Номер телефона</label>
            <input class="cta__input" id="ctaPhone" type="text" name="phone" placeholder="" required>
        </div>
        <div class="cta__field--full">
            <label class="cta__label" for="ctaService">Услуга</label>
            <div class="cta__select-wrap">
                <select class="cta__input cta__select" id="ctaService" name="service">
                    <option value="">Инженерные изыскания для проектирования</option>
                    <option>Утепление ППУ</option>
                    <option>Гидроизоляция полимочевиной</option>
                    <option>Полимерные полы</option>
                    <option>Логистика</option>
                </select>
            </div>
        </div>
        
        <?php if (!$hide_file) : ?>
        <div class="cta__field--full">
            <label class="cta__label">Техническое задание</label>
            <label class="cta__file-label" for="ctaFile">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.5 9.5L9 17c-1.657 1.657-4.343 1.657-6 0-1.657-1.657-1.657-4.343 0-6l7-7c1.1-1.1 2.9-1.1 4 0 1.1 1.1 1.1 2.9 0 4L7 15c-.55.55-1.45.55-2 0-.55-.55-.55-1.45 0-2l6.5-6.5" stroke="#8B8FA8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <span>Нажмите, для загрузки файла</span>
                <input type="file" id="ctaFile" name="tz" class="cta__file-input">
            </label>
        </div>
        <?php endif; ?>

        <label class="cta__agree-label">
            <input type="checkbox" class="cta__checkbox" name="agree">
            <span class="cta__checkbox-custom"></span>
            <span class="cta__agree-text">Соглашаюсь с <a href="/pl/" target="_blank">политикой конфиденциальности</a> и даю согласие на <a href="/pd/" target="_blank">обработку персональных данных</a></span>
        </label>
        <button class="cta__submit" type="submit"><?php echo esc_html($atts['btn_text']); ?></button>
    </form>
    <?php
    return ob_get_clean();
}


//**************Фильтр объектов
add_action('wp_ajax_filter_objects', 'danket_filter_objects');
add_action('wp_ajax_nopriv_filter_objects', 'danket_filter_objects');
function danket_filter_objects() {
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;
    $args = array(
        'post_type' => 'objects',
        'posts_per_page' => 4,
        'paged' => $paged,
        'post_status' => 'publish',
        'meta_query' => array('relation' => 'AND')
    );
    $filters = array(
        'direction' => 'po_napravleniyu',
        'type' => 'po_tipu_obekta',
        'region' => 'po_regionu'
    );
    foreach ($filters as $post_key => $meta_key) {
        if (!empty($_POST[$post_key]) && is_array($_POST[$post_key])) {
            $meta_query = array('relation' => 'OR');
            foreach ($_POST[$post_key] as $val) {
                $meta_query[] = array(
                    'key' => $meta_key,
                    'value' => '"' . sanitize_text_field($val) . '"',
                    'compare' => 'LIKE'
                );
            }
            $args['meta_query'][] = $meta_query;
        }
    }
    $query = new WP_Query($args);
    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            danket_render_object_card();
        }
    } else {
        echo '<p class="objects-not-found">Кейсы не найдены.</p>';
    }
    $html = ob_get_clean();
    $pagination = paginate_links(array(
        'base' => '%_%',
        'format' => '?paged=%#%',
        'current' => max(1, $paged),
        'total' => $query->max_num_pages,
        'prev_text' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10 12L6 8L10 4" stroke="#929BAC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
        'next_text' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="#2D323B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
    ));
    wp_send_json_success(array(
        'html' => $html,
        'pagination' => $pagination
    ));
}

function danket_render_object_card() {
    ?>
    <div class="object-card">
        <div class="object-card__info">
            <h2 class="object-card__title"><?php the_title(); ?></h2>
            <div class="object-card__subtitle"><?php echo wp_kses_post(get_field('cases_card-text')); ?></div>
            <div class="object-card__meta">
                <?php if (get_field('skolko_dnej')) : ?>
                <div class="object-card__meta-item"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_743_5907)"><path d="M0 12.6667C0.00105857 13.5504 0.352588 14.3976 0.97748 15.0225C1.60237 15.6474 2.4496 15.999 3.33333 16H12.6667C13.5504 15.999 14.3976 15.6474 15.0225 15.0225C15.6474 14.3976 15.9989 13.5504 16 12.6667V6.66669H0V12.6667ZM11.3333 9.66669C11.5311 9.66669 11.7245 9.72534 11.8889 9.83522C12.0534 9.9451 12.1815 10.1013 12.2572 10.284C12.3329 10.4667 12.3527 10.6678 12.3141 10.8618C12.2755 11.0558 12.1803 11.2339 12.0404 11.3738C11.9006 11.5136 11.7224 11.6089 11.5284 11.6475C11.3344 11.6861 11.1334 11.6663 10.9507 11.5906C10.7679 11.5149 10.6117 11.3867 10.5019 11.2223C10.392 11.0578 10.3333 10.8645 10.3333 10.6667C10.3333 10.4015 10.4387 10.1471 10.6262 9.95958C10.8138 9.77204 11.0681 9.66669 11.3333 9.66669ZM8 9.66669C8.19778 9.66669 8.39112 9.72534 8.55557 9.83522C8.72002 9.9451 8.84819 10.1013 8.92388 10.284C8.99957 10.4667 9.01937 10.6678 8.98079 10.8618C8.9422 11.0558 8.84696 11.2339 8.70711 11.3738C8.56726 11.5136 8.38907 11.6089 8.19509 11.6475C8.00111 11.6861 7.80004 11.6663 7.61732 11.5906C7.43459 11.5149 7.27841 11.3867 7.16853 11.2223C7.05865 11.0578 7 10.8645 7 10.6667C7 10.4015 7.10536 10.1471 7.29289 9.95958C7.48043 9.77204 7.73478 9.66669 8 9.66669ZM4.66667 9.66669C4.86445 9.66669 5.05779 9.72534 5.22224 9.83522C5.38669 9.9451 5.51486 10.1013 5.59055 10.284C5.66623 10.4667 5.68604 10.6678 5.64745 10.8618C5.60887 11.0558 5.51363 11.2339 5.37377 11.3738C5.23392 11.5136 5.05574 11.6089 4.86176 11.6475C4.66778 11.6861 4.46671 11.6663 4.28398 11.5906C4.10126 11.5149 3.94508 11.3867 3.8352 11.2223C3.72532 11.0578 3.66667 10.8645 3.66667 10.6667C3.66667 10.4015 3.77202 10.1471 3.95956 9.95958C4.1471 9.77204 4.40145 9.66669 4.66667 9.66669Z" fill="#F26522"/><path d="M12.6667 1.33333H12V0.666667C12 0.489856 11.9298 0.320286 11.8047 0.195262C11.6797 0.0702379 11.5101 0 11.3333 0C11.1565 0 10.987 0.0702379 10.8619 0.195262C10.7369 0.320286 10.6667 0.489856 10.6667 0.666667V1.33333H5.33333V0.666667C5.33333 0.489856 5.2631 0.320286 5.13807 0.195262C5.01305 0.0702379 4.84348 0 4.66667 0C4.48986 0 4.32029 0.0702379 4.19526 0.195262C4.07024 0.320286 4 0.489856 4 0.666667V1.33333H3.33333C2.4496 1.33439 1.60237 1.68592 0.97748 2.31081C0.352588 2.93571 0.00105857 3.78294 0 4.66667L0 5.33333H16V4.66667C15.9989 3.78294 15.6474 2.93571 15.0225 2.31081C14.3976 1.68592 13.5504 1.33439 12.6667 1.33333Z" fill="#F26522"/></g><defs><clipPath id="clip0_743_5907"><rect width="16" height="16" fill="white"/></clipPath></defs></svg>
                    <span><?php echo esc_html(get_field('skolko_dnej')); ?></span>
                </div>
                <?php endif; ?>
                
                <?php if (get_field('obem_raboty')) : ?>
                <div class="object-card__meta-item"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_743_5910)"><path d="M16 6V1.66667C16 1.4478 15.9569 1.23107 15.8731 1.02886C15.7894 0.826652 15.6666 0.64292 15.5118 0.488155C15.3571 0.333391 15.1733 0.210625 14.9711 0.126867C14.7689 0.0431096 14.5522 0 14.3333 0L10 0V2H12.586L8 6.586L3.414 2H6V0H1.66667C1.22464 0 0.800716 0.175595 0.488155 0.488155C0.175595 0.800716 0 1.22464 0 1.66667L0 6H2V3.414L6.586 8L2 12.586V10H0V14.3333C0 14.5522 0.0431096 14.7689 0.126867 14.9711C0.210625 15.1733 0.333391 15.3571 0.488155 15.5118C0.64292 15.6666 0.826652 15.7894 1.02886 15.8731C1.23107 15.9569 1.4478 16 1.66667 16H6V14H3.414L8 9.414L12.586 14H10V16H14.3333C14.5522 16 14.7689 15.9569 14.9711 15.8731C15.1733 15.7894 15.3571 15.6666 15.5118 15.5118C15.6666 15.3571 15.7894 15.1733 15.8731 14.9711C15.9569 14.7689 16 14.5522 16 14.3333V10H14V12.586L9.414 8L14 3.414V6H16Z" fill="#F26522"/></g><defs><clipPath id="clip0_743_5910"><rect width="16" height="16" fill="white"/></clipPath></defs></svg>
                    <span><?php echo esc_html(get_field('obem_raboty')); ?></span>
                </div>
                <?php endif; ?>
            </div>
            <div class="object-card__details">
                <?php if (get_field('zadacha')) : ?>
                <div class="object-card__detail">
                    <span class="object-card__label">Задача:</span>
                    <span class="object-card__value"><?php echo wp_kses_post(get_field('zadacha')); ?></span>
                </div>
                <?php endif; ?>
                <?php if (get_field('reshenie')) : ?>
                <div class="object-card__detail">
                    <span class="object-card__label">Решение:</span>
                    <span class="object-card__value"><?php echo wp_kses_post(get_field('reshenie')); ?></span>
                </div>
                <?php endif; ?>
                <?php if (get_field('rezultat')) : ?>
                <div class="object-card__detail">
                    <span class="object-card__label">Результат:</span>
                    <span class="object-card__value"><?php echo wp_kses_post(get_field('rezultat')); ?></span>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="object-card__img-wrap">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class' => 'object-card__img'));
            }
            ?>
        </div>
    </div>
    <?php
}


//**************Доп. колонки в админке для CPT "objects"
add_filter('manage_edit-objects_columns', 'danket_objects_admin_columns');
function danket_objects_admin_columns($columns) {
    $new_columns = array();
    foreach ($columns as $key => $label) {
        $new_columns[$key] = $label;
        if ($key === 'title') {
            $new_columns['po_napravleniyu'] = 'По направлению';
            $new_columns['po_tipu_obekta'] = 'По типу объекта';
            $new_columns['po_regionu'] = 'По региону';
        }
    }
    return $new_columns;
}

add_action('manage_objects_posts_custom_column', 'danket_objects_admin_columns_content', 10, 2);
function danket_objects_admin_columns_content($column, $post_id) {
    if (!in_array($column, array('po_napravleniyu', 'po_tipu_obekta', 'po_regionu'), true)) {
        return;
    }
    $value = get_field($column, $post_id);
    if (is_array($value)) {
        echo esc_html(implode(', ', $value));
    } elseif ($value) {
        echo esc_html($value);
    } else {
        echo '—';
    }
}