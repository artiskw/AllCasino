<footer>
    <?php $footer = get_field('footer', 363);?>
    <div class="footer-container">
        <div class="icon-menu-terms-container">
            <div class="icon-container">
                <?php foreach ($footer['icons'] as $icons) : ?>
                    <a href="<?php echo $icons['link']; ?>" target="_blank">
                        <?php echo $icons['icon']; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="menu">
                <?php echo wp_nav_menu(array('menu' => 'Footer menu')); ?>
            </div>
            <div class="terms-text">
                <p><?php echo $footer['copyright']; ?></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>




