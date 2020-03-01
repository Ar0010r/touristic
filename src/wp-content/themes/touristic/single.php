<?php get_header() ?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
                    <?php if (get_post_type() == 'useful_information') {
                    echo '1111100';
                } ?>
                    <div class="article-title title-page">
                        <?php the_title() ?>

                    </div>
                    <div class="article-image">
                        <!--<img src="img/post-image.jpg" alt="Image поста">-->
                        <?php the_post_thumbnail() ?>
                    </div>
                    <div class="article-info">
                        <div class="post-date"><?php the_date() ?></div>
                    </div>
                    <div class="article-text">
                        <p class=""><?php the_content() ?></p>
                    </div>
                <?php endwhile;
            endif; ?>
            <?php //var_dump(get_previous_post()) ?>
            <div class="article-pagination">
                <?php if (get_previous_post()->ID != null) : ?>
                    <div class="article-pagination__block pagination-prev-left"><a
                                href="<?php echo get_permalink(get_adjacent_post(false, '', true)->ID) ?>"
                                class="article-pagination__link"><i
                                    class="icon icon-angle-double-left"></i>Предыдущая статья</a>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="img/1.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#"
                                                                      class="post-date"><?php echo mysql2date('d.m.Y',
                                            get_previous_post()->post_date, false) ?></a>
                                </div>
                                <div class="preview-article__text"><?php echo get_the_title(get_previous_post()) ?></div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="article-pagination__block pagination-prev-left"><div
                                 class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Нет
                            предыдущих статей</div>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="img/1.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#"
                                                                      class="post-date"></a>
                                </div>
                                <div class="preview-article__text"><?php echo 'Читайте новые' ?></div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
                <?php if (get_next_post()->ID != null) : ?>
                    <div class="article-pagination__block pagination-prev-right">
                        <a href="<?php echo get_permalink(get_adjacent_post(false, '', false)->ID) ?>"
                           class="article-pagination__link">
                            Сдедующая статья<i class="icon icon-angle-double-right"></i></a>
                        <div class="wrap-pagination-preview pagination-prev-right">
                            <div class="preview-article__img"><img src="img/2.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#"
                                                                      class="post-date"><?php echo mysql2date('d.m.Y',
                                            get_next_post()->post_date, false) ?></a>
                                </div>
                                <div class="preview-article__text"><?php echo get_the_title(get_next_post()) ?></div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="article-pagination__block pagination-prev-left"><div
                                href="" class="article-pagination__link"><i class="icon icon-angle-double-left"></i>Нет
                            новых статей</div>
                        <div class="wrap-pagination-preview pagination-prev-left">
                            <div class="preview-article__img"><img src="img/1.jpg" class="preview-article__image"></div>
                            <div class="preview-article__content">
                                <div class="preview-article__info"><a href="#"
                                                                      class="post-date"></a>
                                </div>
                                <div class="preview-article__text"><?php echo 'Читайте старые' ?></div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
        <!-- sidebar-->
        <div class="sidebar">
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Теги</div>
                <div class="sidebar-item__content">
                    <ul class="tags-list">
                        <?php the_touristic_tags() ?>

                    </ul>
                </div>
            </div>
            <div class="sidebar__sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="category-list">
                        <?php $categories = get_categories();
                        foreach ($categories as $category) :?>
                            <li class="category-list__item">
                                <a href="<?php echo get_term_link($category) ?>" class="category-list__item__link">
                                    <?php echo $category->name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
