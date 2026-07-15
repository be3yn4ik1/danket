<?php
get_header(); 
?>
<main>
<section class="eng-services">
	<div class="container">
		<?php if (function_exists("rank_math_the_breadcrumbs")) rank_math_the_breadcrumbs(); ?>
       <h1>Сертификаты, СРО и техническая документация</h1>
<div class="eng-services__grid service-one-slide">
	<div class="eng-services__sidebar">
            <div class="eng-services__features">
                <ul class="eng-services__features-list">
                    <li class="eng-services__features-item">СРО</li>
                    <li class="eng-services__features-item">Сертификаты на материалы</li>
                    <li class="eng-services__features-item">Технические паспорта</li>
                    <li class="eng-services__features-item">Исполнительная документация</li>
					<li class="eng-services__features-item">Нормативные документы производителей</li>
                </ul>
            </div>
            <a href="#discuss" class="eng-services__calc eng-services__calc--btn">
                <span class="eng-services__calc-desc">Запросить комплект документов под объект</span>
                <span class="eng-services__calc-arrow"></span>
            </a>
        </div>
        <div class="eng-services__slider">
            <div class="eng-services__corners">
                <div class="eng-services__corners-inner"></div>
            </div>

            <div class="eng-services__track" id="engServicesTrack">
                <div class="eng-services__slide">
                    <img src="/wp-content/uploads/2026/07/gl_slide_sertifikaty.webp" alt="Сертификаты, СРО и техническая документация Danket" class="eng-services__slide-bg" fetchpriority="high">
                </div>
            </div>

            <div class="eng-services__overlay">
                <div class="eng-services__info-wrap">
                    <div class="eng-services__info eng-services__info--active">
					   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_224_4341)"><path d="M6.51835 22.9635H2.03662C1.48434 22.9635 1.03662 22.5158 1.03662 21.9635V17.4817M17.4818 22.9635H21.9635C22.5158 22.9635 22.9635 22.5158 22.9635 21.9635V17.4817M22.9635 6.51829V2.03656C22.9635 1.48428 22.5158 1.03656 21.9635 1.03656H17.4818M6.51835 1.03656H2.03662C1.48434 1.03656 1.03662 1.48427 1.03662 2.03656V6.51829" stroke="white" stroke-width="0.6"></path><path d="M12.0366 7.73846V16.2615" stroke="white" stroke-width="0.6"></path><path d="M16.335 11.9636L7.73903 11.9636" stroke="white" stroke-width="0.6"></path></g><defs><clipPath id="clip0_224_4341"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg>
                       <p class="eng-services__info-desc">Документы по материалам, допускам, СРО и техническим решениям для объектов ППУ, полимочевины, изысканий и других направлений.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
	</div>
</section>


