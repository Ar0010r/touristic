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