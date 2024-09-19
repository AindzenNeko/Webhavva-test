<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package webhavva-test
 */

?>

<footer id="colophon" class="footer site-footer">
	<div class="footer__container">
		<?php if(get_field('footer_title', 'option')) : ?>
		<h2 class="footer__title"><?php the_field('footer_title', 'option')?></h2>
		<?php endif; ?>
		<div class="footer__cells">
			<form action="" class="cells__email-form">
				<input type="email" placeholder="Enter email adress*" name="" id="">
				<label class="checkbox">
					<input class="checkbox__input" type="checkbox" name="subscribe">
					<span class="checkbox__box"></span>
					<span class="checkbox__text"><?php the_field('footer_checkbox_text', 'option')?></span>
					<span class="checkbox__text-short"><?php the_field('footer_checkbox_short_text', 'option')?></span>
				</label>
				<button type="submit">Contact me</button>
			</form>

			<?php if(have_rows('footer_socials', 'option')) : ?>
			<div class="cells__social">
				<?php while(have_rows('footer_socials', 'option')) : the_row() ?>
				<a href="<?php the_sub_field('footer_social_url') ?>" class="social__item">
					<img src="<?php the_sub_field('footer_social_icon') ?>" alt="icon">
				</a>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>

			<?php if(have_rows('footer_terms_privacy', 'option')) : ?>
			<div class="cells__terms-privacy">
				<?php while(have_rows('footer_terms_privacy', 'option')) : the_row() ?>
					<a href="<?php the_sub_field('footer_terms_url', 'option')?>"><?php the_sub_field('footer_terms_text', 'option')?></a>
					<a href="<?php the_sub_field('footer_privacy_url', 'option')?>"><?php the_sub_field('footer_privacy_text', 'option')?></a>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
			
			<?php if(have_rows('footer_menu', 'option') || have_rows('footer_logo', 'option') || have_rows('footer_small_logo', 'option')) : ?>
			<div class="cells__row">
				<?php if(have_rows('footer_menu', 'option')) :?>
				<ul class="cells__navigation">
					<?php while(have_rows('footer_menu', 'option')) : the_row() ?>
					<li class="cells__navigation-item"><a href="<?php the_sub_field('footer_menu_item_url', 'option') ?>"><?php the_sub_field('footer_menu_item_text', 'option') ?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
				<img class="cells__logo" src="<?php the_field('footer_logo', 'option')?>" alt="footer-logo">
				<img class="cells__logo-small" src="<?php the_field('footer_small_logo', 'option')?>" alt="footer-logo-small">
			</div>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