<?php
$doc_terms = get_terms([
    'taxonomy' => 'rub-objects',
    'hide_empty' => true,
]);
if (!empty($doc_terms) && !is_wp_error($doc_terms)) :
?>
<section class="docs" id="docs">
    <div class="container">
		<h2 class="technology__title">Наши документы и допуски</h2>
        <div class="docs__grid">
            <div class="docs__sidebar">
                <ul class="docs__list">
                    <?php $i = 0; foreach ($doc_terms as $term) : ?>
                        <li class="docs__list-item<?php echo $i === 0 ? ' docs__list-item--active' : ''; ?>" data-term="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></li>
                    <?php $i++; endforeach; ?>
                </ul>
                <a href="#discuss" class="docs__download-btn btn btn--outline">Запросить документы</a>
            </div>
            <div class="docs__content">
                <?php $i = 0; foreach ($doc_terms as $term) : ?>
                <div class="docs__pane<?php echo $i === 0 ? ' docs__pane--active' : ''; ?>" data-term="<?php echo esc_attr($term->slug); ?>">
                    <span class="docs__content-label"><?php echo esc_html($term->name); ?></span>
                    <div class="docs__cards">
                        <?php
                        $docs_query = new WP_Query([
                            'post_type' => 'sertifikaty',
                            'posts_per_page' => -1,
                            'tax_query' => [
                                [
                                    'taxonomy' => 'rub-objects',
                                    'field' => 'term_id',
                                    'terms' => $term->term_id,
                                ]
                            ]
                        ]);
                        if ($docs_query->have_posts()) :
                            while ($docs_query->have_posts()) : $docs_query->the_post(); 
                            $doc_url = get_field('fajl_dokumenta') ?: get_permalink();
                            $doc_date = get_the_modified_date('d.m.Y');
                            ?>
                            <a class="docs__card" href="<?php echo esc_url($doc_url); ?>" target="_blank">
                                <div class="docs__card-preview">
                                   <!-- <object data="<?php echo esc_url($doc_url); ?>#view=FitH&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/doc_file.svg" alt="<?php echo esc_attr(get_the_title()); ?>" class="docs__card-icon">
                                    </object> -->
                                <div class="docs__card-img-wrap"><img src="/wp-content/uploads/2026/06/doc_file.svg" alt="Выписка СРО" class="docs__card-img" loading="lazy"></div>
                                </div>
                                <span class="docs__card-name"><?php echo esc_html(get_the_title()); ?></span>
<p>Смотреть документ</p>
                            </a>
                            <?php 
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
                <?php $i++; endforeach; ?>
            </div>
            <a href="#discuss" class="docs__download-btn docs__download-btn--mobile btn btn--outline pcnone">Запросить документы</a>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="benefits nopaddingtop">
    <div class="container">
        <div class="benefits__grid">
            <div class="benefits__item">
                <h2 class="benefits__title">Особенности работы</h2>
                <div class="benefits__block">
                    <h3 class="benefits__block-title">Работы выполняются:</h3>
                    <ul class="benefits__list">
                        <li>в соответствии с проектной документацией</li>
                        <li>с учетом требований СП и ГОСТ</li>
                        <li>по регламентам производителей материалов</li>
                    </ul>
                </div>
            </div>
            <div class="benefits__item">
                <h2 class="benefits__title">Почему важны документы</h2>
                <div class="benefits__block">
                    <h3 class="benefits__block-title">Для промышленных и коммерческих объектов важно:</h3>
                    <ul class="benefits__list">
                        <li>соответствие требованиям проекта</li>
                        <li>прохождение внутреннего контроля</li>
                        <li>подготовка к экспертизе</li>
                        <li>снижение рисков при эксплуатации</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="faq-v2">
    <div class="container">
        <div class="faq-v2__inner" style="background-image: linear-gradient(rgba(45, 50, 59, 0.8), rgba(45, 50, 59, 0.8)), url('/wp-content/uploads/2026/06/faq_bg.webp');">
            <h2 class="faq-v2__title">FAQ</h2>
            <?php if (have_rows('faq')) : ?>
            <div class="faq-v2__grid">
                <?php while (have_rows('faq')) : the_row(); ?>
                <div class="faq-v2__item">
                    <div class="faq-v2__q"><?php echo esc_html(get_sub_field('question')); ?></div>
                    <div class="faq-v2__a"><?php echo esc_html(get_sub_field('answer')); ?></div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="cta" id="discuss">
    <div class="discusscontainer">
        <div class="container">
            <div class="cta__inner">
                <div class="cta__text">
                    <h2 class="cta__title">Нужны документы по конкретному направлению?</h2>
			   <?php if (have_rows('cta_list')) : ?>
				<div class="cta__text-list">
					<div class="cta__subtitle">Подготовим:</div>
                    <?php while (have_rows('cta_list')) : the_row(); ?>
					<p><?php echo esc_html(get_sub_field('text')); ?></p>
                    <?php endwhile; ?>
				</div>
                <?php endif; ?>
                </div>
                <div class="cta__form-wrapper">
                    <?php echo do_shortcode('[danket_contact_form btn_text="Запросить документы"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php get_footer(); 