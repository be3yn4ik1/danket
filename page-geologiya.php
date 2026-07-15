<?php get_header(); ?>
<main>

<section class="eng-services">
	<div class="container">
		<?php if (function_exists("rank_math_the_breadcrumbs")) rank_math_the_breadcrumbs(); ?>
		<h1>Инженерно-геологические изыскания для проектирования и экспертизы</h1>
		<p class="eng-services__subtitle">Инженерно-геологические изыскания с подготовкой данных для проектирования и прохождения экспертизы.</p>

<div class="eng-services__grid service-one-slide">
	<div class="eng-services__sidebar">
            <div class="eng-services__features">
                <ul class="eng-services__features-list">
                    <li class="eng-services__features-item">Бурение и отбор проб</li>
                    <li class="eng-services__features-item">Лабораторные исследования</li>
                    <li class="eng-services__features-item">Оценка грунтовых условий</li>
                    <li class="eng-services__features-item">Работа по всей РФ</li>
                </ul>
            </div>
            <a href="#discuss" class="eng-services__calc eng-services__calc--btn">
                <span class="eng-services__calc-desc">Получить расчет</span>
                <span class="eng-services__calc-arrow"></span>
            </a>
        </div>
        <div class="eng-services__slider">
            <div class="eng-services__corners">
                <div class="eng-services__corners-inner"></div>
            </div>

            <div class="eng-services__track" id="engServicesTrack">
                <div class="eng-services__slide">
                    <img src="/wp-content/uploads/2026/06/gl_slide_geologiya.webp" alt="Инженерно-геологические изыскания" class="eng-services__slide-bg" fetchpriority="high">
                </div>
            </div>

            <div class="eng-services__overlay">
                <div class="eng-services__info-wrap">
                    <div class="eng-services__info eng-services__info--active">
					   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_224_4341)"><path d="M6.51835 22.9635H2.03662C1.48434 22.9635 1.03662 22.5158 1.03662 21.9635V17.4817M17.4818 22.9635H21.9635C22.5158 22.9635 22.9635 22.5158 22.9635 21.9635V17.4817M22.9635 6.51829V2.03656C22.9635 1.48428 22.5158 1.03656 21.9635 1.03656H17.4818M6.51835 1.03656H2.03662C1.48434 1.03656 1.03662 1.48427 1.03662 2.03656V6.51829" stroke="white" stroke-width="0.6"/><path d="M12.0366 7.73846V16.2615" stroke="white" stroke-width="0.6"/><path d="M16.335 11.9636L7.73903 11.9636" stroke="white" stroke-width="0.6"/></g><defs><clipPath id="clip0_224_4341"><rect width="24" height="24" fill="white"/></clipPath></defs></svg>
                       <p class="eng-services__info-desc">Организуем геологические изыскания в составе комплексных работ.</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
	</div>
</section>

