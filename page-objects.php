<?php
get_header(); ?>
<main>

<section class="eng-services">
    <div class="container">
        <?php if (function_exists("rank_math_the_breadcrumbs")) rank_math_the_breadcrumbs(); ?>
        <div class="flexslidehero">
        <div>
		<h1>Реализованные объекты Danket Plus</h1>
        <p class="eng-services__subtitle">Примеры работ по ППУ, полимочевине, инженерным изысканиям, геодезии и другим направлениям.”</p>
		<ul class="benefits__list ul-border">
            <li>Промышленные и коммерческие объекты</li>
            <li>Работа по всей РФ</li>
            <li>Разные масштабы: от частных объектов до крупных площадок</li>
        </ul>
		<p class="eng-services__subtitle">Используйте фильтр, чтобы найти проекты под вашу задачу.</p>
	    </div>
          <img src="/wp-content/uploads/2026/07/gl_slide_keys.webp"  alt="Реализованные объекты Danket Plus" class="eng-services__slide-ine" fetchpriority="high">
		</div>
    </div>
</section>



<section class="page-objects">
    <div class="container">
        <form class="objects-filters" id="objects-filter-form" onsubmit="return false;">
            <div class="objects-filter__group">
                <span class="objects-filter__label">Направления</span>
                <div class="custom-dropdown" data-default="Все направления">
                    <button type="button" class="custom-dropdown__toggle">
                        <span class="custom-dropdown__text">Все направления</span>
                        <svg class="custom-dropdown__arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.4101 6.9108C14.7355 6.58536 15.263 6.58536 15.5885 6.9108C15.9139 7.23623 15.9139 7.76374 15.5885 8.08918L10.5885 13.0892C10.263 13.4146 9.73553 13.4146 9.41009 13.0892L4.41009 8.08918C4.08466 7.76374 4.08466 7.23623 4.41009 6.9108C4.73553 6.58536 5.26304 6.58536 5.58848 6.9108L9.99929 11.3216L14.4101 6.9108Z" fill="#525A6B"/>
</svg>

                    </button>
                    <div class="custom-dropdown__menu">
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="direction[]" value="ППУ">
                            <span class="custom-dropdown__item-text">ППУ</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="direction[]" value="Полимочевина">
                            <span class="custom-dropdown__item-text">Полимочевина</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="direction[]" value="Инженерные изыскания">
                            <span class="custom-dropdown__item-text">Инженерные изыскания</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="direction[]" value="Полимерные полы">
                            <span class="custom-dropdown__item-text">Полимерные полы</span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="objects-filter__group">
                <span class="objects-filter__label">Тип объекта</span>
                <div class="custom-dropdown" data-default="Все объекты">
                    <button type="button" class="custom-dropdown__toggle">
                        <span class="custom-dropdown__text">Все объекты</span>
                        <svg class="custom-dropdown__arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.4101 6.9108C14.7355 6.58536 15.263 6.58536 15.5885 6.9108C15.9139 7.23623 15.9139 7.76374 15.5885 8.08918L10.5885 13.0892C10.263 13.4146 9.73553 13.4146 9.41009 13.0892L4.41009 8.08918C4.08466 7.76374 4.08466 7.23623 4.41009 6.9108C4.73553 6.58536 5.26304 6.58536 5.58848 6.9108L9.99929 11.3216L14.4101 6.9108Z" fill="#525A6B"/>
</svg>
                    </button>
                    <div class="custom-dropdown__menu">
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="type[]" value="Производственные">
                            <span class="custom-dropdown__item-text">Производственные</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="type[]" value="Склады и логистика">
                            <span class="custom-dropdown__item-text">Склады и логистика</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="type[]" value="Жилые">
                            <span class="custom-dropdown__item-text">Жилые</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="type[]" value="Коммерческие">
                            <span class="custom-dropdown__item-text">Коммерческие</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="type[]" value="Линейные">
                            <span class="custom-dropdown__item-text">Линейные</span>
                        </label>
                    </div>
                </div>
            </div>
            
            <div class="objects-filter__group">
                <span class="objects-filter__label">Регион</span>
                <div class="custom-dropdown" data-default="Все регионы">
                    <button type="button" class="custom-dropdown__toggle">
                        <span class="custom-dropdown__text">Все регионы</span>
                        <svg class="custom-dropdown__arrow" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14.4101 6.9108C14.7355 6.58536 15.263 6.58536 15.5885 6.9108C15.9139 7.23623 15.9139 7.76374 15.5885 8.08918L10.5885 13.0892C10.263 13.4146 9.73553 13.4146 9.41009 13.0892L4.41009 8.08918C4.08466 7.76374 4.08466 7.23623 4.41009 6.9108C4.73553 6.58536 5.26304 6.58536 5.58848 6.9108L9.99929 11.3216L14.4101 6.9108Z" fill="#525A6B"/>
