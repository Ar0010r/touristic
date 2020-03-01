<footer class="main-footer">
    <div class="content-footer">
        <div class="bottom-menu">
            <?php $menu = wp_get_nav_menu_items('nav'); ?>
            <ul class="b-menu__list">
                <?php foreach ($menu as $page) : ?>
                    <li class="b-menu__list__item"><a href="<?php echo $page->url ?>"
                                                      class="b-menu__list__item__link"><?php echo $page->post_title ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="copyright-wrap">
            <div class="copyright-text">Туристик 2020</div>
        </div>
    </div>
</footer>
</div>
<!-- wrapper_end-->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>