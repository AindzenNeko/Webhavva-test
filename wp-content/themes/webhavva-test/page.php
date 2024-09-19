<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webhavva-test
 */

get_header();
?>

<main id="primary" class="page site-main">
	<div data-observ></div>
	<?php if(is_front_page()) {?>
			<section class="hero__section">
				<div class="hero__container">
					<h1 class="hero__title"><?php the_field('hero_section_title')?></h1>
					<h2 class="hero__subtitle"><?php the_field('hero_section_subtitle')?></h2>
					<a href="#" class="primary-btn hero__button"><?php the_field('hero_section_button_text')?></a>
					<a href="<?php echo get_field('header_button_settings')['header_button_url']?>" class="hero__book-a-call">
						<?php echo get_field('header_button_settings')['header_button_text']?>
						<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.177 4.8217C11.3676 4.63108 11.3676 4.32204 11.177 4.13143L8.07076 1.02521C7.88015 0.834594 7.5711 0.834594 7.38049 1.02521C7.18988 1.21582 7.18988 1.52487 7.38049 1.71548L10.1416 4.47656L7.38049 7.23765C7.18988 7.42826 7.18988 7.7373 7.38049 7.92792C7.5711 8.11853 7.88015 8.11853 8.07076 7.92792L11.177 4.8217ZM0.09375 4.96466L10.8318 4.96466L10.8318 3.98847L0.09375 3.98847L0.09375 4.96466Z" fill="#181818"/>
						</svg>
					</a>
				</div>
			</section>
          	<section class="plans__section">
				<div class="plans__container">
					<div class="plans__header">
						<div class="plans__number"><?php the_field('plans_section_number')?></div>
						<h1 class="plans__title"><?php the_field('plans_section_title')?></h1>
						<div class="plans__name">
							<img src="<?php echo get_template_directory_uri() . '/source/images/Dot-Star.svg'?>" alt="Star">
							<?php the_field('plans_section_name')?>
						</div>
					</div>
					<?php if(have_rows('plans_section_tabs')) : ?>
					<div class="plans__tabs tabs" data-tabs="tabs-plans">
						<div class="plans__tabs-nav tabs__nav">
							<?php while(have_rows('plans_section_tabs')) : the_row() ?>
							<button class="plans__tabs-trigger tabs__trigger" type="button">
								<?php the_sub_field('plans_section_tab_name') ?>
								<?php if(get_sub_field('plans_section_tab_sale')) : ?>
								<span class="plans__tabs-sale"><?php the_sub_field('plans_section_tab_sale') ?></span>
								<?php endif; ?>
							</button>
							<?php endwhile; ?>
						</div>
					
						<div class="plans__tabs-content tabs__content">
							<?php while(have_rows('plans_section_tabs')) : the_row();
								$index = 1;
							?>
							<div class="plans__tabs-panel tabs__panel">
								<div class="plans__tabs-slider plans__tabs-slider swiper" data-slider="<?php 'slide-' . $index ?>">
									<div class="plans__tabs-slider-wrapper swiper-wrapper">
										<?php while(have_rows('plans_section_tab_slider')) : the_row() ?>
										<div class="plans__tabs-slider-slide swiper-slide">
											<div class="plans_tabs-plan">
												<div class="plan__wrapper">
													<?php if(get_sub_field('plans_section_tab_label')) : ?>
													<div class="plan__label">
														<img src="<?php echo get_template_directory_uri() . '/source/images/Dot-Star-White.svg'?>" alt="Dot-Star-White.svg">
														<?php the_sub_field('plans_section_tab_label') ?>
														<img src="<?php echo get_template_directory_uri() . '/source/images/Dot-Star-White.svg'?>" alt="Dot-Star-White.svg">
													</div>
													<?php endif; ?>
													<h2 class="plan__title"><?php the_sub_field('plans_section_slide_title') ?></h2>
													<div class="plan__price">
														<span>$</span>
														<?php the_sub_field('plans_section_slide_price') ?>
														<span>/<?php the_sub_field('plans_section_date') ?></span>
													</div>
													<h3 class="plan__subtitle"><?php the_sub_field('plans_section_subtitle') ?></h3>
													<a href="<?php the_sub_field('plans_section_plan_url') ?>" class="primary-btn plan__button">
														Get started
														<svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M10.741 4.35355C10.9362 4.15829 10.9362 3.84171 10.741 3.64645L7.55898 0.464467C7.36372 0.269205 7.04714 0.269205 6.85188 0.464467C6.65661 0.659729 6.65661 0.976311 6.85188 1.17157L9.6803 4L6.85188 6.82843C6.65661 7.02369 6.65661 7.34027 6.85187 7.53553C7.04714 7.7308 7.36372 7.7308 7.55898 7.53553L10.741 4.35355ZM-4.37114e-08 4.5L10.3874 4.5L10.3874 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="white"/>
														</svg>
													</a>
													<?php if(have_rows('plans_section_slide_list')) : ?>
													<ul class="plan__list">
														<?php while(have_rows('plans_section_slide_list')) : the_row() ?>
														<li class="plan__item 
															<?php echo (get_sub_field('plans_section_slide_list_item_included')) 
																? 'plan__item-included' 
																: 'plan__item-not-included' 
															?>
														">
															<?php the_sub_field('plans_section_slide_list_item_text') ?>
														</li>
														<!-- <li class="plan__item plan__item-not-included plan__item-included">DFM</li> -->
														<?php endwhile; ?>
													</ul>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<?php endwhile; ?>
									</div>
								</div>

								<?php if(have_rows('plans_section_enterprise')) : ?>
								<div class="plans__tabs-enterprise-plan">
									<?php while(have_rows('plans_section_enterprise')) : the_row() ?>
									<h2 class="enterprise-plan__title">Enterprise</h2>
									<div class="enterprise-plan__text">
										<span><?php the_sub_field('plans_section_enterprise_title')?></span>
										<span><?php the_sub_field('plans_section_enterprise_subtitle')?></span>
									</div>
									<a href="#" class="primary-btn enterprise-plan__button">
										Let’s talk
										<svg width="11" height="8" viewBox="0 0 11 8" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M10.741 4.35355C10.9362 4.15829 10.9362 3.84171 10.741 3.64645L7.55898 0.464467C7.36372 0.269205 7.04714 0.269205 6.85188 0.464467C6.65661 0.659729 6.65661 0.976311 6.85188 1.17157L9.6803 4L6.85188 6.82843C6.65661 7.02369 6.65661 7.34027 6.85187 7.53553C7.04714 7.7308 7.36372 7.7308 7.55898 7.53553L10.741 4.35355ZM-4.37114e-08 4.5L10.3874 4.5L10.3874 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z" fill="white"/>
										</svg>
									</a>
									<?php endwhile; ?>
								</div>
								<?php endif; ?>
							</div>
							<?php 
								$index++; 
								endwhile; 
							?>
						</div>
						
					</div>
					<?php endif; ?>
				</div>
			</section>
		<?php } ?>
	</main><!-- #main -->

<?php
get_footer();
