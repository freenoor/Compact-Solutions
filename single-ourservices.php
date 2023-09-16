<?php
include("includes/headers/standard.php"); 
?>

<main id="primary" class="site-main single-page-ourservices">
	
	<div class="single-post-s">
		<div class="container">
			<div class="row">
				<div class="leftside col-lg-6">
					<div class="inn">
						<div class="img" style="
							<?php
							$thumbnail_url = get_the_post_thumbnail_url();
							$background_style = '';

							if (empty($thumbnail_url)) {
								$background_style = "background-image: url('" . get_template_directory_uri() . "/src/img/defaultwhiteimg.png'); background-size: cover; background-position: center;";
							}

							echo $background_style;
							?>
						">
							<img src="<?php echo esc_url($thumbnail_url); ?>" alt="" onerror="this.style.display='none'"/>
						</div>

						<div class="extra-img">
							<div class="box">
								<div class="inn">
									<div class="img-small" style="
										<?php
										$extra_image_one = get_field('group_post')['extraimage-one1'];
										$background_style = '';

										if (empty($extra_image_one)) {
											$background_style = "background-image: url('" . get_template_directory_uri() . "/src/img/defaultwhiteimg.png'); background-size: cover; background-position: center;";
										}

										echo $background_style;
										?>
									">
										<img src="<?php echo esc_url($extra_image_one); ?>" alt="" onerror="this.style.display='none'"/>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="inn">
									<div class="img-small" style="
										<?php
										$extra_image_two = get_field('group_post')['extraimage-two2'];
										$background_style = '';

										if (empty($extra_image_two)) {
											$background_style = "background-image: url('" . get_template_directory_uri() . "/src/img/defaultwhiteimg.png'); background-size: cover; background-position: center;";
										}

										echo $background_style;
										?>
									">
										<img src="<?php echo esc_url($extra_image_two); ?>" alt="" onerror="this.style.display='none'"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="rightside col-lg-6">
					<div class="content">
					<div class="upside">
						<h1><?php the_title(); ?></h1>
						<div class="description"><?php the_content(); ?></div>
					</div>
					<div class="downside">
						<ul>
							<?php if ( ! empty( get_field('group_post')['line-one1'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['line-one1'] );?></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['line-two2'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['line-two2'] );?></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['line-three3'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['line-three3'] );?></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['line-four4'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['line-four4'] );?></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['line-five5'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['line-five5'] );?></li>
							<?php endif; ?>
						</ul>
					</div>

				</div>
			</div>
			<?php if (
			!empty(get_field('group_post')['detail_one']) ||
			!empty(get_field('group_post')['detail_two']) ||
			!empty(get_field('group_post')['detail_three']) ||
			!empty(get_field('group_post')['detail_four']) ||
			!empty(get_field('group_post')['detail_five']) ||
			!empty(get_field('group_post')['detail_six']) ||
			!empty(get_field('group_post')['detail_seven']) ||
			!empty(get_field('group_post')['detail_eight'])
			) : ?>
			<div class="bottom col-lg-12">
				<div class="details">
					<div class="title">
						<h1><?php echo (get_field('group_post')['title-sec']); ?></h1>
					</div>
					<div class="content">
						<ul>
							<?php if (!empty(get_field('group_post')['detail_one'])) : ?>
								<li><?php echo (get_field('group_post')['detail_one']); ?><span><?php echo (get_field('group_post')['nr_one']); ?></span></li>
							<?php endif; ?>

							<?php if (!empty(get_field('group_post')['detail_two'])) : ?>
								<li><?php echo (get_field('group_post')['detail_two']); ?><span><?php echo (get_field('group_post')['nr_two']); ?></span></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['detail_three'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['detail_three'] );?><span><?php echo ( get_field('group_post')['nr_three'] );?></span></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['detail_four'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['detail_four'] );?><span><?php echo ( get_field('group_post')['nr_four'] );?></span></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['detail_five'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['detail_five'] );?><span><?php echo ( get_field('group_post')['nr_five'] );?></span></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['detail_six'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['detail_six'] );?><span><?php echo ( get_field('group_post')['nr_six'] );?></span></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['detail_seven'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['detail_seven'] );?><span><?php echo ( get_field('group_post')['nr_seven'] );?></span></li>
							<?php endif; ?>

							<?php if ( ! empty( get_field('group_post')['detail_eight'] ) ) : ?>
								<li><?php echo ( get_field('group_post')['detail_eight'] );?><span><?php echo ( get_field('group_post')['nr_eight'] );?></span></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<?php endif; ?>	
			</div>
		</div>
	</div>

	<div class="contact-form-single">
		<?php include("includes/sides/contactform.php"); ?>
	</div>

</main><!-- #main -->

<?php include("includes/footers/demo2.php");  ?>