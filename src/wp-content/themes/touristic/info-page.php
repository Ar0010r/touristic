<?php /* Template Name: info-page */ ?>
<?php get_header() ?>
    <div class="main-content">
    <div class="content-wrapper">
    <div class="content">
<?php

if (have_posts()) :
    while (have_posts()) : the_post();
echo "2222";
var_dump(the_post());

        if (get_post_type() == 'useful_information') {
            echo '11111';
        } ?>
    <?php endwhile;
endif; ?>
        <h1 class="title-page">Полезная информация</h1>
        <p><img src="http://placehold.it/380x300" alt="Image" class="alignleft">Например, рейсы с пересадками
            стоят дешевле, чем прямые рейсы. Однако, в отдельных случаях пересадка может длиться не час-два, а
            все 11 часов или даже сутки. То есть, вам придется дополнительный день провести в промежуточном
            аэропорту, а это очень вымотает. Следите, чтобы пересадка была не слишком короткой, но и не очень
            длинной, оптимально 2-3 часа.</p>
        <p>Например, рейсы с пересадками стоят дешевле, чем прямые рейсы. Однако, в отдельных случаях пересадка
            может длиться не час-два, а все 11 часов или даже сутки. То есть, вам придется дополнительный день
            провести в промежуточном аэропорту, а это очень вымотает. Следите, чтобы пересадка была не слишком
            короткой, но и не очень длинной, оптимально 2-3 часа.
        <div class="page-navigation">
            <div class="page-navigation-wrap"><a href="#" class="page-navigation__prev-page"><i
                            class="icon icon-angle-double-left"></i>Предыдущая статья</a></div>
            <div class="page-navigation-wrap"><a href="#" class="page-navigation__next-page">Сдедующая статья<i
                            class="icon icon-angle-double-right"></i></a></div>
        </div>
        </div>
        <!-- sidebar-->
        <div class="sidebar">
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Теги</div>
                <div class="sidebar-item__content">
                    <ul class="tags-list">
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">путешествия по
                                россии</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">турция</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">гоа</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">авиабилеты</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">отели</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">европа</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">азия</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">тайланд</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">хостелы</a></li>
                        <li class="tags-list__item"><a href="#" class="tags-list__item__link">шоппинг</a></li>
                    </ul>
                </div>
            </div>
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="category-list">
                        <li class="category-list__item"><a href="#" class="category-list__item__link">
                                Вылеты из
                                столиц</a>
                            <ul class="category-list__inner">
                                <li class="category-list__item"><a href="#"
                                                                   class="category-list__item__link">Москва</a></li>
                                <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a>
                                </li>
                            </ul>
                        </li>
                        <li class="category-list__item"><a href="#" class="category-list__item__link">
                                Вылеты из
                                регионов</a>
                            <ul class="category-list__inner">
                                <li class="category-list__item"><a href="#"
                                                                   class="category-list__item__link">Москва</a></li>
                                <li class="category-list__item"><a href="#" class="category-list__item__link">Санкт-Петербург</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php get_footer() ?>