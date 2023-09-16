
<?php /* Template Name: Home */ 
include("includes/headers/standard.php"); 
?>
<div class="page-home">

<section class="desk-height banner__section">
    <div class="container">
        <div class="row">
            <div class="lefts col-lg-6">
                <h2><?php echo ( get_field('group_banner')['titlebanner'] );?></h2>
                <p class="subtitle"><?php echo ( get_field('group_banner')['subbanner'] );?></p>
                <div class="scroll-button">
                <?php if(is_active_sidebar('header-widget') ) { ?>
                <ul>
                <?php dynamic_sidebar('header-widget');?>
                </ul>
                <?php } ?>
                </div>  
            </div>
            <div class="rights col-lg-6">
            <div class="upside" id="counter-section">
                <div class="one">
                    <h1 class="numbers"><?php echo ( get_field('group_banner')['counter-one-nr'] );?></h1>
                    <span class="description"><?php echo ( get_field('group_banner')['counter-one'] );?></span>
                </div>
                <div class="two">
                    <h1 class="numbers"><?php echo ( get_field('group_banner')['counter-one-nr-two'] );?></h1>
                    <span class="description"><?php echo ( get_field('group_banner')['counter-one-two'] );?></span>
                </div>
                <div class="three">
                    <h1 class="numbers"><?php echo ( get_field('group_banner')['counter-one-nr-three'] );?></h1>
                    <span class="description"><?php echo ( get_field('group_banner')['counter-one-three'] );?></span>
                </div>
            </div>
            <div class="downside-partners">
                <ul>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_one'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_two'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_three'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_four'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_five'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_six'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_seven'] );?>" alt="img"></li>
                    <li><img src="<?php echo ( get_field('group_banner')['partner_eight'] );?>" alt="img"></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>

    <section class="systems__section" id="facade-system">
        <div class="container">
            <div class="title">
                <h1><?php the_field('system-title-section'); ?></h1>
                <h2><?php the_field('system-sub-section'); ?></h2>
            </div>

        <div class="swiper mySwiper mySwiper_systems">
            <div class="swiper-wrapper">

            <?php
                $args = array(
                'post_type' => 'ourservices',
                'posts_per_page' => '-1',
                'order' => 'ASC',
                'post_status' => 'publish',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?> 
                <div class="swiper-slide">
                    
                    <div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #F0F2F6;' : ''; ?>">
                    <img src="<?php the_post_thumbnail_url();?>" alt="abc" onerror="this.style.display='none'"/>
                    <a href="<?php the_permalink(); ?>"><?php the_field('learn-more-button'); ?></a>
                    </div>
                    
                </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<div class="first-fast-call">
<?php include("includes/sections/fast-call.php"); ?>
</div>

<section class="blogs__section">
    <div class="container">
        <div class="title">
            <h1><?php the_field('blog-title-section'); ?></h1>
        </div>
    </div>
    
    <div class="container">
        <div class="swiper mySwiper mySwiper_blogs">
            <div class="swiper-wrapper slider">
                <?php 
                $args = array(
                'posts_per_page' => -1,
                'order' => 'ASC',
                ); 
                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?> 
                <div class="swiper-slide inner">
                <a href="<?php the_permalink(); ?>">
                    <div class="inn">
                    <div class="img" style="
                        <?php
                        $thumbnail_url = the_post_thumbnail_url();
                        $background_style = '';
                        if (empty($thumbnail_url)) {
                        $background_style = "background-image: url('" . get_bloginfo('template_directory') . "/src/img/defaultimg.png'); background-size: cover; background-position: center;";
                        }
                        echo $background_style;
                        ?>
                    ">
                    <img src="<?php the_post_thumbnail_url();?>" alt="" onerror="this.style.display='none'"/>
                    </div>
                    <div class="content">
                    <h1><?php the_title(); ?></h1>
                    <div class="description"><?php the_content(); ?></div>
                    </div>
                    </div>
                    </a>
                </div>
                <?php
                endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-arrows">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
        </div>
    </div>
</section>

<div class="second-fast-call">
<?php include("includes/sections/fast-call.php"); ?>
</div>


<section class="whyus__section" id="about">
    <div class="container">
    <div class="title">
            <h1><?php the_field('whyus-title-section'); ?></h1>
        </div>
        <div class="content">
        <div class="row">
                <div class="box col-lg-3">
                    <div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #F0F2F6;' : ''; ?>">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values'] );?>" alt="box" onerror="this.style.display='none'"/>
                    </div>
                    <h2><?php echo ( get_field('group_fourth')['title'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle'] );?></p>
                </div>
                <div class="box col-lg-3">
                    <div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #F0F2F6;' : ''; ?>">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values2'] );?>" alt="box" onerror="this.style.display='none'"/>
                    </div>
                    <h2><?php echo ( get_field('group_fourth')['title2'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle2'] );?></p>
                </div>
                <div class="box col-lg-3">
                    <div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #F0F2F6;' : ''; ?>">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values3'] );?>" alt="box" onerror="this.style.display='none'"/>
                    </div>
                    <h2><?php echo ( get_field('group_fourth')['title3'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle3'] );?></p>
                </div>
                <div class="box col-lg-3">
                    <div class="img" style="<?php echo (empty(the_post_thumbnail_url())) ? 'background-color: #F0F2F6;' : ''; ?>">
                    <img src="<?php echo ( get_field('group_fourth')['imgone-values4'] );?>" alt="box" onerror="this.style.display='none'"/>
                    </div>
                    <h2><?php echo ( get_field('group_fourth')['title4'] );?></h2>
                    <p><?php echo ( get_field('group_fourth')['subtitle4'] );?></p>
                </div>
        </div>
        </div>
    </div>
</section>

<section class="us__section">
    <div class="container">
        <div class="upside">
            <div class="lefts col-lg-7">
            <h1><?php the_field('us_section-leftss'); ?></h1>
            </div>
            <div class="rights col-lg-5">
            <h2><?php the_field('us_section-rights'); ?></h2>
            </div>
        </div>
        <div class="downside">
            <div class="lefts col-lg-7">
                <div class="img">
                    <img src="<?php the_field('image-left');?>" alt="">
                </div>
            </div>
            <div class="rights col-lg-5">
                <div class="img">
                    <img src="<?php the_field('image-right');?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="third-fast-call">
<?php include("includes/sections/fast-call.php"); ?>
</div>

<div class="contact-form-home">
<?php include("includes/sides/contactform.php"); ?>
</div>

</div>
<?php include("includes/footers/demo2.php");  ?>