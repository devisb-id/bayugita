<?php
/**
 * Layout: split_content — 2-col image+text, optional accordion / icon list.
 *
 * @package Bayugita
 */

$layout    = get_sub_field( 'layout_selection' ); // image_left | image_right | text_only
$image     = get_sub_field( 'main_image' );
$heading   = get_sub_field( 'heading_text' );
$body      = get_sub_field( 'body' );
$extra     = get_sub_field( 'additional_content_type' ); // none | accordion | icon_list
$buttons   = get_sub_field( 'buttons' );

$reverse = ( 'image_right' === $layout );
$text_only = ( 'text_only' === $layout );
?>
<section<?php echo bayugita_section_atts( 'mt-16 md:mt-20 xl:mt-28' ); // phpcs:ignore ?> data-aos="fade-up">
	<div class="mx-auto w-full max-w-6xl px-6">
		<?php if ( $text_only ) : ?>
			<div class="mx-auto max-w-4xl">
				<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
				<div class="mt-6 leading-relaxed"><?php echo wp_kses_post( $body ); ?></div>
			</div>
		<?php else : ?>
			<div class="grid grid-cols-1 items-stretch gap-10 md:grid-cols-2 md:gap-12">
				<div class="min-h-[28rem] overflow-hidden md:min-h-[40rem] <?php echo $reverse ? 'md:order-last' : ''; ?>">
					<?php bayugita_the_image( $image, 'parallax w-full object-cover' ); ?>
				</div>
				<div class="flex flex-col justify-center py-4 md:py-8">
					<?php bayugita_the_heading( $heading, get_sub_field( 'heading_tag' ), 'font-playfair' ); ?>
					<div class="mt-6 leading-relaxed"><?php echo wp_kses_post( $body ); ?></div>

					<?php if ( 'accordion' === $extra && have_rows( 'accordions' ) ) : ?>
						<div class="mt-8" data-accordion-single>
							<?php while ( have_rows( 'accordions' ) ) : the_row(); ?>
								<div class="accordion-item mb-4 border-b border-gray-200 pb-4">
									<div class="accordion-trigger flex cursor-pointer items-center justify-between gap-4">
										<h3 class="!text-lg"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
										<span class="btn-primary !p-2"><iconify-icon icon="ph:caret-down"></iconify-icon></span>
									</div>
									<div class="accordion-slide"><div class="pt-4 leading-relaxed"><?php echo wp_kses_post( get_sub_field( 'content' ) ); ?></div></div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php if ( 'icon_list' === $extra && have_rows( 'icon_list' ) ) : ?>
						<div class="mt-8 flex flex-col gap-5">
							<?php while ( have_rows( 'icon_list' ) ) : the_row(); ?>
								<div class="flex items-start gap-4">
									<div class="bg-brand-50 flex size-12 shrink-0 items-center justify-center">
										<iconify-icon icon="<?php echo esc_attr( get_sub_field( 'icon' ) ); ?>" class="!text-brand !text-xl"></iconify-icon>
									</div>
									<div>
										<h3 class="!text-base"><?php echo esc_html( get_sub_field( 'title' ) ); ?></h3>
										<p class="mt-1 leading-relaxed"><?php echo esc_html( get_sub_field( 'text' ) ); ?></p>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<?php if ( $buttons ) : ?>
						<div class="mt-8 flex flex-wrap items-center gap-4">
							<?php foreach ( $buttons as $b ) { bayugita_render_button( $b['button'] ?? $b, 'btn-primary', 'ph:arrow-right' ); } ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
