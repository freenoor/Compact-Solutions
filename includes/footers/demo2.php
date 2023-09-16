<?php
/**
 * @package Standard
 */
?>

<footer id="colophon" class="site-footer">
    <div class="cols">
        <div class="container" id="foooter">
            <div class="row">
                <div class="col-lg-5 footer-1">
                    <a class="logo_header" aria-label="logo" href="<?php echo esc_url(home_url('/')); ?>" alt="logo">
                        <ul>
                            <li>
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/src/img/black-logo.svg" alt="logo">
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="col-lg-2 footer-2">
                    <ul>
                    <?php dynamic_sidebar('footer-2');?>
                    </ul>
                </div>
                <div class="col-lg-2 footer-3">
                    <ul>
                    <?php dynamic_sidebar('footer-3');?>
                    </ul>
                </div>
                <div class="col-lg-3 footer-4">
                    <ul>
                    <?php dynamic_sidebar('footer-4');?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
</footer><!-- #colophon -->


</div><!-- #page -->


<?php wp_footer(); ?>
</body>

</html>