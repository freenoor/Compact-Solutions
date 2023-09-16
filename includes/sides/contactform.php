<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
        <div class="leftside col-lg-6">
            <div class="upp">
            <div class="title">
                <h1><?php echo ( get_field('group_contact', 5)['title-cu'] );?></h1>
                <h2><?php echo ( get_field('group_contact', 5)['subtitle-cu'] );?></h2>
            </div>  
            <div class="contact">
                <a href="tel:<?php echo ( get_field('group_contact', 5)['phone-number-all'] );?>"><?php echo ( get_field('group_contact', 5)['phone-number'] );?></a> 
                <a href="mailto:<?php echo ( get_field('group_contact', 5)['mailus'] );?>"><?php echo ( get_field('group_contact', 5)['mailus'] );?></a>
            </div>    
            </div>
            <div class="downside-partners d-none-mobile">
                <ul>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_one'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_two'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_three'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_four'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_five'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_six'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_seven'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_eight'] );?>" alt=""></li>
                </ul>
            </div> 

        </div>
        <div class="rightside col-lg-6">
            <div class="contact-form-1">
                <?php if(is_active_sidebar('contactform-1') ) { ?>
                    <ul>
                    <?php dynamic_sidebar('contactform-1');?>
                    </ul>
                <?php } ?>
                </div>
            </div>

            <div class="downside-partners d-none-desktop">
                <ul>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_one'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_two'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_three'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_four'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_five'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_six'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_seven'] );?>" alt=""></li>
                    <li><img src="<?php echo ( get_field('group_banner', 5)['partner_eight'] );?>" alt=""></li>
                </ul>
            </div> 
        </div>
    </div>
</section>