</svg>
                    </button>
                    <div class="custom-dropdown__menu">
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="region[]" value="Центральный">
                            <span class="custom-dropdown__item-text">Центральный</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="region[]" value="Северо-Запад">
                            <span class="custom-dropdown__item-text">Северо-Запад</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="region[]" value="Урал">
                            <span class="custom-dropdown__item-text">Урал</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="region[]" value="Сибирь">
                            <span class="custom-dropdown__item-text">Сибирь</span>
                        </label>
                        <label class="custom-dropdown__item">
                            <input type="checkbox" name="region[]" value="Дальний Восток">
                            <span class="custom-dropdown__item-text">Дальний Восток</span>
                        </label>
                    </div>
                </div>
            </div>

            <button type="button" id="filter-reset" class="objects-filter__reset">Очистить фильтр</button>
        </form>

        <div id="objects-container" class="objects-results">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'objects',
                'posts_per_page' => 4,
                'paged' => $paged,
                'post_status' => 'publish'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    if (function_exists('danket_render_object_card')) {
                        danket_render_object_card();
                    }
                }
            } else {
                echo '<p class="objects-not-found">Кейсы не найдены.</p>';
            }
            ?>
        </div>

        <div id="objects-pagination" class="objects-pagination">
            <?php
            echo paginate_links(array(
                'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'format' => '?paged=%#%',
                'current' => max(1, $paged),
                'total' => $query->max_num_pages,
                'prev_text' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M10 12L6 8L10 4" stroke="#929BAC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                'next_text' => '<svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="#2D323B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            ));
            ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ajaxUrl = '<?php echo admin_url('admin-ajax.php'); ?>';
    const container = document.getElementById('objects-container');
    const paginationContainer = document.getElementById('objects-pagination');
    const resetBtn = document.getElementById('filter-reset');
    document.querySelectorAll('.custom-dropdown').forEach(dropdown => {
        const toggle = dropdown.querySelector('.custom-dropdown__toggle');
        const text = dropdown.querySelector('.custom-dropdown__text');
        const defaultText = dropdown.dataset.default;
        const checkboxes = dropdown.querySelectorAll('input[type="checkbox"]');
        toggle.addEventListener('click', () => {
            const isOpen = dropdown.classList.contains('is-open');
            document.querySelectorAll('.custom-dropdown').forEach(d => d.classList.remove('is-open'));
            if (!isOpen) {
                dropdown.classList.add('is-open');
            }
        });
        checkboxes.forEach(cb => {
            cb.addEventListener('change', () => {
                const checked = Array.from(checkboxes).filter(c => c.checked);
                if (checked.length === 0) {
                    text.textContent = defaultText;
                } else if (checked.length === 1) {
                    text.textContent = checked[0].nextElementSibling.textContent;
                } else {
                    text.textContent = `Выбрано: ${checked.length}`;
                }
                fetchObjects(1);
            });
        });
    });
    document.addEventListener('click', (e) => { if (!e.target.closest('.custom-dropdown')) { document.querySelectorAll('.custom-dropdown').forEach(d => d.classList.remove('is-open')); } });
    function fetchObjects(paged = 1) {
        const formData = new FormData();
        formData.append('action', 'filter_objects');
        formData.append('paged', paged);
        const directions = Array.from(document.querySelectorAll('input[name="direction[]"]:checked')).map(cb => cb.value);
        const types = Array.from(document.querySelectorAll('input[name="type[]"]:checked')).map(cb => cb.value);
        const regions = Array.from(document.querySelectorAll('input[name="region[]"]:checked')).map(cb => cb.value);
        directions.forEach(val => formData.append('direction[]', val));
        types.forEach(val => formData.append('type[]', val));
        regions.forEach(val => formData.append('region[]', val));
        container.style.opacity = '0.5';
        fetch(ajaxUrl, { method: 'POST', body: formData })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                container.innerHTML = data.data.html;
                paginationContainer.innerHTML = data.data.pagination;
                container.style.opacity = '1';
            }
        });
    }
    resetBtn.addEventListener('click', () => {
        document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
        document.querySelectorAll('.custom-dropdown').forEach(dropdown => { dropdown.querySelector('.custom-dropdown__text').textContent = dropdown.dataset.default; });
        fetchObjects(1);
    });
    document.addEventListener('click', function(e) {
        const link = e.target.closest('.objects-pagination a');
        if (link) {
            e.preventDefault();
            const url = new URL(link.href);
            let paged = url.searchParams.get('paged') || 1;
            const match = link.href.match(/\/page\/(\d+)/);
            if (match) { paged = match[1]; }
            fetchObjects(paged);
            const filtersOffset = document.querySelector('.objects-filters').getBoundingClientRect().top + window.scrollY - 50;
            window.scrollTo({ top: filtersOffset, behavior: 'smooth' });
        }
    });
});
</script>

<?php wp_reset_postdata(); ?>

<section class="cta  notopadding mgtop-15" id="discuss">
	<div class="discusscontainer">
    <div class="container">
        <div class="cta__inner">
            <div class="cta__text">
                <h2 class="cta__title">Рассчитать стоимость вашего проекта</h2>
                <?php if (have_rows('cta_list')) : ?>
				<div class="cta__text-list">
                    <?php while (have_rows('cta_list')) : the_row(); ?>
					<p><?php echo esc_html(get_sub_field('text')); ?></p>
                    <?php endwhile; ?>
				</div>
                <?php endif; ?>
            </div>
            <?php echo do_shortcode('[danket_contact_form btn_text="Передать ТЗ"]'); ?>
        </div>
    </div>
  </div>
</section>

	
</main>
<?php get_footer(); ?>