<?php get_header() ?>
    <div class="main-content">
        <div class="content-wrapper">
            <div class="content" style="max-width: 100%">
                <?php

                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <h1 class="title-page"><?php the_title(); ?></h1>
                        <p style="max-width: 100%"><?php the_content(); ?></p>
                    <?php endwhile;
                endif; ?>


                <div class="page-navigation">
                    <?php if (get_previous_post()->ID != null) : ?>
                        <div class="page-navigation-wrap"><a
                                    href="<?php echo get_permalink(get_adjacent_post(false, '', false)->ID) ?>"
                                    class="page-navigation__prev-page"><i
                                        class="icon icon-angle-double-left"></i>Предыдущая статья</a></div>
                    <?php else : ?>
                        <div class="page-navigation-wrap"><a href="#" class="page-navigation__prev-page">Нет предыдущих
                                статей<i
                                        class="icon icon-angle-double-left"></i></a></div>
                    <?php endif ?>
                    <?php if (get_next_post()->ID != null) : ?>
                        <div class="page-navigation-wrap"><a
                                    href="<?php echo get_permalink(get_adjacent_post(false, '', false)->ID) ?>"
                                    class="page-navigation__next-page">Сдедующая статья<i
                                        class="icon icon-angle-double-right"></i></a></div>
                    <?php else : ?>
                    <div class="page-navigation-wrap"><a href="#" class="page-navigation__next-page">Нет следующих
                            статей<i
                                    class="icon icon-angle-double-right"></i></a></div>
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