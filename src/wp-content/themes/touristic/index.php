<?php get_header() ?>
<!-- header_end-->
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Последние новости и акции из мира туризма</h1>
            <ul class="posts-list">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>

                        <li class="post-wrap">
                            <div class="post-thumbnail">
                                <!--<img src="img/post_thumb/thumb_1.jpg" alt="Image поста" class="post-thumbnail__image">-->
                                <?php echo get_the_post_thumbnail(get_the_ID(),'medium') ?>
                                <?php //the_post_thumbnail('post-thumbnail', array('class' => 'post-thumbnail__image')); ?>
                            </div>
                            <div class="post-content">
                                <div class="post-content__post-info">
                                    <div class="post-date"><?php the_date() ?></div>
                                </div>
                                <div class="post-content__post-text">
                                    <div class="post-title">
                                        <?php the_title() ?>
                                    </div>
                                    <p>
                                        <?php the_excerpt() ?>
                                    </p>
                                </div>
                                <div class="post-content__post-control"><a
                                            href="<?php the_permalink() ?>"
                                            class="btn-read-post">Читать далее >></a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>

            <?php the_touristic_pagination() ?>
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
