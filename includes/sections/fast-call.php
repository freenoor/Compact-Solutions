<section class="fast__call-section">
    <div class="container">
        <div class="leftside">
            <div class="title">
            <h1><?php the_field('fast-call-title'); ?></h1>
            <h2><?php the_field('fast-call-sub'); ?></h2>
            </div>

            <div class="scroll-button">
            <?php if(is_active_sidebar('header-widget') ) { ?>
            <ul>
            <?php dynamic_sidebar('header-widget');?>
            </ul>
            <?php } ?>
            </div>  

        </div>
    </div>
</section>