<section class="base-prep">
    <div class="container">
        <div class="base-prep__grid">
            <div class="benefits__image-wrap consequencesimg">
                <div class="benefits__corners"><div class="benefits__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/task-geologiya.webp" alt="Задача геологических изысканий" class="benefits__image">
            </div>

            <div class="base-prep__content">
                <h2 class="base-prep__title">Задача геологических изысканий</h2>
                <p class="base-prep__text">Геология отвечает на ключевые вопросы проектирования:</p>

                <div class="benefits__block">
                    <ul class="benefits__list">
                        <li>какие грунты на участке</li>
                        <li>несущая способность основания</li>
                        <li>уровень и влияние грунтовых вод</li>
                        <li>риски деформаций</li>
                    </ul>
                </div>

                <div class="base-prep__alert">
                    <div class="base-prep__alert-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_244_1101)"><path d="M6.51835 22.9635H2.03662C1.48434 22.9635 1.03662 22.5158 1.03662 21.9635V17.4818M17.4818 22.9635H21.9635C22.5158 22.9635 22.9635 22.5158 22.9635 21.9635V17.4818M22.9635 6.51835V2.03662C22.9635 1.48434 22.5158 1.03662 21.9635 1.03662H17.4818M6.51835 1.03662H2.03662C1.48434 1.03662 1.03662 1.48434 1.03662 2.03662V6.51835" stroke="white"></path><path d="M17.7267 8.40527L10.3934 15.7386L7.06006 12.4053" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_244_1101"><rect width="24" height="24" fill="white"></rect></clipPath></defs></svg></div>
                    <p class="base-prep__alert-text">Ошибки на этом этапе приводят к: перерасчету конструкций, увеличению стоимости строительства, проблемам при эксплуатации.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="applications">
    <div class="container applications__container">
        <div class="applications__sidebar">
            <h2 class="applications__title">Что входит<br>в работы</h2>
            <p class="applications__subtitle">Состав определяется проектом и техническим заданием.</p>
            <div class="applications__nav">
                <button class="applications__nav-btn applications__nav-btn--prev" id="appPrev" aria-label="Назад"></button>
                <button class="applications__nav-btn applications__nav-btn--next" id="appNext" aria-label="Вперед"></button>
            </div>
        </div>

        <div class="applications__slider-wrap">
            <div class="applications__track" id="appTrack">
                <div class="applications__slide">
                    <div class="applications__card">
                        <div class="applications__card-img-wrap">
                            <img src="/wp-content/uploads/2026/06/geologiya_burenie.webp" alt="Бурение скважин" class="applications__card-img">
                        </div>
                        <div class="applications__card-meta">[01]</div>
                        <h3 class="title_18_600">Бурение скважин</h3>
                    </div>
                </div>
                <div class="applications__slide">
                    <div class="applications__card">
                        <div class="applications__card-img-wrap">
                            <img src="/wp-content/uploads/2026/06/geologiya_otbor.webp" alt="Отбор грунтов" class="applications__card-img">
                        </div>
                        <div class="applications__card-meta">[02]</div>
                        <h3 class="title_18_600">Отбор грунтов</h3>
                    </div>
                </div>
                <div class="applications__slide">
                    <div class="applications__card">
                        <div class="applications__card-img-wrap">
                            <img src="/wp-content/uploads/2026/06/geologiya_lab.webp" alt="Лабораторные испытания" class="applications__card-img">
                        </div>
                        <div class="applications__card-meta">[03]</div>
                        <h3 class="title_18_600">Лабораторные испытания</h3>
                    </div>
                </div>
                <div class="applications__slide">
                    <div class="applications__card">
                        <div class="applications__card-img-wrap">
                            <img src="/wp-content/uploads/2026/06/geologiya_analiz.webp" alt="Анализ инженерно-геологических условий" class="applications__card-img">
                        </div>
                        <div class="applications__card-meta">[04]</div>
                        <h3 class="title_18_600">Анализ инженерно-геологических условий</h3>
                    </div>
                </div>
                <div class="applications__slide">
                    <div class="applications__card">
                        <div class="applications__card-img-wrap">
                            <img src="/wp-content/uploads/2026/06/geologiya_kameral.webp" alt="Камеральная обработка" class="applications__card-img">
                        </div>
                        <div class="applications__card-meta">[05]</div>
                        <h3 class="title_18_600">Камеральная обработка</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benefits">
    <div class="container">
        <div class="benefits__grid">
            <div class="benefits__image-wrap consequencesimg">
                <div class="benefits__corners"><div class="benefits__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/results-geologiya.webp" alt="Результат работ" class="benefits__image">
            </div>

            <div class="benefits__content">
                <h2 class="benefits__title">Результат работ</h2>

                <div class="benefits__block">
                    <h3 class="benefits__block-title">Заказчик получает:</h3>
                    <ul class="benefits__list">
                        <li>инженерно-геологический отчет</li>
                        <li>разрезы грунтов</li>
                        <li>результаты лабораторных исследований</li>
                        <li>рекомендации для проектирования</li>
                    </ul>
                </div>

                <p class="benefits__subtitle">Документация формируется под требования экспертизы.</p>

                <div class="benefits__block">
                    <h3 class="benefits__block-title">Комплексная организация изысканий</h3>
                    <p>Берём на себя организацию полного цикла: анализ ТЗ, определение состава работ, полевой этап, лаборатория, камеральная обработка, отчёт, передача заказчику.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients where-works">
    <div class="container">
        <div class="clients__header">
            <h2>Где применяется</h2>
        </div>
        <div class="clients__list">
            <div class="clients__item">
                <div class="clients__corners"><div class="clients__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/clients_jilcompleks.webp" alt="жилые комплексы" class="clients__img">
                <span class="clients__name">Жилые комплексы</span>
            </div>
            <div class="clients__item">
                <div class="clients__corners"><div class="clients__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/clients_promobjerkts.webp" alt="промышленные объекты" class="clients__img">
                <span class="clients__name">Промышленные объекты</span>
            </div>
            <div class="clients__item">
                <div class="clients__corners"><div class="clients__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/clients_skladlogcentr.webp" alt="склады и логистические центры" class="clients__img">
                <span class="clients__name">Склады и логистические центры</span>
            </div>
            <div class="clients__item">
                <div class="clients__corners"><div class="clients__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/clients_kommerchzastroika.webp" alt="коммерческая застройка" class="clients__img">
                <span class="clients__name">Коммерческая застройка</span>
            </div>
            <div class="clients__item">
                <div class="clients__corners"><div class="clients__corners-inner"></div></div>
                <img src="/wp-content/uploads/2026/06/clients_lineobjects.webp" alt="линейные объекты" class="clients__img">
                <span class="clients__name">Линейные объекты</span>
            </div>
        </div>
    </div>
