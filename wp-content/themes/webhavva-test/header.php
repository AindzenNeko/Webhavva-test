<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webhavva-test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="wrapper site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'webhavva-test' ); ?></a>

<header id="masthead" class="header site-header">
  <div class="header__container">
		<a href="#" class="header__logo logo">
			<img src="<?php the_field('header_logo', 'option') ?>" alt="Studio Copilot logo">
		</a>
		<?php if(have_rows('header_menu', 'option') || have_rows('header_button_settings', 'option') || have_rows('header_link_settings', 'option')) :?>
		<nav class="header__menu menu">
			<?php if(have_rows('header_menu', 'option')) : ?>
			<ul class="menu__list">
				<?php while(have_rows('header_menu', 'option')) : the_row() ?>
				<li class="menu__item"><a href="#" class="menu__link"><?php the_sub_field('menu_item_name') ?></a></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<?php if(have_rows('header_button_settings') || have_rows('header_link_settings')) : ?>
			<div class="header__actions">
				<?php if(have_rows('header_button_settings', 'option')) : ?>
					<?php while(have_rows('header_button_settings', 'option')) : the_row() ?>
					<a href="<?php the_sub_field('header_button_url', 'option') ?>" class="actions__call-button"><?php the_sub_field('header_button_text', 'option') ?></a>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if(have_rows('header_link_settings', 'option')) : ?>
					<?php while(have_rows('header_link_settings', 'option')) : the_row() ?>
					<a href="<?php the_sub_field('header_link_url', 'option') ?>" class="actions__contact">
						<?php the_sub_field('header_link_text', 'option') ?>
						<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.177 4.8217C11.3676 4.63108 11.3676 4.32204 11.177 4.13143L8.07076 1.02521C7.88015 0.834594 7.5711 0.834594 7.38049 1.02521C7.18988 1.21582 7.18988 1.52487 7.38049 1.71548L10.1416 4.47656L7.38049 7.23765C7.18988 7.42826 7.18988 7.7373 7.38049 7.92792C7.5711 8.11853 7.88015 8.11853 8.07076 7.92792L11.177 4.8217ZM0.09375 4.96466L10.8318 4.96466L10.8318 3.98847L0.09375 3.98847L0.09375 4.96466Z" fill="#181818"/>
						</svg>
					</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</nav>
		<?php endif; ?>
		<?php if(have_rows('header_button_settings', 'option') || have_rows('header_link_settings', 'option')) : ?>
			<div class="header__actions">
				<?php if(have_rows('header_button_settings', 'option')) : ?>
					<?php while(have_rows('header_button_settings', 'option')) : the_row() ?>
					<a href="<?php the_sub_field('header_button_url', 'option') ?>" class="actions__call-button"><?php the_sub_field('header_button_text', 'option') ?></a>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if(have_rows('header_link_settings', 'option')) : ?>
					<?php while(have_rows('header_link_settings', 'option')) : the_row() ?>
					<a href="<?php the_sub_field('header_link_url', 'option') ?>" class="actions__contact">
						<?php the_sub_field('header_link_text', 'option') ?>
						<svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.177 4.8217C11.3676 4.63108 11.3676 4.32204 11.177 4.13143L8.07076 1.02521C7.88015 0.834594 7.5711 0.834594 7.38049 1.02521C7.18988 1.21582 7.18988 1.52487 7.38049 1.71548L10.1416 4.47656L7.38049 7.23765C7.18988 7.42826 7.18988 7.7373 7.38049 7.92792C7.5711 8.11853 7.88015 8.11853 8.07076 7.92792L11.177 4.8217ZM0.09375 4.96466L10.8318 4.96466L10.8318 3.98847L0.09375 3.98847L0.09375 4.96466Z" fill="#181818"/>
						</svg>
					</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		<button class="header__burger icon-menu">
			<span></span>
		</button>
  </div>
</header>
