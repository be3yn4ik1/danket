<?php
get_header(); 
?>
<main>
<section class="eng-services">
    <div class="container">
        <?php if (function_exists("rank_math_the_breadcrumbs")) rank_math_the_breadcrumbs(); ?>
        <div class="about-company-head">
            <div class="about-company-head__content">
                <h1>Отзывы, рекомендации и&nbsp;благодарственные письма</h1>
                <p class="eng-services__subtitle">Отзывы заказчиков по выполненным инженерным и строительным работам. В разделе представлены реальные отзывы и благодарственные письма от заказчиков.</p>
            </div>
            <a href="#discuss" class="eng-services__calc about-company-head__cta">
                <span class="eng-services__calc-desc">Обсудить проект</span>
                <span class="eng-services__calc-arrow"></span>
            </a>
        </div>
    </div>
</section>
	
<section class="cases section cases--letters">
    <div class="container">
        <div class="cases__head">
            <h2>Благодарственные письма</h2>
        </div>
        <?php
        $images = get_field('otzyv_jpg_png');
        if ($images) :
        ?>
            <div class="cases__slider-outer">
                <button class="cases__nav-btn cases__nav-btn--prev" aria-label="Назад"></button>
                <div class="cases__slider-wrap">
                    <div class="cases__track">
<?php foreach ($images as $index => $image) : ?>
    <div
        class="cases__slide"
        data-index="<?php echo esc_attr($index); ?>"
        data-img-src="<?php echo esc_url($image['url']); ?>"
    >
        <img
            src="<?php echo esc_url($image['sizes']['medium_large'] ?? $image['url']); ?>"
            alt="<?php echo esc_attr($image['alt']); ?>"
            class="cases__slide-img">
    </div>
<?php endforeach; ?>
                    </div>
                </div>
                <button class="cases__nav-btn cases__nav-btn--next" aria-label="Вперёд"></button>
            </div>
            <div class="cases__controls">
                <div class="cases__dots"></div>
            </div>
        <?php endif; ?>
    </div>
<div class="cases-lightbox">
    <button class="cases-lightbox__close">&times;</button>
    <button class="cases-lightbox__prev">&#10094;</button>
    <img class="cases-lightbox__img" src="" alt="">
    <button class="cases-lightbox__next">&#10095;</button>
</div>
</section>

<?php
$cases_ids = get_field('kejsy_post');
if (!empty($cases_ids)) :
?>
<section class="cases">
    <div class="container">
        <div class="cases__head">
            <h2>Реальные объекты</h2>
            <a href="/objects/" class="docs__all-btn">Смотреть кейсы</a>
        </div>
        <div class="cases__slider-outer">
            <button class="cases__nav-btn cases__nav-btn--prev" aria-label="Назад"></button>
            <div class="cases__slider-wrap">
                <div class="cases__track">
                    <?php foreach ($cases_ids as $case_id) : ?>
                    <div class="cases__slide">
                        <div class="cases__card">
                            <div class="cases__card-img-wrap">
                                <?php $thumb_url = get_the_post_thumbnail_url($case_id) ?: '/wp-content/uploads/2026/06/case_1.webp'; ?>
                                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title($case_id)); ?>" class="cases__card-img">
                            </div>
                            <div class="cases__card-body">
                                <div class="cases__card-tags">
                                    <?php if (have_rows('tagi', $case_id)) : while (have_rows('tagi', $case_id)) : the_row(); ?>
                                    <span class="cases__card-tag"><?php echo esc_html(get_sub_field('cases_card-tags')); ?></span>
                                    <?php endwhile; endif; ?>
                                </div>
                                <h3 class="cases__card-title"><?php echo esc_html(get_the_title($case_id)); ?></h3>
                                <p class="cases__card-text"><?php echo wp_kses_post(get_field('cases_card-text', $case_id)); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <button class="cases__nav-btn cases__nav-btn--next" aria-label="Вперёд"></button>
        </div>
        <div class="cases__controls">
            <div class="cases__dots"></div>
        </div>
    </div>
</section>
<?php endif; ?>


<section class="cta notopadding mgtop-15" id="discuss">
	<div class="discusscontainer">
    <div class="container">
        <div class="cta__inner">
            <div class="cta__text">
                <h2 class="cta__title">Нужны примеры выполненных проектов?</h2>
				<div class="cta__subtitle">Подберем: релевантные кейсы, отзывы по похожим объектам, примеры решений.</div>

                <?php if (have_rows('cta_list')) : ?>
				<div class="cta__text-list">
                    <?php while (have_rows('cta_list')) : the_row(); ?>
					<p><?php echo esc_html(get_sub_field('text')); ?></p>
                    <?php endwhile; ?>
				</div>
                <?php endif; ?>
            </div>
            <?php echo do_shortcode('[danket_contact_form hide_file="true" btn_text="Запросить информацию"]'); ?>
        </div>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>