</section>

<section class="directions nopaddingtop">
    <div class="container">
        <h2 class="timelines__title">Сроки выполнения</h2>
        <div class="timelines__grid">
            <div class="timelines__card">
                <h3 class="timelines__card-title">Типовые сроки:</h3>
                <ul class="timelines__list">
                    <li>полевые работы — 3–10 дней</li>
                    <li>лаборатория и отчеты — 5–15 дней</li>
                </ul>
				<img src="/wp-content/uploads/2026/07/ucastok1.webp" alt="les" class="timelines__grid-absolute">
            </div>
            <div class="timelines__card">
                <h3 class="timelines__card-title">Зависят от:</h3>
                <ul class="timelines__list">
                    <li>количества скважин</li>
                    <li>глубины бурения</li>
                    <li>сложности грунтов</li>
                    <li>региона</li>
                </ul>
				<img src="/wp-content/uploads/2026/07/bur1.webp" alt="les" class="timelines__grid-absolute">
            </div>
        </div>
    </div>
</section>

<section class="process" style="background-color: #000000B2;background-image:url(/wp-content/uploads/2026/06/bg-main-shag-izyskaniya.webp)">
    <div class="container">
        <h2 class="white-c">Как проходит работа</h2>
        <div class="process__steps">
            <div class="process__step">
                <span class="process__num">/01</span>
                <div class="process__content"><p class="process__name">Получение ТЗ</p></div>
            </div>
            <div class="process__step">
                <span class="process__num">/02</span>
                <div class="process__content"><p class="process__name">Определение состава работ</p></div>
            </div>
            <div class="process__step">
                <span class="process__num">/03</span>
                <div class="process__content"><p class="process__name">Организация бурения</p></div>
            </div>
            <div class="process__step">
                <span class="process__num">/04</span>
                <div class="process__content"><p class="process__name">Отбор проб</p></div>
            </div>
            <div class="process__step">
                <span class="process__num">/05</span>
                <div class="process__content"><p class="process__name">Лабораторные исследования</p></div>
            </div>
            <div class="process__step">
                <span class="process__num">/06</span>
                <div class="process__content"><p class="process__name">Подготовка отчета</p></div>
            </div>
            <div class="process__step">
                <span class="process__num">/07</span>
                <div class="process__content"><p class="process__name">Передача заказчику</p></div>
            </div>
        </div>
    </div>
</section>

<section class="regulatory">
    <div class="container">
        <div class="regulatory__grid">
            <div class="regulatory__content">
                <h2 class="regulatory__title">Важные моменты</h2>
                <ul class="regulatory__list">
                    <li>Работы выполняются под задачи проектирования</li>
                    <li>Учитываются требования экспертизы</li>
                    <li>Подбирается оптимальный состав изысканий</li>
                </ul>
            </div>
            <div class="regulatory__visual">
                <img src="/wp-content/uploads/2026/06/regulatory-sheet.webp" alt="Нормативные документы" class="regulatory__sheet">
                <img src="/wp-content/uploads/2026/06/regulatory-badge.svg" alt="Danket" class="regulatory__badge">
            </div>
        </div>
    </div>
</section>

<?php
$cases_ids = get_field('kejsy_post');
if (!empty($cases_ids)) :
?>
<section class="cases">
    <div class="container">
        <div class="cases__head">
            <h2>Кейсы</h2>
            <a href="/objects/" class="docs__all-btn">Все объекты</a>
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

<section class="cost-section">
    <div class="container">
        <div class="">
            <div class="cost-section__info">
                <h2 class="cost-section__title">Стоимость геологических изысканий</h2>
                <p class="cost-section__subtitle">Формируется индивидуально по ТЗ, по исходным данным. Зависит от:</p>
                <ul class="cost-section__list">
					<li>количество скважин</li> 
					<li>глубина бурения</li> 
					<li>площадь участка</li> 
					<li>тип объекта</li> 
					<li>регион</li> 
					<li>лабораторные исследования</li> 
					<li>срочность</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="faq-v2">
    <div class="container">
        <div class="faq-v2__inner" style="background-image: linear-gradient(rgba(45, 50, 59, 0.8), rgba(45, 50, 59, 0.8)), url('/wp-content/uploads/2026/06/faqgeologiya.webp');">
            <h2 class="faq-v2__title">FAQ</h2>
            <?php if (have_rows('faq')) : ?>
            <div class="faq-v2__grid">
                <?php while (have_rows('faq')) : the_row(); ?>
                <div class="faq-v2__item">
                    <div class="faq-v2__q"><?php echo esc_html(get_sub_field('question')); ?></div>
                    <div class="faq-v2__a"><?php the_sub_field('answer'); ?></div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<div class="h100-60"></div>
<section class="why-choose-ppu">
    <div class="container">
        <div class="why-choose-ppu__grid">
            <div class="why-choose-ppu__content">
                <h2 class="why-choose-ppu__title">Почему выбирают нас</h2>
                <p class="why-choose-ppu__desc">
                    ГРУППА КОМПАНИЙ «ДАНКЕТ»<br>
                    — ЭКСПЕРТ В ОБЛАСТИ НАПЫЛЯЕМОЙ ИЗОЛЯЦИИ<br>
                    С ОПЫТОМ РАБОТЫ <span class="why-choose-ppu__badge"><span class="why-choose-ppu__badge-text">БОЛЕЕ 12 ЛЕТ</span></span>
                </p>
                <div class="why-choose-ppu__stats">
                    <div class="why-choose-ppu__stat">
                        <div class="why-choose-ppu__stat-val">50 лет</div>
                        <div class="why-choose-ppu__stat-text">Срок службы полиуретана<br>без потери свойств</div>
                    </div>
                    <div class="why-choose-ppu__stat">
                        <div class="why-choose-ppu__stat-val">10 лет</div>
                        <div class="why-choose-ppu__stat-text">Гарантия на выполненную<br>работу</div>
                    </div>
                    <div class="why-choose-ppu__stat">
                        <div class="why-choose-ppu__stat-val">1000+</div>
                        <div class="why-choose-ppu__stat-text">Реализованных объектов</div>
                    </div>
                    <div class="why-choose-ppu__stat">
                        <div class="why-choose-ppu__stat-val">300 000 м²</div>
                        <div class="why-choose-ppu__stat-text">Выполненных работ</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta notopadding mgtop-15" id="discuss">
	<div class="discusscontainer">
    <div class="container">
        <div class="cta__inner">
            <div class="cta__text">
                <h2 class="cta__title">Передайте ТЗ<br>на геологические изыскания</h2>
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
<?php get_footer(); 